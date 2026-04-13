<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPemesananObat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mObat');
	}

	public function index()
	{
		$data = array(
			'pemesanan' => $this->db->query("SELECT * FROM `obat_masuk`")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vPemesananObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function pesan()
	{
		$data = array(
			'obat' => $this->mObat->select()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vPesanObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function addtocart()
	{
		$id_obat = $this->input->post('obat');
		$query = $this->db->query("SELECT * FROM `obat` WHERE id_obat='" . $id_obat . "'")->row();

		$data = array(
			'id' => $id_obat,
			'name' => $query->nama_obat,
			'price' => $query->harga_perbox,
			'qty' => $this->input->post('qty')
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Obat berhasil masuk ke keranjang!');
		redirect('Backend/cPemesananObat/pesan');
	}
	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		$this->session->set_flashdata('success', 'Produk berhasil dihapus!');
		redirect('Backend/cPemesananObat/pesan');
	}
	public function order()
	{
		$data = array(
			'tgl_masuk' => date('Y-m-d'),
			'total_transaksi' => $this->cart->total()
		);
		$this->db->insert('obat_masuk', $data);

		//id_transaksi	
		$query = $this->db->query("SELECT MAX(id_obat_masuk) as id FROM `obat_masuk`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$dt = array(
				'id_obat_masuk' => $query->id,
				'id_obat' => $value['id'],
				'jumlah_masuk' => $value['qty']
			);
			$this->db->insert('detail_masuk', $dt);
		}
		$this->cart->destroy();
		$this->session->set_flashdata('success', 'Pesanan kepada supplier berhasil dikirim!');
		redirect('Backend/cPemesananObat');
	}
	public function detail($id_obat_masuk)
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `obat_masuk` WHERE obat_masuk.id_obat_masuk='" . $id_obat_masuk . "'")->row(),
			'obat' => $this->db->query("SELECT * FROM `obat_masuk` JOIN detail_masuk ON obat_masuk.id_obat_masuk=detail_masuk.id_obat_masuk JOIN obat ON obat.id_obat=detail_masuk.id_obat WHERE obat_masuk.id_obat_masuk='" . $id_obat_masuk . "'")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDetailPemesanan', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function kedaluarsa($id_obat_masuk)
	{
		$tt = $this->input->post('total');
		// echo $tt;
		for ($i = 1; $i <= $tt; $i++) {
			$id = $this->input->post('id' . $i);
			$dt_kedaluarsa = $this->input->post('dt' . $i);
			// echo $i . '<br>' . $id . '<br>';
			// echo $dt_kedaluarsa;
			$data = array('tgl_kedaluarsa' => $dt_kedaluarsa);
			// var_dump($data);
			$this->db->where('id_detail_masuk', $id);
			$this->db->update('detail_masuk', $data);
		}
		$data_masuk = array('status_masuk' => '1');
		$this->db->where('id_obat_masuk', $id_obat_masuk);
		$this->db->update('obat_masuk', $data_masuk);

		$this->session->set_flashdata('success', 'Data Kedaluarsa Obat berhasil disimpan!');
		redirect('Backend/cPemesananObat/detail/' . $id_obat_masuk);
	}
	public function konfirmasi($id_obat_masuk)
	{
		$data_masuk = array('status_masuk' => '2');
		$this->db->where('id_obat_masuk', $id_obat_masuk);
		$this->db->update('obat_masuk', $data_masuk);

		$this->session->set_flashdata('success', 'Pemesanan Obat berhasil dikonfirmasi!');
		redirect('Backend/cPemesananObat/detail/' . $id_obat_masuk);
	}
}

/* End of file Controllername.php */

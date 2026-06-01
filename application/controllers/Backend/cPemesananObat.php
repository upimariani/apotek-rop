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
			'pemesanan' => $this->db->query("SELECT * FROM `obat_masuk` JOIN supplier ON obat_masuk.id_supplier=supplier.id_supplier")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vPemesananObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function pesan()
	{
		$data = array(
			'dt_obat' => $this->db->query("SELECT * FROM `obat`")->result(),
			// 'obat' => $this->db->query("SELECT * FROM `obat` WHERE id_obat='" .  $id_obat . "'")->row()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vPesanObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function addtocart()
	{
		$id_obat = $this->input->post('obat');
		$query = $this->db
			->select('obat.*, supplier.nama_supplier')
			->from('obat')
			->join('supplier', 'supplier.id_supplier = obat.id_supplier')
			->where('id_obat', $id_obat)
			->get()
			->row();

		$data = array(
			'id' => $query->id_obat,
			'name' => $query->nama_obat,
			'price' => $query->harga_perbox,
			'qty' => $this->input->post('qty'),
			'options' => array(
				'id_supplier' => $query->id_supplier,
				'nama_supplier' => $query->nama_supplier
			)
		);

		$this->cart->insert($data);

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
		$group_supplier = [];

		// Kelompokkan item cart berdasarkan supplier
		foreach ($this->cart->contents() as $item) {
			$id_supplier = $item['options']['id_supplier'];
			$group_supplier[$id_supplier][] = $item;
		}

		// Simpan transaksi per supplier
		foreach ($group_supplier as $id_supplier => $items) {

			$total = 0;

			foreach ($items as $item) {
				$total += $item['subtotal'];
			}

			// Insert header transaksi
			$data = array(
				'id_supplier' => $id_supplier,
				'tgl_pesan' => date('Y-m-d'),
				'total_transaksi' => $total
			);

			$this->db->insert('obat_masuk', $data);

			$id_obat_masuk = $this->db->insert_id();

			// Insert detail transaksi
			foreach ($items as $value) {

				$dt = array(
					'id_obat_masuk' => $id_obat_masuk,
					'id_obat' => $value['id'],
					'jumlah_masuk' => $value['qty']
				);

				$this->db->insert('detail_masuk', $dt);
			}
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
		$data_masuk = array('status_masuk' => '2', 'tgl_masuk' => date('Y-m-d'));
		$this->db->where('id_obat_masuk', $id_obat_masuk);
		$this->db->update('obat_masuk', $data_masuk);


		$dt_masuk = $this->db->query("SELECT * FROM `obat_masuk` WHERE id_obat_masuk='" . $id_obat_masuk . "'")->row();
		$tgl1 = new DateTime($dt_masuk->tgl_pesan);
		$tgl2 = new DateTime($dt_masuk->masuk);

		$selisih = $tgl1->diff($tgl2);

		//update stok obat
		$data_masuk = $this->db->query("SELECT *, obat.id_obat FROM `obat_masuk` JOIN detail_masuk ON obat_masuk.id_obat_masuk=detail_masuk.id_obat_masuk JOIN obat ON obat.id_obat=detail_masuk.id_obat WHERE obat_masuk.id_obat_masuk='" . $id_obat_masuk . "'")->result();
		foreach ($data_masuk as $key => $value) {
			$qty = $value->jumlah_masuk * $value->sat_supplier;

			$dt_obat = $this->db->query("SELECT * FROM `obat` WHERE id_obat='" . $value->id_obat . "'")->row();
			$data = array(
				'stok' => $dt_obat->stok + $qty,
				'lead_time' => $selisih->days
			);
			$this->db->where('id_obat', $dt_obat->id_obat);
			$this->db->update('obat', $data);
		}



		$this->session->set_flashdata('success', 'Pemesanan Obat berhasil dikonfirmasi!');
		redirect('Backend/cPemesananObat/detail/' . $id_obat_masuk);
	}
}

/* End of file Controllername.php */

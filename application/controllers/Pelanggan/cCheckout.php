<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCheckout');
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function order()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tgl_keluar' => date('Y-m-d'),
			'total_keluar' => $this->input->post('total_pembayaran'),
			'pengiriman' => $this->input->post('alamat') . ' Kec.' . $this->input->post('kecamatan') . ' Kota/Kab.' . $this->input->post('kota') . ' Prov.' . $this->input->post('provinsi') . ' Expedisi.' . $this->input->post('expedisi') . ' ' . $this->input->post('paket'),
			'status' => '0'
		);
		$this->db->insert('obat_keluar', $data);

		//id_transaksi
		$query = $this->db->query("SELECT MAX(id_obat_keluar) as id FROM `obat_keluar`")->row();

		//input data detail
		foreach ($this->cart->contents() as $key => $value) {
			$dt = array(
				'id_obat_keluar' => $query->id,
				'id_obat' => $value['id'],
				'jumlah_keluar' => $value['qty']
			);
			$this->db->insert('detail_keluar', $dt);

			//mengurangi stok produk
			$dt_obat = $this->db->query("SELECT * FROM `obat` WHERE id_obat='" . $value['id'] . "'")->row();
			$stok_seb = $dt_obat->stok;
			$stok_set = $stok_seb - $value['qty'];

			$dt_stok = array(
				'stok' => $stok_set
			);
			$this->db->where('id_obat', $value['id']);
			$this->db->update('obat', $dt_stok);
		}
		$this->cart->destroy();
		redirect('Pelanggan/cPesananSaya');
	}
}

/* End of file cCheckout.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiObat extends CI_Controller
{

	public function index()
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `obat_keluar` JOIN pelanggan ON obat_keluar.id_pelanggan=pelanggan.id_pelanggan")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vTransaksiObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function detail($id_obat_keluar)
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `obat_keluar` JOIN pelanggan ON obat_keluar.id_pelanggan=obat_keluar.id_pelanggan WHERE obat_keluar.id_obat_keluar='" . $id_obat_keluar . "'")->row(),
			'obat' => $this->db->query("SELECT * FROM `obat_keluar` JOIN detail_keluar ON obat_keluar.id_obat_keluar=detail_keluar.id_obat_keluar JOIN obat ON obat.id_obat=detail_keluar.id_obat WHERE obat_keluar.id_obat_keluar='" . $id_obat_keluar . "'")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDetailTransaksi', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function konfirmasi($id_obat_keluar)
	{
		$data = array(
			'status' => '2'
		);
		$this->db->where('id_obat_keluar', $id_obat_keluar);
		$this->db->update('obat_keluar', $data);

		redirect('Backend/cAnalisis');
	}
}

/* End of file cTransaksiObat.php */

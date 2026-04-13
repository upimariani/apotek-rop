<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pesanan_saya' => $this->db->query("SELECT * FROM `obat_keluar` JOIN pelanggan ON obat_keluar.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "' ORDER BY tgl_keluar ASC")->result()
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vPesananSaya', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail($id_obat_keluar)
	{
		$data = array(
			'pesanan_saya' => $this->db->query("SELECT * FROM `obat_keluar` JOIN pelanggan ON obat_keluar.id_pelanggan=pelanggan.id_pelanggan WHERE id_obat_keluar='" . $id_obat_keluar . "'")->row(),
			'obat' => $this->db->query("SELECT * FROM `obat_keluar` JOIN detail_keluar ON obat_keluar.id_obat_keluar=detail_keluar.id_obat_keluar JOIN obat ON obat.id_obat=detail_keluar.id_obat WHERE obat_keluar.id_obat_keluar='" . $id_obat_keluar . "'")->result()
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailPesanan', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cPesananSaya.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mObat');
	}

	public function index()
	{
		$data = array(
			'obat' => $this->mObat->select()
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vProduk', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cProduk.php */

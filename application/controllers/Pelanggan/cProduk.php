<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mObat');
		$this->load->model('mProduk');
	}

	public function index()
	{
		$keyword = $this->input->get('keyword');

		if ($keyword) {
			$data['obat'] = $this->mProduk->search_obat($keyword);
		} else {
			$data['obat'] = $this->mProduk->get_all_produk();
		}
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vProduk', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_produk($id_produk)
	{
		$data = array(
			'obat' => $this->mObat->detail($id_produk)
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailProduk', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cProduk.php */

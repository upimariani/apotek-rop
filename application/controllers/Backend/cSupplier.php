<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSupplier extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSupplier');
	}

	public function index()
	{
		$data = array(
			'supplier' => $this->mSupplier->select()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vSupplier', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function create()
	{

		$data = array(
			'nama_supplier' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->mSupplier->create($data);
		$this->session->set_flashdata('success', 'Data Supplier Berhasil Disimpan!');
		redirect('Backend/cSupplier');
	}
	public function update($id)
	{
		$data = array(
			'nama_supplier' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->mSupplier->update($id, $data);
		$this->session->set_flashdata('success', 'Data Supplier Berhasil Diperbaharui!');
		redirect('Backend/cSupplier');
	}
	public function delete($id)
	{
		$this->mSupplier->delete($id);
		$this->session->set_flashdata('success', 'Data Supplier berhasil dihapus!');
		redirect('Backend/cSupplier');
	}
}

/* End of file cUser.php */

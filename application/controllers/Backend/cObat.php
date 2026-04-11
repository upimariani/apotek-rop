<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cObat extends CI_Controller
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
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vObat', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function add()
	{
		$config['upload_path']          = './asset/gambar';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'obat' => $this->mObat->select()
			);
			$this->load->view('Backend/Layout/header');
			$this->load->view('Backend/vObat', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'nama_obat' => $this->input->post('nama'),
				'keterangan' => $this->input->post('keterangan'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'lead_time' => $this->input->post('lead_time'),
				'gambar' => $upload_data['file_name'],
			);
			$this->mObat->insert($data);
			$this->session->set_flashdata('success', 'Data Obat berhasil disimpan!');
			redirect('Backend/cObat');
		}
	}
	public function update($id)
	{
		$config['upload_path']          = './asset/gambar';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'obat' => $this->mObat->select()
			);
			$this->load->view('Backend/Layout/header');
			$this->load->view('Backend/vObat', $data);
			$this->load->view('Backend/Layout/footer');
		} else {

			$upload_data = $this->upload->data();
			$data = array(
				'nama_obat' => $this->input->post('nama'),
				'keterangan' => $this->input->post('keterangan'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'lead_time' => $this->input->post('lead_time'),
				'gambar' => $upload_data['file_name'],
			);
			$this->mObat->update($id, $data);

			$this->session->set_flashdata('success', 'Data Obat berhasil diperbaharui!');
			redirect('Backend/cObat');
		} //tanpa ganti gambar
		$upload_data = $this->upload->data();
		$data = array(
			'nama_obat' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'lead_time' => $this->input->post('lead_time')
		);
		$this->mObat->update($id, $data);
		$this->session->set_flashdata('success', 'Data Obat berhasil diperbaharui!');
		redirect('Backend/cObat');
	}
	public function delete($id)
	{
		$this->mObat->delete($id);
		$this->session->set_flashdata('success', 'Data Obat berhasil dihapus!');
		redirect('Backend/cObat');
	}
}

/* End of file cObat.php */

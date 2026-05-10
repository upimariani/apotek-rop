<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProfile extends CI_Controller
{

	public function index()
	{
		$data = array(
			'profile' => $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row()
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vProfile', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function update($id)
	{
		$data = array(
			'fullname' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat_detail' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->where('id_pelanggan', $id);
		$this->db->update('pelanggan', $data);


		$this->session->set_flashdata('success', 'Anda berhasil memperbaharui data profile!');
		redirect('Pelanggan/cProfile');
	}
	public function alamat_pengiriman($id_pelanggan)
	{
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota', 'Provinsi', 'required');
		$this->form_validation->set_rules('kecamatan', 'Provinsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'id_pelanggan' => $id_pelanggan
			);
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vAlamatPengiriman', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$provinsi = $this->input->post('provinsi');
			$kota = $this->input->post('kota');
			$kecamatan = $this->input->post('kecamatan');

			//kode
			$id_kecamatan = $this->input->post('id_kec');
			$data = array(
				'alamat_pengiriman' => $provinsi . ' Kota/Kab. ' . $kota . ' Kec. ' . $kecamatan,
				'kode' => $id_kecamatan
			);
			// var_dump($data);
			$this->db->where('id_pelanggan', $id_pelanggan);
			$this->db->update('pelanggan', $data);
			$this->session->set_flashdata('success', 'Alamat pengiriman berhasil ditambahkan!');
			redirect('Pelanggan/cProfile');
		}
	}
}

/* End of file cProfile.php */

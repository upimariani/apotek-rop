<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function index()
	{
		$this->load->view('Backend/vLogin');
	}
	public function log()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == 'admin' && $password == 'admin') {
			$id_user = 1;
			$array = array(
				'id_user' => $id_user
			);
			$this->session->set_userdata($array);
			redirect('Backend/cDashboard');
		} else if ($username == 'supplier' && $password == 'supplier') {
			$id_user = 2;
			$array = array(
				'id_user' => $id_user
			);
			$this->session->set_userdata($array);
			redirect('Backend/cDashboard');
		} else if ($username == 'pemilik' && $password == 'pemilik') {
			$id_user = 3;
			$array = array(
				'id_user' => $id_user
			);
			$this->session->set_userdata($array);
			redirect('Backend/cDashboard');
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
			redirect('Backend/cLogin');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('Backend/cLogin');
	}
}

/* End of file cLogin.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mObat');
	}

	public function index()
	{
		$data = array(
			'dt_obat' => $this->db->query("SELECT * FROM `obat`")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDashboard', $data);
		$this->load->view('Backend/Layout/footer');
	}
}

/* End of file cDashboard.php */

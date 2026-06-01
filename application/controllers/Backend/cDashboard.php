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
			'dt_obat' => $this->db->query("SELECT 
    *, o.id_obat,
    o.nama_obat,
    MAX(dm.tgl_kedaluarsa) AS tgl_kedaluarsa_terbaru
FROM obat o
LEFT JOIN detail_masuk dm ON dm.id_obat = o.id_obat JOIN supplier ON supplier.id_supplier=o.id_supplier
GROUP BY o.id_obat, o.nama_obat")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDashboard', $data);
		$this->load->view('Backend/Layout/footer');
	}
}

/* End of file cDashboard.php */

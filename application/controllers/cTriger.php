<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTriger extends CI_Controller
{

	public function index()
	{
		//data obat_keluar
		$dt_obat_keluar = $this->db->query("SELECT * FROM `obat_keluar`")->result();
		foreach ($dt_obat_keluar as $key => $value) {
			$dt_obat = $this->db->query("SELECT * FROM `obat_keluar` JOIN detail_keluar ON obat_keluar.id_obat_keluar=detail_keluar.id_obat_keluar JOIN obat ON detail_keluar.id_obat=obat.id_obat WHERE obat_keluar.id_obat_keluar='" . $value->id_obat_keluar . "'")->result();
			$tot = 0;
			foreach ($dt_obat as $key => $item) {
				echo $item->id_obat_keluar . ' ' . $item->id_obat . ' ' . $item->harga . ' ' . $item->jumlah_keluar . ' ' . $item->jumlah_keluar * $item->harga . '<br>';
				$tot += ($item->jumlah_keluar * $item->harga);
			}
			echo 'Total' . $tot . '<br>';
			$data = array(
				'total_keluar' => $tot
			);
			$this->db->where('id_obat_keluar', $value->id_obat_keluar);
			$this->db->update('obat_keluar', $data);
		}
	}
}

/* End of file cTriger.php */

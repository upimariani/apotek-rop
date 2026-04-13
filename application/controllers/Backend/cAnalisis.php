<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function index()
	{
		//data obat
		$month = date('m') - 1;
		$dt_obat = $this->db->query("SELECT SUM(jumlah_keluar) as jml, obat.id_obat, lead_time FROM `detail_keluar` JOIN obat_keluar ON detail_keluar.id_obat_keluar=obat_keluar.id_obat_keluar JOIN obat ON obat.id_obat=detail_keluar.id_obat WHERE MONTH(tgl_keluar)='" . $month . "' GROUP BY id_obat")->result();

		foreach ($dt_obat as $key => $value) {
			echo $value->jml . '<br>';
			//variabel
			$jml_perbulan = $value->jml;
			$jml_perhari = $value->jml / 30;
			$lead_time = $value->lead_time;
			$z = 1.65;
			$safety_stok = $z * $jml_perhari * $lead_time;
			$rop = round(($jml_perhari * $lead_time) + $safety_stok, 0);

			echo $rop . '<br>';

			$data = array(
				'rop' => $rop
			);
			$this->db->where('id_obat', $value->id_obat);
			$this->db->update('obat', $data);
		}
		$this->session->set_flashdata('success', 'Transaksi berhasil dikonfirmasi');
		redirect('Backend/cTransaksiObat');
	}
}

/* End of file cAnalisis.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function index()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo-badai.png', 10, 3, 28);
		$pdf->Cell(200, 5, 'APOTEK ANUGRAH FARMA', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Jalan Kalapagunung, Kramatmulya Kab. Kuningan', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);



		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN PEMESANAN OBAT', 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->SetFont('Times', '', 10);

		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(20, 7, 'No.', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Tanggal Pemesanan', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Obat', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Total Pembayaran', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);

		// $bulan = $this->input->post('bulan');
		// $tahun = $this->input->post('tahun');
		$data = $this->db->query("SELECT * FROM `obat_masuk` WHERE status_masuk='2'")->result();

		$no = 1;
		foreach ($data as $key => $value) {
			$dt_obat = $this->db->query("SELECT * FROM `obat_masuk` JOIN detail_masuk ON obat_masuk.id_obat_masuk=detail_masuk.id_obat_masuk JOIN obat ON obat.id_obat=detail_masuk.id_obat WHERE obat_masuk.id_obat_masuk='" . $value->id_obat_masuk . "'")->result();
			$nama_obat = '';

			foreach ($dt_obat as $key => $item) {
				$nama_obat .= $item->nama_obat . ', ';
			}
			$nama_obat = rtrim($nama_obat, ', ');
			$pdf->Cell(20, 7, $no++, 1, 0, 'R');
			$pdf->Cell(40, 7, $value->tgl_masuk, 1, 0);
			$pdf->Cell(70, 7, $nama_obat, 1, 0, 'C');
			$pdf->Cell(50, 7, 'Rp. ' . number_format($value->total_transaksi), 1, 1, 'C');
		}

		$pdf->SetFont('Times', '', 9);
		$pdf->Cell(40, 7, '', 0, 1, 'C');
		$pdf->Cell(40, 7, '', 0, 1, 'C');

		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');

		$pdf->Cell(95, 7, 'Pemilik', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);

		$pdf->Cell(95, 7, '(....................)', 0, 0, 'C');

		$pdf->Output();
	}
	public function transaksi()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo-badai.png', 10, 3, 28);
		$pdf->Cell(200, 5, 'APOTEK ANUGRAH FARMA', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Jalan Kalapagunung, Kramatmulya Kab. Kuningan', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);



		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN PEMESANAN OBAT', 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->SetFont('Times', '', 10);

		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(20, 7, 'No.', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Tanggal Pemesanan', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Obat', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Total Pembayaran', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);

		// $bulan = $this->input->post('bulan');
		// $tahun = $this->input->post('tahun');
		$data = $this->db->query("SELECT * FROM `obat_keluar` WHERE status='2'")->result();

		$no = 1;
		foreach ($data as $key => $value) {
			$dt_obat = $this->db->query("SELECT * FROM `obat_keluar` JOIN detail_keluar ON obat_keluar.id_obat_keluar=detail_keluar.id_obat_keluar JOIN obat ON obat.id_obat=detail_keluar.id_obat WHERE obat_keluar.id_obat_keluar='" . $value->id_obat_keluar . "'")->result();
			$nama_obat = '';

			foreach ($dt_obat as $key => $item) {
				$nama_obat .= $item->nama_obat . ', ';
			}
			$nama_obat = rtrim($nama_obat, ', ');
			$pdf->Cell(20, 7, $no++, 1, 0, 'R');
			$pdf->Cell(40, 7, $value->tgl_keluar, 1, 0);
			$pdf->Cell(70, 7, $nama_obat, 1, 0, 'L');
			$pdf->Cell(50, 7, 'Rp. ' . number_format($value->total_keluar), 1, 1, 'C');
		}

		$pdf->SetFont('Times', '', 9);
		$pdf->Cell(40, 7, '', 0, 1, 'C');
		$pdf->Cell(40, 7, '', 0, 1, 'C');

		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');

		$pdf->Cell(95, 7, 'Pemilik', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);

		$pdf->Cell(95, 7, '(....................)', 0, 0, 'C');

		$pdf->Output();
	}
}

/* End of file cLaporan.php */

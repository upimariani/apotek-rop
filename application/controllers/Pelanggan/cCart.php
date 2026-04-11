<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCart');
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function add_cart($id_obat)
	{
		$obat = $this->db->query("SELECT * FROM obat WHERE id_obat='" . $id_obat . "'")->row();
		$data = array(
			'id' => $obat->id_obat,
			'name' => $obat->nama_obat,
			'price' => $obat->harga,
			'qty' => '1',
			'stok' => $obat->stok
		);
		// var_dump($data);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Obat berhasil masuk ke keranjang!');
		redirect('Pelanggan/cProduk');
	}
	public function cart_delete($rowid)
	{
		$this->cart->remove($rowid);
		$this->session->set_flashdata('success', 'Produk berhasil dihapus!');
		redirect('Pelanggan/cProduk');
	}
	public function update_cart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			if ($this->input->post('qty' . $i) > $items['stok']) {
				$this->session->set_flashdata('error', 'Stok Produk ' . $items['name'] . ' melebihi stok yang tersedia!');
				redirect('Pelanggan/cCart');
			} else {
				$data = array(
					'rowid'  => $items['rowid'],
					'qty'    => $this->input->post('qty' . $i)
				);
				$this->cart->update($data);
			}
			$i++;
		}
		$this->session->set_flashdata('success', 'Produk Berhasil Diperbaharui!');
		redirect('Pelanggan/cCart');
	}
}

/* End of file cCart.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
	public function get_all_produk()
	{
		return $this->db->get('obat')->result();
	}

	public function search_obat($keyword)
	{
		$this->db->like('nama_obat', $keyword);
		return $this->db->get('obat')->result();
	}
}

/* End of file mProduk.php */

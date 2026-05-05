<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mObat extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('obat', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_supplier', $this->session->userdata('id_supplier'));
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_obat', $id);
		$this->db->update('obat', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_obat', $id);
		$this->db->delete('obat');
	}
	public function detail($id_obat)
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_obat', $id_obat);
		return $this->db->get()->row();
	}
}

/* End of file mObat.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_makanan extends CI_Model {

	public function getDetailMkn($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('makanan');
		return $query->row();
	}

	public function getDataMkn() {
		$this->db->select('*');
		$this->db->from('makanan');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputmkn($data) {

		return $this->db->insert('makanan', $data);

	}


	public function updatemkn($data, $id) {

		$this->db->where('id', $id);
		$this->db->update('makanan', $data);

	}

	public function getTampilmkn($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('makanan');
		return $query->row();
	}



	public function deleteMkn($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('makanan');
	}

	

	

}

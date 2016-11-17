<?php
class Data_model extends CI_Model {

	public function getData() {
		$this->db->select('*');
		$this->db->from('data');
		return $this->db->get()->result_array();
	}
}
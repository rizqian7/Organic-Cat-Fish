<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class RumahMakanModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewRumahMakan()
	{
		$query = $this->db->get("tbl_rumahmakan");
		return $query->result();
	}

	public function deleteRumahMakan($id)
	{
		$this->db->where('id_rumahmakan', $id);
		$this->db->delete('tbl_rumahmakan');
	}

	public function detailRumahMakan($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_rumahmakan');
		$this->db->where('id_rumahmakan', $id);
		$data = $this->db->get();
		return $data->row();
	}
}
?>
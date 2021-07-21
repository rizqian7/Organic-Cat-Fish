<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PeternakLeleModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewPeternakLele()
	{
		$query = $this->db->get("tbl_peternaklele");
		return $query->result();
	}

	public function detailPeternakLele($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_peternaklele');
		$this->db->where('id_peternaklele', $id);
		$data = $this->db->get();
		return $data->row();
	}

	public function deletePeternakLele($id)
	{
		$this->db->where('id_peternaklele', $id);
		$this->db->delete('tbl_peternaklele');
	}
}
?>
<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class DriverModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewDriver()
	{
		// $sql = "SELECT tbl_driver.id_driver AS id_driver, tbl_driver.nama_lengkap AS nama_lengkap, tbl_driver.no_ktp AS no_ktp, tbl_peternaklele.id_peternaklele AS id_peternaklele, tbl_peternaklele.nama_lengkap AS pt_nama_lengkap FROM tbl_driver, tbl_panen, tbl_peternaklele WHERE tbl_panen.id_driver = tbl_driver.id_driver";
		// $data = $this->db->query($sql);
		// return $data->result();
		$query = $this->db->get("tbl_driver");
		return $query->result();
	}

	// public function viewDriverWithState()
	// {
	// 	$sql = "SELECT * FROM tbl_driver WHERE status='free'";
	// 	$data = $this->db->query($sql);
	// 	return $data->result();
	// }

	public function listDriver()
	{
		$query = "SELECT * FROM tbl_driver";
		return $query->result;
	}
	
	public function detailDriver($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_driver');
		$this->db->where('id_driver', $id);
		$data = $this->db->get();
		return $data->row();
	}

	public function viewTambahDriver()
	{
		$query = $this->db->get("tbl_driver");
		return $query->result();
	}

	public function tambahDriver($data)
	{
		$this->db->insert('tbl_driver', $data);
	}

	public function viewEditDriver($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_driver');
		$this->db->where('id_driver', $id);
		return $this->db->get();
	}

	public function editDriver($id, $data)
	{
		$this->db->where('id_driver', $id);
		$this->db->update('tbl_driver', $data);
	}

	public function deleteDriver($id)
	{
		$this->db->where('id_driver', $id);
		$this->db->delete('tbl_driver');
	}
}
?>
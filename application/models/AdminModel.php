<?php 
defined('BASEPATH') OR exit ('No direct script are allowed');

class AdminModel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//fungsi check login
	function check_login($username, $password) 
	{
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get();
	}

	function viewPageHargaIkan()
	{
		$this->db->select('*');
		$this->db->from('tbl_harga');
		return $this->db->get();
	}

	public function viewHargaBeli()
	{
		$this->db->select('harga_beli');
		$this->db->from('tbl_harga');
		$this->db->where(array('id_harga'=>1));
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->row()->harga_beli;
		}
		return false;
	}

	public function viewHargaJual()
	{
		$this->db->select('harga_jual');
		$this->db->from('tbl_harga');
		$this->db->where(array('id_harga'=>1));
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->row()->harga_jual;
		}
		return false;
	}

	public function editHargaIkan($data)
	{
		$this->db->update('tbl_harga', $data);
	}
}
?>
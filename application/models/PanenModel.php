<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PanenModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewPanen()
	{
		$sql = "SELECT tbl_panen.id_panen AS id_panen, tbl_peternaklele.id_peternaklele AS id_peternak, tbl_peternaklele.nama_lengkap AS nama, tbl_peternaklele.no_hp AS hp, tbl_peternaklele.alamat AS alamat, tbl_panen.waktu_panen AS panen, tbl_panen.berat_panen AS berat, tbl_panen.jumlah_kolam AS jml_kolam, tbl_panen.jenis_pakan AS jenis_pakan FROM tbl_panen, tbl_peternaklele WHERE tbl_panen.id_peternak = tbl_peternaklele.id_peternaklele ORDER BY id_panen DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function viewPanenById($idpanen)
	{
		$sql = "SELECT tbl_panen.id_panen AS id_panen, tbl_peternaklele.id_peternaklele AS id_peternak, tbl_peternaklele.nama_lengkap AS nama, tbl_peternaklele.no_hp AS hp, tbl_peternaklele.alamat AS alamat, tbl_panen.waktu_panen AS panen, tbl_panen.berat_panen AS berat, tbl_panen.jumlah_kolam AS jml_kolam, tbl_panen.jenis_pakan AS jenis_pakan FROM tbl_panen, tbl_peternaklele WHERE tbl_panen.id_peternak = tbl_peternaklele.id_peternaklele AND tbl_panen.id_panen = '$idpanen'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function getDriverPanen()
	{
		$sql = "SELECT * FROM tbl_driver";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function saveDriverPanen($table, $id_panen, $data)
	{
		
		$this->db->where('id_panen', $id_panen);
		return $this->db->update($table, $data);
	}
}

?>
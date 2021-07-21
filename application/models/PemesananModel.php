<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PemesananModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewPemesanan()
	{
		$sql = "SELECT tbl_pemesanan.id_pemesanan AS id_pemesanan, tbl_rumahmakan.id_rumahmakan AS id_rumahmakan, tbl_rumahmakan.nama_lengkap AS nama, tbl_rumahmakan.nama_rumahmakan AS nama_rm,  tbl_rumahmakan.no_hp AS hp, tbl_rumahmakan.alamat AS alamat, tbl_pemesanan.waktu_pesan AS waktu_pesan, tbl_pemesanan.berat_pesan AS berat_pesan, tbl_pemesanan.jenis_ukuran AS jenis_ukuran FROM tbl_pemesanan, tbl_rumahmakan WHERE tbl_pemesanan.id_rumahmakan = tbl_rumahmakan.id_rumahmakan ORDER BY id_pemesanan DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function viewPemesananById($idpemesanan)
	{
		$sql = "SELECT tbl_pemesanan.id_pemesanan AS id_pemesanan, tbl_rumahmakan.id_rumahmakan AS id_rumahmakan, tbl_rumahmakan.nama_lengkap AS nama, tbl_rumahmakan.nama_rumahmakan AS nama_rm, tbl_rumahmakan.no_hp AS hp, tbl_rumahmakan.alamat AS alamat, tbl_pemesanan.waktu_pesan AS waktu_pesan, tbl_pemesanan.berat_pesan AS berat_pesan, tbl_pemesanan.jenis_ukuran AS jenis_ukuran FROM tbl_pemesanan, tbl_rumahmakan WHERE tbl_pemesanan.id_rumahmakan = tbl_rumahmakan.id_rumahmakan AND tbl_pemesanan.id_pemesanan = '$idpemesanan'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function getDriverPemesanan()
	{
		$sql = "SELECT * FROM tbl_driver";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function saveDriverPemesanan($table, $id_pemesanan, $data)
	{
		$this->db->where('id_pemesanan', $id_pemesanan);
		return $this->db->update($table, $data);
	}
}

?>
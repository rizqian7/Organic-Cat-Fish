<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PemesananController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('RumahMakanModel');
		$this->load->model('PemesananModel');
		$this->load->model('DriverModel');

		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array(
            'url'
        ));
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->helper('my_helper');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function viewPemesanan()
	{
		// $data['offset']			= 0;
		$data['pemesanan'] 		= $this->PemesananModel->viewPemesanan();
		$data['modules']		= 'pemesanan';
		$this->load->view('app', $data);
	}

	public function detailPemesanan()
	{
		$idPemesanan			= $_POST['idPemesanan'];
		$data['pemesananbyid'] 	= $this->PemesananModel->viewPemesananById($idPemesanan);
		echo show_my_modal('modalDetailPemesanan', 'detailPemesanan', $data);
	}

	public function getDriverPemesanan()
	{
		$data['pilihDVpemesanan'] 	= $this->PemesananModel->getDriverPemesanan();
		echo show_my_modal('modalPilihDvPemesanan', 'pilihDVpemesanan', $data);
	}

	public function saveDriverPemesanan()
	{
		$id_pemesanan			= $this->input->post('id_pemesanan');
		$data					= array(
								'id_driver' => $this->input->post('id_driver')
								);
		$this->PemesananModel->saveDriverPemesanan('tbl_pemesanan', $id_pemesanan, $data);
	}
}
?>
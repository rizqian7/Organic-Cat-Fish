<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PanenController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('PeternakLeleModel');
		$this->load->model('PanenModel');
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

	public function viewPanen()
	{
		$data['panen'] 			= $this->PanenModel->viewPanen();
		// $data['driver']			= $this->DriverModel->viewDriverWithState();
		$data['modules']		= 'panen';
		$this->load->view('app', $data);
	}

	public function detailJemput()
	{
		$idJemput 				= $_POST['idJemput'];
		$data['jemputbyid'] 	= $this->PanenModel->viewPanenById($idJemput);
		echo show_my_modal('modalDetailPanen', 'detailPanen', $data);
	}

	public function getDriverPanen()
	{
		$data['pilihDVbyID'] 	= $this->PanenModel->getDriverPanen();
		echo show_my_modal('modalPilihDriver', 'pilihDV', $data);
	}

	public function saveDriverPanen()
	{
		$id_panen				= $this->input->post('id_panen');
		$data					= array(
								'id_driver' => $this->input->post('id_driver')
								);
		$this->PanenModel->saveDriverPanen('tbl_panen', $id_panen, $data);
	}
} 
?>
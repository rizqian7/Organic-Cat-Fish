<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class MonitoringController extends CI_Controller
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
		$data['panen'] 	= $this->PanenModel->viewPanen();
		$data['driver']			= $this->DriverModel->viewDriverWithState();
		$data['modules']		= 'panen';
		$this->load->view('app', $data);
		// $this->load->view('dashboard');
	}

	// public function viewPenjemputan()
	// {
	// 	$data['penjemputan'] 	= $this->PenjemputanModel->viewPenjemputan();
	// 	$data['driver']			= $this->DriverModel->viewDriverWithState();
	// 	$data['modules']		= 'penjemputan';
	// 	$this->load->view('app', $data);
	// }

	// public function detailJemput(){
	// 	$idJemput = $_POST['idJemput'];
	// 	$data['jemputbyid'] 	= $this->PenjemputanModel->viewPenjemputanById($idJemput);
	// 	echo show_my_modal('modalDetailPanen', 'detailPanen', $data);
	// }
}
?>
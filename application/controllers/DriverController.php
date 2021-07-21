<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class DriverController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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

	public function viewDriver()
	{
		$data['offset']		= 0;
		$data['Driver'] 	= $this->DriverModel->viewDriver();
		$data['modules']	= 'Driver';
		$this->load->view('app', $data);
	}

	public function viewTambahDriver()
	{
		$data['tambahDriver'] 	= $this->DriverModel->viewTambahDriver();
		$data['modules']		= 'tambahDriver';
		$this->load->view('app', $data);
	}

	public function tambahDriver()
	{
		$data['no_ktp']			= $this->input->post('1');
		$data['nama_lengkap']	= $this->input->post('2');
		$data['alamat']			= $this->input->post('3');
		$data['no_hp']			= $this->input->post('4');
		$data['username']		= $this->input->post('5');
		// $data['password']		= $this->input->post('6');
		$password				= $this->input->post('6');
		$data['password']		= password_hash($password, PASSWORD_DEFAULT);
		// $data['status']			= 'free';

		$this->DriverModel->tambahDriver($data);
		redirect(site_url('DriverController/viewDriver'));
	}

	public function detailDriver()
	{
		$data['offset']			= 0;
		$id_driver				= $_POST['id_driver'];
		$data['detailDVbyID']	= $this->DriverModel->detailDriver($id_driver);
		echo show_my_modal('modalDetailDV', 'detailDV', $data);
	}

	public function viewEditDriver($id)
	{
		$data['modules']		= 'driverEdit';
		$data['driverEdit']		= $this->DriverModel->viewEditDriver($id)->row();
		$this->load->view('app', $data);
	}

	public function editDriver($id)
	{
		$data['no_ktp']			= $this->input->post('1');
		$data['nama_lengkap']	= $this->input->post('2');
		$data['alamat']			= $this->input->post('3');
		$data['no_hp']			= $this->input->post('4');
		$data['username']		= $this->input->post('5');
		$password				= $this->input->post('6');
		$data['password']		= password_hash($password, PASSWORD_DEFAULT);

		$this->DriverModel->editDriver($id, $data);
		redirect(site_url('DriverController/viewDriver'));
	}

	public function deleteDriver()
	{
		$idDelete = $this->input->post('idDelete');
		$this->DriverModel->deleteDriver($idDelete);
	}
}

?>
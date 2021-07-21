<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class RumahMakanController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('RumahMakanModel');
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

	public function viewRumahMakan()
	{
		$data['offset']		= 0;
		$data['rumahMakan'] = $this->RumahMakanModel->viewRumahMakan();
		$data['modules']	= 'rumahMakan';
		$this->load->view('app', $data);
	}

	public function detailRumahMakan()
	{
		$data['offset']			= 0;
		$id_rumahmakan			= $_POST['id_rumahmakan'];
		$data['detailRMbyID']	= $this->RumahMakanModel->detailRumahMakan($id_rumahmakan);
		echo show_my_modal('modalDetailRM', 'detailRM', $data);
	}

	// public function detailLokasiRumahMakan()
	// {
	// 	$data['rumahMakanLokasi']	= $this->PeternakLeleModel->detailLokasiPeternakLele();
	// 	$data['modules']			= 'rumahMakanLokasi';
	// 	$this->load->view('app', $data);
	// }

	public function deleteRumahMakan()
	{
		$idDelete = $this->input->post('idDelete');
		// echo $idDelete;
		$this->RumahMakanModel->deleteRumahMakan($idDelete);
		// $this->viewRumahMakan();
		// header("Refresh:0");
		// redirect(site_url('RumahMakanController/viewRumahMakan'));
	}
}

?>
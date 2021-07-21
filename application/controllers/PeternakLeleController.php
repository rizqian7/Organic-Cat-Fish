<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class PeternakLeleController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('PeternakLeleModel');
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

	public function viewPeternakLele()
	{
		$data['offset']			= 0;
		$data['peternakLele'] 	= $this->PeternakLeleModel->viewPeternakLele();
		$data['modules']		= 'peternakLele';
		$this->load->view('app', $data);
	}

	public function detailPeternakLele()
	{
		$data['offset']			= 0;
		$id_peternaklele		= $_POST['id_peternaklele'];
		$data['detailPLbyID']	= $this->PeternakLeleModel->detailPeternakLele($id_peternaklele);
		echo show_my_modal('modalDetailPL', 'detailPL', $data);
	}

	// public function detailLokasiPeternakLele()
	// {
	// 	$data['peternakLeleLokasi']	= $this->PeternakLeleModel->detailLokasiPeternakLele();
	// 	$data['modules']			= 'peternakLeleLokasi';
	// 	$this->load->view('app', $data);
	// }

	public function deletePeternakLele()
	{
		$idDelete = $this->input->post('idDelete');
		$this->PeternakLeleModel->deletePeternakLele($idDelete);
	}
}

?>
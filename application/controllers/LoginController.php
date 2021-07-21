<?php 
ob_start();
defined('BASEPATH') OR exit ('No direct script access allowed');

class LoginController extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		//load model admin
		$this->load->model('AdminModel');
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in'])) //session jika user sudah login
		{
			$jumPeternakLele	= $this->db->query('SELECT * FROM tbl_peternaklele');
			$jumRumahMakan		= $this->db->query('SELECT * FROM tbl_rumahmakan');
			$jumDriver			= $this->db->query('SELECT * FROM tbl_driver');
			$hargaJual			= $this->AdminModel->viewHargaJual();
			$hargaBeli			= $this->AdminModel->viewHargaBeli();
			$data['jumPeternakLele']	= $jumPeternakLele->num_rows();
			$data['jumRumahMakan']		= $jumRumahMakan->num_rows();
			$data['jumDriver']			= $jumDriver->num_rows();
			$data['hargaBeli']			= $hargaBeli;
			$data['hargaJual']			= $hargaJual;
			$this->load->view('dashboard', $data);
		}
		else 
		{
			$this->load->view('login');
		}
	}

	public function validateUser()
	{
		$username = $this->input->post('username', 'true');
		$password = md5($this->input->post('password', 'true'));
		$temp_account = $this->AdminModel->check_login($username, $password)->row();

		//check account
		$num_account = count($temp_account);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('LoginController'));
		}
		else
		{
			if (array($num_account) > 0)
			{
				$array_items = array(
					'id' => $temp_account->id,
					'username' => $temp_account->username,
					'logged_in' => true);
				$this->session->set_userdata($array_items);
				redirect(site_url('AdminController'));
			}
			else
			{
				$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
						<div class="header"><b><i class="fa fa-exclamation-circle"></i>ERROR </b> Username atau Password salah! </div></div>';
				$this->load->view('login', $data);
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_userdata(array(
			'username' => '',
			'password' => '',
			'is_logged_in' => ''
		));
		redirect(site_url('LoginController'));
	}
}
?>
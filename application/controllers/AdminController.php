<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array(
			'url'
		));
		$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('cookie');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in'])) //session jika user sudah login
		{
			$jumPeternakLele			= $this->db->query('SELECT * FROM tbl_peternaklele');
			$jumRumahMakan				= $this->db->query('SELECT * FROM tbl_rumahmakan');
			$jumDriver					= $this->db->query('SELECT * FROM tbl_driver');
			$hargaJual					= $this->AdminModel->viewHargaJual();
			$hargaBeli					= $this->AdminModel->viewHargaBeli();
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

	public function viewHargaIkan()
	{
		$hargaBeli				= $this->AdminModel->viewHargaBeli();
		$hargaJual				= $this->AdminModel->viewHargaJual();
		$data['hargaBeli']		= $hargaBeli;
		$data['hargaJual']		= $hargaJual;
		$data['viewHargaIkan'] 	= $this->AdminModel->viewPageHargaIkan();
		$data['modules'] 		= 'viewHargaIkan';
		$this->load->view('app', $data);
	}

	public function editHargaIkan()
	{
		$data['harga_beli']	= $this->input->post('1');
		$data['harga_jual']	= $this->input->post('2');
		$this->AdminModel->editHargaIkan($data);

		redirect(site_url('AdminController/'));
	}

	public function viewGraphicPanen()
	{
		$query =  $this->db->query("SELECT SUM(berat_panen) as count, MONTHNAME(waktu_panen) as month_name FROM tbl_panen WHERE YEAR(waktu_panen) = '" . date('Y') . "'GROUP BY YEAR(waktu_panen),MONTH(waktu_panen)"); 
		$record = $query->result();
		$data = [];

		foreach($record as $row) {
			$data['label'][] = $row->month_name;
			$data['data'][] = (int) $row->count;
		}
		$data['chart_data'] = json_encode($data);
		$data['modules']	= 'viewGraphicPanen';
		$this->load->view('app',$data);
	}

	public function viewGraphicPesanan()
	{
		$query =  $this->db->query("SELECT SUM(berat_pesan) as count, MONTHNAME(waktu_pesan) as month_name FROM tbl_pemesanan WHERE YEAR(waktu_pesan) = '" . date('Y') . "'GROUP BY YEAR(waktu_pesan),MONTH(waktu_pesan)"); 
		$record = $query->result();
		$data = [];

		foreach($record as $row) {
			$data['label'][] = $row->month_name;
			$data['data'][] = (int) $row->count;
		}
		$data['chart_data2'] = json_encode($data);
		$data['modules']	= 'viewGraphicPesanan';
		$this->load->view('app',$data);
	}
}

?>
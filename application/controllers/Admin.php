<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 function __construct(){
		parent::__construct();
		// membuat setiap user login terlebih dahulu sblm mengakses beranda       
		$this->load->model('M_Admin');
		$this->load->model('M_User');
	}

	public function index()
	{		
		$user_id = $this->session->userdata('iduser');
		$data['data'] = $this->M_Admin->get_data();
		$data['data2'] = $this->M_Admin->get_data_count();
		$data['pending'] = $this->M_Admin->get_data_pending();
		$this->load->view('index/navadmin');
		$this->load->view('index/dashadmin/index', $data);	
		$this->load->view('index/dashadmin/footeradmin');
	}

	public function jadwal()
	{
		
		$this->load->view('index/navadmin');
		$this->load->view('index/dashadmin/jadwal');	
		$this->load->view('index/dashadmin/footeradmin');
	}

	public function get_status()
    {
		$data =  $this->M_User->get_pesan($this->input->post('date'),$this->input->post('lap'));

		print_json($data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		if ($this->session->userdata('role_id') != 2){
			redirect('welcome');
		}		
		$this->load->model('M_User');

	}

	public function index()
	{						
		$this->load->view('index/navbar');
		$this->load->view('index/welcome');
		$this->load->view('index/footer');							
	}

	public function dashboard()
	{						
		$user_id = $this->session->userdata('iduser');
		$data['data'] = $this->M_User->get_data_by_user_id($user_id);
		$data['data2'] = $this->M_User->count_order_by_id($user_id);
		$this->load->view('index/navuser');
		$this->load->view('index/dashboard/header');							
		$this->load->view('index/dashboard/index');		
		$this->load->view('index/footeruser');						
	}

	public function pesan()
	{						
		$user_id = $this->session->userdata('iduser');		
		$data['data2'] = $this->M_User->count_order_by_id($user_id);
		$this->load->view('index/navuser');
		$this->load->view('index/dashboard/header');							
		$this->load->view('index/dashboard/pesan');		
		$this->load->view('index/footeruser');						
	}

	public function pesanan()
	{			
		$user_id = $this->session->userdata('iduser');
		$data['data'] = $this->M_User->get_data_by_user_id($user_id);
		$data['data2'] = $this->M_User->count_order_by_id($user_id);			
		$this->load->view('index/navuser', $data);
		$this->load->view('index/dashboard/header');							
		$this->load->view('index/dashboard/pesanan');		
		$this->load->view('index/footeruser');					
	}
}

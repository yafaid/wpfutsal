<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
            
	}
 
	public function index(){        
		$this->load->view('auth/login');
	}		

	function login()
	{
		// Ambil data dari form
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        
        // Cari user berdasarkan username dan password
        $user = $this->auth->login($email, $password);
        
        // Jika user ditemukan
        if($user) {
            // Simpan data user ke session
            $data = array(   
                'iduser'=> $user->iduser,             
                'nama' => $user->nama,
                'email' => $user->email,
                'no_hp'=> $user->no_hp,
                'ktp'=> $user->ktp,
                'role_id' => $user->role_id
            );
            $this->session->set_userdata($data);
            
            // Redirect ke halaman dashboard sesuai level user
            if($user->role_id == 1) {
                redirect('admin');
            } else if($user->role_id == 2) {
                redirect('user');
            }
        } else {
            // Jika login gagal, tampilkan pesan error
			$this->session->set_flashdata('fail','<div class="alert alert-danger text-center text-uppercase" role="alert">
			Username / Password anda salah 
			</div>');
			redirect('login');
        }
	}
	
		
	function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
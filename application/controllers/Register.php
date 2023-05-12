<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('auth');
		$this->load->helper('file');
		
	}
 
	public function index()
	{
		$this->load->view('auth/register');
	}

    public function proses()
	{
		$this->load->view('auth/register');			
		$this->form_validation->set_rules('name','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'is_unique'=>'email telah didaftarkan sebelumnya'
		]);
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		// $this->form_validation->set_rules('ktp', 'KTP', 'required|uploaded[ktp]');
		$config['upload_path'] = './uploads/'; // direktori penyimpanan gambar
		$config['allowed_types'] = 'jpg|jpeg|png'; // jenis file yang diizinkan untuk diupload
		$config['file_name'] = 'nama' . '_' . time();
		$config['overwrite'] = TRUE; // overwrite file jika file dengan nama yang sama sudah ada
		$config['max_size'] = 5024; // ukuran maksimum file dalam kb   	      
		$this->load->library('upload');	
		$this->upload->initialize($config);

		if ($this->form_validation->run() != TRUE) {			
			$this->session->set_flashdata('fail','<div class="alert alert-danger text-center text-uppercase" role="alert">
			Isi Data dengan benar
			  </div>');
			redirect('register');
			
		} else {			
            if (!$this->upload->do_upload('ktp')) {
                // aksi jika upload gagal
				$this->session->set_flashdata('fail','<div class="alert alert-danger text-center text-uppercase" role="alert">
				Isi Foto Ktp dengan Benar
				</div>');
				redirect('register');
			}else {
                // aksi jika upload sukses
				$data = array(
					'nama' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'ktp' => $this->upload->data('file_name'),
					'password' => md5($this->input->post('password')),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $this->input->post('is_active'),
					'created_at' => date('Y-m-d H:i:s')
				  );
                
                // simpan data gambar ke database
				$this->load->model('auth');
				$this->auth->register($data);

				// redirect ke halaman lain
				$this->session->set_flashdata('success','<div class="alert alert-success text-center text-uppercase" role="alert">
				Akun telah didaftarkan , silahkan login
				  </div>');
				redirect('login');	
            }
		}			
	} 
}
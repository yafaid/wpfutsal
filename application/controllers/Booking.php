<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
                
    }
    
    public function index() {
        // Load view booking_form
        $this->load->view('index/navuser');
		$this->load->view('index/dashboard/header');							
		$this->load->view('index/dashboard/pesan');
    }
    
    public function process() {
         // validate input
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lapangan', 'Lapangan', 'required');
        $this->form_validation->set_rules('date', 'Tanggal', 'required');
        $this->form_validation->set_rules('jam[]', 'Jam', 'required');
 
        if ($this->form_validation->run() == FALSE) {
             // validation failed
            $this->session->set_flashdata('fail','<div class="alert alert-danger text-center text-uppercase" role="alert">
            Isi Data dengan benar
            </div>');
            redirect('user/pesan');
         } else {
             // validation succeeded, save booking to database
            $jam = $this->input->post('jam'); //ubah menjadi variabel $jam
            $jam_string = implode(',', $jam); //ubah menjadi string
            $data = array(
                 'user_id' => $this->session->userdata('iduser'),
                 'lapangan_id' => $this->input->post('lapangan'),
                 'tanggal' => $this->input->post('date'),
                //  'jam' => implode(',', $this->input->post('jam')),
                //  'jam' => $jam_string,
                 'is_active' => $this->input->post('is_active')
             );
            $this->load->model('M_User');
            $this->M_User->pesan($data,$jam);
            //  redirect ke halaman lain
            $this->session->set_flashdata('success','<div class="alert alert-success text-center text-uppercase" role="alert">
            Akun telah memesan
              </div>');
            redirect('user/dashboard');
        }      
    }
    
    public function change_status() {
        $this->load->model('M_Admin');
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $result = $this->M_Admin->update_status($id, $status);
        if ($result) {
          echo 'success';
        } else {
          echo 'failed';
        }
      }
    
}

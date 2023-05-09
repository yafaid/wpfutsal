<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
    public function __construct()
	{		
        parent::__construct();
		$this->load->library('session');
		$this->load->database();
	}
	
	public function register($data)
	{
		$this->db->insert('user',$data);
	}

	public function login($email, $password){
		$this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->row();
	}
}
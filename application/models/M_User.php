<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function __construct()
	{		
        parent::__construct();
		$this->load->database();
	}   

    public function get_order_with_lapangan()
    {
        $today = date('Y-m-d');
    
        $this->db->select('o.*, l.lapangan');
        $this->db->from('order o');
        $this->db->join('lapangan l', 'o.lapangan_id = l.id');
        $this->db->where('o.tanggal', $today);
        $this->db->where('o.is_active', 2);
        $query = $this->db->get();
        return $query->result();
    }
	
    public function get_data_by_user_id($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('order');
        return $query->result();
    }

    public function count_order_by_id($user_id) {
        $this->db->select('COUNT(*) as total_order');
        $this->db->from('order');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total_order;
    }

    public function pesan($data){
        $this->db->insert('order', $data);
    }
       

    
}
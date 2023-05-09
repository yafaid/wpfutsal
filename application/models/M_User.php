<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function __construct()
	{		
        parent::__construct();
		$this->load->database();
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

    public function pesan($data,$jam){

        $this->db->trans_start();
        foreach ($jam as $j) {
            $data['jam'] = $j;
            $this->db->insert('order', $data);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            // transaction failed
            return FALSE;
        } else {
            // transaction succeeded
            return TRUE;
        } 
    }
}
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

    public function get_pesan($where, $lap)
    {
        $this->db->select('order.tanggal, jam.jam, lapangan.lapangan');
        $this->db->from('order');
        $this->db->join('jam', 'order.jam = jam.id');
        $this->db->join('lapangan', 'order.lapangan_id = lapangan.id');
        $this->db->where(['order.tanggal' => $where,'order.lapangan_id' => $lap , 'order.is_active' => '2' ]);
        $result = $this->db->get()->result();
        return $result;
    }
}
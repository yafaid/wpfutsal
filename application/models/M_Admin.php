<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
    public function __construct()
	{		
        parent::__construct();
		$this->load->database();
	}
	
	
    public function get_data()
    {
        $query = $this->db->get('order');
        return $query->result();
    }

    public function get_data_count() {
        $this->db->select('COUNT(*) as total_order');
        $this->db->from('order');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total_order;
    }



    public function get_data_pending() {
        $this->db->where('is_active', 1);
        $query = $this->db->get('order');
        return $query->result();
        
        // $this->db->select('order.id');
        // $this->db->from('order');
        // $this->db->join('user', 'user.iduser = order.user_id');
        // $this->db->where('order.is_active', 1);
        // $query = $this->db->get();
        // $result = $query->result_array();

        // Mengakses nomor telepon (no_hp)
        // foreach ($result as $row) {
        //     $no_hp = $row['no_hp'];
        //     // Lakukan operasi lain dengan nomor telepon
        // }
    }

    public function update_status($id, $status) {
        $data = array(
          'is_active' => $status
        );
        $this->db->where('id', $id);
        $this->db->update('order', $data);
        return $this->db->affected_rows() > 0;
      }
}
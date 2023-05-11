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

    public function getEventSchedule($lapangan) {
        $events = array();
        $startTime = strtotime('09:00:00');
        $endTime = strtotime('22:00:00');
        
        while ($startTime <= $endTime) {
            $event = new stdClass();
            $event->lapangan = $lapangan;
            $event->jam = date('H:i', $startTime);
            $event->isBooked = $this->checkBooking($lapangan, $event->jam);
            
            $events[] = $event;
            $startTime += 3600; // Tambah 1 jam
        }
    }    

    public function checkBooking($lapangan, $jam) {
        $today = date('Y-m-d');
        
        $this->db->where('lapangan_id', $lapangan);
        $this->db->where('jam', $jam);
        $this->db->where('tanggal', $today);
        $this->db->where('is_active', 2);
        $query = $this->db->get('order');
        
        return $query->num_rows() > 0;
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
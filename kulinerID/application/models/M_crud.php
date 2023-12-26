<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

    public function insert_data($data) {
        $this->db->insert('kuliner', $data);
    }

    
    public function get_kuliner_by_id() {
        $query = $this->db->get('kuliner')->result();
        return $this->db->get('kuliner')->result();
    }

    public function update_kuliner($data, $kuliner_id) {
        $this->db->where('kuliner_id', $kuliner_id);
        $this->db->update('kuliner', $data);
    }

    public function hapus_kuliner($idkuliner){
        $this->db->where('kuliner_id',$idkuliner);
        $this->db->delete('kuliner');
    }

    public function get_data_by_id($kuliner_id){
        return $this->db->get_where('kuliner', array('kuliner_id ' => $kuliner_id));

    }

    
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data extends CI_Model {

    public function getkulinerdata() {
        // Load database jika belum diautoload
        $this->load->database();

        // Query SQL Anda
        $sql = "SELECT kuliner_id, kuliner_judul, kuliner_isi, kuliner_gambar FROM kuliner ORDER BY kuliner_id";

        // Jalankan query
        $query = $this->db->query($sql);

        // Kembalikan hasil sebagai array
        return $query->result_array();
    }
}

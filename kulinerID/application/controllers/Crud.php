<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_crud');
    }

    public function upload_data() {
        $judul = $this->input->post('kuliner_judul');
        $isikuliner = $this->input->post('kuliner_isi');
        $tanggal = $this->input->post('kuliner_tanggal');

        // Konfigurasi upload file
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kuliner_gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];

            $data = array(
                'kuliner_judul' => $judul,
                'kuliner_isi' => $isikuliner,
                'kuliner_gambar' => $gambar,
                'kuliner_tanggal' => $tanggal
            );

            $this->M_crud->insert_data($data);
            redirect('Auth/halkuliner');
        } else {
            echo "File gagal disimpan";
        }
    }

    public function edit($kuliner_id){
        $data['kuliner_data'] = $this->M_crud->get_data_by_id($kuliner_id)->row_array();
        $this->load->view('halaman_edit',$data);
    }

    
    public function aksi_edit(){
        $kuliner_id = $this->input->post('kuliner_id');
        $kuliner_judul = $this->input->post('kuliner_judul');
        $kuliner_isi = $this->input->post('kuliner_isi');
        $kuliner_tanggal = $this->input->post('kuliner_tanggal');

        // Konfigurasi upload file
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gambar_lama');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];

            $data = array(
                'kuliner_judul' => $kuliner_judul,
                'kuliner_isi' => $kuliner_isi,
                'kuliner_gambar' => $gambar,
                'kuliner_tanggal' => $kuliner_tanggal
            );

            $this->M_crud->update_kuliner($data, $kuliner_id);
        if($this->db->affected_rows()){
            redirect('Auth/halkuliner');
        } else {
            redirect('Crud/edit/'.$kuliner_id);
        }
    }

    public function hapus($idkuliner){
        $this->load->model('M_crud');
        $this->M_crud->hapus_kuliner($idkuliner);
        if($this->db->affected_rows()){
            redirect('Auth/halkuliner');
        } else {
            echo "'Data gagal dihapus";
        }
    }

    public function comment() {

        $this->load->model('M_kuliner');
        $data['komentar_data'] = $this->M_kuliner->getKomen();
        $this->load->view('halaman_komentar', $data);
    }

    
}
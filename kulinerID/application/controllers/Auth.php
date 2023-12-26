<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('form_login');
    }

    public function aksilogin()
    {
        $username = $this->input->post('admin_nama');
        $password = $this->input->post('admin_password');

        $cek = $this->M_login->cek_admin($username, $password)->num_rows();
        if($cek > 0 ) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('Auth/halkuliner');
        } else {
            echo "Username dan password salah";
        }
    }

    public function Hal_utama()
    {
        $this->load->model('M_kuliner');
        $data['kuliner_data'] = $this->M_kuliner->getKulinerData();
        $this->load->view('halaman_utama', $data);
    }

    public function halkuliner()
    {
        $this->load->database();
        $this->load->model('M_kuliner');
        $data['kuliner_data'] = $this->M_kuliner->getKulinerId()->result_array();
        $this->load->view('halaman_kuliner', $data);
    }

    public function Hal_tambah()
    {
    $this->load->view('halaman_tambah');
    }

    public function tambahKuliner() {
        // Proses pengambilan data dari form
        $judul = $this->input->post("judul");
        $isikuliner = $this->input->post("isi");
        $tgl_upload = $this->input->post("tanggal");

        // Pengaturan upload file
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $uploadfile = 'upload/' . $upload_data['file_name'];

            // Memasukkan informasi file ke dalam database
            $this->load->model('M_kuliner');
            $this->db->query("insert into kuliner(kuliner_judul, kuliner_isi, kuliner_tanggal, Kuliner_gambar)
                                values($judul, $isikuliner, $tgl_upload, $uploadfile)");   //($judul, $isikuliner, $uploadfile, $tgl_upload);

            redirect('Auth/halkuliner');
        } else {
            echo "File gagal diupload" . $this->upload->display_errors();
        }
    }   
}
?>
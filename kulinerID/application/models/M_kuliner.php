<?php
class M_kuliner extends CI_Model {

      public function getKulinerData() {
        return $this->db->get('kuliner')->result();
    }

    public function getKulinerId() {
        return $this->db->get('kuliner');
    }

    public function insertKuliner($judul, $isikuliner, $uploadfile, $tgl_upload) {
        $data = array(
            'kuliner_judul' => $judul,
            'kuliner_isi' => $isikuliner,
            'kuliner_gambar' => $uploadfile,
            'kuliner_tanggal' => $tgl_upload
        );

        $this->db->insert('kuliner', $data);
    }

    public function getKomen() {
        // Mengasumsikan Anda memiliki tabel bernama 'komentar' di database Anda
        $this->db->select('nama, isikomen');
        $this->db->from('komen');
        $this->db->order_by('id', 'desc'); // Mengasumsikan Anda memiliki kolom 'id' untuk pengurutan
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result(); // Mengembalikan hasil sebagai objek
        } else {
            return 'Tidak ada komentar ditemukan';
        }
    }
}
?>

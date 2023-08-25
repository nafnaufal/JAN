<?php

class Nilai_model extends CI_model {
  
  public function save_data() {
    $mapel = $_POST['mapel'];
    $siswa = $_POST['siswa'];
    $nilai = $_POST['nilai'];

    $this->load->database();
    $this->db->insert('nilai', array(
      'id_mapel' => $mapel,
      'id_siswa' => $siswa,
      'nilai' => $nilai
    ));
  }
   
  public function get_all() {
    $this->load->database();
    $query = $this->db->get('nilai');
    $data = $query->result();

    return $data;
   }
  
   public function get_mapel() {
    $this->load->database();
    $query = $this->db->get('mapel');
    $data = $query->result();
    return $data;
   }
  
   public function get_data_by_siswa() {
    $siswa = $_GET['siswa'];

    $this->load->database();
    $this->db->where('id_siswa', $siswa);
    $query = $this->db->get('nilai');
    $data = $query->result();

    return $data;
   }
   
   public function get_data_grafik() {

    $this->load->database();
    $query = $this->db->query("SELECT nama_mapel, COUNT(*) as jumlah, CASE WHEN nilai > 1 THEN 'lulus' ELSE 'tidak_lulus' END AS kelulusan FROM nilai LEFT JOIN mapel ON nilai.id_mapel = mapel.id GROUP BY kelulusan, id_mapel;");
    $data = $query->result();

    return $data;
   }

   public function delete_data() {
    $id = $_GET['id'];
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete('nilai');
  }
}

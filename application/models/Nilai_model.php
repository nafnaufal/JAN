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
  
   public function get_data_by_siswa() {
    $siswa = $_GET['siswa'];

    $this->load->database();
    $this->db->where('id_siswa', $siswa);
    $query = $this->db->get('nilai');
    $data = $query->result();

    return $data;
   }
}

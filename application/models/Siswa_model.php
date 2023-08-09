<?php

class Siswa_model extends CI_model {
  
  public function save_data() {
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $kelas = $_POST['kelas'];
    $wali = $_POST['wali'];
    $hp = $_POST['hp'];

    $this->load->database();
    $this->db->insert('siswa', array(
      'nama' => $nama,
      'status' => $status,
      'kelas' => $kelas,
      'wali' => $wali,
      'no_hp' => $hp
    ));
  }
  
  public function get_by_id()
  {
    $id = $_GET['siswa'];

    $this->load->database();
    $this->db->where('id', $id);
    $query = $this->db->get('siswa');
    $data = $query->result()[0];

    return $data;
  }

  public function get_all() {
    $this->load->database();
    $query = $this->db->get('siswa');
    $data = $query->result();

    return $data;
   }
}
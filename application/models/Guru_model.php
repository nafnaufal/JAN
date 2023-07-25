<?php

class Guru_model extends CI_model {
  public function save_data() {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $kelas = $_POST['kelas'];
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->insert('guru', array(
      'nama' => $nama,
      'nip' => $nip,
      'jabatan' => $jabatan,
      'kelas' => $kelas
    ));
   }

  public function update_data() {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $kelas = $_POST['kelas'];
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->replace('guru', array(
      'id' => $id,
      'nama' => $nama,
      'nip' => $nip,
      'jabatan' => $jabatan,
      'kelas' => $kelas
    ));
   }

   public function delete_data() {
    $id = $_GET['id'];
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete('guru');
   }

   public function get_all_guru() {
    $this->load->database();
    $query = $this->db->get('guru');
    $data = $query->result();

    return $data;
   }

   public function get_guru() {
    $id = $_GET['id'];
    $this->load->database();
    $this->db->where('id', $id);
    $query = $this->db->get('guru');
    $data = $query->result()[0];

    return $data;
   }
}

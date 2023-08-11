<?php

class Pendaftaran_model extends CI_model {
  public function save_data()
  {
    $email = $_POST['username'];
    $anak = $_POST['anak'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $this->load->database();
    $this->db->insert('pendaftaran', array(
      'username' => $email,
      'nama' => $anak,
      'tanggal_lahir' => $tanggal_lahir,
      'jk' => $jk,
      'nama_ayah' => $ayah,
      'nama_ibu' => $ibu,
      'agama' => $agama,
      'alamat' => $alamat
    ));
  }

  public function update_data()
  {
    $id = $_GET['id'];
    $email = $_POST['username'];
    $anak = $_POST['anak'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $this->load->database();
    $this->db->replace('pendaftaran', array(
      'id' => $id,
      'username' => $email,
      'nama' => $anak,
      'tanggal_lahir' => $tanggal_lahir,
      'jk' => $jk,
      'nama_ayah' => $ayah,
      'nama_ibu' => $ibu,
      'agama' => $agama,
      'alamat' => $alamat
    ));
  }

  public function get_all_data()
  {
    $this->load->database();
    $query = $this->db->get('pendaftaran');
    $data = $query->result();

    return $data;
  }

  public function get_data()
  {
    $id = $_GET['id'];
    $this->load->database();
    $this->db->where('id', $id);
    $query = $this->db->get('pendaftaran');
    $data = $query->result()[0];

    return $data;
  }

  public function get_by_username()
  {
    $this->load->library('session');
    $username = $this->session->userdata('username');
    $this->load->database();
    $this->db->where('username', $username);
    $query = $this->db->get('pendaftaran');
    $data = $query->result()[0];

    return $data;
    
    // return $username;
  }

  public function delete_data() {
    $id = $_GET['id'];
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete('pendaftaran');
  }
}
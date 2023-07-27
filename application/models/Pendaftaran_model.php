<?php

class Pendaftaran_model extends CI_model {
  public function save_data()
  {
    $anak = $_POST['anak'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $this->load->database();
    $this->db->insert('pendaftaran', array(
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
}
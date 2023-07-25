<?php

class Akun_model extends CI_model {
  // public $email;
  // public $password;
  // public $role;
  // public $hp;
  // public $anak;
  // public $tanggal_lahir;

  public function get_akun() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $this->load->database();
    $this->db->where(array('username' => $username));
    $query = $this->db->get('akun');
    $akun = $query->result()[0];
    
    if(password_verify($password, $akun->password)){
      return $akun;
    } else {
      return null;
    }
  }

  public function save_data() {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'wali_murid';
    // $hp = $_POST['hp'];
    // $anak = $_POST['anak'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];

    $this->load->database();
    $this->db->insert('akun', array(
      'username' => $email,
      'password' => password_hash($password, PASSWORD_BCRYPT),
      'role' => $role
    ));
   }
}

?>
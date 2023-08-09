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

  public function save_data($role) {
    $email = $_POST['username'];
    $password = $_POST['password'];
    // $hp = $_POST['hp'];

    $this->load->database();
    $this->db->insert('akun', array(
      'username' => $email,
      'password' => password_hash($password, PASSWORD_BCRYPT),
      'role' => $role
    ));
   }

  public function change_pass()
  {
    $this->load->database();
    $this->db->where(array('username' => $this->session->userdata('username')));
    $query = $this->db->get('akun');
    $akun = $query->result()[0];
    
    if(password_verify($_POST['lama'], $akun->password) && $_POST['baru'] === $_POST['ulangbaru']){
      $newPass = $_POST['baru'];
      $updatedAkun = array(
        'id' => $akun->id,
        'username' => $akun->username,
        'password' => password_hash($newPass, PASSWORD_BCRYPT),
        'role' => $akun->role
      );

      $this->db->replace('akun', $updatedAkun);

      return true;
    } else {
      return false;
    }
  }
}

?>
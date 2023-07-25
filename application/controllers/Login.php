<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}

  public function auth()
  {
    // var_dump($_POST['username']);
    // $username = $_POST['username'];
    // $password = $_POST['password'];

    $this->load->model('Akun_model');
    $this->load->helper('url');

		$akun = $this->Akun_model->get_akun();

    if($akun != null) {
      $this->load->library('session');
      $this->session->set_userdata('username', $akun->username);
      $this->session->set_userdata('role', $akun->role);

      if($akun->role === 'guru'){
        $this->load->model('Guru_model');
        $data = $this->Guru_model->get_guru_by_nip($akun->username);
        $this->session->set_userdata('name', $data->nama);
      }elseif ($akun->role === 'admin') {
        $this->session->set_userdata('name', 'Admin TK');
      }
      redirect(base_url().'admin/dashboard', 'refresh');
    }else{
      redirect(base_url().'login', 'refresh');
    }
  }

  public function logout()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role');
    $this->session->unset_userdata('name');
    redirect(base_url().'login', 'refresh');
  }
}
?>
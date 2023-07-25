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
    redirect(base_url().'login', 'refresh');
  }
}
?>
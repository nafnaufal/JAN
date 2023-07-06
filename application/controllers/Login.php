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
    $username = $_POST['username'];
    $password = $_POST['password'];
  }
}
?>
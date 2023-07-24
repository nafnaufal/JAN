<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('register');
	}

	public function save_data()
	{
		// $email = $_POST['email'];
		// $password = $_POST['password'];
		// $hp = $_POST['hp'];
		// $anak = $_POST['anak'];
		// $tanggal_lahir = $_POST['tanggal_lahir'];
		$this->load->model('Akun_model');
		$this->load->helper('url');

		$this->Akun_model->save_data();

		redirect(base_url().'/login', 'refresh');
	}
}
?>
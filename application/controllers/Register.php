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
		$this->load->model('Pendaftaran_model');
		$this->load->helper('url');

		$birthDate = explode("-", $_POST['tanggal_lahir']);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
			? ((date("Y") - $birthDate[0]) - 1)
			: (date("Y") - $birthDate[0]));
		
		if($age >= 5) {
			$this->Akun_model->save_data('wali_murid');
			$this->Pendaftaran_model->save_data();

			redirect(base_url().'login', 'refresh');
		} else {
			echo "<script>if(!alert(\"Maaf anak anda belum cukup umur\")) document.location = '".base_url()."register';</script>";
		}
	}

	public function change_pass()
	{
		// echo base_url();
		$this->load->helper('url');
    $this->load->library('session');
		$this->load->model('Akun_model');

		if($this->Akun_model->change_pass())
		{
			echo "<script>if(!alert(\"Password Berhasil Diganti\")) document.location = '".base_url().$this->session->userdata('role')."/dashboard';</script>";
		}
		else
		{
			echo "<script>if(!alert(\"Password Gagal Diganti\")) document.location = '".base_url().$this->session->userdata('role')."/dashboard';</script>";
		}
	}
}
?>
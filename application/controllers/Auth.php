<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('dashboard');
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->view('dashboard');
	}
}

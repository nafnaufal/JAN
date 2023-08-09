<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_wali/header');
        $this->load->view('dashboard_wali');
        $this->load->view('templates_wali/footer');
    }

    public function viewPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_wali/header');
        $this->load->view('wali_murid/pendaftaran/view');
        $this->load->view('templates_wali/footer');
    }
}

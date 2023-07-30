<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    // Pendaftaran
    public function nilai()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/browse');
        $this->load->view('templates/footer');
    }
    public function addNilai()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/add');
        $this->load->view('templates/footer');
    }
    public function editNilai()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/edit');
        $this->load->view('templates/footer');
    }
    public function viewNilai()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/view');
        $this->load->view('templates/footer');
    }
    
    public function ganti_password()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/ganti_password/edit');
        $this->load->view('templates/footer');
    }

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('dashboard');
        $this->load->view('templates_guru/footer');
    }
    // Data Guru
    public function dataNilai()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/browse');
        $this->load->view('templates_guru/footer');
    }
    public function addNilai()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/add');
        $this->load->view('templates_guru/footer');
    }
    public function editNilai()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/edit');
        $this->load->view('templates_guru/footer');
    }

    public function viewNilai()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/view');
        $this->load->view('templates_guru/footer');
    }


    public function ganti_password()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates_guru/header');
        $this->load->view('guru/ganti_password/edit');
        $this->load->view('templates_guru/footer');
    }
}

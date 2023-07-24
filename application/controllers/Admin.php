<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function dataGuru()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/browse');
        $this->load->view('templates/footer');
    }
    public function dataSiswa()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/browse');
        $this->load->view('templates/footer');
    }
    public function pendaftaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/browse');
        $this->load->view('templates/footer');
    }
}

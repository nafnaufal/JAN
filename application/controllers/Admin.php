<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // Data Guru
    public function dataGuru()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/browse');
        $this->load->view('templates/footer');
    }
    public function addGuru()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/add');
        $this->load->view('templates/footer');
    }
    public function editGuru()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/edit');
        $this->load->view('templates/footer');
    }

    // Data Siswa
    public function dataSiswa()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/browse');
        $this->load->view('templates/footer');
    }
    public function addSiswa()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/add');
        $this->load->view('templates/footer');
    }
    public function editSiswa()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/edit');
        $this->load->view('templates/footer');
    }

    // Pendaftaran
    public function pendaftaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/browse');
        $this->load->view('templates/footer');
    }
    public function addPendaftaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/add');
        $this->load->view('templates/footer');
    }
    public function editPendaftaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/edit');
        $this->load->view('templates/footer');
    }
    public function viewPendaftaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/view');
        $this->load->view('templates/footer');
    }

}

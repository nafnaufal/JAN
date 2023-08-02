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

        $this->load->model('Siswa_model');
        $data['data'] = $this->Siswa_model->get_all();
        
        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/browse', $data);
        $this->load->view('templates_guru/footer');
    }
    public function addNilai()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Siswa_model');
        $data['siswa'] = $this->Siswa_model->get_all();

        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/add', $data);
        $this->load->view('templates_guru/footer');
    }
    public function saveNilai()
    {
        $this->load->model('Nilai_model');
        $this->load->helper('url');

        $this->Nilai_model->save_data();

        redirect(base_url().'guru/nilai', 'refresh');
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

        $this->load->model('Siswa_model');
        $this->load->model('Nilai_model');
        $data['siswa'] = $this->Siswa_model->get_by_id();
        $data['nilai'] = $this->Nilai_model->get_data_by_siswa();

        $this->load->view('templates_guru/header');
        $this->load->view('guru/data_nilai/view', $data);
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

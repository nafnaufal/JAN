<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // Data Guru
    public function dataGuru()
    {
        $this->load->helper('url');
        $this->load->model('Guru_model');
        $data['data'] = $this->Guru_model->get_all_guru();

        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/browse', $data);
        $this->load->view('templates/footer');
    }
    public function addGuru()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/add');
        $this->load->view('templates/footer');
    }
    public function saveGuru()
    {
        $this->load->model('Guru_model');
        $this->load->helper('url');

        $this->Guru_model->save_data();

        redirect(base_url().'data_guru', 'refresh');
    }
    public function editGuru()
    {
        $this->load->helper('url');
        $this->load->model('Guru_model');
        $data['data'] = $this->Guru_model->get_guru();

        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/edit', $data);
        $this->load->view('templates/footer');
    }
    public function updateGuru()
    {
        $this->load->model('Guru_model');
        $this->load->helper('url');

        $this->Guru_model->update_data();

        redirect(base_url().'data_guru', 'refresh');
    }
    public function deleteGuru()
    {
        $this->load->model('Guru_model');
        $this->load->helper('url');

        $this->Guru_model->delete_data();

        redirect(base_url().'data_guru', 'refresh');
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

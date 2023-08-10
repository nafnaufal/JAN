<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_by_username();

        $this->load->view('templates_wali/header');
        $this->load->view('dashboard_wali', $data);
        $this->load->view('templates_wali/footer');
    }

    public function viewPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_by_username();
        
        $this->load->view('templates_wali/header');
        $this->load->view('wali_murid/pendaftaran/view', $data);
        $this->load->view('templates_wali/footer');
    }

    public function editPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_by_username();

        $this->load->view('templates_wali/header');
        $this->load->view('wali_murid/pendaftaran/edit', $data);
        $this->load->view('templates_wali/footer');
    }

    public function updatePendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Pendaftaran_model');
        $this->Pendaftaran_model->update_data();

        redirect(base_url().'wali/pendaftaran', 'refresh');
    }
}

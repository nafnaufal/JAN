<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Nilai_model');

        $mapel = $this->Nilai_model->get_mapel();
        $all = $this->Nilai_model->get_data_grafik();

        $mapel_grafik = array();
        $lulus_grafik = array();
        $tidak_lulus_grafik = array();

        foreach ($mapel as $dt) {
            $temp = $dt->nama_mapel;
            $lulus = false;
            $tidak_lulus = false;

            array_push($mapel_grafik, $temp);

            foreach ($all as $nilai){
                if($temp == $nilai->nama_mapel){
                    if($nilai->kelulusan == "lulus"){
                        array_push($lulus_grafik, $nilai->jumlah);
                        $lulus = true;
                    }
                    else{
                        array_push($tidak_lulus_grafik, $nilai->jumlah);
                        $tidak_lulus = true;
                    }
                }
            }

            if($tidak_lulus == false){
                array_push($tidak_lulus_grafik, 0);
            }
            if($lulus == false){
                array_push($lulus_grafik, 0);
            }
        }
        // $data['data'] = $this->Nilai_model->get_data_grafik();

        $mapel_string = "";
        $lulus_string = "[";
        $tidak_lulus_string = "[";

        $length = count($mapel_grafik);
        for ($i = 0; $i < $length; $i++) {
            $mapel_string .= '"'. $mapel_grafik[$i].'",';
            $lulus_string .= $lulus_grafik[$i] . ',';
            $tidak_lulus_string .= $tidak_lulus_grafik[$i] . ',';
            
        }
        // print_r($mapel_string);

        
        $data['mapel'] = substr_replace($mapel_string, "", -1);
        $data['lulus'] = substr_replace($lulus_string, "", -1) . "]";
        $data['tidak_lulus'] = substr_replace($tidak_lulus_string, "", -1) . "]";

        $this->load->view('templates_guru/header');
        $this->load->view('dashboard', $data);
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
    public function deleteNilai()
    {
        $this->load->model('Nilai_model');
        $this->load->helper('url');
        $this->load->library('session');

        $this->Nilai_model->delete_data();

        $id = $_GET['siswa'];
        redirect(base_url().'guru/nilai/view?siswa='.$id, 'refresh');
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

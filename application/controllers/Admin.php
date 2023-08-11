<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // Data Guru
    public function dataGuru()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Guru_model');
        $data['data'] = $this->Guru_model->get_all_guru();

        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/browse', $data);
        $this->load->view('templates/footer');
    }
    public function addGuru()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('admin/data_guru/add');
        $this->load->view('templates/footer');
    }
    public function saveGuru()
    {
        $this->load->model('Guru_model');
        $this->load->model('Akun_model');
        $this->load->helper('url');
        $this->load->library('session');

        $this->Akun_model->save_data('guru');
        $this->Guru_model->save_data();

        redirect(base_url().'admin/data_guru', 'refresh');
    }
    public function editGuru()
    {
        $this->load->helper('url');
        $this->load->library('session');
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
        $this->load->library('session');

        $this->Guru_model->update_data();

        redirect(base_url().'admin/data_guru', 'refresh');
    }
    public function deleteGuru()
    {
        $this->load->model('Guru_model');
        $this->load->helper('url');
        $this->load->library('session');

        $this->Guru_model->delete_data();

        redirect(base_url().'admin/data_guru', 'refresh');
    }

    // Data Siswa
    public function dataSiswa()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Siswa_model');
        $data['data'] = $this->Siswa_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/browse', $data);
        $this->load->view('templates/footer');
    }
    public function addSiswa()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/add');
        $this->load->view('templates/footer');
    }
    public function editSiswa()
    {
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->model('Siswa_model');
        $data['data'] = $this->Siswa_model->get_by_id();

        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/edit', $data);
        $this->load->view('templates/footer');
    }
    public function saveSiswa()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/edit');
        $this->load->view('templates/footer');

        $this->load->model('Siswa_model');
        $this->Siswa_model->save_data();

        redirect(base_url().'admin/data_siswa', 'refresh');
    }
    public function updateSiswa()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('admin/data_siswa/edit');
        $this->load->view('templates/footer');

        $this->load->model('Siswa_model');
        $this->Siswa_model->update_data();

        redirect(base_url().'admin/data_siswa', 'refresh');
    }
    public function deleteSiswa()
    {
        $this->load->model('Siswa_model');
        $this->load->helper('url');
        $this->load->library('session');

        $this->Siswa_model->delete_data();

        redirect(base_url().'admin/data_siswa', 'refresh');
    }

    // Pendaftaran
    public function pendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_all_data();
        
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/browse', $data);
        $this->load->view('templates/footer');
    }
    public function addPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/add');
        $this->load->view('templates/footer');
    }
    public function savePendaftaran()
	{
		// $email = $_POST['email'];
		// $password = $_POST['password'];
		// $hp = $_POST['hp'];
		// $anak = $_POST['anak'];
		// $tanggal_lahir = $_POST['tanggal_lahir'];
		$this->load->model('Pendaftaran_model');
		$this->load->model('Akun_model');
		$this->load->helper('url');
        $this->load->library('session');

		$birthDate = explode("-", $_POST['tanggal_lahir']);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
			? ((date("Y") - $birthDate[0]) - 1)
			: (date("Y") - $birthDate[0]));
		
		if($age >= 5) {
            $_POST['username'] = strtolower(explode(" ", $_POST['anak'])[0]);
			$this->Akun_model->save_data('wali_murid');
			$this->Pendaftaran_model->save_data();

			redirect(base_url().'pendaftaran', 'refresh');
		} else {
			echo "<script>if(!alert(\"Maaf anak anda belum cukup umur\")) document.location = '".base_url()."pendaftaran/add';</script>";
		}

		
	}
    public function editPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_data();

        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/edit', $data);
        $this->load->view('templates/footer');
    }
    public function updatePendaftaran()
	{
		// $email = $_POST['email'];
		// $password = $_POST['password'];
		// $hp = $_POST['hp'];
		// $anak = $_POST['anak'];
		// $tanggal_lahir = $_POST['tanggal_lahir'];
		$this->load->model('Pendaftaran_model');
		$this->load->helper('url');
        $this->load->library('session');

		$birthDate = explode("-", $_POST['tanggal_lahir']);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
			? ((date("Y") - $birthDate[0]) - 1)
			: (date("Y") - $birthDate[0]));
		
		if($age >= 5) {
			$this->Pendaftaran_model->update_data();

			redirect(base_url().'pendaftaran', 'refresh');
		} else {
			echo "<script>if(!alert(\"Maaf anak anda belum cukup umur\")) document.location = '".base_url()."pendaftaran//edit?id=".$_GET['id']."';</script>";
		}

		
	}
    public function viewPendaftaran()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Pendaftaran_model');
        $data['data'] = $this->Pendaftaran_model->get_data();

        $this->load->view('templates/header');
        $this->load->view('admin/pendaftaran/view', $data);
        $this->load->view('templates/footer');
    }
    public function deletePendaftaran()
    {
        $this->load->model('Pendaftaran_model');
        $this->load->helper('url');
        $this->load->library('session');

        $this->Pendaftaran_model->delete_data();

        redirect(base_url().'admin/pendaftaran', 'refresh');
    }    
}

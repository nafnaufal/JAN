<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');

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

			foreach ($all as $nilai) {
				if ($temp == $nilai->nama_mapel) {
					if ($nilai->kelulusan == "lulus") {
						array_push($lulus_grafik, $nilai->jumlah);
						$lulus = true;
					} else {
						array_push($tidak_lulus_grafik, $nilai->jumlah);
						$tidak_lulus = true;
					}
				}
			}

			if ($tidak_lulus == false) {
				array_push($tidak_lulus_grafik, 0);
			}
			if ($lulus == false) {
				array_push($lulus_grafik, 0);
			}
		}
		// $data['data'] = $this->Nilai_model->get_data_grafik();

		$mapel_string = "";
		$lulus_string = "[";
		$tidak_lulus_string = "[";

		$length = count($mapel_grafik);
		for ($i = 0; $i < $length; $i++) {
			$mapel_string .= '"' . $mapel_grafik[$i] . '",';
			$lulus_string .= $lulus_grafik[$i] . ',';
			$tidak_lulus_string .= $tidak_lulus_grafik[$i] . ',';
		}
		// print_r($mapel_string);


		$data['mapel'] = substr_replace($mapel_string, "", -1);
		$data['lulus'] = substr_replace($lulus_string, "", -1) . "]";
		$data['tidak_lulus'] = substr_replace($tidak_lulus_string, "", -1) . "]";

		if($this->session->has_userdata('username')) {
			$this->load->view('templates/header');
      $this->load->view('dashboard', $data);
      $this->load->view('templates/footer');
		} else {
			redirect(base_url().'login', 'refresh');
		}
	}
}

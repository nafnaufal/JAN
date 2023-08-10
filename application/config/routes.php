<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['login'] = 'Auth/login';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login';
$route['logout'] = 'login/logout';
$route['login/auth'] = 'login/auth';
$route['register'] = 'register';
$route['register/save'] = 'register/save_data';
$route['register/update_pass'] = 'register/change_pass';

$route['admin/dashboard'] = 'welcome';

// Admin Data Guru
$route['admin/data_guru'] = 'admin/dataGuru';
$route['admin/data_guru/add'] = 'admin/addGuru';
$route['admin/data_guru/edit'] = 'admin/editGuru';
$route['admin/data_guru/save'] = 'admin/saveGuru';
$route['admin/data_guru/update'] = 'admin/updateGuru';

// Admin Data Siswa
$route['admin/data_siswa'] = 'admin/dataSiswa';
$route['admin/data_siswa/add'] = 'admin/addSiswa';
$route['admin/data_siswa/edit'] = 'admin/editSiswa';
$route['admin/data_siswa/save'] = 'admin/saveSiswa';
$route['admin/data_siswa/update'] = 'admin/updateSiswa';

// Admin Pendaftaran
$route['admin/pendaftaran'] = 'admin/pendaftaran';
$route['admin/pendaftaran/add'] = 'admin/addPendaftaran';
$route['admin/pendaftaran/edit'] = 'admin/editPendaftaran';
$route['admin/pendaftaran/view'] = 'admin/viewPendaftaran';
$route['admin/pendaftaran/save'] = 'admin/savePendaftaran';
$route['admin/pendaftaran/update'] = 'admin/updatePendaftaran';

$route['admin/ganti_password'] = 'admin/ganti_password';

// Guru
$route['guru/dashboard'] = 'guru';
$route['guru/nilai'] = 'guru/dataNilai';
$route['guru/nilai/add'] = 'guru/addNilai';
$route['guru/nilai/edit'] = 'guru/editNilai';
$route['guru/nilai/view'] = 'guru/viewNilai';
$route['guru/nilai/save'] = 'guru/saveNilai';

// Pendaftaran
$route['pendaftaran'] = 'admin/pendaftaran';
$route['pendaftaran/add'] = 'admin/addPendaftaran';
$route['pendaftaran/edit'] = 'admin/editPendaftaran';
$route['pendaftaran/view'] = 'admin/viewPendaftaran';

$route['guru/ganti_password'] = 'guru/ganti_password';

// Wali Murid
$route['wali/dashboard'] = 'wali';
$route['wali/pendaftaran'] = 'wali/viewPendaftaran';
$route['wali/pendaftaran/edit'] = 'wali/editPendaftaran';
$route['wali/pendaftaran/update'] = 'wali/updatePendaftaran';
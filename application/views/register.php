<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  <img src="<?php echo base_url(); ?>/assets/img/logo-jan.png" alt="logo" height="50px">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Sistem Informasi Akademik TK KB</h4>

              <form id="formAuthentication" class="mb-3" action="register/save" method="POST" onsubmit="submitItem(event)">
                <div class="mb-3">
                  <label for="anak" class="form-label">Nama Anak</label>
                  <input
                    type="text"
                    class="form-control"
                    id="anak"
                    name="anak"
                    placeholder="Masukkan Nama Anak"
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                    type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bi bi-eye-slash"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="hp" class="form-label">No. HP</label>
                  <input
                    type="number"
                    class="form-control"
                    id="hp"
                    name="hp"
                    placeholder="Masukkan No. HP"
                  />
                </div>

                <div class="mb-3">
                  <label for="jk" class="form-label">Jenis Kelamin</label>
                  <select
                    type="text"
                    class="form-control"
                    id="jk"
                    name="jk"
                    placeholder="Pilih Jenis Kelamin"
                  >
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir Anak</label>
                  <input
                    type="date"
                    class="form-control"
                    id="tanggal_lahir"
                    name="tanggal_lahir"
                    placeholder="Masukkan Tanggal Lahir Anak"
                  />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ayah">Nama Ayah</label>
                    <input type="text" class="form-control" id="ayah" name="ayah" placeholder="Nama Ayah" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ibu">Nama Ibu</label>
                    <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Nama Ibu" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="agama">Agama</label>
                    <select class="form-select" id="agama" name="agama" aria-label="Agama">
                        <option value="Islam" selected>Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                </div>
                <input type="submit" class="btn btn-primary d-grid w-100" value="Daftar">
              </form>

              <p class="text-center">
                <span>Sudah punya akun?</span>
                <a href="login">
                  <span>Masuk</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    <script>
        function submitItem(event) {
            if (ageCalculator() < 5) {
                event.preventDefault();

                Swal.fire({
                    title: 'Usia Anak Belum 5 Tahun!',
                    icon: 'warning',
                });
            } else {
                Swal.fire({
                    title: 'Data Tersimpan',
                    icon: 'success',
                });
            }
        }

        function ageCalculator() {
            var userinput = document.getElementById("tanggal_lahir").value;
            var dob = new Date(userinput);

            //calculate month difference from current date in time  
            var month_diff = Date.now() - dob.getTime();

            //convert the calculated difference in date format  
            var age_dt = new Date(month_diff);

            //extract year from date      
            var year = age_dt.getUTCFullYear();

            //now calculate the age of the user  
            var age = Math.abs(year - 1970);

            //display the calculated age  
            return age;
        }
    </script>
    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url(); ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
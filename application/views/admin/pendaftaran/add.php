<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran /</span> Add</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftaran</h5>
                        <!-- <small class="text-muted float-end">Add</small> -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= base_url() ?>admin/pendaftaran/save" onsubmit="submitItem(event)">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Anak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="anak" placeholder="Nama" />
                                </div>
                            </div>
                            <div class="row mb-3 form-password-toggle">
                                <label class="col-sm-2 col-form-label" for="password">Password</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bi bi-eye-slash"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tanggal">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal_lahir" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kelamin">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="kelamin" name="jk" aria-label="Jenis Kelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ayah">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ayah" name="ayah" placeholder="Nama Ayah" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ibu">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Nama Ibu" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
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
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

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
            var userinput = document.getElementById("tanggal").value;
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
</div>
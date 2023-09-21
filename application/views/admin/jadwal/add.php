<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jadwal /</span> Add</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Jadwal</h5>
                        <!-- <small class="text-muted float-end">Add</small> -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="hari">Hari</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="hari" id="hari">
                                        <option value="1">Senin</option>
                                        <option value="2">Selasa</option>
                                        <option value="3">Rabu</option>
                                        <option value="4">Kamis</option>
                                        <option value="5">Jumat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="mulai">Jam Mulai</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="mulai" name="mulai" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="selesai">Jam Selesai</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="selesai" name="selesai" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="mapel">Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="mapel" name="mapel" aria-label="mapel">
                                        <?php foreach ($mapel as $x) { ?>
                                            <option value="<?= $x->id ?>"><?= $x->nama_mapel ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ruang">Ruangan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="ruang" name="ruang" aria-label="ruang">
                                        <option value="1 A" <?php
                                                            // if ($data->jk === "Laki-Laki") {
                                                            //     echo "selected";
                                                            // }
                                                            ?>>1 A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="guru">Guru</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="guru" name="guru" aria-label="guru">
                                        <?php
                                        foreach ($guru as $x) {

                                        ?>
                                            <option value="<?= $x->id ?>"><?= $x->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="mapel">Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="mapel" name="mapel" aria-label="mapel">
                                        <option value="Berhitung" <?php
                                                                    // if ($data->jk === "Laki-Laki") {
                                                                    //     echo "selected";
                                                                    // }
                                                                    ?>>Berhitung</option>
                                        <option value="Menulis" <?php
                                                                // if ($data->jk === "Laki-Laki") {
                                                                //     echo "selected";
                                                                // }
                                                                ?>>Menulis</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
</div>
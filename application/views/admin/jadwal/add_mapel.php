<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mata Pelajaran /</span> Add</h4>

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
                        <form method="POST" action="<?= base_url() ?>admin/mapel/save">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" />
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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
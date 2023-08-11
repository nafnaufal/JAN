<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nilai /</span> Add</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Nilai</h5>
                        <!-- <small class="text-muted float-end">Add</small> -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= base_url() ?>guru/nilai/save">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="mapel">Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="mapel" name="mapel" aria-label="Mapel">
                                        <option value="1">Berhitung</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="siswa">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="siswa" name="siswa" aria-label="Siswa">
                                        <?php 
                                            foreach ($siswa as $record) {
                                        ?>
                                            <option value="<?= $record->id ?>" selected><?= $record->nama ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nilai">Nilai</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="nilai" name="nilai" aria-label="Nilai">
                                        <option value="A" selected>A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
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


</div>
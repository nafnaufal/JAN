<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran /</span> Detail</h4>
        <a href="<?php echo base_url(); ?>guru/nilai/add" class="btn btn-primary mb-2">Add</a>
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Nama Siswa</label>
                            <div class="col-sm-10">
                                <span><?= $siswa->nama ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kelas">Kelas</label>
                            <div class="col-sm-10">
                                <span><?= $siswa->kelas ?></span>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php
                                        foreach ($nilai as $record) {
                                    ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $record->id_mapel ?></strong></td>
                                        <td><span><?= $record->nilai ?></span></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>guru/nilai/delete?id=<?= $record->id ?>&siswa=<?= $siswa->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


</div>
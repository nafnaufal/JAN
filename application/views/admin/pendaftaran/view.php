<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran /</span> Detail</h4>

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
                            <label class="col-sm-2 col-form-label" for="nama">Nama Anak</label>
                            <div class="col-sm-10">
                                <span><?= $data->nama ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <span><?php
                                    $tl = date_create($data->tanggal_lahir);
                                    echo date_format($tl, 'd F Y');
                                ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kelamin">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <span><?= $data->jk ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="ayah">Nama Ayah</label>
                            <div class="col-sm-10">
                                <span><?= $data->nama_ayah ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="ibu">Nama Ibu</label>
                            <div class="col-sm-10">
                                <span><?= $data->nama_ibu ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                            <div class="col-sm-10">
                                <span><?= $data->agama ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                                <span><?= $data->alamat ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


</div>
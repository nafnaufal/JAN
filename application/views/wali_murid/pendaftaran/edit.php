<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran /</span> Edit</h4>

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
                        <form method="POST" action="<?= base_url() ?>wali/pendaftaran/update?id=<?= $data->id ?>">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="anak">Nama Anak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="anak" name="anak" value="<?= $data->nama ?>" placeholder="Nama" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="username">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $data->username ?>" placeholder="Username" readonly />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kelamin">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="kelamin" name="jk" aria-label="Jenis Kelamin">
                                        <option value="Laki-Laki" <?php if($data->jk === "Laki-Laki"){ echo "selected";} ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if($data->jk === "Perempuan"){ echo "selected";} ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ayah">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ayah" name="ayah" value="<?= $data->nama_ayah ?>" placeholder="Nama Ayah" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ibu">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ibu" name="ibu" value="<?= $data->nama_ibu ?>" placeholder="Nama Ibu" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="agama" name="agama" aria-label="Agama">
                                            <option value="Islam" <?php if($data->agama === "Islam"){ echo "selected";} ?>>Islam</option>
                                            <option value="Katolik" <?php if($data->agama === "Katolik"){ echo "selected";} ?>>Katolik</option>
                                            <option value="Protestan" <?php if($data->agama === "Protestan"){ echo "selected";} ?>>Protestan</option>
                                            <option value="Hindu" <?php if($data->agama === "Hindu"){ echo "selected";} ?>>Hindu</option>
                                            <option value="Budha" <?php if($data->agama === "Budha"){ echo "selected";} ?>>Budha</option>
                                            <option value="Konghucu" <?php if($data->agama === "Konghucu"){ echo "selected";} ?>>Konghucu</option>
                                            <option value="Lainnya" <?php if($data->agama === "Lainnya"){ echo "selected";} ?>>Lainnya</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Alamat"><?= $data->alamat ?></textarea>
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


</div>
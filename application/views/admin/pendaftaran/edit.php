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
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Anak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tanggal">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kelamin">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="kelamin" aria-label="Jenis Kelamin">
                                        <option value="pria" selected>Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ayah">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ayah" placeholder="Nama Ayah" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ibu">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ibu" placeholder="Nama Ibu" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <select class="form-select" id="agama" aria-label="Agama">
                                            <option value="pria" selected>Islam</option>
                                            <option value="wanita">Katolik</option>
                                            <option value="wanita">Protestan</option>
                                            <option value="wanita">Hindu</option>
                                            <option value="wanita">Budha</option>
                                            <option value="wanita">Konghucu</option>
                                            <option value="wanita">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea id="alamat" class="form-control" placeholder="Alamat"></textarea>
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
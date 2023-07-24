<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Siswa /</span> Browse</h4>

        <a href="<?php echo base_url(); ?>/data_siswa/add" class="btn btn-primary mb-2">Add</a>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Data Siswa</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Kelas</th>
                            <th>Wali Murid</th>
                            <th>No HP</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Cook</strong></td>
                            <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            <td>10 A</td>
                            <td>Ayam</td>
                            <td>1111111</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/data_siswa/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="<?php echo base_url(); ?>/data_siswa/delete"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Cook</strong></td>
                            <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            <td>10 A</td>
                            <td>Ayam</td>
                            <td>1111111</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/data_siswa/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="<?php echo base_url(); ?>/data_siswa/delete"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Cook</strong></td>
                            <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            <td>10 A</td>
                            <td>Ayam</td>
                            <td>1111111</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/data_siswa/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="<?php echo base_url(); ?>/data_siswa/delete"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
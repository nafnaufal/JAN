<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Guru /</span> Browse</h4>

        <a href="<?php echo base_url(); ?>admin/data_guru/add" class="btn btn-primary mb-2">Add</a>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Data Guru</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Kelas</th>
                            <th>Jabatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                            foreach ($data as $record) {
                        ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $record->nama ?></strong></td>
                            <td><?= $record->nip ?></td>
                            <td>
                                <ul>
                                    <li>
                                        <span class="badge bg-label-success me-1"><?= $record->kelas ?></span>
                                    </li>
                                </ul>
                            </td>
                            <td><?= $record->jabatan ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/data_guru/edit?id=<?= $record->id ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="<?php echo base_url(); ?>/data_guru/delete?id=<?= $record->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
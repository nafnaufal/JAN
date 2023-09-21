<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jadwal /</span> Detail</h4>
        <a href="<?php echo base_url(); ?>admin/mapel/addJadwal" class="btn btn-primary mb-2">Add</a>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Jadwal</h5>
                        <!-- <small class="text-muted float-end">Add</small> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Mata pelajaran</label>
                            <div class="col-sm-10">
                                <strong>Test</strong>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><strong>A</strong></td>
                                            <td>Selasa</td>
                                            <td>8.30 WIB</td>
                                            <td>11.30 WIB</td>
                                            <td>
                                                <a class="btn btn-danger" href="#" onclick="deleteItem()"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <script>
        function deleteItem() {
            Swal.fire({
                title: 'Hapus Data?',
                // text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Data Dihapus'
                    ).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "<?php echo base_url(); ?>guru/nilai/delete?id=<?= $record->id ?>&siswa=<?= $siswa->id ?>";
                        }
                    })
                }
            })
        }
    </script>
</div>
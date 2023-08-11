          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="card mb-4">
                <h5 class="card-header">Biodata Anak</h5>
                <div class="card-body">
                  <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />

                    <div class="container justify-content-end">
                      <div class="row">
                        <div class="col-2">
                          Nama :
                        </div>
                        <div class="col-10">
                          <?= $data->nama ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          Kelas :
                        </div>
                        <div class="col-10">
                          <?php
                          if ($data->status === "Menunggu Pengumuman Kelas") {
                            echo $data->status;
                          }
                          ?>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col-2">
                          Status :
                        </div>
                        <div class="col-10">
                          <td><span class="badge bg-label-primary me-1">Lulus</span></td>
                          <td><span class="badge bg-label-danger me-1">Tidak Lulus</span></td>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <?php
                if ($data->status === "Menunggu Pengumuman Kelas") {
              ?>
              <div class="card mb-4">
                <h5 class="card-header">Pengumuman</h5>
                <div class="card-body">
                  Untuk keperluan administrasi, silahkan membawa berkas berikut pada saat Pendaftaran Ulang:
                  <ol>
                    <li>5 (lima) lembar fotokopi Akta Kelahiran</li>
                    <li>5 (lima) lembar fotokopi Kartu Keluarga</li>
                  </ol>
                </div>
              </div>
              <?php } else { ?>
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>19-2-2020</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Berhitung</strong></td>
                        <td><span class="badge bg-label-primary me-1">B</span></td>
                        <td>
                          <button type="button" class="btn btn-primary">
                            Detail
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>19-2-2020</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Berhitung</strong></td>
                        <td><span class="badge bg-label-primary me-1">B</span></td>
                        <td>
                          <button type="button" class="btn btn-primary">
                            Detail
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>19-2-2020</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Berhitung</strong></td>
                        <td><span class="badge bg-label-primary me-1">B</span></td>
                        <td>
                          <button type="button" class="btn btn-primary">
                            Detail
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>
            </div>
            <!--/ Total Revenue -->
          </div>
          <!-- / Content -->


          <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
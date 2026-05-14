<?php $page = 'user_role_map'; ?> 
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">    

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        User ↔ Role Mapping
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk menghubungkan user login dengan role/hak akses sistem. 
        Satu user dapat memiliki banyak role aktif sesuai kebutuhan operasional dan otorisasi aplikasi.
      </p>

    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- ======================= CARD FILTER ======================= -->
          <div class="card">

            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                  <b>Role Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Priority Level:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Access Type:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Total Mapping:</b> 11 Data
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add Mapping
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>

                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>

              </div>
            </div>

          </div>

          <!-- ======================= CARD TABLE ======================= -->
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">
                Daftar User Role Mapping
              </h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px">No</th>
                      <th>Mapping ID</th>
                      <th>User Login</th>
                      <th>Role ID</th>
                      <th>Role Name</th>
                      <th>Hak Akses</th>
                      <th>Priority</th>
                      <th>Is Active</th>
                      <th width="150px">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>URM001</td>
                      <td>haso333</td>
                      <td>ROLE001</td>
                      <td>Administrator</td>
                      <td>Full Access System</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalAksi">
                          <i class="fas fa-cogs"></i>
                        </button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>URM002</td>
                      <td>haso333</td>
                      <td>ROLE002</td>
                      <td>Dosen</td>
                      <td>Akademik Pengajaran</td>
                      <td class="text-center">2</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>URM003</td>
                      <td>pramita19</td>
                      <td>ROLE003</td>
                      <td>Mahasiswa</td>
                      <td>Akses Portal Akademik</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>URM004</td>
                      <td>claudia.staff</td>
                      <td>ROLE004</td>
                      <td>Staff Akademik</td>
                      <td>Administrasi Akademik</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>URM005</td>
                      <td>budi.koor</td>
                      <td>ROLE005</td>
                      <td>Koordinator Prodi</td>
                      <td>Approval Akademik</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>URM006</td>
                      <td>nadia.mhs</td>
                      <td>ROLE006</td>
                      <td>Peserta Seminar</td>
                      <td>Akses Event Kampus</td>
                      <td class="text-center">3</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>URM007</td>
                      <td>rizky.gudang</td>
                      <td>ROLE007</td>
                      <td>Warehouse Staff</td>
                      <td>Manajemen Gudang</td>
                      <td class="text-center">2</td>
                      <td class="text-center"><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>URM008</td>
                      <td>supplier01</td>
                      <td>ROLE008</td>
                      <td>Supplier</td>
                      <td>Vendor Procurement</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>URM009</td>
                      <td>customer01</td>
                      <td>ROLE009</td>
                      <td>Customer</td>
                      <td>Portal Pelanggan</td>
                      <td class="text-center">2</td>
                      <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>URM010</td>
                      <td>annisa.dosen</td>
                      <td>ROLE010</td>
                      <td>Dosen Pembimbing</td>
                      <td>Bimbingan Akademik</td>
                      <td class="text-center">1</td>
                      <td class="text-center"><span class="badge bg-danger">Nonaktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>URM011</td>
                      <td>guest.demo</td>
                      <td>ROLE011</td>
                      <td>Guest Viewer</td>
                      <td>Read Only Access</td>
                      <td class="text-center">5</td>
                      <td class="text-center"><span class="badge bg-secondary">Readonly</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
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
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ======================= MODAL FILTER ======================= -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan filter untuk mempersempit data mapping role berdasarkan status role dan prioritas akses.
        </div>

        <div class="mb-3">
          <label class="form-label">Role Status</label>
          <select class="form-select">
            <option>Semua</option>
            <option>Aktif</option>
            <option>Pending</option>
            <option>Nonaktif</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Priority</label>
          <select class="form-select">
            <option>Semua</option>
            <option>1 - Utama</option>
            <option>2 - Menengah</option>
            <option>3 - Tambahan</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-info">Terapkan Filter</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL ADD ======================= -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Satu user dapat memiliki lebih dari satu role untuk mendukung multi akses dan multi fungsi dalam sistem.
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label class="form-label">User Login</label>
            <select class="form-select">
              <option>-- Pilih User --</option>
              <option>haso333</option>
              <option>pramita19</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Role</label>
            <select class="form-select">
              <option>-- Pilih Role --</option>
              <option>Administrator</option>
              <option>Dosen</option>
              <option>Mahasiswa</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Priority</label>
            <input type="number" class="form-control" placeholder="1">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Is Active</label>
            <select class="form-select">
              <option>Aktif</option>
              <option>Pending</option>
              <option>Nonaktif</option>
            </select>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Simpan Mapping</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL IMPORT ======================= -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan user dan role sudah tersedia sebelum melakukan import mapping role.
        </div>

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template Import
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL VIEW ======================= -->
<div class="modal fade" id="modalView" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="35%">User Login</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Role</th>
            <td>Administrator</td>
          </tr>

          <tr>
            <th>Hak Akses</th>
            <td>Full Access System</td>
          </tr>

          <tr>
            <th>Priority</th>
            <td>1</td>
          </tr>

          <tr>
            <th>Is Active</th>
            <td>Aktif</td>
          </tr>

        </table>

      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL EDIT ======================= -->
<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Priority</label>
          <input type="number" class="form-control" value="1">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option selected>Aktif</option>
            <option>Pending</option>
            <option>Nonaktif</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL AKSI ======================= -->
<div class="modal fade" id="modalAksi" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Aksi User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">

          <button class="btn btn-outline-primary">
            <i class="fas fa-user-shield me-1"></i> Set Priority Utama
          </button>

          <button class="btn btn-outline-success">
            <i class="fas fa-check-circle me-1"></i> Aktivasi Role
          </button>

          <button class="btn btn-outline-warning">
            <i class="fas fa-sync-alt me-1"></i> Sinkronisasi Hak Akses
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-unlink me-1"></i> Putuskan Mapping
          </button>

        </div>

      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL BANTUAN ======================= -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan User ↔ Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman <b>User ↔ Role Mapping</b> digunakan untuk menghubungkan akun login user dengan role atau hak akses sistem.
        </p>

        <hr>

        <p>
          <b>Konsep Penting:</b>
        </p>

        <ul>
          <li><b>User</b> = akun login autentikasi sistem.</li>
          <li><b>Role</b> = kumpulan hak akses fitur.</li>
          <li><b>Mapping</b> = relasi user dengan role.</li>
          <li><b>Priority</b> = urutan prioritas role utama.</li>
          <li><b>is_active</b> = menentukan role masih digunakan atau tidak.</li>
        </ul>

        <hr>

        <p>
          <b>Makna Utama:</b>
        </p>

        <div class="alert alert-info">
          User dapat memiliki banyak role sekaligus sesuai kebutuhan bisnis dan operasional sistem.
        </div>

        <hr>

        <p>
          Contoh:
        </p>

        <ul>
          <li>User login: <b>haso333</b></li>
          <li>Role 1: <b>Administrator</b></li>
          <li>Role 2: <b>Dosen</b></li>
          <li>Priority 1 akan menjadi role utama ketika sistem menentukan menu default dan otorisasi awal.</li>
        </ul>

        <hr>

        <p>
          Cara membaca tabel:
        </p>

        <ul>
          <li><b>Role ID</b> = identitas unik role.</li>
          <li><b>Hak Akses</b> = area fungsi yang dapat diakses.</li>
          <li><b>Priority</b> = urutan prioritas role.</li>
          <li><b>Is Active</b> = status role masih aktif atau tidak.</li>
        </ul>

        <hr>

        <p>
          Tombol aksi:
        </p>

        <ul>
          <li><b>View:</b> melihat detail mapping role.</li>
          <li><b>Edit:</b> mengubah priority dan status role.</li>
          <li><b>Aksi:</b> aktivasi role, sinkronisasi akses, dan putus mapping.</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL RESET ======================= -->
<div class="modal fade" id="modalResetData" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh data user role mapping?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL ERROR ======================= -->
<div class="modal fade" id="modalGagal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>
          Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>Masalah:</strong><br>
          Mapping role gagal diproses.
        </p>

        <p>
          <strong>Penyebab:</strong><br>
          User belum valid atau role belum tersedia di sistem.
        </p>

        <p>
          <strong>Solusi:</strong><br>
          Pastikan user dan role aktif sebelum melakukan mapping.
        </p>

        <div class="alert alert-warning">
          Tip: Hindari memberikan terlalu banyak role dengan priority tinggi pada satu user.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
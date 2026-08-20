<?php $page = 'user_actor_map'; ?> 
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">    

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        User ↔ Actor Mapping
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk menghubungkan data login user dengan actor bisnis nyata yang digunakan sistem sebagai sumber scope data dan hak akses tampilan.
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
                  <b>User Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Actor Type:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Primary Mapping:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Total Mapping:</b> 11 Data
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ml-auto">

                <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add Mapping
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>

                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalResetData">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle mr-1"></i> ErrorHandler
                </button>

              </div>
            </div>

          </div>

          <!-- ======================= CARD TABLE ======================= -->
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">
                Daftar User Actor Mapping
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
                      <th>Actor ID</th>
                      <th>Nama Actor</th>
                      <th>Actor Type</th>
                      <th>Mode Login</th>
                      <th>Primary</th>
                      <th>Status</th>
                      <th width="150px">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>MAP001</td>
                      <td>haso333</td>
                      <td>ACT001</td>
                      <td>Ho Aldika Novaldy</td>
                      <td><span class="badge badge-primary">Dosen</span></td>
                      <td>Dosen Pengampu</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>MAP002</td>
                      <td>haso333</td>
                      <td>ACT008</td>
                      <td>Ho Aldika Novaldy</td>
                      <td><span class="badge badge-warning">Staff</span></td>
                      <td>Staf Prodi</td>
                      <td class="text-center"><span class="badge badge-secondary">Secondary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>MAP003</td>
                      <td>pramita19</td>
                      <td>ACT002</td>
                      <td>Pramita Widyadari</td>
                      <td><span class="badge badge-success">Mahasiswa</span></td>
                      <td>Peserta Kelas</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>MAP004</td>
                      <td>claudia.staff</td>
                      <td>ACT003</td>
                      <td>Claudia Monica</td>
                      <td><span class="badge badge-warning">Staff</span></td>
                      <td>Administrasi Akademik</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>MAP005</td>
                      <td>budi.koor</td>
                      <td>ACT010</td>
                      <td>Budi Santoso</td>
                      <td><span class="badge badge-primary">Dosen</span></td>
                      <td>Koordinator Prodi</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>MAP006</td>
                      <td>nadia.mhs</td>
                      <td>ACT009</td>
                      <td>Nadia Maharani</td>
                      <td><span class="badge badge-success">Mahasiswa</span></td>
                      <td>Peserta Seminar</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>MAP007</td>
                      <td>rizky.gudang</td>
                      <td>ACT008</td>
                      <td>Rizky Ramadhan</td>
                      <td><span class="badge badge-warning">Staff</span></td>
                      <td>Kepala Gudang</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>MAP008</td>
                      <td>supplier01</td>
                      <td>ACT004</td>
                      <td>CV Sumber Makmur</td>
                      <td><span class="badge badge-info">Supplier</span></td>
                      <td>Vendor Pengadaan</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>MAP009</td>
                      <td>customer01</td>
                      <td>ACT005</td>
                      <td>PT Karya Digital</td>
                      <td><span class="badge badge-secondary">Customer</span></td>
                      <td>Pelanggan Institusi</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>MAP010</td>
                      <td>annisa.dosen</td>
                      <td>ACT006</td>
                      <td>Annisa Regita</td>
                      <td><span class="badge badge-primary">Dosen</span></td>
                      <td>Dosen Pembimbing</td>
                      <td class="text-center"><span class="badge badge-success">Primary</span></td>
                      <td class="text-center"><span class="badge badge-danger">Nonaktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>MAP011</td>
                      <td>guest.demo</td>
                      <td>-</td>
                      <td>Belum Terhubung</td>
                      <td><span class="badge badge-danger">No Actor</span></td>
                      <td>View Only</td>
                      <td class="text-center"><span class="badge badge-secondary">-</span></td>
                      <td class="text-center"><span class="badge badge-warning">Warning</span></td>
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
        <h5 class="modal-title">Filter Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan filter untuk mempersempit data mapping antara login user dan actor bisnis.
        </div>

        <div class="mb-3">
          <label class="form-label">Actor Type</label>
          <select class="custom-select">
            <option>Semua</option>
            <option>Dosen</option>
            <option>Mahasiswa</option>
            <option>Staff</option>
            <option>Supplier</option>
            <option>Customer</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Primary Mapping</label>
          <select class="custom-select">
            <option>Semua</option>
            <option>Primary</option>
            <option>Secondary</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <h5 class="modal-title">Tambah User Actor Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Mapping digunakan untuk menghubungkan user login dengan actor nyata agar sistem dapat menentukan scope data dan mode akses.
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label class="form-label">User Login</label>
            <select class="custom-select">
              <option>-- Pilih User Login --</option>
              <option>haso333</option>
              <option>pramita19</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Actor</label>
            <select class="custom-select">
              <option>-- Pilih Actor --</option>
              <option>ACT001 - Ho Aldika Novaldy</option>
              <option>ACT002 - Pramita Widyadari</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Mode Login</label>
            <input type="text" class="form-control" placeholder="Contoh: Dosen Pengampu">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Primary Mapping</label>
            <select class="custom-select">
              <option>Yes</option>
              <option>No</option>
            </select>
          </div>

          <div class="col-md-12 mb-3">
            <label class="form-label">Status</label>
            <select class="custom-select">
              <option>Aktif</option>
              <option>Pending</option>
              <option>Nonaktif</option>
            </select>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <h5 class="modal-title">Import Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan actor dan user login sudah tersedia sebelum melakukan import mapping.
        </div>

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template Import
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <h5 class="modal-title">Detail Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="35%">User Login</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Actor</th>
            <td>Ho Aldika Novaldy</td>
          </tr>

          <tr>
            <th>Actor Type</th>
            <td>Dosen</td>
          </tr>

          <tr>
            <th>Mode Login</th>
            <td>Dosen Pengampu</td>
          </tr>

          <tr>
            <th>Primary Mapping</th>
            <td>Yes</td>
          </tr>

          <tr>
            <th>Status</th>
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
        <h5 class="modal-title">Edit Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Mode Login</label>
          <input type="text" class="form-control" value="Dosen Pengampu">
        </div>

        <div class="mb-3">
          <label class="form-label">Primary Mapping</label>
          <select class="custom-select">
            <option selected>Yes</option>
            <option>No</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="custom-select">
            <option selected>Aktif</option>
            <option>Pending</option>
            <option>Nonaktif</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <h5 class="modal-title">Aksi Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

                  <button class="btn btn-outline-primary w-100 mb-2">
            <i class="fas fa-user-shield mr-1"></i> Set Sebagai Primary
          </button>

          <button class="btn btn-outline-success w-100 mb-2">
            <i class="fas fa-random mr-1"></i> Pindah Mode Login
          </button>

          <button class="btn btn-outline-warning w-100 mb-2">
            <i class="fas fa-key mr-1"></i> Reset Scope Session
          </button>

          <button class="btn btn-outline-danger w-100 mb-2">
            <i class="fas fa-unlink mr-1"></i> Putuskan Mapping
          </button>

        

      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL BANTUAN ======================= -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan User ↔ Actor Mapping</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk menghubungkan akun login sistem dengan actor bisnis nyata.
        </p>

        <hr>

        <p>
          <b>Konsep Penting:</b>
        </p>

        <ul>
          <li><b>User Login</b> = akun autentikasi sistem.</li>
          <li><b>Actor</b> = identitas nyata di bisnis/kampus.</li>
          <li><b>Mapping</b> = penghubung antara login dan actor.</li>
          <li><b>Role</b> = hak akses fitur.</li>
          <li><b>Actor Mapping</b> = penentu scope data yang tampil.</li>
        </ul>

        <hr>

        <p>
          Contoh:
        </p>

        <ul>
          <li>User login: <b>haso333</b></li>
          <li>Mapping actor dosen: <b>Ho Aldika Novaldy</b></li>
          <li>Mode aktif: <b>Dosen</b></li>
          <li>Maka sistem menampilkan kelas yang diampu actor dosen tersebut.</li>
        </ul>

        <hr>

        <p>
          Jika user memiliki role tetapi tidak memiliki actor mapping:
        </p>

        <ul>
          <li>Role dapat dinonaktifkan otomatis.</li>
          <li>Atau mode login tetap tampil tetapi data kosong.</li>
          <li>Disarankan role hanya aktif jika actor mapping tersedia.</li>
        </ul>

        <hr>

        <p>
          Fungsi field:
        </p>

        <ul>
          <li><b>is_primary</b> → menentukan actor utama default saat login.</li>
          <li><b>status</b> → menentukan mapping masih aktif digunakan atau tidak.</li>
        </ul>

        <hr>

        <p>
          Tombol aksi:
        </p>

        <ul>
          <li><b>View:</b> melihat detail mapping.</li>
          <li><b>Edit:</b> mengubah pengaturan mapping.</li>
          <li><b>Aksi:</b> set primary, pindah mode login, reset scope, dan lainnya.</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">
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
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh data mapping user actor?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
          <i class="fas fa-times-circle mr-2"></i>
          Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>Masalah:</strong><br>
          Mapping gagal diproses.
        </p>

        <p>
          <strong>Penyebab:</strong><br>
          User login belum memiliki actor valid atau actor tidak aktif.
        </p>

        <p>
          <strong>Solusi:</strong><br>
          Pastikan actor sudah tersedia dan status mapping aktif.
        </p>

        <div class="alert alert-warning">
          Tip: Hindari assign role tanpa actor mapping agar scope data tidak kosong.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
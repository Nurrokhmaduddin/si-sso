<?php $page = 'master_actor'; ?> 
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">    

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Master Actor
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mengelola seluruh data aktor bisnis sebagai sumber data utama (source of truth) yang digunakan oleh sistem.
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
                  <b>Actor Type:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Role Participation:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Total Data:</b> 11 Actor
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ml-auto">

                <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
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
                Daftar Master Actor
              </h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px">No</th>
                      <th>Actor ID</th>
                      <th>Actor Type</th>
                      <th>Nama Actor</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Role Participation (hapus)</th>
                      <th>Status</th>
                      <th width="150px">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>ACT001</td>
                      <td><span class="badge-primary">Dosen</span></td>
                      <td>Ho Aldika Novaldy</td>
                      <td>aldika@kampus.ac.id</td>
                      <td>081234567001</td>
                      <td>Dosen Pengampu</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalView">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEdit">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#modalAksi">
                          <i class="fas fa-cogs"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>ACT002</td>
                      <td><span class="badge-success">Mahasiswa</span></td>
                      <td>Pramita Widyadari</td>
                      <td>pramita@kampus.ac.id</td>
                      <td>081234567002</td>
                      <td>Peserta Kelas</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>ACT003</td>
                      <td><span class="badge-warning">Staff</span></td>
                      <td>Claudia Monica</td>
                      <td>claudia@kampus.ac.id</td>
                      <td>081234567003</td>
                      <td>Administrasi Akademik</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>ACT004</td>
                      <td><span class="badge-info">Supplier</span></td>
                      <td>CV Sumber Makmur</td>
                      <td>supplier@sumbermakmur.id</td>
                      <td>081234567004</td>
                      <td>Vendor Pengadaan</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>ACT005</td>
                      <td><span class="badge-secondary">Customer</span></td>
                      <td>PT Karya Digital</td>
                      <td>cs@karyadigital.id</td>
                      <td>081234567005</td>
                      <td>Pelanggan Institusi</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>ACT006</td>
                      <td><span class="badge-primary">Dosen</span></td>
                      <td>Annisa Regita</td>
                      <td>annisa@kampus.ac.id</td>
                      <td>081234567006</td>
                      <td>Dosen Pembimbing</td>
                      <td class="text-center"><span class="badge-warning">Cuti</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>ACT007</td>
                      <td><span class="badge-success">Mahasiswa</span></td>
                      <td>Filza Aliyah</td>
                      <td>filza@kampus.ac.id</td>
                      <td>081234567007</td>
                      <td>Peserta Kelas</td>
                      <td class="text-center"><span class="badge-danger">Nonaktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>ACT008</td>
                      <td><span class="badge-warning">Staff</span></td>
                      <td>Rizky Ramadhan</td>
                      <td>rizky@kampus.ac.id</td>
                      <td>081234567008</td>
                      <td>Kepala Gudang</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>ACT009</td>
                      <td><span class="badge-success">Mahasiswa</span></td>
                      <td>Nadia Maharani</td>
                      <td>nadia@kampus.ac.id</td>
                      <td>081234567009</td>
                      <td>Peserta Seminar</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>ACT010</td>
                      <td><span class="badge-primary">Dosen</span></td>
                      <td>Budi Santoso</td>
                      <td>budi@kampus.ac.id</td>
                      <td>081234567010</td>
                      <td>Koordinator Prodi</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>ACT011</td>
                      <td><span class="badge-info">Supplier</span></td>
                      <td>PT Mitra Teknologi</td>
                      <td>mitra@teknologi.id</td>
                      <td>081234567011</td>
                      <td>Vendor Infrastruktur</td>
                      <td class="text-center"><span class="badge-success">Aktif</span></td>
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
        <h5 class="modal-title">Filter Data Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan filter untuk mempersempit data actor berdasarkan tipe actor dan status actor.
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
          <label class="form-label">Status</label>
          <select class="custom-select">
            <option>Semua</option>
            <option>Aktif</option>
            <option>Nonaktif</option>
            <option>Cuti</option>
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
        <h5 class="modal-title">Tambah Master Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Data actor adalah sumber utama identitas bisnis. Pastikan data actor valid sebelum digunakan pada user management.
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label class="form-label">Actor Type</label>
            <select class="custom-select">
              <option>-- Pilih Actor Type --</option>
              <option>Dosen</option>
              <option>Mahasiswa</option>
              <option>Staff</option>
              <option>Customer</option>
              <option>Supplier</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Status</label>
            <select class="custom-select">
              <option>Aktif</option>
              <option>Nonaktif</option>
              <option>Cuti</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Nama Actor</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Role Participation</label>
            <input type="text" class="form-control" placeholder="Contoh: Dosen Pengampu">
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Simpan Data</button>
      </div>

    </div>
  </div>
</div>

<!-- ======================= MODAL IMPORT ======================= -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Data Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file menggunakan template resmi agar struktur actor dapat diproses sistem dengan benar.
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
        <h5 class="modal-title">Detail Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="35%">Actor ID</th>
            <td>ACT001</td>
          </tr>

          <tr>
            <th>Actor Type</th>
            <td>Dosen</td>
          </tr>

          <tr>
            <th>Nama Actor</th>
            <td>Ho Aldika Novaldy</td>
          </tr>

          <tr>
            <th>Email</th>
            <td>aldika@kampus.ac.id</td>
          </tr>

          <tr>
            <th>Phone</th>
            <td>081234567001</td>
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
        <h5 class="modal-title">Edit Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Nama Actor</label>
          <input type="text" class="form-control" value="Ho Aldika Novaldy">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" value="aldika@kampus.ac.id">
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" value="081234567001">
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
        <h5 class="modal-title">Aksi Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <div>

          <button class="btn btn-outline-primary w-100 mb-2">
            <i class="fas fa-link mr-1"></i> Link ke User Login
          </button>

          <button class="btn btn-outline-success w-100 mb-2">
            <i class="fas fa-user-shield mr-1"></i> Assign Role
          </button>

          <button class="btn btn-outline-warning w-100 mb-2">
            <i class="fas fa-key mr-1"></i> Reset Access
          </button>

          <button class="btn btn-outline-danger w-100 mb-2">
            <i class="fas fa-trash mr-1"></i> Nonaktifkan Actor
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
        <h5 class="modal-title">Bantuan Halaman Master Actor</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman <b>Master Actor</b> digunakan sebagai pusat data seluruh aktor bisnis yang digunakan sistem.
        </p>

        <p>
          Actor merupakan identitas utama bisnis seperti:
        </p>

        <ul>
          <li>Dosen</li>
          <li>Mahasiswa</li>
          <li>Staff</li>
          <li>Customer</li>
          <li>Supplier</li>
        </ul>

        <hr>

        <p>
          <b>Catatan Penting:</b>
        </p>

        <ul>
          <li>Data actor berbeda dengan data login user.</li>
          <li>Data actor adalah source of truth bisnis.</li>
          <li>User login hanya digunakan untuk autentikasi sistem.</li>
          <li>Role digunakan untuk menentukan hak akses.</li>
          <li>Data yang tampil saat login mengikuti actor yang terhubung.</li>
        </ul>

        <hr>

        <p>
          Contoh:
        </p>

        <ul>
          <li>User login: <b>haso333</b></li>
          <li>Terhubung ke actor dosen: <b>Ho Aldika Novaldy</b></li>
          <li>Ketika mode dosen aktif, sistem menampilkan kelas yang diampu actor tersebut.</li>
        </ul>

        <hr>

        <p>
          Tombol aksi:
        </p>

        <ul>
          <li><b>View:</b> melihat detail actor.</li>
          <li><b>Edit:</b> mengubah data actor.</li>
          <li><b>Aksi:</b> assign role, link user login, reset akses, dan lainnya.</li>
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
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh data actor?
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
          Data actor gagal diproses.
        </p>

        <p>
          <strong>Penyebab:</strong><br>
          Struktur data tidak sesuai atau actor type belum valid.
        </p>

        <p>
          <strong>Solusi:</strong><br>
          Pastikan actor type, email, dan role participation sudah benar.
        </p>

        <div class="alert alert-warning">
          Tip: Pastikan actor sudah terdaftar sebelum dilakukan assign role user login.
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
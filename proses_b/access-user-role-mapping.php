<?php $page = 'access-user-role-mapping'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        User Role Mapping
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk menghubungkan user login dengan role akses sistem yang dimiliki.
      </p>

    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- FILTER CARD -->
      <div class="card">

        <div class="card-body">
          <div class="row">

            <div class="col-md-4">
              <b>User:</b> Semua User
            </div>

            <div class="col-md-4">
              <b>Role:</b> Semua Role
            </div>

            <div class="col-md-4">
              <b>Status:</b> Active
            </div>

          </div>
        </div>

        <div class="card-footer">
          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
              <i class="fas fa-plus me-1"></i> Add
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
              <i class="fas fa-file-upload me-1"></i> Import
            </button>

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
              <i class="fas fa-ban me-1"></i> Reset
            </button>

            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
              <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
            </button>

          </div>
        </div>

      </div>

      <!-- TABLE CARD -->
      <div class="card">

        <div class="card-header">
          <h5 class="card-title mb-0">User Role Registry</h5>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead>
                <tr class="text-uppercase text-center">
                  <th width="5%">No</th>
                  <th>Username</th>
                  <th>Display Name</th>
                  <th>Assigned Role</th>
                  <th>Priority</th>
                  <th>Primary Role</th>
                  <th>Status</th>
                  <th>Assigned By</th>
                  <th>Assigned Date</th>
                  <th width="170">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php
                $data = [
                  ['haso333','Haso Pratama','Administrator','1','Yes','Active','superadmin','2026-01-10'],
                  ['haso333','Haso Pratama','Lecturer','2','No','Active','superadmin','2026-01-10'],
                  ['haso333','Haso Pratama','Staff Academic','3','No','Active','superadmin','2026-01-10'],
                  ['dina.staff','Dina Maharani','Finance Staff','1','Yes','Active','superadmin','2026-01-12'],
                  ['andre.gudang','Andre Saputra','Warehouse Admin','1','Yes','Active','hr.manager','2026-01-14'],
                  ['bella.cs','Bella Claudia','Customer Service','1','Yes','Active','superadmin','2026-01-15'],
                  ['reno.sales','Reno Wijaya','Sales Marketing','1','Yes','Active','sales.manager','2026-01-17'],
                  ['maria.hr','Maria Angelina','HR Manager','1','Yes','Active','superadmin','2026-01-18'],
                  ['fajar.audit','Fajar Kurniawan','Internal Auditor','1','Yes','Suspended','director','2026-01-19'],
                  ['sinta.owner','Sinta Meliana','Business Owner','1','Yes','Active','superadmin','2026-01-20'],
                  ['rizki.it','Rizki Ramadhan','IT Support','1','Yes','Active','superadmin','2026-01-22'],
                ];

                $no = 1;
                foreach($data as $d):
                ?>

                <tr>

                  <td class="text-center"><?= $no++; ?></td>

                  <td><?= $d[0]; ?></td>

                  <td><?= $d[1]; ?></td>

                  <td>
                    <span class="badge bg-primary"><?= $d[2]; ?></span>
                  </td>

                  <td class="text-center"><?= $d[3]; ?></td>

                  <td class="text-center">
                    <?php if($d[4]=='Yes'): ?>
                      <span class="badge bg-success">Primary</span>
                    <?php else: ?>
                      <span class="badge bg-secondary">Secondary</span>
                    <?php endif; ?>
                  </td>

                  <td class="text-center">
                    <?php if($d[5]=='Active'): ?>
                      <span class="badge bg-success">Active</span>
                    <?php else: ?>
                      <span class="badge bg-danger">Suspended</span>
                    <?php endif; ?>
                  </td>

                  <td><?= $d[6]; ?></td>

                  <td class="text-center"><?= $d[7]; ?></td>

                  <td class="text-center">

                    <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                      <i class="fas fa-edit"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi">
                      <i class="fas fa-cogs"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan">
                      <i class="fas fa-question-circle"></i>
                    </button>

                  </td>

                </tr>

                <?php endforeach; ?>

              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilter">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select">
              <option>Semua Role</option>
              <option>Administrator</option>
              <option>Lecturer</option>
              <option>Finance Staff</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua Status</option>
              <option>Active</option>
              <option>Suspended</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-info">Terapkan</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Mapping ini menentukan role apa saja yang dapat digunakan oleh user login di sistem.
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">User</label>
              <select class="form-select">
                <option>Pilih User</option>
                <option>haso333</option>
                <option>dina.staff</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Role</label>
              <select class="form-select">
                <option>Pilih Role</option>
                <option>Administrator</option>
                <option>Lecturer</option>
                <option>Finance Staff</option>
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Priority</label>
              <input type="number" class="form-control" value="1">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Primary Role</label>
              <select class="form-select">
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Active</option>
                <option>Suspended</option>
              </select>
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Notes</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan Mapping</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL IMPORT -->
<div class="modal fade" id="modalImpor">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan format file mengikuti template resmi agar relasi role user tetap valid.
        </div>

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="35%">Username</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Role</th>
            <td>Administrator</td>
          </tr>

          <tr>
            <th>Priority</th>
            <td>1</td>
          </tr>

          <tr>
            <th>Primary Role</th>
            <td>Yes</td>
          </tr>

          <tr>
            <th>Status</th>
            <td><span class="badge bg-success">Active</span></td>
          </tr>

        </table>

      </div>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEdit">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Priority</label>
            <input type="number" class="form-control" value="1">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Active</option>
              <option>Suspended</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL AKSI -->
<div class="modal fade" id="modalAksi">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Quick Action</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          Activate Mapping
        </button>

        <button class="btn btn-outline-warning">
          Set Primary Role
        </button>

        <button class="btn btn-outline-info">
          Duplicate Mapping
        </button>

        <button class="btn btn-outline-danger">
          Disable Mapping
        </button>

      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title">Bantuan User Role Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk menghubungkan user login dengan role sistem.
        </p>

        <p>
          Satu user dapat memiliki banyak role.
        </p>

        <p>
          Contoh:
        </p>

        <ul>
          <li>haso333 → Administrator</li>
          <li>haso333 → Lecturer</li>
          <li>haso333 → Staff Academic</li>
        </ul>

        <p>
          Mapping ini digunakan oleh:
        </p>

        <ul>
          <li>Authorization Engine</li>
          <li>Sidebar Navigation</li>
          <li>Permission Validation</li>
          <li>Context Switching</li>
        </ul>

        <p>
          Priority digunakan untuk menentukan urutan prioritas role.
        </p>

        <p>
          Primary Role adalah role default yang aktif pertama kali saat login.
        </p>

      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh user role mapping?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ERROR -->
<div class="modal fade" id="modalGagal">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>Error
        </h5>
      </div>

      <div class="modal-body">

        <p><b>Masalah:</b><br>Import mapping gagal.</p>

        <p><b>Penyebab:</b><br>User atau role tidak ditemukan.</p>

        <p><b>Solusi:</b><br>Pastikan seluruh user dan role sudah terdaftar sebelum import.</p>

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
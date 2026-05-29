<?php $page = 'access-permissions'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Permissions
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mengelola daftar permission/action sistem yang menjadi dasar evaluasi hak akses role.
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
              <b>Module:</b> Semua Module
            </div>

            <div class="col-md-4">
              <b>Action:</b> Semua Action
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
          <h5 class="card-title mb-0">Permission Registry</h5>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead>
                <tr class="text-uppercase text-center">
                  <th width="5%">No</th>
                  <th>Permission Code</th>
                  <th>Permission Name</th>
                  <th>Module</th>
                  <th>Action</th>
                  <th>Scope Type</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th width="170">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php
                $data = [
                  ['PERM-001','View Users','Access Management','VIEW','GLOBAL','Melihat daftar user','Active'],
                  ['PERM-002','Create Users','Access Management','CREATE','GLOBAL','Membuat user baru','Active'],
                  ['PERM-003','Update Users','Access Management','UPDATE','GLOBAL','Mengubah user','Active'],
                  ['PERM-004','Delete Users','Access Management','DELETE','GLOBAL','Menghapus user','Active'],
                  ['PERM-005','View Roles','Role Management','VIEW','GLOBAL','Melihat role','Active'],
                  ['PERM-006','Assign Roles','Role Management','ASSIGN','GLOBAL','Assign role user','Active'],
                  ['PERM-007','Approve Journal','Finance','APPROVE','BRANCH','Approve jurnal keuangan','Active'],
                  ['PERM-008','View Salary','HR','VIEW','DEPARTMENT','Melihat data gaji','Restricted'],
                  ['PERM-009','Create Purchase','Procurement','CREATE','BRANCH','Membuat purchase order','Active'],
                  ['PERM-010','Stock Adjustment','Inventory','UPDATE','WAREHOUSE','Adjust stok barang','Active'],
                  ['PERM-011','System Configuration','System','CONFIGURE','GLOBAL','Konfigurasi sistem','Critical'],
                ];

                $no = 1;
                foreach($data as $d):
                ?>

                <tr>

                  <td class="text-center"><?= $no++; ?></td>

                  <td><?= $d[0]; ?></td>

                  <td><?= $d[1]; ?></td>

                  <td><?= $d[2]; ?></td>

                  <td class="text-center">
                    <span class="badge bg-primary"><?= $d[3]; ?></span>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-info"><?= $d[4]; ?></span>
                  </td>

                  <td><?= $d[5]; ?></td>

                  <td class="text-center">
                    <?php if($d[6]=='Active'): ?>
                      <span class="badge bg-success">Active</span>
                    <?php elseif($d[6]=='Restricted'): ?>
                      <span class="badge bg-warning">Restricted</span>
                    <?php else: ?>
                      <span class="badge bg-danger">Critical</span>
                    <?php endif; ?>
                  </td>

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
        <h5 class="modal-title">Filter Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Module</label>
            <select class="form-select">
              <option>Semua Module</option>
              <option>Access Management</option>
              <option>Finance</option>
              <option>Inventory</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Action</label>
            <select class="form-select">
              <option>Semua Action</option>
              <option>VIEW</option>
              <option>CREATE</option>
              <option>UPDATE</option>
              <option>DELETE</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua Status</option>
              <option>Active</option>
              <option>Restricted</option>
              <option>Critical</option>
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
        <h5 class="modal-title">Tambah Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Permission adalah action dasar sistem yang nantinya dipakai role untuk menentukan akses.
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Permission Code</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Permission Name</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Module</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Action</label>
              <select class="form-select">
                <option>VIEW</option>
                <option>CREATE</option>
                <option>UPDATE</option>
                <option>DELETE</option>
                <option>APPROVE</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Scope Type</label>
              <select class="form-select">
                <option>GLOBAL</option>
                <option>BRANCH</option>
                <option>DEPARTMENT</option>
                <option>SELF</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Active</option>
                <option>Restricted</option>
                <option>Critical</option>
              </select>
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan</button>
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
        <h5 class="modal-title">Import Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan template import resmi agar struktur permission tetap konsisten.
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
        <h5 class="modal-title">Detail Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="35%">Permission Code</th>
            <td>PERM-001</td>
          </tr>

          <tr>
            <th>Permission Name</th>
            <td>View Users</td>
          </tr>

          <tr>
            <th>Module</th>
            <td>Access Management</td>
          </tr>

          <tr>
            <th>Action</th>
            <td>VIEW</td>
          </tr>

          <tr>
            <th>Scope Type</th>
            <td>GLOBAL</td>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Permission Name</label>
            <input type="text" class="form-control" value="View Users">
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control">Melihat daftar user</textarea>
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

        <button class="btn btn-outline-primary">
          Duplicate Permission
        </button>

        <button class="btn btn-outline-warning">
          Change Scope
        </button>

        <button class="btn btn-outline-success">
          Activate Permission
        </button>

        <button class="btn btn-outline-danger">
          Disable Permission
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
        <h5 class="modal-title">Bantuan Permissions</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini berisi registry seluruh permission/action sistem.
        </p>

        <p>
          Permission adalah unit hak akses granular yang nantinya diberikan ke Role.
        </p>

        <p>
          Contoh:
        </p>

        <ul>
          <li>VIEW USER</li>
          <li>CREATE PURCHASE ORDER</li>
          <li>APPROVE JOURNAL</li>
        </ul>

        <p>
          Permission dipakai oleh:
        </p>

        <ul>
          <li>Role Permission Mapping</li>
          <li>Authorization Engine</li>
          <li>Sidebar Visibility</li>
          <li>Action Validation</li>
        </ul>

        <p>
          Scope Type menentukan batas data yang dapat diakses:
        </p>

        <ul>
          <li>GLOBAL → semua data</li>
          <li>BRANCH → per cabang</li>
          <li>DEPARTMENT → per departemen</li>
          <li>SELF → data milik sendiri</li>
        </ul>

      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Permission</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh data permission?
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

        <p><b>Masalah:</b><br>Import permission gagal.</p>

        <p><b>Penyebab:</b><br>Format file tidak valid.</p>

        <p><b>Solusi:</b><br>Gunakan template resmi dan upload ulang.</p>

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
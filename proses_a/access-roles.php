<!-- FILE: access-roles.php -->

<?php $page = 'access-roles'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ========================================= -->
  <!-- Content Header -->
  <!-- ========================================= -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Roles Management

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mengelola role akses sistem, konteks kerja pengguna,
        dan struktur hak akses operasional ERP.
      </p>

    </div>
  </section>

  <!-- ========================================= -->
  <!-- Main Content -->
  <!-- ========================================= -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- ========================================= -->
          <!-- CARD FILTER -->
          <!-- ========================================= -->
          <div class="card">

            <div class="card-body">

              <div class="row">

                <div class="col-md-4">
                  <b>Total Roles:</b> 24
                </div>

                <div class="col-md-4">
                  <b>System Roles:</b> 8
                </div>

                <div class="col-md-4">
                  <b>Custom Roles:</b> 16
                </div>

                <div class="col-md-4">
                  <b>Default Scope:</b> Mixed
                </div>

                <div class="col-md-4">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-4">
                  <b>Permission Mode:</b> RBAC
                </div>

              </div>

            </div>

            <div class="card-footer">

              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button"
                        class="btn btn-outline-primary btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>

                <button type="button"
                        class="btn btn-outline-primary btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>

                <button type="button"
                        class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>

                <button type="button"
                        class="btn btn-outline-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>

                <button type="button"
                        class="btn btn-outline-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>

              </div>

            </div>

          </div>

          <!-- ========================================= -->
          <!-- CARD TABLE -->
          <!-- ========================================= -->
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">
                Daftar Roles System
              </h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>

                    <tr class="text-uppercase text-center">

                      <th width="5px">No</th>
                      <th>Role Code</th>
                      <th>Role Name</th>
                      <th>Category</th>
                      <th>Default Scope</th>
                      <th>Total Permission</th>
                      <th>Status</th>
                      <th width="170px">Aksi</th>

                    </tr>

                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>ROLE-ADM</td>
                      <td>Administrator</td>
                      <td>System</td>
                      <td>Global</td>
                      <td class="text-center">145</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">

                        <button type="button"
                                class="btn btn-sm btn-outline-info"
                                data-bs-toggle="modal"
                                data-bs-target="#modalView">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button type="button"
                                class="btn btn-sm btn-outline-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEdit">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button type="button"
                                class="btn btn-sm btn-outline-warning"
                                data-bs-toggle="modal"
                                data-bs-target="#modalAksi">
                          <i class="fas fa-cogs"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>ROLE-MGR</td>
                      <td>Manager Finance</td>
                      <td>Finance</td>
                      <td>Branch</td>
                      <td class="text-center">78</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>ROLE-KSR</td>
                      <td>Kasir</td>
                      <td>Sales</td>
                      <td>Outlet</td>
                      <td class="text-center">23</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>ROLE-HRD</td>
                      <td>HR Department</td>
                      <td>Human Resource</td>
                      <td>Department</td>
                      <td class="text-center">65</td>
                      <td class="text-center">
                        <span class="badge bg-secondary">Draft</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>ROLE-WHS</td>
                      <td>Warehouse Staff</td>
                      <td>Operation</td>
                      <td>Warehouse</td>
                      <td class="text-center">41</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>ROLE-STD</td>
                      <td>Student</td>
                      <td>Academic</td>
                      <td>Self</td>
                      <td class="text-center">12</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>ROLE-LCT</td>
                      <td>Lecturer</td>
                      <td>Academic</td>
                      <td>Faculty</td>
                      <td class="text-center">37</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>ROLE-AUD</td>
                      <td>Auditor</td>
                      <td>Governance</td>
                      <td>Read Only</td>
                      <td class="text-center">54</td>
                      <td class="text-center">
                        <span class="badge bg-danger">Disabled</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>ROLE-OPS</td>
                      <td>Operations Manager</td>
                      <td>Operation</td>
                      <td>Branch</td>
                      <td class="text-center">82</td>
                      <td class="text-center">
                        <span class="badge bg-success">Active</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>ROLE-MKT</td>
                      <td>Marketing</td>
                      <td>Sales</td>
                      <td>Region</td>
                      <td class="text-center">32</td>
                      <td class="text-center">
                        <span class="badge bg-warning">Pending</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>ROLE-GST</td>
                      <td>Guest Viewer</td>
                      <td>Guest</td>
                      <td>Read Only</td>
                      <td class="text-center">5</td>
                      <td class="text-center">
                        <span class="badge bg-secondary">Inactive</span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
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

<!-- ========================================= -->
<!-- MODAL FILTER -->
<!-- ========================================= -->
<div class="modal fade" id="modalFilter">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Roles</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Category</label>
          <select class="form-select">
            <option>All</option>
            <option>System</option>
            <option>Finance</option>
            <option>Sales</option>
            <option>Operation</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Status</label>
          <select class="form-select">
            <option>All</option>
            <option>Active</option>
            <option>Inactive</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-info">Apply Filter</button>
      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL TAMBAH -->
<!-- ========================================= -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Role</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Role Code</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label>Role Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label>Category</label>
          <select class="form-select">
            <option>System</option>
            <option>Finance</option>
            <option>Sales</option>
            <option>Operation</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Default Scope</label>
          <select class="form-select">
            <option>Global</option>
            <option>Branch</option>
            <option>Department</option>
            <option>Self</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save</button>
      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL IMPORT -->
<!-- ========================================= -->
<div class="modal fade" id="modalImpor">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Roles</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL VIEW -->
<!-- ========================================= -->
<div class="modal fade" id="modalView">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Role</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="200px">Role Name</th>
            <td>Administrator</td>
          </tr>

          <tr>
            <th>Category</th>
            <td>System</td>
          </tr>

          <tr>
            <th>Default Scope</th>
            <td>Global</td>
          </tr>

          <tr>
            <th>Total Permission</th>
            <td>145 Permissions</td>
          </tr>

          <tr>
            <th>Description</th>
            <td>
              Role dengan hak akses penuh terhadap seluruh modul sistem ERP.
            </td>
          </tr>

        </table>

      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL EDIT -->
<!-- ========================================= -->
<div class="modal fade" id="modalEdit">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Role</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Role Name</label>
          <input type="text" class="form-control" value="Administrator">
        </div>

        <div class="mb-3">
          <label>Status</label>
          <select class="form-select">
            <option>Active</option>
            <option>Inactive</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save Changes</button>
      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL AKSI -->
<!-- ========================================= -->
<div class="modal fade" id="modalAksi">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Role Actions</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <button class="btn btn-outline-success w-100 mb-2">
          Duplicate Role
        </button>

        <button class="btn btn-outline-info w-100 mb-2">
          Clone Permissions
        </button>

        <button class="btn btn-outline-danger w-100">
          Disable Role
        </button>

      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================= -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Roles Management</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk mengelola struktur role akses sistem ERP.
        </p>

        <p>
          Role adalah konteks kerja pengguna di sistem, bukan identitas bisnis.
        </p>

        <ul>
          <li>Role menentukan menu yang tampil.</li>
          <li>Role menentukan hak akses CRUD.</li>
          <li>Role menentukan approval flow.</li>
          <li>Role menentukan data scope.</li>
          <li>Satu user dapat memiliki banyak role.</li>
        </ul>

        <p>
          Contoh:
        </p>

        <ul>
          <li>Kasir</li>
          <li>Manager Finance</li>
          <li>Warehouse Staff</li>
          <li>Administrator</li>
        </ul>

      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL RESET -->
<!-- ========================================= -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Roles Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <p class="fs-5">
          Apakah Anda yakin ingin reset data roles?
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- ========================================= -->
<!-- MODAL ERROR -->
<!-- ========================================= -->
<div class="modal fade" id="modalGagal">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>
          Error Handler
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Role gagal disimpan.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Role code sudah digunakan.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan role code unik.
        </p>

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
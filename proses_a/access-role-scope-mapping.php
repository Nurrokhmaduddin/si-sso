<?php $page = 'access-role-scope-mapping'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Role Scope Mapping
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Halaman untuk mengatur cakupan akses (scope) yang dimiliki setiap role dalam sistem.
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->
      <div class="card">
        <div class="card-body">
          <div class="row">

            <div class="col-md-4">
              <b>Role :</b> Semua Role
            </div>

            <div class="col-md-4">
              <b>Scope Type :</b> Semua Scope
            </div>

            <div class="col-md-4">
              <b>Status :</b> Active & Inactive
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

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
              <i class="fas fa-ban me-1"></i> Reset
            </button>

          </div>
        </div>
      </div>

      <!-- TABLE -->
      <div class="card">

        <div class="card-header">
          <h5 class="card-title mb-0">
            Daftar Role Scope Mapping
          </h5>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead>
                <tr class="text-center text-uppercase">
                  <th>No</th>
                  <th>Role</th>
                  <th>Scope Type</th>
                  <th>Scope Target</th>
                  <th>Scope Rule</th>
                  <th>Access Level</th>
                  <th>Status</th>
                  <th>Updated By</th>
                  <th>Updated At</th>
                  <th width="170">Aksi</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td class="text-center">1</td>
                  <td>Super Admin</td>
                  <td>GLOBAL</td>
                  <td>All Branch</td>
                  <td>Full Access</td>
                  <td class="text-center"><span class="badge bg-success">FULL</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>system</td>
                  <td>2026-05-14 08:00</td>
                  <td class="text-center">

                    <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView1">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit1">
                      <i class="fas fa-edit"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi1">
                      <i class="fas fa-cogs"></i>
                    </button>

                  </td>
                </tr>

                <tr>
                  <td class="text-center">2</td>
                  <td>Branch Manager</td>
                  <td>BRANCH</td>
                  <td>Jakarta HQ</td>
                  <td>Manage Branch Data</td>
                  <td class="text-center"><span class="badge bg-primary">BRANCH</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>admin</td>
                  <td>2026-05-14 08:15</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">3</td>
                  <td>Warehouse Staff</td>
                  <td>WAREHOUSE</td>
                  <td>Warehouse A</td>
                  <td>Stock Management Only</td>
                  <td class="text-center"><span class="badge bg-info">LIMITED</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>admin</td>
                  <td>2026-05-14 08:20</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">4</td>
                  <td>Finance Manager</td>
                  <td>DEPARTMENT</td>
                  <td>Finance Division</td>
                  <td>Financial Approval</td>
                  <td class="text-center"><span class="badge bg-warning">APPROVAL</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>system</td>
                  <td>2026-05-14 08:22</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">5</td>
                  <td>Cashier</td>
                  <td>SELF</td>
                  <td>Own Transaction</td>
                  <td>POS Access Only</td>
                  <td class="text-center"><span class="badge bg-secondary">SELF</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>admin</td>
                  <td>2026-05-14 08:25</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">6</td>
                  <td>Auditor</td>
                  <td>GLOBAL</td>
                  <td>Read Only All</td>
                  <td>Audit Monitoring</td>
                  <td class="text-center"><span class="badge bg-dark">READONLY</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>system</td>
                  <td>2026-05-14 08:30</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">7</td>
                  <td>HR Staff</td>
                  <td>DEPARTMENT</td>
                  <td>Human Resource</td>
                  <td>Employee Data Management</td>
                  <td class="text-center"><span class="badge bg-primary">DEPT</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>hr.admin</td>
                  <td>2026-05-14 08:40</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">8</td>
                  <td>Project Manager</td>
                  <td>PROJECT</td>
                  <td>Project ERP Revamp</td>
                  <td>Project Resource Control</td>
                  <td class="text-center"><span class="badge bg-warning">PROJECT</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>project.pm</td>
                  <td>2026-05-14 08:45</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">9</td>
                  <td>Lecturer</td>
                  <td>SELF</td>
                  <td>Own Academic Data</td>
                  <td>Input Grades</td>
                  <td class="text-center"><span class="badge bg-secondary">SELF</span></td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td>academic.admin</td>
                  <td>2026-05-14 08:50</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">10</td>
                  <td>Student</td>
                  <td>SELF</td>
                  <td>Own Academic Profile</td>
                  <td>View Grades</td>
                  <td class="text-center"><span class="badge bg-secondary">SELF</span></td>
                  <td class="text-center"><span class="badge bg-warning">Inactive</span></td>
                  <td>academic.admin</td>
                  <td>2026-05-14 08:55</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">11</td>
                  <td>Guest Viewer</td>
                  <td>READONLY</td>
                  <td>Public Dashboard</td>
                  <td>View Dashboard Only</td>
                  <td class="text-center"><span class="badge bg-dark">VIEW</span></td>
                  <td class="text-center"><span class="badge bg-danger">Disabled</span></td>
                  <td>system</td>
                  <td>2026-05-14 09:00</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

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
        <h5 class="modal-title">Filter Scope Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option>All Role</option>
            <option>Super Admin</option>
            <option>Manager</option>
            <option>Cashier</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Scope Type</label>
          <select class="form-select">
            <option>All Scope</option>
            <option>GLOBAL</option>
            <option>BRANCH</option>
            <option>SELF</option>
            <option>DEPARTMENT</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-info">Apply Filter</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Role Scope Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option>Select Role</option>
            <option>Super Admin</option>
            <option>Manager</option>
            <option>Cashier</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Scope Type</label>
          <select class="form-select">
            <option>GLOBAL</option>
            <option>BRANCH</option>
            <option>SELF</option>
            <option>DEPARTMENT</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Scope Target</label>
          <input type="text" class="form-control" placeholder="Example: Jakarta HQ">
        </div>

        <div class="mb-3">
          <label class="form-label">Scope Rule</label>
          <textarea class="form-control"></textarea>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman Role Scope Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk menentukan batas cakupan akses setiap role di dalam sistem ERP.
        </p>

        <p>
          Scope menentukan:
        </p>

        <ul>
          <li>Data mana yang boleh diakses.</li>
          <li>Area operasional mana yang boleh dikelola.</li>
          <li>Apakah role bersifat global, cabang, departemen, project, atau hanya data sendiri.</li>
        </ul>

        <p>
          Contoh:
        </p>

        <ul>
          <li>Role <b>Cashier</b> hanya boleh melihat transaksi miliknya sendiri (SELF).</li>
          <li>Role <b>Branch Manager</b> hanya boleh mengelola cabang tertentu.</li>
          <li>Role <b>Super Admin</b> memiliki akses GLOBAL.</li>
        </ul>

        <p>
          Mapping scope adalah fondasi penting dalam:
        </p>

        <ul>
          <li>Data security</li>
          <li>Data isolation</li>
          <li>Permission engine</li>
          <li>Enterprise governance</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Scope Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th>Role</th>
            <td>Super Admin</td>
          </tr>

          <tr>
            <th>Scope Type</th>
            <td>GLOBAL</td>
          </tr>

          <tr>
            <th>Scope Target</th>
            <td>All Branch</td>
          </tr>

          <tr>
            <th>Access Level</th>
            <td>FULL ACCESS</td>
          </tr>

          <tr>
            <th>Status</th>
            <td>Active</td>
          </tr>

        </table>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEdit1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Scope Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Scope Rule</label>
          <textarea class="form-control">Full Access</textarea>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL AKSI -->
<div class="modal fade" id="modalAksi1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Aksi Scope Mapping</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          <i class="fas fa-check me-1"></i> Activate
        </button>

        <button class="btn btn-outline-secondary">
          <i class="fas fa-ban me-1"></i> Disable
        </button>

        <button class="btn btn-outline-danger">
          <i class="fas fa-trash me-1"></i> Delete Mapping
        </button>

      </div>

    </div>
  </div>
</div>

<!-- RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p>Apakah Anda yakin ingin mereset seluruh data role scope mapping?</p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
<?php $page = 'access-context-management'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Context Management
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman untuk mengelola context aktif pengguna sistem berdasarkan actor, role, dan scope akses yang sedang digunakan.
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
              <b>Context Type :</b> Semua Context
            </div>

            <div class="col-md-4">
              <b>Status :</b> Active & Suspended
            </div>

            <div class="col-md-4">
              <b>Session :</b> Semua Device
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
            Daftar Context Session Management
          </h5>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead>

                <tr class="text-uppercase text-center">

                  <th>No</th>
                  <th>Username</th>
                  <th>Actor</th>
                  <th>Role</th>
                  <th>Context Type</th>
                  <th>Scope</th>
                  <th>Device</th>
                  <th>IP Address</th>
                  <th>Session Status</th>
                  <th>Last Activity</th>
                  <th width="180">Aksi</th>

                </tr>

              </thead>

              <tbody>

                <tr>
                  <td class="text-center">1</td>
                  <td>haso333</td>
                  <td>Dosen Biologi</td>
                  <td>Lecturer</td>
                  <td>Academic Context</td>
                  <td>SELF</td>
                  <td>Chrome Windows</td>
                  <td>10.10.10.12</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:11</td>

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
                  <td>haso333</td>
                  <td>Staff Prodi</td>
                  <td>Academic Staff</td>
                  <td>Administration Context</td>
                  <td>DEPARTMENT</td>
                  <td>Chrome Windows</td>
                  <td>10.10.10.12</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:12</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">3</td>
                  <td>jane.admin</td>
                  <td>Administrator</td>
                  <td>Super Admin</td>
                  <td>Global Context</td>
                  <td>GLOBAL</td>
                  <td>Firefox Linux</td>
                  <td>10.10.10.14</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:15</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">4</td>
                  <td>finance01</td>
                  <td>Finance Manager</td>
                  <td>Manager</td>
                  <td>Finance Context</td>
                  <td>BRANCH</td>
                  <td>Safari MacOS</td>
                  <td>10.10.10.20</td>
                  <td class="text-center">
                    <span class="badge bg-warning">Idle</span>
                  </td>
                  <td>2026-05-14 08:45</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">5</td>
                  <td>cashier01</td>
                  <td>Kasir Outlet A</td>
                  <td>Cashier</td>
                  <td>POS Context</td>
                  <td>SELF</td>
                  <td>Edge Windows</td>
                  <td>10.10.10.22</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:18</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">6</td>
                  <td>warehouse01</td>
                  <td>Warehouse Team</td>
                  <td>Warehouse Staff</td>
                  <td>Inventory Context</td>
                  <td>WAREHOUSE</td>
                  <td>Chrome Android</td>
                  <td>10.10.10.25</td>
                  <td class="text-center">
                    <span class="badge bg-danger">Suspended</span>
                  </td>
                  <td>2026-05-14 07:12</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">7</td>
                  <td>student01</td>
                  <td>Mahasiswa Teknik</td>
                  <td>Student</td>
                  <td>Academic Context</td>
                  <td>SELF</td>
                  <td>Chrome Android</td>
                  <td>10.10.10.30</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:20</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">8</td>
                  <td>procurement01</td>
                  <td>Purchasing Team</td>
                  <td>Procurement</td>
                  <td>Purchasing Context</td>
                  <td>BRANCH</td>
                  <td>Firefox Windows</td>
                  <td>10.10.10.32</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:21</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">9</td>
                  <td>auditor01</td>
                  <td>Internal Auditor</td>
                  <td>Auditor</td>
                  <td>Audit Context</td>
                  <td>GLOBAL READONLY</td>
                  <td>Chrome Linux</td>
                  <td>10.10.10.40</td>
                  <td class="text-center">
                    <span class="badge bg-info">Readonly</span>
                  </td>
                  <td>2026-05-14 09:22</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">10</td>
                  <td>guest01</td>
                  <td>Guest User</td>
                  <td>Viewer</td>
                  <td>Public Dashboard</td>
                  <td>READONLY</td>
                  <td>Mobile Safari</td>
                  <td>10.10.10.50</td>
                  <td class="text-center">
                    <span class="badge bg-secondary">Limited</span>
                  </td>
                  <td>2026-05-14 09:25</td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">11</td>
                  <td>project.pm</td>
                  <td>Project Manager ERP</td>
                  <td>Project Manager</td>
                  <td>Project Context</td>
                  <td>PROJECT</td>
                  <td>Chrome Windows</td>
                  <td>10.10.10.60</td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>2026-05-14 09:27</td>

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
        <h5 class="modal-title">Filter Context</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Context Type</label>
          <select class="form-select">
            <option>All Context</option>
            <option>Academic Context</option>
            <option>Finance Context</option>
            <option>POS Context</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>All</option>
            <option>Active</option>
            <option>Idle</option>
            <option>Suspended</option>
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

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Context</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Context menentukan bagaimana user beroperasi dalam sistem berdasarkan actor aktif, role aktif, dan scope akses aktif.
        </div>

        <div class="mb-3">
          <label class="form-label">User</label>
          <select class="form-select">
            <option>Select User</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Actor</label>
          <select class="form-select">
            <option>Select Actor</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option>Select Role</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Scope</label>
          <select class="form-select">
            <option>SELF</option>
            <option>BRANCH</option>
            <option>GLOBAL</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save Context</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Context</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="30%">Username</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Actor</th>
            <td>Dosen Biologi</td>
          </tr>

          <tr>
            <th>Role</th>
            <td>Lecturer</td>
          </tr>

          <tr>
            <th>Context Type</th>
            <td>Academic Context</td>
          </tr>

          <tr>
            <th>Scope</th>
            <td>SELF</td>
          </tr>

          <tr>
            <th>Session Status</th>
            <td>Active</td>
          </tr>

          <tr>
            <th>Last Activity</th>
            <td>2026-05-14 09:11</td>
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
        <h5 class="modal-title">Edit Context</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Session Status</label>
          <select class="form-select">
            <option>Active</option>
            <option>Idle</option>
            <option>Suspended</option>
          </select>
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
        <h5 class="modal-title">Aksi Context</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          <i class="fas fa-sync me-1"></i> Switch Context
        </button>

        <button class="btn btn-outline-danger">
          <i class="fas fa-sign-out-alt me-1"></i> Force Logout Session
        </button>

        <button class="btn btn-outline-secondary">
          <i class="fas fa-ban me-1"></i> Suspend Context
        </button>

      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Context Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p>Apakah Anda yakin ingin mereset seluruh context management?</p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Context Management</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Context Management adalah layer yang menghubungkan:
        </p>

        <ul>
          <li>User Login</li>
          <li>Business Actor</li>
          <li>Role Aktif</li>
          <li>Scope Akses</li>
          <li>Session Operasional</li>
        </ul>

        <p>
          Context menentukan bagaimana sistem membaca identitas aktif pengguna saat ini.
        </p>

        <p>
          Contoh:
        </p>

        <ul>
          <li>User yang sama dapat masuk sebagai Dosen atau Staff.</li>
          <li>Sidebar dan dashboard berubah mengikuti context aktif.</li>
          <li>Hak akses berubah sesuai actor dan role aktif.</li>
        </ul>

        <p>
          Halaman ini penting dalam arsitektur ERP modern karena:
        </p>

        <ul>
          <li>Mendukung multi-role user.</li>
          <li>Mendukung actor switching.</li>
          <li>Mendukung audit trail yang akurat.</li>
          <li>Mendukung session governance enterprise.</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
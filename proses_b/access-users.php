<?php $page = 'access-users'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Users Management
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mengelola akun login sistem, identitas autentikasi pengguna, status akses, dan keamanan akun pengguna ERP.
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- FILTER -->
          <div class="card">

            <div class="card-body">
              <div class="row">

                <div class="col-md-4">
                  <b>Status User:</b> Semua
                </div>

                <div class="col-md-4">
                  <b>Authentication:</b> Semua
                </div>

                <div class="col-md-4">
                  <b>Last Login:</b> Semua
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
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

          <!-- TABLE -->
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Daftar User Login Sistem</h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>

                    <tr class="text-uppercase text-center">
                      <th width="5px">No</th>
                      <th>User ID</th>
                      <th>Username</th>
                      <th>Display Name</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th>Primary Role</th>
                      <th>Authentication</th>
                      <th>Last Login</th>
                      <th>Status</th>
                      <th width="180px">Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>USR-0001</td>
                      <td>haso333</td>
                      <td>Ho Aldika</td>
                      <td>haso@erp.local</td>
                      <td>081200000001</td>
                      <td>Dosen</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-14 08:20</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

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
                          <i class="fas fa-question"></i>
                        </button>

                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>USR-0002</td>
                      <td>pramita</td>
                      <td>Pramita Widyadari</td>
                      <td>pramita@erp.local</td>
                      <td>081200000002</td>
                      <td>Mahasiswa</td>
                      <td class="text-center"><span class="badge badge-warning">Password Only</span></td>
                      <td>2026-05-13 17:10</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>

                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>

                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>

                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>

                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>USR-0003</td>
                      <td>annisa</td>
                      <td>Annisa Sintowati</td>
                      <td>annisa@erp.local</td>
                      <td>081200000003</td>
                      <td>Finance Staff</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-14 06:22</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>USR-0004</td>
                      <td>finance01</td>
                      <td>Finance Admin</td>
                      <td>finance@erp.local</td>
                      <td>081200000004</td>
                      <td>Finance Manager</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-13 09:11</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>USR-0005</td>
                      <td>warehouse01</td>
                      <td>Warehouse PIC</td>
                      <td>warehouse@erp.local</td>
                      <td>081200000005</td>
                      <td>Warehouse</td>
                      <td class="text-center"><span class="badge badge-warning">Password Only</span></td>
                      <td>2026-05-12 15:42</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>USR-0006</td>
                      <td>cashier01</td>
                      <td>POS Cashier</td>
                      <td>cashier@erp.local</td>
                      <td>081200000006</td>
                      <td>Cashier</td>
                      <td class="text-center"><span class="badge badge-warning">Password Only</span></td>
                      <td>2026-05-14 07:40</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>USR-0007</td>
                      <td>owner</td>
                      <td>Business Owner</td>
                      <td>owner@erp.local</td>
                      <td>081200000007</td>
                      <td>Super Admin</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-14 09:21</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>USR-0008</td>
                      <td>auditor</td>
                      <td>Internal Auditor</td>
                      <td>audit@erp.local</td>
                      <td>081200000008</td>
                      <td>Auditor</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-10 13:20</td>
                      <td class="text-center"><span class="badge badge-warning">Suspended</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>USR-0009</td>
                      <td>marketing01</td>
                      <td>Marketing Team</td>
                      <td>marketing@erp.local</td>
                      <td>081200000009</td>
                      <td>Marketing</td>
                      <td class="text-center"><span class="badge badge-warning">Password Only</span></td>
                      <td>2026-05-11 12:11</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>USR-0010</td>
                      <td>hrd01</td>
                      <td>HR Department</td>
                      <td>hrd@erp.local</td>
                      <td>081200000010</td>
                      <td>HR Manager</td>
                      <td class="text-center"><span class="badge badge-success">MFA Enabled</span></td>
                      <td>2026-05-12 08:00</td>
                      <td class="text-center"><span class="badge badge-success">Active</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>USR-0011</td>
                      <td>guest01</td>
                      <td>Guest User</td>
                      <td>guest@erp.local</td>
                      <td>081200000011</td>
                      <td>Guest</td>
                      <td class="text-center"><span class="badge badge-danger">No MFA</span></td>
                      <td>Never Login</td>
                      <td class="text-center"><span class="badge badge-danger">Inactive</span></td>

                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBantuan"><i class="fas fa-question"></i></button>
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

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Users</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Gunakan filter untuk mempersempit data user berdasarkan status akun, MFA, role utama, atau aktivitas login.
          </div>

          <div class="mb-3">
            <label class="form-label">Status User</label>

            <select class="form-select">
              <option>Semua</option>
              <option>Active</option>
              <option>Inactive</option>
              <option>Suspended</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Authentication Type</label>

            <select class="form-select">
              <option>Semua</option>
              <option>MFA Enabled</option>
              <option>Password Only</option>
              <option>No MFA</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Primary Role</label>

            <select class="form-select">
              <option>Semua</option>
              <option>Super Admin</option>
              <option>Dosen</option>
              <option>Mahasiswa</option>
              <option>Cashier</option>
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
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah User Login</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            User adalah identitas login sistem. User bukan actor bisnis. User digunakan untuk autentikasi dan akses aplikasi ERP.
          </div>

          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Nomor HP</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Password Default</label>
            <input type="password" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Primary Role</label>

            <select class="form-select">
              <option>Super Admin</option>
              <option>Dosen</option>
              <option>Mahasiswa</option>
              <option>Finance</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Authentication</label>

            <select class="form-select">
              <option>MFA Enabled</option>
              <option>Password Only</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>

            <select class="form-select">
              <option>Active</option>
              <option>Inactive</option>
              <option>Suspended</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan Data</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail User</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="30%">User ID</th>
            <td>USR-0001</td>
          </tr>

          <tr>
            <th>Username</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Display Name</th>
            <td>Ho Aldika</td>
          </tr>

          <tr>
            <th>Email</th>
            <td>haso@erp.local</td>
          </tr>

          <tr>
            <th>Primary Role</th>
            <td>Dosen</td>
          </tr>

          <tr>
            <th>MFA</th>
            <td>Enabled</td>
          </tr>

          <tr>
            <th>Last Login</th>
            <td>2026-05-14 08:20</td>
          </tr>

          <tr>
            <th>Status</th>
            <td>Active</td>
          </tr>

        </table>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit User</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input type="text" class="form-control" value="Ho Aldika">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="haso@erp.local">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>

            <select class="form-select">
              <option selected>Active</option>
              <option>Inactive</option>
              <option>Suspended</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Update Data</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL AKSI -->
<div class="modal fade" id="modalAksi" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Quick Actions</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">

          <button class="btn btn-outline-primary">
            <i class="fas fa-key me-1"></i> Reset Password
          </button>

          <button class="btn btn-outline-warning">
            <i class="fas fa-lock me-1"></i> Suspend Account
          </button>

          <button class="btn btn-outline-success">
            <i class="fas fa-unlock me-1"></i> Activate Account
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-trash me-1"></i> Delete User
          </button>

        </div>

      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman Users</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h6>Apa fungsi halaman ini?</h6>

        <p>
          Halaman Users digunakan untuk mengelola identitas login sistem ERP. User adalah akun autentikasi yang digunakan untuk masuk ke aplikasi.
        </p>

        <h6>Perbedaan User, Role, dan Actor</h6>

        <ul>
          <li><b>User</b> = identitas login sistem.</li>
          <li><b>Role</b> = hak akses atau mode kerja sistem.</li>
          <li><b>Actor</b> = entitas bisnis nyata seperti dosen, staff, mahasiswa, customer.</li>
        </ul>

        <h6>Cara membaca tabel</h6>

        <ul>
          <li><b>Authentication</b> menunjukkan metode keamanan akun.</li>
          <li><b>Primary Role</b> menunjukkan role utama default.</li>
          <li><b>Status</b> menunjukkan status akses user.</li>
          <li><b>Last Login</b> membantu audit aktivitas login.</li>
        </ul>

        <h6>Tujuan bisnis halaman ini</h6>

        <p>
          Modul ini membantu organisasi menjaga keamanan akses sistem, validasi login pengguna, audit akses, dan governance user ERP enterprise.
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL IMPORT -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import User</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan template resmi untuk import user agar struktur data sesuai dengan engine autentikasi ERP.
        </div>

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template Import
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import Data</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Data Users</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <p class="fs-5">
          Apakah Anda yakin ingin mereset seluruh data users?
        </p>

        <p class="text-muted">
          Tindakan ini dapat mempengaruhi autentikasi login sistem ERP.
        </p>

      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset Data</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ERROR -->
<div class="modal fade" id="modalGagal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Gagal menambahkan user login.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Username sudah digunakan oleh user lain.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan username unik dan pastikan email belum terdaftar.
        </p>

        <div class="alert alert-warning mt-3">
          🔹 Tip: Gunakan kombinasi username yang konsisten untuk mempermudah audit user ERP.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-bs-dismiss="modal">
          <i class="fas fa-check me-1"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
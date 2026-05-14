<?php $page = 'access-authentication-settings'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Authentication Settings
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Pengaturan autentikasi sistem: cara user login, keamanan session, password policy, dan mekanisme verifikasi identitas.
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- SUMMARY CONFIG -->
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-4">
              <b>Login Method :</b> Username + Password
            </div>

            <div class="col-md-4">
              <b>2FA :</b> Enabled
            </div>

            <div class="col-md-4">
              <b>Session Timeout :</b> 30 Minutes
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
              <i class="fas fa-plus me-1"></i> Add Rule
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
          <h5 class="card-title mb-0">Authentication Policy Rules</h5>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead>
                <tr class="text-uppercase text-center">
                  <th>No</th>
                  <th>Policy Name</th>
                  <th>Scope</th>
                  <th>Condition</th>
                  <th>Value</th>
                  <th>Status</th>
                  <th>Priority</th>
                  <th>Updated At</th>
                  <th width="180">Aksi</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td class="text-center">1</td>
                  <td>Password Policy</td>
                  <td>GLOBAL</td>
                  <td>Min Length</td>
                  <td>8 Characters</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">1</td>
                  <td>2026-05-14 09:00</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView1"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit1"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAksi1"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">2</td>
                  <td>Password Policy</td>
                  <td>GLOBAL</td>
                  <td>Require Uppercase</td>
                  <td>TRUE</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">2</td>
                  <td>2026-05-14 09:01</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">3</td>
                  <td>Password Policy</td>
                  <td>GLOBAL</td>
                  <td>Require Symbol</td>
                  <td>TRUE</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">3</td>
                  <td>2026-05-14 09:02</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">4</td>
                  <td>Login Policy</td>
                  <td>GLOBAL</td>
                  <td>Max Login Attempt</td>
                  <td>5</td>
                  <td class="text-center"><span class="badge bg-warning">Locked Rule</span></td>
                  <td class="text-center">1</td>
                  <td>2026-05-14 09:03</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">5</td>
                  <td>Session Policy</td>
                  <td>GLOBAL</td>
                  <td>Timeout</td>
                  <td>30 Minutes</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">1</td>
                  <td>2026-05-14 09:04</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">6</td>
                  <td>Session Policy</td>
                  <td>GLOBAL</td>
                  <td>Concurrent Login</td>
                  <td>2 Devices</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">2</td>
                  <td>2026-05-14 09:05</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">7</td>
                  <td>2FA Policy</td>
                  <td>GLOBAL</td>
                  <td>OTP Required</td>
                  <td>TRUE</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">1</td>
                  <td>2026-05-14 09:06</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">8</td>
                  <td>IP Restriction</td>
                  <td>BRANCH</td>
                  <td>Whitelist Only</td>
                  <td>10.10.10.0/24</td>
                  <td class="text-center"><span class="badge bg-warning">Conditional</span></td>
                  <td class="text-center">2</td>
                  <td>2026-05-14 09:07</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">9</td>
                  <td>Device Policy</td>
                  <td>GLOBAL</td>
                  <td>Allowed Device</td>
                  <td>Trusted Device Only</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">2</td>
                  <td>2026-05-14 09:08</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">10</td>
                  <td>Password Expiry</td>
                  <td>GLOBAL</td>
                  <td>Expire Days</td>
                  <td>90 Days</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">1</td>
                  <td>2026-05-14 09:09</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cogs"></i></button>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">11</td>
                  <td>Login Lock Policy</td>
                  <td>GLOBAL</td>
                  <td>Auto Unlock</td>
                  <td>15 Minutes</td>
                  <td class="text-center"><span class="badge bg-success">Active</span></td>
                  <td class="text-center">3</td>
                  <td>2026-05-14 09:10</td>
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

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Authentication Settings</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p><b>Halaman ini mengatur keamanan login sistem ERP.</b></p>

        <ul>
          <li>Password policy (panjang, simbol, uppercase)</li>
          <li>Login attempt limit</li>
          <li>Session timeout</li>
          <li>2FA (OTP)</li>
          <li>IP restriction</li>
          <li>Device trust system</li>
        </ul>

        <p>
          Tujuan utama halaman ini adalah memastikan hanya user valid yang bisa mengakses sistem
          dengan tingkat keamanan sesuai kebijakan perusahaan.
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilter">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Policy</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Policy Type</label>
          <select class="form-select">
            <option>All</option>
            <option>Password Policy</option>
            <option>Login Policy</option>
            <option>Session Policy</option>
            <option>2FA Policy</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>All</option>
            <option>Active</option>
            <option>Locked</option>
            <option>Conditional</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-info">Apply</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Authentication Rule</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Authentication rules digunakan untuk mengontrol keamanan login dan session sistem ERP.
        </div>

        <div class="mb-3">
          <label class="form-label">Policy Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Condition</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Value</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Scope</label>
          <select class="form-select">
            <option>GLOBAL</option>
            <option>BRANCH</option>
            <option>USER</option>
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

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Policy</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <tr><th>Policy</th><td>Password Policy</td></tr>
          <tr><th>Condition</th><td>Min Length</td></tr>
          <tr><th>Value</th><td>8 Characters</td></tr>
          <tr><th>Status</th><td>Active</td></tr>
          <tr><th>Scope</th><td>GLOBAL</td></tr>
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
        <h5 class="modal-title">Edit Policy</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Value</label>
          <input type="text" class="form-control" value="8 Characters">
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
        <h5 class="modal-title">Policy Actions</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">Activate Policy</button>
        <button class="btn btn-outline-danger">Deactivate Policy</button>
        <button class="btn btn-outline-secondary">Reset Default</button>

      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Authentication Settings</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p>Apakah Anda yakin ingin mengembalikan semua authentication settings ke default?</p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
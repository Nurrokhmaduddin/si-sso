<?php $page = 'access-role-permission-mapping'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Role Permission Mapping
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk menghubungkan Role dengan Permission/Hak Akses yang dimiliki di dalam sistem ERP.
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

                <div class="col-md-3">
                  <b>Role:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Module:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Total Mapping:</b> 11 Data
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter"></i> Filter
                </button>

                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus"></i> Add
                </button>

                <button class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download"></i> Export
                </button>

                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban"></i> Reset
                </button>

              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="card">

            <div class="card-header">
              <h5 class="card-title mb-0">
                Role Permission Mapping List
              </h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr class="text-center text-uppercase">
                      <th>No</th>
                      <th>Role</th>
                      <th>Permission Code</th>
                      <th>Permission Name</th>
                      <th>Module</th>
                      <th>Action</th>
                      <th>Status</th>
                      <th>Assigned By</th>
                      <th>Assigned At</th>
                      <th width="170">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $data = [
                      ['Super Admin','USR-VIEW','View User','User Management','View','Active','adminerp','2026-05-01'],
                      ['Super Admin','USR-CREATE','Create User','User Management','Create','Active','adminerp','2026-05-01'],
                      ['Finance Manager','FIN-REPORT','View Financial Report','Finance','View','Active','adminerp','2026-05-02'],
                      ['Finance Staff','FIN-JOURNAL','Create Journal','Finance','Create','Active','adminerp','2026-05-02'],
                      ['Warehouse Staff','WH-STOCK','View Stock','Inventory','View','Active','adminerp','2026-05-03'],
                      ['Warehouse Manager','WH-ADJ','Approve Adjustment','Inventory','Approve','Active','adminerp','2026-05-03'],
                      ['Lecturer','ACD-GRADE','Input Grade','Academic','Update','Active','academic01','2026-05-04'],
                      ['Student','ACD-VIEW','View Academic Result','Academic','View','Active','academic01','2026-05-04'],
                      ['Cashier','POS-TRX','Create POS Transaction','POS','Create','Inactive','adminerp','2026-05-05'],
                      ['Auditor','AUDIT-LOG','View Audit Log','Audit','View','Active','superadmin','2026-05-05'],
                      ['Director','DASH-EXEC','View Executive Dashboard','Dashboard','View','Active','superadmin','2026-05-06'],
                    ];

                    $no = 1;
                    foreach($data as $d):
                    ?>

                    <tr>

                      <td class="text-center"><?= $no++; ?></td>

                      <td>
                        <span class="badge badge-primary">
                          <?= $d[0]; ?>
                        </span>
                      </td>

                      <td class="text-center">
                        <code><?= $d[1]; ?></code>
                      </td>

                      <td><?= $d[2]; ?></td>

                      <td class="text-center">
                        <?= $d[3]; ?>
                      </td>

                      <td class="text-center">
                        <span class="badge badge-info">
                          <?= $d[4]; ?>
                        </span>
                      </td>

                      <td class="text-center">

                        <?php if($d[5]=='Active'): ?>
                          <span class="badge badge-success">Active</span>
                        <?php else: ?>
                          <span class="badge badge-danger">Inactive</span>
                        <?php endif; ?>

                      </td>

                      <td><?= $d[6]; ?></td>

                      <td class="text-center"><?= $d[7]; ?></td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalView">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEdit">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-warning"
                          data-bs-toggle="modal"
                          data-bs-target="#modalAksi">
                          <i class="fas fa-cogs"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-secondary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalBantuan">
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
      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- FILTER -->
<div class="modal fade" id="modalFilter">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Role</label>
          <select class="form-select">
            <option>All</option>
            <option>Super Admin</option>
            <option>Finance Manager</option>
            <option>Warehouse Staff</option>
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

<!-- ADD -->
<div class="modal fade" id="modalTambahData">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Role Permission Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Role Permission Mapping menentukan hak akses apa saja yang dimiliki oleh suatu Role.
          </div>

          <div class="mb-3">
            <label>Role</label>
            <select class="form-select">
              <option>Select Role</option>
            </select>
          </div>

          <div class="mb-3">
            <label>Permission</label>
            <select class="form-select">
              <option>Select Permission</option>
            </select>
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
          <button class="btn btn-primary">Save Mapping</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- VIEW -->
<div class="modal fade" id="modalView">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Mapping Detail</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="250">Role</th>
            <td>Finance Manager</td>
          </tr>

          <tr>
            <th>Permission Code</th>
            <td>FIN-REPORT</td>
          </tr>

          <tr>
            <th>Permission Name</th>
            <td>View Financial Report</td>
          </tr>

          <tr>
            <th>Module</th>
            <td>Finance</td>
          </tr>

          <tr>
            <th>Action</th>
            <td>View</td>
          </tr>

          <tr>
            <th>Status</th>
            <td>Active</td>
          </tr>

          <tr>
            <th>Assigned By</th>
            <td>adminerp</td>
          </tr>

        </table>

      </div>

    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="modalEdit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

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
        <button class="btn btn-primary">Update Mapping</button>
      </div>

    </div>
  </div>
</div>

<!-- ACTION -->
<div class="modal fade" id="modalAksi">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Permission Action</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <button class="btn btn-outline-success w-100 mb-2">
          Activate Permission
        </button>

        <button class="btn btn-outline-warning w-100 mb-2">
          Suspend Permission
        </button>

        <button class="btn btn-outline-danger w-100">
          Remove Permission
        </button>

      </div>

    </div>
  </div>
</div>

<!-- HELP -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title">Bantuan Halaman</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Apa fungsi halaman ini?</h5>

        <p>
          Halaman ini digunakan untuk menentukan hak akses apa saja yang dimiliki oleh setiap Role di dalam sistem.
        </p>

        <hr>

        <h5>Konsep ERP Architecture</h5>

        <ul>
          <li>Role = cara user bekerja di sistem</li>
          <li>Permission = aksi/menu yang boleh diakses</li>
          <li>Mapping = hubungan antara Role dan Permission</li>
        </ul>

        <hr>

        <h5>Contoh</h5>

        <p>
          Role:
        </p>

        <ul>
          <li>Finance Manager</li>
        </ul>

        <p>
          Dapat memiliki permission:
        </p>

        <ul>
          <li>View Financial Report</li>
          <li>Approve Journal</li>
          <li>View Cashflow</li>
        </ul>

        <hr>

        <h5>Manfaat</h5>

        <ul>
          <li>Membatasi akses sesuai pekerjaan user</li>
          <li>Meningkatkan keamanan sistem</li>
          <li>Mendukung multi-role architecture</li>
          <li>Mendukung enterprise ERP governance</li>
        </ul>

      </div>

    </div>
  </div>
</div>

<!-- RESET -->
<div class="modal fade" id="modalResetData">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Permission Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <p>
          Apakah Anda yakin ingin mereset seluruh Role Permission Mapping?
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset Mapping</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
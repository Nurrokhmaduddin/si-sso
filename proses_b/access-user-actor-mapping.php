<?php $page = 'access-user-actor-mapping'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        User Actor Mapping
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk menghubungkan akun login sistem dengan actor/entity bisnis nyata seperti Dosen, Staff, Mahasiswa, Customer, Supplier, dan lainnya.
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
                  <b>Actor Type:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Primary Actor:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Data:</b> 11 Mapping
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
                User Actor Mapping List
              </h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr class="text-center text-uppercase">
                      <th>No</th>
                      <th>Username</th>
                      <th>Actor ID</th>
                      <th>Actor Name</th>
                      <th>Actor Type</th>
                      <th>Primary</th>
                      <th>Status</th>
                      <th>Created At</th>
                      <th width="170">Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $data = [
                      ['haso333','ACT-001','Ho Aldika','Lecturer','Yes','Active','2026-05-01'],
                      ['staff.prodi','ACT-002','Nadya Permata','Staff','Yes','Active','2026-05-01'],
                      ['finance01','ACT-003','Rina Saputra','Employee','Yes','Active','2026-05-02'],
                      ['kasir01','ACT-004','Ayu Wulandari','Cashier','Yes','Active','2026-05-02'],
                      ['warehouse01','ACT-005','Budi Santoso','Warehouse Staff','No','Active','2026-05-02'],
                      ['dosenbio','ACT-006','Dina Marlina','Lecturer','Yes','Active','2026-05-03'],
                      ['student001','ACT-007','Rahmat Hidayat','Student','Yes','Inactive','2026-05-03'],
                      ['supplier01','ACT-008','PT Sumber Makmur','Supplier','No','Active','2026-05-03'],
                      ['customer01','ACT-009','CV Maju Jaya','Customer','No','Active','2026-05-04'],
                      ['adminerp','ACT-010','ERP Administrator','Employee','Yes','Active','2026-05-04'],
                      ['audit01','ACT-011','Internal Audit','Auditor','No','Suspended','2026-05-04'],
                    ];

                    $no = 1;
                    foreach($data as $d):
                    ?>

                    <tr>

                      <td class="text-center"><?= $no++; ?></td>

                      <td><?= $d[0]; ?></td>

                      <td class="text-center"><?= $d[1]; ?></td>

                      <td><?= $d[2]; ?></td>

                      <td class="text-center">
                        <span class="badge badge-info">
                          <?= $d[3]; ?>
                        </span>
                      </td>

                      <td class="text-center">

                        <?php if($d[4]=='Yes'): ?>
                          <span class="badge badge-success">Primary</span>
                        <?php else: ?>
                          <span class="badge badge-secondary">Secondary</span>
                        <?php endif; ?>

                      </td>

                      <td class="text-center">

                        <?php if($d[5]=='Active'): ?>
                          <span class="badge badge-success">Active</span>
                        <?php elseif($d[5]=='Inactive'): ?>
                          <span class="badge badge-warning">Inactive</span>
                        <?php else: ?>
                          <span class="badge badge-danger">Suspended</span>
                        <?php endif; ?>

                      </td>

                      <td class="text-center"><?= $d[6]; ?></td>

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
        <h5 class="modal-title">Filter User Actor Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Actor Type</label>
          <select class="form-select">
            <option>All</option>
            <option>Lecturer</option>
            <option>Student</option>
            <option>Employee</option>
            <option>Supplier</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Status</label>
          <select class="form-select">
            <option>All</option>
            <option>Active</option>
            <option>Inactive</option>
            <option>Suspended</option>
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
        <h5 class="modal-title">Add User Actor Mapping</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            User Actor Mapping digunakan untuk menghubungkan akun login dengan actor/entity bisnis nyata.
          </div>

          <div class="mb-3">
            <label>User Login</label>
            <select class="form-select">
              <option>Select User</option>
            </select>
          </div>

          <div class="mb-3">
            <label>Actor Type</label>
            <select class="form-select">
              <option>Lecturer</option>
              <option>Student</option>
              <option>Employee</option>
              <option>Supplier</option>
            </select>
          </div>

          <div class="mb-3">
            <label>Actor</label>
            <select class="form-select">
              <option>Select Actor</option>
            </select>
          </div>

          <div class="mb-3">
            <label>Primary Actor</label>
            <select class="form-select">
              <option>Yes</option>
              <option>No</option>
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
            <th width="220">Username</th>
            <td>haso333</td>
          </tr>

          <tr>
            <th>Actor ID</th>
            <td>ACT-001</td>
          </tr>

          <tr>
            <th>Actor Name</th>
            <td>Ho Aldika</td>
          </tr>

          <tr>
            <th>Actor Type</th>
            <td>Lecturer</td>
          </tr>

          <tr>
            <th>Primary Actor</th>
            <td>Yes</td>
          </tr>

          <tr>
            <th>Status</th>
            <td>Active</td>
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
          <label>Primary Actor</label>
          <select class="form-select">
            <option>Yes</option>
            <option>No</option>
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
        <button class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>

<!-- ACTION -->
<div class="modal fade" id="modalAksi">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Mapping Action</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <button class="btn btn-outline-success w-100 mb-2">
          Set As Primary Actor
        </button>

        <button class="btn btn-outline-warning w-100 mb-2">
          Disable Mapping
        </button>

        <button class="btn btn-outline-danger w-100">
          Remove Mapping
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
          Halaman ini digunakan untuk menghubungkan akun login sistem dengan actor/entity bisnis nyata.
        </p>

        <p>
          Dalam arsitektur ERP modern:
        </p>

        <ul>
          <li>User = identitas login sistem</li>
          <li>Actor = entitas bisnis nyata</li>
          <li>Role = hak akses sistem</li>
          <li>Context = mode kerja aktif</li>
        </ul>

        <hr>

        <h5>Contoh Kasus</h5>

        <p>
          User <b>haso333</b> dapat terhubung dengan:
        </p>

        <ul>
          <li>Actor Dosen</li>
          <li>Actor Staff Prodi</li>
        </ul>

        <p>
          Tetapi tidak memiliki actor Mahasiswa.
        </p>

        <hr>

        <h5>Primary Actor</h5>

        <p>
          Primary Actor adalah actor default yang aktif saat user pertama kali login ke sistem.
        </p>

        <hr>

        <h5>Manfaat Architecture Ini</h5>

        <ul>
          <li>Mendukung multi-role user</li>
          <li>Mendukung context switching</li>
          <li>Mencegah role tanpa actor valid</li>
          <li>Mendukung ERP enterprise architecture</li>
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
        <h5 class="modal-title">Reset Mapping Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">

        <p>
          Apakah Anda yakin ingin mereset seluruh mapping user dan actor?
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
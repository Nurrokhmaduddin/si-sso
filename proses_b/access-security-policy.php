<?php $page = 'access-security-policy'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ================= HEADER ================= -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Security Policy Management
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Pengaturan kebijakan keamanan sistem: password, session, login attempt, role enforcement, dan kontrol akses tingkat lanjut.
      </p>
    </div>
  </section>

  <!-- ================= CONTENT ================= -->
  <section class="content">
    <div class="container-fluid">

      <!-- ================= INFO CARD ================= -->
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6"><b>Policy Domain:</b> Authentication & Authorization</div>
            <div class="col-md-6"><b>Mode:</b> Enterprise Security Control</div>
            <div class="col-md-6"><b>Scope:</b> System-wide</div>
            <div class="col-md-6"><b>Status:</b> Active Enforcement</div>
          </div>
        </div>
      </div>

      <!-- ================= TABLE ================= -->
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Security Policy Rules</h5>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
              <thead class="text-center text-uppercase">
                <tr>
                  <th>No</th>
                  <th>Policy Name</th>
                  <th>Category</th>
                  <th>Rule Type</th>
                  <th>Value</th>
                  <th>Severity</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>

                <?php for($i=1;$i<=11;$i++): ?>
                <tr>
                  <td class="text-center"><?= $i ?></td>
                  <td>Security Policy <?= $i ?></td>
                  <td>
                    <?= ($i%3==0) ? 'Authentication' : (($i%3==1) ? 'Session' : 'Authorization') ?>
                  </td>
                  <td>
                    <?= ($i%2==0) ? 'Threshold Rule' : 'Boolean Rule' ?>
                  </td>
                  <td>
                    <?= ($i%2==0) ? '30 minutes / 5 attempts' : 'Enabled / Disabled' ?>
                  </td>
                  <td class="text-center">
                    <?= ($i%3==0) ? '<span class="badge bg-danger">High</span>' : '<span class="badge bg-warning">Medium</span>' ?>
                  </td>
                  <td class="text-center">
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td class="text-center">

                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalView<?= $i ?>">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $i ?>">
                      <i class="fas fa-edit"></i>
                    </button>

                    <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalAksi<?= $i ?>">
                      <i class="fas fa-cogs"></i>
                    </button>

                  </td>
                </tr>
                <?php endfor; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<!-- ================= MODAL BANTUAN ================= -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Security Policy Help</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>
          Halaman ini digunakan untuk mengatur kebijakan keamanan sistem secara global.
        </p>
        <ul>
          <li>Password policy (panjang, kompleksitas)</li>
          <li>Session timeout</li>
          <li>Login attempt limit</li>
          <li>Role enforcement rules</li>
          <li>Access restriction logic</li>
        </ul>
        <p>
          Perubahan pada halaman ini akan berdampak langsung ke seluruh sistem ERP.
        </p>
      </div>
    </div>
  </div>
</div>

<?php for($i=1;$i<=11;$i++): ?>

<!-- ================= VIEW MODAL ================= -->
<div class="modal fade" id="modalView<?= $i ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">View Policy <?= $i ?></h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><b>Policy:</b> Security Policy <?= $i ?></p>
        <p><b>Detail:</b> Policy enforcement for system security layer.</p>
      </div>
    </div>
  </div>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="modalEdit<?= $i ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Edit Policy <?= $i ?></h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input class="form-control mb-2" value="Security Policy <?= $i ?>">
        <select class="form-select">
          <option>Authentication</option>
          <option>Session</option>
          <option>Authorization</option>
        </select>
      </div>
    </div>
  </div>
</div>

<!-- ================= AKSI MODAL ================= -->
<div class="modal fade" id="modalAksi<?= $i ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Policy Action</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Pilih aksi untuk policy ini:</p>
        <button class="btn btn-danger w-100 mb-2">Disable Policy</button>
        <button class="btn btn-success w-100 mb-2">Enable Policy</button>
        <button class="btn btn-dark w-100">Reset to Default</button>
      </div>
    </div>
  </div>
</div>

<?php endfor; ?>

<?php include('5script.php'); ?>
<?php $page = 'deferred-revenue'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<!-- ========================================================= -->
<!-- HEADER -->
<!-- ========================================================= -->
<section class="content-header">
  <div class="container-fluid">

    <h3 class="mb-0">
      Deferred Revenue Management
      <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Sistem ini mengelola pendapatan yang sudah diterima tetapi belum direalisasikan sebagai revenue,
      termasuk DP customer, subscription, project billing, dan layanan berlangganan.
    </p>

  </div>
</section>

<!-- ========================================================= -->
<!-- SUMMARY -->
<!-- ========================================================= -->
<section class="content">
<div class="container-fluid">

<div class="row mb-3">

  <div class="col-md-4">
    <div class="card text-bg-primary">
      <div class="card-body">
        <h5>Total Deferred Revenue</h5>
        <h3>Rp 620.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-warning">
      <div class="card-body">
        <h5>Recognized Revenue</h5>
        <h3>Rp 310.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-success">
      <div class="card-body">
        <h5>Remaining Liability</h5>
        <h3>Rp 310.000.000</h3>
      </div>
    </div>
  </div>

</div>

<!-- ========================================================= -->
<!-- ACTION BUTTONS -->
<!-- ========================================================= -->
<div class="card mb-3">
  <div class="card-body d-flex gap-2 flex-wrap">

    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAddDocument">
      <i class="fas fa-plus me-1"></i> Add Document
    </button>

    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalRevenueSchedule">
      <i class="fas fa-calculator me-1"></i> Revenue Schedule
    </button>
     <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalRunRevenueRecognition">
      <i class="fas fa-calculator me-1"></i>  Run Recognition
    </button>
     <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalRevenueAdjustment">
      <i class="fas fa-calculator me-1"></i> Revenue Adjustment
    </button>

    <button class="btn btn-outline-success">
      <i class="fas fa-file-download me-1"></i> Export
    </button>

  </div>
</div>

<!-- ========================================================= -->
<!-- TABLE -->
<!-- ========================================================= -->
<div class="card">
<div class="card-header">
  <h3 class="card-title">Deferred Revenue Register</h3>
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-dark text-center">
<tr>
  <th>Doc ID</th>
  <th>Type</th>
  <th>Customer</th>
  <th>Start</th>
  <th>End</th>
  <th>Amount</th>
  <th>Recognized</th>
  <th>Remaining</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>DR-001</td>
  <td>Subscription</td>
  <td>PT Digital Solusi</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">120.000.000</td>
  <td class="text-end">50.000.000</td>
  <td class="text-end">70.000.000</td>
  <td><span class="badge bg-info">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>DR-002</td>
  <td>Project</td>
  <td>PT Karya Mandiri</td>
  <td>2026-01-10</td>
  <td>2026-06-10</td>
  <td class="text-end">250.000.000</td>
  <td class="text-end">100.000.000</td>
  <td class="text-end">150.000.000</td>
  <td><span class="badge bg-warning">In Progress</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>DR-003</td>
  <td>Service Contract</td>
  <td>PT Infrastruktur Jaya</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">180.000.000</td>
  <td class="text-end">90.000.000</td>
  <td class="text-end">90.000.000</td>
  <td><span class="badge bg-success">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>DR-004</td>
  <td>Training</td>
  <td>CV Edukasi Nusantara</td>
  <td>2026-02-01</td>
  <td>2026-04-01</td>
  <td class="text-end">45.000.000</td>
  <td class="text-end">20.000.000</td>
  <td class="text-end">25.000.000</td>
  <td><span class="badge bg-info">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

</tbody>

</table>

</div>
</div>

</div>
</section>
</div>

<?php include('4footer.php'); ?>
<!-- ========================================================= -->
<!-- MODAL ADD DOCUMENT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalAddDocument" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Deferred Revenue Document</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Dokumen ini akan otomatis menghasilkan jurnal:
            <b>Dr Cash / Bank → Cr Deferred Revenue</b>
          </div>

          <p><b>Dokumen yang dapat memicu Deferred Revenue:</b></p>
          <ul>
            <li>Advance Payment Invoice (DP Customer)</li>
            <li>Subscription Invoice (SaaS / Membership)</li>
            <li>Project Down Payment Contract</li>
            <li>Service Agreement (SLA)</li>
            <li>Training / Course Fee Invoice</li>
            <li>Rental Income Received in Advance</li>
          </ul>

          <hr>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Document Type</label>
              <select class="form-select">
                <option>Advance Payment (DP)</option>
                <option>Subscription</option>
                <option>Project Billing</option>
                <option>Service Contract</option>
                <option>Training Fee</option>
                <option>Rental Income</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Customer</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Document Number</label>
              <input type="text" class="form-control" placeholder="INV / DP / CONTRACT">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Amount Received</label>
              <input type="number" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Start Service Date</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">End Service Date</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

          </div>

          <div class="alert alert-info">
            <b>Auto Logic System:</b><br>
            - Jika full payment → langsung masuk Deferred Revenue<br>
            - Jika partial → split AR + Deferred Revenue<br>
            - Revenue akan diakui per periode (amortisasi)
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Create Document</button>
        </div>

      </form>

    </div>
  </div>
</div>
<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Deferred Revenue Accounting Guide</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>📌 Apa itu Deferred Revenue?</h5>
        <p>
          Deferred Revenue adalah kewajiban perusahaan karena sudah menerima pembayaran,
          tetapi barang atau jasa belum sepenuhnya diberikan kepada customer.
        </p>

        <hr>

        <h5>📚 Dokumen yang Menimbulkan Deferred Revenue</h5>

        <ul>
          <li><b>Advance Payment / DP Invoice</b> → uang muka dari customer</li>
          <li><b>Subscription Invoice</b> → layanan berulang (bulanan/tahunan)</li>
          <li><b>Project Contract Billing</b> → pembayaran milestone proyek</li>
          <li><b>Service Level Agreement (SLA)</b> → kontrak jasa berkala</li>
          <li><b>Training Fee Invoice</b> → pelatihan / kursus</li>
          <li><b>Rental Income Advance</b> → sewa dibayar di muka</li>
          <li><b>Voucher / Gift Card Sale</b> → pendapatan belum diredeem</li>
        </ul>

        <hr>

        <h5>🧠 Alur Akuntansi</h5>

        <p><b>1. Saat uang diterima:</b></p>
        <div class="alert alert-secondary">
          Dr Cash / Bank<br>
          Cr Deferred Revenue (Liability)
        </div>

        <p><b>2. Saat jasa diberikan:</b></p>
        <div class="alert alert-secondary">
          Dr Deferred Revenue<br>
          Cr Revenue (Income)
        </div>

        <hr>

        <h5>📊 Perbedaan dengan AR & Cash-In</h5>

        <ul>
          <li><b>Cash-In:</b> semua uang masuk (umum)</li>
          <li><b>AR:</b> uang belum diterima</li>
          <li><b>Deferred Revenue:</b> uang sudah diterima tapi belum jadi pendapatan</li>
        </ul>

        <hr>

        <h5>⚠️ Risiko Salah Klasifikasi</h5>

        <ul>
          <li>Revenue diakui terlalu cepat → overstatement profit</li>
          <li>Liability tidak tercatat → laporan keuangan bias</li>
          <li>Mismatch audit IFRS / PSAK</li>
        </ul>

        <hr>

        <h5>🔁 Integrasi Sistem ERP</h5>

        <ul>
          <li>AR → saat invoice dibuat</li>
          <li>Cash-In → saat pembayaran diterima</li>
          <li>Deferred Revenue → saat pembayaran advance</li>
          <li>Revenue Recognition → saat service delivered</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="modalRevenueSchedule" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Setup Revenue Schedule</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Digunakan untuk membuat jadwal pengakuan pendapatan dari kontrak jangka panjang, subscription, atau project.
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label>Customer / Client</label>
            <input type="text" class="form-control" placeholder="PT Contoh Indonesia">
          </div>

          <div class="col-md-6 mb-3">
            <label>Contract Number</label>
            <input type="text" class="form-control" placeholder="CTR-2026-001">
          </div>

          <div class="col-md-6 mb-3">
            <label>Total Contract Value</label>
            <input type="number" class="form-control" placeholder="100000000">
          </div>

          <div class="col-md-6 mb-3">
            <label>Revenue Recognition Method</label>
            <select class="form-select">
              <option>Time-Based (Straight Line)</option>
              <option>Milestone-Based</option>
              <option>Percentage of Completion</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Start Date</label>
            <input type="date" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label>End Date</label>
            <input type="date" class="form-control">
          </div>

          <div class="col-md-12 mb-3">
            <label>Related Source Document</label>
            <input type="text" class="form-control"
                   placeholder="Sales Invoice / Contract / PO / Subscription Agreement">
          </div>

        </div>

        <div class="alert alert-warning">
          📌 Jurnal awal:
          <br>Dr Cash / AR
          <br>Cr Deferred Revenue
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Create Schedule</button>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalRunRevenueRecognition" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Run Revenue Recognition Engine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Sistem akan menghitung dan memposting jurnal berdasarkan schedule yang aktif.
        </div>

        <div class="mb-3">
          <label>Periode</label>
          <input type="month" class="form-control">
        </div>

        <div class="mb-3">
          <label>Recognition Mode</label>
          <select class="form-select">
            <option>Auto (System Calculation)</option>
            <option>Manual Review First</option>
          </select>
        </div>

        <div class="alert alert-success">
          📌 Jurnal otomatis yang akan dibuat:
          <br>Dr Deferred Revenue
          <br>Cr Revenue
        </div>

        <div class="alert alert-warning">
          ⚠ Pastikan contract schedule sudah benar sebelum menjalankan proses ini.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-warning">Run Engine</button>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalRevenueAdjustment" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Revenue Adjustment</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan untuk koreksi revenue yang sudah diposting sebelumnya.
        </div>

        <div class="mb-3">
          <label>Related Contract / Schedule</label>
          <input type="text" class="form-control" placeholder="CTR-2026-001">
        </div>

        <div class="mb-3">
          <label>Adjustment Type</label>
          <select class="form-select">
            <option>Increase Revenue</option>
            <option>Decrease Revenue</option>
            <option>Reclass Deferred Revenue</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Amount</label>
          <input type="number" class="form-control">
        </div>

        <div class="mb-3">
          <label>Reason</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>

        <div class="alert alert-info">
          📌 Jurnal:
          <br>Dr / Cr Revenue
          <br>Dr / Cr Deferred Revenue
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Post Adjustment</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
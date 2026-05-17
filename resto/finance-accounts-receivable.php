<?php $page = 'accounts-receivable'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">
<!-- ========================================================= -->
<!-- HEADER -->
<!-- ========================================================= -->

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Receivable (Piutang )
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Menampilkan buku besar piutang customer berbasis posting jurnal akuntansi (journal_detail) yang diturunkan dari transaksi bisnis (source document).
      </p>
    </div>
  </section>
<!-- ========================================================= -->
<!-- FILTER -->
<!-- ========================================================= -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- CARD FILTER -->
          <div class="card">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3"><b>Period:</b> Jan 2026</div>
                <div class="col-md-3"><b>Module:</b> All</div>
                <div class="col-md-3"><b>AR Type:</b> All</div>
                <div class="col-md-3"><b>Subledger:</b> All Customer</div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add Source Document
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>

                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>



              </div>
            </div>
          </div>
<!-- ========================================================= -->
<!-- TABLE -->
<!-- ========================================================= -->
         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-body">
<div class="table-responsive ">
<table class="table table-bordered table-striped table-sm datatables1">

  <thead class="table-dark text-center">
    <tr>
      <th>Document No</th>
      <th>Document Type</th>
      <th>AR Type</th>
      <th>Counterparty</th>
      <th>Module</th>
      <th>Amount</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>

    <tr>
      <td>INV-2026-001</td>
      <td>Sales Invoice</td>
      <td>Trade</td>
      <td>PT Maju Bersama</td>
      <td>Sales Module</td>
      <td>Rp 25.000.000</td>
      <td>
    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
  </td>
    </tr>

    <tr>
      <td>INV-2026-002</td>
      <td>Service Invoice</td>
      <td>Trade</td>
      <td>PT Sentosa Abadi</td>
      <td>Sales Module</td>
      <td>Rp 18.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>EMP-LOAN-001</td>
      <td>Employee Loan</td>
      <td>Employee</td>
      <td>Rina Finance</td>
      <td>HR Module</td>
      <td>Rp 5.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>INV-2026-004</td>
      <td>Sales Invoice</td>
      <td>Trade</td>
      <td>CV Cahaya Utama</td>
      <td>Sales Module</td>
      <td>Rp 42.500.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>TAX-REF-001</td>
      <td>Tax Claim</td>
      <td>Tax</td>
      <td>DJP Indonesia</td>
      <td>Tax Module</td>
      <td>Rp 12.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>LOAN-001</td>
      <td>Loan Agreement</td>
      <td>Non-Trade</td>
      <td>PT Sinar Logistik</td>
      <td>Finance Module</td>
      <td>Rp 65.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>INV-2026-007</td>
      <td>Sales Invoice</td>
      <td>Trade</td>
      <td>PT Nusantara Retail</td>
      <td>Sales Module</td>
      <td>Rp 22.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>ADV-001</td>
      <td>Advance Payment</td>
      <td>Other</td>
      <td>PT Mega Industri</td>
      <td>Finance Module</td>
      <td>Rp 15.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>INV-2026-009</td>
      <td>Sales Invoice</td>
      <td>Trade</td>
      <td>PT Global Tekno</td>
      <td>Sales Module</td>
      <td>Rp 95.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>EMP-LOAN-002</td>
      <td>Employee Loan</td>
      <td>Employee</td>
      <td>Dimas HR</td>
      <td>HR Module</td>
      <td>Rp 8.000.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
    </tr>

    <tr>
      <td>INV-2026-011</td>
      <td>Sales Invoice</td>
      <td>Trade</td>
      <td>PT Arta Supply</td>
      <td>Sales Module</td>
      <td>Rp 11.300.000</td>
      <td><button class="btn btn-sm btn-primary">View</button></td>
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
<h5 class="modal-title">AR Subledger Filter</h5>
</div>

<div class="modal-body">

<label>Period (journal_header.date)</label>
<input type="month" class="form-control mb-2">

<label>Source Module</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Sales</option>
  <option>HR</option>
  <option>Finance</option>
  <option>Tax</option>
</select>

<label>Document Type (reference_type)</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Sales Invoice</option>
  <option>Loan Agreement</option>
  <option>Employee Loan</option>
</select>

<label>AR Type</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Trade</option>
  <option>Employee</option>
  <option>Tax</option>
</select>

<label>Subledger</label>
<input type="text" class="form-control">

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button class="btn btn-primary">Apply</button>
</div>

</div>
</div>
</div>

<!-- MODAL TAMBAH -->
<!-- ========================================================= -->
<!-- MODAL TAMBAH AR SOURCE DOCUMENT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalTambahData" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah AR Source Document</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <!-- ========================= -->
          <!-- SECTION 1: IDENTITAS -->
          <!-- ========================= -->
          <h6 class="text-primary mb-2">1. Identitas Dokumen</h6>

          <div class="row">

             <div class="col-md-6 mb-3">
              <label>Document Type => journal_header.reference_type</label>
              <select class="form-select">
                <option>Sales Invoice</option>
                <option>Service Invoice</option>
                <option>Loan Agreement</option>
                <option>Employee Loan</option>
                <option>Tax Claim</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label>Document No => journal_header.reference_no</label>
              <input type="text" class="form-control" placeholder="AUTO GENERATE: INV-2026-XXXX" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label">Description =>journal_header.description</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

          </div>

          <!-- ========================= -->
          <!-- SECTION 2: COUNTERPARTY -->
          <!-- ========================= -->
          <h6 class="text-primary mb-2 mt-2">2. Counterparty</h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label>Customer / Entity => journal_detail.subledger_id</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label>Source Module => journal_header.source_module</label>
              <select class="form-select">
                <option>Sales Module</option>
                <option>Finance Module</option>
                <option>HR Module</option>
                <option>Tax Module</option>
              </select>
            </div>

          </div>

          <!-- ========================= -->
          <!-- SECTION 3: FINANCIAL -->
          <!-- ========================= -->
          <h6 class="text-primary mb-2 mt-2">3. Nilai Piutang</h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label>Amount</label>
              <input type="number" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label>AR Impact Type (AUTO . document_type selected)</label>
              <select class="form-select" disabled>
                <option>Trade Receivable</option>
                <option>Non-Trade Receivable</option>
                <option>Employee Receivable</option>
                <option>Tax Receivable</option>
                <option>Other Receivable</option>
              </select>
            </div>
<div class="col-md-6 mb-3">
              <label class="form-label">Default Debit COA (based on doocument_type selected). nominal COA based on amount</label>
              <input type="text" class="form-control" value="AR-1100">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Default Credit COA (based on doocument_type selected).nominal COA based on amount</label>
              <input type="text" class="form-control" placeholder="Revenue / Loan / Liability">
            </div>
          </div>
          <!-- ========================= -->
          <!-- SECTION 4: SYSTEM (READONLY) -->
          <!-- ========================= -->
          <h6 class="text-muted mb-2 mt-2">4. System (Auto Generated)</h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label>Journal No</label>
              <input type="text" class="form-control" value="AUTO FROM journal_header" readonly>
            </div>

            <div class="col-md-6 mb-3">
              <label>Reference No</label>
              <input type="text" class="form-control" value="AUTO FROM source_document" readonly>
            </div>
            
          </div>

          <!-- ========================= -->
          <!-- SECTION 5: AUDIT -->
          <!-- ========================= -->
          <h6 class="text-muted mb-2 mt-2">5. Audit Trail</h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label>Created By</label>
              <input type="text" class="form-control" value="current_user" readonly>
            </div>

            <div class="col-md-6 mb-3">
              <label>Created At</label>
              <input type="text" class="form-control" value="auto timestamp" readonly>
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Document</button>
        </div>

      </form>

    </div>

  </div>

</div>


<!-- MODAL VIEW -->
<div class="modal fade" id="modalView" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Invoice</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
            <th>No Invoice</th>
            <td>INV-AR-001</td>
          </tr>
          <tr>
            <th>Customer</th>
            <td>PT Sumber Makmur</td>
          </tr>
          <tr>
            <th>Total Tagihan</th>
            <td>Rp 12.500.000</td>
          </tr>
          <tr>
            <th>Sisa Piutang</th>
            <td>Rp 7.500.000</td>
          </tr>
          <tr>
            <th>Status</th>
            <td><span class="badge bg-warning">Partial</span></td>
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
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Data Piutang</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Customer</label>
          <input type="text" class="form-control" value="PT Sumber Makmur">
        </div>

        <div class="mb-3">
          <label class="form-label">Total Tagihan</label>
          <input type="text" class="form-control" value="12500000">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option selected>Partial</option>
            <option>Paid</option>
            <option>Outstanding</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL AKSI -->
<div class="modal fade" id="modalAksi" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Aksi Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">
          <button class="btn btn-outline-success">
            <i class="fas fa-check-circle me-1"></i> Tandai Lunas
          </button>

          <button class="btn btn-outline-warning">
            <i class="fas fa-paper-plane me-1"></i> Kirim Reminder
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-trash me-1"></i> Hapus Invoice
          </button>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- MODAL IMPOR -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Data Piutang</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file menggunakan template resmi accounts receivable agar proses import berhasil.
        </div>

        <input type="file" class="form-control">

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header bg-primary text-white">
<h5 class="modal-title">AR Subledger Concept Guide</h5>
</div>

<div class="modal-body">

<h6>1. Konsep Data</h6>
<p>
Halaman ini adalah hasil agregasi journal_detail (GL posting), bukan input manual.
</p>

<h6>2. Sumber Data</h6>
<ul>
<li>source_document → transaksi bisnis</li>
<li>journal_header → metadata jurnal</li>
<li>journal_detail → debit/credit posting</li>
</ul>

<h6>3. Alur Data</h6>
<p>
Source Document → Journal Header → Journal Detail → AR Subledger View
</p>

<h6>4. Definisi Kolom</h6>
<ul>
<li>Document No = reference_no</li>
<li>Document Type = reference_type</li>
<li>AR Type = hasil mapping accounting rule</li>
<li>Module = source_module</li>
<li>Amount = sum(debit-credit)</li>
</ul>

<h6>5. Tujuan</h6>
<ul>
<li>Audit piutang berbasis jurnal</li>
<li>Rekonsiliasi subledger vs GL</li>
<li>Tracking customer exposure</li>
</ul>

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Filter Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        Apakah Anda yakin ingin mereset seluruh filter pencarian data piutang?
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ERROR -->
<div class="modal fade" id="modalGagal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Gagal melakukan import data piutang.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Format file tidak sesuai template accounts receivable.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan template resmi lalu upload ulang file import.
        </p>

        <div class="alert alert-warning">
          Pastikan seluruh kolom wajib telah terisi dengan benar.
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
<?php
$page = 'financial-report-journal';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>


<style>
.modal {
    overflow-y: auto !important;
}
/* Entity type → tampil sebagai readonly badge setelah COA dipilih */
.entity-type-display {
    font-size: 0.82rem;
    font-weight: 600;
    padding: 4px 8px;
    border-radius: 4px;
    background: #e9ecef;
    color: #495057;
    display: inline-block;
    min-width: 80px;
    text-align: center;
}
.entity-type-display.empty {
    color: #adb5bd;
    background: #f8f9fa;
}
</style>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Jurnal Entries
        <button type="button" class="btn btn-tool"
                data-bs-toggle="modal" data-bs-target="#modalBantuan"
                title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Daftar transaksi yang dimasukkan pada jurnal. Journal type bisa digunakan untuk penandaan atau pengelompokan jurnal.</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <!-- ── Card Filter & Toolbar ── -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6"><b>Periode:</b> <?= date('F Y') ?></div>
                <div class="col-md-6"><b>Status:</b> Semua</div>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
          </div>

          <!-- ── Card Tabel Journal ── -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jurnal No</th>
                      <th>Transaction Type</th>
                      <th>Transaction Date</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no    = 1;
                    $query = mysqli_query($conn, "SELECT * FROM journal_headers ORDER BY transaction_date DESC , created_at DESC");
                    while ($d = mysqli_fetch_array($query)) :
                    ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><b><?= htmlspecialchars($d['journal_no']) ?></b></td>
                      <td><span class="badge bg-info"><?= htmlspecialchars($d['transaction_type']) ?></span></td>
                      <td><?= date('d M Y', strtotime($d['transaction_date'])) ?></td>
                      <td><?= htmlspecialchars($d['memo']) ?></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info btn-detail"
                                data-id="<?= $d['id'] ?>"
                                data-bs-toggle="modal"
                                data-bs-target="#modalDetailJournal">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <?php endwhile; ?>
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

<!-- ══════════════════════════════════════════════════════════
     MODAL: Filter
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control" name="periode">
          </div>
          <div class="mb-3">
            <label class="form-label">Transaction Type</label>
            <select name="transaction_type" class="form-select">
              <option value="">-- Semua --</option>
              <option>GENERAL_JOURNAL</option>
              <option>ADJUSTMENT_JOURNAL</option>
              <option>CASH_IN</option>
              <option>CASH_OUT</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
              <option value="">-- Semua --</option>
              <option>DRAFT</option>
              <option>POSTED</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- ══════════════════════════════════════════════════════════
     MODAL: Bantuan
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Panduan Pengisian General Journal</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info">
          Form ini digunakan untuk mencatat transaksi akuntansi secara manual.
          Total debit dan kredit harus seimbang (balanced).
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Alur Pengisian Journal Detail</div>
          <div class="card-body">
            <ol>
              <li>Pilih <b>Account (COA)</b> → kolom <b>Entity Type</b> otomatis terisi sesuai subledger akun tersebut.</li>
              <li>Jika Entity Type memiliki data, kolom <b>Entity ID</b> otomatis load daftar entitas (customer / vendor / dll).</li>
              <li>Pilih Entity ID yang sesuai.</li>
              <li>Isi nominal <b>Debit</b> atau <b>Credit</b> (tidak keduanya).</li>
            </ol>
            <div class="alert alert-warning mb-0">
              <b>Aturan:</b> Total Debit harus = Total Credit sebelum bisa Post Journal.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Contoh — Penjualan Tunai</div>
          <div class="card-body">
            <table class="table table-bordered table-sm">
              <thead class="table-light"><tr><th>Akun</th><th>Entity Type</th><th>Debit</th><th>Credit</th></tr></thead>
              <tbody>
                <tr><td>Kas Kecil (1101)</td><td><span class="badge bg-secondary">cash</span></td><td>1.000.000</td><td>0</td></tr>
                <tr><td>Pendapatan Penjualan (4101)</td><td><span class="badge bg-info">customer</span></td><td>0</td><td>1.000.000</td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light fw-bold">Aturan Penting</div>
          <div class="card-body">
            <div class="alert alert-danger">Jurnal tidak dapat diposting jika total debit ≠ kredit.</div>
            <ul class="mb-0">
              <li>Total debit harus sama dengan total kredit.</li>
              <li>Minimal terdapat 2 baris jurnal.</li>
              <li>Setiap baris hanya boleh debit ATAU kredit.</li>
              <li>Gunakan reference number agar mudah ditelusuri.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Error Handler
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalGagal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title"><i class="fas fa-times-circle me-2"></i>Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br><span id="errorAction">Upload file gagal.</span></p>
        <p><strong>⚠️ Penyebab:</strong><br><span id="errorReason">Format file tidak sesuai atau ukuran melebihi 5MB.</span></p>
        <p><strong>💡 Solusi:</strong><br><span id="errorSolution">Pastikan file sesuai format, lalu coba lagi.</span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>



<!-- ══════════════════════════════════════════════════════════
     MODAL: Detail Journal
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalDetailJournal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Journal Detail</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="detailJournalBody">
        <div class="text-center p-5">
          <div class="spinner-border text-primary"></div>
          <div class="mt-2">Loading...</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>

<script>
// ══════════════════════════════════════════════════════════════
// DATA DARI PHP — di-inject sekali, dipakai ulang di JS
// ══════════════════════════════════════════════════════════════
var _coaOptions     = `<?= $coaOptionsJS ?>`;
var _branchOptions  = `<?= $branchOptionsJS ?>`;
var _projectOptions = `<?= $projectOptionsJS ?>`;

// ══════════════════════════════════════════════════════════════
// FUNGSI: Tampilkan Entity Type dari subledger COA
// ── Dipanggil saat select-coa berubah
// ══════════════════════════════════════════════════════════════
function applyEntityTypeFromCOA(selectCoaEl) {

    var $select     = $(selectCoaEl);
    var $row        = $select.closest('tr');
    var subledger   = $select.find('option:selected').data('subledger') || '';

    // Update badge tampilan
    var $badge = $row.find('.entity-type-display');
    var $hidden = $row.find('input[name="entity_type[]"]');

    if (subledger) {
        $badge.text(subledger).removeClass('empty');
        $hidden.val(subledger);
    } else {
        $badge.text('—').addClass('empty');
        $hidden.val('');
    }

    // Lanjut load entity ID
    loadEntityID($row, subledger);
}

// ══════════════════════════════════════════════════════════════
// FUNGSI: Load Entity ID via AJAX berdasarkan entity_type
// ══════════════════════════════════════════════════════════════
function loadEntityID($row, entityType) {

    var $entitySelect = $row.find('.select-entity-id');
    var $spinner      = $row.find('.entity-spinner');
    var $msg          = $row.find('.entity-msg');

    // Reset
    $entitySelect.empty().append('<option value="">-</option>');
    $msg.addClass('d-none').text('').removeClass('text-danger text-warning text-muted');
    $spinner.addClass('d-none');

    // Kosong — disable dan stop
    if (!entityType || entityType === '') {
        $entitySelect.prop('disabled', true)
                     .empty()
                     .append('<option value="">- pilih akun dulu -</option>');
        return;
    }

    // Tampilkan spinner
    $spinner.removeClass('d-none');
    $entitySelect.prop('disabled', true);

    // AJAX
    $.ajax({
        url      : 'ajax_get_entities.php',
        type     : 'GET',
        data     : { entity_type: entityType },
        dataType : 'json',

        success: function(res) {
            $spinner.addClass('d-none');

            if (res.status === 'ok') {
                if (res.rows.length === 0) {
                    $entitySelect.append('<option value="">— tidak ada data —</option>');
                    $entitySelect.prop('disabled', true);
                    $msg.removeClass('d-none').text('Data kosong.')
                        .addClass('text-warning');
                    return;
                }
                $.each(res.rows, function(i, item) {
                    $entitySelect.append(
                        $('<option>', { value: item.id, text: item.label })
                    );
                });
                $entitySelect.prop('disabled', false);

            } else if (res.status === 'no_entity') {
                $entitySelect.append('<option value="">— tidak perlu entity —</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('Tipe ini tidak memerlukan entity.')
                    .addClass('text-muted');

            } else if (res.status === 'not_mapped') {
                $entitySelect.append('<option value="">-</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('⚠ "' + entityType + '" belum terhubung ke tabel.')
                    .addClass('text-danger');

            } else {
                $entitySelect.append('<option value="">- error -</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('DB Error: ' + res.message)
                    .addClass('text-danger');
            }
        },

        error: function(xhr, status, err) {
            $spinner.addClass('d-none');
            $entitySelect.prop('disabled', true)
                         .empty()
                         .append('<option value="">- request gagal -</option>');
            $msg.removeClass('d-none')
                .text('AJAX error: ' + err)
                .addClass('text-danger');
        }
    });
}

// ══════════════════════════════════════════════════════════════
// EVENT: saat COA dipilih (baris mana saja, termasuk baris baru)
// ══════════════════════════════════════════════════════════════
$(document).on('change', '.select-coa', function() {
    applyEntityTypeFromCOA(this);
});

// ══════════════════════════════════════════════════════════════
// FUNGSI: Tambah baris baru
// ══════════════════════════════════════════════════════════════
function addJournalRow() {
    var newRow = `
    <tr>
        <td>
            <select class="form-select select-coa" name="coa_id[]" required>
                <option value="" data-subledger="">-- Pilih Akun --</option>
                ${_coaOptions}
            </select>
        </td>
        <td>
            <input type="text" class="form-control"
                   name="line_memo[]" placeholder="Line memo">
        </td>
        <td>
            <input type="number" class="form-control debit text-end"
                   name="debit[]" min="0" step="0.01" value="0">
        </td>
        <td>
            <input type="number" class="form-control credit text-end"
                   name="credit[]" min="0" step="0.01" value="0">
        </td>
        <td>
            <select class="form-select" name="branch_id[]">
                <option value="0">-</option>
                ${_branchOptions}
            </select>
        </td>
        <td>
            <select class="form-select" name="project_id[]">
                <option value="0">-</option>
                ${_projectOptions}
            </select>
        </td>
        <td class="text-center">
            <span class="entity-type-display empty">—</span>
            <input type="hidden" name="entity_type[]" value="">
        </td>
        <td>
            <div class="entity-id-wrapper">
                <select class="form-select select-entity-id"
                        name="entity_id[]" disabled>
                    <option value="">- pilih akun dulu -</option>
                </select>
                <div class="entity-spinner spinner-border spinner-border-sm
                            text-secondary mt-1 d-none"></div>
                <small class="entity-msg d-none"></small>
            </div>
        </td>
        <td class="text-center">
            <button type="button"
                    class="btn btn-outline-danger btn-sm btn-remove-row">
                <i class="fas fa-trash"></i>
            </button>
        </td>
    </tr>`;

    $('#journalTableBody').append(newRow);
}

// ══════════════════════════════════════════════════════════════
// EVENT: hapus baris
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-remove-row', function() {
    if ($('#journalTableBody tr').length <= 1) {
        alert('Minimal harus ada 1 baris jurnal.');
        return;
    }
    $(this).closest('tr').remove();
    recalcBalance();
});

// ══════════════════════════════════════════════════════════════
// FUNGSI: Hitung balance debit vs credit
// ══════════════════════════════════════════════════════════════
function recalcBalance() {
    var totalDebit  = 0;
    var totalCredit = 0;

    $('.debit').each(function()  { totalDebit  += parseFloat($(this).val()) || 0; });
    $('.credit').each(function() { totalCredit += parseFloat($(this).val()) || 0; });

    $('#totalDebit').text(totalDebit.toFixed(2));
    $('#totalCredit').text(totalCredit.toFixed(2));

    if (totalDebit > 0 && totalDebit === totalCredit) {
        $('#balanceStatus')
            .text('✔ BALANCED')
            .removeClass('text-danger')
            .addClass('text-success');
    } else {
        $('#balanceStatus')
            .text('✖ NOT BALANCED')
            .removeClass('text-success')
            .addClass('text-danger');
    }
}

$(document).on('input', '.debit, .credit', function() {
    recalcBalance();
});

// ══════════════════════════════════════════════════════════════
// EVENT: klik detail journal
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-detail', function() {
    var id = $(this).data('id');
    $('#detailJournalBody').html(`
        <div class="text-center p-5">
            <div class="spinner-border text-primary"></div>
            <div class="mt-2">Loading...</div>
        </div>
    `);
    $.ajax({
        url     : 'ajax_journal_detail.php',
        type    : 'GET',
        data    : { id: id },
        success : function(response) {
            $('#detailJournalBody').html(response);
        }
    });
});


</script>

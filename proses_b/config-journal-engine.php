<?php
// ============================================================
// PAGE : config-journal-engine.php
// DESCRIPTION : Konfigurasi Journal Engine — Business Event
//               & Accounting Rule COA Mapping
// ============================================================
$page = 'config-journal-engine';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>
<?php
/* ============================================================
   QUERY UTAMA — Daftar Business Event + Accounting Rule
============================================================ */
$qList = mysqli_query($conn, "
    SELECT
        be.id             AS event_id,
        be.event_code,
        be.event_name,
        be.module_name,
        be.source_table,
        be.description    AS event_desc,
        be.is_active      AS event_active,
        ar.id             AS rule_id,
        ar.rule_code,
        ar.rule_name,
        ar.description    AS rule_desc,
        ar.auto_post,
        ar.is_active      AS rule_active,
        COUNT(ard.id)     AS total_lines
    FROM business_events be
    LEFT JOIN accounting_rules ar  ON ar.business_event_id = be.id
    LEFT JOIN accounting_rule_details ard ON ard.accounting_rule_id = ar.id
    GROUP BY be.id, ar.id
    ORDER BY be.id ASC
");

$listData = [];
while ($r = mysqli_fetch_assoc($qList)) $listData[] = $r;

/* ============================================================
   STAT RINGKAS
============================================================ */
$totalEvents    = count($listData);
$totalActive    = count(array_filter($listData, fn($r) => $r['rule_active'] == 1));
$totalAutoPost  = count(array_filter($listData, fn($r) => $r['auto_post']   == 1));
$totalNoMapping = count(array_filter($listData, fn($r) => empty($r['rule_id'])));

/* ============================================================
   MODULE COLORS
============================================================ */
$moduleColor = [
    'Sales'         => 'info',
    'Finance'       => 'success',
    'Inventory'     => 'warning',
    'Purchase'      => 'primary',
    'Manufacturing' => 'secondary',
    'Asset'         => 'danger',
    'HRGA'          => 'dark',
    'Tax'           => 'secondary',
];
function moduleColor($mod, $map) { return $map[$mod] ?? 'secondary'; }
?>

<div class="content-wrapper" style="min-height:626.4px">

  <!-- ── PAGE HEADER ─────────────────────────────────────── -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        <i class="fas fa-cogs me-2 text-primary"></i>
        Journal Engine Configuration
        <button type="button" class="btn btn-tool"
                data-bs-toggle="modal" data-bs-target="#modalBantuan"
                title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Konfigurasi aturan jurnal otomatis per business event.
        Mapping COA per role menentukan akun yang digunakan saat jurnal dibuat.
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- ── KPI RINGKAS ────────────────────────────────── -->
      <div class="row mb-3">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?= $totalEvents ?></h3>
              <p>Total Business Event</p>
            </div>
            <div class="icon"><i class="fas fa-calendar-check"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $totalActive ?></h3>
              <p>Rule Aktif</p>
            </div>
            <div class="icon"><i class="fas fa-check-circle"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $totalAutoPost ?></h3>
              <p>Auto Post</p>
            </div>
            <div class="icon"><i class="fas fa-bolt"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box <?= $totalNoMapping > 0 ? 'bg-warning' : 'bg-secondary' ?>">
            <div class="inner">
              <h3><?= $totalNoMapping ?></h3>
              <p>Event Tanpa Rule</p>
            </div>
            <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
          </div>
        </div>

      </div>

      <!-- ── CARD: FILTER & TOOLBAR ─────────────────────── -->
      <div class="card">
        <div class="card-body py-2">
          <div class="row align-items-center g-2">
            <div class="col-md-4">
              <input type="text" id="searchInput"
                     class="form-control form-control-sm"
                     placeholder="Cari rule code, event name, module...">
            </div>
            <div class="col-md-3">
              <select id="filterModule" class="form-select form-select-sm">
                <option value="">— Semua Module —</option>
                <?php
                $modules = array_unique(array_column($listData, 'module_name'));
                sort($modules);
                foreach ($modules as $m):
                ?>
                <option value="<?= htmlspecialchars($m) ?>">
                  <?= htmlspecialchars($m) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-2">
              <select id="filterStatus" class="form-select form-select-sm">
                <option value="">— Semua Status —</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
              </select>
            </div>
            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-secondary btn-sm"
                      onclick="resetFilter()">
                <i class="fas fa-times me-1"></i> Reset Filter
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- ── CARD: TABEL ─────────────────────────────────── -->
      <div class="card card-outline card-primary">

        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-list me-1"></i>
            Business Event &amp; Accounting Rule
          </h3>
          <div class="card-tools">
            <span class="badge bg-primary" id="rowCount">
              <?= $totalEvents ?> records
            </span>
          </div>
        </div>

        <div class="card-body p-0 table-responsive">
          <table class="table table-bordered table-hover table-sm mb-0"
                 id="tabelRules">

            <thead class="table-dark">
              <tr>
                <th style="width:40px">#</th>
                <th style="width:80px">Module</th>
                <th style="width:180px">Business Event</th>
                <th style="width:160px">Rule Code</th>
                <th>Rule Name</th>
                <th style="width:90px">Source Table</th>
                <th style="width:60px" class="text-center">Lines</th>
                <th style="width:75px" class="text-center">Auto Post</th>
                <th style="width:70px" class="text-center">Status</th>
                <th style="width:55px" class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($listData as $i => $row): ?>
              <tr class="rule-row"
                  data-search="<?= strtolower(
                      ($row['rule_code']    ?? '') . ' ' .
                      ($row['event_name']   ?? '') . ' ' .
                      ($row['rule_name']    ?? '') . ' ' .
                      ($row['module_name']  ?? '')
                  ) ?>"
                  data-module="<?= htmlspecialchars($row['module_name'] ?? '') ?>"
                  data-active="<?= $row['rule_active'] ?? '0' ?>">

                <td class="text-muted"><?= $i + 1 ?></td>

                <!-- Module badge -->
                <td>
                  <span class="badge bg-<?= moduleColor($row['module_name'], $moduleColor) ?>">
                    <?= htmlspecialchars($row['module_name'] ?? '—') ?>
                  </span>
                </td>

                <!-- Business Event -->
                <td>
                  <div class="fw-semibold" style="font-size:12px">
                    <?= htmlspecialchars($row['event_name'] ?? '—') ?>
                  </div>
                  <small class="text-muted" style="font-size:10px">
                    <?= htmlspecialchars($row['event_code'] ?? '') ?>
                  </small>
                </td>

                <!-- Rule Code -->
                <td>
                  <?php if ($row['rule_code']): ?>
                  <code style="font-size:11px">
                    <?= htmlspecialchars($row['rule_code']) ?>
                  </code>
                  <?php else: ?>
                  <span class="text-muted">—</span>
                  <?php endif; ?>
                </td>

                <!-- Rule Name -->
                <td>
                  <div style="font-size:12px">
                    <?= htmlspecialchars($row['rule_name'] ?? '—') ?>
                  </div>
                  <?php if ($row['rule_desc']): ?>
                  <small class="text-muted" style="font-size:10px">
                    <?= htmlspecialchars($row['rule_desc']) ?>
                  </small>
                  <?php endif; ?>
                </td>

                <!-- Source Table -->
                <td>
                  <small class="text-muted font-monospace" style="font-size:10px">
                    <?= htmlspecialchars($row['source_table'] ?? '—') ?>
                  </small>
                </td>

                <!-- Lines count -->
                <td class="text-center">
                  <?php if ($row['total_lines'] > 0): ?>
                  <span class="badge bg-secondary">
                    <?= $row['total_lines'] ?> lines
                  </span>
                  <?php else: ?>
                  <span class="text-muted">—</span>
                  <?php endif; ?>
                </td>

                <!-- Auto Post -->
                <td class="text-center">
                  <?php if ($row['auto_post'] == 1): ?>
                  <span class="badge bg-info">
                    <i class="fas fa-bolt me-1"></i>Auto
                  </span>
                  <?php else: ?>
                  <span class="badge bg-light text-dark">Manual</span>
                  <?php endif; ?>
                </td>

                <!-- Status -->
                <td class="text-center">
                  <?php if ($row['rule_active'] == 1): ?>
                  <span class="badge bg-success">Aktif</span>
                  <?php else: ?>
                  <span class="badge bg-danger">Nonaktif</span>
                  <?php endif; ?>
                </td>

                <!-- Aksi -->
                <td class="text-center">
                  <?php if ($row['rule_id']): ?>
                  <button type="button"
                          class="btn btn-sm btn-outline-primary btn-config"
                          data-rule-id="<?= $row['rule_id'] ?>"
                          data-rule-name="<?= htmlspecialchars($row['rule_name']) ?>"
                          title="Konfigurasi COA Mapping">
                    <i class="fas fa-cogs"></i>
                  </button>
                  <?php else: ?>
                  <button type="button"
                          class="btn btn-sm btn-outline-secondary"
                          disabled title="Belum ada rule">
                    <i class="fas fa-minus"></i>
                  </button>
                  <?php endif; ?>
                </td>

              </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>

        <div class="card-footer py-2">
          <small class="text-muted">
            <i class="fas fa-info-circle me-1"></i>
            Klik ikon <i class="fas fa-cogs text-primary"></i> untuk mengatur mapping COA per rule.
            Perubahan mapping berlaku untuk semua transaksi berikutnya.
          </small>
        </div>

      </div>

    </div>
  </section>
</div>

<?php include('4footer.php'); ?>

<!-- ══════════════════════════════════════════════════════════
     MODAL: KONFIGURASI COA MAPPING
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalConfig" tabindex="-1"
     data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          <i class="fas fa-cogs me-2"></i>
          <span id="modalConfigTitle">Konfigurasi Rule</span>
        </h5>
        <button type="button" class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="modalConfigBody">
        <!-- Diisi via JS -->
        <div class="text-center py-5">
          <div class="spinner-border text-primary"></div>
          <div class="mt-2 text-muted">Memuat data rule...</div>
        </div>
      </div>

      <div class="modal-footer">
        <small class="text-muted me-auto">
          <i class="fas fa-info-circle text-warning me-1"></i>
          Perubahan mapping COA langsung tersimpan dan berlaku untuk semua
          transaksi berikutnya yang menggunakan rule ini.
        </small>
        <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: BANTUAN
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Bantuan — Journal Engine Configuration
        </h5>
        <button type="button" class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini mengatur <strong>aturan jurnal otomatis</strong> yang dijalankan
          saat sebuah business event terjadi (misal: invoice dibuat, pembayaran diterima, dll).
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Konsep Journal Engine</div>
          <div class="card-body p-0">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-light">
                <tr><th>Komponen</th><th>Penjelasan</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Business Event</strong></td>
                  <td>Kejadian bisnis yang memicu jurnal (Sales Invoice, Payroll, dll)</td>
                </tr>
                <tr>
                  <td><strong>Accounting Rule</strong></td>
                  <td>Template jurnal untuk setiap event (baris debit/kredit)</td>
                </tr>
                <tr>
                  <td><strong>Account Role</strong></td>
                  <td>Nama peran akun abstrak (AR, AP, CASH, INVENTORY, dll)</td>
                </tr>
                <tr>
                  <td><strong>COA Mapping</strong></td>
                  <td>Menghubungkan Account Role ke akun COA nyata</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Alur Jurnal Otomatis</div>
          <div class="card-body">
            <ol class="mb-0">
              <li>Event terjadi (misal: <em>Sales Invoice Posted</em>)</li>
              <li>Engine cari rule → <code>RULE_SALES_INVOICE</code></li>
              <li>Baca detail lines (DEBIT: AR, CREDIT: SALES_REVENUE, dll)</li>
              <li>Resolve role ke COA via <code>account_role_mapping</code></li>
              <li>Buat jurnal dengan akun COA yang sudah di-mapping</li>
            </ol>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light fw-bold">Edit Mapping COA</div>
          <div class="card-body">
            <ul class="mb-0">
              <li>Klik ikon <i class="fas fa-cogs text-primary"></i> di kolom Aksi.</li>
              <li>Modal menampilkan semua baris jurnal rule tersebut.</li>
              <li>Setiap baris memiliki dropdown untuk memilih COA dari master COA.</li>
              <li>Klik <strong>Simpan</strong> di baris yang ingin diubah — perubahan langsung
                  tersimpan ke <code>account_role_mapping</code>.</li>
              <li>Perubahan berlaku untuk <strong>semua transaksi berikutnya</strong>
                  yang menggunakan rule ini.</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>

<script>
// ══════════════════════════════════════════════════════════════
// FILTER & SEARCH
// ══════════════════════════════════════════════════════════════
function applyFilter() {
    var q      = $('#searchInput').val().toLowerCase();
    var module = $('#filterModule').val();
    var status = $('#filterStatus').val();
    var count  = 0;

    $('.rule-row').each(function() {
        var matchQ  = !q      || $(this).data('search').includes(q);
        var matchM  = !module || $(this).data('module') === module;
        var matchS  = status  === '' || String($(this).data('active')) === status;
        var show    = matchQ && matchM && matchS;
        $(this).toggle(show);
        if (show) count++;
    });

    $('#rowCount').text(count + ' records');
}

function resetFilter() {
    $('#searchInput').val('');
    $('#filterModule').val('');
    $('#filterStatus').val('');
    applyFilter();
}

$('#searchInput, #filterModule, #filterStatus').on('input change', applyFilter);

// ══════════════════════════════════════════════════════════════
// BUKA MODAL KONFIGURASI
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-config', function() {

    var ruleId   = $(this).data('rule-id');
    var ruleName = $(this).data('rule-name');

    // Set judul modal
    $('#modalConfigTitle').text('Konfigurasi: ' + ruleName);

    // Reset body ke loading
    $('#modalConfigBody').html(`
        <div class="text-center py-5">
            <div class="spinner-border text-primary"></div>
            <div class="mt-2 text-muted">Memuat data rule...</div>
        </div>
    `);

    // Buka modal
    var modal = new bootstrap.Modal(document.getElementById('modalConfig'));
    modal.show();

    // Fetch data rule
    fetch('ajax_journal_engine.php', {
        method  : 'POST',
        headers : {
            'Content-Type'     : 'application/json',
            'X-Requested-With' : 'XMLHttpRequest',
        },
        body: JSON.stringify({
            action  : 'get_rule_detail',
            rule_id : ruleId,
        })
    })
    .then(r => r.json())
    .then(res => {
        if (res.status !== 'ok') {
            $('#modalConfigBody').html(
                '<div class="alert alert-danger m-3">' + res.message + '</div>'
            );
            return;
        }
        renderModalBody(res);
    })
    .catch(err => {
        $('#modalConfigBody').html(
            '<div class="alert alert-danger m-3">Request gagal: ' + err + '</div>'
        );
    });
});

// ══════════════════════════════════════════════════════════════
// RENDER ISI MODAL
// ══════════════════════════════════════════════════════════════
function renderModalBody(res) {

    var rule  = res.rule;
    var lines = res.lines;
    var coa   = res.coa;

    // Build COA option list sekali pakai
    var coaOpts = '<option value="">— Pilih COA —</option>';
    coa.forEach(function(c) {
        coaOpts += `<option value="${c.id}"
            data-tipe="${c.tipe_akun}"
            data-saldo="${c.saldo_normal}">
            ${c.kode_akun} — ${c.nama_akun} (${c.saldo_normal})
        </option>`;
    });

    // ── Info Header Rule ──────────────────────────────────
    var headerHtml = `
    <div class="row g-3 mb-3">

        <div class="col-md-3">
            <div class="info-box mb-0 shadow-none border">
                <span class="info-box-icon bg-primary">
                    <i class="fas fa-calendar-check"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Business Event</span>
                    <span class="info-box-number" style="font-size:13px">
                        ${escHtml(rule.event_name)}
                    </span>
                    <span class="progress-description text-muted" style="font-size:10px">
                        ${escHtml(rule.event_code)}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box mb-0 shadow-none border">
                <span class="info-box-icon bg-success">
                    <i class="fas fa-file-alt"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Rule Code</span>
                    <span class="info-box-number" style="font-size:12px;font-family:monospace">
                        ${escHtml(rule.rule_code)}
                    </span>
                    <span class="progress-description text-muted" style="font-size:10px">
                        Module: ${escHtml(rule.module_name)}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box mb-0 shadow-none border">
                <span class="info-box-icon bg-${rule.auto_post == 1 ? 'info' : 'secondary'}">
                    <i class="fas fa-${rule.auto_post == 1 ? 'bolt' : 'hand-paper'}"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Posting Mode</span>
                    <span class="info-box-number" style="font-size:13px">
                        ${rule.auto_post == 1 ? 'Auto Post' : 'Manual Post'}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box mb-0 shadow-none border">
                <span class="info-box-icon bg-${rule.is_active == 1 ? 'success' : 'danger'}">
                    <i class="fas fa-${rule.is_active == 1 ? 'check-circle' : 'times-circle'}"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Status Rule</span>
                    <span class="info-box-number" style="font-size:13px">
                        ${rule.is_active == 1 ? 'Aktif' : 'Nonaktif'}
                    </span>
                    <span class="progress-description text-muted" style="font-size:10px">
                        Source: ${escHtml(rule.source_table)}
                    </span>
                </div>
            </div>
        </div>

    </div>`;

    // ── Tabel Journal Lines ───────────────────────────────
    var tableHtml = `
    <div class="card">
        <div class="card-header bg-light fw-bold d-flex justify-content-between align-items-center">
            <span>
                <i class="fas fa-table me-1"></i>
                Journal Lines — COA Mapping
            </span>
            <small class="text-muted fw-normal">
                Pilih COA dari dropdown lalu klik <strong>Simpan</strong> di baris tersebut
            </small>
        </div>
        <div class="card-body p-0">
        <div class="table-responsive">
        <table class="table table-bordered table-sm mb-0 align-middle">
            <thead class="table-dark">
                <tr>
                    <th style="width:40px" class="text-center">Line</th>
                    <th style="width:70px" class="text-center">Position</th>
                    <th style="width:140px">Account Role</th>
                    <th style="width:130px">Amount Source</th>
                    <th>Keterangan Line</th>
                    <th style="width:280px">
                        COA Saat Ini
                        <i class="fas fa-arrow-right mx-1 text-warning"></i>
                        COA Baru (edit)
                    </th>
                    <th style="width:80px" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>`;

    if (lines.length === 0) {
        tableHtml += `
            <tr>
                <td colspan="7" class="text-center text-muted py-4">
                    <i class="fas fa-inbox fa-2x d-block mb-2"></i>
                    Belum ada detail line untuk rule ini.
                </td>
            </tr>`;
    } else {
        lines.forEach(function(ln) {

            var isDebit  = ln.entry_position === 'DEBIT';
            var posBadge = isDebit
                ? '<span class="badge bg-success"><i class="fas fa-arrow-down me-1"></i>DEBIT</span>'
                : '<span class="badge bg-danger"><i class="fas fa-arrow-up me-1"></i>CREDIT</span>';

            // COA sekarang
            var coaNow = ln.kode_akun
                ? `<div style="font-size:11px">
                       <span class="text-muted">${escHtml(ln.kode_akun)}</span>
                       — ${escHtml(ln.nama_akun)}
                   </div>
                   <small class="text-muted">
                       ${saldoNormalBadge(ln.saldo_normal)}
                       <span class="ms-1">${escHtml(ln.tipe_akun || '')}</span>
                   </small>`
                : '<span class="text-danger"><i class="fas fa-exclamation-triangle me-1"></i>Belum mapping</span>';

            // Build option dengan selected
            var opts = '<option value="">— Pilih COA —</option>';
            res.coa.forEach(function(c) {
                var sel = (String(c.id) === String(ln.coa_id)) ? 'selected' : '';
                opts += `<option value="${c.id}"
                    data-tipe="${c.tipe_akun}"
                    data-saldo="${c.saldo_normal}"
                    ${sel}>
                    ${c.kode_akun} — ${c.nama_akun} (${c.saldo_normal})
                </option>`;
            });

            var mappingId = ln.mapping_id || 0;

            tableHtml += `
            <tr id="line-row-${ln.detail_id}">

                <td class="text-center fw-bold text-muted">
                    ${ln.line_no}
                </td>

                <td class="text-center">
                    ${posBadge}
                </td>

                <td>
                    <code style="font-size:11px">${escHtml(ln.account_role_code)}</code>
                </td>

                <td>
                    <span class="badge bg-light text-dark border"
                          style="font-family:monospace;font-size:10px">
                        ${escHtml(ln.amount_source)}
                    </span>
                </td>

                <td style="font-size:12px">
                    ${escHtml(ln.line_desc || '—')}
                </td>

                <td>
                    <!-- COA sekarang -->
                    <div id="coa-now-${ln.detail_id}" class="mb-1">
                        ${coaNow}
                    </div>
                    <!-- Dropdown edit -->
                    <select class="form-select form-select-sm select-coa-new"
                            id="select-coa-${ln.detail_id}"
                            data-detail-id="${ln.detail_id}"
                            data-mapping-id="${mappingId}"
                            data-role="${escHtml(ln.account_role_code)}">
                        ${opts}
                    </select>
                    <!-- Info saldo normal pilihan baru -->
                    <div id="coa-info-${ln.detail_id}" class="mt-1 d-none">
                        <small class="text-muted">
                            Saldo Normal:
                            <span class="badge-saldo-info"></span>
                        </small>
                    </div>
                </td>

                <td class="text-center">
                    <button type="button"
                            class="btn btn-sm btn-success btn-save-mapping"
                            data-detail-id="${ln.detail_id}"
                            data-mapping-id="${mappingId}"
                            data-role="${escHtml(ln.account_role_code)}"
                            title="Simpan perubahan COA untuk role ini">
                        <i class="fas fa-save"></i>
                        <span class="btn-label ms-1" style="font-size:10px">Simpan</span>
                    </button>
                    <div class="save-spinner spinner-border spinner-border-sm
                                text-success mt-1 d-none"
                         id="spinner-${ln.detail_id}">
                    </div>
                </td>

            </tr>`;
        });
    }

    tableHtml += `
            </tbody>
        </table>
        </div>
        </div>
    </div>`;

    // Render ke modal
    $('#modalConfigBody').html(headerHtml + tableHtml);
}

// ══════════════════════════════════════════════════════════════
// TAMPILKAN INFO SALDO NORMAL SAAT COA DROPDOWN BERUBAH
// ══════════════════════════════════════════════════════════════
$(document).on('change', '.select-coa-new', function() {

    var detailId  = $(this).data('detail-id');
    var $opt      = $(this).find('option:selected');
    var saldo     = $opt.data('saldo') || '';
    var $infoBox  = $('#coa-info-' + detailId);

    if (!saldo) {
        $infoBox.addClass('d-none');
        return;
    }

    var badgeClass = saldo === 'CREDIT' ? 'bg-danger' : 'bg-success';
    var icon       = saldo === 'CREDIT' ? 'fa-arrow-up' : 'fa-arrow-down';

    $infoBox.removeClass('d-none')
            .find('.badge-saldo-info')
            .html(`<span class="badge ${badgeClass}">
                       <i class="fas ${icon} me-1"></i>${saldo}
                   </span>`);
});

// ══════════════════════════════════════════════════════════════
// SIMPAN PERUBAHAN COA MAPPING
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-save-mapping', function() {

    var detailId  = $(this).data('detail-id');
    var mappingId = $(this).data('mapping-id');
    var role      = $(this).data('role');
    var $btn      = $(this);
    var $spinner  = $('#spinner-' + detailId);
    var $select   = $('#select-coa-' + detailId);
    var newCoaId  = $select.val();
    var $opt      = $select.find('option:selected');

    if (!newCoaId) {
        showToast('warning', 'Pilih COA terlebih dahulu.');
        return;
    }

    // Disable tombol, tampilkan spinner
    $btn.prop('disabled', true);
    $spinner.removeClass('d-none');

    fetch('ajax_journal_engine.php', {
        method  : 'POST',
        headers : {
            'Content-Type'     : 'application/json',
            'X-Requested-With' : 'XMLHttpRequest',
        },
        body: JSON.stringify({
            action     : 'update_role_mapping',
            mapping_id : parseInt(mappingId),
            coa_id     : parseInt(newCoaId),
        })
    })
    .then(r => r.json())
    .then(res => {

        $spinner.addClass('d-none');
        $btn.prop('disabled', false);

        if (res.status === 'ok') {

            // Update tampilan "COA sekarang"
            var saldo    = $opt.data('saldo') || '';
            var tipe     = $opt.data('tipe')  || '';
            var badgeHtml = saldo
                ? saldoNormalBadge(saldo)
                : '';

            $('#coa-now-' + detailId).html(`
                <div style="font-size:11px">
                    <span class="text-muted">${escHtml(res.kode_akun)}</span>
                    — ${escHtml(res.nama_akun)}
                </div>
                <small class="text-muted">
                    ${badgeHtml}
                    <span class="ms-1">${escHtml(tipe)}</span>
                </small>
            `);

            // Flash row hijau
            $('#line-row-' + detailId)
                .addClass('table-success')
                .delay(1500)
                .queue(function(next) {
                    $(this).removeClass('table-success');
                    next();
                });

            showToast('success', 'Mapping COA berhasil diupdate untuk role <strong>' + role + '</strong>.');

        } else {
            showToast('danger', 'Gagal: ' + res.message);
        }
    })
    .catch(err => {
        $spinner.addClass('d-none');
        $btn.prop('disabled', false);
        showToast('danger', 'Request error: ' + err);
    });
});

// ══════════════════════════════════════════════════════════════
// HELPER: Toast notification (AdminLTE style / fallback)
// ══════════════════════════════════════════════════════════════
function showToast(type, msg) {
    // Coba pakai toastr jika tersedia, fallback ke alert
    if (typeof toastr !== 'undefined') {
        var t = type === 'success' ? 'success'
              : type === 'danger'  ? 'error'
              : 'warning';
        toastr[t](msg);
    } else {
        // Fallback: floating alert di atas tabel
        var alertClass = type === 'success' ? 'alert-success'
                       : type === 'danger'  ? 'alert-danger'
                       : 'alert-warning';

        var $toast = $(`
            <div class="alert ${alertClass} alert-dismissible fade show
                         position-fixed shadow"
                 style="top:70px;right:20px;z-index:9999;min-width:280px">
                ${msg}
                <button type="button" class="btn-close"
                        data-bs-dismiss="alert"></button>
            </div>
        `).appendTo('body');

        setTimeout(function() { $toast.alert('close'); }, 3000);
    }
}

// ══════════════════════════════════════════════════════════════
// HELPER: Escape HTML
// ══════════════════════════════════════════════════════════════
function escHtml(str) {
    if (!str) return '';
    return String(str)
        .replace(/&/g,'&amp;')
        .replace(/</g,'&lt;')
        .replace(/>/g,'&gt;')
        .replace(/"/g,'&quot;');
}

// ══════════════════════════════════════════════════════════════
// HELPER: Badge saldo normal
// ══════════════════════════════════════════════════════════════
function saldoNormalBadge(saldo) {
    if (!saldo) return '';
    var c = saldo === 'CREDIT' ? 'bg-danger'  : 'bg-success';
    var i = saldo === 'CREDIT' ? 'fa-arrow-up': 'fa-arrow-down';
    return `<span class="badge ${c}"><i class="fas ${i} me-1"></i>${saldo}</span>`;
}
</script>
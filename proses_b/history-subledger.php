<?php
$page = 'finance-subledger-history';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>
<?php

/* ============================================================
   KONFIGURASI MODE
   Semua mode didefinisikan di sini.
   entity_type harus sesuai dengan nilai subledger_type di tabel coa.
   has_active_col: apakah tabel entitas punya kolom is_active
   coa_filter: nilai subledger_type di coa yang masuk mode ini
               (bisa lebih dari satu, array)
============================================================ */
$modeConfig = [

    'ar' => [
        'label'          => 'Account Receivable (AR)',
        'entity_type'    => 'customer',
        'entity_table'   => 'customers',
        'entity_code'    => 'customer_code',
        'entity_name'    => 'customer_name',
        'has_active_col' => true,
        'coa_filter'     => ['customer'],
        'icon'           => 'fas fa-file-invoice-dollar',
        'color'          => 'info',
        'saldo_label'    => 'Piutang',
    ],

    'ap' => [
        'label'          => 'Account Payable (AP)',
        'entity_type'    => 'vendor',
        'entity_table'   => 'vendors',
        'entity_code'    => 'vendor_code',
        'entity_name'    => 'vendor_name',
        'has_active_col' => true,
        'coa_filter'     => ['vendor'],
        'icon'           => 'fas fa-file-invoice',
        'color'          => 'warning',
        'saldo_label'    => 'Hutang',
    ],

    'cash' => [
        'label'          => 'Cash & Bank',
        'entity_type'    => 'cash',
        'entity_table'   => 'cash',
        'entity_code'    => 'code',
        'entity_name'    => 'description',
        'has_active_col' => false,
        'coa_filter'     => ['cash', 'bank'],
        'icon'           => 'fas fa-money-bill-wave',
        'color'          => 'success',
        'saldo_label'    => 'Saldo Kas/Bank',
    ],

    'employee' => [
        'label'          => 'Employee Advance',
        'entity_type'    => 'employee',
        'entity_table'   => 'employees',
        'entity_code'    => 'employee_code',
        'entity_name'    => 'employee_name',
        'has_active_col' => true,
        'coa_filter'     => ['employee'],
        'icon'           => 'fas fa-user-tie',
        'color'          => 'primary',
        'saldo_label'    => 'Uang Muka',
    ],

    'inventory' => [
        'label'          => 'Inventory Item',
        'entity_type'    => 'inventory',
        'entity_table'   => 'products',
        'entity_code'    => 'product_code',
        'entity_name'    => 'product_name',
        'has_active_col' => true,
        'coa_filter'     => ['inventory'],
        'icon'           => 'fas fa-boxes',
        'color'          => 'secondary',
        'saldo_label'    => 'Nilai Persediaan',
    ],

    'fixed_asset' => [
        'label'          => 'Fixed Asset',
        'entity_type'    => 'fixed_asset',
        'entity_table'   => 'fixed_assets',
        'entity_code'    => 'asset_code',
        'entity_name'    => 'asset_name',
        'has_active_col' => true,
        'coa_filter'     => ['fixed_asset', 'vehicle', 'asset'],
        'icon'           => 'fas fa-building',
        'color'          => 'danger',
        'saldo_label'    => 'Nilai Aset',
    ],

    'investor' => [
        'label'          => 'Investor / Modal',
        'entity_type'    => 'investor',
        'entity_table'   => 'investors',
        'entity_code'    => 'investor_code',
        'entity_name'    => 'investor_name',
        'has_active_col' => true,
        'coa_filter'     => ['investor'],
        'icon'           => 'fas fa-chart-pie',
        'color'          => 'dark',
        'saldo_label'    => 'Modal',
    ],

];
/* ============================================================
   FILTER DARI GET
============================================================ */
$mode     = $_GET['mode']         ?? 'ar';
$entityId = $_GET['entity_id']    ?? '';
$coaId    = $_GET['coa_id']       ?? '';
$begin    = $_GET['tanggal_awal'] ?? date('Y-m-01');
$end      = $_GET['tanggal_akhir']?? date('Y-m-t');

// Validasi mode — fallback ke 'ar' jika tidak dikenal
if (!array_key_exists($mode, $modeConfig)) {
    $mode = 'ar';
}

$cfg         = $modeConfig[$mode];
$entityType  = $cfg['entity_type'];
$entityTable = $cfg['entity_table'];
$entityCode  = $cfg['entity_code'];
$entityName  = $cfg['entity_name'];

/* ============================================================
   FORMAT AKUNTANSI
============================================================ */
function format_akuntansi($angka) {
    if ($angka < 0) {
        return '<span class="text-danger">(' . number_format(abs($angka), 0, ',', '.') . ')</span>';
    }
    if ($angka == 0) {
        return '<span class="text-muted">—</span>';
    }
    return number_format($angka, 0, ',', '.');
}

function format_plain($angka) {
    if ($angka < 0) return '(' . number_format(abs($angka), 0, ',', '.') . ')';
    return number_format($angka, 0, ',', '.');
}

/* ============================================================
   ENTITY LIST untuk modal filter
============================================================ */
$entityList = [];
$whereActive = $cfg['has_active_col'] ? "WHERE is_active = 1" : "";

$qEntity = mysqli_query($conn, "
    SELECT id, `{$entityCode}` AS kode, `{$entityName}` AS nama
    FROM `{$entityTable}`
    {$whereActive}
    ORDER BY `{$entityName}` ASC
");

while ($r = mysqli_fetch_assoc($qEntity)) {
    $entityList[] = $r;
}

/* ============================================================
   COA LIST untuk modal filter (filter berdasarkan mode)
============================================================ */
$coaTypeList = [];
$coaFilterIn = implode("','", array_map(fn($v) => mysqli_real_escape_string($conn, $v), $cfg['coa_filter']));

$qCoa = mysqli_query($conn, "
    SELECT id, kode_akun, nama_akun, saldo_normal, subledger_type
    FROM coa
    WHERE subledger_type IN ('{$coaFilterIn}')
      AND status = 'ACTIVE'
    ORDER BY kode_akun ASC
");

while ($r = mysqli_fetch_assoc($qCoa)) {
    $coaTypeList[] = $r;
}
/* ============================================================
   COA TERPILIH — ambil saldo_normal-nya
============================================================ */
$coaTerpilih    = null;   // array row coa
$saldoNormal    = '';     // 'DEBIT' atau 'CREDIT'
$coaNamaTerpilih = '— Pilih COA di filter —';

if ($coaId != '') {
    foreach ($coaTypeList as $c) {
        if ($c['id'] == $coaId) {
            $coaTerpilih     = $c;
            $saldoNormal     = $c['saldo_normal'];
            $coaNamaTerpilih = $c['kode_akun'] . ' — ' . $c['nama_akun'];
            break;
        }
    }
}
/* ============================================================
   LOGIKA RUNNING BALANCE berdasarkan saldo_normal COA
   DEBIT  → saldo += debit  − credit
   CREDIT → saldo += credit − debit
============================================================ */
function hitungMutasi($debit, $credit, $saldoNormal) {
    if ($saldoNormal === 'CREDIT') {
        return (float)$credit - (float)$debit;
    }
    // default DEBIT
    return (float)$debit - (float)$credit;
}

/* ============================================================
   VALIDASI: data hanya ditampilkan jika COA & entity sudah dipilih
============================================================ */
$siapTampil = ($coaId != '' && $entityId != '');
/* ============================================================
   SALDO AWAL (sebelum $begin)
============================================================ */
$saldoAwal = 0;

if ($entityId != '') {

    $escEntityId   = mysqli_real_escape_string($conn, $entityId);
    $escEntityType = mysqli_real_escape_string($conn, $entityType);
    $escBegin      = mysqli_real_escape_string($conn, $begin);


    // $coaWhere = '';
    // if ($coaId != '') {
    //     $escCoaId = (int)$coaId;
    //     $coaWhere = "AND jd.coa_id = {$escCoaId}";
    // }

    // $qSaldo = mysqli_query($conn, "
    //     SELECT
    //         COALESCE(SUM(jd.debit),  0) AS total_debit,
    //         COALESCE(SUM(jd.credit), 0) AS total_credit
    //     FROM journal_details jd
    //     JOIN journal_headers jh ON jh.id = jd.journal_header_id
    //     WHERE jd.entity_type = '{$escEntityType}'
    //       AND jd.entity_id   = '{$escEntityId}'
    //       AND DATE(jh.transaction_date) < '{$escBegin}'
    //       {$coaWhere}
    // ");

    // $saldoData = mysqli_fetch_assoc($qSaldo);
    // $saldoAwal = (float)$saldoData['total_debit'] - (float)$saldoData['total_credit'];
    $escCoaId      = (int)$coaId;
    $qSaldo = mysqli_query($conn, "
        SELECT
            COALESCE(SUM(jd.debit),  0) AS total_debit,
            COALESCE(SUM(jd.credit), 0) AS total_credit
        FROM journal_details jd
        JOIN journal_headers jh ON jh.id = jd.journal_header_id
        WHERE jd.entity_type = '{$escEntityType}'
          AND jd.entity_id   = '{$escEntityId}'
          AND jd.coa_id      = {$escCoaId}
          AND DATE(jh.transaction_date) < '{$escBegin}'
    ");

    $saldoData = mysqli_fetch_assoc($qSaldo);
    $saldoAwal = hitungMutasi(
        $saldoData['total_debit'],
        $saldoData['total_credit'],
        $saldoNormal
    );
}

/* ============================================================
   TRANSACTION HISTORY
============================================================ */
// $list = [];

// if ($entityId != '') {

//     $escEnd = mysqli_real_escape_string($conn, $end);

//     $sql = "
//         SELECT
//             jd.id,
//             jh.transaction_date,
//             jd.line_memo,
//             jd.debit,
//             jd.credit,
//             c.kode_akun,
//             c.nama_akun,
//             jh.journal_no,
//             jh.transaction_type,
//             jh.reference_no
//         FROM journal_details jd
//         JOIN coa c            ON c.id  = jd.coa_id
//         JOIN journal_headers jh ON jh.id = jd.journal_header_id
//         WHERE jd.entity_type = '{$escEntityType}'
//           AND jd.entity_id   = '{$escEntityId}'
//           AND DATE(jh.transaction_date) BETWEEN '{$escBegin}' AND '{$escEnd}'
//           {$coaWhere}
//         ORDER BY jh.transaction_date ASC, jd.id ASC
//     ";

//     $qList = mysqli_query($conn, $sql);
//     while ($r = mysqli_fetch_assoc($qList)) {
//         $list[] = $r;
//     }
// }
/* ============================================================
   TRANSACTION HISTORY
============================================================ */
$list = [];

if ($siapTampil) {
    $escEnd = mysqli_real_escape_string($conn, $end);

    $qList = mysqli_query($conn, "
        SELECT
            jd.id,
            jh.transaction_date,
            jd.line_memo,
            jd.debit,
            jd.credit,
            c.kode_akun,
            c.nama_akun,
            c.saldo_normal,
            jh.journal_no,
            jh.transaction_type,
            jh.reference_no
        FROM journal_details jd
        JOIN coa c              ON c.id  = jd.coa_id
        JOIN journal_headers jh ON jh.id = jd.journal_header_id
        WHERE jd.entity_type = '{$escEntityType}'
          AND jd.entity_id   = '{$escEntityId}'
          AND jd.coa_id      = {$escCoaId}
          AND DATE(jh.transaction_date) BETWEEN '{$escBegin}' AND '{$escEnd}'
        ORDER BY jh.transaction_date ASC, jd.id ASC
    ");

    while ($r = mysqli_fetch_assoc($qList)) $list[] = $r;
}

/* ============================================================
   SUMMARY
============================================================ */
// $totalDebit  = array_sum(array_column($list, 'debit'));
// $totalCredit = array_sum(array_column($list, 'credit'));
// $saldoAkhir  = $saldoAwal + $totalDebit - $totalCredit;
/* ============================================================
   SUMMARY
============================================================ */
$totalDebit  = array_sum(array_column($list, 'debit'));
$totalCredit = array_sum(array_column($list, 'credit'));
$totalMutasi = hitungMutasi($totalDebit, $totalCredit, $saldoNormal);
$saldoAkhir  = $saldoAwal + $totalMutasi;

/* ============================================================
   ENTITY TERPILIH (untuk header info)
============================================================ */
$entityNamaTerpilih = '— Pilih entitas di filter —';
if ($entityId != '') {
    foreach ($entityList as $e) {
        if ($e['id'] == $entityId) {
            $entityNamaTerpilih = $e['kode'] . ' — ' . $e['nama'];
            break;
        }
    }
}

/* ============================================================
   COA TERPILIH
============================================================ */
$coaNamaTerpilih = 'Semua Akun';
if ($coaId != '') {
    foreach ($coaTypeList as $c) {
        if ($c['id'] == $coaId) {
            $coaNamaTerpilih = $c['kode_akun'] . ' - ' . $c['nama_akun'] ;
            break;
        }
    }
}

/* ============================================================
   JSON untuk JS (mode config → entity_type per mode)
============================================================ */
$modeEntityTypeJson = [];
foreach ($modeConfig as $k => $v) {
    $modeEntityTypeJson[$k] = $v['entity_type'];
}

/* ============================================================
   Badge saldo normal
============================================================ */
function saldoNormalBadge($sn) {
    if ($sn === 'CREDIT') {
        return '<span class="badge bg-danger ms-1"><i class="fas fa-arrow-up me-1"></i>CREDIT</span>';
    }
    if ($sn === 'DEBIT') {
        return '<span class="badge bg-success ms-1"><i class="fas fa-arrow-down me-1"></i>DEBIT</span>';
    }
    return '';
}
?>



<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Subledger History
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
      Riwayat transaksi detail subledger dengan metode saldo berjalan (balance staffel).
    </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- ========================================================= -->
      <!-- FILTER -->
      <!-- ========================================================= -->

      <div class="card card-outline card-info">

        <div class="card-body">

          <div class="row">
           

            <!-- <div class="col-md-6">
                <b>Mode :</b>
                <span class="badge bg-<?= $cfg['color'] ?> px-3 py-2">
                    <i class="<?= $cfg['icon'] ?> me-1"></i>
                    <?= htmlspecialchars($cfg['label']) ?>
                </span>
            </div>
 <div class="col-md-6">
                <b>Periode :</b>
                <?= $begin ?> - <?= $end ?>
            </div>
            <div class="col-md-6 ">
                <b>COA :</b>
                <?= htmlspecialchars($coaNamaTerpilih) ?>
            </div>
            <div class="col-md-6 ">
                <b>Entitas :</b>
                <?= htmlspecialchars($entityNamaTerpilih) ?>
            </div> -->

<div class="col-md-3">
              <small class="text-muted d-block">Mode</small>
              <span class="badge bg-<?= $cfg['color'] ?> px-3 py-1 fs-6">
                <i class="<?= $cfg['icon'] ?> me-1"></i>
                <?= htmlspecialchars($cfg['label']) ?>
              </span>
            </div>

            <div class="col-md-3">
              <small class="text-muted d-block">COA</small>
              <strong><?= htmlspecialchars($coaNamaTerpilih) ?>
              <?php if ($saldoNormal): ?>
                <?= saldoNormalBadge($saldoNormal) ?>
              <?php endif; ?></strong>
            </div>

            <div class="col-md-3">
              <small class="text-muted d-block">Entitas</small>
              <strong><?= htmlspecialchars($entityNamaTerpilih) ?></strong>
            </div>

            <div class="col-md-3">
              <small class="text-muted d-block">Periode</small>
              <strong><?= $begin ?> &ndash; <?= $end ?></strong>
            </div>
           


          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button type="button" onclick="console.log('klik')" 
        class="btn btn-outline-info btn-sm"
        data-bs-toggle="modal"
        data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

          </div>

        </div>

      </div>

      <!-- ── KPI CARDS ─────────────────────────────────────── -->
      <?php if ($siapTampil): ?>
        <div class="row mb-3">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h4>Rp <?= format_plain($saldoAwal) ?></h4>
              <p>Saldo Awal</p>
            </div>
            <div class="icon"><i class="fas fa-wallet"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Rp <?= format_plain($totalDebit) ?></h4>
              <p>Total Debit Periode</p>
            </div>
            <div class="icon"><i class="fas fa-arrow-down"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h4>Rp <?= format_plain($totalCredit) ?></h4>
              <p>Total Credit Periode</p>
            </div>
            <div class="icon"><i class="fas fa-arrow-up"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-<?= $cfg['color'] ?>">
            <div class="inner">
              <h4>Rp <?= format_plain($saldoAkhir) ?></h4>
              <p>Saldo Akhir</p>
            </div>
            <div class="icon"><i class="fas fa-balance-scale"></i></div>
          </div>
        </div>

      </div>
<?php endif; ?>
      <!-- ========================================================= -->
      <!-- SUB LEDGER -->
      <!-- ========================================================= -->

      <div class="card card-outline card-secondary">

        <div class="card-header ">
          <h3 class="card-title ">
            Subsidiary Ledger
            <?php if ($siapTampil && $saldoNormal): ?>
              <small class="text-muted ms-2" style="font-size:12px">
                Saldo Normal COA:
                <?= saldoNormalBadge($saldoNormal) ?>
                <?php if ($saldoNormal === 'CREDIT'): ?>
                  <span class="text-muted"> — Running Balance = Credit − Debit</span>
                <?php else: ?>
                  <span class="text-muted"> — Running Balance = Debit − Credit</span>
                <?php endif; ?>
              </small>
            <?php endif; ?>
        </h3>
    </div>
   
    <div class="card-body table-responsive p-0">


<table class="table table-bordered table-hover table-sm">
            <thead class="table-dark">
              <tr>
                <th style="width:110px">Tanggal</th>
                <th style="width:130px">No Jurnal</th>
                <th style="width:100px">Referensi</th>
                <th>COA</th>
                <th>Keterangan</th>
                <th class="text-end" style="width:130px">Debit</th>
                <th class="text-end" style="width:130px">Credit</th>
                <th class="text-end" style="width:140px">Saldo Berjalan</th>
              </tr>
            </thead>

            <tbody>


<?php if (!$siapTampil): ?>
              <!-- Belum pilih COA atau entity -->
              <tr>
                <td colspan="8" class="text-center text-muted py-5">
                  <i class="fas fa-filter fa-2x mb-2 d-block"></i>
                  <?php if ($coaId == '' && $entityId == ''): ?>
                    Silakan pilih <strong>COA</strong> dan <strong>Entitas</strong> melalui tombol <strong>Filter</strong>.
                  <?php elseif ($coaId == ''): ?>
                    <span class="text-warning"><i class="fas fa-exclamation-triangle me-1"></i></span>
                    <strong>COA wajib dipilih</strong> untuk menampilkan data. Klik <strong>Filter</strong>.
                  <?php else: ?>
                    Silakan pilih <strong>Entitas</strong> melalui tombol <strong>Filter</strong>.
                  <?php endif; ?>
                </td>
              </tr>

              <?php else: ?>

              <!-- Baris saldo awal -->
              <tr class="">
                <td colspan="7"><b>SALDO AWAL</b> </td>
                <td class="text-end fw-bold">Rp <?= format_plain($saldoAwal) ?></td>
              </tr>

              <?php
              $runningBalance = $saldoAwal;
              if (empty($list)):
              ?>
              <tr>
                <td colspan="8" class="text-center text-muted py-4">
                  <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                  Tidak ada transaksi pada periode <?= $begin ?> s/d <?= $end ?>
                </td>
              </tr>


                          <?php else:
              foreach ($list as $row):

                  // Mutasi per baris sesuai saldo_normal COA baris tersebut
                  $mutasi         = hitungMutasi($row['debit'], $row['credit'], $row['saldo_normal']);
                  $runningBalance += $mutasi;
                  $isNeg          = $runningBalance < 0;

                  // Arah mutasi untuk indikator
                  $mutasiPositif = $mutasi > 0;
                  $rowClass      = $isNeg ? 'table-danger' : '';
              ?>
              <tr class="<?= $rowClass ?>">

                <td class="text-nowrap">
                  <?= date('d-m-Y', strtotime($row['transaction_date'])) ?>
                </td>

                <td>
                  <span class="badge bg-secondary" style="font-family:monospace;font-size:11px">
                    <?= htmlspecialchars($row['journal_no']) ?>
                  </span>
                </td>

                <td>
                  <small><?= htmlspecialchars($row['reference_no'] ?? '—') ?></small>
                </td>

                <td>
                  <small class="text-muted">
                    <?= htmlspecialchars($row['kode_akun']) ?>
                    <span class="text-dark">— <?= htmlspecialchars($row['nama_akun']) ?></span>
                  </small>
                </td>

                <td><?= htmlspecialchars($row['line_memo'] ?? '—') ?></td>

                <td class="text-end  fw-semibold">
                  <?= $row['debit'] > 0 ? number_format($row['debit'], 0, ',', '.') : '<span class="text-muted">—</span>' ?>
                </td>

                <td class="text-end  fw-semibold">
                  <?= $row['credit'] > 0 ? number_format($row['credit'], 0, ',', '.') : '<span class="text-muted">—</span>' ?>
                </td>


<!-- Running Balance -->
                <td class="text-end fw-bold
                    <?= $isNeg ? 'text-danger' : ($mutasiPositif ? 'text-primary' : 'text-dark') ?>">
                  <?= $isNeg
                      ? '(' . number_format(abs($runningBalance), 0, ',', '.') . ')'
                      : number_format($runningBalance, 0, ',', '.') ?>
                  <?php if ($mutasiPositif): ?>
                    <i class="fas fa-caret-up text-success ms-1" style="font-size:10px"></i>
                  <?php elseif ($mutasi < 0): ?>
                    <i class="fas fa-caret-down text-danger ms-1" style="font-size:10px"></i>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; endif; ?>

              <!-- Baris total -->
              <tr class="fw-bold ">
                <td colspan="5"> SALDO PERIODE BERJALAN (<?= $begin ?> s/d <?= $end ?>)</td>
                <td class="text-end "><?= number_format($totalDebit,  0, ',', '.') ?></td>
                <td class="text-end "> <?= number_format($totalCredit, 0, ',', '.') ?></td>
                <td class="text-end <?= $saldoAkhir < 0 ? 'text-danger' : 'text-dark' ?>">
                  <?= number_format($saldoAkhir, 0, ',', '.') ?>
                </td>
              </tr>


<!-- Saldo akhir -->
              <tr class="fw-bold">
                <td colspan="7">
                  <!-- <?= htmlspecialchars($cfg['saldo_label']) ?> AKHIR (<?= $end ?>)
                  <?= saldoNormalBadge($saldoNormal) ?> -->
                  SALDO AKHIR
                </td>
                <td class="text-end fs-6
                    <?= $saldoAkhir < 0 ? 'text-danger' : 'text-primary' ?>">
                  Rp <?= $saldoAkhir < 0
                        ? '(' . number_format(abs($saldoAkhir), 0, ',', '.') . ')'
                        : number_format($saldoAkhir, 0, ',', '.') ?>
                </td>
              </tr>
              <?php endif; ?>

            </tbody>

        </table>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<!-- <div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">
          <i class="fas fa-filter me-1"></i> Filter Subledger
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="" method="GET">
        <div class="modal-body">

          <div class="row g-3">

            <div class="col-md-12">
              <label class="form-label fw-bold">
                <i class="fas fa-layer-group me-1"></i> Mode Subledger
              </label>
              <div class="d-flex flex-wrap gap-2" id="modeRadioGroup">
                <?php foreach ($modeConfig as $mKey => $mVal): ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input mode-radio"
                         type="radio"
                         name="mode"
                         id="mode_<?= $mKey ?>"
                         value="<?= $mKey ?>"
                         <?= $mode === $mKey ? 'checked' : '' ?>>
                  <label class="form-check-label btn btn-sm <?= $mode === $mKey ? 'btn-'.$mVal['color'] : 'btn-outline-'.$mVal['color'] ?>"
                         for="mode_<?= $mKey ?>">
                    <i class="<?= $mVal['icon'] ?> me-1"></i>
                    <?= htmlspecialchars($mVal['label']) ?>
                  </label>
                </div>
                <?php endforeach; ?>
              </div>
            </div>

           
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-tag me-1"></i> Entity Type
                <small class="text-muted fw-normal">(otomatis dari mode)</small>
              </label>
              <input type="text"
                     class="form-control bg-light"
                     id="displayEntityType"
                     value="<?= htmlspecialchars($entityType) ?>"
                     readonly>
              <input type="hidden" name="entity_type_info" id="hiddenEntityType"
                     value="<?= htmlspecialchars($entityType) ?>">
            </div>


            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-book me-1"></i>  COA 
                <small class="text-muted fw-normal">(opsional — kosongkan untuk semua akun)</small>
              </label>
              <select class="form-select" name="coa_id" id="selectCoaId">
                <option value="">— Semua Akun —</option>
                <?php foreach ($coaTypeList as $c): ?>
                <option value="<?= $c['id'] ?>"
                        <?= $coaId == $c['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($c['kode_akun']) ?> - <?= htmlspecialchars($c['nama_akun']) ?>
                  <span class="text-muted">(<?= htmlspecialchars($c['subledger_type']) ?>)</span>
                </option>
                <?php endforeach; ?>
              </select>
              <div id="coaLoadSpinner" class="mt-1 d-none">
                <div class="spinner-border spinner-border-sm text-info"></div>
                <small class="text-muted ms-1">Memuat akun COA...</small>
              </div>
            </div>

        
            <div class="col-md-12">
              <label class="form-label fw-bold">
                <i class="fas fa-address-card me-1"></i> Entity ID
                <span class="text-danger">*</span>
              </label>
              <select class="form-select" name="entity_id" id="selectEntityId" required>
                <option value="">-- Pilih Entitas --</option>
                <?php foreach ($entityList as $e): ?>
                <option value="<?= $e['id'] ?>"
                        <?= $entityId == $e['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($e['kode']) ?> — <?= htmlspecialchars($e['nama']) ?>
                </option>
                <?php endforeach; ?>
              </select>
              <div id="entityLoadSpinner" class="mt-1 d-none">
                <div class="spinner-border spinner-border-sm text-info"></div>
                <small class="text-muted ms-1">Memuat entitas...</small>
              </div>
            </div>

           
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-calendar-alt me-1"></i> Periode Awal
              </label>
              <input type="date" class="form-control"
                     name="tanggal_awal" value="<?= $begin ?>">
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-calendar-check me-1"></i> Periode Akhir
              </label>
              <input type="date" class="form-control"
                     name="tanggal_akhir" value="<?= $end ?>">
            </div>

          </div>

       
          <div class="alert alert-light border mt-3 mb-0 py-2" id="modeInfoBox">
            <small>
              <i class="fas fa-info-circle text-info me-1"></i>
              <span id="modeInfoText">
                Mode <strong><?= htmlspecialchars($cfg['label']) ?></strong>
                menggunakan entity type <code><?= htmlspecialchars($entityType) ?></code>
                dari tabel <code><?= htmlspecialchars($cfg['entity_table']) ?></code>.
              </span>
            </small>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="reset"  class="btn btn-outline-danger btn-sm">
            <i class="fas fa-times me-1"></i> Reset
          </button>
          <button type="submit" class="btn btn-info">
            <i class="fas fa-search me-1"></i> Terapkan Filter
          </button>
        </div>

      </form>
    </div>
  </div>
</div> -->
<!-- ══════════════════════════════════════════════════════════
     MODAL: FILTER
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">
          <i class="fas fa-filter me-1"></i> Filter Subledger
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="" method="GET">
        <div class="modal-body">
          <div class="row g-3">

            <!-- ── Mode ────────────────────────────────────── -->
            <div class="col-md-12">
              <label class="form-label fw-bold">
                <i class="fas fa-layer-group me-1"></i> Mode Subledger
              </label>
              <div class="d-flex flex-wrap gap-2" id="modeRadioGroup">
                <?php foreach ($modeConfig as $mKey => $mVal): ?>
                <div class="form-check form-check-inline mb-0">
                  <input class="form-check-input mode-radio"
                         type="radio" name="mode"
                         id="mode_<?= $mKey ?>"
                         value="<?= $mKey ?>"
                         <?= $mode === $mKey ? 'checked' : '' ?>>
                  <label class="form-check-label btn btn-sm
                         <?= $mode === $mKey ? 'btn-'.$mVal['color'] : 'btn-outline-'.$mVal['color'] ?>"
                         for="mode_<?= $mKey ?>">
                    <i class="<?= $mVal['icon'] ?> me-1"></i>
                    <?= htmlspecialchars($mVal['label']) ?>
                  </label>
                </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- ── Entity Type readonly ─────────────────────── -->
            <div class="col-md-4">
              <label class="form-label fw-bold">
                <i class="fas fa-tag me-1"></i> Entity Type
                <small class="text-muted fw-normal">(otomatis)</small>
              </label>
              <input type="text" class="form-control bg-light"
                     id="displayEntityType"
                     value="<?= htmlspecialchars($entityType) ?>"
                     readonly>
              <input type="hidden" id="hiddenEntityType"
                     value="<?= htmlspecialchars($entityType) ?>">
            </div>

            <!-- ── COA — WAJIB PILIH SATU ───────────────────── -->
            <div class="col-md-8">
              <label class="form-label fw-bold">
                <i class="fas fa-book me-1"></i> COA
                <span class="text-danger">*</span>
                <small class="text-muted fw-normal">(wajib dipilih)</small>
              </label>
              <select class="form-select" name="coa_id" id="selectCoaId" required>
                <option value="">— Pilih COA —</option>
                <?php foreach ($coaTypeList as $c): ?>
                <option value="<?= $c['id'] ?>"
                        data-saldo-normal="<?= $c['saldo_normal'] ?>"
                        <?= $coaId == $c['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($c['kode_akun']) ?>
                  — <?= htmlspecialchars($c['nama_akun']) ?>
                  (<?= htmlspecialchars($c['saldo_normal']) ?>)
                </option>
                <?php endforeach; ?>
              </select>
              <div id="coaLoadSpinner" class="mt-1 d-none">
                <div class="spinner-border spinner-border-sm text-info"></div>
                <small class="text-muted ms-1">Memuat akun COA...</small>
              </div>
              <!-- Info saldo normal COA terpilih -->
              <div id="coaSaldoNormalInfo" class="mt-1
                   <?= $coaTerpilih ? '' : 'd-none' ?>">
                <small>
                  Saldo Normal:
                  <?php if ($coaTerpilih): ?>
                    <?= saldoNormalBadge($saldoNormal) ?>
                    <?php if ($saldoNormal === 'CREDIT'): ?>
                      <span class="text-muted ms-1">Running Balance = Credit − Debit</span>
                    <?php else: ?>
                      <span class="text-muted ms-1">Running Balance = Debit − Credit</span>
                    <?php endif; ?>
                  <?php endif; ?>
                </small>
              </div>
            </div>

            <!-- ── Entitas ───────────────────────────────────── -->
            <div class="col-md-12">
              <label class="form-label fw-bold">
                <i class="fas fa-address-card me-1"></i> Entitas
                <span class="text-danger">*</span>
              </label>
              <select class="form-select" name="entity_id"
                      id="selectEntityId" required>
                <option value="">-- Pilih Entitas --</option>
                <?php foreach ($entityList as $e): ?>
                <option value="<?= $e['id'] ?>"
                        <?= $entityId == $e['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($e['kode']) ?>
                  — <?= htmlspecialchars($e['nama']) ?>
                </option>
                <?php endforeach; ?>
              </select>
              <div id="entityLoadSpinner" class="mt-1 d-none">
                <div class="spinner-border spinner-border-sm text-info"></div>
                <small class="text-muted ms-1">Memuat entitas...</small>
              </div>
            </div>

            <!-- ── Periode ───────────────────────────────────── -->
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-calendar-alt me-1"></i> Periode Awal
              </label>
              <input type="date" class="form-control"
                     name="tanggal_awal" value="<?= $begin ?>">
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fas fa-calendar-check me-1"></i> Periode Akhir
              </label>
              <input type="date" class="form-control"
                     name="tanggal_akhir" value="<?= $end ?>">
            </div>

          </div>

          <!-- Info mode -->
          <div class="alert alert-light border mt-3 mb-0 py-2" id="modeInfoBox">
            <small>
              <i class="fas fa-info-circle text-info me-1"></i>
              <span id="modeInfoText">
                Mode <strong><?= htmlspecialchars($cfg['label']) ?></strong>
                — entity type <code><?= htmlspecialchars($entityType) ?></code>
                dari tabel <code><?= htmlspecialchars($cfg['entity_table']) ?></code>.
              </span>
            </small>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">
            <i class="fas fa-search me-1"></i> Terapkan Filter
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan — Subledger History</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini menampilkan riwayat transaksi detail per entitas subledger menggunakan
          metode <strong>saldo berjalan (balance staffel)</strong>.
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Mode yang Tersedia</div>
          <div class="card-body p-0">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-light">
                <tr><th>Mode</th><th>Keterangan</th><th>Sumber Tabel</th></tr>
              </thead>
              <tbody>
                <?php foreach ($modeConfig as $mKey => $mVal): ?>
                <tr>
                  <td>
                    <span class="badge bg-<?= $mVal['color'] ?>">
                      <i class="<?= $mVal['icon'] ?> me-1"></i><?= $mKey ?>
                    </span>
                  </td>
                  <td><?= htmlspecialchars($mVal['label']) ?></td>
                  <td><code><?= htmlspecialchars($mVal['entity_table']) ?></code></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Cara Penggunaan</div>
          <div class="card-body">
            <ol class="mb-0">
              <li>Klik <strong>Filter</strong> di toolbar.</li>
              <li>Pilih <strong>Mode Subledger</strong> — Entity Type & COA otomatis menyesuaikan.</li>
              <li>Pilih <strong>Entitas</strong> (customer / vendor / dll) dari dropdown.</li>
              <li>Opsional: filter berdasarkan <strong>COA</strong> spesifik.</li>
              <li>Tentukan <strong>periode</strong>, klik <em>Terapkan Filter</em>.</li>
            </ol>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light fw-bold">Penjelasan Kolom</div>
          <div class="card-body p-0">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-light"><tr><th>Kolom</th><th>Keterangan</th></tr></thead>
              <tbody>
                <tr><td>Saldo Awal</td><td>Akumulasi saldo sebelum periode yang dipilih.</td></tr>
                <tr><td>Debit</td><td>Transaksi debit dalam periode. Ditampilkan hijau.</td></tr>
                <tr><td>Credit</td><td>Transaksi kredit dalam periode. Ditampilkan merah.</td></tr>
                <tr><td>Saldo Berjalan</td><td>Saldo akumulatif setelah setiap transaksi. Merah = negatif.</td></tr>
                <tr><td>Saldo Akhir</td><td>Saldo akhir periode = Saldo Awal + Total Debit − Total Credit.</td></tr>
              </tbody>
            </table>
          </div>
        </div>
<div class="alert alert-info">
          Halaman ini menampilkan riwayat transaksi per entitas dengan metode
          <strong>saldo berjalan (balance staffel)</strong>.
          Running balance dihitung sesuai <strong>saldo normal COA</strong> yang dipilih.
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Logika Saldo Normal</div>
          <div class="card-body p-0">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-light">
                <tr><th>Saldo Normal COA</th><th>Rumus Running Balance</th><th>Contoh Penggunaan</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= saldoNormalBadge('DEBIT') ?></td>
                  <td><code>Saldo += Debit − Credit</code></td>
                  <td>Piutang (AR), Kas, Aset, Inventory</td>
                </tr>
                <tr>
                  <td><?= saldoNormalBadge('CREDIT') ?></td>
                  <td><code>Saldo += Credit − Debit</code></td>
                  <td>Hutang (AP), Modal, Pendapatan</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Cara Penggunaan</div>
          <div class="card-body">
            <ol class="mb-0">
              <li>Klik <strong>Filter</strong>.</li>
              <li>Pilih <strong>Mode</strong> — Entity Type otomatis terisi.</li>
              <li>Pilih <strong>COA</strong> (wajib satu) — info saldo normal tampil otomatis.</li>
              <li>Pilih <strong>Entitas</strong> (wajib).</li>
              <li>Tentukan <strong>periode</strong>, klik <em>Terapkan Filter</em>.</li>
            </ol>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light fw-bold">Penjelasan Kolom</div>
          <div class="card-body p-0">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-light"><tr><th>Kolom</th><th>Keterangan</th></tr></thead>
              <tbody>
                <tr><td>Saldo Awal</td><td>Akumulasi saldo sebelum periode yang dipilih.</td></tr>
                <tr><td>Debit / Credit</td><td>Nilai transaksi masing-masing arah.</td></tr>
                <tr><td>Saldo Berjalan</td><td>Saldo kumulatif, dihitung sesuai saldo normal COA. Merah = negatif.</td></tr>
                <tr><td>▲ / ▼</td><td>Indikator arah mutasi per baris.</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>

<!-- <script>
// ── Data config mode dari PHP → JS ────────────────────────────
var modeConfig = <?= json_encode(array_map(function($v) {
    return [
        'label'        => $v['label'],
        'entity_type'  => $v['entity_type'],
        'entity_table' => $v['entity_table'],
        // 'entity_code'  => $v['entity_code'],
        // 'entity_name'  => $v['entity_name'],
        'coa_filter'   => $v['coa_filter'],
        'icon'         => $v['icon'],
        'color'        => $v['color'],
    ];
}, $modeConfig)) ?>;

// ── Saat mode radio berubah ────────────────────────────────────
$('.mode-radio').on('change', function() {

    var selectedMode = $(this).val();
    var cfg          = modeConfig[selectedMode];

    if (!cfg) return;

    // 1. Update label radio button
    $('.mode-radio').each(function() {
        var lbl   = $('label[for="' + $(this).attr('id') + '"]');
        var mKey  = $(this).val();
        var mCfg  = modeConfig[mKey];
        if (!mCfg) return;
        var baseClass = 'btn btn-sm ';
        if (mKey === selectedMode) {
            lbl.attr('class', baseClass + 'btn-' + mCfg.color);
        } else {
            lbl.attr('class', baseClass + 'btn-outline-' + mCfg.color);
        }
    });

    // 2. Update entity type display (readonly)
    $('#displayEntityType').val(cfg.entity_type);
    $('#hiddenEntityType').val(cfg.entity_type);

    // 3. Update info box
    $('#modeInfoText').html(
        'Mode <strong>' + cfg.label + '</strong> ' +
        'menggunakan entity type <code>' + cfg.entity_type + '</code> ' +
        'dari tabel <code>' + cfg.entity_table + '</code>.'
    );

    // 4. Load entitas via AJAX
    loadEntityOptions(selectedMode);

    // 5. Load COA options via AJAX
    loadCoaOptions(cfg.coa_filter);
});

// ── Load Entity dropdown via AJAX ──────────────────────────────
function loadEntityOptions(mode) {
    var $select  = $('#selectEntityId');
    var $spinner = $('#entityLoadSpinner');

    $select.prop('disabled', true).empty().append('<option value="">Memuat...</option>');
    $spinner.removeClass('d-none');

    $.ajax({
        url      : 'ajax_get_subledger_entities.php',
        type     : 'GET',
        data     : { mode: mode },
        dataType : 'json',
        success  : function(res) {
            $spinner.addClass('d-none');
            $select.empty().append('<option value="">-- Pilih Entitas --</option>');
            if (res.status === 'ok' && res.rows.length > 0) {
                $.each(res.rows, function(i, item) {
                    $select.append($('<option>', { value: item.id, text: item.label }));
                });
                $select.prop('disabled', false);
            } else {
                $select.append('<option value="">— tidak ada data —</option>');
            }
        },
        error: function() {
            $spinner.addClass('d-none');
            $select.empty().append('<option value="">- request gagal -</option>');
        }
    });
}

// ── Load COA dropdown via AJAX ─────────────────────────────────
function loadCoaOptions(coaFilter) {
    var $select  = $('#selectCoaId');
    var $spinner = $('#coaLoadSpinner');

    $select.prop('disabled', true).empty().append('<option value="">Memuat...</option>');
    $spinner.removeClass('d-none');

    $.ajax({
        url      : 'ajax_get_subledger_coa.php',
        type     : 'GET',
        data     : { subledger_types: coaFilter.join(',') },
        dataType : 'json',
        success  : function(res) {
            $spinner.addClass('d-none');
            $select.empty().append('<option value="">— Semua Akun —</option>');
            if (res.status === 'ok' && res.rows.length > 0) {
                $.each(res.rows, function(i, item) {
                    $select.append($('<option>', { value: item.id, text: item.label }));
                });
            }
            $select.prop('disabled', false);
        },
        error: function() {
            $spinner.addClass('d-none');
            $select.empty().append('<option value="">- request gagal -</option>');
            $select.prop('disabled', false);
        }
    });
}
</script> -->
<script>
// ── Config mode dari PHP ke JS ─────────────────────────────────
var modeConfig = <?= json_encode(array_map(function($v) {
    return [
        'label'        => $v['label'],
        'entity_type'  => $v['entity_type'],
        'entity_table' => $v['entity_table'],
        'coa_filter'   => $v['coa_filter'],
        'icon'         => $v['icon'],
        'color'        => $v['color'],
    ];
}, $modeConfig)) ?>;

// ── Saat mode radio berubah ────────────────────────────────────
$('.mode-radio').on('change', function() {

    var selMode = $(this).val();
    var cfg     = modeConfig[selMode];
    if (!cfg) return;

    // Update style radio buttons
    $('.mode-radio').each(function() {
        var $lbl = $('label[for="' + $(this).attr('id') + '"]');
        var k    = $(this).val();
        var c    = modeConfig[k];
        if (!c) return;
        $lbl.attr('class', 'form-check-label btn btn-sm '
            + (k === selMode ? 'btn-' + c.color : 'btn-outline-' + c.color));
    });

    // Update entity type display
    $('#displayEntityType').val(cfg.entity_type);
    $('#hiddenEntityType').val(cfg.entity_type);

    // Update info box
    $('#modeInfoText').html(
        'Mode <strong>' + cfg.label + '</strong>'
        + ' — entity type <code>' + cfg.entity_type + '</code>'
        + ' dari tabel <code>' + cfg.entity_table + '</code>.'
    );

    // Reset COA saldo info
    $('#coaSaldoNormalInfo').addClass('d-none').html('');

    // Load COA (AJAX)
    loadCoaOptions(cfg.coa_filter);

    // Load Entity (AJAX)
    loadEntityOptions(selMode);
});

// ── Saat COA dipilih → tampilkan info saldo normal ─────────────
$(document).on('change', '#selectCoaId', function() {

    var $opt      = $(this).find('option:selected');
    var saldoNorm = $opt.data('saldo-normal') || '';
    var $info     = $('#coaSaldoNormalInfo');

    if (!saldoNorm || saldoNorm === '') {
        $info.addClass('d-none').html('');
        return;
    }

    var badgeClass  = saldoNorm === 'CREDIT' ? 'bg-danger' : 'bg-success';
    var icon        = saldoNorm === 'CREDIT' ? 'fa-arrow-up' : 'fa-arrow-down';
    var rumus       = saldoNorm === 'CREDIT'
                      ? 'Running Balance = Credit − Debit'
                      : 'Running Balance = Debit − Credit';

    $info.removeClass('d-none').html(
        '<small>Saldo Normal: '
        + '<span class="badge ' + badgeClass + ' ms-1">'
        + '<i class="fas ' + icon + ' me-1"></i>' + saldoNorm
        + '</span>'
        + '<span class="text-muted ms-2">' + rumus + '</span>'
        + '</small>'
    );
});

// ── Load Entity via AJAX ───────────────────────────────────────
function loadEntityOptions(mode) {

    var $sel     = $('#selectEntityId');
    var $spinner = $('#entityLoadSpinner');

    $sel.prop('disabled', true).empty()
        .append('<option value="">Memuat...</option>');
    $spinner.removeClass('d-none');

    $.ajax({
        url      : 'ajax_get_subledger_entities.php',
        type     : 'GET',
        data     : { mode: mode },
        dataType : 'json',
        success  : function(res) {
            $spinner.addClass('d-none');
            $sel.empty().append('<option value="">-- Pilih Entitas --</option>');
            if (res.status === 'ok' && res.rows.length > 0) {
                $.each(res.rows, function(i, item) {
                    $sel.append($('<option>', { value: item.id, text: item.label }));
                });
            } else {
                $sel.append('<option value="">— tidak ada data —</option>');
            }
            $sel.prop('disabled', false);
        },
        error: function() {
            $spinner.addClass('d-none');
            $sel.empty().append('<option value="">- request gagal -</option>');
            $sel.prop('disabled', false);
        }
    });
}

// ── Load COA via AJAX ──────────────────────────────────────────
function loadCoaOptions(coaFilter) {

    var $sel     = $('#selectCoaId');
    var $spinner = $('#coaLoadSpinner');

    $sel.prop('disabled', true).empty()
        .append('<option value="">Memuat...</option>');
    $spinner.removeClass('d-none');

    $.ajax({
        url      : 'ajax_get_subledger_coa.php',
        type     : 'GET',
        data     : { subledger_types: coaFilter.join(',') },
        dataType : 'json',
        success  : function(res) {
            $spinner.addClass('d-none');
            $sel.empty().append('<option value="">— Pilih COA —</option>');
            if (res.status === 'ok' && res.rows.length > 0) {
                $.each(res.rows, function(i, item) {
                    $sel.append(
                        $('<option>', {
                            value              : item.id,
                            text               : item.label,
                            'data-saldo-normal': item.saldo_normal
                        })
                    );
                });
            }
            $sel.prop('disabled', false);
            // Reset info saldo normal
            $('#coaSaldoNormalInfo').addClass('d-none').html('');
        },
        error: function() {
            $spinner.addClass('d-none');
            $sel.empty().append('<option value="">- request gagal -</option>');
            $sel.prop('disabled', false);
        }
    });
}
</script>

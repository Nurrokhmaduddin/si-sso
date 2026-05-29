<!-- ========================================================= -->
<!-- PAGE : finance-profit-loss.php -->
<!-- STYLE : Laporan Laba Rugi -->
<!-- FOKUS :
     - Ringkasan laba rugi perusahaan
     - Rekap pendapatan & beban
     - Monitoring profitabilitas
     - Penyajian berdasarkan COA
-->
<!-- ========================================================= -->
<?php
$page = 'financial-report-pnl';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>


    <?php
$begin = $_GET['tanggal_awal'] ?? date('Y-m-01');
$end   = $_GET['tanggal_akhir'] ?? date('Y-m-t');

/**
 * FORMAT AKUNTANSI (NEGATIF = (xxx))
 */
function format_akuntansi($angka) {
  if ($angka < 0) {
    return '(' . number_format(abs($angka), 0, ',', '.') . ')';
  }
  return number_format($angka, 0, ',', '.');
}

/**
 * PENDAPATAN (REVENUE)
 * credit - debit
 */
$pendapatanQuery = mysqli_query($conn, "
  SELECT 
    c.kode_akun,
    c.nama_akun,
    COALESCE(SUM(j.credit - j.debit),0) AS nominal
  FROM coa c
  LEFT JOIN journal_details j 
    ON j.coa_id = c.id
   AND j.created_at BETWEEN '$begin 00:00:00' AND '$end 23:59:59'
  WHERE c.tipe_akun = 'REVENUE'
  GROUP BY c.id
  ORDER BY c.kode_akun ASC
");

$totalPendapatan = 0;
$pendapatan = [];

while ($row = mysqli_fetch_assoc($pendapatanQuery)) {
  $totalPendapatan += $row['nominal'];
  $pendapatan[] = $row;
}

/**
 * BEBAN (EXPENSE)
 * debit - credit
 */
$bebanQuery = mysqli_query($conn, "
  SELECT 
    c.kode_akun,
    c.nama_akun,
    COALESCE(SUM(j.debit - j.credit),0) AS nominal
  FROM coa c
  LEFT JOIN journal_details j 
    ON j.coa_id = c.id
   AND j.created_at BETWEEN '$begin 00:00:00' AND '$end 23:59:59'
  WHERE c.tipe_akun = 'EXPENSE'
  GROUP BY c.id
  ORDER BY c.kode_akun ASC
");

$totalBeban = 0;
$beban = [];

while ($row = mysqli_fetch_assoc($bebanQuery)) {
  $totalBeban += $row['nominal'];
  $beban[] = $row;
}

$labaRugi = $totalPendapatan - $totalBeban;
?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>

          <h3 class="mb-0">

            Laporan Laba Rugi

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Ringkasan pendapatan, beban, dan laba/rugi perusahaan berdasarkan akun COA pada periode tertentu.
          </p>

        </div>

      </div>

    </div>

  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->

  <section class="content">

    <div class="container-fluid">

      <!-- ================================================= -->
      <!-- FILTER -->
      <!-- ================================================= -->

      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-4">
              <b>Periode:</b> 01 Mei 2026 - 31 Mei 2026
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalFilter">

              <i class="fas fa-filter me-1"></i>
              Filter

            </button>

            <button type="button"
              class="btn btn-outline-success btn-sm">

              <i class="fas fa-file-download me-1"></i>
              Export

            </button>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->


<div class="row">

  <!-- PENDAPATAN -->
  <div class="col-lg-4 col-md-6">

    <div class="small-box bg-success">

      <div class="inner">
        <h3>Rp <?= format_akuntansi($totalPendapatan) ?></h3>
        <p>Total Pendapatan</p>
      </div>

      <div class="icon">
        <i class="fas fa-arrow-up"></i>
      </div>

    </div>

  </div>

  <!-- BEBAN -->
  <div class="col-lg-4 col-md-6">

    <div class="small-box bg-danger">

      <div class="inner">
        <h3>Rp <?= format_akuntansi($totalBeban) ?></h3>
        <p>Total Beban</p>
      </div>

      <div class="icon">
        <i class="fas fa-arrow-down"></i>
      </div>

    </div>

  </div>

  <!-- LABA RUGI -->
  <div class="col-lg-4 col-md-12">

    <div class="small-box bg-primary">

      <div class="inner">
        <h3>Rp <?= format_akuntansi($labaRugi) ?></h3>
        <p>Laba/Rugi Bersih</p>
      </div>

      <div class="icon">
        <i class="fas fa-exchange-alt"></i>
      </div>

    </div>

  </div>

</div>


<!-- ========================================================= -->
<!-- CARD LABA RUGI -->
<!-- ========================================================= -->

<div class="card card-outline card-secondary">

  <div class="card-header">
    <h3 class="card-title">Detail Laporan Laba Rugi</h3>
  </div>

  <div class="card-body p-0 table-responsive">

    <table class="table table-sm mb-0">

      <!-- ===================== -->
      <!-- PENDAPATAN -->
      <!-- ===================== -->
      <tr class="table-light">
        <td colspan="2"><b>PENDAPATAN</b></td>
      </tr>

      <?php foreach ($pendapatan as $p) { ?>
        <tr>
          <td>
            <small class="text-muted"><?= $p['kode_akun'] ?>-
            <?= $p['nama_akun'] ?></small>
          </td>
          <td class="text-right">
            <small><?= format_akuntansi($p['nominal']) ?></small>
          </td>
        </tr>
      <?php } ?>

      <tr class="font-weight-bold">
        <td>Total Pendapatan</td>
        <td class="text-right">
          <?= format_akuntansi($totalPendapatan) ?>
        </td>
      </tr>

      <!-- ===================== -->
      <!-- BEBAN -->
      <!-- ===================== -->
      <tr class="table-light">
        <td colspan="2"><b>BEBAN</b></td>
      </tr>

      <?php foreach ($beban as $b) { ?>
        <tr>
          <td>
            <small class="text-muted"><?= $b['kode_akun'] ?>-
            <?= $b['nama_akun'] ?></small>
          </td>
          <td class="text-right">
            <small><?= format_akuntansi($b['nominal']) ?></small>
          </td>
        </tr>
      <?php } ?>

      <tr class="font-weight-bold">
        <td>Total Beban</td>
        <td class="text-right">
          <?= format_akuntansi($totalBeban) ?>
        </td>
      </tr>

      <!-- ===================== -->
      <!-- LABA RUGI -->
      <!-- ===================== -->
      <tr class="bg-light font-weight-bold">
        <td>LABA / RUGI BERSIH</td>
        <td class="text-right">
          <?= format_akuntansi($labaRugi) ?>
        </td>
      </tr>

    </table>

  </div>

</div>











      

</div>

</section>

</div>

<?php include('4footer.php'); ?>

<!-- ===================================================== -->
<!-- MODAL FILTER -->
<!-- ===================================================== -->

<div class="modal fade"
id="modalFilter"
tabindex="-1"
aria-labelledby="modalFilterLabel"
aria-hidden="true">

<div class="modal-dialog">

  <div class="modal-content rounded-3 shadow">

    <div class="modal-header bg-info text-white">

      <h5 class="modal-title" id="modalFilterLabel">
        Filter Laporan
      </h5>

      <button type="button"
      class="btn-close btn-close-white"
      data-bs-dismiss="modal">
    </button>

  </div>

  <form action="" method="GET">

    <div class="modal-body">

      <div class="alert alert-warning mb-3"
      role="alert"
      style="font-size:0.9rem;">

      <b>Informasi:</b>
      Laporan akan menampilkan data laba rugi berdasarkan periode dan filter yang dipilih.

    </div>

    <div class="mb-3">

      <label class="form-label">
        Periode Awal
      </label>

      <input type="date"
      class="form-control"
      name="tanggal_awal">

    </div>

    <div class="mb-3">

      <label class="form-label">
        Periode Akhir
      </label>

      <input type="date"
      class="form-control"
      name="tanggal_akhir">

    </div>

    <div class="mb-3">

      <label class="form-label">
        Cabang
      </label>

      <select class="form-select" name="branch">

        <option value="">
          -- Semua Cabang --
        </option>

        <option>
          Jakarta
        </option>

        <option>
          Medan
        </option>

        <option>
          Surabaya
        </option>

      </select>

    </div>

  </div>

  <div class="modal-footer">

    <button type="button"
    class="btn btn-secondary"
    data-bs-dismiss="modal">

    Batal

  </button>

  <button type="submit"
  class="btn btn-info">

  Terapkan Filter

</button>

</div>

</form>

</div>

</div>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->

<div class="modal fade"
id="modalBantuan"
tabindex="-1"
aria-labelledby="modalBantuanLabel"
aria-hidden="true">

<div class="modal-dialog modal-lg">

  <div class="modal-content">

    <div class="modal-header bg-primary text-white">

      <h5 class="modal-title" id="modalBantuanLabel">
        Bantuan Laporan Laba Rugi
      </h5>

      <button type="button"
      class="btn-close btn-close-white"
      data-bs-dismiss="modal">
    </button>

  </div>

  <div class="modal-body">

    <div class="alert alert-info">

      Halaman ini digunakan untuk melihat ringkasan performa keuangan perusahaan berdasarkan data akun COA (Chart of Accounts) pada periode tertentu.

    </div>

    <h5>Cara Membaca Laporan</h5>

    <ul>

      <li>
        Bagian <b>Pendapatan</b> menampilkan seluruh akun pemasukan perusahaan.
      </li>

      <li>
        Bagian <b>Beban</b> menampilkan seluruh akun biaya operasional dan pengeluaran perusahaan.
      </li>

      <li>
        Nilai <b>Total Laba / Rugi</b> diperoleh dari total pendapatan dikurangi total beban.
      </li>

      <li>
        Semakin besar selisih positif antara pendapatan dan beban, maka profitabilitas perusahaan semakin baik.
      </li>

      <li>
        Gunakan filter periode untuk melihat laporan berdasarkan bulan atau rentang tanggal tertentu.
      </li>

    </ul>

    <hr>

    <h5>Penjelasan Kolom</h5>

    <table class="table table-bordered table-sm">

      <thead class="table-dark">

        <tr>

          <th>Kolom</th>
          <th>Keterangan</th>

        </tr>

      </thead>

      <tbody>

        <tr>
          <td>Kode Akun</td>
          <td>Kode COA yang digunakan dalam pencatatan akuntansi.</td>
        </tr>

        <tr>
          <td>Nama Akun</td>
          <td>Nama akun pendapatan atau beban.</td>
        </tr>

        <tr>
          <td>Nominal</td>
          <td>Total transaksi pada akun tersebut dalam periode laporan.</td>
        </tr>

        <tr>
          <td>Total Pendapatan</td>
          <td>Akumulasi seluruh akun pendapatan.</td>
        </tr>

        <tr>
          <td>Total Beban</td>
          <td>Akumulasi seluruh akun beban.</td>
        </tr>

        <tr>
          <td>Total Laba / Rugi</td>
          <td>Hasil akhir keuntungan atau kerugian perusahaan.</td>
        </tr>

      </tbody>

    </table>

  </div>

  <div class="modal-footer">

    <button type="button"
    class="btn btn-secondary"
    data-bs-dismiss="modal">

    Tutup

  </button>

</div>

</div>

</div>

</div>

<?php include('5script.php'); ?>
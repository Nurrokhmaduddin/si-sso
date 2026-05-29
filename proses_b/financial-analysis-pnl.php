<!-- ========================================================= -->
<!-- PAGE : financial-analysis-pnl.php -->
<!-- STYLE : Analisis Laba Rugi -->
<!-- FOKUS :
     - Ringkasan laba rugi perusahaan
     - Rekap pendapatan & beban
     - Monitoring profitabilitas
     - Penyajian berdasarkan COA
-->
<!-- ========================================================= -->
<?php
$page = 'financial-analysis-pnl';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>


    <?php
$begin = $_GET['tanggal_awal'] ?? date('Y-m-01');
$end   = $_GET['tanggal_akhir'] ?? date('Y-m-t');
$groupBy = $_GET['group_by'] ?? 'customer';


/* =========================================================
   PROFITABILITY QUERY
========================================================= */

$list = [];

$join = "";
$where = "";
$groupField = "";
$nameField = "";

switch ($groupBy) {

    case 'customer':

        $join = "
            JOIN customers x
                ON x.id = jd.entity_id
        ";

        $where = "
            jd.entity_type = 'customer'
        ";

        $groupField = "x.id";
        $nameField  = "x.customer_name";

    break;


    case 'branch':

        $join = "
            JOIN branches x
                ON x.id = jd.branch_id
        ";

        $where = "
            jd.branch_id IS NOT NULL
            AND jd.branch_id != 0
        ";

        $groupField = "x.id";
        $nameField  = "x.branch_name";

    break;


    case 'project':

        $join = "
            JOIN projects x
                ON x.id = jd.project_id
        ";

        $where = "
            jd.project_id IS NOT NULL
            AND jd.project_id != 0
        ";

        $groupField = "x.id";
        $nameField  = "x.project_name";

    break;

}


/* =========================================================
   QUERY
========================================================= */

$sql = "
SELECT

    $nameField AS name,

    SUM(
        CASE
            WHEN coa.tipe_akun = 'REVENUE'
            THEN (jd.credit - jd.debit)
            ELSE 0
        END
    ) AS revenue,

    SUM(
        CASE
            WHEN coa.tipe_akun = 'EXPENSE'
            THEN (jd.debit - jd.credit)
            ELSE 0
        END
    ) AS cost

FROM journal_details jd

JOIN coa
    ON coa.id = jd.coa_id

$join

WHERE

    $where

    AND jd.created_at BETWEEN '$begin 00:00:00'
    AND '$end 23:59:59'

GROUP BY $groupField

HAVING revenue != 0
    OR cost != 0

ORDER BY revenue DESC
";

$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($query)) {

    $list[] = $row;

}


/* =========================================================
   KPI SUMMARY
========================================================= */

$totalRevenue = 0;
$totalCost = 0;

foreach($list as $x){

    $totalRevenue += $x['revenue'];
    $totalCost += $x['cost'];

}

$profit = $totalRevenue - $totalCost;

$margin = $totalRevenue > 0
    ? ($profit / $totalRevenue) * 100
    : 0;


/**
 * FORMAT AKUNTANSI (NEGATIF = (xxx))
 */
function format_akuntansi($angka) {
  if ($angka < 0) {
    return '(' . number_format(abs($angka), 0, ',', '.') . ')';
  }
  return number_format($angka, 0, ',', '.');
}

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

            Analisis Profitability

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Analisis profitabilitas perusahaan berdasarkan customer,
project, branch, atau dimensi bisnis lainnya
berdasarkan transaksi jurnal.
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
              <b>Periode:</b> <?php echo $begin; ?> - <?php echo $end; ?>
            </div>
<div class="col-md-4">
              <b>Group By :</b> <?php echo $groupBy; ?>
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


    <div class="row mb-3">

        <div class="col-md-3">
            <div class="card p-3 text-center">
                <h6>Total Revenue</h6>
                <h4 class="text-success">Rp <?= number_format($totalRevenue) ?></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 text-center">
                <h6>Total Cost</h6>
                <h4 class="text-danger">Rp <?= number_format($totalCost) ?></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 text-center">
                <h6>Profit</h6>
                <h4 class="text-primary">Rp <?= number_format($profit) ?></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 text-center">
                <h6>Margin</h6>
                <h4 class="text-warning"><?= number_format($margin, 2) ?>%</h4>
            </div>
        </div>

    </div>


<!-- ====================================================== -->
    <!-- TABLE -->
    <!-- ====================================================== -->
    <div class="card p-3">

        <h5 class="mb-3">
            Group By: <?= strtoupper($groupBy) ?>
        </h5>

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th><?= ucfirst($groupBy) ?></th>
                    <th>Revenue</th>
                    <th>Cost</th>
                    <th>Profit</th>
                    <th>Margin %</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($list as $row): 

                    $rev = $row['revenue'];
                    $cost = $row['cost'];
                    $profitRow = $rev - $cost;
                    $marginRow = $rev > 0 ? ($profitRow / $rev) * 100 : 0;

                ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= number_format($rev) ?></td>
                    <td><?= number_format($cost) ?></td>
                    <td><?= number_format($profitRow) ?></td>
                    <td><?= number_format($marginRow, 2) ?>%</td>
                </tr>
                <?php endforeach; ?>

            </tbody>

        </table>

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

  <form method="GET" class="card p-3 mb-3">
        <div class="row">

            <div class="col-md-3">
                <label>Date Start</label>
                <input type="date" name="tanggal_awal" value="<?= $begin ?>" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Date End</label>
                <input type="date" name="tanggal_akhir" value="<?= $end ?>" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Group By</label>
                <select name="group_by" class="form-control">
                    <option value="customer" <?= $groupBy=='customer'?'selected':'' ?>>Customer</option>
                    <option value="product" <?= $groupBy=='product'?'selected':'' ?>>Product</option>
                    <option value="project" <?= $groupBy=='project'?'selected':'' ?>>Project</option>
                    <option value="branch" <?= $groupBy=='branch'?'selected':'' ?>>Branch</option>
                </select>
            </div>

            <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-primary w-100">
                    Apply Filter
                </button>
            </div>

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
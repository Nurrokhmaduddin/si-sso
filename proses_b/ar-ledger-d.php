<!-- ========================================================= -->
<!-- PAGE : finance-ar-history.php -->
<!-- DESCRIPTION : Account Receivable Ledger History -->
<!-- ========================================================= -->
<?php
$page = 'ar-ledger';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<?php
$customer_id = $_GET['customer_id'] ?? 0;
$start_date  = $_GET['start_date'] ?? date('Y-m-01');
$end_date    = $_GET['end_date'] ?? date('Y-m-t');

$data_ready = ($customer_id != 0);
?>
<?php 
$customers = mysqli_query($conn, "SELECT id, customer_name FROM customers ORDER BY id ASC");

$branchOptions = '';
while ($b = mysqli_fetch_assoc($customers)) {
    $branchOptions .= "<option value=\"{$b['id']}\">" . htmlspecialchars($b['customer_name']) . "</option>";
}

// JS-safe versions (untuk dipakai di dalam JS template literal)
$branchOptionsJS  = addslashes($branchOptions);

 ?>
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Receivable Ledger
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
      Menampilkan detail mutasi piutang customer berdasarkan transaksi invoice, pembayaran, penyesuaian, dan saldo berjalan piutang per customer.
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

            <div class="col-md-4 mb-2">
              <b>Periode :</b> <?php echo $start_date. "-" .$end_date ; ?> 
            </div>
            <div class="col-md-4 mb-2">
              <b>Customer :</b> <?php echo $customer_id; ?>
            </div>

            <div class="col-md-4 mb-2">
              <b>Status :</b> Semua Transaksi
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

          </div>

        </div>

      </div>


      <!-- ========================================================= -->
      <!-- RECEIVABLE LEDGER -->
      <!-- ========================================================= -->

       <div class="card card-outline card-primary">

        <div class="card-header ">
          <h3 class="card-title ">
            Buku Besar Piutang Customer
        </h3>
    </div>
    <?php 
    $sql = "
    SELECT 
    jh.transaction_date,
    jh.journal_no,
    jd.line_memo,
    jd.debit,
    jd.credit
    FROM journal_details jd
    JOIN journal_headers jh ON jh.id = jd.journal_header_id
    WHERE 
    jd.coa_id = 3
    AND jd.entity_type = 'customer'
    AND jd.entity_id = '$customer_id'
    AND jh.transaction_date BETWEEN '$start_date' AND '$end_date'
    ORDER BY 
    jh.transaction_date ASC,
    jh.created_at ASC,
    jd.line_no ASC
    ";

    $result = mysqli_query($conn, $sql);
    ?>
    <div class="card-body table-responsive p-0">

      <?php if (!$data_ready): ?>
        <div class="p-4 text-center text-muted">
          <h5>Silahkan pilih Customer terlebih dahulu.</h5>
        </div>
      <?php else: ?>

        <thead class="table-dark text-center">

          <tr>
            <th>Tanggal</th>
            <th>Reference</th>
            <th>Description</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Saldo Piutang</th>
          </tr>

        </thead>

        <tbody>
          <?php $saldo = 0; ?>

          <?php while ($row = mysqli_fetch_assoc($result)) : ?>

            <?php
            $debit  = $row['debit'];
            $credit = $row['credit'];

            $saldo += ($debit - $credit);
            ?>

            <tr>
              <td><?= $row['transaction_date'] ?></td>
              <td><?= $row['journal_no'] ?></td>
              <td><?= $row['line_memo'] ?></td>

              <td class="text-end">
                <?= number_format($debit, 0, ',', '.') ?>
              </td>

              <td class="text-end">
                <?= number_format($credit, 0, ',', '.') ?>
              </td>

              <td class="text-end">
                <?= number_format($saldo, 0, ',', '.') ?>
              </td>
            </tr>

          <?php endwhile; ?>


          <tr class="table-secondary fw-bold">
            <td colspan="5" class="text-end">SALDO AKHIR</td>
            <td><?= number_format($saldo, 0, ',', '.') ?></td>
          </tr>
        </tbody>

      </table>
    <?php endif; ?>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade" id="modalFilter" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter History Piutang</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Customer</label>
              <select class="form-select" name="header_branch_id">
                <option value="0">-</option>
                <?= $branchOptions ?>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status Invoice</label>
              <select class="form-select">
                <option>Semua</option>
                <option>Outstanding</option>
                <option>Paid</option>
                <option>Overdue</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Awal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Akhir</label>
              <input type="date" class="form-control">
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
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

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor histori piutang customer secara detail berdasarkan lawan transaksi/customer.
        </p>

        <p>
          Konsep halaman ini menyerupai buku besar (general ledger), namun fokus mikro datanya adalah customer, bukan akun COA.
        </p>

        <p>
          Finance dapat melihat:
        </p>

        <ul>
          <li>Saldo awal piutang customer</li>
          <li>Mutasi penambahan piutang dari invoice</li>
          <li>Pembayaran customer</li>
          <li>Adjustment / credit note</li>
          <li>Saldo akhir piutang customer</li>
        </ul>

        <p>
          Kolom saldo piutang menampilkan balance berjalan (running balance) sehingga memudahkan audit histori piutang dari awal hingga akhir periode.
        </p>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>

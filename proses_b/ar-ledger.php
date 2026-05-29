
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
$customer_name = '-';

if ($customer_id != 0) {
    $qCustomer = mysqli_query($conn, "
        SELECT customer_name 
        FROM customers 
        WHERE id = '$customer_id'
        LIMIT 1
    ");

    if ($rowC = mysqli_fetch_assoc($qCustomer)) {
        $customer_name = $rowC['customer_name'];
    }
}
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
              <b>Customer :</b> <?php echo $customer_name; ?>
            </div>
<!-- 

            <div class="col-md-4 mb-2">
              <b>Status :</b> Semua Transaksi
            </div> -->

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

      <!-- ========================================================= -->
      <!-- CUSTOMER INFORMATION -->
      <!-- ========================================================= -->

      <!-- <div class="card">

        <div class="card-header bg-info">
          <h3 class="card-title text-white">
            Informasi Customer
          </h3>
        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3 mb-3">
              <small class="text-muted">Customer Code</small>
              <h6>CUST-001</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Customer Name</small>
              <h6>PT Maju Jaya Abadi</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Awal Piutang</small>
              <h6 class="text-primary">Rp 145.000.000</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Akhir Piutang</small>
              <h6 class="text-danger">Rp 82.500.000</h6>
            </div>

          </div>

        </div>

      </div> -->

      <!-- ========================================================= -->
      <!-- KPI -->
      <!-- ========================================================= -->

     <!--  <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Rp 145JT</h3>
              <p>Opening Receivable</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Rp 62JT</h3>
              <p>Total Payment</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-check-alt"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>5 Invoice</h3>
              <p>Outstanding Invoice</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-circle"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Rp 82JT</h3>
              <p>Ending Receivable</p>
            </div>
            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>
          </div>
        </div>

      </div> -->

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
    jh.memo,
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
<table class="table table-bordered table-hover">
    		<thead class="table-dark text-center">

    			<tr>
    				<th>Tanggal</th>
    				<th>Journal No</th>
    				<th>Description</th>
    				<th>Debit</th>
    				<th>Credit</th>
    				<th>Saldo Piutang</th>
    			</tr>

    		</thead>

    		<tbody>
    			<?php 
    			$saldo_awal = 0;

$sql_opening = "
SELECT 
    SUM(CASE 
        WHEN jd.debit > 0 THEN jd.debit 
        ELSE -jd.credit 
    END) as opening_balance
FROM journal_details jd
JOIN journal_headers jh ON jh.id = jd.journal_header_id
WHERE 
    jd.coa_id = 3
    AND jd.entity_type = 'customer'
    AND jd.entity_id = '$customer_id'
    AND jh.transaction_date < '$start_date'
";

$res_opening = mysqli_query($conn, $sql_opening);
$data_opening = mysqli_fetch_assoc($res_opening);

$saldo_awal = $data_opening['opening_balance'] ?? 0;
?>

<?php $saldo = $saldo_awal; ?>
    			<tr class="table-secondary fw-bold">
    				<td colspan="5" class="text-end">SALDO AWAL</td>
    				<td class="text-end"><?= number_format($saldo_awal, 0, ',', '.') ?></td>
    			</tr>
    			<?php while ($row = mysqli_fetch_assoc($result)) : ?>

    				<?php
    				$debit  = $row['debit'];
    				$credit = $row['credit'];

    				$saldo += ($debit - $credit);
    				?>

    				<tr>
    					<td><?= $row['transaction_date'] ?></td>
    					<td><?= $row['journal_no'] ?></td>
    					<td><?= $row['memo'] ?></td>

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
    				<td class="text-end"><?= number_format($saldo, 0, ',', '.') ?></td>
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

      <form method="GET" action="">

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Customer</label>
              <select name="customer_id" class="form-select">
              	<?php 
$customers = mysqli_query($conn, "SELECT id, customer_name FROM customers ORDER BY id ASC");
 ?>
    <?php while($c = mysqli_fetch_assoc($customers)) : ?>
        <option value="<?= $c['id'] ?>"
            <?= $customer_id == $c['id'] ? 'selected' : '' ?>>
            <?= $c['customer_name'] ?>
        </option>
    <?php endwhile; ?>
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
              <input type="date" name="start_date" value="<?= $start_date ?>" class="form-control">
            </div>


            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Akhir</label>
              <input type="date" name="end_date" value="<?= $end_date ?>" class="form-control">
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
<!-- <script>
	new bootstrap.Modal(document.getElementById('modalFilter')).show();
</script> -->
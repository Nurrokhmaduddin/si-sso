<?php

include 'koneksi.php';

$id = $_GET['id'];

$header = mysqli_fetch_array(mysqli_query($conn,"
  SELECT *
  FROM journal_headers
  WHERE id='$id'
  "));

  ?>

<!-- HEADER INFO -->

<div class="row mb-3">

  <div class="col-md-3">
    <small class="text-muted">Journal No</small>
    <div><b><?= $header['journal_no']; ?></b></div>
  </div>

  <div class="col-md-3">
    <small class="text-muted">Transaction Date</small>
    <div>
      <?= date('d M Y', strtotime($header['transaction_date'])); ?>
    </div>
  </div>

  <div class="col-md-3">
    <small class="text-muted">Transaction Type</small>
    <div><?= $header['transaction_type']; ?></div>
  </div>

  <div class="col-md-3">
    <small class="text-muted">Status</small>
    <div>
      <span class="badge bg-success">
        <?= $header['status']; ?>
      </span>
    </div>
  </div>

</div>

<div class="row mb-4">

  <div class="col-md-6">
    <small class="text-muted">Reference No</small>
    <div><?= $header['reference_no']; ?></div>
  </div>

  <div class="col-md-6">
    <small class="text-muted">Source Module</small>
    <div><?= $header['source_module']; ?></div>
  </div>

  <div class="col-md-12 mt-3">
    <small class="text-muted">Memo</small>

    <div class="border rounded p-2 bg-light">
      <?= nl2br($header['memo']); ?>
    </div>
  </div>

</div>

<!-- DETAIL TABLE -->

<div class="table-responsive">

  <table class="table table-bordered table-hover">

    <thead class="table-light">

      <tr>

        <th>No</th>
        <th>COA</th>
        <th>Memo</th>
        <th>Debit</th>
        <th>Credit</th>
        <th>Branch</th>
        <th>Project</th>
        <th>Entity</th>

      </tr>

    </thead>

    <tbody>

      <?php

      $no = 1;

      $detail = mysqli_query($conn, "

        SELECT
        jd.*,
        coa.kode_akun,
        coa.nama_akun

        FROM journal_details jd

        LEFT JOIN coa coa
        ON coa.id = jd.coa_id

        WHERE jd.journal_header_id='$id'

        ORDER BY jd.line_no ASC

        ");

      while($d = mysqli_fetch_array($detail)){

        ?>

        <tr>

          <td><?= $no++; ?></td>

          <td>
            <b><?= $d['kode_akun']; ?></b>
            <br>
            <small><?= $d['nama_akun']; ?></small>
          </td>

          <td><?= $d['line_memo']; ?></td>

          <td class="text-end">

            <?php
            if($d['debit'] > 0){
              echo number_format($d['debit'],2);
            }else{
              echo '-';
            }
            ?>

          </td>

          <td class="text-end">

            <?php
            if($d['credit'] > 0){
              echo number_format($d['credit'],2);
            }else{
              echo '-';
            }
            ?>

          </td>

          <td><?= $d['branch_id']; ?></td>

          <td><?= $d['project_id']; ?></td>

          <td>
            <?= $d['entity_type']; ?>
            #<?= $d['entity_id']; ?>
          </td>

        </tr>

      <?php } ?>

    </tbody>

    <tfoot class="table-light">

      <tr>

        <th colspan="3" class="text-end">
          TOTAL
        </th>

        <th class="text-end">
          <?= number_format($header['total_debit'],2); ?>
        </th>

        <th class="text-end">
          <?= number_format($header['total_credit'],2); ?>
        </th>

        <th colspan="3"></th>

      </tr>

    </tfoot>

  </table>

</div>
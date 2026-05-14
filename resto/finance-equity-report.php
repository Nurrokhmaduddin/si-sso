<!-- ========================================================= -->
<!-- PAGE : finance-equity-report.php -->
<!-- STYLE : Financial Statement Report -->
<!-- FOKUS :
     - Laporan Perubahan Modal
     - Mutasi akun ekuitas
     - Ringkasan modal awal & akhir
     - Berdasarkan COA Ekuitas
-->
<!-- ========================================================= -->

<?php $page = 'finance-equity-report'; ?>

<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- ========================================================= -->
  <!-- CONTENT HEADER -->
  <!-- ========================================================= -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Laporan Perubahan Modal

        <button
          type="button"
          class="btn btn-tool"
          data-bs-toggle="modal"
          data-bs-target="#modalBantuan"
          title="Bantuan">

          <i class="fas fa-question-circle"></i>

        </button>
      </h3>

      <p class="text-muted mb-0">
        Menampilkan perubahan saldo modal perusahaan berdasarkan akun ekuitas (COA) pada periode tertentu.
      </p>

    </div>
  </section>

  <!-- ========================================================= -->
  <!-- MAIN CONTENT -->
  <!-- ========================================================= -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-12">

          <!-- ========================================================= -->
          <!-- FILTER -->
          <!-- ========================================================= -->
          <div class="card">

            <div class="card-body">

              <div class="row">

                <div class="col-md-6">
                  <b>Periode:</b> 1 Mei 2026 - 31 Mei 2026
                </div>

                <!-- <div class="col-md-6 text-md-end">
                  <b>Status Data:</b> Final Posting
                </div> -->

              </div>

            </div>

            <div class="card-footer">

              <div class="card-tools ms-auto">

                <button
                  class="btn btn-outline-info btn-sm"
                  data-bs-toggle="modal"
                  data-bs-target="#modalFilter">

                  <i class="fas fa-filter me-1"></i>
                  Filter

                </button>

                <button
                  type="button"
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

            <div class="col-lg-4 col-md-6">

              <div class="small-box bg-success">

                <div class="inner">

                  <h3>Rp 190.980.000</h3>

                  <p>Opening </p>

                </div>

                <div class="icon">
                  <i class="fas fa-chart-line"></i>
                </div>

              </div>

            </div>

            <div class="col-lg-4 col-md-6">

              <div class="small-box bg-danger">

                <div class="inner">

                  <h3>Rp 48.500.000</h3>

                  <p>Total Perubahan</p>

                </div>

                <div class="icon">
                  <i class="fas fa-file-invoice-dollar"></i>
                </div>

              </div>

            </div>

            <div class="col-lg-4 col-md-12">

              <div class="small-box bg-primary">

                <div class="inner">

                  <h3>Rp 239.480.000</h3>

                  <p>Closing</p>

                </div>

                <div class="icon">
                  <i class="fas fa-wallet"></i>
                </div>

              </div>

            </div>

          </div>

<!-- ================================================= -->
<!-- LAPORAN PERUBAHAN MODAL  (COA BASED) -->
<!-- ================================================= -->

<div class="card">

  <div class="card-body p-0">

    <!-- ============================================= -->
    <!-- MODAL AWAL -->
    <!-- ============================================= -->

    <div style="background:#d86a1d;
                color:white;
                padding:22px 28px;
                font-size:22px;
                font-weight:bold;
                text-align:right;">

      MODAL AWAL :
      Rp 190.980.000

    </div>

  </div>

</div>


<!-- ================================================= -->
<!-- KENAIKAN / PENURUNAN KAS -->
<!-- ================================================= -->

<div class="card">

  <div class="card-body p-0">

    <div style="background:#eb7d2d;
                color:white;
                padding:18px 24px;
                font-size:20px;
                font-weight:600;">

      KENAIKAN / PENURUNAN MODAL

    </div>

    <div class="table-responsive">

      <table class="table table-bordered mb-0">

        <thead style="background:#f4f6f9;">

          <tr>
            <th width="15%">Kode Akun</th>
            <th>Nama Akun</th>
            <th width="20%" class="text-end">Nominal (Rp)</th>
          </tr>

        </thead>

        <tbody>

          <!-- ============================================= -->
          <!-- OPERASI (COA 4 & 6) -->
          <!-- ============================================= -->

          <tr style="background:#eef7ff;font-weight:bold;">
            <td colspan="3">PENAMBAHAN MODAL</td>
          </tr>

<tr>
                  <td>331-100</td>
                  <td>Modal Disetor / Modal Pemilik</td>
                  <td class="text-end">25.000.000</td>
                </tr>

                <tr>
                  <td>331-120</td>
                  <td>Tambahan Investasi Pemilik</td>
                  <td class="text-end">10.000.000</td>
                </tr>

                <tr>
                  <td>331-130</td>
                  <td>Laba Ditahan (Retained Earnings)</td>
                  <td class="text-end">18.500.000</td>
                </tr>



          <tr style="font-weight:bold;background:#f8f9fa;">
            <td colspan="2" class="text-center">TOTAL PENAMBAHAN MODAL</td>
            <td class="text-end"> 53.500.000</td>
          </tr>


          <!-- ============================================= -->
          <!-- INVESTASI (COA 1) -->
          <!-- ============================================= -->

          <tr style="background:#eef7ff;font-weight:bold;">
            <td colspan="3">PENGURANGAN MODAL</td>
          </tr>

          <tr>
            <td>331-140</td>
            <td>Prive Pemilik</td>
            <td class="text-end">-5.000.000</td>
          </tr>

          <tr style="font-weight:bold;background:#f8f9fa;">
            <td colspan="2" class="text-center">TOTAL PENGURANGAN MODAL</td>
            <td class="text-end">-5.000.000</td>
          </tr>



          <!-- ============================================= -->
          <!-- TOTAL KAS BERSIH -->
          <!-- ============================================= -->

          <tr style="font-weight:bold;background:#ffe8d6;">
            <td colspan="2" class="text-center">
              TOTAL KENAIKAN / PENURUNAN MODAL
            </td>

            <td class="text-end">
              48.500.000
            </td>
          </tr>

        </tbody>

      </table>

    </div>

  </div>

</div>


<!-- ================================================= -->
<!-- KAS AKHIR -->
<!-- ================================================= -->

<div class="card">

  <div class="card-body p-0">

    <div style="background:#d86a1d;
                color:white;
                padding:22px 28px;
                font-size:22px;
                font-weight:bold;
                text-align:right;">

      MODAL AKHIR :
      Rp 239.480.000

    </div>

  </div>

</div>


-----
          <!-- ================================================= -->
      <!-- LAPORAN PERUBAHAN MODAL -->
      <!-- ================================================= -->

      <div class="card">

        <div class="card-body p-0">
<!-- ============================================= -->
          <!-- MODAL AWAL -->
          <!-- ============================================= -->

          <div style="background:#d86a1d;
                      color:white;
                      padding:22px 28px;
                      font-size:22px;
                      font-weight:bold;
                      text-align:right;">

            MODAL AWAL :
            Rp 190.980.000

          </div>

        </div>

      </div>

      <div class="card">

        <div class="card-body p-0">

          <!-- ============================================= -->
          <!-- PENAMBAHAN MODAL -->
          <!-- ============================================= -->

          <div style="background:#eb7d2d;
                      color:white;
                      padding:18px 24px;
                      font-size:20px;
                      font-weight:600;">

            PENAMBAHAN MODAL

          </div>

          <div class="table-responsive">

            <table class="table table-bordered mb-0">

              <thead style="background:#f4f6f9;">

                <tr>

                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="20%" class="text-end">
                    Nominal (Rp)
                  </th>

                </tr>

              </thead>

              <tbody>
  
   
   
                <tr>
                  <td>331-100</td>
                  <td>Modal Disetor / Modal Pemilik</td>
                  <td class="text-end">25.000.000</td>
                </tr>

                <tr>
                  <td>331-120</td>
                  <td>Tambahan Investasi Pemilik</td>
                  <td class="text-end">10.000.000</td>
                </tr>

                <tr>
                  <td>331-130</td>
                  <td>Laba Ditahan (Retained Earnings)</td>
                  <td class="text-end">18.500.000</td>
                </tr>

                <tr style="font-weight:bold;
                           background:#f8f9fa;">

                  <td colspan="2" class="text-center">
                    TOTAL PENAMBAHAN MODAL
                  </td>

                  <td class="text-end">
                    53.500.000
                  </td>

                </tr>

              </tbody>

            </table>

          </div>
</div>
</div>
<div class="card">
<div class="card-body p-0">
          <!-- ============================================= -->
          <!-- PENGURANGAN MODAL -->
          <!-- ============================================= -->

          <div style="background:#eb7d2d;
                      color:white;
                      padding:18px 24px;
                      font-size:20px;
                      font-weight:600;">

            PENGURANGAN MODAL

          </div>

          <div class="table-responsive">

            <table class="table table-bordered mb-0">

              <thead style="background:#f4f6f9;">

                <tr>

                  <th width="15%">Kode Akun</th>
                  <th>Nama Akun</th>
                  <th width="20%" class="text-end">
                    Nominal (Rp)
                  </th>

                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>331-140</td>
                  <td>Prive Pemilik</td>
                  <td class="text-end">5.000.000</td>
                </tr>
                <tr style="font-weight:bold;
                           background:#f8f9fa;">

                  <td colspan="2" class="text-center">
                    TOTAL PENGURANGAN MODAL
                  </td>

                  <td class="text-end">
                    5.000.000
                  </td>

                </tr>

              </tbody>

            </table>

          </div>
</div>
</div>
<div class="card">
<div class="card-body p-0">
          <!-- ============================================= -->
          <!-- MODAL AKHIR -->
          <!-- ============================================= -->

          <div style="background:#d86a1d;
                      color:white;
                      padding:22px 28px;
                      font-size:22px;
                      font-weight:bold;
                      text-align:right;">

            MODAL AKHIR :
            Rp 239.480.000

          </div>

        </div>

      </div>


         

        </div>

      </div>

    </div>

  </section>

</div>

<!-- ========================================================= -->
<!-- FOOTER -->
<!-- ========================================================= -->

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

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

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Close">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <!-- INFORMASI -->
          <div class="alert alert-warning mb-3"
               role="alert"
               style="font-size:0.9rem;">

            <b>Informasi:</b>
            Laporan akan menampilkan perubahan saldo modal berdasarkan transaksi pada akun ekuitas (COA) selama periode yang dipilih.

          </div>

          <!-- PERIODE -->
          <div class="mb-3">

            <label for="periode" class="form-label">
              Periode
            </label>

            <select
              name="periode"
              id="periode"
              class="form-select">

              <option value="">
                -- Pilih Periode --
              </option>

              <option value="mei-2026">
                Mei 2026
              </option>

              <option value="april-2026">
                April 2026
              </option>

              <option value="maret-2026">
                Maret 2026
              </option>

            </select>

          </div>

          <!-- STATUS -->
          <div class="mb-3">

            <label for="status" class="form-label">
              Status Posting
            </label>

            <select
              name="status"
              id="status"
              class="form-select">

              <option value="">
                -- Pilih Status --
              </option>

              <option value="final">
                Final Posting
              </option>

              <option value="draft">
                Draft
              </option>

            </select>

          </div>

        </div>

        <div class="modal-footer">

          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">

            Batal

          </button>

          <button
            type="submit"
            class="btn btn-info">

            Terapkan Filter

          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-labelledby="modalBantuanLabel"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title"
            id="modalBantuanLabel">

          Bantuan Laporan Perubahan Modal

        </h5>

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Close">
        </button>

      </div>

      <div class="modal-body">

        <p>
          Laporan Perubahan Modal digunakan untuk menampilkan perubahan nilai modal perusahaan dalam suatu periode akuntansi tertentu. Informasi pada laporan ini bersumber dari akun-akun ekuitas (COA Ekuitas) seperti modal pemilik, laba ditahan, tambahan investasi, maupun prive.
        </p>

        <p>
          Bagian <b>Modal Awal Periode</b> menunjukkan total saldo modal pada awal periode sebelum terjadi transaksi atau penyesuaian.
        </p>

        <p>
          Tabel utama menampilkan rincian akun ekuitas beserta nominal perubahan yang terjadi selama periode berjalan. Nilai positif menandakan penambahan modal, sedangkan nilai negatif menunjukkan pengurangan modal.
        </p>

        <p>
          Bagian <b>Total Perubahan</b> merupakan akumulasi seluruh mutasi akun modal selama periode tersebut.
        </p>

        <p>
          Nilai <b>Modal Akhir Periode</b> diperoleh dari:
        </p>

        <div class="alert alert-light border">

          <b>
            Modal Awal + Total Perubahan = Modal Akhir
          </b>

        </div>

        <p class="mb-0">
          Laporan ini membantu manajemen dan pemilik usaha dalam memantau pertumbuhan modal perusahaan serta mengetahui pengaruh laba, investasi, maupun prive terhadap kondisi ekuitas bisnis.
        </p>

      </div>

      <div class="modal-footer">

        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal">

          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
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

                <div class="col-md-6 text-md-end">
                  <b>Status Data:</b> Final Posting
                </div>

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

          <!-- ========================================================= -->
          <!-- LAPORAN PERUBAHAN MODAL -->
          <!-- ========================================================= -->

          <div class="card shadow-sm border-0">

            <div class="card-body p-4 bg-light">

              <div class="table-responsive">

                <table class="table table-bordered align-middle mb-0">

                  <!-- HEADER MODAL AWAL -->
                  <tr style="background:#eb7d2c; color:white; font-weight:bold;">

                    <td colspan="3" class="text-end py-3 fs-4">

                      MODAL AWAL PERIODE :
                      Rp 190.980.000

                    </td>

                  </tr>

                  <!-- HEADER TABLE -->
                  <thead>

                    <tr class="table-secondary text-center">

                      <th width="15%" class="py-3 fs-4">
                        Kode Akun
                      </th>

                      <th width="65%" class="py-3 fs-4">
                        Nama Akun
                      </th>

                      <th width="20%" class="py-3 fs-4">
                        Nominal (Rp)
                      </th>

                    </tr>

                  </thead>

                  <!-- BODY -->
                  <tbody>

                    <tr>

                      <td class="fs-4">
                        331-100
                      </td>

                      <td class="fs-4">
                        Modal Disetor / Modal Pemilik
                      </td>

                      <td class="text-end fs-4">
                        25.000.000
                      </td>

                    </tr>

                    <tr>

                      <td class="fs-4">
                        331-120
                      </td>

                      <td class="fs-4">
                        Tambahan Investasi Pemilik
                      </td>

                      <td class="text-end fs-4">
                        10.000.000
                      </td>

                    </tr>

                    <tr>

                      <td class="fs-4">
                        331-130
                      </td>

                      <td class="fs-4">
                        Laba Ditahan (Retained Earnings)
                      </td>

                      <td class="text-end fs-4">
                        18.500.000
                      </td>

                    </tr>

                    <tr>

                      <td class="fs-4">
                        331-140
                      </td>

                      <td class="fs-4">
                        Prive Pemilik
                      </td>

                      <td class="text-end fs-4 text-danger">
                        (5.000.000)
                      </td>

                    </tr>

                  </tbody>

                  <!-- TOTAL -->
                  <tfoot>

                    <tr class="table-light">

                      <td colspan="2"
                          class="text-center fw-bold fs-3 py-3">

                        TOTAL PERUBAHAN

                      </td>

                      <td class="text-end fw-bold fs-3">

                        48.500.000

                      </td>

                    </tr>

                    <!-- MODAL AKHIR -->
                    <tr style="background:#d96a1d; color:white; font-weight:bold;">

                      <td colspan="3"
                          class="text-end py-3 fs-4">

                        MODAL AKHIR PERIODE :
                        Rp 239.480.000

                      </td>

                    </tr>

                  </tfoot>

                </table>

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
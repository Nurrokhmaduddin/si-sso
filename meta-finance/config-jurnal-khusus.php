<?php $page = 'config-jurnal-khusus'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Konfigurasi Jurnal Khusus
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Jenis Jurnal:</b> Semua &nbsp;
                </div>                

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
        <div class="card">

          <div class="card-body">
            <div class="table-responsive">

              <!-- ===================================================== -->
              <!-- JURNAL KHUSUS - SPECIAL JOURNAL (ERP STYLE) -->
              <!-- ===================================================== -->
              <!--
                DESIGN LOGIC:
                - Header table = ringkasan transaksi
                - Detail akun ada di modal (drill-down)
                - Cocok untuk audit & ERP high transaction volume
              -->

              <table class="table table-bordered table-striped table-sm datatables1">

                <thead>
                  <tr class="text-uppercase text-center">
                    <th>No</th>
                    <th>Jenis Jurnal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td class="text-center">4</td>
                    <td>Penjualan Kredit</td>
                    <td>Penjualan barang dagang secara kredit kepada customer <i>[id_lawan_transaksi]</i></td>
                    <td class="text-center">

                     <button class="btn btn-sm btn-outline-info"
                     data-bs-toggle="modal"
                     data-bs-target="#modalDetailJurnal"
                     data-debit='[
                     {"coa":"103","nama":"Piutang Usaha","value":7000000}
                     ]'
                     data-kredit='[
                     {"coa":"401","nama":"Penjualan","value":7000000}
                     ]'
                     onclick="showDetail(this)">
                     <i class="fas fa-eye"></i>
                   </button>
                    <button class="btn btn-sm btn-outline-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEditJurnal"
                    data-jenis="Penjualan Kredit"
                    data-keterangan="Penjualan secara kredit kepada customer"
                    data-debit='[
                    {"coa":"103","nama":"Piutang Usaha"}
                    ]'
                    data-kredit='[
                    {"coa":"401","nama":"Penjualan"}
                    ]'
                    onclick="editJurnal(this)">
                    <i class="fas fa-edit"></i>
                  </button>

                </td>
              </tr>


              <tr>
                <td class="text-center">3</td>
                <td>Pembelian Kredit</td>
                <td>Pembelian persediaan secara kredit kepada supplier <i>[id_lawan_transaksi]</i></td>
                <td class="text-center">

                  <button class="btn btn-sm btn-outline-info"
                  data-bs-toggle="modal"
                  data-bs-target="#modalDetailJurnal"
                  data-debit='[
                  {"coa":"104","nama":"Persediaan Barang Dagang","value":5000000}
                  ]'
                  data-kredit='[
                  {"coa":"201","nama":"Hutang Usaha","value":5000000}
                  ]'
                  onclick="showDetail(this)">
                  <i class="fas fa-eye"></i>
                </button>

                <button class="btn btn-sm btn-outline-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalEditJurnal"
                data-jenis="Pembelian Kredit"
                data-keterangan="Pembelian barang dagang secara kredit"
                data-debit='[
                {"coa":"104","nama":"Persediaan Barang Dagang"}
                ]'
                data-kredit='[
                {"coa":"201","nama":"Hutang Usaha"}
                ]'
                onclick="editJurnal(this)">
                <i class="fas fa-edit"></i>
              </button>

            </td>
          </tr>


          <tr>
            <td class="text-center">6</td>
            <td>Penerimaan Kas</td>
            <td>Pelunasan piutang customer <i>[id_lawan_transaksi]</i></td>
            <td class="text-center">

             <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Kas","value":3000000}
      ]'
      data-kredit='[
        {"coa":"103","nama":"Piutang Usaha","value":3000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

            <button class="btn btn-sm btn-outline-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalEditJurnal"
            data-jenis="Penerimaan Kas"
            data-keterangan="Pelunasan piutang pelanggan"
            data-debit='[
            {"coa":"101","nama":"Kas"}
            ]'
            data-kredit='[
            {"coa":"103","nama":"Piutang Usaha"}
            ]'
            onclick="editJurnal(this)">
            <i class="fas fa-edit"></i>
          </button>

        </td>
      </tr>


      <tr>
        <td class="text-center">5</td>
        <td>Pengeluaran Kas</td>
        <td>Pembayaran hutang supplier <i>[id_lawan_transaksi]</i></td>
        <td class="text-center">

          <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"201","nama":"Hutang Usaha","value":2500000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":2500000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

        <button class="btn btn-sm btn-outline-primary"
        data-bs-toggle="modal"
        data-bs-target="#modalEditJurnal"
        data-jenis="Pengeluaran Kas"
        data-keterangan="Pembayaran hutang supplier"
        data-debit='[
        {"coa":"201","nama":"Hutang Usaha"}
        ]'
        data-kredit='[
        {"coa":"101","nama":"Kas"}
        ]'
        onclick="editJurnal(this)">
        <i class="fas fa-edit"></i>
      </button>

    </td>
  </tr>


  <tr>
    <td class="text-center">2</td>
    <td>Penjualan Tunai</td>
    <td>Penjualan barang dagang tunai kepada customer <i>[id_lawan_transaksi]</i></td>
    <td class="text-center">

      <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Kas","value":4500000}
      ]'
      data-kredit='[
        {"coa":"401","nama":"Penjualan","value":4500000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <button class="btn btn-sm btn-outline-primary"
    data-bs-toggle="modal"
    data-bs-target="#modalEditJurnal"
    data-jenis="Penjualan Tunai"
    data-keterangan="Penjualan tunai"
    data-debit='[
    {"coa":"101","nama":"Kas"}
    ]'
    data-kredit='[
    {"coa":"401","nama":"Penjualan"}
    ]'
    onclick="editJurnal(this)">
    <i class="fas fa-edit"></i>
  </button>

</td>
</tr>


<tr>
  <td class="text-center">1</td>
  <td>Pembelian Tunai</td>
  <td>Pembelian persedian tunai kepada supplier <i>[id_lawan_transaksi]</i></td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":3200000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":3200000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

  <button class="btn btn-sm btn-outline-primary"
  data-bs-toggle="modal"
  data-bs-target="#modalEditJurnal"
  data-jenis="Pembelian Tunai"
  data-keterangan="Pembelian tunai barang dagang"
  data-debit='[
  {"coa":"104","nama":"Persediaan Barang Dagang"}
  ]'
  data-kredit='[
  {"coa":"101","nama":"Kas"}
  ]'
  onclick="editJurnal(this)">
  <i class="fas fa-edit"></i>
</button>

</td>
</tr>


<tr>
  <td class="text-center">7</td>
  <td>Retur Pembelian</td>
  <td>Retur barang ke supplier <i>[id_lawan_transaksi]</i></td>
  <td class="text-center">

     <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"201","nama":"Hutang Usaha","value":1000000}
      ]'
      data-kredit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":1000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

  <button class="btn btn-sm btn-outline-primary"
  data-bs-toggle="modal"
  data-bs-target="#modalEditJurnal"
  data-jenis="Retur Pembelian"
  data-keterangan="Retur barang ke supplier"
  data-debit='[
  {"coa":"201","nama":"Hutang Usaha"}
  ]'
  data-kredit='[
  {"coa":"104","nama":"Persediaan Barang Dagang"}
  ]'
  onclick="editJurnal(this)">
  <i class="fas fa-edit"></i>
</button>

</td>
</tr>


<tr>
  <td class="text-center">8</td>
  <td>Retur Penjualan</td>
  <td>Retur barang dari customer <i>[id_lawan_transaksi]</i></td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"402","nama":"Retur Penjualan","value":800000}
      ]'
      data-kredit='[
        {"coa":"103","nama":"Piutang Usaha","value":800000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

  <button class="btn btn-sm btn-outline-primary"
  data-bs-toggle="modal"
  data-bs-target="#modalEditJurnal"
  data-jenis="Retur Penjualan"
  data-keterangan="Retur barang dari customer"
  data-debit='[
  {"coa":"402","nama":"Retur Penjualan"}
  ]'
  data-kredit='[
  {"coa":"103","nama":"Piutang Usaha"}
  ]'
  onclick="editJurnal(this)">
  <i class="fas fa-edit"></i>
</button>

</td>
</tr>


<!-- ========================= -->
<!-- 1. JURNAL PENYUSUTAN ASET -->
<!-- ========================= -->
<tr>
  <td class="text-center">11</td>
  <td>Perolehan Aset Tetap</td>
  <td>Pencatatan pembelian/perolehan aset tetap perusahaan</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"141","nama":"Aset Tetap","value":1000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas / Bank","value":1000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Perolehan Aset Tetap"
      data-keterangan="Pencatatan pembelian aset tetap"
      data-debit='[
        {"coa":"141","nama":"Aset Tetap","value":1000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas / Bank","value":1000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>

<tr>
  <td class="text-center">12</td>
  <td>JPY - Penyusutan Aset Tetap</td>
  <td>Pengakuan beban penyusutan aset tetap periode berjalan</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"501","nama":"Beban Penyusutan","value":1000000}
      ]'
      data-kredit='[
        {"coa":"151","nama":"Akumulasi Penyusutan","value":1000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Penyusutan Aset Tetap"
      data-keterangan="Penyesuaian beban penyusutan aset tetap"
      data-debit='[
        {"coa":"501","nama":"Beban Penyusutan","value":1000000}
      ]'
      data-kredit='[
        {"coa":"151","nama":"Akumulasi Penyusutan","value":1000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>



<!-- =============================== -->
<!-- 2. BEBAN DIBAYAR DIMUKA -->
<!-- =============================== -->
<tr>
  <td class="text-center">13</td>
  <td>Pembayaran Beban Dimuka</td>
  <td>Pengeluaran kas atas pembayaran sewa dibayar dimuka</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"121","nama":"Sewa Dibayar Dimuka","value":1000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas / Bank","value":1000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Pembayaran Beban Dimuka"
      data-keterangan="Pembayaran sewa dibayar dimuka"
      data-debit='[
        {"coa":"121","nama":"Sewa Dibayar Dimuka","value":1000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas / Bank","value":1000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>

<tr>
  <td class="text-center">14</td>
  <td>JPY - Beban Dibayar Dimuka</td>
  <td>Pengakuan beban atas pembayaran dimuka yang telah terpakai</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"502","nama":"Beban Sewa","value":2000000}
      ]'
      data-kredit='[
        {"coa":"121","nama":"Sewa Dibayar Dimuka","value":2000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Penyesuaian Beban Dibayar Dimuka"
      data-keterangan="Pengakuan beban sewa periode berjalan"
      data-debit='[
        {"coa":"502","nama":"Beban Sewa","value":2000000}
      ]'
      data-kredit='[
        {"coa":"121","nama":"Sewa Dibayar Dimuka","value":2000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>



<!-- ================================= -->
<!-- 3. PENDAPATAN DITERIMA DIMUKA -->
<!-- ================================= -->
<tr>
  <td class="text-center">15</td>
  <td>Penerimaan Pendapatan Dimuka</td>
  <td>Penerimaan kas atas jasa yang belum menjadi hak perusahaan</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Kas / Bank","value":2000000}
      ]'
      data-kredit='[
        {"coa":"211","nama":"Pendapatan Diterima Dimuka","value":2000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Pendapatan Diterima Dimuka"
      data-keterangan="Penerimaan pendapatan dimuka"
      data-debit='[
        {"coa":"101","nama":"Kas / Bank","value":2000000}
      ]'
      data-kredit='[
        {"coa":"211","nama":"Pendapatan Diterima Dimuka","value":2000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>

<tr>
  <td class="text-center">16</td>
  <td>JPY - Pendapatan Diterima Dimuka</td>
  <td>Pengakuan pendapatan yang sudah menjadi hak perusahaan</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"211","nama":"Pendapatan Diterima Dimuka","value":3000000}
      ]'
      data-kredit='[
        {"coa":"401","nama":"Pendapatan Jasa","value":3000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Penyesuaian Pendapatan Dimuka"
      data-keterangan="Pengakuan pendapatan periode berjalan"
      data-debit='[
        {"coa":"211","nama":"Pendapatan Diterima Dimuka","value":3000000}
      ]'
      data-kredit='[
        {"coa":"401","nama":"Pendapatan Jasa","value":3000000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>



<!-- ============================== -->
<!-- 4. PENYESUAIAN PERSEDIAAN -->
<!-- ============================== -->
<tr>
  <td class="text-center">17</td>
  <td>JPY - Persediaan Bertambah</td>
  <td>Penyesuaian karena nilai persediaan akhir lebih besar dari pencatatan sebelumnya</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":1500000}
      ]'
      data-kredit='[
        {"coa":"510","nama":"Harga Pokok Penjualan","value":1500000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Penyesuaian Persediaan Bertambah"
      data-keterangan="Penyesuaian kenaikan nilai persediaan akhir"
      data-debit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":1500000}
      ]'
      data-kredit='[
        {"coa":"510","nama":"Harga Pokok Penjualan","value":1500000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>
<tr>
  <td class="text-center">18</td>
  <td>JPY - Persediaan Berkurang</td>
  <td>Penyesuaian karena nilai persediaan akhir lebih kecil dari pencatatan sebelumnya</td>
  <td class="text-center">

    <!-- DETAIL -->
    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"510","nama":"Harga Pokok Penjualan","value":1500000}
      ]'
      data-kredit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":1500000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

    <!-- EDIT -->
    <button class="btn btn-sm btn-outline-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalEditJurnal"
      data-jenis="Penyesuaian Persediaan Berkurang"
      data-keterangan="Penyesuaian penurunan nilai persediaan akhir"
      data-debit='[
        {"coa":"510","nama":"Harga Pokok Penjualan","value":1500000}
      ]'
      data-kredit='[
        {"coa":"104","nama":"Persediaan Barang Dagang","value":1500000}
      ]'
      onclick="editJurnal(this)">
      <i class="fas fa-edit"></i>
    </button>

  </td>
</tr>
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
  <!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
         <!--  <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div> -->
          <div class="mb-3">
            <label for="status" class="form-label">Kelompok Akun</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih --</option>
              <option value="Aktif">A</option>
              <option value="NonAktif">B</option>
              <option value="Aktif">D</option>
              <option value="NonAktif">E</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">
          Tambah Data COA (Chart of Account)
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="" method="POST">

        <div class="modal-body">

          <!-- INFO -->
          <div class="alert alert-info mb-3 py-2" style="font-size:0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            Form ini digunakan untuk menambahkan <b>master akun (COA)</b> perusahaan.
            Pastikan struktur akun sesuai standar akuntansi.
          </div>

          <!-- ===================================================== -->
          <!-- KOLOM FORM COA -->
          <!-- ===================================================== -->

          <!-- Kelompok Akun -->
          <div class="mb-3">
            <label class="form-label">
              Kelompok Akun <span class="text-danger">*</span>
            </label>
            <select class="form-select" name="kelompok_akun" required>
              <option value="">-- Pilih Kelompok Akun --</option>
              <option value="asset">Aset</option>
              <option value="liability">Liabilitas</option>
              <option value="equity">Modal</option>
              <option value="revenue">Pendapatan</option>
              <option value="expense">Beban</option>
            </select>
          </div>

          <!-- Kode Akun -->
          <div class="mb-3">
            <label class="form-label">
              Kode Akun (COA) <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="kode_akun"
              placeholder="Contoh: 111-001 / 411-001" required>
          </div>

          <!-- Nama Akun -->
          <div class="mb-3">
            <label class="form-label">
              Nama Akun <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name="nama_akun"
              placeholder="Contoh: Kas, Bank, Piutang Usaha" required>
          </div>

          <!-- Deskripsi -->
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="4"
              placeholder="Penjelasan fungsi akun, digunakan untuk transaksi apa..."></textarea>
          </div>

          <!-- CATATAN -->
          <div class="alert alert-warning mb-0 py-2" style="font-size:0.85rem;">
            <i class="fas fa-exclamation-triangle me-1"></i>
            Pastikan kode akun tidak duplikat untuk menjaga konsistensi COA.
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
          petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
        </p>
        <p>
          Misalnya:  
          - Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.  
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Reset -->
<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_hapus_akun.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_akun" id="hapus_id_akun">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

          <!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- Modal Gagal -->
<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal DetailJurnal -->
<div class="modal fade" id="modalDetailJurnal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Contoh Detail Jurnal</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h6 id="detailJenis"></h6>
        <p id="detailKeterangan" class="text-muted"></p>

        <hr>

        <!-- LEDGER STYLE -->
        <table class="table table-sm table-bordered">
          <thead class="text-center">
            <tr>
              <th>COA</th>
              <th>Nama Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody id="ledgerBody">
            <!-- isi dinamis -->
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>
<!-- Modal EditJurnal -->
<div class="modal fade" id="modalEditJurnal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Edit Jurnal Transaksi</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

     <div class="modal-body">

        <!-- HEADER -->
        <div class="mb-2">
          <label>Jenis Jurnal</label>
          <input type="text" id="editJenis" class="form-control" readonly>
        </div>

        <div class="mb-3">
          <label>Keterangan</label>
          <input type="text" id="editKeterangan" class="form-control">
        </div>

        <hr>

        <!-- GRID 2 KOLOM -->
        <div class="row">

          <!-- DEBIT -->
          <div class="col-md-6">
            <h6 class="text-center">DEBIT</h6>
            <table class="table table-sm">
              <tbody id="debitBody"></tbody>
            </table>
          </div>

          <!-- KREDIT -->
          <div class="col-md-6">
            <h6 class="text-center">KREDIT</h6>
            <table class="table table-sm">
              <tbody id="kreditBody"></tbody>
            </table>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Simpan Jurnal</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
<script>
function showDetail(el) {

  const debit = JSON.parse(el.dataset.debit || "[]");
  const kredit = JSON.parse(el.dataset.kredit || "[]");

  let html = '';

  debit.forEach(d => {
    html += `
      <tr>
        <td>${d.coa}</td>
        <td>${d.nama}</td>
        <td class="text-end">${(d.value || 0).toLocaleString()}</td>
        <td class="text-end">-</td>
      </tr>
    `;
  });

  kredit.forEach(d => {
    html += `
      <tr>
        <td>${d.coa}</td>
        <td>${d.nama}</td>
        <td class="text-end">-</td>
        <td class="text-end">${(d.value || 0).toLocaleString()}</td>
      </tr>
    `;
  });

  document.getElementById('ledgerBody').innerHTML = html;
}

function editJurnal(el) {

  const jenis = el.dataset.jenis;
  const keterangan = el.dataset.keterangan;

  const debit = JSON.parse(el.dataset.debit || "[]");
  const kredit = JSON.parse(el.dataset.kredit || "[]");

  document.getElementById('editJenis').value = jenis;
  document.getElementById('editKeterangan').value = keterangan;

  // ================= DEBIT =================
  let debitHTML = '';
  debit.forEach((d, i) => {
    debitHTML += `
      <tr>
        <td style="width:60px;"><i>Debit_${i+1}</i></td>
        <td>
          <select class="form-select form-select-sm">
            ${coaOptions(d.coa)}
          </select>
        </td>
      </tr>
    `;
  });

  document.getElementById('debitBody').innerHTML = debitHTML;

  // ================= KREDIT =================
  let kreditHTML = '';
  kredit.forEach((d, i) => {
    kreditHTML += `
      <tr>
        <td style="width:60px;"><i>Kredit_${i+1}</i></td>
        <td>
          <select class="form-select form-select-sm">
            ${coaOptions(d.coa)}
          </select>
        </td>
      </tr>
    `;
  });

  document.getElementById('kreditBody').innerHTML = kreditHTML;
}
function coaOptions(selected) {
  const coaList = [

    // ASET
    {code:"101", name:"Kas"},
    {code:"102", name:"Bank"},
    {code:"103", name:"Piutang Usaha"},
    {code:"104", name:"Persediaan Barang Dagang"},
    {code:"105", name:"Perlengkapan"},
    {code:"121", name:"Sewa Dibayar Dimuka"},
    {code:"141", name:"Aset Tetap"},
    {code:"151", name:"Akumulasi Penyusutan"},

    // KEWAJIBAN
    {code:"201", name:"Hutang Usaha"},
    {code:"202", name:"Hutang Bank"},
    {code:"203", name:"Hutang Pajak"},
    {code:"211", name:"Pendapatan Diterima Dimuka"},

    // MODAL
    {code:"301", name:"Modal"},

    // PENDAPATAN
    {code:"401", name:"Pendapatan Jasa"},
    {code:"402", name:"Retur Penjualan"},

    // BEBAN
    {code:"501", name:"Beban Penyusutan"},
    {code:"502", name:"Beban Sewa"},
    {code:"510", name:"Harga Pokok Penjualan"}

];

  return coaList.map(c => `
    <option value="${c.code}" ${c.code==selected?'selected':''}>
      ${c.code} - ${c.name}
    </option>
  `).join('');
}
</script>
<?php $page = 'laporan_laba_rugi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Laporan Laba Rugi
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
                  <b>Periode Tanggal:</b> 01 Jan 2026 - 09 Mar 2026
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Database
                </button>
              </div>
            </div>
            
          </div>



         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        
       <thead>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="3"><strong>PENJUALAN</strong></td>
                  </tr>
                  <tr class="parent-row" data-id="jual" data-widget="expandable-table" aria-expanded="false">
                    <td></td>
                    <td>Penjualan Bruto (Total Faktur harga jual - total HPP faktur)</td>
                    <td align="right">154.900.892,51</td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td colspan="3">
                      <div class="table-responsive" style="display: none;">
                        <table id="tabel_data_jual" class="table table-bordered table-striped table-sm">
                          <thead>
                            <tr align="center">
                              <th>No.</th>
                              <th>Alamat Gudang</th>
                              <th>Tanggal Penjualan</th>
                              <th>No Faktur</th>
                              <th>Toko</th>
                              <th>Sales</th>
                              <th>Total Harga Penjualan</th>
                              <th>Total Harga Beli</th>
                              <th>Margin Laba</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr align="center">
                              <th colspan="6">Total Penjualan</th>
                              <th style="text-align: right !important;">0</th>
                              <th style="text-align: right !important;">0</th>
                              <th style="text-align: right !important;">0</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </td>
                  </tr>
                  <tr class="parent-row" data-id="ret_jual" data-widget="expandable-table" aria-expanded="false">
                    <td></td>
                    <td>Retur Penjualan (Total Faktur harga retur - total HPP retur)</td>
                    <td align="right">(7.556.648,24)</td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td colspan="3">
                      <div class="table-responsive" style="display: none;">
                        <table id="tabel_data_ret_jual" class="table table-bordered table-striped table-sm">
                          <thead>
                            <tr align="center">
                              <th>No.</th>
                              <th>Alamat Gudang</th>
                              <th>Tanggal Retur</th>
                              <th>Nomor Retur</th>
                              <th>Toko</th>
                              <th>Sales</th>
                              <th>Total Harga Retur</th>
                              <th>Total Harga Beli</th>
                              <th>Margin Laba</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr align="center">
                              <th colspan="6">Total Retur Penjualan</th>
                              <th style="text-align: right !important;">0</th>
                              <th style="text-align: right !important;">0</th>
                              <th style="text-align: right !important;">0</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </td>
                  </tr>
                  <tr class="parent-row" data-id="potongan" data-widget="expandable-table" aria-expanded="false">
                    <td></td>
                    <td>Biaya potongan/voucher tiap pelunasan faktur penjualan</td>
                    <td align="right">(1.553.432,12)</td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td colspan="3">
                      <div class="table-responsive" style="display: none;">
                        <table id="tabel_data_potongan" class="table table-bordered table-striped table-sm">
                          <thead>
                            <tr align="center">
                              <th>No.</th>
                              <th>No Faktur</th>
                              <th>Toko Penerima</th>
                              <th>Sales</th>
                              <th>Keterangan</th>
                              <th>Biaya Potongan (Rp)</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr align="center">
                              <th colspan="5">Total (Rp)</th>
                              <th style="text-align: right !important;">0</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </td>
                  </tr>
                  <tr class="parent-row" data-id="operasional" data-widget="expandable-table" aria-expanded="false">
                    <td colspan="2"><strong>BIAYA OPERASIONAL</strong></td>
                    <td align="right">(167.467.454,00)</td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td colspan="3">
                      <div class="table-responsive" style="display: none;">
                        <table id="tabel_data_operasional" class="table table-bordered table-striped table-sm">
                          <thead>
                            <tr align="center">
                              <th width="5px">No.</th>
                              <th>Jenis Biaya</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr align="center">
                              <th colspan="2">Total (Rp)</th>
                              <th style="text-align: right !important;">0</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right"><strong>LABA/RUGI BERSIH</strong></td>
                    <th style="text-align: right !important; border-top:solid 2px;">-21.676.641,86</th>
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
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
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
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
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


<?php include('5script.php'); ?>
<?php $page = 'finance-jurnal'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Jurnal Akuntansi
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
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
                </button>                
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Rentang Tanggal:</b> 2023 &nbsp;
                </div>       
                <div class="col-md-6">
                  <b>Sumber:</b> Semua
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>  -->   
              </div>
            </div>

          </div>
        <!-- ========== CARD : Tabel  ========== -->
          <div class="card">
            <!-- <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Judul tabel ini</h5>    
              <div class="ms-auto">                
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div> -->

            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5px">No.</th>
                    <th>Tanggal</th>
                    <th>Jurnal ID</th>
                    <th>Ref</th>
                    <th>Sumber</th>
                    <th>Keterangan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>1</td>
                    <td>2026-03-26</td>
                    <td>JRN-001</td>
                    <td>ORD-001</td>
                    <td><span class="badge bg-success">SALES</span></td>
                    <td>Penjualan Meja 01</td>
                    <td>Rp 85.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal1">
                        Detail
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>2026-03-26</td>
                    <td>JRN-002</td>
                    <td>ORD-001</td>
                    <td><span class="badge bg-warning text-dark">HPP</span></td>
                    <td>HPP Penjualan Meja 01</td>
                    <td>Rp 40.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal2">
                        Detail
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>2026-03-26</td>
                    <td>JRN-003</td>
                    <td>PB-001</td>
                    <td><span class="badge bg-primary">PEMBELIAN</span></td>
                    <td>Pembelian Bahan</td>
                    <td>Rp 150.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal3">
                        Detail
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>2026-03-26</td>
                    <td>JRN-004</td>
                    <td>ORD-002</td>
                    <td><span class="badge bg-success">SALES</span></td>
                    <td>Penjualan Meja 02</td>
                    <td>Rp 120.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal4">
                        Detail
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>2026-03-26</td>
                    <td>JRN-005</td>
                    <td>EXP-001</td>
                    <td><span class="badge bg-danger">BEBAN</span></td>
                    <td>Beban Listrik</td>
                    <td>Rp 50.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal5">
                        Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>2026-03-26</td>
                    <td>JRN-006</td>
                    <td>PB-002</td>
                    <td><span class="badge bg-secondary">HUTANG</span></td>
                    <td>Pembelian Bahan (Belum Bayar)</td>
                    <td>Rp 200.000</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailJurnal6">
                        Detail
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>


        <!-- ========== CARD : Tabel  ========== -->
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Judul tabel ini</h5>    
              <div class="ms-auto">                
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5px">No.</th>
      <th>Jurnal ID</th>
      <th>Tanggal</th>
      <th>Ref</th>
      <th>Akun</th>
      <th>Posisi</th>
      <th>Nominal</th>
      <th>Keterangan</th>
                  </tr>
                  
                </thead>
                <tbody>
                  

    <!-- JRN-001 (Penjualan) -->
    <tr>
      <td>1</td>
      <td>JRN-001</td>
      <td>2026-03-26</td>
      <td>ORD-001</td>
      <td>Kas</td>
      <td class="text-success">DEBIT</td>
      <td>85.000</td>
      <td>Pembayaran customer</td>
    </tr>
    <tr>
      <td>2</td>
      <td>JRN-001</td>
      <td>2026-03-26</td>
      <td>ORD-001</td>
      <td>Pendapatan Penjualan</td>
      <td class="text-danger">KREDIT</td>
      <td>85.000</td>
      <td>Penjualan menu</td>
    </tr>

    <!-- JRN-002 (HPP) -->
    <tr>
      <td>3</td>
      <td>JRN-002</td>
      <td>2026-03-26</td>
      <td>ORD-001</td>
      <td>HPP</td>
      <td class="text-success">DEBIT</td>
      <td>40.000</td>
      <td>Biaya bahan terpakai</td>
    </tr>
    <tr>
      <td>4</td>
      <td>JRN-002</td>
      <td>2026-03-26</td>
      <td>ORD-001</td>
      <td>Persediaan Bahan</td>
      <td class="text-danger">KREDIT</td>
      <td>40.000</td>
      <td>Pengurangan stok</td>
    </tr>

    <!-- JRN-003 (Pembelian Bahan) -->
    <tr>
      <td>5</td>
      <td>JRN-003</td>
      <td>2026-03-26</td>
      <td>PB-001</td>
      <td>Persediaan Bahan</td>
      <td class="text-success">DEBIT</td>
      <td>150.000</td>
      <td>Pembelian bahan baku</td>
    </tr>
    <tr>
      <td>6</td>
      <td>JRN-003</td>
      <td>2026-03-26</td>
      <td>PB-001</td>
      <td>Kas</td>
      <td class="text-danger">KREDIT</td>
      <td>150.000</td>
      <td>Pembayaran ke supplier</td>
    </tr>

    <!-- JRN-004 (Penjualan kedua) -->
    <tr>
      <td>7</td>
      <td>JRN-004</td>
      <td>2026-03-26</td>
      <td>ORD-002</td>
      <td>Kas</td>
      <td class="text-success">DEBIT</td>
      <td>120.000</td>
      <td>Pembayaran customer</td>
    </tr>
    <tr>
      <td>8</td>
      <td>JRN-004</td>
      <td>2026-03-26</td>
      <td>ORD-002</td>
      <td>Pendapatan Penjualan</td>
      <td class="text-danger">KREDIT</td>
      <td>120.000</td>
      <td>Penjualan menu</td>
    </tr>

    <!-- HPP tambahan -->
    <tr>
      <td>9</td>
      <td>JRN-004</td>
      <td>2026-03-26</td>
      <td>ORD-002</td>
      <td>HPP</td>
      <td class="text-success">DEBIT</td>
      <td>60.000</td>
      <td>Biaya bahan</td>
    </tr>
    <tr>
      <td>10</td>
      <td>JRN-004</td>
      <td>2026-03-26</td>
      <td>ORD-002</td>
      <td>Persediaan Bahan</td>
      <td class="text-danger">KREDIT</td>
      <td>60.000</td>
      <td>Pengurangan stok</td>
    </tr>

    <!-- Tambahan biaya operasional -->
    <tr>
      <td>11</td>
      <td>JRN-005</td>
      <td>2026-03-26</td>
      <td>EXP-001</td>
      <td>Beban Listrik</td>
      <td class="text-success">DEBIT</td>
      <td>50.000</td>
      <td>Biaya operasional</td>
    </tr>

                </tbody>
              </table>


              </div>
            </div>
            <!-- /.card-body -->
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
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Jurnal Manual</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <!-- HEADER -->
          <div class="row mb-3">
            <div class="col-md-4">
              <label>Tanggal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Referensi</label>
              <input type="text" class="form-control" placeholder="Contoh: ADJ-001">
            </div>

            <div class="col-md-4">
              <label>Sumber</label>
              <select class="form-control">
                <option>MANUAL</option>
                <option>ADJUSTMENT</option>
                <option>LAINNYA</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" class="form-control" placeholder="Isi keterangan jurnal">
          </div>

          <hr>

          <!-- DETAIL -->
          <table class="table table-bordered" id="jurnalDetailTable">
            <thead class="table-light text-center">
              <tr>
                <th>Akun</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <select class="form-control">
                    <option>Kas</option>
                    <option>Bank</option>
                    <option>Pendapatan</option>
                    <option>Beban</option>
                    <option>Hutang</option>
                    <option>Persediaan</option>
                  </select>
                </td>
                <td><input type="number" class="form-control debit"></td>
                <td><input type="number" class="form-control kredit"></td>
                <td class="text-center">
                  <button type="button" class="btn btn-danger btn-sm btn-hapus">X</button>
                </td>
              </tr>

            </tbody>
          </table>

          <button type="button" class="btn btn-success btn-sm" onclick="tambahBaris()">+ Tambah Baris</button>

          <hr>

          <!-- TOTAL -->
          <div class="d-flex justify-content-between">
            <b>Total Debit: <span id="totalDebit">0</span></b>
            <b>Total Kredit: <span id="totalKredit">0</span></b>
          </div>

          <div id="balanceInfo" class="mt-2 text-danger">
            ⚠️ Jurnal belum balance
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Jurnal</button>
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


<div class="modal fade" id="detailJurnal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Jurnal - JRN-001</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kas</td>
              <td class="text-success">85.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Pendapatan Penjualan</td>
              <td>-</td>
              <td class="text-danger">85.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="detailJurnal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Detail Jurnal - JRN-002</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>HPP</td>
              <td class="text-success">40.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Persediaan Bahan</td>
              <td>-</td>
              <td class="text-danger">40.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="detailJurnal3" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Detail Jurnal - JRN-003 (Pembelian Bahan)</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Persediaan Bahan</td>
              <td class="text-success">150.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Kas</td>
              <td>-</td>
              <td class="text-danger">150.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="detailJurnal4" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Detail Jurnal - JRN-004 (Penjualan + HPP)</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kas</td>
              <td class="text-success">120.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>HPP</td>
              <td class="text-success">60.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Pendapatan Penjualan</td>
              <td>-</td>
              <td class="text-danger">120.000</td>
            </tr>
            <tr>
              <td>Persediaan Bahan</td>
              <td>-</td>
              <td class="text-danger">60.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="detailJurnal5" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Detail Jurnal - JRN-005 (Beban Listrik)</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Beban Listrik</td>
              <td class="text-success">50.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Kas</td>
              <td>-</td>
              <td class="text-danger">50.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>



<div class="modal fade" id="detailJurnal6" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title">Detail Jurnal - JRN-006 (Pembelian Hutang)</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Akun</th>
              <th>Debit</th>
              <th>Kredit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Persediaan Bahan</td>
              <td class="text-success">200.000</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Hutang Supplier</td>
              <td>-</td>
              <td class="text-danger">200.000</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
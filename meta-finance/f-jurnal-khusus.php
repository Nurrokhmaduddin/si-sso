<?php $page = 'f-jurnal-khusus'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Data Jurnal Khusus
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
                  <b>Rentang Periode:</b> Semua &nbsp;
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
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
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
                    <th>Tanggal</th>
                    <th>Jenis Jurnal</th>
                    <th>No Referensi</th>
                    <th>Keterangan</th>
                    <th>Total Nilai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td class="text-center">1</td>
                    <td>01/02/2026</td>
                    <td><span class="badge bg-primary">Penjualan</span></td>
                    <td>SJ-001</td>
                    <td>Penjualan tunai coffee shop</td>
                    <td class="text-end text-success">Rp 5.000.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail1">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">2</td>
                    <td>02/02/2026</td>
                    <td><span class="badge bg-success">Pembelian</span></td>
                    <td>PB-001</td>
                    <td>Beli bahan baku supplier A</td>
                    <td class="text-end text-danger">Rp 3.200.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail2">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">3</td>
                    <td>03/02/2026</td>
                    <td><span class="badge bg-info">Penerimaan Kas</span></td>
                    <td>KK-001</td>
                    <td>Pelunasan piutang pelanggan</td>
                    <td class="text-end text-success">Rp 2.500.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail3">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">4</td>
                    <td>04/02/2026</td>
                    <td><span class="badge bg-danger">Pengeluaran Kas</span></td>
                    <td>KM-001</td>
                    <td>Pembayaran listrik & operasional</td>
                    <td class="text-end text-danger">Rp 1.200.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail4">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">5</td>
                    <td>05/02/2026</td>
                    <td><span class="badge bg-primary">Penjualan</span></td>
                    <td>SJ-002</td>
                    <td>Penjualan kredit customer B</td>
                    <td class="text-end text-success">Rp 7.800.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail5">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">6</td>
                    <td>06/02/2026</td>
                    <td><span class="badge bg-success">Pembelian</span></td>
                    <td>PB-002</td>
                    <td>Pembelian stok gudang</td>
                    <td class="text-end text-danger">Rp 4.500.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail6">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">7</td>
                    <td>07/02/2026</td>
                    <td><span class="badge bg-info">Penerimaan Kas</span></td>
                    <td>KK-002</td>
                    <td>Setoran modal tambahan</td>
                    <td class="text-end text-success">Rp 10.000.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail7">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">8</td>
                    <td>08/02/2026</td>
                    <td><span class="badge bg-danger">Pengeluaran Kas</span></td>
                    <td>KM-002</td>
                    <td>Biaya transport distribusi</td>
                    <td class="text-end text-danger">Rp 900.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail8">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">9</td>
                    <td>09/02/2026</td>
                    <td><span class="badge bg-primary">Penjualan</span></td>
                    <td>SJ-003</td>
                    <td>Penjualan marketplace</td>
                    <td class="text-end text-success">Rp 6.300.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail9">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">10</td>
                    <td>10/02/2026</td>
                    <td><span class="badge bg-success">Pembelian</span></td>
                    <td>PB-003</td>
                    <td>Beli bahan kemasan</td>
                    <td class="text-end text-danger">Rp 1.800.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail10">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">11</td>
                    <td>11/02/2026</td>
                    <td><span class="badge bg-info">Penerimaan Kas</span></td>
                    <td>KK-003</td>
                    <td>Pembayaran invoice customer</td>
                    <td class="text-end text-success">Rp 3.700.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail11">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">12</td>
                    <td>12/02/2026</td>
                    <td><span class="badge bg-danger">Pengeluaran Kas</span></td>
                    <td>KM-003</td>
                    <td>Gaji karyawan mingguan</td>
                    <td class="text-end text-danger">Rp 5.500.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail12">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">13</td>
                    <td>13/02/2026</td>
                    <td><span class="badge bg-primary">Penjualan</span></td>
                    <td>SJ-004</td>
                    <td>Penjualan grosir pelanggan tetap</td>
                    <td class="text-end text-success">Rp 9.200.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetail13">
                        <i class="fas fa-eye"></i>
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
<?php include('5script.php'); ?>
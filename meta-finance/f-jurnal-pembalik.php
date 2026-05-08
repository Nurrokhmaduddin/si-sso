<?php $page = 'f-jurnal-pembalik'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Data Jurnal Pembalik
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
              <table class="table table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5px">No</th>
                    <th>Tanggal Posting</th>
                    <th>Keterangan</th>
                    <th>Nilai Balance</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td class="text-center">1</td>
                    <td>2025-01-01</td>
                    <td>Pembalik Beban Dibayar Dimuka (Sewa Kantor)</td>
                    <td class="text-end">Rp 5.000.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">2</td>
                    <td>2025-01-01</td>
                    <td>Pembalik Beban Akrual Gaji Karyawan</td>
                    <td class="text-end">Rp 8.500.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">3</td>
                    <td>2025-01-02</td>
                    <td>Pembalik Pendapatan Diterima Dimuka</td>
                    <td class="text-end">Rp 12.000.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">4</td>
                    <td>2025-01-02</td>
                    <td>Pembalik Beban Utilitas Terutang</td>
                    <td class="text-end">Rp 2.750.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">5</td>
                    <td>2025-01-03</td>
                    <td>Pembalik Pendapatan Bunga Akrual</td>
                    <td class="text-end">Rp 1.200.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">6</td>
                    <td>2025-01-03</td>
                    <td>Pembalik Beban Komisi Penjualan Akrual</td>
                    <td class="text-end">Rp 3.600.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">7</td>
                    <td>2025-01-04</td>
                    <td>Pembalik Piutang Pendapatan Jasa</td>
                    <td class="text-end">Rp 4.250.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">8</td>
                    <td>2025-01-04</td>
                    <td>Pembalik Beban Penyusutan Akrual</td>
                    <td class="text-end">Rp 6.000.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">9</td>
                    <td>2025-01-05</td>
                    <td>Pembalik Pendapatan Sewa Diterima Dimuka</td>
                    <td class="text-end">Rp 9.800.000</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary">
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
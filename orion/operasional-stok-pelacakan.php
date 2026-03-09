<?php $page = 'operasional_stok_pelacakan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Pelacakan Stok
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
                  <b>Gudang:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Rantang Tanggal:</b> Semua
                </div>
<div class="col-md-6">
                  <b>Produk:</b> CANGKIR PLASTIK ELSA CUP (HWI(5111))
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
                </button><!-- 
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>     -->
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar </h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm ">
                      <thead>
                      <tr align="center">
                        <th style="width: 5%; vertical-align: middle;" rowspan="2">No.</th>
                        <th style="min-width: 50px; vertical-align: middle;" rowspan="2">Tanggal</th>
                        <th style="min-width: 50px;" colspan="2">Kuantitas Masuk</th>
                        <th style="min-width: 50px; vertical-align: middle;" colspan="2">Kuantitas Keluar</th>
                        <th style="min-width: 50px; vertical-align: middle;" colspan="2">Total</th>
                      </tr>
                      <tr align="center">
                        <th>Baik</th>
                        <th>Rusak</th>
                        <th>Baik</th>
                        <th>Rusak</th>
                        <th>Baik</th>
                        <th>Rusak</th>
                      </tr>
                    </thead>
                    <tbody>
                                            <tr align="center">
                        <td colspan="6">Total Awal (sebelum 01 Oct 2025)</td>
                        <td>42</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td colspan="8"></td>
                      </tr>
                                              <tr align="center">
                          <td>1</td>
                                                    <td>24-Oct-2025</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2025-10-24&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">12</a></td>

                          <td>-</td>

                          <td>30</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>2</td>
                                                    <td>25-Nov-2025</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2025-11-25&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">12</a></td>

                          <td>-</td>

                          <td>18</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>3</td>
                                                    <td>29-Nov-2025</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2025-11-29&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">6</a></td>

                          <td>-</td>

                          <td>12</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>4</td>
                                                    <td>01-Dec-2025</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2025-12-01&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">12</a></td>

                          <td>-</td>

                          <td>0</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>5</td>
                                                    <td>11-Dec-2025</td>
                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2025-12-11&#39;, &#39;/masuk_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">144</a></td>

                          <td>-</td>

                          <td>-</td>

                          <td>-</td>

                          <td>144</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>6</td>
                                                    <td>31-Jan-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-01-31&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">6</a></td>

                          <td>-</td>

                          <td>138</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>7</td>
                                                    <td>03-Feb-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-02-03&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">6</a></td>

                          <td>-</td>

                          <td>132</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>8</td>
                                                    <td>06-Feb-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-02-06&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">6</a></td>

                          <td>-</td>

                          <td>126</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>9</td>
                                                    <td>09-Feb-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-02-09&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">6</a></td>

                          <td>-</td>

                          <td>120</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>10</td>
                                                    <td>20-Feb-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-02-20&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">24</a></td>

                          <td>-</td>

                          <td>96</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>11</td>
                                                    <td>23-Feb-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-02-23&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">12</a></td>

                          <td>-</td>

                          <td>84</td>
                          <td>0</td>
                        </tr>
                                              <tr align="center">
                          <td>12</td>
                                                    <td>05-Mar-2026</td>
                          <td>-</td>

                          <td>-</td>

                          <td><a href="https://orion-houseware.my.id/pelacakan?produk=Y3pSTU0xRTFyU3FkdVFqQm5NVFl6YzMwMDAwOA&amp;begin=10%2F01%2F2025&amp;end=03%2F09%2F2026&amp;tanggal=#!" onclick="openModal(&#39;2026-03-05&#39;, &#39;/keluar_baik&#39;, &#39;1&#39;, &#39;3501&#39;)">24</a></td>

                          <td>-</td>

                          <td>60</td>
                          <td>0</td>
                        </tr>
                                            <tr>
                        <td colspan="8"></td>
                      </tr>
                      <tr align="center">
                        <td colspan="6">Total Akhir (di tanggal 09 Mar 2026)</td>
                        <td>60</td>
                        <td>0</td>
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
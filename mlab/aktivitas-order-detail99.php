<?php $page = 'aktivitas_order'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid"> 
      <h3 class="mb-0">Detail Order <small>00421124</small>
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
        <button class="btn btn-primary mb-10" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">
            Baca Petunjuk
        </button>
      </h3>
        <p class="text-muted mb-0">Data Permintaan Layanan Laboratorium</p>
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
                  <b>Status:</b> Semua (diproses, terdaftar, selesai,dibatalkan)
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-secondary btn-sm" onclick="window.location='aktivitas-order.php'"><i class="fas fa-reply me-1"></i>Kembali</button>
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
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
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
         <div class="row">
          <div class="col-md-10">

            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">1. Informasi Pemberi Order</h3>
              </div>
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                        <table class="table table-sm table-bordered table-striped  mb-0">
                          <tbody>
                            <tr>
                              <th width="40%">Nama Pengorder</th>
                              <td>Tri Nugroho Sulistyantoro</td>
                            </tr>
                            <tr>
                              <th>E-mail</th>
                              <td>tri.nugroho.sulistyantoro@gmail.com</td>
                            </tr>
                            <tr>
                              <th>Nomor HP</th>
                              <td>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=628562987551">
                                  08562987551
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <th>Instansi / Institusi</th>
                              <td>UII</td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td>55571</td>
                            </tr>
                            <tr>
                              <th>Provinsi</th>
                              <td>DI YOGYAKARTA</td>
                            </tr>
                            <tr>
                              <th>Kabupaten / Kota</th>
                              <td>KABUPATEN SLEMAN</td>
                            </tr>

                          </tbody>
                        </table>
                  </div>


                  <!-- INFORMASI ORDER -->
                  <div class="col-md-6">
                        <table class="table table-sm table-bordered table-striped  mb-0">
                          <tbody>
                            <tr>
                              <th width="45%">Nomor Order</th>
                              <td>00421124</td>
                            </tr>
                            <tr>
                              <th>Tanggal Order</th>
                              <td>11 Nov 2024</td>
                            </tr>
                            <tr>
                              <th>Nama Proyek</th>
                              <td>Abc</td>
                            </tr>
                            <tr>
                              <th>Owner Proyek</th>
                              <td>Pemda DIY</td>
                            </tr>
                            <tr>
                              <th>Laboratorium</th>
                              <td>Lab. Jalan Raya</td>
                            </tr>
                            <tr>
                              <th>Layanan</th>
                              <td>Pengujian</td>
                            </tr>
                            <tr>
                              <th>Sertifikat Hasil Uji diatasnamakan</th>
                              <td>Tri Nugroho Sulistyantoro</td>
                            </tr>

                          </tbody>
                        </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="callout callout-success">
              <h4>Konsultasi Order</h4>
              <p>Klik logo WhatsApp untuk konsultasi dengan admin kami</p>
              <a href="https://api.whatsapp.com/send?phone=6287707118691" target="_blank">
                <img src="./detail order simlab ts_files/whatsapp-button.png" alt="" class="img-responsive text-center" width="150px">
              </a>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">2. Detail Order</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-striped mb-10">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kode Sampel Pelanggan</th>
                        <th>Jumlah Sampel</th>
                        
                        
                        <th>Penyediaan Sampel</th>
                        <th>Metode Uji</th>
                        <th>Parameter Uji</th>
                        <th>Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>JMD Ringroad1</td>
                        <td>2</td>


                        <td>Dibawa</td>
                        <td>Marshall Standard Paket</td>
                        <td>
                          <span class="label label-success">Marshall Standard-10pcs</span>
                        </td>
                        <td>oke</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Coredrill1</td>
                        <td>1</td>


                        <td>Dikirim</td>
                        <td>Coredrill Rigid Pavement Paket</td>
                        <td>
                          <span class="label label-success">Core drill rigid pavement 5 titik</span>
                        </td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">3. Pengkajian Kompetensi Sumber Daya Laboratorium</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-striped mb-10">
                    <thead>
                      <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Parameter</th>
                        <th colspan="6">Kaji Ulang Kompetensi Sumberdaya Laboratorium</th>
                        <th rowspan="2" width="20%">Kesimpulan</th>
                      </tr>
                      <tr>
                        <th>Metode</th>
                        <th>Peralatan</th>
                        <th>Personel</th>
                        <th>Bahan</th>
                        <th>QC/QA</th>
                        <th>Kondisi Akomodasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Marshall Standard-10pcs</td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td id="id_kesimpulan_7060">Lab siap mengerjakan</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Core drill rigid pavement 5 titik</td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td>
                          <i class="fa fa-check-square-o"></i>
                        </td>
                        <td id="id_kesimpulan_7061">Lab siap mengerjakan</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">4. Laboratorium Subkontrak</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-striped mb-10">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Parameter Uji</th>
                        <th>Kode Sampel Pemberi Order</th>
                        <th>Lab Subkontrak</th>
                        <th>Nomor Akreditasi</th>
                        <th>Tanggal Selesai Pengujian</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="9">Belum ada data</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">5. Estimasi Biaya</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-striped mb-10">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Parameter Uji</th>
                        <th>Kode Metode Uji</th>
                        <th>Jumlah Pengujian</th>
                        <th>Tarif Dasar (Rp)</th>
                        <th>Biaya Variabel (Rp)</th>
                        <th>Subtotal (Rp)</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Marshall Standard-10pcs</td>
                        <td>MARS-P</td>
                        <td>2</td>
                        <td class="text-right">500,000.00</td>
                        <td class="text-right" id="id_biaya_variabel_7060">1,000,000.00</td>
                        <td class="text-right" id="id_subtotal_7060">2,000,000.00</td>
                        <td id="id_keterangan_7060">Jisamsoe</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Core drill rigid pavement 5 titik</td>
                        <td>CORP-P</td>
                        <td>1</td>
                        <td class="text-right">1,500,000.00</td>
                        <td class="text-right" id="id_biaya_variabel_7061">500,000.00</td>
                        <td class="text-right" id="id_subtotal_7061">2,000,000.00</td>
                        <td id="id_keterangan_7061">indomie</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="text-right">Total (Rp):</td>
                        <td colspan="2" class="text-right" id="id_total">4,000,000.00</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="5" class="text-right">Pekerjaan diperkirakan selesai pada tanggal:</td>
                        <td colspan="2" class="text-right" id="id_tanggal_selesai">06-Dec-2024</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            
            <div class="callout callout-info">
              <p>Order <span class="text-success"><strong>DISETUJUI</strong></span> pada tanggal:  11-Nov-2024</p>
            </div>
            <div class="callout callout-success">
              Pembuatan tagihan dan proses layanan dimulai tanggal: 11-Nov-2024.
            </div>

            <button class="btn btn-primary pull-right mb-5" disabled="">
              Proses Order ke Tahap Pelayanan
            </button>

            
            
          </div>

        </div>
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

<div class="modal fade" id="petunjukModal" tabindex="-1" role="dialog" aria-labelledby="petunjukModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Petunjuk Order P</h4>
      </div>
      <div class="modal-body">
        <ol>
          <li>Pastikan mengisi dengan benar nama yang akan tertulis pada Sertifikat Hasil Pengujian.</li>
          <li>Dapatkan Nomor Order dengan cara mengeklik tombol <strong>Mendaftar Nomor Order</strong>.</li>
          <li>Buat <strong>Detail Order</strong>. Tambahkan baris order secukupnya. Setelah Detail Order
            dibuat, klik tombol <strong>Daftarkan</strong>.
          </li>
          <li>Kami akan melakukan pengkajian terhadap Detail Order Anda serta membuat perhitungan perkiraan
            biaya.
          </li>
          <li>Nyatakan persetujuan ataupun pembatalan order dengan mengeklik tombol <strong>Setuju</strong>
            atau tombol <strong>Batalkan</strong>. Order akan dikerjakan setelah Anda menyatakan setuju.
          </li>
          <li>Hubungi Admin kami pada jam kerja jika Anda ingin berkonsultasi tentang order Anda melalui
            <strong>WhatsApp</strong>.
          </li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
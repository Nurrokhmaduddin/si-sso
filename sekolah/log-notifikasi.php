<?php $page = 'log_notifikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


  <div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Log Notifikasi</h3>
        <p class="text-muted mb-0">keterangan cara baca halaman ini</p>
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Daftar Plan Daily<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Periode Semester :</b> 2024 / 2025 (Ganjil) &nbsp;
                </div>
                <div class="col-md-6">
                  <b>Hari Tanggal:</b> Senin, 15 Juli 2024
                </div>

              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                 <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>   -->
              </div>
            </div>
          </div>


        <!-- ========== CARD : Tabel  ========== -->
        <div class="card"> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table1 table-bordered table-striped table-sm datatables1">
  <thead>
    <tr class="text-uppercase text-center">
      <th width="5%">No</th>
      <th width="15%">Waktu Terkirim</th>
      <th width="15%">Kategori</th>
      <th>Pesan Notifikasi</th>
      <th width="15%">Username Penerima</th>
      <th width="10%">Status</th>
      <th width="10%">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td class="text-center">1</td>
      <td>20-01-2026 07:15</td>
      <td class="text-center"><span class="badge badge-info">Info</span></td>
      <td>Rencana pembelajaran harian kelas 4A berhasil disimpan.</td>
      <td>walikelas_4a</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">2</td>
      <td>20-01-2026 08:30</td>
      <td class="text-center"><span class="badge badge-primary">Pemberitahuan</span></td>
      <td>Jadwal kegiatan hari ini telah diperbarui oleh walikelas.</td>
      <td>murid_4a</td>
      <td class="text-center"><span class="badge badge-secondary">Belum Dibaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">3</td>
      <td>20-01-2026 09:45</td>
      <td class="text-center"><span class="badge badge-warning">Peringatan</span></td>
      <td>Absensi murid belum lengkap untuk kegiatan pagi.</td>
      <td>walikelas_4a</td>
      <td class="text-center"><span class="badge badge-secondary">Belum Dibaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">4</td>
      <td>20-01-2026 10:30</td>
      <td class="text-center"><span class="badge badge-info">Info</span></td>
      <td>Eviden kegiatan “Farming” telah ditambahkan.</td>
      <td>admin_sekolah</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">5</td>
      <td>20-01-2026 11:15</td>
      <td class="text-center"><span class="badge badge-danger">Alarm</span></td>
      <td>Batas waktu pengisian laporan harian hampir berakhir.</td>
      <td>walikelas_4a</td>
      <td class="text-center"><span class="badge badge-secondary">Belum Dibaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">6</td>
      <td>19-01-2026 16:00</td>
      <td class="text-center"><span class="badge badge-primary">Pengumuman</span></td>
      <td>Kegiatan Outbound akan dilaksanakan hari Jumat.</td>
      <td>orangtua_4a</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">7</td>
      <td>19-01-2026 14:20</td>
      <td class="text-center"><span class="badge badge-info">Info</span></td>
      <td>Dokumentasi kegiatan berhasil diunggah.</td>
      <td>walikelas_4a</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">8</td>
      <td>18-01-2026 09:00</td>
      <td class="text-center"><span class="badge badge-warning">Peringatan</span></td>
      <td>Target tahfidz minggu ini belum tercapai.</td>
      <td>murid_4a</td>
      <td class="text-center"><span class="badge badge-secondary">Belum Dibaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">9</td>
      <td>18-01-2026 07:10</td>
      <td class="text-center"><span class="badge badge-primary">Pemberitahuan</span></td>
      <td>Perlengkapan khusus diperlukan untuk kegiatan hari ini.</td>
      <td>orangtua_4a</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">10</td>
      <td>17-01-2026 13:45</td>
      <td class="text-center"><span class="badge badge-danger">Alarm</span></td>
      <td>Sistem akan melakukan backup data otomatis.</td>
      <td>admin_sekolah</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
    </tr>

    <tr>
      <td class="text-center">11</td>
      <td>17-01-2026 08:00</td>
      <td class="text-center"><span class="badge badge-primary">Pengumuman</span></td>
      <td>Libur KBM hari Jumat dalam rangka kegiatan sekolah.</td>
      <td>semua_user</td>
      <td class="text-center"><span class="badge badge-success">Terbaca</span></td>
      <td class="text-center"><button class="btn btn-xs btn-outline-info"><i class="fas fa-eye"></i></button></td>
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
<?php include('5script.php'); ?>
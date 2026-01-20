<?php $page = 'report_daily'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Report - Learning Activities</h1>
      <small class="text-muted">Daily View</small>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- HEADER KONTEXT -->
      <div class="card card-primary">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2"><strong>Kelas</strong><br>SD 4 – Saturnus</div>
            <div class="col-md-2"><strong>Periode</strong><br>2025 / 2026 – Ganjil</div>
            <div class="col-md-2"><strong>Minggu</strong><br>2</div>
            <div class="col-md-3"><strong>Hari / Tanggal</strong><br>Kamis, 15 Januari 2026</div>
            <div class="col-md-3"><strong>Fasilitator</strong><br>Iftah Bahrol 'Ulum, S.Pd</div>
          </div>
        </div>
      </div>

      <!-- RINGKASAN KEHADIRAN -->
      <div class="row">
        <div class="col-md-4">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-user-check"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Present</span>
              <span class="info-box-number">17 Murid</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-box bg-danger">
            <span class="info-box-icon"><i class="fas fa-user-times"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Absent</span>
              <span class="info-box-number">1 Murid</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total</span>
              <span class="info-box-number">18 Murid</span>
            </div>
          </div>
        </div>
      </div>

      <!-- TEMA PEMBELAJARAN -->
     <!--  <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tema & Fokus Pembelajaran</h3>
        </div>
        <div class="card-body">
          <p><strong>Tema:</strong> Welcoming</p>
          <p><strong>Judul Kegiatan:</strong> “Fun Game”</p>
          <span class="badge badge-success">Eksplorasi</span>
        </div>
      </div> -->

       <!-- TUJUAN PEMBELAJARAN -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tema & Fokus Pembelajaran</h3>
        </div>
        <div class="card-body">
          <strong>Tema:</strong> The Beauty of Multicultural<br>
          <strong>Sub Tema:</strong> Indahnya Keberagaman Negeriku<br>
          <strong>Tujuan Pembelajaran:</strong> Membantu peserta didik beradaptasi, bekerja sama, dan mengenal lingkungan belajar.<br>
            <strong>Fokus Karakter/Akhlak:</strong>
            <span class="badge badge-info">Berupaya</span>
            <span class="badge badge-info">Memuji Nikmat</span>
            <span class="badge badge-info">Memahami Nafsu</span>          
        </div>
        <div class="card-footer">
          <strong>Referensi Ayat Al Quran:</strong>
          “Dan tidak ada seekor binatang pun di bumi dan burung yang terbang dengan kedua sayapnya, melainkan umat-umat (juga) seperti kamu. Tidak Kami alpakan sesuatu pun di dalam Kitab. Kemudian kepada Tuhanlah mereka dikumpulkan.”(QS. Al-An‘am: 38)
        </div>
      </div>

      <!-- LEARNING ACTIVITIES -->
     <!--  <div class="card">
        <div class="card-header">
          <h3 class="card-title">Learning Activities</h3>
        </div>
        <div class="card-body">

          <div class="card card-outline card-info">
            <div class="card-body">
              <h5>Fun Ice Breaking Game</h5>
              <p class="text-muted mb-1">Outdoor • 07.30 – 08.00</p>
              <p>Permainan ringan untuk membangun kedekatan dan semangat belajar.</p>
            </div>
          </div>

          <div class="card card-outline card-info">
            <div class="card-body">
              <h5>Kelompok Eksplorasi Alam</h5>
              <p class="text-muted mb-1">Outdoor • 08.00 – 10.00</p>
              <p>Anak mengeksplorasi lingkungan sekitar dan berdiskusi bersama fasilitator.</p>
            </div>
          </div>

        </div>
      </div> -->
      <!-- JADWAL AKTIVITAS -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jadwal & Rencana Aktivitas Harian</h3>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="thead-light">
              <tr>
                <th style="width:5%;text-center" >Waktu</th>
                <th style="width:15%">Judul Aktivitas</th>
                <th style="width:45%">Deskripsi Aktivitas</th>
                <th style="width:35%">Catatan / Referensi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>07.30</td>
                <td>Welcoming</td>
                <td>
                  Memberi semangat memulai petualangan di sekolah
                </td>
                <td></td>
              </tr>
              <tr>
                <td>07.45</td>
                <td>Sholat Dhuha</td>
                <td></td>
                <td>
                  Membiasakan sholat dhuha
                </td>
              </tr>

              <tr>
                <td>08.00</td>
                <td>Farming</td>
                <td>
                  Apersepsi: <br>
                  -membaca doa buka kelas dan janji pagi, <br>
                  -membaca doa keluar rumah,<br> -membaca dan mentadaburi asmaul husna al_khaliq<br>
                  Explorasi:<br>
                  -Membuat pot dari galon<br>
                  -Menyebarkan kapur kedalam media tanam di raised bed
                </td>
                <td>
                  bawa benih
                </td>
              </tr>
              <tr>
                <td>11.30</td>
                <td>Dhuhur & Lunch</td>
                <td></td>
                <td>
                  Membiasakan sholat wajib tepat waktu, mengantri & makan bermacam sayur
                </td>
              </tr>
              <tr>
                <td>12.30</td>
                <td>Tahfidz</td>
                <td>
                  setoran hafalan individu
                </td>
                <td>
                  target hafalan Al-Bayyinah
                </td>
              </tr>
              <tr>
                <td>13.00</td>
                <td>Mengaji</td>
                <td>
                  Murojaah, dan mengaji menggunakan metode umi
                </td>
                <td>
                  Ruang kelas / aula, 
                  Materi keislaman
                </td>
              </tr>
              <tr>
                <td>14.15</td>
                <td>Closing</td>
                <td>
                  Refleksi dan tutup kelas
                </td>
                <td>
                  Ruang kelas
                </td>
              </tr>
            </tbody>

          </table>
        </div>

        <div class="card-footer">
          <strong>Evaluasi KBM Harian:</strong>
          Menambah eksplorasi jenis tanaman liar yang ada di sekolah
        </div>
      </div>


    <!-- QURAN ACTIVITIES -->
    <!-- <div class="card">
      <div class="card-header">
        <h3 class="card-title">Qur’an Activities</h3>
      </div>
      <div class="card-body">
        <ul>
          <li>Iqro / Tahsin : <span class="badge badge-success">Setor</span></li>
          <li>Tahfidz : <span class="badge badge-warning">Berproses</span></li>
        </ul>
        <small class="text-muted">Detail setoran dapat dilihat di buku catatan mengaji.</small>
      </div>
    </div> -->

      <!-- DOKUMENTASI -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dokumentasi Kegiatan</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src="https://via.placeholder.com/300x200" class="img-fluid rounded">
            </div>
            <div class="col-md-3">
              <img src="https://via.placeholder.com/300x200" class="img-fluid rounded">
            </div>
            <div class="col-md-3">
              <img src="https://via.placeholder.com/300x200" class="img-fluid rounded">
            </div>
          </div>
        </div>
      </div>



      <!-- TABEL KEHADIRAN & CATATAN MURID -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kehadiran & Catatan Per Murid</h3>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="thead-light">
              <tr>
                <th style="width:5%">No</th>
                <th style="width:25%">Nama Murid</th>
                <th style="width:10%">Status</th>
                <th style="width:60%">Catatan Fasilitator</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ameera Nur Fauziyyah</td>
                <td>
                  <span class="badge badge-success">Hadir</span>
                </td>
                <td>
                  Aktif mengikuti kegiatan, mampu bekerja sama dalam kelompok.
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Ramadatiya Leo Pradana</td>
                <td>
                  <span class="badge badge-danger">Tidak Hadir</span>
                </td>
                <td>
                  Izin tidak masuk karena kondisi kesehatan.
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nama Murid Lain</td>
                <td>
                  <span class="badge badge-success">Hadir</span>
                </td>
                <td>
                  Perlu pendampingan saat diskusi kelompok, namun menunjukkan antusiasme.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <strong>Catatan Harian Murid:</strong>
           Anak-anak terlihat antusias mengikuti kegiatan. Beberapa anak masih perlu
            pendampingan dalam kerja kelompok. Ketertiban sobat kecil saat di luar sekolah perlu di motivasi kembali.
        </div>
      </div>



       <!-- CATATAN FASILITATOR -->
<!--       <div class="card">
        <div class="card-header">
          <h3 class="card-title">Evaluasi Harian KBM</h3>
        </div>
        <div class="card-body">
          <p>
            Menambah eksplorasi jenis tanaman liar yang ada di sekolah
          </p>
        </div>
      </div> -->

    
<!-- REMINDER PERLENGKAPAN SEMINGGU -->
<div class="card">
  <div class="card-header bg-info">
    <h3 class="card-title ">Pengingat Jadwal Kegiatan & Perlengkapan Siswa</h3>
  </div>

  <div class="card-body">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr>
          
          <th style="width: 18%;">Tanggal</th>
          <th style="width: 17%;">Kegiatan</th>
          <th>Perlengkapan yang Dibawa</th>
          <th style="width: 15%;">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Senin, 12 Januari 2026</td>
          <td>Eksplorasi & Lunch Service</td>
          <td>
            Baju merah putih, rompi rajut biru, celemek, Juz ‘Amma
          </td>
          <td>07.30 – 15.00</td>
        </tr>

        <tr>
          <td>Selasa, 13 Januari 2026</td>
          <td>Outbound</td>
          <td>
            Kaos outbound merah, rompi outbound, kaos kaki, sepatu, sarung tangan
          </td>
          <td>07.30 – 15.00</td>
        </tr>

        <tr>
          <td>Rabu, 14 Januari 2026</td>
          <td>Outing Class</td>
          <td>
            Baju bebas, nyaman, dan sopan
          </td>
          <td>07.30 – 15.00</td>
        </tr>

        <tr>
          <td>Kamis, 15 Januari 2026</td>
          <td>GLS & Life Skill</td>
          <td>
            Baju batik atau baju daerah
          </td>
          <td>07.30 – 15.00</td>
        </tr>

        <tr>
          <td>Jumat, 16 Januari 2026</td>
          <td>Peringatan Isra’ Mi’raj Nabi Muhammad SAW</td>
          <td>
            — 
          </td>
          <td>
            KBM di rumah masing-masing
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

  <!-- STATUS -->
      <div class="card card-secondary">
        <div class="card-body text-center">
          <strong>Status:</strong> <span class="badge badge-success">Published</span><br>
          <small class="text-muted">Dipublikasikan pada 15 Januari 2026, 15.30 WIB</small>
        </div>
      </div>


    </div>
  </section>
</div>

	
								

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
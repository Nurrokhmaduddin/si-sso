<?php $page = 'plan_daily'; ?>
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
            <div class="col-md-2">
            	<strong>Hari / Tanggal </strong><br>
            	<strong>Kelas </strong><br>
            	<strong>Fasilitator</strong>
            </div>
            <div class="col-md-4">
            	: Kamis, 15 Januari 2026<br>
            	: SD 4 – Saturnus<br>
            	: Iftah Bahrol 'Ulum, S.Pd
            </div>
            <div class="col-md-6">
            	<button class="btn btn-outline-success" onclick="window.location.href='data-daily-report.pdf'" >Preview daily-report</button>
            </div>
          </div>
        </div>
      </div>

      <!-- KPI KEHADIRAN -->
      <!-- <div class="row">
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
      </div> -->

       <!-- Class Member -->
      <div class="card">
      	<div class="card-header">
      		<h3 class="card-title">Class Member</h3>
      	</div>
      	<div class="card-body ">
      		<table class="table table-bordered table-sm">
      			<thead>
      				<tr>
      					<th>#</th>
      					<th style="width:5%">No</th>
      					<th style="width:25%">Nama Murid</th>
      					<th style="width:10%" class="text-center">Kehadiran</th>
      					<th>Catatan Kehadiran</th>
      					<th style="width:12%" class="text-center">Status Progres</th>
      					<th>Catatan Progres</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>1</td>
      					<td>Ameera Nur Fauziyyah</td>
      					<td class="text-center">
      						<span class="badge badge-success">Hadir</span>
      					</td>
      					<td>
      						Hadir tepat waktu dan mengikuti kegiatan pembelajaran sejak awal kelas.
      					</td>
      					<td class="text-center">
      						<span class="badge badge-success">Improvement</span>
      					</td>
      					<td>
      						Menunjukkan peningkatan pemahaman materi dan aktif saat diskusi kelompok.
      					</td>
      				</tr>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>2</td>
      					<td>Ramadatiya Leo Pradana</td>
      					<td class="text-center">
      						<span class="badge badge-danger">Tidak Hadir</span>
      					</td>
      					<td>
      						Tidak hadir karena sakit berdasarkan informasi dari orang tua.
      					</td>
      					<td class="text-center">
      						<span class="badge badge-secondary">Non Significant</span>
      					</td>
      					<td>
      						Progres belum dapat dinilai karena tidak mengikuti kegiatan pembelajaran hari ini.
      					</td>
      				</tr>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>3</td>
      					<td>Dimas Arka Pratama</td>
      					<td class="text-center">
      						<span class="badge badge-success">Hadir</span>
      					</td>
      					<td>
      						Hadir namun datang terlambat sekitar 10 menit setelah kelas dimulai.
      					</td>
      					<td class="text-center">
      						<span class="badge badge-warning">Stable</span>
      					</td>
      					<td>
      						Memahami materi dasar, namun masih perlu dorongan untuk lebih aktif dalam diskusi.
      					</td>
      				</tr>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>4</td>
      					<td>Fathin Zahra Nabila</td>
      					<td class="text-center">
      						<span class="badge badge-success">Hadir</span>
      					</td>
      					<td>
      						Mengikuti seluruh kegiatan pembelajaran dengan baik dan tertib.
      					</td>
      					<td class="text-center">
      						<span class="badge badge-success">Improvement</span>
      					</td>
      					<td>
      						Lebih percaya diri saat menyampaikan pendapat dibandingkan pertemuan sebelumnya.
      					</td>
      				</tr>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>5</td>
      					<td>Rafi Alghifari</td>
      					<td class="text-center">
      						<span class="badge badge-warning">Terlambat</span>
      					</td>
      					<td>
      						Datang terlambat sekitar 15 menit karena keterlambatan transportasi.
      					</td>
      					<td class="text-center">
      						<span class="badge badge-warning">Stable</span>
      					</td>
      					<td>
      						Tetap mampu mengikuti materi setelah diberikan penjelasan tambahan oleh pengajar.
      					</td>
      				</tr>
      			</tbody>
      		</table>
      	</div>
      	<div class="card-footer">
      		<button class="btn btn-outline-primary btn-xs" data-bs-toggle="modal" data-bs-target="#modalEditReport"> <i class="fas fa-edit"></i>
      		</button>
      		<strong>Catatan Harian Murid:</strong>

      	</div>
      </div>
      <!-- Mentoring -->
      <div class="card shadow-sm border-0 mb-3">
      	<div class="card-header">
      		<h3 class="card-title">Mentoring</h3>
      	</div>
      	<div class="card-body p-0">
      		<table class="table table-hover table-sm mb-0 ">
      			<!-- <thead class="bg-light">
      				<tr>
      					<th>Mentoring</th>
      				</tr>
      			</thead> -->
      			<tbody>
      				<tr>
      					<td>
      						Tema: Welcoming “Fun Game”
      					</td>
      				</tr>
      			</tbody>
      		</table>
      	</div>
      </div>
      	

      <!-- Qur’an Activities -->
      <div class="card">
      	<div class="card-header">
      		<h3 class="card-title">Qur’an Activities</h3>
      	</div>
      	<div class="card-body ">
      		<table class="table table-bordered table-sm">
      			<thead>
      				<tr>
      					<th>#</th>
      					<th >Iqro/Tahsin</th>
      					<th >Tahfidz</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td><button class="btn btn-outline-primary btn-xs"><i class="fas fa-edit"></i></button></td>
      					<td>Ayah Bunda bisa lihat buku catatan mengaji Iqro/Tahsin</td>
      					<td>Ayah Bunda bisa lihat buku catatan mengaji Hafalan/Tahfidz</td>
      				</tr>
      			</tbody>
      		</table>
      	</div>
      </div>

      <!-- LEARNING ACTIVITIES -->
<div class="card">
<div class="card-header">
<h3 class="card-title">Learning Activities</h3>
</div>
<div class="card-body ">


      <div class="card card-primary">
      	<div class="card-body">
      		<div class="row">
      			<div class="col-md-3">
      				<strong>Kelas: </strong>SD 4 – Saturnus<br>
      				<strong>Semester: </strong>1 <strong>Week: </strong>2 <strong>Day: </strong>Kamis
      			</div>
      			<div class="col-md-4">
      				<strong>Tema: </strong>LIFE AND ENERGY<br><strong>SubTema: </strong>Nature Around
      			</div>
      			<div class="col-md-3">
      				<strong>Fasilitator</strong><br>Iftah Bahrol 'Ulum, S.Pd
      			</div>
      			<div class="col-md-2 text-danger">
      				<strong>Daily Budget</strong><br>Rp 150.000
      			</div>
      		</div>
      	</div>
      </div>

      <div class="row">
      	<div class="col-md-2">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0 table-success">
      					<thead class="bg-light">
      						<tr>
      							<th>Target Akhlak</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr><td><span><small><li>Mu'izz</li><li>Taubah</li><li>Istiqomah</li></small></span></td></tr>
      						<!-- <tr class="small">
      							<td>
      								Mu'izz<br>Taubah<br>Istiqomah
      							</td>
      						</tr> -->
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-10">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0 table-success">
      					<thead class="bg-light">
      						<tr>
      							<th>Referensi Ayat Al Quran</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>
      								<span><small>“Dan tidak ada seekor binatang pun di bumi dan burung yang terbang dengan kedua sayapnya, melainkan umat-umat (juga) seperti kamu. Tidak Kami alpakan sesuatu pun di dalam Kitab. Kemudian kepada Tuhanlah mereka dikumpulkan.”(QS. Al-An‘am: 38)</small></span>
      							</td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>
      </div>

      <div class="row">

      	<div class="col-md-6" id="kiri">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0">
      					<thead class="bg-light">
      						<tr>
      							<th>Waktu</th>
      							<th>Aktivitas</th>
      							<th>Deskripsi</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>07.30</td>
      							<td>Welcoming</td>
      							<td>Memberi semangat memulai petualangan di sekolah</td>
      						</tr>
      						<tr>
      							<td>07.45</td>
      							<td>Sholat Dhuha</td>
      							<td>Membiasakan sholat dhuha</td>
      						</tr>
      						<tr class="table-warning">
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
      						</tr>
      						<tr>
      							<td>11.30</td>
      							<td>Dhuhur & Lunch</td>
      							<td>Sholat berjamaah dan makan bersama</td>
      						</tr>
      						<tr>
      							<td>12.30</td>
      							<td>Tahfidz</td>
      							<td>Setoran hafalan  Individu (Al-Bayyinah)</td>
      						</tr>
      						<tr>
      							<td>13.00</td>
      							<td>Mengaji</td>
      							<td>Murojaah dan metode UMI</td>
      						</tr>
      						<tr>
      							<td>14.15</td>
      							<td>Closing</td>
      							<td>Refleksi dan penutup</td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>


      	<div class="col-md-6" id="kanan">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0 table-warning">
      					<thead class="bg-light">
      						<tr>
      							<th colspan="2" style="text-align:center;">Kompetensi Dasar Kurikulum Nasional dan Sekolah Alam</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>Bahasa Indonesia<br>BI4.C1</td>
      							<td>
      								<span><small>Peserta didik mampu memahami ide pokok (gagasan) suatu pesan lisan, 
      									informasi dari media audio, teks aural (teks yang dibacakan dan/atau didengar), 
      									serta instruksi lisan yang berkaitan dengan tujuan berkomunikasi.
      								</small></span>
      							</td>
      						</tr>
      						<tr>
      							<td>Matematika<br>MT4.B2</td>
      							<td>
      								<span><small> Peserta didik mampu memahami dan menyelesaikan masalah yang berkaitan 
      								dengan operasi hitung bilangan bulat dan pecahan dalam konteks kehidupan sehari-hari.</small></span>
      							</td>
      						</tr>
      						<tr>
      							<td>IPA<br>IPA4.A1</td>
      							<td>
      								<span><small>Peserta didik mampu mengidentifikasi hubungan antara makhluk hidup 
      								dengan lingkungannya serta menjelaskan upaya pelestarian lingkungan.</small></span>
      							</td>
      						</tr>
      						<tr>
      							<td>Tematik Alam<br>SA4.L1</td>
      							<td>
      								<span><small> Peserta didik mampu mengenali ekosistem alam sekitar melalui kegiatan observasi langsung,
      								eksplorasi lingkungan, dan diskusi berbasis pengalaman nyata.</small></span>
      							</td>
      						</tr>
      						<tr>
      							<td>Kepemimpinan<br>SA4.K2</td>
      							<td>
      								<span><small> Peserta didik mampu menunjukkan sikap tanggung jawab, kerja sama,
      								dan kepemimpinan melalui kegiatan kelompok di alam terbuka.</small></span>
      							</td>
      						</tr>
      						<tr>
      							<td>Kecakapan Hidup<br>SA4.H3</td>
      							<td>
      								<span><small> Peserta didik mampu menerapkan keterampilan hidup dasar seperti kemandirian,
      								pemecahan masalah, dan pengambilan keputusan dalam aktivitas harian.</small></span>
      							</td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>

      	<div class="col-md-6">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-sm mb-0 table-secondary">
      					<thead class="bg-light">
      						<tr>
      							<th colspan="2" style="text-align:center;">Continue Material</th>
      							<th colspan="3" style="text-align:center;">Uncontinue Material</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>Alat permainan</td>
      							<td>1</td>
      							<td>Alat permainan</td>
      							<td>1</td>
      							<td align="right">Rp 50.000</td>
      						</tr>
      						<tr>
      							<td>Konsumsi ringan</td>
      							<td>2</td>
      							<td>Konsumsi ringan</td>
      							<td>2</td>
      							<td align="right">Rp 75.000</td>
      						</tr>
      						<tr>
      							<td>Lain-lain</td>
      							<td>1</td>
      							<td></td>
      							<td></td>
      							<td></td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>


      	<div class="col-md-6">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-sm mb-0 table-secondary">
      					<thead class="bg-light">
      						<tr>
      							<th colspan="3" style="text-align:center;">Book Reference & Other Learning Resource</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>
      								<ul class="small">
      									<li>Lembar observasi</li>
      									<li>Alat tulis</li>
      									<li>Media permainan</li>
      									<li>Kotak P3K</li>
      								</ul>
      							</td>
      							<td>
      								<ul class="small">
      									<li>Fasilitator kelas</li>
      									<li>Lingkungan sekolah</li>
      									<li>Alat permainan outdoor</li>
      									<li>Buku panduan</li>
      								</ul>
      							</td>
      							<td>
      								<ul class="small">
      									<li>Alat sholat</li>
      									<li>Botol minum</li>
      									<li>Topi</li>
      									<li>Al-Qur'an</li>
      								</ul>
      							</td>

      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>
      </div>

      <div class="row">
      	<div class="col-md-6">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0 table-info">
      					<thead class="bg-light">
      						<tr>
      							<th><button class="btn btn-outline-primary btn-xs me-1"><i class="fas fa-edit"></i></button>Evaluasi Harian KBM</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr class="table-info">
      							<td>
      								<span><small>
      									......................
      								</small></span>
      							</td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-6">
      		<div class="card shadow-sm border-0 mb-3">
      			<div class="card-body p-0">
      				<table class="table table-hover table-sm mb-0 table-info">
      					<thead class="bg-light">
      						<tr>
      							<th><button class="btn btn-outline-primary btn-xs me-1"><i class="fas fa-edit"></i></button>Catatan Harian Siswa</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr class="table-info">
      							<td>
      								<span><small>
      									.................
      								</small></span>
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

<!-- paro-paro -->
<div class="row">
	<div class="col-md-12">
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
        <div class="card-footer">
         <button class="btn btn-outline-primary btn-xs btn-block" 
         data-bs-toggle="modal" 
         data-bs-target="#modalUpload">
         <i class="fas fa-upload"></i> Upload
       </button>

        </div>
      </div>
	</div>
	 <!-- Things to Prepare this Week -->
	<!-- <div class="col-md-6">
      <div class="card shadow-sm border-0 mb-3">
      	<div class="card-header">
          <h3 class="card-title">Things to Prepare this Week</h3>
        </div>
      	<div class="card-body p-0">
      		<table class="table table-sm mb-0 ">
      			<thead >
      				<tr>
      					<th style="text-align:left;">Perlengkapan Sobat Neptunus</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td>
      						<ul class="small">
      							<li>Perlengkapan Sobat Neptunus</li>
      							<li>Alat sholat</li>
      							<li>Botol minum</li>
      							<li>Jas hujan</li>
      							<li>Baju ganti dan kresek</li>
      							<li>Al-Qur’an</li>
      							<li>Penutup kepala</li>
      							<li>Buku setoran ngaji</li>
      						</ul>
      					</td>
      				</tr>
      			</tbody>
      		</table>
      	</div>
      </div>
	</div> -->
</div>
      



     

<!-- last table -->
<div class="card shadow-sm border-0 mb-3">
      	<div class="card-body p-3">
      		<table class="table table-striped table-sm mb-0 ">
      			<thead >
      				<tr>
      					<th style="text-align:center;">Prepared this Week </th>
      					<th style="text-align:center;">Things to Prepare </th>
      					<th style="text-align:center;">To be used </th>
      					<th style="text-align:center;">Date to carried </th>
      					<th style="text-align:center;">Notes</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td rowspan="5">
      						<ul>
      						<li>Perlengkapan Sobat Neptunus</li>
      						<li>Alat sholat</li>
      						<li>Botol minum</li>
      						<li>Jas hujan</li>
      						<li>Baju ganti dan kresek</li>
      						<li>Al-Qur’an</li>
      						<li>Penutup kepala</li>
      						<li>Buku setoran ngaji</li>
      						</ul>
      					</td>
      					<td align="left">Baju merah putih dan rompi rajut biru, celemek, Juz‘Amma</td>
      					<td>Eksplorasi, Lunch service</td>
      					<td>Senin, 12 January 2026</td>
      					<td>07.30-15.00</td>
      				</tr>
      				<tr>
      					<td>Kaos outbound merah, rompi outbound, kaos kaki dan bersepatu, sarung tangan</td>
      					<td>Outbound</td>
      					<td>Selasa, 13 January 2026</td>
      					<td>07.30-15.00</td>
      				</tr>
      				<tr>
      					<td>Baju bebas, nyaman dan sopan</td>
      					<td>Outing class</td>
      					<td>Rabu, 14 January 2026</td>
      					<td>07.30-15.00</td>
      				</tr>
      				<tr>
      					<td>Baju batik atau daerah</td>
      					<td>GLS dan Life skill</td>
      					<td>Kamis, 15 January 2026</td>
      					<td>07.30-15.00</td>
      				</tr>
      				<tr>
      					<td>Peringatan Isra’ dan Mi’roj Nabi Muhammad SAW</td>
      					<td>-</td>
      					<td>Jumat, 16 January 2026</td>
      					<td>KBM di rumah masing-masing</td>
      				</tr>
      			</tbody>
      		</table>
      	</div>
      </div>

  
<!-- PUBLISH ACTION -->
        <div class="card">          
          <div class="card-body table-responsive">
            <button class="btn btn-outline-primary btn-block">Publish</button>
          </div>
        </div>
  </div>
</div>



    </div>
  </section>
</div>

	
								

<?php include('4footer.php'); ?>
<div class="modal fade" id="modalEditReport" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title">
          <i class="fas fa-edit"></i> Edit Evaluasi & Laporan Harian
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- 1. INPUT EVALUASI KBM -->
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h6 class="card-title">Evaluasi KBM Harian</h6>
          </div>
          <div class="card-body">
            <textarea class="form-control"
                      name="evaluasi_kbm"
                      rows="3"
                      placeholder="Tuliskan evaluasi KBM harian..."></textarea>
          </div>
        </div>

        <!-- 2. TABEL KEHADIRAN & CATATAN PER MURID -->
        <div class="card card-outline card-info">
          <div class="card-header">
            <h6 class="card-title">Kehadiran & Catatan Per Murid</h6>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-bordered table-sm">
              <thead class="thead-light">
                <tr class="text-center">
                  <th style="width:5%">No</th>
                  <th style="width:25%">Nama Murid</th>
                  <th style="width:15%">Status Kehadiran</th>
                  <th style="width:55%">Catatan Fasilitator</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Ameera Nur Fauziyyah</td>
                  <td>
                    <select class="form-control form-control-sm">
                      <option value="hadir">Present</option>
                      <!-- <option value="izin">Izin</option> -->
                      <!-- <option value="sakit">Sakit</option> -->
                      <option value="alfa">Absent</option>
                    </select>
                  </td>
                  <td>
                    <input type="text"
                           class="form-control form-control-sm"
                           placeholder="Catatan murid...">
                  </td>
                </tr>

                <tr>
                  <td class="text-center">2</td>
                  <td>Ramadatiya Leo Pradana</td>
                  <td>
                    <select class="form-control form-control-sm">
                       <option value="hadir">Present</option>
                      <option value="alfa">Absent</option>
                    </select>
                  </td>
                  <td>
                    <input type="text"
                           class="form-control form-control-sm"
                           placeholder="Catatan murid...">
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

        <!-- 3. INPUT CATATAN HARIAN KELAS -->
        <div class="card card-outline card-success">
          <div class="card-header">
            <h6 class="card-title">Catatan Harian Murid (Kelas)</h6>
          </div>
          <div class="card-body">
            <textarea class="form-control"
            name="catatan_harian"
            rows="3"
            placeholder="Catatan umum perkembangan kelas hari ini..."></textarea>
          </div>
        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-save"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modalUploadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="modalUploadLabel"><i class="fas fa-upload"></i> Upload Gambar Dokumentasi</h5>
        <button type="button" class="close" data-bs-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <!-- BODY -->
      <div class="modal-body">
        <form id="formUpload" enctype="multipart/form-data">
          <div class="form-group">
            <label for="uploadFile">Pilih File Gambar</label>
            <input type="file" class="form-control-file" id="uploadFile" name="uploadFile" accept="image/*" required>
            <small class="form-text text-muted">Hanya file gambar (.jpg, .jpeg, .png, .gif)</small>
          </div>

          <div class="form-group">
            <label>Preview:</label>
            <div id="previewImage" style="border:1px dashed #ccc; padding:10px; text-align:center;">
              <span>Belum ada gambar yang dipilih</span>
            </div>
          </div>
        </form>
      </div>

      <!-- FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="btnUpload"><i class="fas fa-save"></i> Upload</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
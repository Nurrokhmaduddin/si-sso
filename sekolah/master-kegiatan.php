<?php $page='master_kegiatan';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kegiatan Sekolah Alam</h3>
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Daftar Periode Akademik<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>
              
            </div> -->
            <!-- <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Kelas:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div>

              </div>
            </div> -->
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
                 <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>
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
<th width="5px">No.</th>
<th>Kegiatan</th>
<th>Deskripsi</th>
<th>Dasar Mapel/Kurikulum</th>
<th width="90px">Aksi</th>
</tr>
</thead>
<tbody>
	<tr>
		<td class="text-center">1</td>
		<td>Farming</td>
		<td>
			Apersepsi:<br>
-membaca doa buka kelas dan janji pagi,<br>
-membaca doa keluar rumah,<br>
-membaca dan mentadaburi asmaul husna al_khaliq<br>
Explorasi:<br>
-Membuat pot dari galon<br>
-Menyebarkan kapur kedalam media tanam di raised bed
		</td>
		<td>		
*Bahasa Indonesia
BI4.C1<br>	Peserta didik mampu memahami ide pokok (gagasan) suatu pesan lisan, informasi dari media audio, teks aural (teks yang dibacakan dan/atau didengar), serta instruksi lisan yang berkaitan dengan tujuan berkomunikasi.<br><br>
*Matematika
MT4.B2<br>	Peserta didik mampu memahami dan menyelesaikan masalah yang berkaitan dengan operasi hitung bilangan bulat dan pecahan dalam konteks kehidupan sehari-hari.<br><br>
*IPA
IPA4.A1<br>	Peserta didik mampu mengidentifikasi hubungan antara makhluk hidup dengan lingkungannya serta menjelaskan upaya pelestarian lingkungan.<br><br>
*Tematik Alam
SA4.L1<br>	Peserta didik mampu mengenali ekosistem alam sekitar melalui kegiatan observasi langsung, eksplorasi lingkungan, dan diskusi berbasis pengalaman nyata.<br><br>
*Kepemimpinan
SA4.K2<br>	Peserta didik mampu menunjukkan sikap tanggung jawab, kerja sama, dan kepemimpinan melalui kegiatan kelompok di alam terbuka.<br><br>
*Kecakapan Hidup
SA4.H3<br>	Peserta didik mampu menerapkan keterampilan hidup dasar seperti kemandirian, pemecahan masalah, dan pengambilan keputusan dalam aktivitas harian.
		</td>
		<td class="text-center">
			<button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalInfoData">
				<i class="fas fa-info-circle"></i>
			</button>
			<button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditData">
				<i class="fas fa-edit"></i>
			</button>
			<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData">
				<i class="fas fa-trash"></i>
			</button>
		</td>
	</tr>

	<tr>
  <td class="text-center">2</td>
  <td>Cooking Class</td>
  <td>
    Apersepsi:<br>
    - Membaca doa sebelum belajar dan adab makan<br>
    - Diskusi bahan makanan sehat<br>
    Explorasi:<br>
    - Menyiapkan bahan masakan sederhana<br>
    - Memasak bersama dengan pembagian tugas kelompok<br>
    - Membersihkan peralatan setelah digunakan
  </td>
  <td>
    *Bahasa Indonesia
    BI4.C2<br>
    Peserta didik mampu menyampaikan pendapat dan instruksi secara lisan dengan bahasa yang santun dan jelas.<br><br>

    *Matematika
    MT4.B3<br>
    Peserta didik mampu menggunakan pengukuran (berat, volume, waktu) dalam kegiatan sehari-hari.<br><br>

    *IPA
    IPA4.B2<br>
    Peserta didik mampu mengenali perubahan wujud benda dan konsep makanan sehat.<br><br>

    *Kecakapan Hidup
    SA4.H1<br>
    Peserta didik mampu menunjukkan kemandirian dan tanggung jawab dalam aktivitas rumah tangga sederhana.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalInfoData">
      <i class="fas fa-info-circle"></i>
    </button>
    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditData">
      <i class="fas fa-edit"></i>
    </button>
    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData">
      <i class="fas fa-trash"></i>
    </button>
  </td>
</tr>

<tr>
  <td class="text-center">3</td>
  <td>Outbound & Team Building</td>
  <td>
    Apersepsi:<br>
    - Ice breaking dan kesepakatan aturan bermain<br>
    Explorasi:<br>
    - Permainan estafet kelompok<br>
    - Tantangan memindahkan objek secara kerja sama<br>
    - Refleksi peran dan komunikasi tim
  </td>
  <td>
    *PJOK
    PJ4.A1<br>
    Peserta didik mampu menunjukkan keterampilan gerak dasar dan sportivitas.<br><br>

    *Leadership
    SA4.K1<br>
    Peserta didik mampu bekerja sama, memimpin, dan mengikuti aturan dalam kegiatan kelompok.<br><br>

    *Sosial Emosional
    SA4.S2<br>
    Peserta didik mampu mengelola emosi dan menghargai perbedaan antar teman.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></button>
    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

<tr>
  <td class="text-center">4</td>
  <td>Literasi Alam</td>
  <td>
    Apersepsi:<br>
    - Membaca doa dan motivasi pagi<br>
    Explorasi:<br>
    - Membaca buku bertema alam<br>
    - Mengamati lingkungan sekitar<br>
    - Menulis hasil pengamatan sederhana
  </td>
  <td>
    *Bahasa Indonesia
    BI4.D1<br>
    Peserta didik mampu membaca dan memahami teks deskriptif sederhana.<br><br>

    *Tematik Alam
    SA4.L2<br>
    Peserta didik mampu mengungkapkan hasil pengamatan alam melalui tulisan dan gambar.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></button>
    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

<tr>
  <td class="text-center">5</td>
  <td>Eksperimen Sains</td>
  <td>
    Apersepsi:<br>
    - Diskusi fenomena alam sederhana<br>
    Explorasi:<br>
    - Percobaan air dan tanah<br>
    - Mengamati perubahan dan mencatat hasil<br>
    - Menyimpulkan bersama
  </td>
  <td>
    *IPA
    IPA4.C1<br>
    Peserta didik mampu melakukan percobaan sederhana dan menyimpulkan hasilnya.<br><br>

    *Logika
    SA4.L3<br>
    Peserta didik mampu berpikir sebab-akibat berdasarkan hasil pengamatan.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></button>
    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

<tr>
  <td class="text-center">6</td>
  <td>Market Day</td>
  <td>
    Apersepsi:<br>
    - Diskusi konsep jual beli dan kejujuran<br>
    Explorasi:<br>
    - Menyiapkan produk sederhana<br>
    - Menentukan harga<br>
    - Praktik jual beli
  </td>
  <td>
    *Matematika
    MT4.C2<br>
    Peserta didik mampu menggunakan konsep penjumlahan dan pengurangan dalam transaksi sederhana.<br><br>

    *Bisnis/Kemandirian
    SA4.B1<br>
    Peserta didik mampu memahami konsep usaha, kejujuran, dan tanggung jawab.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></button>
    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

<tr>
  <td class="text-center">7</td>
  <td>Refleksi & Jurnal Harian</td>
  <td>
    Apersepsi:<br>
    - Muhasabah singkat<br>
    Explorasi:<br>
    - Menulis jurnal pengalaman hari ini<br>
    - Diskusi perasaan dan pembelajaran<br>
    - Menyampaikan rencana perbaikan
  </td>
  <td>
    *Akhlak
    SA4.A2<br>
    Peserta didik mampu melakukan refleksi diri dan bersyukur atas pengalaman belajar.<br><br>

    *Bahasa Indonesia
    BI4.D3<br>
    Peserta didik mampu menuliskan pengalaman pribadi secara runtut dan sederhana.
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></button>
    <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
  </td>
</tr>

</tbody>
</table>


</div>
</div>            
</div>
<!-- /.card -->



        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->



<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>
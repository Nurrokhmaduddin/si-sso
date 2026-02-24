<?php $page = 'monev_individu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> v1.0
                </div>
                <div class="col-md-6">
                  <b>Mahasiswa:</b> 20521098 - VEGA AYU CENTYA
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
              </div>

            </div>
          </div>

        
  <!-- ========== CARD 3: KPI row ========== --> 
  <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
    .status-green { background:#28a745; }
    .status-yellow { background:#ffc107; }
    .status-red { background:#dc3545; }
    .ewstable td, .ewstable th { vertical-align: middle; }
    .table-fixed-height { max-height: 360px; overflow:auto; }
  </style>       
  <div class="row g-3 mb-3">
    <div class="col-md-3">
      <div class="kpi bg-primary">
        <div class="small">Rata-rata CPL</div>
        <div class="big" id="kpiAvg">75.2</div>
        <div class="small">dari 12 CPL</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi " style="background:#20c997;">
        <div class="small">Rata-rata IK</div>
        <div class="big" id="kpiGap">85 </div>
        <div class="small">dari 24 IK</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi" style="background:#ff7f0e;">
        <div class="small">Rata-rata CPMK</div>
        <div class="big" id="kpiReached">78</div>
        <div class="small">dari 258</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-danger">
        <div class="small">Rata-rata Nilai Akhir MK</div>
        <div class="big" id="kpiRisk">78</div>
        <div class="small">dari 78 MK</div>
      </div>
    </div>
  </div>


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-cpl-individual1.php'"><a class="nav-link ">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual2.php'"><a class="nav-link active">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual3.php'"><a class="nav-link ">Riwayat</a></li>
  </ul>


 <!-- ========== CARD 4:  Tabel CPL & Progress ========== --> 
        <div id="tab_1">
          <div class="card">
            <div class="card-header">              
                  <h5 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i> Detail CPL</h5>
                <div class="card-tools">
                  <small class="text-muted">klik nilai cpmk untuk melihat kelas perkuliahan</small>
                </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <div class="table-responsive">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <!-- THEAD -->
                    <thead class="table-dark text-center">
                      <tr align="center" class="bg-bllg">
                        <th rowspan="2" style="vertical-align: middle; width: 55px;">CPL</th>
                        <th rowspan="2" style="vertical-align: middle; width: 55px;">IK</th>
                        <th rowspan="2" colspan="3" style="vertical-align: middle;">CPMK</th>
                        <th colspan="3" style="vertical-align: middle;">CPMK</th>
                        <th colspan="3" style="vertical-align: middle;">IK</th>
                        <th rowspan="2" style="vertical-align: middle;">Capaian Akhir</th>
                      </tr>
                      <tr align="center" class="bg-bllg">
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Bobot</th>
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Bobot</th>
                        <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
                      </tr>
                    </thead>
                    <!-- TBODY -->
                    <tbody>
                      <!-- BARIS 1 -->
                      <tr>
                        <td align="center">CPL 1</td>
                        <td colspan="4">Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas) pada setiap peran yang dijalani, baik di industri kimia maupun masyarakat umum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>61,26</b></td>
                      </tr>
                      <!-- BARIS 2 -->
                      <tr>
                        <td></td>
                        <td align="center">IK 1.1</td>
                        <td colspan="3">Memahami dinul Islam serta pemikiran dan peradaban umat Islam </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>86,89</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>86,89</b></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 3 -->
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari </td>
                        <td align="center">90</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">90</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                        <td align="center">86</td>
                        <td align="center"><b>L</b></td>
                        <td align="center">21,5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim</td>
                        <td align="center">84</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">84</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 1.2</td>
                        <td colspan="3">Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>10</b></td>
                        <td align="center"><b>M</b></td>
                        <td align="center"><b>5</b></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 3 -->
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                        <td align="center">10                                             </td>
                        <td align="center"><b>H</b></td>
                        <td align="center">10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Membandingkan berbagai macam pemikiran dalam Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Merefleksikan Pancasila sebagai sistem etika dalam konteks pengembangan dan penerapan ilmu dan teknologi pada bidang studi yang dipelajari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI604 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Kewarganegaraan</td>
                        <td style="max-width: 300px;">Mampu menunjukkan sikap sebagai warga negara yang cerdas dan bertanggung jawab berlandaskan nilai keIslaman dan  keIndonesiaan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 1 -->
                      <tr>
                        <td align="center">CPL 2</td>
                        <td colspan="4">Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>0</b></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 2.1</td>
                        <td colspan="3">Memahami kewirausahaan sebagai sarana untuk mengembangkan potensi diri dan meningkatkan kualitas hidup</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>M</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 3 -->
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan konsep nilai uang terhadap waktu </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menghitung modal investasi tetap dan biaya manufaktur pabrik serta mengevaluasi laba</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan analisis kelayakan pabrik </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK947 - <b>3</b></td>
                        <td >Startup Business</td>
                        <td style="max-width: 300px;">Mahasiswa mampu membuat dan mempresentasikan business plan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Mengidentifikasi, merumuskan, dan merefleksikan karakter Rasulullah dan para sahabat sebagai wirausahawan muslim</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Mengidentifikasi, merumuskan, menganalisis, dan mengembangkan alternatif peluang berwirausaha berbasis syariat Islam pada bidang yang dipelajari.</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Menyusun konsep rencana bisnis untuk berwirausaha sesuai dengan syariat Islam pada bidang yang diminati</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 2.3</td>
                        <td colspan="3">Membuat perencanaan usaha mandiri </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>M</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan konsep nilai uang terhadap waktu </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menghitung modal investasi tetap dan biaya manufaktur pabrik serta mengevaluasi laba</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK521 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Ekonomi Teknik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan analisis kelayakan pabrik </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK947 - <b>1</b></td>
                        <td >Startup Business</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menunjukkan motivasi dalam merintis usaha </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK947 - <b>2</b></td>
                        <td >Startup Business</td>
                        <td style="max-width: 300px;">Mahasiswa mampu memilih bidang usaha yang mempunyai prospek</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK947 - <b>3</b></td>
                        <td >Startup Business</td>
                        <td style="max-width: 300px;">Mahasiswa mampu membuat dan mempresentasikan business plan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Mengidentifikasi, merumuskan, dan merefleksikan karakter Rasulullah dan para sahabat sebagai wirausahawan muslim</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Mengidentifikasi, merumuskan, menganalisis, dan mengembangkan alternatif peluang berwirausaha berbasis syariat Islam pada bidang yang dipelajari.</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI605 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kewirausahaan Syariah</td>
                        <td style="max-width: 300px;">Menyusun konsep rencana bisnis untuk berwirausaha sesuai dengan syariat Islam pada bidang yang diminati</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 1 -->
                      <tr>
                        <td align="center">CPL 3</td>
                        <td colspan="4">Kemampuan untuk bertanggung jawab kepada masyarakat dan mematuhi etika profesi dalam menyelesaikan permasalahan teknik kimia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>0</b></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 3.1</td>
                        <td colspan="3">Mampu memahami dampak teknologi dari bidang teknik kimia terhadap kesejahteraan masyarakat, keselamatan lingkungan, dan pembangunan yang berkelanjutan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang parameter pencemaran udara, air, dan tanah </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang cara pengolahan limbah secara fisis, biologis, dan kimiawi sesuai baku mutu </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang karakteristik bahan kimia B3 dan melakukan analisis risiko </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang dasar-dasar kesehatan dan keselamatan kerja sesuai peraturan/undang-undang yang berlaku </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Membandingkan berbagai macam pemikiran dalam Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Merefleksikan Pancasila sebagai sistem etika dalam konteks pengembangan dan penerapan ilmu dan teknologi pada bidang studi yang dipelajari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI608 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kuliah Kerja Nyata</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan dakwah Islamiyah bil hal atau bil khitabah atau bil kitabah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI608 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kuliah Kerja Nyata</td>
                        <td style="max-width: 300px;">Mahasiswa mampu bekerjasama dengan disiplin ilmu yang lain untuk merencanakan dan melaksanakan program solutif bagi persoalan masyarakat secara nyata</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI608 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kuliah Kerja Nyata</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun analisis potensi dan masalah yang dihadapi masyarakat secara nyata</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI608 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kuliah Kerja Nyata</td>
                        <td style="max-width: 300px;">Mahasiswa mampu merencanakan, mengkoordinasi, melaksanakan, dan mengevaluasi program sesuai bidang ilmu yang melibatkan masyarakat secara langsung</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 3.2</td>
                        <td colspan="3">Memahami dan mematuhi kode etik profesi dan peraturan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>M</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang parameter pencemaran udara, air, dan tanah </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang cara pengolahan limbah secara fisis, biologis, dan kimiawi sesuai baku mutu </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang karakteristik bahan kimia B3 dan melakukan analisis risiko </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK724 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pengolahan Limbah dan Keselamatan Industri</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan tentang dasar-dasar kesehatan dan keselamatan kerja sesuai peraturan/undang-undang yang berlaku </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI600 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Agama Islam</td>
                        <td style="max-width: 300px;">Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Membandingkan berbagai macam pemikiran dalam Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI601 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Ulil Albab</td>
                        <td style="max-width: 300px;">Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI602 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Islam Rahmatan Lil Alamin</td>
                        <td style="max-width: 300px;">Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI603 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Pendidikan Pancasila</td>
                        <td style="max-width: 300px;">Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 1 -->
                      <tr>
                        <td align="center">CPL 4</td>
                        <td colspan="4">Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>0</b></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 4.1</td>
                        <td colspan="3">Mampu melakukan presentasi yang efektif dalam bahasa Indonesia dan bahasa Inggris</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu mengukur pH larutan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan besaran fisik gas </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan tetapan kesetimbangan termodinamika </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan sintesa senyawa-senyawa organik </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan sintesa senyawa organik industrial </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan isolasi komponen-komponen bahan alam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>8</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun laporan praktikum kelompok</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan analisis kuantitatif dan melakukan perhitungan untuk menentukan kadar suatu zat</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan pemisahan dan mengidentifikasi zat-zat dalam campuran</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun peralatan serta menentukan besaran fisik gas</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan pengukuran besaran-besaran elektrokimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan aliran fluida dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan pengayakan dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan fluid mixing dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan filtrasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan sedimentasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan fluidisasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan kesetimbangan uap – cair dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan absorpsi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan ekstraksi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan distilasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan evaporasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan drying dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan heat-exchanger dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan pengendalian proses dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>8</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun laporan praktikum kelompok</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK585 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Metodologi Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun proposal penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK585 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Metodologi Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu mempresentasikan proposal penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI606 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Bahasa Inggris</td>
                        <td style="max-width: 300px;">Menjelaskan isi buku teks dalam bahasa Inggris sesuai bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI606 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Bahasa Inggris</td>
                        <td style="max-width: 300px;">Menulis paragraf dalam bahasa Inggris mengenai suatu topik dalam bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI606 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Bahasa Inggris</td>
                        <td style="max-width: 300px;">Berbicara aktif mendeskripsikan profil diri sendiri dan suatu topik dalam bidang ilmu secara efektif dan impresif dengan bahasa Inggris</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI607 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kecakapan Komunikasi Ilmiah</td>
                        <td style="max-width: 300px;">Merefleksikan penggunaan Bahasa Indonesia sebagai identitas keindonesiaan dalam komunikasi lisan dan tulisan sehari-hari</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI607 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kecakapan Komunikasi Ilmiah</td>
                        <td style="max-width: 300px;">Menyusun tulisan dan melakukan presentasi  dalam konteks akademik yang runtut dan terstruktur serta memenuhi kaidah Pedoman Umum Ejaan Bahasa Indonesia, penulisan ilmiah, dan anti-plagiarisme.</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI607 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kecakapan Komunikasi Ilmiah</td>
                        <td style="max-width: 300px;">Memanfaatkan teknologi untuk yang menunjang penyusunan tulisan akademik seperti fitur perangkat lunak pengolah kata dan perangkat lunak sitasi manajemen</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 4.2</td>
                        <td colspan="3">Mampu menulis ide/gagasan/laporan sesuai kaidah ilmiah dalam bahasa Indonesia dan bahasa Inggris</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu mengukur pH larutan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan besaran fisik gas </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan tetapan kesetimbangan termodinamika </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan sintesa senyawa-senyawa organik </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan sintesa senyawa organik industrial </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan isolasi komponen-komponen bahan alam</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK281 - <b>8</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Dasar dan Kimia Organik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun laporan praktikum kelompok</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan analisis kuantitatif dan melakukan perhitungan untuk menentukan kadar suatu zat</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan pemisahan dan mengidentifikasi zat-zat dalam campuran</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun peralatan serta menentukan besaran fisik gas</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK382 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Kimia Analitik dan Kimia Fisika</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melakukan pengukuran besaran-besaran elektrokimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan aliran fluida dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan pengayakan dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan fluid mixing dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan filtrasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan sedimentasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan fluidisasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK483 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 1</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan kesetimbangan uap – cair dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan absorpsi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan ekstraksi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>3</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan distilasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>4</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan evaporasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>5</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan drying dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>6</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan heat-exchanger dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>7</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mampu mengoperasikan peralatan pengendalian proses dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK584 - <b>8</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Praktikum Operasi Teknik Kimia 2</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun laporan praktikum kelompok</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK585 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Metodologi Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun proposal penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK585 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Metodologi Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu mempresentasikan proposal penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>UNI606 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Bahasa Inggris</td>
                        <td style="max-width: 300px;">Menjelaskan isi buku teks dalam bahasa Inggris sesuai bidang ilmu yang ditekuni</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <!-- BARIS 1 -->
                      <tr>
                        <td align="center">CPL 5</td>
                        <td colspan="4">Kemampuan merencanakan, menyelesaikan, dan mengevaluasi tugas di dalam batasan-batasan yang ada</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>0</b></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 5.1</td>
                        <td colspan="3">Mampu merencanakan dan menyelesaikan tugas-tugas kurikuler (penelitian, kerja praktik, dan tugas akhir)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="center">IK 5.2</td>
                        <td colspan="3">Mampu mengevaluasi proses dan hasil tugas-tugas kurikuler </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><b>-</b></td>
                        <td align="center"><b>H</b></td>
                        <td align="center"><b>-</b></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK686 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Penelitian</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian </td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK752 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Kerja Praktik</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>1</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>STK853 - <b>2</b></td>
                        <td style="border-left: 3px solid #2d5f8b;">Tugas Pra-Rancangan Pabrik Kimia</td>
                        <td style="max-width: 300px;">Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia</td>
                        <td align="center">-</td>
                        <td align="center"><b>H</b></td>
                        <td align="center">-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                            </tbody>
                          </table>
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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


  <!-- Modal: Preview Risk Performance -->
  <div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Preview Performa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>CPL-01</td><td>lorem ipsum</td><td>61 </td></tr>
              <tr><td>2</td><td>CPL-04</td><td>lorem ipsum</td><td>48 </td></tr>
              <tr><td>3</td><td>CPL-06</td><td>Contoh Lain</td><td>45 </td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Show single student (on clicking min/max) -->
  <div class="modal fade" id="modalStudent" tabindex="-1" aria-labelledby="modalStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate me-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="stuNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="stuName">-</dd>
            <dt class="col-5">Jenis</dt><dd class="col-7" id="stuType">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="stuValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>



<?php include('5script.php'); ?>
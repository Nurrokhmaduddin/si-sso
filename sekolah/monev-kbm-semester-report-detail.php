<?php $page = 'report_semester'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<style>

table{
  font-size:12px;
}

.card{
  border:1px solid #ddd;
  margin-bottom:10px;
}

.card-header{
  font-weight:bold;
}

.card-footer{
  font-size:11px;
}

</style>
<div  class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Report - Learning Activities</h1>
      <small class="text-muted">Semester View</small>
    </div>
  </section>

  <section class="content">
    <div id="reportPDF" class="container-fluid"> 
      <!-- //PDF dg library js -->

      <!-- HEADER KONTEXT -->
      <div class="card card-primary">
        <div class="card-body">
          <table class="table table-bordered table-striped table-sm">
            <tbody>
              <tr>
                <td style="width:17%"><b>Nama Peserta Didik: </b></td>
                <td>Nailah</td>
                <td><b>Kelas: </b></td>
                <td>SD 4 – Saturnus</td>
              </tr>
              <tr>
                <td><b>NISN: </b></td>
                <td>3190826205</td>
                <td><b>Semester: </b></td>
                <td>I</td>
              </tr>
              <tr>
                <td><b>Nama Sekolah: </b></td>
                <td>Sekolah Dasar Alam Baturraden</td>
                <td><b>Tahun Pelajaran: </b></td>
                <td>2025 / 2026</td>
              </tr>
              <tr>
                <td><b>Alamat Sekolah: </b></td>
                <td colspan="3">Jl. Raya Baturraden RT 02 RW 05 Perumahan Citra pesona Desa Karangtengah Kecamatan Baturraden, Kabupaten Banyumas, 53151</td>
                <!-- <td><b>Tahun Pelajaran: </b></td>
                <td>2025 / 2026</td> -->
              </tr>
            </tbody>
          </table>

          <!-- <div class="row">
            <div class="col-md-2"><strong>Kelas</strong><br>SD 4 – Saturnus</div>
            <div class="col-md-2"><strong>Tahun Pelajaran</strong><br>2025 / 2026 </div>
            <div class="col-md-2"><strong>Semester</strong><br>I</div>
            <div class="col-md-3"><strong>Nama Peserta Didik</strong><br>Nailah</div>
            <div class="col-md-3"><strong>NISN</strong><br>3190826205</div>
            <div class="col-md-12"><strong>Nama Sekolah: </strong> Sekolah Dasar Alam Baturraden<br><strong>Alamat Sekolah: </strong> Jl. Raya Baturraden RT 02 RW 05 Perumahan Citra pesona Desa Karangtengah Kecamatan Baturraden, Kabupaten Banyumas, 53151</div>
          </div> -->
        </div>
        <div class="card-footer">
          <div class="card-tools ms-auto">
            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-kbm-semester-report.php'">
              <i class="fas fa-reply me-1"></i> Kembali
            </button>
            <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-search me-1"></i> Pencarian
            </button>                
            <button type="button" class="btn btn-outline-success btn-sm" onclick="window.location='data-report-semester.pdf'">
              <i class="fas fa-file-download me-1"></i> Export
            </button>   
            <button type="button" class="btn btn-outline-success btn-sm" onclick="exportPDF()">
              <i class="fas fa-file-download me-1"></i> Export PDF
            </button>
            <button 
            onclick="window.open('report-semester-pdf.php?id=123','_blank')"
            class="btn btn-success btn-sm">
            Export PDF 2
          </button>
          </div>
        </div>
      </div>



      <!-- TABEL A -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">A. SIKAP SPIRITUAL (KI-1)</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-bordered table-sm">
            <thead >
              <tr class="text-uppercase text-center">
                <th >aspek yang dinilai</th>
                <th >CAPAIAN</th>
                <th >DESKRIPSI</th>
                <th style="width:14%">NILAI ANGKA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Menerima dan menjalankan ajaran agama yang dianutnya</td>
                <td>4,00</td>
                <td>Mulai Berkembang</td>
                <td>80,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer ">
          <strong>Keterangan :</strong> Skala penilaian capaian 0 - 5
        </div>
      </div>

      <!-- TABEL B -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">B. SIKAP SOSIAL (KI-2)</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-bordered table-sm">
            <thead >
              <tr class="text-uppercase text-center">
                <th >aspek yang dinilai</th>
                <th >CAPAIAN</th>
                <th >DESKRIPSI</th>
                <th style="width:14%">NILAI ANGKA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Perilaku jujur, disiplin, tanggung jawab, santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman, dan guru</td>
                <td>4,00</td>
                <td>Mulai Berkembang</td>
                <td>80,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <strong>Keterangan :</strong> Skala penilaian capaian 0 - 5<br>
          <div class="row">
            <div class="col-md-2 small">
              <ul class="list-unstyled">
                <li>Belum Tampak</li>
                <li>Perlu Bimbingan</li>
                <li>Perlu Motivasi</li>
                <li>Mulai Berkembang</li>
                <li>Mandiri</li>
              </ul>
            </div>
            <div class="col-md-2 small">
              <ul class="list-unstyled">
                <li>: 0 - 1</li>
                <li>: 1,01 - 2</li>
                <li>: 2,01 - 3</li>
                <li>: 3,01 - 4</li>
                <li>: 4,01 - 5</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    <!-- TABEL C -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">C. PENGETAHUAN (KI-3)</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-sm">
          <thead >
            <tr class="text-uppercase text-center">
              <th style="width:4%">no</th>
              <th >aspek yang dinilai</th>
              <th >CAPAIAN</th>
              <th >DESKRIPSI</th>
              <th style="width:14%">NILAI ANGKA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Pendidikan Agama dan Budi Pekerti</td>
              <td>3,50</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,42</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Pendidikan Pancasila dan Kewarganegaraan</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Bahasa Indonesia</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Matematika</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Ilmu Pengetahuan Alam</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Ilmu Pengetahuan Sosial</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Seni Budaya dan Prakarya</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Pendidikan Jasmani, Olahraga dan Kesehatan</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- TABEL D -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">D. KETERAMPILAN (KI-4)</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-sm">
          <thead >
            <tr class="text-uppercase text-center">
              <th style="width:4%">no</th>
              <th >aspek yang dinilai</th>
              <th >CAPAIAN</th>
              <th >DESKRIPSI</th>
              <th style="width:14%">NILAI ANGKA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Pendidikan Agama dan Budi Pekerti</td>
              <td>3,50</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,42</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Pendidikan Pancasila dan Kewarganegaraan</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Bahasa Indonesia</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep Matematika</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Ilmu Pengetahuan Alam</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Ilmu Pengetahuan Sosial</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>7</td>
              <td>MMenyajikan pengetahuan dan keterampilan dalam pembelajaran Seni Budaya dan Prakarya</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Menyajikan pengetahuan dan keterampilan dalam pembelajaran Pendidikan Jasmani, Olahraga dan Kesehatan</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <strong>Keterangan :</strong> Skala penilaian capaian 0 - 4
      </div>
    </div>
    <!-- TABEL E -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">E. MUATAN LOKAL</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-sm">
          <thead >
            <tr class="text-uppercase text-center">
              <th style="width:4%">no</th>
              <th >aspek yang dinilai</th>
              <th >CAPAIAN</th>
              <th >DESKRIPSI</th>
              <th style="width:14%">NILAI ANGKA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep muatan lokal Bahasa Jawa</td>
              <td>3,50</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,42</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep muatan lokal Budaya Banyumas</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep muatan lokal Kewirausahaan / Bisnis</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep muatan lokal Kepemimpinan</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mengingat dan memahami pengetahuan faktual dan konsep muatan lokal Bahasa Inggris</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <strong>Keterangan :</strong> Skala penilaian capaian 0 - 4
      </div>
    </div>
    <!-- TABEL F -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">E. EKSTRAKURIKULER</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-sm">
          <thead >
            <tr class="text-uppercase text-center">
              <th style="width:4%">no</th>
              <th >Kegiatan Ekstrakurikuler</th>
              <th >CAPAIAN</th>
              <th >DESKRIPSI</th>
              <th style="width:14%">NILAI ANGKA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Project Kelas</td>
              <td>3,50</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,42</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Bahasa Inggris</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Science Project</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Scouting (Kepanduan)</td>
              <td>3,49</td>
              <td>A- (SANGAT BAIK)</td>
              <td>87,27</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <strong>Keterangan :</strong> Skala penilaian capaian 0 - 4
      </div>
    </div>

  <!-- STATUS -->
      <!-- <div class="card card-secondary">
        <div class="card-body text-center">
          <strong>Status:</strong> <span class="badge badge-success">Published</span><br>
          <small class="text-muted">Dipublikasikan pada 15 Januari 2026, 15.30 WIB</small>
        </div>
      </div> -->


    </div>
  </section>
</div>

	
								

<?php include('4footer.php'); ?>
<script>
function exportPDF(){

  const element = document.getElementById("reportPDF");

  const opt = {
    margin:       10,
    filename:     'report-learning-activities.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(element).save();

}
</script>
<?php include('5script.php'); ?>
<?php $page='master_kurikulum';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kurikulum Sekolah Alam</h3>
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
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
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
<th>Capaian</th>
<th>Deskripsi</th>
<th width="90px">Aksi</th>
</tr>
</thead>
<tbody>
	<tr>
		<td class="text-center">1</td>
		<td>Akhlak</td>
		<td>
			Peserta didik mampu menunjukkan perilaku berakhlak mulia, beriman dan bertakwa kepada Tuhan Yang Maha Esa,
			jujur, disiplin, bertanggung jawab, peduli terhadap sesama dan lingkungan, serta menerapkan nilai-nilai
			moral dalam kehidupan sehari-hari.
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
		<td>Logika</td>
		<td>
			Peserta didik mampu berpikir logis, kritis, dan sistematis melalui proses pengamatan, eksplorasi alam,
			pemecahan masalah, pengambilan keputusan berbasis data, serta mampu mengkomunikasikan hasil berpikirnya
			secara lisan maupun tertulis.
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
		<td>Leadership</td>
		<td>
			Peserta didik mampu menunjukkan jiwa kepemimpinan, kerja sama, komunikasi yang efektif,
			empati sosial, kemampuan mengelola diri dan kelompok, serta bertanggung jawab terhadap
			tugas dan peran yang dijalankan di lingkungan sekolah maupun masyarakat.
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
		<td class="text-center">4</td>
		<td>Bisnis / Kemandirian</td>
		<td>
			Peserta didik mampu mengembangkan sikap mandiri, kreatif, dan berjiwa wirausaha melalui
			kegiatan praktik nyata, pengelolaan sumber daya, perencanaan sederhana, serta memahami
			nilai kerja, usaha, dan keberlanjutan dalam kehidupan sehari-hari.
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
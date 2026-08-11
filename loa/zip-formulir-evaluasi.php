 <?php $page = ''; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Formulir Temuan Evaluasi
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
          
  <!-- card Tambah Temuan Evaluasi -->

    <div class="card rounded-3 shadow">
      
      <div class="card-header bg-primary text-white">
        <h5 class="card-title">Tambah Temuan Evaluasi</h5>
      </div>

      <form method="POST">
        <div class="card-body">

          <div class="alert alert-warning py-2">
            Semua field bertanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- ID Sistem -->
          <div class="mb-3">
            <label class="form-label">ID Temuan</label>
            <input type="text" class="form-control" name="id_temuan" value="Auto Generate" disabled>
          </div>

          <!-- CORE FIELD -->
          <h6 class="mt-3 text-primary">Core Information</h6>

          <div class="mb-3">
            <label class="form-label">Reference Module <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="reference_module" required value="monev setahun" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Reference ID</label>
            <input type="text" class="form-control" name="reference_id" value="http://localhost/si-sso/loa/monev-rekap-tahunan.php" disabled>
          </div>


            <div class="mb-3">
              <label class="form-label">Jenis Evaluasi <span class="text-danger">*</span></label>
              <select name="jenis_evaluasi" class="form-select" required>
                <option value="">-- Pilih Jenis --</option>
                <option>Pembelajaran(Proses)</option>
                <option>Kemajuan(Perkembangan)</option>
                <option>Lulusan(Outcome)</option>
                <option>Kurikulum(Sistem)</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Objek Evaluasi <span class="text-danger">*</span></label>
              <input type="text" name="objek" class="form-control" placeholder="Contoh: CPL 4 - Angk 2021 - periode kumulatif sem1-sem8" required>
            </div>

          <!-- <div class="mb-3">
            <label class="form-label">Periode <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="periode" required placeholder="Contoh: 2024/2025">
          </div> -->


          <div class="mb-3">
            <label class="form-label">Deskripsi Temuan <span class="text-danger">*</span></label>
            <textarea class="form-control" name="deskripsi_temuan" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Tingkat Prioritas <span class="text-danger">*</span></label>
            <select class="form-select" name="tingkat_prioritas" required>
              <option value="">-- Pilih --</option>
              <option value="Tinggi">Tinggi</option>
              <option value="Sedang">Sedang</option>
              <option value="Rendah">Rendah</option>
            </select>
          </div>

        </div>

        <div class="card-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="card">Batal</button> -->
          <!-- <button type="submit" class="btn btn-primary">Simpan Temuan</button> -->
          <a href="beranda.php" class="btn btn-secondary me-1">Batal</a> 
          <a href="evaluasi-pembelajaran.php" class="btn btn-primary me-1">Simpan Temuan</a> 
        </div>
      </form>

    </div>

         


   
        </div>
      </div>
    </div>
  </section>
</div>
<!-- ./content-wrapper -->

<?php include('4footer.php'); ?>


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
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
<?php $page = 'pemetaan_zend'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Pemetaan CPL-IK-CPMK
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
      
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

<!-- ========== CARD : Filter & Export ========== -->
<div class="card">
  <div class="card-body ">
    <div class="row">
      <div class="col-md-6">
                  <b>Kurikulum:</b> Merdeka Belajar &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> Peta B
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
      </button>  -->               
      <button type="button" class="btn btn-outline-success btn-sm">
        <i class="fas fa-file-download me-1"></i> Export
      </button>
      <button type="button" class="btn btn-outline-danger btn-sm">
        <i class="fas fa-ban me-1"></i> Reset
      </button>    
    </div>
  </div>

</div>



<!-- TAB NAV  -->
<ul class="nav nav-tabs">   
  <li class="nav-item" onclick="window.location='pemetaan-zend.php'"><a class="nav-link ">Pemetaan</a></li>
  <li class="nav-item" onclick="window.location='pemetaan-zend2.php'"><a class="nav-link active">Pembobotan</a></li>
  <li class="nav-item" onclick="window.location='pemetaan-zend3.php'"><a class="nav-link ">Preview</a></li>
</ul>

<!-- CPL Card Template -->
<form method="post" action="simpan_bobot.php">
  <div class="card mb-3 ">
    <div class="card-header">
      <h5 class="card-title">
       <button class="btn btn-outline-info btn-sm" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL1"><i class="fas fa-expand"></i></button>
       CPL 1: Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas)
     </h5>
   </div>
   <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="thead-light">
          <tr>
            <th>IK</th>
            <th>Mata Kuliah</th>
            <th>CPMK</th>
            <th width="120px">Bobot CPMK </th>
            <th width="100px">Bobot IK </th>
          </tr>
        </thead>
        <tbody>
          <!-- IK.1.1 -->
          <tr class="table-primary">
            <td colspan="4">IK.1.1 Memahami dinul Islam serta pemikiran dan peradaban umat Islam</td>
            <td rowspan="6">
              <input type="number" name="bobot_ik[IK1]" value="25" class="form-control form-control-sm">
            </td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-1 <br><small>Pendidikan Agama Islam</small></td>
            <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
            <td><input type="number" name="bobot_cpmk[UNI600-1]" value="25" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-2 <br><small>Pendidikan Agama Islam</small></td>
            <td>Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari</td>
            <td><input type="number" name="bobot_cpmk[UNI600-2]" value="25" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-3 <br><small>Pendidikan Agama Islam</small></td>
            <td>Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
            <td><input type="number" name="bobot_cpmk[UNI600-3]" value="10" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-4 <br><small>Pendidikan Agama Islam</small></td>
            <td>Mengidentifikasi nilai-nilai kebaikan dan etika universal dalam ajaran Islam</td>
            <td><input type="number" name="bobot_cpmk[UNI600-4]" value="20" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-5 <br><small>Pendidikan Agama Islam</small></td>
            <td>Merefleksikan kesesuaian perilaku pribadi dengan nilai-nilai keislaman</td>
            <td><input type="number" name="bobot_cpmk[UNI600-5]" value="20" class="form-control form-control-sm"></td>
          </tr>

          <!-- IK.1.2 -->
          <tr class="table-primary">
            <td colspan="4">IK.1.2 Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
            <td rowspan="4">
              <input type="number" name="bobot_ik[IK2]" value="75" class="form-control form-control-sm">
            </td>
          </tr>
          <tr>
            <td></td>
            <td style="white-space: nowrap;">UNI600-1 <br><small>Pendidikan Agama Islam</small></td>
            <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
            <td><input type="number" name="bobot_cpmk[UNI600-1-2]" value="25" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI600-5 <br><small>Pendidikan Agama Islam</small></td>
            <td>Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman</td>
            <td><input type="number" name="bobot_cpmk[UNI600-5-2]" value="25" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td></td>
            <td>UNI601-1 <br><small>Islam Ulil Albab</small></td>
            <td>Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits</td>
            <td><input type="number" name="bobot_cpmk[UNI601-1]" value="50" class="form-control form-control-sm"></td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
    <div class="card-footer d-flex justify-content-end">
      <p class="me-auto text-muted">Klik 'SImpan Perubahan' untuk menerapkan pembobotan terbaru</p>
      <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
    </div>
  </div>
</form>


<!-- CPL Card Template -->
<div class="card mb-3">
  <div class="card-header">
    <h5 class="card-title">
      <button class="btn btn-outline-info btn-sm" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL1"><i class="fas fa-expand"></i></button>                
      CPL 2: Kemampuan menerapkan metode, keterampilan, dan piranti teknik yang modern yang diperlukan untuk praktek keteknikkimiaan
    </h5>
  </div>
  <div id="daftarIKCPL1" class="collapse show">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="thead-light">
            <tr>
              <th>IK</th>
              <th>Mata Kuliah</th>
              <th>CPMK</th>
              <th>Bobot CPMK </th>
              <th>Bobot IK </th>
            </tr>
          </thead>
          <tbody>
            <!-- IK.1.1 -->
            <tr class="table-primary">
              <td colspan="4">IK.1.1 Memahami dinul Islam serta pemikiran dan peradaban umat Islam</td>
              <td rowspan="6">
                <input type="number" name="bobot_ik[IK1]" value="25" class="form-control form-control-sm">
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="white-space: nowrap;">UNI600-1 <br><small>Pendidikan Agama Islam</small></td>
              <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
              <td><input type="number" name="bobot_cpmk[UNI600-1]" value="25" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-2 <br><small>Pendidikan Agama Islam</small></td>
              <td>Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari</td>
              <td><input type="number" name="bobot_cpmk[UNI600-2]" value="25" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-3 <br><small>Pendidikan Agama Islam</small></td>
              <td>Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
              <td><input type="number" name="bobot_cpmk[UNI600-3]" value="10" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-4 <br><small>Pendidikan Agama Islam</small></td>
              <td>Mengidentifikasi nilai-nilai kebaikan dan etika universal dalam ajaran Islam</td>
              <td><input type="number" name="bobot_cpmk[UNI600-4]" value="20" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-5 <br><small>Pendidikan Agama Islam</small></td>
              <td>Merefleksikan kesesuaian perilaku pribadi dengan nilai-nilai keislaman</td>
              <td><input type="number" name="bobot_cpmk[UNI600-5]" value="20" class="form-control form-control-sm"></td>
            </tr>

            <!-- IK.1.2 -->
            <tr class="table-primary">
              <td colspan="4">IK.1.2 Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
              <td rowspan="4">
                <input type="number" name="bobot_ik[IK2]" value="75" class="form-control form-control-sm">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-1 <br><small>Pendidikan Agama Islam</small></td>
              <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
              <td><input type="number" name="bobot_cpmk[UNI600-1-2]" value="25" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI600-5 <br><small>Pendidikan Agama Islam</small></td>
              <td>Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman</td>
              <td><input type="number" name="bobot_cpmk[UNI600-5-2]" value="25" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <td></td>
              <td>UNI601-1 <br><small>Islam Ulil Albab</small></td>
              <td>Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits</td>
              <td><input type="number" name="bobot_cpmk[UNI601-1]" value="50" class="form-control form-control-sm"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer d-flex justify-content-end">
      <p class="me-auto text-muted">Klik 'SImpan Perubahan' untuk menerapkan pembobotan terbaru</p>
      <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
    </div>
  </div>
</div>

<!-- Tambahkan CPL card lain sesuai kebutuhan -->


<script>
  function toggleById(id, btn) {
    const row = document.getElementById(id);
    if (!row) return;

    row.classList.toggle('d-none');

    btn.innerText = row.classList.contains('d-none')
    ? 'Open'
    : 'Close';
  }
</script>






</div>
</div>
</div>
</section>
</div>

<?php include('4footer.php'); ?>

  <!-- Modal Tambah IK -->
<div class="modal fade" id="modalTambahIK" tabindex="-1" role="dialog" aria-labelledby="modalTambahIKLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahIKLabel">➕ Tambah IK</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTambahIK">
          <div class="form-group">
            <label for="selectIK">Pilih Indikator (IK)</label>
            <select class="form-control" id="selectIK" required>
              <option value="">-- Pilih IK --</option>
              <option value="IK1">11.1. Mampu merumuskan masalah ketekniksipilan</option>
              <option value="IK2">11.2. Mampu memanfaatkan referensi dan sumber daya</option>
              <!-- Tambah opsi lain sesuai kebutuhan -->
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" form="formTambahIK">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah MK-CPMK -->
<div class="modal fade" id="modalTambahMKCPMK1" tabindex="-1" role="dialog" aria-labelledby="modalTambahMKCPMK1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahMKCPMK1Label">➕ Tambah MK-CPMK</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTambahMKCPMK1">
          <div class="form-group">
            <label for="selectMK">Pilih Mata Kuliah</label>
            <select class="form-control" id="selectMK" required>
              <option value="">-- Pilih Mata Kuliah --</option>
              <option value="MK1">MK Struktur Beton</option>
              <option value="MK2">MK Mekanika Tanah</option>
              <option value="MK3">MK Geoteknik</option>
              <!-- Tambah opsi lain sesuai kebutuhan -->
            </select>
          </div>
          <div class="form-group">
            <label for="selectCPMK">Pilih CPMK</label>
            <select class="form-control" id="selectCPMK" required>
              <option value="">-- Pilih CPMK --</option>
              <option value="CPMK1">CPMK 1</option>
              <option value="CPMK2">CPMK 2</option>
              <option value="CPMK3">CPMK 3</option>
              <!-- Tambah opsi lain sesuai kebutuhan -->
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" form="formTambahMKCPMK1">Simpan</button>
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
        <p>pilihan developmen :
        -pembobotan dg koefisien, atau persentase
      -pembobotan hanya IK, atau IK dan CPMK</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
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
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
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


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='pemetaan-zend.php'"><a class="nav-link ">Pemetaan</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-zend2.php'"><a class="nav-link ">Pembobotan</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-zend3.php'"><a class="nav-link active">Preview</a></li>
  </ul>

        <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                      <thead class="table-dark text-center">
                        <!-- Baris 1: CPL -->
                        <tr>
                          <!-- <th rowspan="2">Kode MK</th> -->
                          <th rowspan="2" colspan="2">CPMK</th>
                        <th colspan="2" data-bs-toggle="tooltip" title="CPL 1: Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami">CPL 1</th>
                          <th colspan="2">CPL 2</th>
                          <th colspan="3">CPL 3</th>
                          <th colspan="2">CPL 4</th>
                          <th colspan="2">CPL 5</th>
                          <th colspan="2">CPL 6</th>
                          <th colspan="2">CPL 7</th>
                          <th>CPL 8</th>
                          <th colspan="2">CPL 9</th>
                          <th>CPL 10</th>
                        </tr>
                        <!-- Baris 2: IK -->
                        <tr>
                          <th data-bs-toggle="tooltip" title="IK 1: Menunjukkan perilaku islami pada setiap peran yang dijalani (50%)">IK 1 (50%)</th>
                          <th>IK 2 (50%)</th>
                          <th>IK 3 (30%)</th>
                          <th>IK 4 (70%)</th>
                          <th>IK 5 (40%)</th>
                          <th>IK 6 (30%)</th>
                          <th>IK 7 (30%)</th>
                          <th>IK 8 (50%)</th>
                          <th>IK 9 (50%)</th>
                          <th>IK 10</th>
                          <th>IK 11</th>
                          <th>IK 12</th>
                          <th>IK 13</th>
                          <th>IK 14</th>
                          <th>IK 15</th>
                          <th>IK 16 (100%)</th>
                          <th>IK 17 (65%)</th>
                          <th>IK 18 (35%)</th>
                          <th>IK 19 (100%)</th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- Semester 1 -->
                        <tr class="table-primary text-center">
                          <td colspan="23"><strong>Semester 1</strong></td>
                        </tr>
                        <tr>
                          <td>STE120</td>
                          <td data-bs-toggle="tooltip" title="Deskripsi CPMK 1">1</td>
                          <td class="text-center">60%</td><td></td>
                          <td></td><td></td>
                          <td></td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <td>STE120</td>
                          <td>2</td>
                          <td></td><td class="text-center">100%</td>
                          <td></td><td></td>
                          <td></td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <td>STE121</td>
                          <td>1</td>
                          <td></td><td></td>
                          <td class="text-center">100%</td><td></td>
                          <td></td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>

                        <!-- Semester 2 -->
                        <tr class="table-primary text-center">
                          <td colspan="23"><strong>Semester 2</strong></td>
                        </tr>
                        <tr>
                          <td>STE122</td>
                          <td>1</td>
                          <td></td><td></td>
                          <td></td><td class="text-center">100%</td>
                          <td></td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <td>STE123</td>
                          <td>1</td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td class="text-center">100%</td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>

                        <!-- Semester 8 -->
                        <tr class="table-primary text-center">
                          <td colspan="23"><strong>Semester 8</strong></td>
                        </tr>
                        <tr>
                          <td>STE124</td>
                          <td>1</td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td><td></td>
                          <td class="text-center">100%</td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <td>STE124</td>
                          <td>2</td>
                          <td class="text-center">40%</td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td><td></td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  

                </div>
              </div>



                     
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
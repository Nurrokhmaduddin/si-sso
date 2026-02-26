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
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>  -->   
              </div>
            </div>

        </div>


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='pemetaan-zend.php'"><a class="nav-link active">Pemetaan</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-zend2.php'"><a class="nav-link ">Pembobotan</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-zend3.php'"><a class="nav-link ">Preview</a></li>
    <li class="nav-item" onclick="window.location='monev-status-pemetaan.php'"><a class="nav-link ">Checking</a></li>
  </ul>

<!-- ========== CARD : pemetaan ========== -->
<div class="card">
  <div class="card-header">
    <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailIK1')"><i class="fas fa-expand"></i></button>
    <!-- <button type="button" class="btn btn-sm btn-outline-danger">
      <i class="fas fa-ban"></i>
    </button> -->
    CPL 1 | deskripsi CPLnya 
  </div>
  <div class="card-body d-none" id="detailIK1" >
    <table class="table table1 table-bordered table-striped table-sm ">
      <thead >
        <tr class="text-uppercase">
          <th style="text-align: center;">Aksi</th>
          <th>Kode IK</th>
          <th>Deskripsi IK</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailCPMK1')"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-trash"></i>
            </button>
          </td>
          <td>IK.1.1</td>
          <td>Memahami dinul Islam serta pemikiran dan peradaban umat Islam M </td>
        </tr>



        <!-- ROW TURUNAN (EXPANDABLE) -->
        <tr id="detailCPMK1" class="d-none bg-light">
          <td colspan="4">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-dark">
                <tr class="text-uppercase">
                  <th class="text-center">Aksi</th>
                  <th>Nama MK</th>
                  <th>Kode CPMK</th>
                  <th>Deskripsi CPMK</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                  <td>MK Pengantar</td>
                  <td>SKS230-1</td>
                  <td>Memahami dinul Islam</td>
                </tr>

                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                  <td>MK Pengantar</td>
                  <td>SKS230-2</td>
                  <td>Menunjukkan perilaku Islami</td>
                </tr>

                <tr>
                  <td colspan="4">
                    <button class="btn btn-outline-primary btn-xs w-100" data-bs-toggle="modal" data-bs-target="#modalTambahMKCPMK1">
                      Tambah CPMK
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>


        <tr>
          <td>
            <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailCPMK1')"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-trash"></i>
            </button>

          </td>
          <td>IK.1.2</td>
          <td>Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
        </tr>
        <tr>
          <td colspan="3"><button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#modalTambahIK"> Tambah IK</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


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

<!-- ========== CARD : pemetaan ========== -->
<div class="card">
  <div class="card-header">
    <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailIK2')"><i class="fas fa-expand"></i></button>
    <!-- <button type="button" class="btn btn-sm btn-outline-danger">
      <i class="fas fa-ban"></i>
    </button> -->
    CPL 2 | deskripsi CPLnya 
  </div>
  <div class="card-body d-none" id="detailIK2" >
    <table class="table table1 table-bordered table-striped table-sm ">
      <thead >
        <tr class="text-uppercase">
          <th style="text-align: center;">Aksi</th>
          <th>Kode IK</th>
          <th>Deskripsi IK</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailCPMK2')"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-trash"></i>
            </button>
          </td>
          <td>IK.2.1</td>
          <td>Memahami dinul Islam serta pemikiran dan peradaban umat Islam M </td>
        </tr>



        <!-- ROW TURUNAN (EXPANDABLE) -->
        <tr id="detailCPMK2" class="d-none bg-light">
          <td colspan="4">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-dark">
                <tr class="text-uppercase">
                  <th class="text-center">Aksi</th>
                  <th>Nama MK</th>
                  <th>Kode CPMK</th>
                  <th>Deskripsi CPMK</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                  <td>MK Pengantar</td>
                  <td>SKS230-1</td>
                  <td>Memahami dinul Islam</td>
                </tr>

                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                  <td>MK Pengantar</td>
                  <td>SKS230-2</td>
                  <td>Menunjukkan perilaku Islami</td>
                </tr>

                <tr>
                  <td colspan="4">
                    <button class="btn btn-outline-primary btn-xs w-100" data-bs-toggle="modal" data-bs-target="#modalTambahMKCPMK1">
                      Tambah CPMK
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>


        <tr>
          <td>
            <button class="btn btn-sm btn-outline-info" onclick="toggleById('detailCPMK2')"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-trash"></i>
            </button>

          </td>
          <td>IK.1.2</td>
          <td>Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
        </tr>
        <tr>
          <td colspan="3"><button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#modalTambahIK"> Tambah IK</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


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
<!-- ========== CARD : pemetaan kedua ========== -->
<!-- <div class="card">
  <div class="card-body">
    <table class="table table-bordered table-striped table-sm">
      <thead class="table-dark">
        <tr class="text-uppercase">
          <th class="text-center">Aksi</th>
          <th>Kode IK</th>
          <th>Deskripsi IK</th>
        </tr>
      </thead>

      <tbody>
        <tr class="ik-row" style="cursor:pointer">
          <td class="text-center">
            <i class="fas fa-chevron-right toggle-icon"></i>
          </td>
          <td>IK.1.1</td>
          <td>Memahami dinul Islam serta pemikiran Islam</td>
        </tr>

        <tr class="cpmpk-row d-none bg-light">
          <td colspan="3">
            <table class="table table-bordered table-sm mb-0">
              <thead class="table-secondary">
                <tr class="text-uppercase">
                  <th class="text-center">Aksi</th>
                  <th>Nama MK</th>
                  <th>Kode CPMK</th>
                  <th>Deskripsi CPMK</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                  <td>MK Pengantar</td>
                  <td>CPMK-1</td>
                  <td>Memahami konsep dasar Islam</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr class="ik-row" style="cursor:pointer">
          <td class="text-center">
            <i class="fas fa-chevron-right toggle-icon"></i>
          </td>
          <td>IK.1.2</td>
          <td>Menunjukkan perilaku Islami</td>
        </tr>
        <tr class="cpmpk-row d-none bg-light">
          <td colspan="3">
            <em>Belum ada CPMK</em>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script>
document.querySelectorAll('.ik-row').forEach(function(row) {
  row.addEventListener('click', function () {
    const detailRow = this.nextElementSibling;
    const icon = this.querySelector('.toggle-icon');

    if (detailRow && detailRow.classList.contains('cpmpk-row')) {
      detailRow.classList.toggle('d-none');

      icon.classList.toggle('fa-chevron-right');
      icon.classList.toggle('fa-chevron-down');
    }
  });
});
</script> -->




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
              <option value="MK1">MK Struktur Beton (5 CPMK)</option>
              <option value="MK1">MK Struktur Beton (9 CPMK)</option>
              <option value="MK2">MK Mekanika Tanah (3 CPMK)</option>
              <option value="MK3">MK Geoteknik (3 CPMK)</option>
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
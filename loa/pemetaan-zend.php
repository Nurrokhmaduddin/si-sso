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
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
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



        <div style="text-align: left;" class="mr-2">
          <button type="button"  onclick="window.location=;" class="btn btn-info btn-tab">Pemetaan</button>
          <button type="button"  onclick="window.location=;" class="btn btn-default btn-tab">Pembobotan</button>
          <button type="button"  onclick="window.location=;" class="btn btn-default btn-tab">Preview</button>
        </div>

        <div class="card">
          <div class="card-header">
          <button class="btn btn-sm btn-info" onclick="toggleById('detailIK1')">Open / Close</button>
          <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-ban"></i>
                      </button>
                  CPL 1 | deskripsi CPLnya 
                </div>
          <div class="card-body" id="detailIK1" class="d-none bg-light">
            <table class="table table1 table-bordered table-striped table-sm datatables1">
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
                    <button class="btn btn-sm btn-info" onclick="toggleById('detailCPMK1')">Open / Close</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                  </td>
                  <td>IK.1.1</td>
                  <td>Memahami dinul Islam serta pemikiran dan peradaban umat Islam M </td>
                </tr>

                  

                <!-- ROW TURUNAN (EXPANDABLE) -->
                <tr id="detailCPMK1" class="d-none bg-light">
                  <td colspan="3">
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
                            <button class="btn btn-outline-primary btn-xs w-100">
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
                  <button class="btn btn-sm btn-info" onclick="toggleById('detailCPMK1')">Open / Close</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                     
                    </td>
                  <td>IK.1.2</td>
                  <td>Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
                </tr>
                <tr>
                  <td colspan="3"><button class="btn btn-outline-primary btn-sm w-100">Tambah IK</button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer">
             
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
    <!-- IK ROW -->
    <tr class="ik-row" style="cursor:pointer">
      <td class="text-center">
        <i class="fas fa-chevron-right toggle-icon"></i>
      </td>
      <td>IK.1.1</td>
      <td>Memahami dinul Islam serta pemikiran Islam</td>
    </tr>

    <!-- CPMK DETAIL ROW -->
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

    <!-- IK ROW 2 -->
    <tr class="ik-row" style="cursor:pointer">
      <td class="text-center">
        <i class="fas fa-chevron-right toggle-icon"></i>
      </td>
      <td>IK.1.2</td>
      <td>Menunjukkan perilaku Islami</td>
    </tr>

    <!-- CPMK DETAIL ROW 2 -->
    <tr class="cpmpk-row d-none bg-light">
      <td colspan="3">
        <em>Belum ada CPMK</em>
      </td>
    </tr>
  </tbody>
</table>
</div>
<script>
document.querySelectorAll('.ik-row').forEach(function(row) {
  row.addEventListener('click', function () {
    const detailRow = this.nextElementSibling;
    const icon = this.querySelector('.toggle-icon');

    if (detailRow && detailRow.classList.contains('cpmpk-row')) {
      detailRow.classList.toggle('d-none');

      // toggle icon
      icon.classList.toggle('fa-chevron-right');
      icon.classList.toggle('fa-chevron-down');
    }
  });
});
</script>



                     
                  </div>
      </div>
    </div>
  </section>
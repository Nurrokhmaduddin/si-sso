<?php $page='master_walikelas';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Walikelas</h3>
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
            <th>Username(NIK)</th>
            <th>DisplayName</th>
            <th>Email/Nomor HP</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td>005100401</td>
            <td>Moh Fuad Bustomi Zen, S.T., M.T.</td>
            <td>mfzen@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td>005110101</td>
            <td>Fitri Nugraheni, Ir., S.T., M.T., Ph.D.</td>
            <td>fitri.nugraheni@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td>005110199</td>
            <td>Dosen JTS FTSP</td>
            <td>jts.ftsp@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>
            <td class="text-center">4</td>
            <td>014210101</td>
            <td>Dr. Nur Kholis S.Ag., M.Sh.Ec.</td>
            <td>nur.kholis@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-secondary">NonAktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>
            <td class="text-center">5</td>
            <td>015110101</td>
            <td>Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng.</td>
            <td>berlian.k@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-secondary">NonAktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>                   
          <tr>
            <td class="text-center">6</td>
            <td>045101201</td>
            <td>CILACS TSP</td>
            <td>cilacs@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-secondary">NonAktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>
            <td class="text-center">7</td>
            <td>045110403</td>
            <td>Drs. Jamroni MSI</td>
            <td>jamroni@uii.ac.id</td>
            <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-secondary">NonAktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
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
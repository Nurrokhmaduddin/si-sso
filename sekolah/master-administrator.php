<?php $page='master_administrator';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Administrator</h3>
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
          <tr class="text-uppercase">
            <th width="5px">No.</th>
            <th>Username</th>
            <th>DisplayName</th>
            <th>Email/Nomor HP</th>
            <th style="text-align: center;">Foto </th>
            <th>Status</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align="center">1</td>
            <td>admintsipil</td>                    
            <td>Administrator</td>
            <td>
              <a href="mailto:admintsipil@gmail.com">admintsipil@gmail.com</a><br>
              <a href="https://wa.me/6284444444" class="text-success" target="_blank">6284444444</a>
            </td>
            <td align="center"><img style="width: 40px;" alt="Foto"></td>
            <td><span class="badge badge-info">Aktif</span></td>
            <td align="center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button>
              <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
              <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            </td>
          </tr>
          <tr>
            <td align="center">2</td>
            <td>agung</td>
            <td>Agung Tri Wibowo</td>
            <td>
              <a href="mailto:[email&#160;protected]">[email&#160;protected]</a><br>
              <a href="https://wa.me/6289237728822" class="text-success" target="_blank">6289237728822</a>
            </td>
            <td align="center"><img style="width: 40px;" alt="Foto"></td>
            <td><span class="badge badge-secondary">NonAktif</span></td>
            <td align="center">
              <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button>
              <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
              <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
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
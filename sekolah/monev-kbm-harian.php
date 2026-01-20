<?php $page = 'kelas_akademik'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


  <div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kelas Akademik</h3>
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
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Daftar Kelas Akademik<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Periode:</b> 2024 / 2025 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Semester:</b> Ganjil
                </div>
                <!-- <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div> -->

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
                 <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
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
                		<th>Periode</th>
                		<th>Semester</th>
                		<th>Wali Kelas</th>
                		<th>Tingkatan Kelas</th>
                		<th style="text-align: center;">Jumlah Murid</th>
                		<th style="text-align: center;">Aksi</th>
                	</tr>                  
                </thead>
                <tbody>
                	<tr>
          <td>1</td>
          <td>2024 / 2025</td>
          <td>Ganjil</td>
          <td>Iftah Bahrol 'Ulum</td>
          <td>SD 1</td>
          <td>18</td>
          <td>
          	

<a href="monev-kbm-harian-plan.php">
          		<button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-folder-open"></i>plan</button>
          	</a>     
          	<a href="monev-kbm-harian-report.php">
          		<button type="button" class="btn btn-sm btn-info"><i class="fas fa-folder-open"></i></button>
          	</a>
          	     	<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4402')"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>2024 / 2025</td>
          <td>Ganjil</td>
          <td>Siti Aminah</td>
          <td>SD 2</td>
          <td>20</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-info">
                				<i class="fas fa-info-circle"></i>
                			</button>
                			<button type="button" class="btn btn-sm btn-outline-primary">
                				<i class="fas fa-upload"></i>
                			</button>
                			<button type="button" class="btn btn-sm btn-outline-success">
                				<i class="fas fa-download"></i>
                			</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>2024 / 2025</td>
          <td>Ganjil</td>
          <td>Ahmad Fauzi</td>
          <td>SD 3</td>
          <td>19</td>
          <td>
            <a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/VmxwdU5FODBGazNHMVRURktPV2t6bkwwMDAwOA">
                				<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
                			</a>

                			<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4419')"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>2024 / 2025</td>
          <td>Ganjil</td>
          <td>Iftah Bahrol 'Ulum</td>
          <td>SD 4</td>
          <td>17</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>2024 / 2025</td>
          <td>Genap</td>
          <td>Siti Aminah</td>
          <td>SD 1</td>
          <td>18</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>2024 / 2025</td>
          <td>Genap</td>
          <td>Ahmad Fauzi</td>
          <td>SD 2</td>
          <td>20</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>2024 / 2025</td>
          <td>Genap</td>
          <td>Iftah Bahrol 'Ulum</td>
          <td>SD 3</td>
          <td>19</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>2025 / 2026</td>
          <td>Ganjil</td>
          <td>Siti Aminah</td>
          <td>SD 1</td>
          <td>21</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>2025 / 2026</td>
          <td>Ganjil</td>
          <td>Ahmad Fauzi</td>
          <td>SD 2</td>
          <td>22</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>2025 / 2026</td>
          <td>Ganjil</td>
          <td>Iftah Bahrol 'Ulum</td>
          <td>SD 3</td>
          <td>20</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>2025 / 2026</td>
          <td>Genap</td>
          <td>Siti Aminah</td>
          <td>SD 4</td>
          <td>18</td>
          <td>
            <button class="btn btn-info btn-xs">Detail</button>
            <button class="btn btn-warning btn-xs">Edit</button>
          </td>
        </tr>      
        </tbody>
    </table>


              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

	
								

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
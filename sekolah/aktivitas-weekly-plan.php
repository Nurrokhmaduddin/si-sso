<?php $page = 'plan_weekly'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


  <div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Weekly Plan</h3>
        <p class="text-muted mb-0">16 minggu-> 1 semester</p>
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
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Daftar Plan Daily<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Periode:</b> 2024 / 2025 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Wali Kelas:</b> Iftah Bahrol 'Ulum
                </div>
                <div class="col-md-6">
                  <b>Tingkatan Kelas:</b> SD 1 (Pluto)
                </div>
                <div class="col-md-6">
                  <b>Jumlah Murid:</b> 18
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
                		<th>Semester</th>
                		<th>Minggu ke</th>
                    <th>Status</th>
                		<th style="text-align: center;">Aksi</th>
                	</tr>                  
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">1</td>                    
                    <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-outline-info btn-xs"
                      onclick="window.location.href='aktivitas-weekly-plan-detail.php'">
                      Detail
                    </button>
                    <button class="btn btn-outline-info btn-xs"
                      onclick="window.location.href='aktivitas-weekly-plan-detail.php'">
                      Report
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">2</td>
                    <td>Publish</td>
                    <td class="text-center">
                      <button class="btn btn-outline-info btn-xs"
                      onclick="window.location.href='aktivitas-weekly-plan-detail2.php'">
                      Detail
                    </button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">3</td>
                     <td>Publish</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">4</td>
                     <td>Publish</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">5</td>
                     <td>Publish</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">6</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">6</td>
                     <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">7</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">7</td>
                     <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">8</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">8</td>
                     <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">9</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">9</td>
                     <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10</td>
                    <td>2024 / 2025 (Ganjil)</td>
                    <td class="text-center">10</td>
                     <td>Draf</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">Detail</button>
                      <button class="btn btn-warning btn-xs">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">11</td>
                    <td>2024 / 2025 (Genap)</td>
                    <td class="text-center">11</td>
                     <td>Draf</td>
                    <td class="text-center">
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
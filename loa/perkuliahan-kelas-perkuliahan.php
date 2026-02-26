<?php $page = 'kelas_perkuliahan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kelas Perkuliahan 
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
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023  &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Periode Akademik:</b> 2024/2025 - Gasal  &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Mata Kuliah:</b> Semua
                </div>               
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
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


			<!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
               	<thead  class="text-uppercase">
               		<tr>
               			<th width="5px">No.</th>
               			<th>Dosen Pengampu</th>
               			<th>Mata Kuliah</th>
               			<th>Jalur Kelas</th>
               			<th style="text-align: center;">Kelas</th>
               			<th style="text-align: center;">CPMK</th>
               			<th style="text-align: center;">Mahasiswa</th>
               			<th style="text-align: center;">Aksi</th>
               		</tr>
               	</thead>
               	<tbody>
               		<tr>
               			<td align="center">1</td>
               			<td>
               				Tri Nugroho Sulistyantoro, S.T., M.T.                              <br>
               				<small><b>(195110502)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">A</td>
               			<td align="center">5</td>
               			<td align="center">
               			27                            </td>
               			<td align="center">
               				<a href="perkuliahan-kelas-perkuliahan-detail.php">
               					<button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i></button>
               				</a>

               				<button type="button" class="btn btn-outline-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4402')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">2</td>
               			<td>
               				Tri Nugroho Sulistyantoro, S.T., M.T.                              <br>
               				<small><b>(195110502)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">C</td>
               			<td align="center">5</td>
               			<td align="center">
               			33                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/VmxwdU5FODBGazNHMVRURktPV2t6bkwwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4419')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">3</td>
               			<td>
               				Andi Purnomo, S.T., M.T.                              <br>
               				<small><b>(065110501)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">B</td>
               			<td align="center">5</td>
               			<td align="center">
               			26                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/U1Zadk5FMDBzYjVSOU9ESk5PRFF6R3cwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4428')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">4</td>
               			<td>
               				Vendie Abma, S.T., M.T.                              <br>
               				<small><b>(155111310)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">D</td>
               			<td align="center">5</td>
               			<td align="center">
               			23                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/ZGpNMGR6UXpORkJKTW9NeU16SWQzYzBtTkUwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4442')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">5</td>
               			<td>
               				Rizki Budiman, S.T., M.T.                              <br>
               				<small><b>(245111203)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">F</td>
               			<td align="center">5</td>
               			<td align="center">
               			25                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/WVVnMFVEUnpOVWdxd25jeWNUSWQzYzBtczgwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4452')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">6</td>
               			<td>
               				Vendie Abma, S.T., M.T.                              <br>
               				<small><b>(155111310)</b></small>
               			</td>
               			<td>
               				Metode Pelaksanaan Bangunan                              <br>
               				<small><b>(STS704)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">E</td>
               			<td align="center">5</td>
               			<td align="center">
               			22                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/ZGxZMGF6VnJNSDF4bkxBeFlUSWQzYzBtZkowMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4501')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">7</td>
               			<td>
               				Miftahul Fauziah, S.T., M.T., Ph.D.                              <br>
               				<small><b>(955110103)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">F</td>
               			<td align="center">9</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/WjBWYU5Fc3ozV1d3Rk56QmtORlV6aXkwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4304')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">8</td>
               			<td>
               				Prayogo Afang Prayitno, S.T., M.Sc.                              <br>
               				<small><b>(205111303)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">C</td>
               			<td align="center">9</td>
               			<td align="center">
               			20                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/TWtsTE5HZ3oyemR5RWFUUkpPRk16TWkwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4348')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">9</td>
               			<td>
               				Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng.                              <br>
               				<small><b>(015110101)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">G</td>
               			<td align="center">9</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/WjNOQk5IQTBVaTFpZFJERldNell6WlcwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4413')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">10</td>
               			<td>
               				Ir. Mochammad Sigit Darmosudiharjo, M.T.                              <br>
               				<small><b>(885110103)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">E</td>
               			<td align="center">9</td>
               			<td align="center">
               			22                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/WVVNMFV6UkVORmc3UFFNNE1qSWQzYzBtZGQwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4448')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">11</td>
               			<td>
               				Muhamad Abdul HadiS.T., M.T.                              <br>
               				<small><b>(215111307)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">D</td>
               			<td align="center">9</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/V0cxS05HWTBlSm5Xek56YzFNVEl6N2MwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4471')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">12</td>
               			<td>
               				Muhamad Abdul HadiS.T., M.T.                              <br>
               				<small><b>(215111307)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">B</td>
               			<td align="center">9</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/TTBOQk5IUTF6TzhlY1pEZElNMEl6dHgwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4573')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">13</td>
               			<td>
               				Miftahul Fauziah, S.T., M.T., Ph.D.                              <br>
               				<small><b>(955110103)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">A</td>
               			<td align="center">9</td>
               			<td align="center">
               			21                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/UW5Ka05GSTFCZTBZaGNEZHpPVGd6OXQwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4579')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">14</td>
               			<td>
               				Ir. Subarkah, M.T.                              <br>
               				<small><b>(865110101)</b></small>
               			</td>
               			<td>
               				Bahan Perkerasan Jalan (+Pr)                              <br>
               				<small><b>(STS307)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">H</td>
               			<td align="center">9</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/V0VnMFRUVlRPRXJYOFR3eGVESWQzYzBtemwwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4581')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">15</td>
               			<td>
               				Dr.Eng. Mahmud Kori Effendi, S.T., M.T.                              <br>
               				<small><b>(195110103)</b></small>
               			</td>
               			<td>
               				Struktur Baja                              <br>
               				<small><b>(STS702)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">D</td>
               			<td align="center">4</td>
               			<td align="center">
               			16                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/U0RVME56Tk5NM3hNT3ZNeVR6SWQzYzBtZm0wMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4332')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">16</td>
               			<td>
               				Ir. Suharyatma, M.T.                              <br>
               				<small><b>(865110201)</b></small>
               			</td>
               			<td>
               				Struktur Baja                              <br>
               				<small><b>(STS702)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">C</td>
               			<td align="center">4</td>
               			<td align="center">
               			35                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/WVZoak5IZzBBRzlObVRUTjNOa016aVQwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4436')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">17</td>
               			<td>
               				Ir. Suharyatma, M.T.                              <br>
               				<small><b>(865110201)</b></small>
               			</td>
               			<td>
               				Struktur Baja                              <br>
               				<small><b>(STS702)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">A</td>
               			<td align="center">4</td>
               			<td align="center">
               			28                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/ZUVrMFFUUm5ObXpNcm93elJUSWQzYzBtb0IwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4463')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">18</td>
               			<td>
               				Ir. Suharyatma, M.T.                              <br>
               				<small><b>(865110201)</b></small>
               			</td>
               			<td>
               				Struktur Baja                              <br>
               				<small><b>(STS702)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">B</td>
               			<td align="center">4</td>
               			<td align="center">
               			27                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/VVRJeE5FUTFmb2FTclJETkNNVE16ek8wMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4531')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">19</td>
               			<td>
               				Vendie Abma, S.T., M.T.                              <br>
               				<small><b>(155111310)</b></small>
               			</td>
               			<td>
               				BIM untuk Manajemen Konstruksi                              <br>
               				<small><b>(STS904)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">A</td>
               			<td align="center">3</td>
               			<td align="center">
               			20                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/UVRFMFVqUnJNMEFaY3ZReVV6SWQzYzBtUUIwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4432')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">20</td>
               			<td>
               				Dr. Hanindya Kusuma Artati, S.T., M.T.                              <br>
               				<small><b>(045110407)</b></small>
               			</td>
               			<td>
               				Soil Mechanics II (+Lab)                              <br>
               				<small><b>(STS305)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">E</td>
               			<td align="center">7</td>
               			<td align="center">
               			24                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/ZFhkNE5ESXlOUXhCRGFEZHRORkV6bDIwMDAwOA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4274')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">21</td>
               			<td>
               				Melinda Dwi Rahmawati, S.T., M. Eng	                              <br>
               				<small><b>(245111202)</b></small>
               			</td>
               			<td>
               				Soil Mechanics II (+Lab)                              <br>
               				<small><b>(STS305)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">B</td>
               			<td align="center">7</td>
               			<td align="center">
               			25                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/ZG1JMFZUTldNbXhhalU4M1ZUSWQzYzBtWEowMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4327')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">22</td>
               			<td>
               				Anisa Nur AmalinaS.T., M.Eng.                              <br>
               				<small><b>(215111305)</b></small>
               			</td>
               			<td>
               				Soil Mechanics II (+Lab)                              <br>
               				<small><b>(STS305)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">A</td>
               			<td align="center">7</td>
               			<td align="center">
               			25                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/UlU0ME1ETkNNem03eTlJNFNqSWQzYzBtMDQwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4338')"><i class="fas fa-trash"></i></button>
               			</td>
               		</tr>
               		<tr>
               			<td align="center">23</td>
               			<td>
               				Aisya Galuh Laksita, S.T., M. Eng                              <br>
               				<small><b>(245111201)</b></small>
               			</td>
               			<td>
               				Soil Mechanics II (+Lab)                              <br>
               				<small><b>(STS305)</b></small>
               			</td>
               			<td>
               				Civil Engineering Regular                              <br>
               				<small><b>(511)</b></small>
               			</td>
               			<td align="center">C</td>
               			<td align="center">7</td>
               			<td align="center">
               			25                            </td>
               			<td align="center">
               				<a href="https://tsipil-master.tmidev.my.id/kelas_mata_kuliah/mahasiswa/Tm5BMFNUTnROR0VoSUJnNWJqSWQzYzBtemkwMDAxMA">
               					<button type="button" class="btn btn-sm btn-info"><i class="fas fa-users"></i> Mahasiswa</button>
               				</a>

               				<button type="button" class="btn btn-danger mrg-btn btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus/4349')"><i class="fas fa-trash"></i></button>
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
<!-- ./content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">

          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>

          <!-- Pilihan -->
          <div class="mb-3">
            <label for="lembaga" class="form-label">Periode Akademik</label>
            <select name="lembaga" id="lembaga" class="form-select">
            	<option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
        </div>
      </form>
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
          hanya menampung semua mata kuliah yg status (aktif) ketika create. untuk memisahkan mana perkuliahan fakta, dan perkuliahan konversi.
        </p>
        <p>
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
        <p>buatkan juga desain database, ada kelas yang team teaching (multi dosen pengampu dalam satu kelas)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
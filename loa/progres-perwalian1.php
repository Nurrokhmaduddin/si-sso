<?php $page = 'progress_perwalian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Perwalian - Bimbingan Akademik
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
              <div class="card-tools ml-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
             
            </div>

            <div class="card-footer">
              <div class="card-tools ml-auto">
                 <!-- <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='monev-rekap-kelas.php'">
                <span class="fas fa-reply mr-1"></span> Kembali
              </button> -->

                <!-- <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button>    
              </div>
            </div>

          </div>



<!-- ========== CARD : tabel granular ========== -->
<div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table1 table-bordered table-striped table-sm datatables1">
                  
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>17524015</td>
            <td>ABDULLAH HILMAN</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>18524021</td>
            <td>ADHIEL PRASETYA</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>19524079</td>
            <td>Aditya Bagas Eka Putra</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>19524080</td>
            <td>Aditya Bagus Eka Putra</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>5</td>
            <td>19524098</td>
            <td>Aditya Nugraha</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>6</td>
            <td>19524091</td>
            <td>Adli Sami Candra</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>7</td>
            <td>17524033</td>
            <td>AHMAD KHODI INZAGHI</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>8</td>
            <td>17524029</td>
            <td>AHSAN JUNDI ASSAYAT</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>9</td>
            <td>17524042</td>
            <td>BINTANG MANGGALA AJI</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>10</td>
            <td>17524012</td>
            <td>DIANDRI PERKASA PUTRA</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>11</td>
            <td>17524006</td>
            <td>DIMAS ALDIO ILHAM AGUSTA</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>12</td>
            <td>17524051</td>
            <td>DIRGA PUTRA WIJAYA</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>13</td>
            <td>18524019</td>
            <td>Dwiki Akmal Murad</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>14</td>
            <td>18524022</td>
            <td>Fahmi Haidar Ali</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>15</td>
            <td>17524040</td>
            <td>GALANG CAHYO RAHINO</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>16</td>
            <td>17524026</td>
            <td>INDAH SURYANI PUTRI</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>17</td>
            <td>17524036</td>
            <td>JABAR LAZUARDE</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>18</td>
            <td>17524049</td>
            <td>JIHAN NUR AKIFAH</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>19</td>
            <td>17524057</td>
            <td>KHOERUL ANWAR</td>
            <td><button>Detail</button></td>
        </tr>
        <tr>
            <td>20</td>
            <td>17524058</td>
            <td>KURNIA SATYA HAQI</td>
            <td><button>Detail</button></td>
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
<!-- ./content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            <select name="lembaga" id="lembaga" class="custom-select">
              <option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          buatkan fitur untuk migrasi dosen wali dengan membawa history di sisi mahasiswa
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
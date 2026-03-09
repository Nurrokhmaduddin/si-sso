<?php $page = 'transaksi_penjualan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Penjualan
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
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Gudang:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
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
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>     -->
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar </h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        
        <thead>
                  <tr align="center">
                    <th style="min-width: 40px;">No.</th>
                    <th>Lokasi Gudang</th>
                    <th style="min-width: 90px;">Tanggal Penjualan</th>
                    <th style="min-width: 80px;">No Faktur</th>
                    <th style="min-width: 80px;">Nomor PO</th>
                    <th style="min-width: 150px;">Toko Penerima</th>
                    <th style="min-width: 80px;">Nama Sales (kalau ada)</th>
                    <th style="min-width: 100px;">Total Harga Jual (Rp)</th>
                    <th style="min-width: 60px;">Status</th>
                    <th style="min-width: 160px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <td>1</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004681</td>
                    <td>PO-3387</td>
                    <td align="left">LARIS KLATEN</td>
                    <td align="left">OFFICE</td>                        <td align="right">15.999.448,50</td>
                    <td align="center">
                      <span class="badge badge-warning">DRAF</span>
                    </td>
                    <td align="center">
                      
                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5155 btn-disabled" onclick="detail(&#39;VW5Kdk5WRXhzaFlCRldUVkVOWG96Q1gwMDAwOA&#39;, &#39;5155&#39;)" fdprocessedid="p00qk"><i class="fas fa-envelope-open"></i> Draf</button>

                      <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi5155 btn-disabled" title="Cancel" onclick="cancel(&#39;5155&#39;)" fdprocessedid="mrn2z"><i class="fas fa-times"></i> Batal</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>2</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004684</td>
                    <td>PO-3499</td>
                    <td align="left">DEPO PELITA SOKARAJA</td>
                    <td align="left">OFFICE</td>                        <td align="right">1.670.400,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/V1VVMU56RmhOVUZ2RkhnNFNUSWQzYzBtSE8wMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5158 btn-disabled" title="Print Penjualan" fdprocessedid="6cd1om"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5158 btn-disabled" title="Detail" onclick="detail(&#39;U1hNMVRqRlpOWDJVSFhZNFpUSWQzYzBtTTUwMDAxMA&#39;, &#39;5158&#39;)" fdprocessedid="6y270d"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5158 btn-disabled" onclick="edit(&#39;5158&#39;)" fdprocessedid="kgrsgc"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>3</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004683</td>
                    <td>PO-3536</td>
                    <td align="left">DEPO PELITA SOKARAJA</td>
                    <td align="left">OFFICE</td>                        <td align="right">21.459.000,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/WjFBMVJqRndOVU9CcVBrM2F6SWQzYzBtbzEwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5157 btn-disabled" title="Print Penjualan" fdprocessedid="3b6l5"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5157 btn-disabled" title="Detail" onclick="detail(&#39;WmxVMVJERmtOV08xWHNzM2F6SWQzYzBtMW4wMDAxMA&#39;, &#39;5157&#39;)" fdprocessedid="b2wxc"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5157 btn-disabled" onclick="edit(&#39;5157&#39;)" fdprocessedid="6zd2k"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>4</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004682</td>
                    <td>PO-3534</td>
                    <td align="left">SURYA TOSERBA CILEDUG</td>
                    <td align="left">ANDRE</td>                        <td align="right">1.048.942,50</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/ZWtvMVlURkdOV3VubEdvMlFqSWQzYzBtUGEwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5156 btn-disabled" title="Print Penjualan" fdprocessedid="j9kj6"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5156 btn-disabled" title="Detail" onclick="detail(&#39;YTJrMVpURkROVVBkazNvMllUSWQzYzBteVUwMDAxMA&#39;, &#39;5156&#39;)" fdprocessedid="uc3b6c"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5156 btn-disabled" onclick="edit(&#39;5156&#39;)" fdprocessedid="nyv5a"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>5</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004680</td>
                    <td>PO-3438</td>
                    <td align="left">LARIS KLATEN</td>
                    <td align="left">OFFICE</td>                        <td align="right">2.268.000,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/UkhnMVZURk1OVVFWWTlFMGRUSWQzYzBtMDcwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5154 btn-disabled" title="Print Penjualan" fdprocessedid="d2xakb"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5154 btn-disabled" title="Detail" onclick="detail(&#39;UzJsek5WTXh2cFZTaWR6Vm1ORTh6RjQwMDAwOA&#39;, &#39;5154&#39;)" fdprocessedid="lo2x2bj"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5154 btn-disabled" onclick="edit(&#39;5154&#39;)" fdprocessedid="n01lz"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>6</td>
                    <td>Purwokerto</td>
                    <td>09-Mar-2026</td>
                    <td>PJ/004679</td>
                    <td>PO-3532</td>
                    <td align="left">TOKO BATES</td>
                    <td align="left">SUPRI</td>                        <td align="right">3.096.865,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/VWtwU05UZ3hPM2RTTlR6VkpNM016a1EwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5153 btn-disabled" title="Print Penjualan" fdprocessedid="ae8ovb"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5153 btn-disabled" title="Detail" onclick="detail(&#39;TlhSSk5VWXhIUXB0dVZEVTNNMDR6MkgwMDAwOA&#39;, &#39;5153&#39;)" fdprocessedid="hlhfb"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5153 btn-disabled" onclick="edit(&#39;5153&#39;)" fdprocessedid="77m0c8"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>7</td>
                    <td>Purwokerto</td>
                    <td>07-Mar-2026</td>
                    <td>PJ/004678</td>
                    <td>PO-3531</td>
                    <td align="left">JODO SWALAYAN</td>
                    <td align="left">OFFICE</td>                        <td align="right">405.000,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/Um1ONk5XWXhGTmdVc1NEVmFNblF6RlYwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5152 btn-disabled" title="Print Penjualan" fdprocessedid="rfemc8"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5152 btn-disabled" title="Detail" onclick="detail(&#39;YlhCdk5YSXg1NGdTVVZEVldNbXd6UEcwMDAwOA&#39;, &#39;5152&#39;)" fdprocessedid="bpn6y6"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5152 btn-disabled" onclick="edit(&#39;5152&#39;)" fdprocessedid="zff1wm"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>8</td>
                    <td>Purwokerto</td>
                    <td>07-Mar-2026</td>
                    <td>PJ/004677</td>
                    <td>PO-3530</td>
                    <td align="left">SUPRI</td>
                    <td align="left">OFFICE</td>                        <td align="right">54.000,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/U1VFMU5ERTFOVkxZS2VFeGNESWQzYzBtVUcwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5151 btn-disabled" title="Print Penjualan" fdprocessedid="3q4epc"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5151 btn-disabled" title="Detail" onclick="detail(&#39;UXpJMVZURnZOVnVDYXRreFZESWQzYzBtbDgwMDAxMA&#39;, &#39;5151&#39;)" fdprocessedid="8nmyw"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5151 btn-disabled" onclick="edit(&#39;5151&#39;)" fdprocessedid="5ls48"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>9</td>
                    <td>Purwokerto</td>
                    <td>07-Mar-2026</td>
                    <td>PJ/004676</td>
                    <td>PO-3483</td>
                    <td align="left">SUPRI</td>
                    <td align="left">OFFICE</td>                        <td align="right">105.000,00</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/TWxjMVZqRTNOV1RkdWw4d1FqSWQzYzBtSWswMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5150 btn-disabled" title="Print Penjualan" fdprocessedid="v3y4jc"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5150 btn-disabled" title="Detail" onclick="detail(&#39;VWxFMVVURXdOVUEzR2NFd2VESWQzYzBtQXgwMDAxMA&#39;, &#39;5150&#39;)" fdprocessedid="1lk1wf"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5150 btn-disabled" onclick="edit(&#39;5150&#39;)" fdprocessedid="6eaakm"><i class="fas fa-edit"></i> Edit</button>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>10</td>
                    <td>Purwokerto</td>
                    <td>07-Mar-2026</td>
                    <td>PJ/004675</td>
                    <td>PO-3525</td>
                    <td align="left">SURYA TOSERBA KARANGGETAS</td>
                    <td align="left">ANDRE</td>                        <td align="right">5.756.295,50</td>
                    <td align="center">
                      <span class="badge badge-success">SUBMIT</span>
                    </td>
                    <td align="center">
                      
                      <a href="https://orion-houseware.my.id/penjualan/print/TkdwaU5WY3hjQzQzNlZqUnVPVzR6MTUwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi5149 btn-disabled" title="Print Penjualan" fdprocessedid="egcsxr"><i class="fas fa-print"></i></button></a>

                      <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi5149 btn-disabled" title="Detail" onclick="detail(&#39;WkhwbE5Vd3g0azNFQk5qUjFPV0V6UmYwMDAwOA&#39;, &#39;5149&#39;)" fdprocessedid="hj4mt"><i class="fas fa-list"></i></button>

                      <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi5149 btn-disabled" onclick="edit(&#39;5149&#39;)" fdprocessedid="11gpql"><i class="fas fa-edit"></i> Edit</button>
                    </td>
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
  <!-- /.content-wrapper -->

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
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
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
          Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
          petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
        </p>
        <p>
          Misalnya:  
          - Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.  
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_hapus_akun.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_akun" id="hapus_id_akun">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

          <!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>
<?php $page = 'transaksi_pengiriman'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Pengiriman (Surat Jalan)
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


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='transaksi-pengiriman.php'"><a class="nav-link ">Penugasan</a></li>
    <li class="nav-item" onclick="window.location='transaksi-pengiriman1.php'"><a class="nav-link active">Pengiriman</a></li>
  </ul>
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Driver:</b> Semua
                </div>
               <!--  <div class="col-md-6">
                  <b>Status:</b> Semua
                </div> -->

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
            <th>No.</th>
            <th>Nama Driver</th>
            <th>Tanggal Pengiriman</th>
            <th>Nominal Pengiriman</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>ANDRE</td>
            <td>01-Jan-2025</td>
            <td align="right">3.556.852,89</td>
            <td align="center">
              <span class="badge badge-warning">SEDANG KIRIM</span>
            </td>
            <td align="center">
              <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-print"></i></button>
              <button type="button" class="btn btn-outline-info btn-sm" title="Detail" onclick="window.location='transaksi-pengiriman-detail.php'" ><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>ANDRE</td>
            <td>01-Feb-2025</td>
            <td align="right">1.588.714,65</td>
            <td align="center">
              <span class="badge badge-info">VERIFIKASI</span>
            </td>
            <td align="center">
              <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-print"></i></button>
              <button type="button" class="btn btn-outline-info btn-sm" title="Detail" onclick="window.location='transaksi-pengiriman-detail.php'" ><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>SUPRI</td>
            <td>22-Feb-2025</td>
            <td align="right">4.035.276,50</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi9" data-toggle="dropdown" fdprocessedid="jztio9">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/U1RrNVJUdERqbklkM2MwbVl6MDAwMDY" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/UTNjMFBGQWpJT1dRek0yMDAwMDQ" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi9 btn-disabled" title="Detail" onclick="detail(&#39;YUZFNVNUa1h3MklkM2MwbXdQMDAwMDY&#39;, &#39;9&#39;)" fdprocessedid="6woirh"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>SUPRI</td>
            <td>28-Mar-2025</td>
            <td align="right">1.264.150,82</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi10" data-toggle="dropdown" fdprocessedid="xgn035">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/UTNkU01Wa3dUdFBhdGF6TWQzYzBtS1MwMDAwOA" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/ZG1kck1VSXdpOUVURGFETWQzYzBtVWswMDAwOA" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi10 btn-disabled" title="Detail" onclick="detail(&#39;Tmpob01XVXdJdkQ2Tk56TWQzYzBtNFIwMDAwOA&#39;, &#39;10&#39;)" fdprocessedid="rumzt"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>ANDRE</td>
            <td>28-Mar-2025</td>
            <td align="right">2.866.514,64</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi6" data-toggle="dropdown" fdprocessedid="71qyh">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/UmpkdWVHbGFqTmpZektpMDAwMDQ" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/UkdwVlp3UHV1TmxVemJXMDAwMDQ" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi6 btn-disabled" title="Detail" onclick="detail(&#39;Y0VrMk16ajVJbUlkM2MwbXFzMDAwMDY&#39;, &#39;6&#39;)" fdprocessedid="g6u5pc"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>ANDRE</td>
            <td>28-Apr-2025</td>
            <td align="right">4.388.495,49</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi15" data-toggle="dropdown" fdprocessedid="8c4jko">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/VERreFlJdUlDalZhTWdrWDAwMDA1" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/VFRBeFo1R2RFelZXTWdoYjAwMDA1" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi15 btn-disabled" title="Detail" onclick="detail(&#39;VkhaNE1YazFRV1RBa1dqTWQzYzBtSXkwMDAwOA&#39;, &#39;15&#39;)" fdprocessedid="o1tfoq"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>SUPRI</td>
            <td>29-Apr-2025</td>
            <td align="right">1.085.091,62</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi11" data-toggle="dropdown" fdprocessedid="py1nsk">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/YjNBeGJrSlBHREZUTWc4YjAwMDA1" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/TVVoNk1WWXhJdEVOOU56TWQzYzBtR3YwMDAwOA" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi11 btn-disabled" title="Detail" onclick="detail(&#39;YVVKaU1Xd3hVSlhFM01ETWQzYzBtVVowMDAwOA&#39;, &#39;11&#39;)" fdprocessedid="45wow"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>ANDRE</td>
            <td>23-May-2025</td>
            <td align="right">2.853.691,39</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi16" data-toggle="dropdown" fdprocessedid="lk2zcm">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/TmtkcE1VTTJobnVuMFp6TWQzYzBtaXMwMDAwOA" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/VkROUU1YVTJpUXFxVFJUTWQzYzBtb3MwMDAwOA" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi16 btn-disabled" title="Detail" onclick="detail(&#39;TWtJeFpPbDd2RFoyTWdqTTAwMDA1&#39;, &#39;16&#39;)" fdprocessedid="0c5g6"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>SUPRI</td>
            <td>24-May-2025</td>
            <td align="right">939.560,59</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi12" data-toggle="dropdown" fdprocessedid="68od5">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/WTNWb01Xd3lBMVZhQ1JUTWQzYzBtWmMwMDAwOA" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/TlV0TU1VY3ltMkZvalNUTWQzYzBtM2QwMDAwOA" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi12 btn-disabled" title="Detail" onclick="detail(&#39;WlRreFk3Njhoakp0TWdWSDAwMDA1&#39;, &#39;12&#39;)" fdprocessedid="1yxtt"><i class="fas fa-list"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>ANDRE</td>
            <td>24-Jun-2025</td>
            <td align="right">2.949.365,16</td>
            <td align="center">
              <span class="badge badge-success">TERKIRIM SEMUA</span>
            </td>
            <td align="center">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm btn-aksi17" data-toggle="dropdown" fdprocessedid="2nhrcp">
                  <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/print_insentif/ZFZBeFo4aktPVGRvTWc1YjAwMDA1" target="_blank">PDF</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://orion-houseware.my.id/insentif_sales/ekspor/U2tzeE1aS0ZnemQwTWdHTDAwMDA1" target="_blank">Excel</a>
                </div>
              </div>
              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi17 btn-disabled" title="Detail" onclick="detail(&#39;Tm1kNE1XODM5TGlSOFRUTWQzYzBtNWgwMDAwOA&#39;, &#39;17&#39;)" fdprocessedid="1ga14h"><i class="fas fa-list"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
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
            <th>No.</th>
            <th>Tanggal</th>
            <th>Tanggal Pengiriman</th>
            <th>No Faktur</th>
            <th>Toko Penerima</th>
            <th>Nama Sales</th>
            <th>Total Penjualan (Rp)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>03-Aug-2024</td>
            <td>04-Dec-2024</td>
            <td>PJ/03082024/PO-0022/01</td>
            <td>LUWES PALUR</td>
            <td>IWAN</td>                        <td align="right">3.349.934,40</td>

            <td align="center">
              <span class="badge badge-danger">Retur sebagian</span>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>07-Aug-2024</td>
            <td>07-Aug-2024</td>
            <td>PJ/07082024/PO-0007/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">627.875,00</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>08-Aug-2024</td>
            <td>01-Oct-2024</td>
            <td>PJ/08082024/PO-0021/03</td>
            <td>VASUJA INTERNASIONAL</td>
            <td>OFFICE</td>                        <td align="right">24.284.400,00</td>
 
            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>09-Aug-2024</td>
            <td>09-Aug-2024</td>
            <td>PJ/09082024/PO-0027/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">132.610,50</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>09-Aug-2024</td>
            <td>11-Oct-2024</td>
            <td>PJ/09082024/PO-0030/01</td>
            <td>ZAM ZAM TALOK</td>
            <td>OFFICE</td>                        <td align="right">29.268.639,60</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>09-Aug-2024</td>
            <td>12-Aug-2024</td>
            <td>PJ/09082024/PO-0053/01</td>
            <td>ZAM ZAM KALIWADAS</td>
            <td>OFFICE</td>                        <td align="right">604.500,00</td>
       
            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>10-Aug-2024</td>
            <td>10-Aug-2024</td>
            <td>PJ/10082024/PO-0029/01</td>
            <td>PEMBELI</td>
            <td>OFFICE</td>                        <td align="right">102.600,00</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/01</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">7.525.980,00</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/02</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">6.033.975,00</td>

            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>10-Aug-2024</td>
            <td>17-Oct-2024</td>
            <td>PJ/10082024/PO-0057/03</td>
            <td>3 RATU</td>
            <td>OFFICE</td>                        <td align="right">5.518.310,00</td>
  
            <td align="center">
              <span class="badge badge-success">Diterima</span>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr align="center">
            <th colspan="6">Total</th>
            <th style="text-align: right !important;">12.486.889.269,05</th>
            <th></th>
          </tr>
        </tfoot>
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
          <button type="TERKIRIM SEMUA" class="btn btn-info">Terapkan Filter</button>
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
          <button type="TERKIRIM SEMUA" class="btn btn-primary">Simpan Data</button>
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
          <button type="TERKIRIM SEMUA" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>
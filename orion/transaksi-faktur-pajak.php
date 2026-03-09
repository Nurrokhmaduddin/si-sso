<?php $page = 'transaksi_faktur_pajak'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0"> Data Faktur Pajak
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini.</p>
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
                <!-- <div class="col-md-6">
                  <b>Status:</b> Semua
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
            <th>Alamat Gudang</th>
            <th>Tanggal</th>
            <th>Toko</th>
            <th>No Faktur</th>
            <th>Total Harga (Rp)</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td>1</td>
            <td>Purwokerto</td>
            <td>22-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004424</td>
            <td style="text-align: right !important">22.730.130,70</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4897" data-toggle="dropdown" fdprocessedid="rzljxj">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/UldrMFRUaHFPVWJaUUQ4M1l6SWQzYzBtdTAwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/WjNKNE5IbzQ3MERsSlFqbGpOMlV6dHUwMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/UjBGT05GTTQxMzRIWmJ6bHlOMFl6U3UwMDAwOA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4897 btn-disabled" title="Detail" onclick="detail(&#39;VFdFMFFqaENPVWg2YlE4M1lUSWQzYzBtaG4wMDAxMA&#39;, &#39;4897&#39;)" fdprocessedid="unjd88"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4897 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4897&#39;)" fdprocessedid="uwi0gv"><i class="fas fa-check"></i></button>
            </td>
          </tr>
          <tr align="center">
            <td>2</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004428</td>
            <td style="text-align: right !important">4.624.911,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4901" data-toggle="dropdown" fdprocessedid="p11lo">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/Vm5KME5HVTVBSDFXZ2VUQnhNVmN6WHgwMDAwOA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/VlUwMFJEbFBNR0VMNWFNeFdqSWQzYzBtdlAwMDAxMA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/YVZJMFlUbHVNRVpCTk1reFVUSWQzYzBtQ0cwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4901 btn-disabled" title="Detail" onclick="detail(&#39;UkZFMFRqbFJNRGl5ODRjeFpESWQzYzBtVUswMDAxMA&#39;, &#39;4901&#39;)" fdprocessedid="lwa5zh"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4901 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4901&#39;)" fdprocessedid="8wxetk"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4901"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>3</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004429</td>
            <td style="text-align: right !important">5.765.400,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4902" data-toggle="dropdown" fdprocessedid="t7rv6k">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/WkdjMFFUbHZNRkFsZndZeVVqSWQzYzBtWWwwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/TjFoR05HMDVCUGdrblJ6QkRNa296cWkwMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/VTBaYU5GTTVWNjF2d1lqQXhNbm96b2QwMDAwOA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4902 btn-disabled" title="Detail" onclick="detail(&#39;VWxob05FNDVjOW1KeVN6QTNNbG96SDcwMDAwOA&#39;, &#39;4902&#39;)" fdprocessedid="wh1sww"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4902 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4902&#39;)" fdprocessedid="424gi7"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4902"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>4</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004433</td>
            <td style="text-align: right !important">4.155.200,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4906" data-toggle="dropdown" fdprocessedid="g05qzl">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/Ym5VME1qbG5NREZqcERZMlJqSWQzYzBtV1gwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/YTFjMGJqbExNR2NQeHF3MldqSWQzYzBtbW0wMDAxMA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/V20wME56bFlNR3EzdWM0MlFqSWQzYzBta3gwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4906 btn-disabled" title="Detail" onclick="detail(&#39;UTNRMFp6bFJNSFFRWVVZMmRqSWQzYzBtZHUwMDAxMA&#39;, &#39;4906&#39;)" fdprocessedid="mvj2o"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4906 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4906&#39;)" fdprocessedid="rwcptw"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4906"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>5</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td>UNTUNG SLAMET</td>
            <td>PJ/004442</td>
            <td style="text-align: right !important">1.163.400,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4915" data-toggle="dropdown" fdprocessedid="lu7v44">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/ZDJvMGFEbE1NVTVRb2I0MWJESWQzYzBtQTkwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/U25VMFF6bHpNVW9wNWVnMWFESWQzYzBtNkQwMDAxMA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/TkZRMFlqbFNNVEMzcVBFMWNESWQzYzBtZXkwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4915 btn-disabled" title="Detail" onclick="detail(&#39;VEZRMGVUbDRNVWY4cHFNMU5qSWQzYzBtQXUwMDAxMA&#39;, &#39;4915&#39;)" fdprocessedid="o8bfo"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4915 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4915&#39;)" fdprocessedid="vs1f6"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4915"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>6</td>
            <td>Purwokerto</td>
            <td>23-Feb-2026</td>
            <td>TRIO PLAZA</td>
            <td>PJ/004443</td>
            <td style="text-align: right !important">2.915.820,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4916" data-toggle="dropdown" fdprocessedid="n4jklj">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/VkZKM05HMDVObGlRV2FERnBObkF6NVYwMDAwOA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/UkUxeU5EUTV2M0JiNWNqRlNObW96VEswMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/ZDNvMGJqbFhNWDR6anVNMmF6SWQzYzBtNncwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4916 btn-disabled" title="Detail" onclick="detail(&#39;TWpVM05HRTVFdlljU1ZURlVObXd6ZXUwMDAwOA&#39;, &#39;4916&#39;)" fdprocessedid="y13mn"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4916 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4916&#39;)" fdprocessedid="fm8rwd"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4916"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>7</td>
            <td>Purwokerto</td>
            <td>24-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004448</td>
            <td style="text-align: right !important">6.802.545,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4921" data-toggle="dropdown" fdprocessedid="0harom">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/T1ZGa05FMDU4UDhHNlJUSjZNVGN6c0gwMDAwOA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/VTFVME5HWTVSZjNsalN6SmtNVXN6aUowMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/UTNScU5HczU3NENZTmFqSmpNVTB6WGowMDAwOA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4921 btn-disabled" title="Detail" onclick="detail(&#39;ZFVFMFRqbEJNbXlnM2tneE56SWQzYzBtN0owMDAxMA&#39;, &#39;4921&#39;)" fdprocessedid="9jouuj"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4921 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4921&#39;)" fdprocessedid="mctnxv"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4921"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>8</td>
            <td>Purwokerto</td>
            <td>24-Feb-2026</td>
            <td>ARGO JENE</td>
            <td>PJ/004449</td>
            <td style="text-align: right !important">2.512.000,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4922" data-toggle="dropdown" fdprocessedid="k47d8r">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/VEVVMFZUbE1NbGwzM0ljeU1USWQzYzBtMFkwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/TjJZM05IQTVZemcwSlN6SlVNa016ZFgwMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/TVhJeU5GUTVqd1dsVGRqSlRNbVl6bTAwMDAwOA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4922 btn-disabled" title="Detail" onclick="detail(&#39;VjNCS05FUTU5UVYwV01USmlNbVV6ejMwMDAwOA&#39;, &#39;4922&#39;)" fdprocessedid="egm0uf"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4922 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4922&#39;)" fdprocessedid="iblk8"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4922"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>9</td>
            <td>Purwokerto</td>
            <td>24-Feb-2026</td>
            <td>CV BENGAWAN MULTI TRADING</td>
            <td>PJ/004450</td>
            <td style="text-align: right !important">4.017.600,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4923" data-toggle="dropdown" fdprocessedid="3eye6">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/Wm5JME1EbHNNbmI5dW5jemRESWQzYzBteTUwMDAxMA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/TWxORk5HWTVKQjBNSmVqSnhNM2t6SWkwMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/VnpFMFNUbHJNa3psVGt3emJESWQzYzBteVkwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4923 btn-disabled" title="Detail" onclick="detail(&#39;U0ZJd05FRTVMN2xrVFRESnFNMmN6MVIwMDAwOA&#39;, &#39;4923&#39;)" fdprocessedid="t6uxae"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4923 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4923&#39;)" fdprocessedid="mcdhcv"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4923"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
            </td>
          </tr>
          <tr align="center">
            <td>10</td>
            <td>Purwokerto</td>
            <td>24-Feb-2026</td>
            <td>CV BENGAWAN MULTI TRADING</td>
            <td>PJ/004451</td>
            <td style="text-align: right !important">8.016.000,00</td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm btn-aksi4924" data-toggle="dropdown" fdprocessedid="vkhomi">
                <span class="sr-only">Toggle Dropdown</span><i class="fas fa-print"></i>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/print/WlVaS05IQTVRYTVvS1J6SnZOR2d6UGswMDAwOA" target="_blank">PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/ekspor/U1RWWk5ESTVTQXVRUU1ESXdOR1V6Q2YwMDAwOA" target="_blank">Excel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://orion-houseware.my.id/faktur_pajak/xml/Um1zMFZUbG5NbHRDUjRjME1qSWQzYzBtZ1QwMDAxMA" target="_blank">XML</a>
              </div>

              <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi4924 btn-disabled" title="Detail" onclick="detail(&#39;U2pjMFFUazFNazF6b3JnMFV6SWQzYzBtUmswMDAxMA&#39;, &#39;4924&#39;)" fdprocessedid="j45dch"><i class="fas fa-list"></i></button>

              <button type="button" class="btn btn-primary mrg-btn btn-sm btn-aksi4924 btn-disabled" title="Laporkan Faktur Pajak" onclick="lunas(&#39;4924&#39;)" fdprocessedid="63xp7o"><i class="fas fa-check"></i></button>

              <b style="color: gray;" class="hidden loading-aksi4924"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
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
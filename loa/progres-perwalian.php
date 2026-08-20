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
                    <tr class="text-uppercase text-center">
                      <th rowspan="2" style="vertical-align: middle;" width="5px">No.</th>
                      <th rowspan="2" style="vertical-align: middle;">Kode Dosen</th>
                      <th rowspan="2" style="vertical-align: middle;">Nama Dosen</th>
                      <th colspan="7" style="vertical-align: middle;">Mahasiswa</th>
                      <th rowspan="2" style="vertical-align: middle;">Bimbingan</th>
                    </tr>
                    <tr class="text-uppercase text-center">
                      <th>Total</th>
                      <th>Aktif</th>
                      <th>Lulus</th>
                      <th>PO</th>
                      <th>DO</th>
                      <th>Skors</th>
                      <th>Cuti</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>035200528</td>
                      <td>AANG KUNAEFIS.Ag., M.Ag.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>176110101</td>
                      <td>Abdullah Ahmad Dzikrullah S.Si., M.Sc.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>155110108</td>
                      <td>Adityawan Sigit, S.T., M.T.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>153130404</td>
                      <td>Ahmad Asroni S.Fil., S.Th.I., M.Hum.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>184100102</td>
                      <td>Ahmad Sadzali, Lc., M.H.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>194220101</td>
                      <td>Ahmad Zubaidi S.Pd., M.Pd.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>245110501</td>
                      <td>Ahmadi S.Si., M.Sc.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>245111201</td>
                      <td>Aisya Galuh Laksita, S.T., M.Eng</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>205111301</td>
                      <td>Aisyah Nur Jannah, S.T., M.Sc.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>955110102</td>
                      <td>Albani Musyafa', S.T., M.T., Ph.D.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>133100505</td>
                      <td>Ali Mahmud Ashshiddiqi S.Pd.I., M.A.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>12</td>
                      <td>093200403</td>
                      <td>Alif Lukmanul Hakim S.Fil., M.Phil.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>13</td>
                      <td>184100103</td>
                      <td>Allan Fatchan Gani Wardhana S.H., M.H.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>14</td>
                      <td>065110501</td>
                      <td>Andi Purnomo, S.T., M.T.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>15</td>
                      <td>185111304</td>
                      <td>Anggit Mas Arifudin, S.T., M.T.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>16</td>
                      <td>215111305</td>
                      <td>Anisa Nur Amalina S.T., M.Eng.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>17</td>
                      <td>155130505</td>
                      <td>Annisa Nur Lathifah S.Si., M.Biotech., M.Agr., Ph.D.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>18</td>
                      <td>045130401</td>
                      <td>Any Juliani S.T., M.Sc.(Res.Eng.)</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>19</td>
                      <td>146110504</td>
                      <td>Arum Handini Primandari S.Pd.Si., M.Sc.</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
                      </td>
                    </tr>

                    <tr>
                      <td>20</td>
                      <td>045111201</td>
                      <td>ASISTEN DOSEN FTSP</td>
                      <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" onclick="window.location.href='progres-perwalian1.php'">📄 Konseling</button>
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
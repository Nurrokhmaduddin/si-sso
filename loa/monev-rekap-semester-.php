<?php $page = 'monev_semester'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester MK dan CPMK
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
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
          <div class="card card-outline card-info">
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
                </div>
                <div class="col-md-6">
                  <b>Tahun Akademik:</b> 2024/2025 &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Semester Akademik:</b> Gasal  &nbsp;
                </div>                

              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list me-1"> </i>Catat Temuan </a>             
              </div>

            </div>
          </div>



          <!-- ========== CARD 3: KPI row ========== --> 
          <style>
            body { background: #f4f6f9; }
            .kpi { border-radius: 10px; padding: 18px; color: #fff; }
            .kpi .big { font-size: 1.6rem; font-weight:700; }
            .kpi .small { font-size: 0.85rem; opacity: .9; }
            .card { border-radius:10px; }
            .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
            .status-green { background:#28a745; }
            .status-yellow { background:#ffc107; }
            .status-red { background:#dc3545; }
            .ewstable td, .ewstable th { vertical-align: middle; }
            .table-fixed-height { max-height: 360px; overflow:auto; }
          </style>       
          <div class="row g-3 mb-3">
            <div class="col-md-3">
              <div class="kpi bg-primary">
                <div class="small">CPMK yang Memenuhi Standar</div>
                <div class="big" id="kpiAvg">20 / 34 CPMK</div>
                <div class="small">59% mencapai standar</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi" style="background:#20c997;">
                <div class="small"> CPMK Terkuat</div>
                <div class="big" id="kpiReached">STS402-4</div>
                <div class="small">96% mencapai tuntas</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi " style="background:#ff7f0e;">
                <div class="small">Pemerataan Ketercapaian CPMK</div>
                <div class="big" id="kpiGap">Gap 31% | 0.61</div>
                <div class="small">Kategori: Cukup Stabil</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi bg-danger">
                <div class="small">CPMK Terlemah</div>
                <div class="big" id="kpiRisk">STS102-2</div>
                <div class="small">65% mencapai tuntas</div>
              </div>
            </div>
          </div>




          <!-- ========== CARD 4: Chart CPMK Min/Max/Rerata/%Tuntas ========== -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Rerata Ketercapaian - CPMK</h5>
              <div class="card-tools">
                <small class="text-muted">Semester Terpilih</small>
              </div>
            </div>
            <div class="card-body chart-container">
              <canvas id="chartCPMK" height="70"></canvas>
              <div class="row text-center mt-3">
                <div class="col">
                  <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL31">
                    Rangking Performa
                  </button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL33">
                    Daftar Min/Max/Rerata
                  </button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                    Performa Risiko
                  </button>
                </div>
              </div>
            </div>            
          </div>
          <!-- Rangking Performa -->
          <div class="row collapse" id="daftarIKCPL31" >
            <!-- Card Lowest -->
            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">🔽 Top 5 CPMK Performa Terendah</h5>
                </div>
                <div class="card-body">
                  <h3>Lowest 5</h3>
                  <table border="1" cellpadding="8" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center">Nilai</th>
                        <th>CPMK</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                        <td>SKS198-1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                        <td>SKT911-4</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                        <td>SKS123-5</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                        <td>SKS345-9</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                        <td>UNI901-1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Card Highest -->
            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">🔼 Top 5 CPMK Nilai Tertinggi</h5>
                </div>
                <div class="card-body">
                  <h3>Highest 5</h3>
                  <table border="1" cellpadding="8" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                         <th>Ranking</th>
                        <th class="text-center">Nilai</th>
                        <th>CPMK</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                          <td>SKS834-2</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                        <td>SKS923-6</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                       <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                        <td>SKS723-7</td>
                       <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                       <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                        <td>SKS523-2</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                        <td>SKS843-1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- daftar min/max/rerate -->
          <div class="card collapse" id="daftarIKCPL33" >
            <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
              <div class="card-tools ms-auto">
                <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                  <thead class="table-light">
                    <tr>
                      <th style="width: 40px">#</th>
                      <th>CPMK Code</th>
                      <th class="text-center">Nilai</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>                
                    <tr>
                      <td>1</td>
                      <td>SKS982-1: Pemahaman Dasar Polimer</td>
                      <td class="text-center">72.14%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>SKS912-2: Teori Komposit</td>
                      <td class="text-center">71.50%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>UNI902-3: Aplikasi Polimer</td>
                      <td class="text-center">76.80%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>UNI912-4: Proses Produksi</td>
                      <td class="text-center">76.80%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>SKS234-5: Analisis Material</td>
                      <td class="text-center">75.30%</td>
                     <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>SKS812-6: Keselamatan & Etika</td>
                       <td class="text-center">76.80%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>SKS908-7: Desain Proses</td>                    
                      <td class="text-center">73.40%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>SKS111-8: Metode Eksperimental</td>
                      <td class="text-center">71.50%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>SKS113-9: Statistik & Analisis Data</td>
                      <td class="text-center">71.50%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>SKS932-1: Komunikasi Teknis</td>                    
                      <td class="text-center">75.00%</td>
                      <td class="text-center">🟨 Cukup</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>        
            <div class="card-footer d-flex justify-content-between">            
            </div>
          </div>   


          <!-- ========== CARD : Persentase Ketuntasan CPMK ========== -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
                Persentase Ketuntasan - CPMK 
              </h5>
              <div class="card-tools">
                <small class="text-muted">Semester Terpilih</small>
              </div>
            </div>
            <div class="card-body">
              <canvas id="chartKetuntasanCPMK" height="70"></canvas>
              <div class="row text-center mt-3">
                <div class="col">
                  <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL31">
                    Rangking Performa
                  </button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL33">
                    Daftar Min/Max/Rerata
                  </button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                    Performa Risiko
                  </button>
                </div>
              </div>
            </div>
            <div class="card-footer">
             batas tuntas >70.00<br>
             batas standar >=65% 
           </div>
         </div>




<!-- ========== CARD :  Tabel daftar detail CPMK ========== --> 
<div class="card">
  <div class="card-header">
    Daftar CPMK 
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-hover table-bordered table-sm datatables1">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode MK</th>
          <th>Kode CPMK</th>
          <th>Min</th>
          <th>Max</th>
          <th>Rerata</th>
          <th>Ketuntasan</th>
          <th>Mahasiswa</th>
          <th>Status Standar </th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>STS009</td><td>STS009-1</td><td>60</td><td>95</td><td>78</td><td>85%</td><td>40</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>2</td><td>STS009</td><td>STS009-2</td><td>50</td><td>88</td><td>72</td><td>75%</td><td>40</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>3</td><td>STS009</td><td>STS009-3</td><td>65</td><td>98</td><td>81</td><td>88%</td><td>40</td><td class="memenuhi">Memenuhi</td></tr>

        <tr><td>4</td><td>STS101</td><td>STS101-1</td><td>45</td><td>90</td><td>69</td><td>70%</td><td>120</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>5</td><td>STS101</td><td>STS101-2</td><td>62</td><td>99</td><td>84</td><td>90%</td><td>120</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>6</td><td>STS101</td><td>STS101-3</td><td>55</td><td>97</td><td>76</td><td>82%</td><td>120</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>7</td><td>STS101</td><td>STS101-4</td><td>52</td><td>92</td><td>74</td><td>78%</td><td>120</td><td class="tidak">Tidak Memenuhi</td></tr>

        <tr><td>8</td><td>STS102</td><td>STS102-1</td><td>70</td><td>100</td><td>88</td><td>92%</td><td>38</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>9</td><td>STS102</td><td>STS102-2</td><td>48</td><td>85</td><td>67</td><td>65%</td><td>38</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>10</td><td>STS102</td><td>STS102-3</td><td>60</td><td>94</td><td>79</td><td>84%</td><td>38</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>11</td><td>STS102</td><td>STS102-4</td><td>63</td><td>96</td><td>82</td><td>87%</td><td>38</td><td class="memenuhi">Memenuhi</td></tr>

        <tr><td>12</td><td>STS201</td><td>STS201-1</td><td>50</td><td>89</td><td>73</td><td>76%</td><td>42</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>13</td><td>STS201</td><td>STS201-2</td><td>68</td><td>100</td><td>85</td><td>91%</td><td>42</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>14</td><td>STS201</td><td>STS201-3</td><td>55</td><td>86</td><td>68</td><td>72%</td><td>42</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>15</td><td>STS201</td><td>STS201-4</td><td>60</td><td>95</td><td>80</td><td>83%</td><td>42</td><td class="memenuhi">Memenuhi</td></tr>

        <tr><td>16</td><td>STS202</td><td>STS202-1</td><td>58</td><td>93</td><td>77</td><td>81%</td><td>39</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>17</td><td>STS202</td><td>STS202-2</td><td>52</td><td>88</td><td>70</td><td>74%</td><td>39</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>18</td><td>STS202</td><td>STS202-3</td><td>67</td><td>100</td><td>86</td><td>93%</td><td>39</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>19</td><td>STS202</td><td>STS202-4</td><td>55</td><td>90</td><td>75</td><td>79%</td><td>39</td><td class="tidak">Tidak Memenuhi</td></tr>

        <tr><td>20</td><td>STS301</td><td>STS301-1</td><td>65</td><td>97</td><td>83</td><td>89%</td><td>41</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>21</td><td>STS301</td><td>STS301-2</td><td>50</td><td>85</td><td>71</td><td>73%</td><td>41</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>22</td><td>STS301</td><td>STS301-3</td><td>70</td><td>100</td><td>87</td><td>94%</td><td>41</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>23</td><td>STS301</td><td>STS301-4</td><td>55</td><td>92</td><td>76</td><td>80%</td><td>41</td><td class="tidak">Tidak Memenuhi</td></tr>

        <tr><td>24</td><td>STS302</td><td>STS302-1</td><td>72</td><td>100</td><td>89</td><td>95%</td><td>37</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>25</td><td>STS302</td><td>STS302-2</td><td>60</td><td>96</td><td>78</td><td>85%</td><td>37</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>26</td><td>STS302</td><td>STS302-3</td><td>45</td><td>82</td><td>66</td><td>68%</td><td>37</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>27</td><td>STS302</td><td>STS302-4</td><td>68</td><td>98</td><td>84</td><td>90%</td><td>37</td><td class="memenuhi">Memenuhi</td></tr>

        <tr><td>28</td><td>STS401</td><td>STS401-1</td><td>52</td><td>88</td><td>73</td><td>77%</td><td>36</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>29</td><td>STS401</td><td>STS401-2</td><td>65</td><td>97</td><td>82</td><td>88%</td><td>36</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>30</td><td>STS401</td><td>STS401-3</td><td>48</td><td>85</td><td>69</td><td>71%</td><td>36</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>31</td><td>STS401</td><td>STS401-4</td><td>70</td><td>100</td><td>85</td><td>92%</td><td>36</td><td class="memenuhi">Memenuhi</td></tr>

        <tr><td>32</td><td>STS402</td><td>STS402-1</td><td>55</td><td>89</td><td>74</td><td>78%</td><td>35</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>33</td><td>STS402</td><td>STS402-2</td><td>72</td><td>100</td><td>88</td><td>93%</td><td>35</td><td class="memenuhi">Memenuhi</td></tr>
        <tr><td>34</td><td>STS402</td><td>STS402-3</td><td>50</td><td>87</td><td>72</td><td>75%</td><td>35</td><td class="tidak">Tidak Memenuhi</td></tr>
        <tr><td>35</td><td>STS402</td><td>STS402-4</td><td>75</td><td>100</td><td>90</td><td>96%</td><td>35</td><td class="memenuhi">Memenuhi</td></tr>
      </tbody>
    </table>
  </div>
</div>

<!-- ========== CARD : Table Daftar Mata Kuliah ========== -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"> Daftar Mata Kuliah</h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table1 table-bordered table-striped table-sm datatables1">
        <thead>
          <tr class="text-uppercase text-center">
            <th width="5px">No.</th>
            <th>Kode</th>
            <th>Nama MK</th>
            <th> CPMK</th>
            <th> Semester Tempuh</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">STS704</td>
            <td>Metode Pelaksanaan Bangunan</td>
            <td class="text-center">3</td>
            <td class="text-center">1</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td class="text-center">STS913</td>
            <td>Struktur Komposit</td>
            <td class="text-center">3</td>
            <td class="text-center">1</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td class="text-center">51175111</td>
            <td>Building Structures Design</td>
            <td class="text-center">3</td>
            <td class="text-center">1</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">4</td>
            <td class="text-center">STS-101</td>
            <td>Engineering Statistics</td>
            <td class="text-center">2</td>
            <td class="text-center">3</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">5</td>
            <td class="text-center">STS102</td>
            <td>Bahan Perkerasan Jalan (+Pr)</td>
            <td class="text-center">4</td>
            <td class="text-center">3</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">6</td>
            <td class="text-center">STS702</td>
            <td>Struktur Baja</td>
            <td class="text-center">3</td>
            <td class="text-center">3</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">7</td>
            <td class="text-center">51195142</td>
            <td>Perancangan Struktur Jembatan</td>
            <td class="text-center">2</td>
            <td class="text-center">3</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">8</td>
            <td class="text-center">51155081</td>
            <td>Introduction to Earthquake Engineering</td>
            <td class="text-center">3</td>
            <td class="text-center">3</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">9</td>
            <td class="text-center">STS904</td>
            <td>BIM untuk Manajemen Konstruksi</td>
            <td class="text-center">2</td>
            <td class="text-center">5</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">10</td>
            <td class="text-center">STS009</td>
            <td>Water Structures Design</td>
            <td class="text-center">3</td>
            <td class="text-center">5</td>
            <td class="text-center">
              <a href="monev-rekap-semester-detail.php" class="btn btn-sm btn-outline-info">
                📄 Detail
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<!-- <div class="card shadow-sm">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Mata Kuliah</h5>
  </div>

  <div class="card-body">

    <h6><b>Identitas Mata Kuliah</b></h6>
    <table class="table table-sm table-bordered mb-4">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Periode Akademik</th>
        <td>2024/2025 - Gasal</td>
      </tr>
      <tr>
        <th style="width:200px;">Kode MK</th>
        <td>SKT1239</td>
      </tr>
      <tr>
        <th>Nama MK</th>
        <td>Dasar Matematika</td>
      </tr>
      <tr>
        <th>Jumlah CPMK</th>
        <td>4</td>
      </tr>
    </table>

    <h6><b>Tren Capaian Pembelajaran Mata Kuliah <i>3 Tahun Terakhir</i></b></h6>
    <div class="table-responsive mb-4">
      <table class="table table1 table-bordered table-striped table-sm">
        <thead>
          <tr>
            <th>No</th>
            <th>Indicator</th>
            <th>2 Year Prior</th>
            <th>1 Year Prior</th>
            <th>Selected Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>% Mahasiswa Tuntas CPMK 1</td>
            <td>85%</td>
            <td>80%</td>
            <td>92%</td>
          </tr>
          <tr>
            <td>2</td>
            <td>% Mahasiswa Tuntas CPMK 2</td>
            <td>78%</td>
            <td>75%</td>
            <td>88%</td>
          </tr>
          <tr>
            <td>3</td>
            <td>% Mahasiswa Tuntas CPMK 3</td>
            <td>90%</td>
            <td>82%</td>
            <td>85%</td>
          </tr>
          <tr>
            <td>4</td>
            <td>% Mahasiswa Tuntas CPMK 4</td>
            <td>88%</td>
            <td>86%</td>
            <td>90%</td>
          </tr>
        </tbody>
      </table>
    </div>


    <h6><b>Distribusi Nilai Mahasiswa <i>Berdasarkan Rentang Nilai</i> </b></h6>
    <canvas id="stackedCPMKChart" height="70" class="mb-4"></canvas>

    <h6><b>Perbandingan Capaian Pembelajaran <i>Antar Kelas</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-sm table-striped">
        <thead class="thead-light">
          <tr class="text-center">
            <th rowspan="2">Aksi</th>
            <th rowspan="2">No</th>
            <th rowspan="2">Kelas</th>
            <th colspan="2">CPMK 1</th>
            <th colspan="2">CPMK 2</th>
            <th colspan="2">CPMK 3</th>
            <th colspan="2">CPMK 4</th>
            <th rowspan="2">Jumlah Mahasiswa</th>
          </tr>
          <tr class="text-center">
            <th>Rerata</th>
            <th>% Tuntas</th>
            <th>Rerata</th>
            <th>% Tuntas</th>
            <th>Rerata</th>
            <th>% Tuntas</th>
            <th>Rerata</th>
            <th>% Tuntas</th>
          </tr>
        </thead>

        <tbody class="text-center">
          <tr>
            <td>
              <a href="detail.php" class="btn btn-sm btn-outline-info">📄</a>
            </td>
            <td>1</td>
            <td>A</td>
            <td>78</td>
            <td>85%</td>
            <td>75</td>
            <td>80%</td>
            <td>82</td>
            <td>88%</td>
            <td>79</td>
            <td>84%</td>
            <td>40</td>
          </tr>

          <tr>
            <td>
              <a href="detail.php" class="btn btn-sm btn-outline-info">📄</a>
            </td>
            <td>2</td>
            <td>B</td>
            <td>74</td>
            <td>78%</td>
            <td>77</td>
            <td>83%</td>
            <td>80</td>
            <td>85%</td>
            <td>76</td>
            <td>79%</td>
            <td>38</td>
            
          </tr>

          <tr>
            <td>
              <a href="detail.php" class="btn btn-sm btn-outline-info">📄</a>
            </td>
            <td>3</td>
            <td>C</td>
            <td>81</td>
            <td>90%</td>
            <td>79</td>
            <td>86%</td>
            <td>84</td>
            <td>91%</td>
            <td>82</td>
            <td>88%</td>
            <td>42</td>
          </tr>

            <tr class="table-info ">
              <td colspan="3">Agregasi Semua Kelas</td>
              <td>78</td>
              <td>84%</td>
              <td>77</td>
              <td>83%</td>
              <td>82</td>
              <td>88%</td>
              <td>79</td>
              <td>84%</td>
              <td>120</td>
            </tr>

        </tbody>
        
      </table>
    </div>
    

  </div>
  <div class="card-footer">
    <tr>
      <td colspan="11">
        <div class="p-2">
          <b>Petunjuk Pembacaan dan Interpretasi Tabel:</b>
          <ol class="mb-2 mt-2">
            <li>
              <b>Deteksi Ketidakkonsistenan Antar Kelas</b><br>
              Tabel ini memungkinkan identifikasi variasi capaian antar kelas pada setiap CPMK. 
              Perbandingan nilai rerata dan persentase ketuntasan antar kelas dapat menunjukkan:
              <ul>
                <li>Adanya kesenjangan signifikan antar kelas pada CPMK yang sama (misalnya CPMK 1 kelas B jauh lebih rendah dibanding kelas C).</li>
                <li>Pola konsistensi capaian pada kelas tertentu yang secara berulang lebih tinggi atau lebih rendah dibanding kelas lain.</li>
              </ul>
              Temuan ini dapat menjadi dasar evaluasi kesetaraan implementasi pembelajaran dan strategi asesmen antar kelas.
            </li>

            <li class="mt-2">
              <b>Identifikasi CPMK Lemah pada Level Mata Kuliah</b><br>
              Baris <i>Kesimpulan Final (Agregasi Semua Kelas)</i> merepresentasikan capaian keseluruhan mata kuliah. 
              Interpretasi agregasi dapat digunakan untuk:
              <ul>
                <li>Mengidentifikasi CPMK yang secara umum belum optimal (misalnya rerata atau % ketuntasan konsisten di bawah 75%), yang mengindikasikan perlunya peninjauan desain pembelajaran atau instrumen asesmen.</li>
                <li>Membedakan apakah permasalahan bersifat sistemik (terjadi pada seluruh kelas) atau parsial (hanya terjadi pada kelas tertentu), sehingga dapat ditentukan apakah intervensi dilakukan pada level kurikulum/assessment atau pada level implementasi kelas.</li>
              </ul>
            </li>
          </ol>

          <small class="text-muted">
            Catatan: Interpretasi sebaiknya mempertimbangkan jumlah mahasiswa tiap kelas, 
            karena perbedaan ukuran kelas dapat memengaruhi bobot kontribusi terhadap hasil agregasi.
          </small>
        </div>
      </td>
    </tr>
  </div>
</div> -->






<!-- ========== CARD : Table Daftar Mata Kuliah ========== -->
        <!-- <div class="card">
          <div class="card-header">
              <h5 class="card-title mb-0"> Daftar Mata Kuliah</h5>
              <div class="card-tools">
                <small class="text-muted">Semester Terpilih</small>
              </div>
            </div>
        
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5px">No.</th>
                    <th>Kode Set Pemetaan</th>
                    <th>Kode MK</th>
                    <th>Nama MK</th>                    
                    <th>Jenis</th>
                    <th>Semester Tempuh</th>
                    <th>Jumlah CPMK</th>
                    <th>Jumlah SKS</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">ST-24</td>
                    <td>STS704</td>
                    <td>Metode Pelaksanaan Bangunan</td>
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">1</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">ST-24</td>
                    <td>STS913</td>
                    <td>Struktur Komposit</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">1</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">ST-24</td>
                    <td>51175111</td>
                    <td>Building Structures Design</td>                   
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">2</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">ST-24</td>
                    <td>STS-101</td>
                    <td>Engineering Statistics</td>                    
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">2</td>
                    <td>2</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td class="text-center">ST-24</td>
                    <td>STS307</td>
                    <td>Bahan Perkerasan Jalan (+Pr)</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">3</td>
                    <td>4</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">6</td>
                    <td class="text-center">ST-24</td>
                    <td>STS702</td>
                    <td>Struktur Baja</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">4</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">7</td>
                    <td class="text-center">ST-24</td>
                    <td>51195142</td>
                    <td>Perancangan Struktur Jembatan</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">5</td>
                    <td>2</td>
                    <td>2</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">8</td>
                    <td class="text-center">ST-24</td>
                    <td>51155081</td>
                    <td>Introduction to Earthquake Engineering</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">6</td>
                    <td>3</td>
                    <td>2</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">9</td>
                    <td class="text-center">ST-24</td>
                    <td>STS904</td>
                    <td>BIM untuk Manajemen Konstruksi</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">7</td>
                    <td>2</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10</td>
                    <td class="text-center">ST-24</td>
                    <td>51153061</td>
                    <td>Water Structures Design</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">8</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> -->

        <!-- ========== CARD :  Grafik Radar CPL-IK-CPMK ========== --> 
<style>
  .chart-box {
  position: relative;
  width: 100%;
}

.radar-box {
  height: 400px;   /* Radar lebih besar */
}


/*canvas {
  width: 100% !important;
  height: 100% !important;
}*/

</style>
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Mapping Semester Terpilih</h5>
  </div>
  <div class="row p-3">

    <div class="col-lg-7 ">
      <div class="chart-box radar-box">
        <canvas id="radarCPL"></canvas>
      </div>
    </div>


    <div class="col-lg-5 d-flex flex-column ">

      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartIK" style="height: 190px;" height="70"></canvas>
        </div>
      </div>



      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2 ">
          <canvas id="chartCPMKRight" style="height: 190px;" height="70"></canvas>
        </div>
      </div>



    </div>
  </div>
</div> -->


<!-- ========== CARD 4: Chart CPL-IK ========== -->     
 <!--        <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              CPL 1 - deskripsi CPL nya 
            </h5>
          </div>
          <div class="card-body " id="chartCPLIK1">
            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            
          </div> 
          <div class="card-footer collapse" id="chartCPLIK1">
            
            <h6 class="font-weight-bold">Daftar IK</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  
                  <tr>
                    <th style="width: 80px;">Kode </th>
                    <th>Deskripsi </th>
                    <th>Rerata </th>
                    <th>Tuntas </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IK-1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                    <td>82</td>
                    <td>90%</td>
                  </tr>
                  <tr>
                    <td>IK-5</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                     <td>75</td>
                    <td>80%</td>
                  </tr>
                  <tr>
                    <td>CPL 1</td>
                    <td>
                      <a href="monev-cpl-individual2.php" target="_blank" class="btn btn-outline-info">
                        Lihat Monev CPL Individual
                      </a>
                    </td>
                    <td>???</td>
                    <td>???</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>         
        </div> -->

         <!-- ========== CARD 4: Chart CPL-IK ========== -->     
<!--         <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              IK 2 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <div class="card-body " >
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
          <div class="card-footer collapse" id="chartCPLIK2">
            <h6 class="font-weight-bold">Daftar CPMK</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr align="center" class="bg-bllg">
                    <th rowspan="2" style="vertical-align: middle; width: 55px;">IK</th>
                    <th rowspan="2" colspan="2" style="vertical-align: middle;">CPMK</th>
                    <th colspan="3" style="vertical-align: middle;">Rerata CPMK</th>
                    <th colspan="3" style="vertical-align: middle;">IK</th>
                  </tr>
                  <tr align="center" class="bg-bllg">
                    <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
                    <th class="pl-2 pr-2" style="vertical-align: middle;">Bobot</th>
                    <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
                    <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IK 2</td>
                    <td colspan="2">
                      deskripsi IK nya 
                    </td>
                    <td colspan="3"></td>
                    <td>77,33</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>UKU100-1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                    <td>82</td>
                    <td>M</td>
                    <td>41</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>STS454-1</td>
                    <td>Mahasiswa mampu mempresentasikan ide dengan mudah dipahami.</td>
                    <td>-</td>
                    <td>M</td>
                    <td>-</td>
                    <td></td>
                  </tr>
                  
                  <tr>
                    <td></td>
                    <td>UKU900-5</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                     <td>75</td>
                     <td>H</td>
                     <td>75</td>
                    <td></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->




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
          sebaran angkatan yang menambil MK di semester ini. sebarang mahasiswa angkata yang menempuh semester nii dengan mengambil mata kuliah atau ada di kelas perkuliahan semester ini.
angkatan | jml mahasiswa |
2020  | 30
2021  | 59
2022  | 120

        </p>
        <p>
          Menampilkan untuk monitoring CPMK pada tiap mata kuliah, dalam satu semester. membandingkan antar tahun akademik. Sehingga mencirikan CQI pembelajaran mata kuliah
        </p>     
        <p>
          bahan evaluasi MK, dg parameter CPMK, dengan detail di kelas perkuliaha.
        </p>   
        <p>
         v 1️⃣ Monitoring Operasional Semester

Perlu sampai CPL atau cukup CPMK?

Untuk monitoring operasional semester:

✔ Fokus utama cukup sampai CPMK.

Kenapa?

Karena semester itu level implementasi:

Dosen mengajar

Kelas berjalan

Instrumen dipakai

Penilaian dilakukan

Unit kendali dosen adalah:

Aktivitas pembelajaran

Penilaian CPMK

Hasil kelas

CPL adalah agregasi lintas MK dan lintas semester.
Jika dipaksakan tampil penuh di semester view, akan muncul:

CPL terlihat “kosong”

CPL tampak rendah

Interpretasi keliru karena belum semua MK kontribusi

Rekomendasi Desain
📘 Semester View (Operasional)

Tampilkan:

Capaian CPMK per kelas

Distribusi nilai per kelas

Evaluasi kelas

Konsistensi antar kelas

Evaluasi MK (agregasi semua kelas dalam semester itu)

CPL boleh ditampilkan, tetapi:

Sebagai indikasi parsial

Diberi label “kontribusi sementara”

2️⃣ Evaluasi MK Cocok di Semester atau Tahun Akademik?

Jawabannya:

✔ Evaluasi MK operasional → Semester view
✔ Evaluasi MK struktural → Tahun akademik view

Bedanya:

Semester:

Apakah kelas berjalan baik?

Apakah ada perbedaan antar dosen?

Tahun akademik:

Apakah MK konsisten sepanjang tahun?

Apakah CPMK stabil antar semester?

Apakah ada masalah sistemik?

Jadi evaluasi MK bisa muncul di dua view, tapi konteksnya berbeda.
        </p>
        <p>
           1. Tingkat Ketercapaian CPMK:
% mahasiswa mencapai batas minimal
Rata-rata nilai Final per CPMK
CPMK 1 → 78% mahasiswa ≥ 70

2. Gap Awal vs Final

Mengukur efektivitas pembelajaran.

Rata-rata Awal = 65
Rata-rata Final = 78
Gap = +13

Ini indikator:

Apakah pembelajaran & perbaikan efektif?
3. Distribusi Nilai

Berapa % rendah

Berapa % sedang

Berapa % tinggi

Karena rata-rata saja bisa menipu.

4. CPMK Lemah

Identifikasi:

CPMK mana < threshold (misal 75%)

Ini dasar refleksi dosen:

Metode kurang tepat?

Soal tidak align?

Materi terlalu berat?

5. Alignment Assessment

Apakah soal benar-benar mengukur CPMK?

Bobot sudah proporsional?

Ini penting dalam OBE:

Assessment harus aligned dengan learning outcome.

tambahan aspek:
Persentase mahasiswa perlu perbaikan
CPMK dengan tingkat remedial tinggi
-------
Level Dosen

Rata-rata Final CPMK

% Lulus Threshold

Gap Awal–Final

Distribusi Nilai

CPMK Bermasalah
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal: Preview Risk Performance -->
<div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h6 class="modal-title">Preview Performa Risiko (sample)</h6>
        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-sm table-bordered">
          <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa(pilih by Rerata atau by %Tuntas)</th></tr></thead>
          <tbody>
            <tr><td>1</td><td>STS009-1</td><td>lorem ipsum</td><td>61 </td></tr>
            <tr><td>2</td><td>STS544-4</td><td>lorem ipsum</td><td>48 </td></tr>
            <tr><td>3</td><td>UKU355-6</td><td>Contoh Lain</td><td>45 </td></tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail MK -->
<div class="modal fade" id="modalDetailMK" tabindex="-1" role="dialog" aria-labelledby="detailMKTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="detailMKTitle">Detail Kelas Mata Kuliah</h5>
        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <div class="modal-body">

        <!-- Informasi Umum -->
        <h6 class="mb-2"><b>Informasi Umum</b></h6>
        <table class="table table-sm table-bordered mb-4">
          <tr>
            <th style="width: 180px;">Mata Kuliah</th>
            <td>SKT1239 — Dasar Matematika</td>
          </tr>
          <tr>
            <th style="width: 180px;">Periode Akademik</th>
            <td>2024/2025 Gasal</td>
          </tr>
        </table>

        <!-- Tabel Detail Kelas -->
        <h6 class="mb-2"><b>Informasi Kelas</b></h6>

        <div class="table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="thead-light">
              <tr class="text-center">
                <th>Kelas</th>
                <th>Dosen Pengampu</th>
                <th>Rerata Nilai MK</th>
                <th>Rerata CPMK 1</th>
                <th>Rerata Remidi CPMK 1</th>
                <th>Rerata CPMK 2</th>
                <th>Rerata Remidi CPMK 2</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>A</td>
                <td>Hasan, ST, MT.</td>
                <td>78</td>
                <td>78</td>
                <td>0</td>
                <td>78</td>
                <td>0</td>
              </tr>
              <tr class="text-center">
               <td>C</td>
                <td>Rendi, ST, MT.</td>
                <td>78</td>
                <td>78</td>
                <td>0</td>
                <td>78</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<script>
    // -------------------------
    // UI helpers
    // -------------------------
  function openAllStudentsPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalPreviewAll')); modal.show(); }
  function openAllRisikoPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalRisikoAll')); modal.show(); }
</script>
<script>
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------


// 258 CPMK  (format: STKxxx-n)
const cpmkLabels = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages = cpmkLabels.map(() => randomScore());

// 78 MK
const mkLabels = Array.from({length: 78}, (_, i) => `STK${String(600 + i).padStart(3,'0')}`);
const mkAverages = mkLabels.map(() => randomScore());

// -------------------------------------------------
// 2) FUNCTION RANDOM SCORE
// -------------------------------------------------
function randomScore() {
    return Number((0 + Math.random()*100).toFixed(2)); // rentang 0–100
}

// -------------------------------------------------
// 3) FUNGSI GENERATOR BARCHART UMUM
// -------------------------------------------------

function generateBarChart(canvasId, labels, data, labelName, color) {
    const ctx = document.getElementById(canvasId).getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: labelName,
                data: data,
                backgroundColor: color.bg,
                borderColor: color.border,
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
              ticks: {
                display: false   // ⬅️ MATIKAN LABEL BAWAH
              },
              grid: {
                display: false   // (opsional) hilangkan garis grid vertikal
              }
            },
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
}

// -------------------------------------------------
// 4) GENERATE 4 BARCHART
// -------------------------------------------------

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Rata-rata CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

</script>




<script>
// ===============================================
// DATA PERSENTASE KETUNTASAN CPMK (BERBEDA)
// ===============================================


// Gunakan label yang sama seperti chartCPMK agar konsisten
const ketuntasanLabels = cpmkLabels.slice(0, 258); 
// hanya tampilkan 40 pertama agar tidak terlalu padat

// Generate data berbeda (60% - 100%)
const ketuntasanValues = ketuntasanLabels.map(() => {
    return Number((60 + Math.random()*40).toFixed(2));
});

// ===============================================
// GENERATE BAR CHART PERSENTASE KETUNTASAN
// ===============================================

const ctxKetuntasan = document.getElementById("chartKetuntasanCPMK").getContext("2d");

new Chart(ctxKetuntasan, {
    type: "bar",
    data: {
        labels: ketuntasanLabels,
        datasets: [
            {
                label: "Mahasiswa Tuntas (%)",
                data: ketuntasanValues,
                backgroundColor: "rgba(255, 99, 132, 0.7)",
                borderColor: "rgb(255, 99, 132)",
                borderWidth: 1
            },
            {
                label: "Batas Standar",
                type: "line",
                data: ketuntasanLabels.map(() => 65),
                borderColor: "red",
                borderWidth: 2,
                borderDash: [6,6],
                fill: false,
                pointRadius: 0
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: "top" },
            tooltip: {
                mode: "index",
                intersect: false
            }
        },
        scales: {
            x: {
                ticks: { display: false },
                grid: { display: false }
            },
            y: {
                beginAtZero: true,
                max: 100,
                title: {
                    display: false,
                    text: "Persentase (%)"
                }
            }
        }
    }
});
</script>




<script>
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      'CPMK STS009-2',' CPMK STS009-1','CPMK STS050-2','CPMK STS054-2','CPMK STS009-4',
      'CPMK STS010-1','CPMK STS099-2','CPMK UKU009-2','CPMK UKU009-1','IK 1'
    ],
    datasets: [
      {
        label: 'Batas Standar (> 80%)',
        type: 'line',
        yMin: 80, 
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Rerata Skor',
        data: [82, 80, 79, 83, 78, 81, 77, 72, 70, 74],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: '% Mahasiswa Tuntas (≥ 60)',
        data: [85, 81, 82, 84, 80, 81, 80, 61, 50, 67],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 60',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>

              <script>
const ctx2 = document.getElementById("chartCPL2");

new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['UKU100-1', 'STS454-1','UKU900-5', 'IK 2'],
        datasets: [{
            label: 'Capaian',
            data: [90, 0,80, 77.33],
            backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', 
                '#6c757d', // IK 5
                '#007bff'  // CPL 2
            ],
            borderColor: [
                '#6c757d',
                '#6c757d',
                '#6c757d',
                '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100
            }
        }
    }
});
</script>


<script>
  const ctx3 = document.getElementById('stackedCPMKChart').getContext('2d');

  const data = {
    labels: ['CPMK 1', 'CPMK 2', 'CPMK 3', 'CPMK 4'],
    datasets: [
      {
        label: 'Unsatisfactory (0-30)',
        data: [9, 6, 3, 6],
        backgroundColor: '#F59999'
      },
      {
        label: 'Developing (30.01-55)',
        data: [15, 18, 12, 15],
        backgroundColor: '#B7C9FC'
      },
      {
        label: 'Competent (55.01-70)',
        data: [30, 24, 27, 21],
        backgroundColor: '#9AE5CA'
      },
      {
        label: 'Accomplished (70.01-85)',
        data: [36, 42, 39, 45],
        backgroundColor: '#A2EDD2'
      },
      {
        label: 'Exemplary (85.01-100)',
        data: [30, 30, 39, 33],
        backgroundColor: '#6FD3C3'
      }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        },
        tooltip: {
          mode: 'index',
          intersect: false,
          itemSort: function(a, b) {
            return b.datasetIndex - a.datasetIndex;
          }
        }
      },
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true,
          beginAtZero: true,
          max: 120,
          title: {
            display: true,
            text: 'Jumlah Mahasiswa'
          }
        }
      }
    }
  };

  new Chart(ctx3, config);
</script>

<script>
// ----- Radar CPL -----
  const radarCtx = document.getElementById('radarCPL').getContext('2d');
  const radarCPL = new Chart(radarCtx, {
    type: 'radar',
    data: {
      labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10', 'CPL 11'],
      datasets: [{
        label: 'Capaian CPL',
        data: [80, 90, 75, 85, 88,65, 67, 70, 55, 30, 23],
            // Warna hijau lembut (lebih nyaman di mata)
        backgroundColor: 'rgba(80, 200, 120, 0.35)',
        borderColor: 'rgba(60, 160, 95, 0.9)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(60, 160, 95, 1)'
      }]
    },
    options: {
      responsive: true,
    maintainAspectRatio: false,
      scales: {
        r: {
          min: 0,
          max: 100,
          ticks: { stepSize: 10 }
        }
      }
    }
  });

    // ----- Progress CPL Keseluruhan -----
    const progressCtx = document.getElementById('progressCPL').getContext('2d');
    const progressCPL = new Chart(progressCtx, {
        type: 'bar',
        data: {
            labels: ['CPL A', 'CPL B', 'CPL C'],
            datasets: [{
                label: 'Progress %',
                data: [74, 78, 82],
                backgroundColor: ['#007bff','#28a745','#ffc107']
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
    maintainAspectRatio: false,
            scales: {
                x: { max: 100, ticks: { callback: function(val){ return val + '%'; } } }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

    // ----- Grafik Batang CPMK Top 10 -----
    const barCtx = document.getElementById('barCPMK').getContext('2d');
    const barCPMK = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['CPMK1','CPMK2','CPMK3','CPMK4','CPMK5','CPMK6','CPMK7','CPMK8','CPMK9','CPMK10'],
            datasets: [{
                label: 'Capaian %',
                data: [62, 65, 67, 68, 70, 72, 74, 75, 77, 78],
                backgroundColor: 'rgba(255, 99, 132, 0.7)'
            }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: { beginAtZero: true, max: 100, ticks: { callback: function(val){ return val + '%'; } } }
          }
        }
    });
</script>
<script>
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------

// 11 CPL
const cplLabels = Array.from({length: 11}, (_, i) => `CPL-${String(i+1).padStart(2,'0')}`);
const cplAverages = cplLabels.map(() => randomScore());

// 24 IK
const ikLabels = Array.from({length: 24}, (_, i) => `IK-${String(i+1).padStart(2,'0')}`);
const ikAverages = ikLabels.map(() => randomScore());

// 258 CPMK  (format: STKxxx-n)
const cpmkLabels2 = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages2 = cpmkLabels2.map(() => randomScore());

// 78 MK
const mkLabels2 = Array.from({length: 78}, (_, i) => `STK${String(600 + i).padStart(3,'0')}`);
const mkAverages2 = mkLabels2.map(() => randomScore());

// -------------------------------------------------
// 2) FUNCTION RANDOM SCORE
// -------------------------------------------------
function randomScore() {
    return Number((0 + Math.random()*100).toFixed(2)); // rentang 0–100
}

// -------------------------------------------------
// 3) FUNGSI GENERATOR BARCHART UMUM
// -------------------------------------------------

function generateBarChart(canvasId, labels, data, labelName, color) {
    const ctz = document.getElementById(canvasId).getContext("2d");
    new Chart(ctz, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: labelName,
                data: data,
                backgroundColor: color.bg,
                borderColor: color.border,
                borderWidth: 2
            }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              ticks: {
                display: false   // ⬅️ MATIKAN LABEL BAWAH
              },
              grid: {
                display: false   // (opsional) hilangkan garis grid vertikal
              }
            },
            y: {
              beginAtZero: true,
              max: 100
            }
          }
        }

    });
}

// -------------------------------------------------
// 4) GENERATE 4 BARCHART
// -------------------------------------------------



generateBarChart("chartIK", ikLabels, ikAverages, "Capaian IK", {
    bg: "rgba(255, 159, 64, 0.7)",
    border: "rgb(255, 159, 64)"
});

generateBarChart("chartCPMKRight", cpmkLabels2, cpmkAverages2, "Capaian CPMK", {
    bg: "rgba(255, 99, 132, 0.7)",
    border: "rgb(255, 99, 132)"
});

generateBarChart("chartMK", mkLabels, mkAverages, "Capaian MK", {
    bg: "rgba(54, 162, 235, 0.7)", border: "rgb(54, 162, 235)"     // biru
});

</script>
<?php include('5script.php'); ?>







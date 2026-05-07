<?php $page = '';   ?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
         

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  PERBEDAAN ISTILAH
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">

                  <thead class="thead-dark">
                    <tr>
                      <th style="width: 14%;">Jenis</th>
                      <th style="width: 18%;">Fokus</th>
                      <th style="width: 18%;">Pertanyaan Utama</th>
                      <th style="width: 28%;">Isi</th>
                      <th style="width: 22%;">Ciri Khas</th>
                    </tr>
                  </thead>

                  <tbody>

                    <!-- DASHBOARD -->
                    <tr>
                      <td>
                        <strong>Dashboard</strong>
                      </td>

                      <td>
                        Kondisi bisnis secara cepat
                      </td>

                      <td>
                        “Bagaimana kondisi bisnis sekarang?”
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>KPI utama</li>
                          <li>Summary angka</li>
                          <li>Grafik & chart</li>
                          <li>Target vs realisasi</li>
                          <li>Trend singkat</li>
                          <li>Highlight performa</li>
                        </ul>
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Ringkas</li>
                          <li>Visual</li>
                          <li>High level</li>
                          <li>Cepat dibaca</li>
                          <li>Realtime / near realtime</li>
                          <li>Tidak detail transaksi</li>
                        </ul>
                      </td>
                    </tr>

                    <!-- MONITORING -->
                    <tr>
                      <td>
                        <strong>Monitoring</strong>
                      </td>

                      <td>
                        Kontrol operasional berjalan
                      </td>

                      <td>
                        “Apa yang perlu segera ditindak?”
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Status pekerjaan aktif</li>
                          <li>Task pending</li>
                          <li>SLA overdue</li>
                          <li>Warning / alert</li>
                          <li>Ticket open</li>
                          <li>Approval pending</li>
                        </ul>
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Realtime</li>
                          <li>Actionable</li>
                          <li>Operasional</li>
                          <li>Fokus eksekusi</li>
                          <li>Ada status & prioritas</li>
                          <li>Banyak filter aktif</li>
                        </ul>
                      </td>
                    </tr>

                    <!-- REKAP -->
                    <tr>
                      <td>
                        <strong>Rekap / Laporan</strong>
                      </td>

                      <td>
                        Evaluasi hasil periode tertentu
                      </td>

                      <td>
                        “Bagaimana hasil periode ini?”
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Total transaksi</li>
                          <li>Summary bulanan</li>
                          <li>Grouping data</li>
                          <li>Subtotal & total</li>
                          <li>Filter tanggal</li>
                          <li>Export Excel/PDF</li>
                        </ul>
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Historis</li>
                          <li>Periodik</li>
                          <li>Formal report</li>
                          <li>Data agregasi</li>
                          <li>Bisa dicetak</li>
                          <li>Tidak realtime</li>
                        </ul>
                      </td>
                    </tr>

                    <!-- ANALISA -->
                    <tr>
                      <td>
                        <strong>Analisa</strong>
                      </td>

                      <td>
                        Insight & strategi bisnis
                      </td>

                      <td>
                        “Kenapa itu terjadi?”
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Trend analysis</li>
                          <li>Perbandingan performa</li>
                          <li>Korelasi data</li>
                          <li>Segmentasi client</li>
                          <li>Margin analysis</li>
                          <li>Forecast & prediction</li>
                        </ul>
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Strategic</li>
                          <li>Insight driven</li>
                          <li>Comparative</li>
                          <li>Drill down</li>
                          <li>Decision support</li>
                          <li>Data interpretation</li>
                        </ul>
                      </td>
                    </tr>

                    <!-- RIWAYAT -->
                    <tr>
                      <td>
                        <strong>Riwayat / Audit Trail</strong>
                      </td>

                      <td>
                        Jejak detail aktivitas sistem
                      </td>

                      <td>
                        “Apa yang sebenarnya terjadi?”
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Log aktivitas user</li>
                          <li>Histori perubahan data</li>
                          <li>Timestamp aktivitas</li>
                          <li>User action tracking</li>
                          <li>Before / after value</li>
                          <li>Approval history</li>
                        </ul>
                      </td>

                      <td>
                        <ul class="mb-0 pl-3">
                          <li>Sangat detail</li>
                          <li>Audit & tracing</li>
                          <li>Investigasi</li>
                          <li>Immutable log</li>
                          <li>Chronological</li>
                          <li>Bukan summary</li>
                        </ul>
                      </td>
                    </tr>

                  </tbody>

                </table>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          
          

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "4footer.php"; 
?>
<?php
include "5script.php"; 
?>
<?php $page = 'monev_semester3'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
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
          <div class="card">
            <div class="card-body ">
                  <!-- Identitas Mata Kuliah -->
    <h6><b>Identitas Mata Kuliah</b></h6>
    <table class="table table-sm table-hover table-bordered table-striped deta">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Periode Akademik</th>
        <td>2024/2025 - Gasal</td>
      </tr>
      <tr>
        <th>Kode MK</th>
        <td>SKT1239</td>
      </tr>
      <tr>
        <th>Nama MK</th>
        <td>Bahan Perkerasan Jalan (+Pr)</td>
      </tr>
      <tr>
        <th>Jumlah CPMK</th>
        <td>4</td>
      </tr>
    </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-semester-.php'">
                  <i class="fas fa-reply mr-1"></i> Kembali
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list mr-1"> </i>Catat Temuan </a> 
              </div>
            </div>
          </div>

    


  <!-- TAB NAV  -->
<!--   <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-cpl-individual1.php'"><a class="nav-link active">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual4.php'"><a class="nav-link ">Riwayat CPL</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual5.php'"><a class="nav-link ">Riwayat IK</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual3.php'"><a class="nav-link ">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual6.php'"><a class="nav-link ">Riwayat KHS</a></li>
    <li class="nav-item" onclick="window.location='monev-cpl-individual7.php'"><a class="nav-link ">IPK</a></li>
  </ul>
 -->



<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<div class="card">
 <!--  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Mata Kuliah</h5>
  </div> -->

  <div class="card-body">

    <!-- Grafik Rentang Nilai -->
    <h6><b>Distribusi Nilai Mahasiswa <i>Berdasarkan Rentang Nilai</i> </b></h6>
    <canvas id="stackedCPMKChart" height="70" class="mb-4"></canvas>

    <!-- Tabel Perbandingan kelas-->
    <h6><b>Perbandingan Capaian Pembelajaran <i>Antar Kelas</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-sm table-striped">
        <thead class="thead-light">
          <tr class="text-center">
            <!-- <th rowspan="2">Aksi</th> -->
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
            <!-- <td><a href="detail.php" class="btn btn-sm btn-outline-info">📄</a></td> -->
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
            <!-- <td><a href="detail.php" class="btn btn-sm btn-outline-info">📄</a></td> -->
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
            <!-- <td><a href="detail.php" class="btn btn-sm btn-outline-info">📄</a></td> -->
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

          <!-- Baris Kesimpulan Final -->
          <!-- <tr class="table-info font-weight-bold"> -->
            <tr class="table-info ">
              <td colspan="2">Agregasi Semua Kelas</td>
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
</div>
--------
<div class="card card-primary">
  <div class="card-header bg-primary text-white">
    <h5 class="card-title mb-0">Rekapan Catatan & Evaluasi Mata Kuliah ini</h5>
    <small>Kolaboratif • Berdasarkan isian 13 dosen</small>
  </div>

  <div class="card-body">

    <h6><strong>1. Capaian CPMK</strong></h6>
    <p>🏆 Tercapai Kuat (9 dari 13 dosen)</p>

    <h6><strong>2. Tingkat Partisipasi Mahasiswa</strong></h6>
    <p>🏆 Aktif hingga Sangat Aktif (10 dari 13 dosen)</p>

    <hr>

    <h6><strong>3. Efektivitas Metode Pengajaran (Skala 1–5)</strong></h6>
    <ul>
      <li>Rata-rata skor: <strong>4.3</strong></li>
      <li>Skor terbanyak: <strong>4</strong> (7 dosen)</li>
      <li>Skor 5: 4 dosen</li>
      <li>Skor 3: 2 dosen</li>
    </ul>

    <h6><strong>4. Kesesuaian Penilaian dengan Kemampuan Mahasiswa (Skala 1–5)</strong></h6>
    <ul>
      <li>Rata-rata skor: <strong>4.1</strong></li>
      <li>Skor terbanyak: <strong>4</strong> (8 dosen)</li>
      <li>Skor 5: 3 dosen</li>
      <li>Skor 3: 2 dosen</li>
    </ul>

    <hr>

    <h6><strong>5. Kendala Utama yang Paling Banyak Muncul</strong></h6>

    <span class="badge badge-danger">Waktu Perkuliahan Terbatas (10)</span>
    <span class="badge badge-warning">Materi Terlalu Padat (8)</span>
    <span class="badge badge-info">Partisipasi Mahasiswa Tidak Merata (7)</span>
    <span class="badge badge-secondary">Koneksi Internet (4)</span>
    <span class="badge badge-secondary">Keterbatasan Perangkat Praktikum (3)</span>

    <hr>

    <h6><strong>6. Metode Pengajaran yang Dinilai Paling Efektif</strong></h6>

    <span class="badge badge-success">Praktikum (11)</span>
    <span class="badge badge-primary">Diskusi Kelompok (9)</span>
    <span class="badge badge-info">Studi Kasus (8)</span>
    <span class="badge badge-secondary">Project Based Learning (6)</span>
    <span class="badge badge-light">Presentasi Mahasiswa (4)</span>

    <hr>

    <h6><strong>7. Ringkasan Dinamika Kelas</strong></h6>

    <ul>
      <li>Mayoritas dosen menilai mahasiswa menunjukkan peningkatan pemahaman pada pertengahan hingga akhir semester.</li>
      <li>Mahasiswa lebih aktif ketika pembelajaran dikaitkan dengan studi kasus dan praktik langsung.</li>
      <li>Beberapa kelompok mahasiswa masih mengalami kesulitan pada materi dasar yang menjadi prasyarat.</li>
      <li>Tingkat kehadiran relatif baik, namun partisipasi diskusi belum merata di seluruh kelas.</li>
      <li>Praktikum dinilai mampu meningkatkan pemahaman CPMK secara signifikan.</li>
    </ul>

    <hr>

    <h6><strong>8. Rekomendasi Perbaikan Semester Berikutnya</strong></h6>

    <ul>
      <li>Menambah porsi praktikum dan latihan berbasis kasus nyata.</li>
      <li>Menyediakan materi pengayaan untuk mahasiswa yang masih lemah pada konsep dasar.</li>
      <li>Mengurangi kepadatan materi dalam satu pertemuan.</li>
      <li>Menerapkan pre-test dan post-test untuk memonitor perkembangan capaian CPMK.</li>
      <li>Meningkatkan aktivitas diskusi terstruktur dan tugas kelompok.</li>
    </ul>

    <hr>

    <h6><strong>9. Insight Strategis Program Studi</strong></h6>

    <div class="alert alert-light border">
      <strong>Kesimpulan:</strong><br>
      Berdasarkan masukan 13 dosen, proses pembelajaran dinilai berjalan baik dan CPMK mayoritas tercapai. 
      Namun terdapat indikasi bahwa sebagian mahasiswa masih memerlukan penguatan konsep dasar sebelum memasuki materi lanjutan. 
      Praktikum dan studi kasus terbukti menjadi pendekatan paling efektif untuk meningkatkan pemahaman mahasiswa.
    </div>

  </div>

  <div class="card-footer d-flex justify-content-between">
    <button class="btn btn-outline-secondary">
      Export Rekap
    </button>

    <button class="btn btn-outline-primary">
      Lihat Detail 13 Responden
    </button>
  </div>
</div>
--------
<div class="card">
  <div class="card-body">
    <!-- tabel tren 3 periode -->  
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
        <h5 class="modal-title" id="modalFilterLabel"> Pencarian Mahasiswa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-info mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Masukkan NIM mahasiswa yang ingin dicari. 
            Anda dapat mengisi sebagian NIM untuk pencarian lebih fleksibel.
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input 
              type="text" 
              name="nim" 
              id="nim" 
              class="form-control" 
              placeholder="Contoh: 20231001"
              value="<?= isset($_GET['nim']) ? htmlspecialchars($_GET['nim']) : '' ?>"
            >
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-info">
             Cari 
          </button>
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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


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
<?php include('5script.php'); ?>
<?php
$page = 'evaluasi_mk_detail';
include('1header.php');
include('2navbar.php');

// Include sidebar sesuai peran
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>

<div class="content-wrapper" style="min-height: 626.4px;">

    <!-- Alert Periode -->
    <div class="alert alert-danger" style="border-radius: 0;">
        <h3>
            <i class="fas fa-info-circle"></i>
            Periode Akademik Sudah Tidak Berlaku
        </h3>
        Masa berlaku periode akademik yang sedang aktif telah berlalu
    </div>

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <h4>Evaluasi Dosen oleh Mahasiswa</h4>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <!-- Card Utama -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Tombol Aksi -->
                            <div class="mb-2">
                                <a href="evaluasi_mk.php" class="btn btn-secondary">
                                    <span class="fas fa-reply"></span> Kembali
                                </a>

                                <button type="button" class="btn btn-primary btn-sm me-2">
                                    📥 Impor
                                </button>

                                <button type="button" class="btn btn-success btn-sm">
                                    📤 Ekspor
                                </button>

                                <button
                                type="button"
                                onclick="load_modal('kelas_mata_kuliah/modal_reset_data_mahasiswa/4402')"
                                class="btn btn-danger"
                                >
                                <span class="fas fa-sync"></span> Reset
                            </button>
                        </div>

                        <hr>

                        <!-- Informasi Kelas -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    Informasi Kelas
                                </h5>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <table class="table table-sm table-hover table-bordered table-striped deta">
                                            <tbody>
                                                <tr>
                                                    <td width="35%"><b>Periode Akademik</b></td>
                                                    <td>2024/2025 - Semester Genap</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Dosen Pengampu</b></td>
                                                    <td>155211304 - Tintin Mutiara, S.T., M.Eng., Dr.</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mata Kuliah</b></td>
                                                    <td>Teknologi Polimer dan Komposit (MTK907)</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Kelas</b></td>
                                                    <td>A - Senin, 08:00–10:00, Ruang 101</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jumlah Mahasiswa</b></td>
                                                    <td>40</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-lg-12">
                                        <table class="table table-sm table-hover table-bordered table-striped deta">
                                            <tbody>
                                                <tr>
                                                    <td width="35%"><b>Mahasiswa</b></td>
                                                    <td>19312418 - Claudia Monica Aditama</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Form Evaluasi -->
                <div class="card">
                  <div class="card-body">
                    <form action="submit_evaluasi.php" method="post">
                      <h4>Form Evaluasi Dosen</h4>

                      <p class="fw-bold">Penilaian (1 = Sangat Kurang, 5 = Sangat Baik)</p>

                      <!-- Penguasaan Materi -->
                      <div class="mb-3">
                        <label class="form-label">Penguasaan Materi</label>
                        <div class="btn-group" role="group" aria-label="Materi">
                          <?php for($i=1;$i<=5;$i++): ?>
                            <input type="radio" class="btn-check" name="materi" id="materi<?= $i ?>" value="<?= $i ?>" required>
                            <label class="btn btn-outline-primary" for="materi<?= $i ?>"><?= $i ?></label>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Keterampilan Mengajar -->
                <div class="mb-3">
                    <label class="form-label">Keterampilan Mengajar</label>
                    <div class="btn-group" role="group" aria-label="Mengajar">
                      <?php for($i=1;$i<=5;$i++): ?>
                        <input type="radio" class="btn-check" name="mengajar" id="mengajar<?= $i ?>" value="<?= $i ?>" required>
                        <label class="btn btn-outline-success" for="mengajar<?= $i ?>"><?= $i ?></label>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Ketepatan Waktu / Disiplin -->
            <div class="mb-3">
                <label class="form-label">Ketepatan Waktu / Disiplin</label>
                <div class="btn-group" role="group" aria-label="Disiplin">
                  <?php for($i=1;$i<=5;$i++): ?>
                    <input type="radio" class="btn-check" name="disiplin" id="disiplin<?= $i ?>" value="<?= $i ?>" required>
                    <label class="btn btn-outline-warning" for="disiplin<?= $i ?>"><?= $i ?></label>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Interaksi dengan Mahasiswa -->
        <div class="mb-3">
            <label class="form-label">Interaksi dengan Mahasiswa</label>
            <div class="btn-group" role="group" aria-label="Interaksi">
              <?php for($i=1;$i<=5;$i++): ?>
                <input type="radio" class="btn-check" name="interaksi" id="interaksi<?= $i ?>" value="<?= $i ?>" required>
                <label class="btn btn-outline-info" for="interaksi<?= $i ?>"><?= $i ?></label>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Penggunaan Media / Metode -->
    <div class="mb-3">
        <label class="form-label">Penggunaan Media / Metode Pembelajaran</label>
        <div class="btn-group" role="group" aria-label="Media">
          <?php for($i=1;$i<=5;$i++): ?>
            <input type="radio" class="btn-check" name="media" id="media<?= $i ?>" value="<?= $i ?>" required>
            <label class="btn btn-outline-secondary" for="media<?= $i ?>"><?= $i ?></label>
        <?php endfor; ?>
    </div>
</div>

<!-- Komentar -->
<div class="mb-3">
    <label>Komentar / Saran</label>
    <textarea class="form-control" name="komentar" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i> Kirim Evaluasi</button>
</form>
</div>
</div>


<div class="card mb-4">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0"><i class="fas fa-check-circle me-2"></i> Evaluasi Checklist</h5>
</div>
<div class="card-body">
    <form action="submit_checklist.php" method="post">
      <table class="table table-bordered table-striped table-sm align-middle">
        <thead class="table-dark text-center">
          <tr>
            <th>Kriteria</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Kelayakan Pemilihan Judul</td>
        <td class="text-center"><input type="radio" name="judul" value="1"></td>
        <td class="text-center"><input type="radio" name="judul" value="2"></td>
        <td class="text-center"><input type="radio" name="judul" value="3"></td>
        <td class="text-center"><input type="radio" name="judul" value="4"></td>
        <td class="text-center"><input type="radio" name="judul" value="5"></td>
    </tr>
    <tr>
        <td>Kelayakan beban kerja berdasarkan SKS TA</td>
        <td class="text-center"><input type="radio" name="beban" value="1"></td>
        <td class="text-center"><input type="radio" name="beban" value="2"></td>
        <td class="text-center"><input type="radio" name="beban" value="3"></td>
        <td class="text-center"><input type="radio" name="beban" value="4"></td>
        <td class="text-center"><input type="radio" name="beban" value="5"></td>
    </tr>
    <tr>
        <td>Kelayakan Metodologis</td>
        <td class="text-center"><input type="radio" name="metodologi" value="1"></td>
        <td class="text-center"><input type="radio" name="metodologi" value="2"></td>
        <td class="text-center"><input type="radio" name="metodologi" value="3"></td>
        <td class="text-center"><input type="radio" name="metodologi" value="4"></td>
        <td class="text-center"><input type="radio" name="metodologi" value="5"></td>
    </tr>
    <tr>
        <td>Kesesuaian Format dan Kelengkapan Naskah</td>
        <td class="text-center"><input type="radio" name="format" value="1"></td>
        <td class="text-center"><input type="radio" name="format" value="2"></td>
        <td class="text-center"><input type="radio" name="format" value="3"></td>
        <td class="text-center"><input type="radio" name="format" value="4"></td>
        <td class="text-center"><input type="radio" name="format" value="5"></td>
    </tr>
    <tr>
        <td>Kelayakan Tata Tulis dan Bahasa</td>
        <td class="text-center"><input type="radio" name="tulis" value="1"></td>
        <td class="text-center"><input type="radio" name="tulis" value="2"></td>
        <td class="text-center"><input type="radio" name="tulis" value="3"></td>
        <td class="text-center"><input type="radio" name="tulis" value="4"></td>
        <td class="text-center"><input type="radio" name="tulis" value="5"></td>
    </tr>
</tbody>
</table>

<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-paper-plane me-1"></i> Kirim Evaluasi</button>
</form>
</div>
</div>


<div class="card mb-4">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informasi Kelas</h5>
</div>
<div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <table class="table table-sm table-hover table-bordered table-striped deta">
          <tbody>
            <tr>
              <td width="35%"><b>Periode Akademik</b></td>
              <td>2024/2025 - Semester Genap</td>
          </tr>
          <tr>
              <td><b>Dosen Pengampu</b></td>
              <td>155211304 - Tintin Mutiara, S.T., M.Eng., Dr.</td>
          </tr>
          <tr>
              <td><b>Mata Kuliah</b></td>
              <td>Teknologi Polimer dan Komposit - (MTK907)</td>
          </tr>
          <tr>
              <td><b>Kelas</b></td>
              <td>A - Jadwal (Senin, 08:00-10:00, Ruang 101)</td>
          </tr>
          <tr>
              <td><b>Mahasiswa</b></td>
              <td>19312418 - Claudia Monica Aditama</td>
          </tr>
      </tbody>
  </table>
</div>
<div class="col-lg-6">
    <table class="table table-sm table-hover table-bordered table-striped deta">
      <tbody>
        <tr>
          <td width="35%"><b>Jumlah Mahasiswa</b></td>
          <td>40</td>
      </tr>
      <tr>
          <td><b>Jumlah CPMK</b></td>
          <td>5</td>
      </tr>
      <tr>
          <td><b>Jumlah SKS</b></td>
          <td>3</td>
      </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>

<div class="card mb-4">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informasi Kelas</h5>
</div>
<div class="card-body">
    <div class="row mb-2">
      <div class="col-md-4"><strong>Periode Akademik</strong></div>
      <div class="col-md-8">2024/2025 - Semester Genap</div>
  </div>
  <div class="row mb-2">
      <div class="col-md-4"><strong>Dosen Pengampu</strong></div>
      <div class="col-md-8">155211304 - Tintin Mutiara, S.T., M.Eng., Dr.</div>
  </div>
  <div class="row mb-2">
      <div class="col-md-4"><strong>Mata Kuliah</strong></div>
      <div class="col-md-8">Teknologi Polimer dan Komposit - (MTK907)</div>
  </div>
  <div class="row mb-2">
      <div class="col-md-4"><strong>Kelas</strong></div>
      <div class="col-md-8">A - Jadwal (Senin, 08:00-10:00, Ruang 101)</div>
  </div>
  <div class="row">
      <div class="col-md-4"><strong>Jumlah Mahasiswa</strong></div>
      <div class="col-md-8">40</div>
  </div>
</div>
</div>


<form action="submit_evaluasi.php" method="post">
  <h4>Form Evaluasi Dosen</h4>

  <!-- Identitas -->
  <div class="mb-3">
    <label>Mata Kuliah</label>
    <input type="text" class="form-control" name="mata_kuliah" required>
</div>

<div class="mb-3">
    <label>Nama Dosen</label>
    <input type="text" class="form-control" name="nama_dosen" required>
</div>

<div class="mb-3">
    <label>Semester / Tahun Akademik</label>
    <input type="text" class="form-control" name="semester" required>
</div>

<!-- Skala Penilaian -->
<h5>Penilaian (1 = Sangat Kurang, 5 = Sangat Baik)</h5>

<div class="mb-2">
    <label>Penguasaan Materi</label>
    <select class="form-select" name="materi" required>
      <option value="">Pilih</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select>
</div>

<div class="mb-2">
    <label>Keterampilan Mengajar</label>
    <select class="form-select" name="mengajar" required>
      <option value="">Pilih</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select>
</div>

<div class="mb-2">
    <label>Ketepatan Waktu / Disiplin</label>
    <select class="form-select" name="disiplin" required>
      <option value="">Pilih</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select>
</div>

<div class="mb-2">
    <label>Interaksi dengan Mahasiswa</label>
    <select class="form-select" name="interaksi" required>
      <option value="">Pilih</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select>
</div>

<div class="mb-2">
    <label>Penggunaan Media / Metode Pembelajaran</label>
    <select class="form-select" name="media" required>
      <option value="">Pilih</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select>
</div>

<!-- Komentar -->
<div class="mb-3">
    <label>Komentar / Saran</label>
    <textarea class="form-control" name="komentar" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-primary">Kirim Evaluasi</button>
</form>

</div>
</div>

</div>

<div class="row mb-4">
  <!-- Statistik Nilai -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i> Statistik Penilaian</h5>
      </div>
      <div class="card-body">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="kpi bg-primary text-white p-2 rounded">
              <div class="small">Penguasaan Materi</div>
              <div class="big fs-4">4.5</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="kpi bg-info text-white p-2 rounded">
              <div class="small">Keterampilan Mengajar</div>
              <div class="big fs-4">4.3</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="kpi bg-warning text-white p-2 rounded">
              <div class="small">Ketepatan Waktu / Disiplin</div>
              <div class="big fs-4">4.4</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="kpi bg-danger text-white p-2 rounded">
              <div class="small">Interaksi Mahasiswa</div>
              <div class="big fs-4">4.6</div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="kpi bg-secondary text-white p-2 rounded">
              <div class="small">Penggunaan Media / Metode</div>
              <div class="big fs-4">4.2</div>
            </div>
          </div>
        </div>
        <p class="mt-2"><strong>Jumlah Responden:</strong> 40 Mahasiswa</p>
      </div>
    </div>
  </div>

  <!-- Tabel Komentar -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header bg-secondary text-white">
        <h5 class="mb-0"><i class="fas fa-comments me-2"></i> Komentar / Saran</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
          <table class="table table-sm table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Mahasiswa</th>
                <th>Komentar / Saran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Claudia M. A.</td>
                <td>Materi dijelaskan dengan jelas, sangat membantu.</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Asep S.</td>
                <td>Interaksi dosen sangat baik, mudah bertanya.</td>
              </tr>
              <tr>
                <td>3</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-body">
  <table class="table table-bordered table-striped table-sm">
    <thead class="table-dark text-center">
      <tr>
        <th>Kriteria</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Kelayakan Pemilihan Judul</td>
        <td class="text-center">Sangat Baik</td>
      </tr>
      <tr>
        <td>Kelayakan Beban Kerja berdasarkan SKS TA</td>
        <td class="text-center">Sangat Baik</td>
      </tr>
      <tr>
        <td>Kelayakan Metodologis</td>
        <td class="text-center">Sangat Baik</td>
      </tr>
      <tr>
        <td>Kesesuaian Format dan Kelengkapan Naskah</td>
        <td class="text-center">Sangat Baik</td>
      </tr>
      <tr>
        <td>Kelayakan Tata Tulis dan Bahasa</td>
        <td class="text-center">Sangat Baik</td>
      </tr>
      <tr>
  <td colspan="3" class="text-center"><strong>Jumlah Responden:</strong> 40 Mahasiswa</td>
</tr>

    </tbody>
  </table>
  
</div>


</section>
</div>



<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>

<?php $page = 'pengaturan_role'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Roles
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
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Roles:</b> Manajerial &nbsp;
                </div>  

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>
              </div>
            </div>
            
          </div>

<div class="card">
  <div class="card-body">
    <h5>Modul: Master Data</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>
            View <br>
            <input type="checkbox" onclick="toggleColumn(1, this)">
          </th>
          <th>
            Create <br>
            <input type="checkbox" onclick="toggleColumn(2, this)">
          </th>
          <th>
            Update <br>
            <input type="checkbox" onclick="toggleColumn(3, this)">
          </th>
          <th>
            Delete <br>
            <input type="checkbox" onclick="toggleColumn(4, this)">
          </th>
          <th>
            Import<br>
            <input type="checkbox" onclick="toggleColumn(4, this)">
          </th>
          <th>
            Export
          <br>
            <input type="checkbox" onclick="toggleColumn(4, this)"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Data SDM</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
        <tr>
          <td>Data Lembaga</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Tabel Modul -->
  <div class="card-body">
    <h5>Modul: Penganggaran</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>View</th>
          <th>Edit</th>
          <th>Import</th>
          <th>Approve</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Anggaran Tahunan</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Tabel Modul -->
  <div class="card-body">
    <h5>Modul: Realisasi Anggaran</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>View</th>
          <th>Export</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Realisasi Tahunan</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Tabel Modul -->
  <div class="card-body">
    <h5>Modul: Jurnal Transaksi</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>View</th>
          <th>Create</th>
          <th>Upload</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jurnal Umum</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Tabel Modul -->
  <div class="card-body">
    <h5>Modul: Laporan Keuangan</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>View</th>
          <th>Export</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Buku Besar</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
        <tr>
          <td>Laba Rugi</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="card-body">
    <h5>Modul: Aset Tetap</h5>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Halaman</th>
          <th>View</th>
          <th>Create</th>
          <th>Update</th>
          <th>Delete</th>
          <th>Export</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Input Aset</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
        </tr>
      </tbody>
    </table>
  </div>

<div class="card-body">
  <h5>Modul: Rekening Koran</h5>
  <table class="table table-bordered align-middle">
    <thead>
      <tr>
        <th>Halaman</th>
        <th>View</th>
        <th>Upload</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Rekening Koran</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="card-body">
  <h5>Modul: Log Aktivitas</h5>
  <table class="table table-bordered align-middle">
    <thead>
      <tr>
        <th>Halaman</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Log Aktivitas</td>
        <td><input type="checkbox"></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="card-body">
  <h5>Modul: Pengaturan</h5>
  <table class="table table-bordered align-middle">
    <thead>
      <tr>
        <th>Halaman</th>
        <th>View</th>
        <th>Create</th>
        <th>Update</th>
        <th>Delete</th>
        <th>Import</th>
        <th>Export</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Pengguna Sistem</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
      </tr>
      <tr>
        <td>Peran & Hak Akses</td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
        <td><input type="checkbox"></td>
      </tr>
    </tbody>
  </table>
</div>


 
    <div class="card-footer row g-3 align-items-center mt-3">
      <div class="col-md-12 text-right">
        <button class="btn btn-outline-secondary e-2" onclick="resetChanges()">Reset</button>
        <a href="pengaturan-roles.php" class="btn btn-primary" onclick="saveAccess()">
          💾 Simpan Hak Akses
        </a>

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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Roles</label>
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <!-- <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="custom-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div> -->
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          [Manajemen]<br>Bertanggung jawab atas pengawasan strategis dan pengambilan keputusan terkait perencanaan, pelaksanaan, serta evaluasi pengelolaan anggaran dan keuangan secara keseluruhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- JS -->
<script>
  function markChanged(el) {
    el.closest('tr').classList.add('changed');
  }

  function toggleColumn(index, source) {
    document.querySelectorAll("tbody tr").forEach(row => {
      const checkbox = row.cells[index]?.querySelector("input");
      if (checkbox && !checkbox.disabled) {
        checkbox.checked = source.checked;
        row.classList.add('changed');
      }
    });
  }

  function resetChanges() {
    document.querySelectorAll(".changed").forEach(row => {
      row.classList.remove("changed");
    });
    alert("Perubahan dibatalkan (UI saja).");
  }

  function saveAccess() {
    alert("Hak akses berhasil disimpan (simulasi).");
  }
</script>
<?php include('5script.php'); ?>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
    <h5>Pengaturan Tema</h5>
    <p>Aktifkan mode gelap atau terang.</p>
  </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery dulu (untuk AdminLTE) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- OverlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/js/jquery.overlayScrollbars.min.js"></script>

<!-- Bootstrap 5 Bundle (JS + Popper) harus **sebelum** AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE v3 -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<script>
$(document).ready(function() {
    $('.datatables1').DataTable({
      "pageLength": 10,
      "lengthChange": true, 
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true
    });
});
</script>

<script>
$(document).ready(function() {

  // Event untuk klik peran
  $(".role-select").on("click", function() {
      let role = $(this).data("role");

      alert("Anda memilih peran: " + role);

      // menutup modal setelah pilih
      let modal = bootstrap.Modal.getInstance(document.getElementById('modalPilihPeran'));
      modal.hide();

      // jika mau redirect
      // window.location.href = "dashboard-" + role.toLowerCase() + ".php";
  });

});
</script>

<script> 
  document.addEventListener("DOMContentLoaded", function() { 
  // Ambil semua tombol role 
    const buttons = document.querySelectorAll(".role-select"); 
    buttons.forEach(btn => { btn.addEventListener("click", function() { 
    // Ambil nilai data-role (Admin, Manajer, dll) 
    let role = this.getAttribute("data-role").toLowerCase(); 
    // Redirect ke URL saat ini dengan query ?peran=role 
    // Gunakan window.location.pathname agar tetap berada di halaman yang sama 
    // window.location.href = window.location.pathname + "?peran=" + role; 
    // Redirect langsung ke index.php dengan query ?peran=...
     window.location.href = "index.php?peran=" + role; 
  }); 
  }); 
  }); 
  </script>

  <div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-filter me-2"></i>Filter Data
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-info small">
          ⚠️ <strong>Mock-up:</strong> Form filter ini hanya tampilan UI.
        </div>

        <div class="row">
          <div class="col-md-6">
            <label class="form-label">Kategori</label>
            <select class="form-select">
              <option>Semua</option>
              <option>CPL</option>
              <option>CPMK</option>
              <option>IK</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Aktif</option>
              <option>Nonaktif</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button class="btn btn-info">Terapkan Filter</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-plus me-2"></i>Tambah Data
        </h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-warning small">
          ⚠️ Ini hanya <strong>mock-up form input</strong>.
        </div>

        <label class="form-label">Nama Data</label>
        <input type="text" class="form-control" placeholder="Contoh: CPL 1">

        <label class="form-label mt-2">Deskripsi</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-file-upload me-2"></i>Import Data
        </h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-info small">
          📌 Mock-up upload file (belum memproses file).
        </div>

        <input type="file" class="form-control">
        <small class="text-muted">Format yang didukung: .xlsx / .csv</small>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button class="btn btn-primary">Import</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-ban me-2"></i>Reset Data
        </h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-danger">
          ⚠️ <strong>Mock-up!</strong> Reset belum benar-benar dijalankan.
        </div>
        Apakah Anda yakin ingin mereset data?
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Ya, Reset</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalInfoData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-info-circle me-2"></i>Informasi Data
        </h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-info small">
          📘 Informasi ini bersifat <strong>mock-up UI</strong>.
        </div>

        <ul>
          <li>Total CPL: 12</li>
          <li>Total CPMK: 256</li>
          <li>Total IK: 780</li>
        </ul>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-edit me-2"></i>Edit Data
        </h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-warning small">
          ✏️ Form edit ini hanya tampilan.
        </div>

        <label class="form-label">Nama Data</label>
        <input type="text" class="form-control" value="Contoh Data">

        <label class="form-label mt-2">Deskripsi</label>
        <textarea class="form-control">Deskripsi lama</textarea>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalHapusData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-trash me-2"></i>Hapus Data
        </h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-danger small">
          🗑️ <strong>Mock-up!</strong> Data belum benar-benar dihapus.
        </div>
        Apakah Anda yakin ingin menghapus data ini?
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>

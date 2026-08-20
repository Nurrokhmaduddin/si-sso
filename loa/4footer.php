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

<!-- Bootstrap 4 Bundle (JS + Popper 1.x) harus **sebelum** AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE v3 -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>


<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
 <!-- Plugin Annotation -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@3"></script>

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

      // alert("Anda memilih peran: " + role);

      // menutup modal setelah pilih (BS4: pakai jQuery plugin, bukan bootstrap.Modal.getInstance() ala BS5)
      $('#modalPilihPeran').modal('hide');

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
     window.location.href = "beranda-"+role+".php?peran=" + role; 
  }); 
  }); 
  }); 
  </script>

  
<!-- Modal Feedback -->
<div class="modal fade" id="modalFeedback" tabindex="-1" aria-labelledby="modalFeedbackLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content rounded-3 shadow">

      <!-- Header -->
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFeedbackLabel"><i class="fas fa-clipboard-list mr-2"></i>Send Feedback</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <!-- Form -->
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Jenis Feedback -->
          <div class="mb-3">
            <label class="form-label">Apa yang ingin Anda sampaikan?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="feedbackType" id="feedbackSaran" value="saran">
              <label class="form-check-label" for="feedbackSaran">Kesulitan Penggunaan</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="feedbackType" id="feedbackSaran" value="saran">
              <label class="form-check-label" for="feedbackSaran">Perbaikan Tampilan</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="feedbackType" id="feedbackBug" value="bug">
              <label class="form-check-label" for="feedbackBug">Laporan Bug</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="feedbackType" id="feedbackFitur" value="fitur">
              <label class="form-check-label" for="feedbackFitur">Usulan Fitur</label>
            </div>
            
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="feedbackType" id="feedbackSaran" value="saran">
              <label class="form-check-label" for="feedbackSaran">Lainnya</label>
            </div>
          </div>

          <!-- Pesan -->
          <div class="mb-3">
            <label for="feedbackMessage" class="form-label">Pesan Anda:</label>
            <textarea class="form-control" id="feedbackMessage" name="feedbackMessage" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
          </div>

          <!-- Lampiran -->
          <div class="mb-3">
            <label for="feedbackAttachment" class="form-label">Lampiran Screenshot</label>
            <input type="file" class="form-control" id="feedbackAttachment" name="feedbackAttachment" accept="image/*">
          </div>

        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info text-white">Kirim Feedback</button>
        </div>
      </form>

    </div>
  </div>
</div>
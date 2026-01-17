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
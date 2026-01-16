<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

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


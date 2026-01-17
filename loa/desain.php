<tr>
  <td>IK.1.1</td>
  <td>Memahami dinul Islam serta pemikiran dan peradaban umat Islam</td>
  <td class="text-center">
    <button class="btn btn-xs btn-info btn-open">Open</button>
    <button class="btn btn-xs btn-danger">Hapus</button>
    <button class="btn btn-xs btn-secondary">Reset</button>
  </td>
</tr>

<!-- ROW DETAIL (AWALNYA DISSEMBUNYIKAN) -->
<tr class="ik-detail d-none">
  <td colspan="3">
    <table class="table table-bordered table-sm mb-0">
      <thead class="table-light">
        <tr>
          <th>Kode CPMK</th>
          <th>Deskripsi CPMK</th>
          <th>Bobot</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CPMK-1</td>
          <td>Mampu menjelaskan konsep dasar</td>
          <td>30%</td>
        </tr>
        <tr>
          <td>CPMK-2</td>
          <td>Mampu menerapkan konsep</td>
          <td>70%</td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>

<script>
document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll(".btn-open").forEach(function (btn) {
    btn.addEventListener("click", function () {

      // ambil TR saat ini
      let currentRow = this.closest("tr");

      // ambil TR berikutnya (detail)
      let detailRow = currentRow.nextElementSibling;

      // toggle tampil / sembunyi
      detailRow.classList.toggle("d-none");

      // ubah teks tombol
      this.textContent = detailRow.classList.contains("d-none")
        ? "Open"
        : "Close";
    });
  });

});
</script>

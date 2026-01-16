<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elemen Baru / Hilang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .status-hilang { background-color: #f8d7da; } /* merah muda */
    .status-baru { background-color: #d4edda; }   /* hijau muda */
    .table-wrapper { overflow-x: auto; }
    th { text-align: center; }
  </style>
</head>
<body>
  <div class="container my-4">
    <h4>Elemen Baru / Hilang</h4>
    <div class="table-wrapper">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Set Pemetaan A</th>
            <th>Set Pemetaan B</th>
          </tr>
        </thead>
        <tbody>
          <!-- Elemen hanya ada di Set A (Hilang di B) -->
          <tr class="status-hilang">
            <td>MK: Struktur Data</td>
            <td></td>
          </tr>
          <tr class="status-hilang">
            <td>CPMK: Analisis Algoritma</td>
            <td></td>
          </tr>

          <!-- Elemen hanya ada di Set B (Baru muncul) -->
          <tr class="status-baru">
            <td></td>
            <td>MK: Pemrograman Lanjut</td>
          </tr>
          <tr class="status-baru">
            <td></td>
            <td>IK: Mampu menulis laporan</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

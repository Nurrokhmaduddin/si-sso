<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>State Sequence Pembimbingan Skripsi</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
  }
  table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 30px;
  }
  th, td {
    border: 1px solid #999;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  caption {
    caption-side: top;
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
  }
</style>
</head>
<body>

<table>
  <caption>State Sequence Pembimbingan Skripsi (Versi Terbaru)</caption>
  <thead>
    <tr>
      <th>No</th>
      <th>State Sebelumnya</th>
      <th>Event / Trigger</th>
      <th>Kondisi / Aksi</th>
      <th>State Berikutnya</th>
    </tr>
  </thead>
  <tbody>
    <!-- Pendaftaran Skripsi -->
    <tr><td>1</td><td>[ * ] (Start)</td><td>Admin input data mahasiswa ke sistem</td><td>Data berhasil disimpan</td><td>Waiting Student Registration</td></tr>
    <tr><td>2</td><td>Waiting Student Registration</td><td>Mahasiswa input kode registrasi</td><td>Kode valid</td><td>Pendaftaran Skripsi Disetujui</td></tr>
    <tr><td>3</td><td>Waiting Student Registration</td><td>Mahasiswa input kode registrasi</td><td>Kode salah</td><td>Waiting Student Registration</td></tr>

    <!-- Penentuan Topik Awal -->
    <tr><td>4</td><td>Pendaftaran Skripsi Disetujui</td><td>Mahasiswa mengajukan topik</td><td>Sistem memeriksa kelayakan topik</td><td>Penentuan Topik Awal In Progress</td></tr>
    <tr><td>5</td><td>Penentuan Topik Awal In Progress</td><td>Topik dikaji pembimbing</td><td>Topik diterima</td><td>Penentuan Topik Awal Disetujui</td></tr>
    <tr><td>6</td><td>Penentuan Topik Awal In Progress</td><td>Topik dikaji pembimbing</td><td>Topik ditolak / perlu revisi</td><td>Penentuan Topik Awal Revisi</td></tr>
    <tr><td>7</td><td>Penentuan Topik Awal Revisi</td><td>Mahasiswa mengajukan revisi topik</td><td>Topik diterima</td><td>Penentuan Topik Awal Disetujui</td></tr>

    <!-- Penentuan Dosen Pembimbing -->
    <tr><td>8</td><td>Penentuan Topik Awal Disetujui</td><td>Admin menunjuk dosen pembimbing</td><td>Dosen ditunjuk</td><td>Penentuan Dosen Pembimbing Assigned</td></tr>
    <tr><td>9</td><td>Penentuan Dosen Pembimbing Assigned</td><td>Dosen menerima penunjukan</td><td>Diterima</td><td>Penentuan Dosen Pembimbing Confirmed</td></tr>
    <tr><td>10</td><td>Penentuan Dosen Pembimbing Assigned</td><td>Dosen menolak penunjukan</td><td>Ditolak</td><td>Penentuan Dosen Pembimbing Rejected</td></tr>

    <!-- Bimbingan Proposal -->
    <tr><td>11</td><td>Penentuan Dosen Pembimbing Confirmed</td><td>Mahasiswa mulai bimbingan proposal</td><td>Upload proposal / diskusi</td><td>Bimbingan Proposal In Progress</td></tr>
    <tr><td>12</td><td>Bimbingan Proposal In Progress</td><td>Review proposal oleh dosen / mahasiswa</td><td>Review ditolak dengan catatan</td><td>Bimbingan Proposal In Progress</td></tr>
    <tr><td>13</td><td>Bimbingan Proposal In Progress</td><td>Review proposal oleh dosen / mahasiswa</td><td>Review diterima</td><td>Bimbingan Proposal Completed</td></tr>

    <!-- Bimbingan Laporan -->
    <tr><td>14</td><td>Bimbingan Proposal Completed</td><td>Mahasiswa mulai bimbingan laporan</td><td>Upload laporan / diskusi</td><td>Bimbingan Laporan In Progress</td></tr>
    <tr><td>15</td><td>Bimbingan Laporan In Progress</td><td>Review laporan oleh dosen / mahasiswa</td><td>Review ditolak dengan catatan</td><td>Bimbingan Laporan In Progress</td></tr>
    <tr><td>16</td><td>Bimbingan Laporan In Progress</td><td>Review laporan oleh dosen / mahasiswa</td><td>Review diterima</td><td>Bimbingan Laporan Completed</td></tr>

    <!-- Pendaftaran Sidang -->
    <tr><td>17</td><td>Bimbingan Laporan Completed</td><td>Mahasiswa daftar sidang</td><td>Admin verifikasi dokumen</td><td>Pendaftaran Sidang Waiting Verification</td></tr>
    <tr><td>18</td><td>Pendaftaran Sidang Waiting Verification</td><td>Dokumen lengkap</td><td>Sidang disetujui</td><td>Pendaftaran Sidang Approved</td></tr>
    <tr><td>19</td><td>Pendaftaran Sidang Waiting Verification</td><td>Dokumen tidak lengkap</td><td>Sidang ditolak</td><td>Pendaftaran Sidang Rejected</td></tr>

    <!-- Sidang Ujian -->
    <tr><td>20</td><td>Pendaftaran Sidang Approved</td><td>Sidang dijadwalkan</td><td>Ujian dimulai</td><td>Sidang Ujian In Progress</td></tr>
    <tr><td>21</td><td>Sidang Ujian In Progress</td><td>Sidang selesai</td><td>Lulus</td><td>Sidang Ujian Passed</td></tr>
    <tr><td>22</td><td>Sidang Ujian In Progress</td><td>Sidang selesai</td><td>Tidak lulus</td><td>Sidang Ujian Failed</td></tr>

    <!-- Bimbingan Pasca Ujian -->
    <tr><td>23</td><td>Sidang Ujian Passed</td><td>Mahasiswa revisi pasca sidang</td><td>Upload revisi / diskusi</td><td>Bimbingan Pasca Ujian In Progress</td></tr>
    <tr><td>24</td><td>Bimbingan Pasca Ujian In Progress</td><td>Review revisi oleh dosen / mahasiswa</td><td>Review diterima</td><td>Bimbingan Pasca Ujian Completed</td></tr>
    <tr><td>25</td><td>Bimbingan Pasca Ujian In Progress</td><td>Review revisi oleh dosen / mahasiswa</td><td>Review ditolak dengan catatan</td><td>Bimbingan Pasca Ujian In Progress</td></tr>

    <!-- Akhir -->
    <tr><td>26</td><td>Bimbingan Pasca Ujian Completed</td><td>-</td><td>Semua stage selesai</td><td>[ * ] End</td></tr>
  </tbody>
</table>

</body>
</html>

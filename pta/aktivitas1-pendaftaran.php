<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Admin Tables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Sistem Pembimbingan - Admin View</h2>

    <!-- 1. Pendaftaran Skripsi -->
    <h4>1. Pendaftaran Skripsi</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Tanggal Pendaftaran</th>
                <th>Formulir Pengajuan</th>
                <th>Persetujuan Awal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>In Progress</td>
                <td>2025-01-01</td>
                <td>-</td>
                <td>/uploads/form_skripsi.pdf</td>
                <td>Menunggu validasi</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>2025-01-05</td>
                <td>/uploads/form_pengajuan.pdf</td>
                <td>Disetujui Kaprodi</td>
            </tr>
        </tbody>
    </table>



    <!-- 3. Penentuan Dosen Pembimbing -->
    <h4>3. Penentuan Dosen Pembimbing</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Dosen Pembimbing 1</th>
                <th>Dosen Pembimbing 2</th>
                <th>Tanggal Penunjukan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>Assigned</td>
                <td>2025-01-15</td>
                <td>-</td>
                <td>/uploads/surat_tugas.pdf</td>
                <td>Pembimbing ditunjuk</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>Dr. Budi Santoso</td>
                <td>Dr. Siti Aminah</td>
                <td>2025-01-15</td>
            </tr>
        </tbody>
    </table>

    <!-- 4. Bimbingan Proposal -->
    <h4>4. Bimbingan Proposal</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Dokumen Proposal</th>
                <th>Revisi Bab</th>
                <th>Catatan Pembimbing</th>
                <th>Status Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>In Progress</td>
                <td>2025-01-20</td>
                <td>-</td>
                <td>/uploads/proposal.pdf</td>
                <td>Revisi Bab 2</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>/uploads/proposal.pdf</td>
                <td>Bab 2 dan Bab 3</td>
                <td>Kritik & Saran</td>
                <td>Waiting Review</td>
            </tr>
        </tbody>
    </table>

    

    <!-- 6. Pendaftaran Sidang -->
    <h4>6. Pendaftaran Sidang</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Tanggal Pendaftaran Sidang</th>
                <th>Dokumen Pendukung</th>
                <th>Status Verifikasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>Terdaftar</td>
                <td>2025-03-01</td>
                <td>-</td>
                <td>/uploads/pendaftaran_sidang.pdf</td>
                <td>Dokumen lengkap</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>2025-03-05</td>
                <td>/uploads/pendukung_sidang.pdf</td>
                <td>Disetujui</td>
            </tr>
        </tbody>
    </table>

    <!-- 7. Sidang Ujian -->
    <h4>7. Sidang Ujian</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing / Penguji</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Dosen Penguji</th>
                <th>Nilai</th>
                <th>Tanggal Sidang</th>
                <th>Catatan Ujian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>Lulus</td>
                <td>2025-03-10</td>
                <td>2025-03-10</td>
                <td>/uploads/laporan_final.pdf</td>
                <td>Sidang sukses</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>Dr. Siti Aminah</td>
                <td>A</td>
                <td>2025-03-10</td>
                <td>Disetujui semua penguji</td>
            </tr>
        </tbody>
    </table>

    <!-- 8. Bimbingan Pasca Ujian -->
    <h4>8. Bimbingan Pasca Ujian</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen Pembimbing</th>
                <th>Status Stage</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Dokumen / File</th>
                <th>Catatan / Notes</th>
                <th>Aksi</th>
                <th>Revisi Pasca Sidang</th>
                <th>Dokumen Final</th>
                <th>Catatan Pembimbing</th>
                <th>Status Revisi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025-GASAL</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>Belum Selesai</td>
                <td>2025-03-15</td>
                <td>-</td>
                <td>/uploads/revisi_final.pdf</td>
                <td>Perlu perbaikan Bab 5</td>
                <td>
                    <button class="btn btn-sm btn-info">Detail</button>
                </td>
                <td>Bab 5 Revisi</td>
                <td>/uploads/laporan_final.pdf</td>
                <td>Komentar lengkap</td>
                <td>In Progress</td>
            </tr>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Aktivitas Mahasiswa</h2>

    <!-- 1. Penetapan Topik -->
    <h4>1. Penetapan Topik</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Dosen</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025/2026</td>
                <td>REG-001</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>Dr. Budi Santoso</td>
                <td>Disetujui</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- 2. Penunjukkan Pembimbing -->
    <h4>2. Penunjukkan Pembimbing</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Dosen Pembimbing</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025/2026</td>
                <td>REG-001</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Dr. Budi Santoso</td>
                <td>Ditunjuk</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- 3. Pendaftaran Sidang -->
    <h4>3. Pendaftaran Sidang</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Judul</th>
                <th>Tanggal Sidang</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025/2026</td>
                <td>REG-001</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Analisis Data Akademik</td>
                <td>10-01-2026</td>
                <td>Terdaftar</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- 4. Sidang Ujian -->
    <h4>4. Sidang Ujian</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Dosen Penguji</th>
                <th>Nilai</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025/2026</td>
                <td>REG-001</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Dr. Budi Santoso</td>
                <td>A</td>
                <td>Lulus</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- 5. Revisi Pasca Sidang -->
    <h4>5. Revisi Pasca Sidang</h4>
    <table class="table table-bordered table-striped mb-5">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Aktivitas</th>
                <th>Dosen Pembimbing</th>
                <th>Status Revisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2025/2026</td>
                <td>REG-001</td>
                <td>Ahmad Nur</td>
                <td>Skripsi</td>
                <td>Dr. Budi Santoso</td>
                <td>Belum Selesai</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

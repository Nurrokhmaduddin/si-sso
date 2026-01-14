<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Outstanding Receivables</title>

  <!-- Bootstrap (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Styling nav item */
    .nav-description {
      display: block;
      font-size: 0.85rem;
      color: #6c757d;
      margin-left: 28px;
      margin-top: -2px;
    }

    /* Container laporan */
    .report-container {
      background: #ffffff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.15);
    }

    .report-header {
      border-bottom: 1px solid #dee2e6;
      margin-bottom: 20px;
      padding-bottom: 10px;
    }
  </style>
</head>

<body class="bg-light">

<div class="container py-4">

  <!-- Sidebar / Menu Laporan -->
  <div class="mb-4">
    <h4 class="mb-3">Laporan Keuangan</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link">
          Outstanding Receivables
          <span class="nav-description">Piutang yang belum dibayar.</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          Paid Receivables
          <span class="nav-description">Daftar piutang yang sudah lunas.</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tampilan Laporan -->
  <div class="report-container">
    
    <div class="report-header">
      <h5 class="fw-bold mb-1">Laporan Outstanding Receivables</h5>
      <small class="text-muted">Piutang yang belum dibayar per tanggal: <strong>11 Desember 2025</strong></small>
    </div>

    <!-- Tabel Laporan -->
    <table class="table table-bordered table-sm align-middle">
      <thead class="table-light">
        <tr class="text-center">
          <th>No.</th>
          <th>Nama Klien</th>
          <th>No. Invoice</th>
          <th>Tanggal Invoice</th>
          <th>Jatuh Tempo</th>
          <th>Jumlah Tagihan</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="text-center">1</td>
          <td>PT Maju Bersama</td>
          <td>INV-2025-0012</td>
          <td>2025-11-20</td>
          <td>2025-12-20</td>
          <td class="text-end">Rp 8.500.000</td>
          <td class="text-center"><span class="badge bg-warning">Belum Bayar</span></td>
        </tr>

        <tr>
          <td class="text-center">2</td>
          <td>CV Sinar Terang</td>
          <td>INV-2025-0013</td>
          <td>2025-11-28</td>
          <td>2025-12-28</td>
          <td class="text-end">Rp 12.000.000</td>
          <td class="text-center"><span class="badge bg-warning">Belum Bayar</span></td>
        </tr>
      </tbody>
    </table>

    <!-- Total -->
    <div class="mt-3 text-end">
      <h6 class="fw-bold">Total Outstanding: Rp 20.500.000</h6>
    </div>

  </div>
</div>

<!-- OUTSTANDING RECEIVABLES PAGE -->
<div class="container mt-4">

  <!-- Page Header -->
  <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
          <h3 class="mb-0">Outstanding Receivables</h3>
          <small class="text-muted">Piutang yang belum dibayar oleh pelanggan.</small>
      </div>
      <button class="btn btn-success btn-sm">
        <i class="fas fa-file-export"></i> Export Excel
      </button>
  </div>

  <!-- Filters -->
  <div class="card mb-4">
    <div class="card-header bg-light">
      <strong>Filter Laporan</strong>
    </div>
    <div class="card-body row g-3">
      <div class="col-md-3">
        <label class="form-label">Periode</label>
        <input type="month" class="form-control">
      </div>
      <div class="col-md-3">
        <label class="form-label">Pelanggan</label>
        <select class="form-select">
          <option value="">Semua</option>
          <option>PT Maju Jaya</option>
          <option>CV Sukses</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label">Status</label>
        <select class="form-select">
          <option value="">Semua</option>
          <option>Outstanding</option>
          <option>Overdue</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label">Aging</label>
        <select class="form-select">
          <option value="">Semua</option>
          <option>1–30 Hari</option>
          <option>31–60 Hari</option>
          <option>60+ Hari</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Summary -->
<div class="row mb-4 text-center">

  <!-- Total Outstanding -->
  <div class="col-md-3 mb-2">
    <div class="p-3 bg-primary text-white rounded">
      <h6 class="mb-1 text-uppercase">Total Outstanding</h6>
      <strong style="font-size: 1.1rem;">Rp 52.300.000</strong>
      <div><small class="text-light">➡️ Total seluruh piutang belum tuntas.</small></div>
    </div>
  </div>

  <!-- Invoice Aktif -->
  <div class="col-md-3 mb-2">
    <div class="p-3 bg-info text-white rounded">
      <h6 class="mb-1 text-uppercase">Invoice Aktif</h6>
      <strong style="font-size: 1.1rem;">14</strong>
      <div><small class="text-light">➡️ Semua invoice yang masih terbuka.</small></div>
    </div>
  </div>

  <!-- Overdue -->
  <div class="col-md-3 mb-2">
    <div class="p-3 bg-warning rounded">
      <h6 class="mb-1 text-uppercase">Overdue</h6>
      <strong style="font-size: 1.1rem;">Rp 21.000.000</strong>
      <div><small class="text-dark">➡️ Telah lewat jatuh tempo.</small></div>
    </div>
  </div>

  <!-- Overdue 60+ Hari -->
  <div class="col-md-3 mb-2">
    <div class="p-3 bg-danger text-white rounded">
      <h6 class="mb-1 text-uppercase">Overdue 60+ Hari</h6>
      <strong style="font-size: 1.1rem;">Rp 8.400.000</strong>
      <div><small class="text-light">➡️ Keterlambatan tinggi, perlu tindakan cepat.</small></div>
    </div>
  </div>

</div>


  <!-- Table -->
  <div class="card">
    <div class="card-header bg-light">
      <strong>Daftar Piutang Belum Dibayar</strong>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead class="table-light">
          <tr>
            <th>Invoice #</th>
            <th>Pelanggan</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Aging</th>
            <th>Total</th>
            <th>Outstanding</th>
            <th>Status</th>
            <th class="text-end">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>INV-2025-001</td>
            <td>PT Maju Jaya</td>
            <td>02 Jan 2025</td>
            <td>02 Feb 2025</td>
            <td>45 Hari</td>
            <td>Rp 12.000.000</td>
            <td>Rp 12.000.000</td>
            <td><span class="badge bg-danger">Overdue</span></td>
            <td class="text-end">
              <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-envelope"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fab fa-whatsapp"></i></a>
            </td>
          </tr>

          <tr>
            <td>INV-2025-002</td>
            <td>CV Sukses</td>
            <td>10 Jan 2025</td>
            <td>10 Feb 2025</td>
            <td>15 Hari</td>
            <td>Rp 8.500.000</td>
            <td>Rp 4.500.000</td>
            <td><span class="badge bg-warning text-dark">Partially Paid</span></td>
            <td class="text-end">
              <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-envelope"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fab fa-whatsapp"></i></a>
            </td>
          </tr>

          <tr>
            <td>INV-2025-003</td>
            <td>PT Cipta Abadi</td>
            <td>20 Jan 2025</td>
            <td>20 Feb 2025</td>
            <td>5 Hari</td>
            <td>Rp 6.800.000</td>
            <td>Rp 6.800.000</td>
            <td><span class="badge bg-primary">Outstanding</span></td>
            <td class="text-end">
              <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-envelope"></i></a>
              <a href="#" class="btn btn-sm btn-outline-success"><i class="fab fa-whatsapp"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<div class="report-container">
  <h4 class="text-center mb-3">General Ledger (Buku Besar)</h4>
  <p><strong>Akun:</strong> Kas (1110)</p>
  <p><strong>Periode:</strong> 01 Jan 2025 – 31 Jan 2025</p>

  <table class="table table-bordered table-sm">
    <thead class="table-light">
      <tr>
        <th>Tanggal</th>
        <th>Nomor Transaksi</th>
        <th>Keterangan</th>
        <th class="text-end">Debit</th>
        <th class="text-end">Kredit</th>
        <th class="text-end">Saldo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01-01-2025</td>
        <td>JV-001</td>
        <td>Saldo Awal</td>
        <td class="text-end">10.000.000</td>
        <td class="text-end">-</td>
        <td class="text-end">10.000.000</td>
      </tr>
      <tr>
        <td>05-01-2025</td>
        <td>CR-002</td>
        <td>Penerimaan Piutang</td>
        <td class="text-end">2.500.000</td>
        <td class="text-end">-</td>
        <td class="text-end">12.500.000</td>
      </tr>
      <tr>
        <td>10-01-2025</td>
        <td>PV-003</td>
        <td>Pembayaran Listrik</td>
        <td class="text-end">-</td>
        <td class="text-end">750.000</td>
        <td class="text-end">11.750.000</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="report-container">
  <h4 class="text-center mb-3">Laporan Laba Rugi</h4>
  <p><strong>Periode:</strong> Jan 2025</p>

  <table class="table table-bordered table-sm">
    <thead class="table-light">
      <tr>
        <th>Deskripsi</th>
        <th class="text-end">Jumlah (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-secondary"><td><strong>Pendapatan</strong></td><td></td></tr>
      <tr><td>Pendapatan Layanan</td><td class="text-end">75.000.000</td></tr>
      <tr><td>Pendapatan Lain-lain</td><td class="text-end">2.800.000</td></tr>

      <tr class="table-secondary"><td><strong>Beban</strong></td><td></td></tr>
      <tr><td>Beban Gaji</td><td class="text-end">32.000.000</td></tr>
      <tr><td>Beban Operasional</td><td class="text-end">8.900.000</td></tr>

      <tr class="table-light">
        <td><strong>Laba Bersih</strong></td>
        <td class="text-end"><strong>36.900.000</strong></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="report-container">
  <h4 class="text-center mb-3">Laporan Neraca</h4>
  <p><strong>Per Tanggal:</strong> 31 Jan 2025</p>

  <table class="table table-bordered table-sm">
    <thead class="table-light">
      <tr>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th class="text-end">Jumlah (Rp)</th>
      </tr>
    </thead>
    <tbody>

      <tr class="table-secondary"><td colspan="3"><strong>Aset</strong></td></tr>
      <tr><td>Aset Lancar</td><td>Kas</td><td class="text-end">25.000.000</td></tr>
      <tr><td>Aset Lancar</td><td>Piutang Usaha</td><td class="text-end">14.000.000</td></tr>
      <tr><td>Aset Tetap</td><td>Peralatan Kantor</td><td class="text-end">30.000.000</td></tr>

      <tr class="table-secondary"><td colspan="3"><strong>Liabilitas</strong></td></tr>
      <tr><td>Liabilitas Lancar</td><td>Utang Usaha</td><td class="text-end">12.000.000</td></tr>
      <tr><td>Liabilitas Jangka Panjang</td><td>Utang Bank</td><td class="text-end">20.000.000</td></tr>

      <tr class="table-secondary"><td colspan="3"><strong>Ekuitas</strong></td></tr>
      <tr><td>Modal Pemilik</td><td>Setoran Modal</td><td class="text-end">30.000.000</td></tr>
      <tr><td>Laba Ditahan</td><td>Tahun Berjalan</td><td class="text-end">7.000.000</td></tr>

      <tr class="table-light">
        <td colspan="2"><strong>Total Aset</strong></td>
        <td class="text-end"><strong>69.000.000</strong></td>
      </tr>

      <tr class="table-light">
        <td colspan="2"><strong>Total Liabilitas & Ekuitas</strong></td>
        <td class="text-end"><strong>69.000.000</strong></td>
      </tr>

    </tbody>
  </table>
</div>

<div class="report-container">
  <h4 class="text-center mb-3">Neraca Saldo (Trial Balance)</h4>
  <p><strong>Periode:</strong> Jan 2025</p>

  <table class="table table-bordered table-sm">
    <thead class="table-light">
      <tr>
        <th>Kode Akun</th>
        <th>Nama Akun</th>
        <th class="text-end">Debit (Rp)</th>
        <th class="text-end">Kredit (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1110</td><td>Kas</td><td class="text-end">25.000.000</td><td class="text-end">-</td></tr>
      <tr><td>1120</td><td>Piutang Usaha</td><td class="text-end">14.000.000</td><td class="text-end">-</td></tr>
      <tr><td>4100</td><td>Pendapatan Jasa</td><td class="text-end">-</td><td class="text-end">75.000.000</td></tr>
      <tr><td>5100</td><td>Beban Gaji</td><td class="text-end">32.000.000</td><td class="text-end">-</td></tr>
      
      <tr class="table-light">
        <td colspan="2"><strong>Total</strong></td>
        <td class="text-end"><strong>71.000.000</strong></td>
        <td class="text-end"><strong>75.000.000</strong></td>
      </tr>
    </tbody>
  </table>
</div>


</body>
</html>

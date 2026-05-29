<?php
// ============================================================
// FINANCEFLOW ERP — Standalone PHP Prototype
// Sistem Informasi Akuntansi & Keuangan
// Versi: 1.0 | Data: Dummy/Mock
// ============================================================

session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = ['nama' => 'Budi Santoso', 'role' => 'Manager', 'avatar' => 'BS'];
}

$page = $_GET['page'] ?? 'dashboard';
$allowed = ['dashboard','monitoring','coa','jurnal','budgeting','inventory','fixedasset','prepaid','deferred','laporan','audit'];
if (!in_array($page, $allowed)) $page = 'dashboard';

// ── DUMMY DATA ────────────────────────────────────────────────
$kpi = [
    'totalAset'=>12480500000,'totalLiabilitas'=>4320000000,'totalEkuitas'=>8160500000,
    'pendapatan'=>1850000000,'beban'=>920000000,'laba'=>930000000,
];
$coa = [
    ['kode'=>'1-0000','nama'=>'ASET',             'tipe'=>'Asset',       'level'=>0,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'1-1000','nama'=>'Aset Lancar',       'tipe'=>'Asset',       'level'=>1,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'1-1100','nama'=>'Kas & Bank',        'tipe'=>'Asset',       'level'=>2,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'1-1101','nama'=>'Kas Operasional',   'tipe'=>'Asset',       'level'=>3,'parent'=>false,'normal'=>'Debit', 'subledger'=>'cash_account'],
    ['kode'=>'1-1102','nama'=>'Bank BCA',          'tipe'=>'Asset',       'level'=>3,'parent'=>false,'normal'=>'Debit', 'subledger'=>'cash_account'],
    ['kode'=>'1-1200','nama'=>'Piutang Dagang',    'tipe'=>'Asset',       'level'=>2,'parent'=>false,'normal'=>'Debit', 'subledger'=>'customer'],
    ['kode'=>'1-1300','nama'=>'Persediaan Barang', 'tipe'=>'Asset',       'level'=>2,'parent'=>false,'normal'=>'Debit', 'subledger'=>'inventory_item'],
    ['kode'=>'1-2000','nama'=>'Aset Tidak Lancar', 'tipe'=>'Asset',       'level'=>1,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'1-2100','nama'=>'Aset Tetap',        'tipe'=>'Asset',       'level'=>2,'parent'=>false,'normal'=>'Debit', 'subledger'=>'fixed_asset'],
    ['kode'=>'2-0000','nama'=>'LIABILITAS',        'tipe'=>'Liability',   'level'=>0,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'2-1000','nama'=>'Hutang Dagang',     'tipe'=>'Liability',   'level'=>1,'parent'=>false,'normal'=>'Credit','subledger'=>'supplier'],
    ['kode'=>'2-2000','nama'=>'Hutang Bank',       'tipe'=>'Liability',   'level'=>1,'parent'=>false,'normal'=>'Credit','subledger'=>''],
    ['kode'=>'3-0000','nama'=>'EKUITAS',           'tipe'=>'Equity',      'level'=>0,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'3-1000','nama'=>'Modal Disetor',     'tipe'=>'Equity',      'level'=>1,'parent'=>false,'normal'=>'Credit','subledger'=>''],
    ['kode'=>'3-2000','nama'=>'Laba Ditahan',      'tipe'=>'Equity',      'level'=>1,'parent'=>false,'normal'=>'Credit','subledger'=>''],
    ['kode'=>'4-0000','nama'=>'PENDAPATAN',        'tipe'=>'Revenue',     'level'=>0,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'4-1000','nama'=>'Pendapatan Penjualan','tipe'=>'Revenue',   'level'=>1,'parent'=>false,'normal'=>'Credit','subledger'=>''],
    ['kode'=>'5-0000','nama'=>'BEBAN',             'tipe'=>'Cost/Expense','level'=>0,'parent'=>true, 'normal'=>'',      'subledger'=>''],
    ['kode'=>'5-1000','nama'=>'Beban Gaji',        'tipe'=>'Cost/Expense','level'=>1,'parent'=>false,'normal'=>'Debit', 'subledger'=>''],
    ['kode'=>'5-2000','nama'=>'Beban Operasional', 'tipe'=>'Cost/Expense','level'=>1,'parent'=>false,'normal'=>'Debit', 'subledger'=>''],
    ['kode'=>'5-3000','nama'=>'Beban Penyusutan',  'tipe'=>'Cost/Expense','level'=>1,'parent'=>false,'normal'=>'Debit', 'subledger'=>''],
];
$jurnal = [
    ['id'=>'JNL-2025-001','tgl'=>'2025-01-05','ket'=>'Penerimaan pembayaran dari PT Maju Bersama',   'status'=>'Approved','src'=>'manual_journal',   'total'=>250000000,'dept'=>'Finance'],
    ['id'=>'JNL-2025-002','tgl'=>'2025-01-10','ket'=>'Pembayaran gaji karyawan bulan Januari',       'status'=>'Approved','src'=>'manual_journal',   'total'=>185000000,'dept'=>'Finance'],
    ['id'=>'JNL-2025-003','tgl'=>'2025-01-15','ket'=>'Penerimaan stok barang dari supplier',         'status'=>'Posting', 'src'=>'inventory',        'total'=>340000000,'dept'=>'Warehouse'],
    ['id'=>'JNL-2025-004','tgl'=>'2025-01-18','ket'=>'Amortisasi beban dibayar dimuka - Asuransi',   'status'=>'Draft',   'src'=>'prepaid_expense',  'total'=> 12500000,'dept'=>'Finance'],
    ['id'=>'JNL-2025-005','tgl'=>'2025-01-20','ket'=>'Penyusutan aset tetap - Kendaraan',            'status'=>'Approved','src'=>'depreciation',     'total'=>  8333333,'dept'=>'Finance'],
    ['id'=>'JNL-2025-006','tgl'=>'2025-01-22','ket'=>'Pendapatan diterima dimuka - Proyek XYZ',      'status'=>'Rejected','src'=>'deferred_revenue', 'total'=> 75000000,'dept'=>'Sales'],
    ['id'=>'JNL-2025-007','tgl'=>'2025-01-25','ket'=>'Koreksi jurnal gaji double entry',             'status'=>'Approved','src'=>'correction_journal','total'=>  5000000,'dept'=>'Finance'],
];
$inventory = [
    ['kode'=>'BRG-001','nama'=>'Laptop Dell XPS 15',      'sat'=>'Unit','stok'=>45, 'harga'=>18500000,'nilai'=>832500000, 'gudang'=>'Gudang Utama',  'mov'=>'2025-01-15'],
    ['kode'=>'BRG-002','nama'=>'Mouse Wireless Logitech', 'sat'=>'Pcs', 'stok'=>230,'harga'=>285000,  'nilai'=>65550000,  'gudang'=>'Gudang Utama',  'mov'=>'2025-01-18'],
    ['kode'=>'BRG-003','nama'=>'Keyboard Mechanical',     'sat'=>'Pcs', 'stok'=>12, 'harga'=>1250000, 'nilai'=>15000000,  'gudang'=>'Gudang Cabang', 'mov'=>'2025-01-10'],
    ['kode'=>'BRG-004','nama'=>'Monitor 27 Inch 4K',      'sat'=>'Unit','stok'=>28, 'harga'=>6800000, 'nilai'=>190400000, 'gudang'=>'Gudang Utama',  'mov'=>'2025-01-20'],
    ['kode'=>'BRG-005','nama'=>'UPS 1200VA',              'sat'=>'Unit','stok'=>8,  'harga'=>2100000, 'nilai'=>16800000,  'gudang'=>'Gudang Cabang', 'mov'=>'2025-01-05'],
];
$budgeting = [
    ['dept'=>'Finance',  'koa'=>'Beban Gaji',      'jan'=>185000000,'feb'=>185000000,'mar'=>190000000,'apr'=>190000000,'real'=>185000000,'status'=>'Approved'],
    ['dept'=>'Marketing','koa'=>'Beban Operasional','jan'=>50000000, 'feb'=>55000000, 'mar'=>60000000, 'apr'=>60000000, 'real'=>48000000, 'status'=>'Approved'],
    ['dept'=>'IT',       'koa'=>'Beban Operasional','jan'=>30000000, 'feb'=>30000000, 'mar'=>35000000, 'apr'=>35000000, 'real'=>29000000, 'status'=>'Posting'],
    ['dept'=>'Finance',  'koa'=>'Beban Penyusutan', 'jan'=>8333333,  'feb'=>8333333,  'mar'=>8333333,  'apr'=>8333333,  'real'=>8333333,  'status'=>'Approved'],
];
$fixedasset = [
    ['kode'=>'AST-001','nama'=>'Kendaraan Operasional Toyota Avanza','tgl'=>'2023-01-01','perolehan'=>250000000, 'umur'=>5, 'akum'=>100000000,'buku'=>150000000],
    ['kode'=>'AST-002','nama'=>'Gedung Kantor Pusat',                'tgl'=>'2020-01-01','perolehan'=>3500000000,'umur'=>20,'akum'=>700000000,'buku'=>2800000000],
    ['kode'=>'AST-003','nama'=>'Server Dell PowerEdge',              'tgl'=>'2022-06-01','perolehan'=>85000000,  'umur'=>4, 'akum'=>23958333,'buku'=>61041667],
    ['kode'=>'AST-004','nama'=>'AC Split 2 PK (10 unit)',            'tgl'=>'2021-03-01','perolehan'=>45000000,  'umur'=>5, 'akum'=>18900000,'buku'=>26100000],
];
$prepaid = [
    ['id'=>'PRE-001','desc'=>'Asuransi Gedung 2025',         'total'=>150000000,'mulai'=>'2025-01-01','selesai'=>'2025-12-31','perbln'=>12500000,'diamort'=>1,'sisa'=>137500000],
    ['id'=>'PRE-002','desc'=>'Sewa Kantor Cabang Surabaya',  'total'=>240000000,'mulai'=>'2025-01-01','selesai'=>'2026-12-31','perbln'=>10000000,'diamort'=>1,'sisa'=>230000000],
];
$deferred = [
    ['id'=>'DEF-001','desc'=>'Uang Muka Proyek ABC',         'total'=>500000000,'mulai'=>'2025-01-01','selesai'=>'2025-06-30','perbln'=>83333333,'diakui'=>1,'sisa'=>416666667],
    ['id'=>'DEF-002','desc'=>'Langganan Software Tahunan',   'total'=>60000000, 'mulai'=>'2025-01-01','selesai'=>'2025-12-31','perbln'=>5000000, 'diakui'=>1,'sisa'=>55000000],
];
$audit = [
    ['dt'=>'2025-01-25 09:15:32','user'=>'budi.santoso', 'role'=>'Manager',       'ip'=>'192.168.1.10','modul'=>'Journal',  'akt'=>'Approval','ket'=>'Approved JNL-2025-007'],
    ['dt'=>'2025-01-24 14:30:11','user'=>'siti.rahayu',  'role'=>'Admin',         'ip'=>'192.168.1.12','modul'=>'COA',      'akt'=>'Update',  'ket'=>'Update COA 1-1102 - Ubah nama'],
    ['dt'=>'2025-01-23 10:00:05','user'=>'andi.wijaya',  'role'=>'Functional User','ip'=>'192.168.1.15','modul'=>'Journal',  'akt'=>'Create',  'ket'=>'Buat JNL-2025-006'],
    ['dt'=>'2025-01-22 08:45:20','user'=>'budi.santoso', 'role'=>'Manager',       'ip'=>'192.168.1.10','modul'=>'Journal',  'akt'=>'Reject',  'ket'=>'Rejected JNL-2025-006 - Data tidak lengkap'],
    ['dt'=>'2025-01-21 16:22:44','user'=>'admin.system', 'role'=>'Admin',         'ip'=>'192.168.1.1', 'modul'=>'Inventory','akt'=>'Import',  'ket'=>'Import 50 records dari Excel'],
    ['dt'=>'2025-01-20 07:55:10','user'=>'budi.santoso', 'role'=>'Manager',       'ip'=>'192.168.1.10','modul'=>'Auth',     'akt'=>'Login',   'ket'=>'Login berhasil'],
];

// ── HELPERS ──────────────────────────────────────────────────
function idr($n){return 'Rp '.number_format($n,0,',','.');}
function idrS($n){
    if($n>=1e12) return 'Rp '.number_format($n/1e12,1,',','.').' T';
    if($n>=1e9)  return 'Rp '.number_format($n/1e9, 1,',','.').' M';
    if($n>=1e6)  return 'Rp '.number_format($n/1e6, 0,',','.').' Jt';
    return idr($n);
}
function badge($s){
    $m=['Approved'=>['#d1fae5','#065f46'],'Posting'=>['#dbeafe','#1e40af'],
        'Draft'=>['#f3f4f6','#374151'],'Rejected'=>['#fee2e2','#991b1b'],
        'Active'=>['#d1fae5','#065f46'],'Cancelled'=>['#fef3c7','#92400e']];
    $c=$m[$s]??['#f3f4f6','#374151'];
    return "<span style='background:{$c[0]};color:{$c[1]};font-size:11px;font-weight:700;padding:3px 9px;border-radius:4px'>{$s}</span>";
}
function nav_a($p,$cur){return $p===$cur?'background:#1d4ed8;color:#fff;font-weight:600':'background:transparent;color:#94a3b8';}
$titles=['dashboard'=>'Dashboard','monitoring'=>'Monitoring Operasional','coa'=>'Chart of Account',
         'jurnal'=>'Manajemen Jurnal','budgeting'=>'Budgeting & Monitoring','inventory'=>'Inventory',
         'fixedasset'=>'Fixed Asset & Depresiasi','prepaid'=>'Prepaid Expense',
         'deferred'=>'Deferred Revenue','laporan'=>'Laporan Keuangan','audit'=>'Audit Trail'];
$pt=$titles[$page];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>FinanceFlow ERP — <?=htmlspecialchars($pt)?></title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',system-ui,sans-serif;background:#f3f4f6;color:#111827;min-height:100vh;display:flex}
#sb{width:240px;min-height:100vh;background:#0f172a;display:flex;flex-direction:column;flex-shrink:0;transition:width .2s}
#sb.col{width:64px}
.sb-logo{padding:18px 16px;border-bottom:1px solid #1e293b;display:flex;align-items:center;gap:10px}
.sb-icon{width:34px;height:34px;background:#3b82f6;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:17px;flex-shrink:0}
#sb.col .sb-text,#sb.col .sb-period,#sb.col .uname{display:none}
.sb-t1{color:#f1f5f9;font-weight:700;font-size:14px}
.sb-t2{color:#64748b;font-size:10px}
nav{flex:1;padding:10px 8px;overflow-y:auto}
nav a{display:flex;align-items:center;gap:10px;padding:10px;border-radius:7px;text-decoration:none;font-size:13px;margin-bottom:2px;transition:all .15s}
nav a:hover{background:#1e293b;color:#e2e8f0}
.ni{font-size:16px;flex-shrink:0}
#sb.col .nl{display:none}
.sb-period{padding:10px 16px;border-top:1px solid #1e293b}
.period-box{background:#1e293b;border-radius:7px;padding:10px 12px}
.pl{font-size:10px;color:#64748b;margin-bottom:3px}
.pv{font-size:13px;color:#f1f5f9;font-weight:600}
.ps{font-size:10px;color:#22c55e;margin-top:2px}
.sb-user{padding:12px 16px;border-top:1px solid #1e293b;display:flex;align-items:center;gap:10px}
.uav{width:32px;height:32px;background:#3b82f6;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:11px;font-weight:700;flex-shrink:0}
.un{color:#f1f5f9;font-size:12px;font-weight:600}
.ur{color:#64748b;font-size:10px}
#main{flex:1;display:flex;flex-direction:column;min-width:0}
#topbar{background:#fff;border-bottom:1px solid #e5e7eb;padding:0 24px;height:56px;display:flex;align-items:center;justify-content:space-between;flex-shrink:0}
.bc{font-size:14px;color:#111827}
.bc span{color:#9ca3af;font-size:12px}
.tb-r{display:flex;align-items:center;gap:12px;font-size:12px;color:#6b7280}
.divider{width:1px;height:20px;background:#e5e7eb}
.btn-notif{background:transparent;border:1px solid #e5e7eb;border-radius:7px;padding:6px 10px;cursor:pointer;font-size:16px;color:#374151;position:relative}
.nd{position:absolute;top:-4px;right:-4px;background:#dc2626;color:#fff;font-size:9px;font-weight:700;border-radius:50%;width:16px;height:16px;display:flex;align-items:center;justify-content:center}
.btn-logout{background:#fee2e2;color:#991b1b;border:none;border-radius:7px;padding:6px 12px;font-size:12px;cursor:pointer;font-weight:600;text-decoration:none}
.tog{background:transparent;border:none;cursor:pointer;font-size:18px;color:#6b7280;padding:4px}
#content{flex:1;padding:24px;overflow-y:auto}
.ph h1{font-size:20px;font-weight:700;color:#111827;margin-bottom:4px}
.ph p{font-size:12px;color:#9ca3af}
.ph{margin-bottom:20px}
/* Grid */
.g3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:20px}
.g2{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:14px}
.g2a{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:24px}
/* KPI */
.kpi{background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:18px 20px}
.kl{font-size:12px;color:#6b7280;margin-bottom:6px}
.kv{font-size:22px;font-weight:700}
.ks{font-size:11px;color:#9ca3af;margin-top:4px}
/* Box */
.box{background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden}
.bh{font-weight:600;font-size:14px;padding:14px 20px;border-bottom:1px solid #f3f4f6;color:#111827}
.bf{padding:10px 14px;border-top:1px solid #f3f4f6;display:flex;justify-content:space-between;align-items:center;font-size:12px;color:#9ca3af}
/* Chart */
.chart-w{background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:20px 24px;margin-bottom:14px}
.ct{font-weight:600;font-size:14px;margin-bottom:18px;color:#111827}
.bgrp{display:flex;align-items:flex-end;gap:18px;height:160px}
.bcol{flex:1;display:flex;flex-direction:column;align-items:center;gap:4px}
.bars{display:flex;align-items:flex-end;gap:4px;height:130px}
.bar{width:22px;border-radius:3px 3px 0 0}
.blbl{font-size:11px;color:#6b7280}
.leg{display:flex;gap:16px;margin-left:8px;margin-bottom:20px;align-items:center}
.li{display:flex;align-items:center;gap:5px;font-size:11px;color:#6b7280}
.ld{width:12px;height:12px;border-radius:2px}
/* Table */
.tbl{width:100%;border-collapse:collapse;font-size:13px}
.tbl th{text-align:left;padding:10px 14px;color:#6b7280;font-weight:600;font-size:12px;background:#f9fafb;border-bottom:2px solid #e5e7eb;white-space:nowrap}
.tbl td{padding:10px 14px;border-bottom:1px solid #f3f4f6;color:#374151;vertical-align:middle}
.tbl tr:last-child td{border-bottom:none}
.tbl tr:hover td{background:#fafafa}
/* Controls */
.tbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;gap:10px}
.tbar-l{display:flex;gap:10px;flex:1}
input[type=text],select{border:1px solid #d1d5db;border-radius:7px;padding:8px 13px;font-size:13px;outline:none;color:#374151;background:#fff;font-family:inherit}
input[type=text]:focus,select:focus{border-color:#3b82f6}
.btn{border:none;border-radius:7px;padding:8px 18px;font-size:13px;cursor:pointer;font-weight:600;font-family:inherit;text-decoration:none;display:inline-block}
.btn-p{background:#1d4ed8;color:#fff}
.btn-s{background:#059669;color:#fff}
.btn-d{background:#dc2626;color:#fff}
.btn-o{background:#fff;color:#374151;border:1px solid #d1d5db}
.btn-sm{padding:4px 10px;font-size:11px;border-radius:5px}
.btn-ap{background:#d1fae5;color:#065f46;border:none;padding:4px 10px;border-radius:5px;font-size:11px;cursor:pointer;font-weight:600;font-family:inherit}
.btn-rj{background:#fee2e2;color:#991b1b;border:none;padding:4px 10px;border-radius:5px;font-size:11px;cursor:pointer;font-weight:600;font-family:inherit}
/* Progress */
.pw{display:flex;align-items:center;gap:8px}
.pb{background:#f3f4f6;border-radius:4px;height:6px;min-width:50px}
.pf{border-radius:4px;height:6px}
/* Alert */
.ac{border-radius:10px;padding:18px 20px;display:flex;gap:16px;align-items:center}
/* Neraca */
.nh{padding:14px 20px;font-weight:700;font-size:15px;color:#fff}
/* Tabs */
.tabs{display:flex;gap:8px;margin-bottom:0}
.tab-a{padding:8px 20px;border-radius:7px;border:1px solid #d1d5db;background:#fff;color:#374151;font-size:13px;cursor:pointer;font-weight:600;text-decoration:none}
.tab-a.on{background:#1d4ed8;color:#fff;border-color:#1d4ed8}
/* Pagination */
.pag{display:flex;gap:6px}
.pg{border:1px solid #d1d5db;background:#fff;padding:3px 10px;border-radius:5px;font-size:12px;cursor:pointer;color:#374151}
.pg.on{background:#1d4ed8;border-color:#1d4ed8;color:#fff}
/* Type badges */
.ta{background:#eff6ff;color:#1d4ed8}
.tl{background:#fef2f2;color:#dc2626}
.te{background:#faf5ff;color:#7c3aed}
.tr{background:#f0fdf4;color:#059669}
.tx{background:#fffbeb;color:#d97706}
.tb{font-size:11px;padding:2px 8px;border-radius:4px;font-weight:600}
/* Util */
.g{color:#6b7280}.b{color:#1d4ed8}.gr{color:#059669}.r{color:#dc2626}.p{color:#7c3aed}.a{color:#d97706}
.fw7{font-weight:700}.fw6{font-weight:600}.mono{font-family:monospace;font-size:12px}
.aw{padding:10px 14px;border-top:1px solid #f3f4f6;font-size:12px;color:#9ca3af}
</style>
</head>
<body>

<!-- SIDEBAR -->
<div id="sb">
  <div class="sb-logo">
    <div class="sb-icon">💹</div>
    <div class="sb-text">
      <div class="sb-t1">FinanceFlow</div>
      <div class="sb-t2">ERP System</div>
    </div>
  </div>
  <nav>
  <?php
  $menus=['dashboard'=>['📊','Dashboard'],'monitoring'=>['🔔','Monitoring'],'coa'=>['🗂️','Chart of Account'],
          'jurnal'=>['📝','Jurnal'],'budgeting'=>['📋','Budgeting'],'inventory'=>['📦','Inventory'],
          'fixedasset'=>['🏗️','Fixed Asset'],'prepaid'=>['📅','Prepaid Expense'],
          'deferred'=>['💰','Deferred Revenue'],'laporan'=>['📑','Laporan Keuangan'],'audit'=>['🔍','Audit Trail']];
  foreach($menus as $p=>[$ico,$lbl]):
  ?>
  <a href="?page=<?=$p?>" style="<?=nav_a($p,$page)?>">
    <span class="ni"><?=$ico?></span><span class="nl"><?=$lbl?></span>
  </a>
  <?php endforeach;?>
  </nav>
  <div class="sb-period">
    <div class="period-box">
      <div class="pl">Periode Aktif</div>
      <div class="pv">Januari 2025</div>
      <div class="ps">&#9679; Open</div>
    </div>
  </div>
  <div class="sb-user">
    <div class="uav">BS</div>
    <div class="uname">
      <div class="un">Budi Santoso</div>
      <div class="ur">Manager</div>
    </div>
  </div>
</div>

<!-- MAIN -->
<div id="main">
  <div id="topbar">
    <div style="display:flex;align-items:center;gap:16px">
      <button class="tog" onclick="document.getElementById('sb').classList.toggle('col')">&#9776;</button>
      <div class="bc"><span>FinanceFlow ERP / </span><?=htmlspecialchars($pt)?></div>
    </div>
    <div class="tb-r">
      <span>Periode: <strong>Jan 2025</strong></span>
      <div class="divider"></div>
      <button class="btn-notif">&#128276;<span class="nd">3</span></button>
      <a href="#" class="btn-logout">Logout</a>
    </div>
  </div>

  <div id="content">
    <div class="ph">
      <h1><?=htmlspecialchars($pt)?></h1>
      <p>FinanceFlow ERP &mdash; Sistem Informasi Akuntansi &amp; Keuangan</p>
    </div>

<?php if($page==='dashboard'): ?>
<!-- ── DASHBOARD ─────────────────────────────────────── -->
<?php $kc=[['Total Aset',$kpi['totalAset'],'Per Jan 2025','#1d4ed8'],['Total Liabilitas',$kpi['totalLiabilitas'],'Per Jan 2025','#dc2626'],
           ['Total Ekuitas',$kpi['totalEkuitas'],'Per Jan 2025','#059669'],['Pendapatan Bulan Ini',$kpi['pendapatan'],'Januari 2025','#7c3aed'],
           ['Beban Bulan Ini',$kpi['beban'],'Januari 2025','#d97706'],['Laba Kotor',$kpi['laba'],'Januari 2025','#0891b2']];?>
<div class="g3">
<?php foreach($kc as[$l,$v,$s,$c]):?>
<div class="kpi" style="border-left:4px solid <?=$c?>">
  <div class="kl"><?=$l?></div>
  <div class="kv" style="color:<?=$c?>"><?=idrS($v)?></div>
  <div class="ks"><?=$s?></div>
</div>
<?php endforeach;?>
</div>

<div class="chart-w">
  <div class="ct">Tren Pendapatan vs Beban (Juta Rp)</div>
  <?php $bars=[['Sep',1650,820],['Okt',1720,880],['Nov',1580,790],['Des',1900,950],['Jan',1850,920]];$mx=2000;?>
  <div class="bgrp">
    <?php foreach($bars as[$b,$p,$e]):?>
    <div class="bcol">
      <div class="bars">
        <div class="bar" style="height:<?=round(($p/$mx)*130)?>px;background:#3b82f6" title="Pendapatan: <?=$p?>Jt"></div>
        <div class="bar" style="height:<?=round(($e/$mx)*130)?>px;background:#f87171" title="Beban: <?=$e?>Jt"></div>
      </div>
      <div class="blbl"><?=$b?></div>
    </div>
    <?php endforeach;?>
    <div class="leg">
      <div class="li"><span class="ld" style="background:#3b82f6"></span>Pendapatan</div>
      <div class="li"><span class="ld" style="background:#f87171"></span>Beban</div>
    </div>
  </div>
</div>

<div class="g2">
  <div class="box">
    <div class="bh">Jurnal Terbaru</div>
    <?php foreach(array_slice($jurnal,0,4) as $j):?>
    <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 20px;border-bottom:1px solid #f3f4f6">
      <div>
        <div style="font-size:12px;font-weight:600;color:#374151"><?=$j['id']?></div>
        <div style="font-size:11px;color:#9ca3af"><?=htmlspecialchars(mb_substr($j['ket'],0,38))?>...</div>
      </div>
      <?=badge($j['status'])?>
    </div>
    <?php endforeach;?>
  </div>
  <div class="box">
    <div class="bh">Distribusi Aset</div>
    <div style="padding:16px 20px">
    <?php $dist=[['Kas & Bank',28,'#3b82f6'],['Piutang Dagang',16,'#8b5cf6'],['Persediaan',9,'#f59e0b'],['Aset Tetap (Net)',47,'#10b981']];
    foreach($dist as[$n,$pct,$c]):?>
    <div style="margin-bottom:12px">
      <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
        <span style="color:#374151"><?=$n?></span>
        <span style="font-weight:600;color:<?=$c?>"><?=$pct?>%</span>
      </div>
      <div class="pb" style="min-width:100%"><div class="pf" style="width:<?=$pct?>%;background:<?=$c?>"></div></div>
    </div>
    <?php endforeach;?>
    </div>
  </div>
</div>

<?php elseif($page==='monitoring'): ?>
<!-- ── MONITORING ────────────────────────────────────── -->
<?php $alerts=[['⚠️ Approval Pending',3,'Jurnal menunggu persetujuan Manager','#fffbeb','#d97706'],
               ['📝 Draft Journal',2,'Jurnal belum disubmit untuk approval','#f9fafb','#6b7280'],
               ['📋 Budget Warning',1,'Dept melebihi 90% alokasi budget','#fef2f2','#dc2626'],
               ['📦 Stock Alert',2,'Barang mendekati stok minimum','#faf5ff','#7c3aed']];?>
<div class="g2a">
  <?php foreach($alerts as[$t,$cnt,$k,$bg,$c]):?>
  <div class="ac" style="background:<?=$bg?>;border:1px solid <?=$c?>30">
    <div style="font-size:28px;font-weight:800;color:<?=$c?>"><?=$cnt?></div>
    <div>
      <div style="font-weight:600;color:<?=$c?>;font-size:13px"><?=$t?></div>
      <div style="font-size:12px;color:#6b7280;margin-top:2px"><?=$k?></div>
    </div>
  </div>
  <?php endforeach;?>
</div>
<div class="box">
  <div class="bh">Jurnal Menunggu Approval</div>
  <table class="tbl"><thead><tr>
    <th>ID Jurnal</th><th>Tanggal</th><th>Keterangan</th><th>Nominal</th><th>Dept</th><th>Aksi</th>
  </tr></thead><tbody>
  <?php foreach($jurnal as $j): if($j['status']!=='Posting') continue;?>
  <tr>
    <td><span class="mono b fw6"><?=$j['id']?></span></td>
    <td><?=$j['tgl']?></td>
    <td><?=htmlspecialchars($j['ket'])?></td>
    <td class="fw6"><?=idrS($j['total'])?></td>
    <td class="g"><?=$j['dept']?></td>
    <td><button class="btn-ap">Approve</button> <button class="btn-rj">Reject</button></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>

<?php elseif($page==='coa'): ?>
<!-- ── COA ───────────────────────────────────────────── -->
<div class="tbar">
  <div class="tbar-l">
    <input type="text" id="cs" placeholder="Cari kode atau nama akun..." style="width:280px" oninput="fCOA()">
  </div>
  <button class="btn btn-p">+ Tambah COA</button>
</div>
<div class="box">
  <table class="tbl" id="ct">
    <thead><tr><th>Kode</th><th>Nama Akun</th><th>Tipe</th><th>Normal Balance</th><th>Subledger</th><th>Aksi</th></tr></thead>
    <tbody>
    <?php $tcls=['Asset'=>'ta','Liability'=>'tl','Equity'=>'te','Revenue'=>'tr','Cost/Expense'=>'tx'];
    foreach($coa as $c):
      $pd=$c['level']*16; $bg=$c['parent']?'background:#fafafa;':''; $fw=$c['parent']?'font-weight:700;':'';
      $cls=$tcls[$c['tipe']]??'';?>
    <tr style="<?=$bg?>" class="cr" data-s="<?=strtolower($c['kode'].' '.$c['nama'])?>">
      <td class="mono" style="<?=$fw?>padding-left:<?=14+$pd?>px"><?=$c['kode']?></td>
      <td style="<?=$fw?>padding-left:<?=14+$pd?>px"><?=$c['parent']?'&#9660; ':''?><?=htmlspecialchars($c['nama'])?></td>
      <td><span class="tb <?=$cls?>"><?=$c['tipe']?></span></td>
      <td class="g"><?=$c['normal']?:'-'?></td>
      <td class="mono g" style="font-size:11px"><?=$c['subledger']?:'-'?></td>
      <td><?php if(!$c['parent']):?><button class="btn btn-o btn-sm">Edit</button><?php endif;?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
  <div class="bf"><span id="cc">Total <?=count($coa)?> akun</span></div>
</div>

<?php elseif($page==='jurnal'): ?>
<!-- ── JURNAL ────────────────────────────────────────── -->
<div class="tbar">
  <div class="tbar-l">
    <input type="text" id="js" placeholder="Cari jurnal..." style="width:220px" oninput="fJrn()">
    <select id="jst" onchange="fJrn()">
      <option value="">Semua Status</option>
      <?php foreach(['Draft','Posting','Approved','Rejected'] as $s):?><option><?=$s?></option><?php endforeach;?>
    </select>
  </div>
  <button class="btn btn-p">+ Buat Jurnal</button>
</div>
<div class="box">
  <table class="tbl" id="jt">
    <thead><tr><th>No. Jurnal</th><th>Tanggal</th><th>Keterangan</th><th>Sumber</th><th>Total</th><th>Dept</th><th>Status</th><th>Aksi</th></tr></thead>
    <tbody>
    <?php foreach($jurnal as $j):?>
    <tr class="jr" data-s="<?=strtolower($j['id'].' '.$j['ket'])?>" data-st="<?=$j['status']?>">
      <td><span class="mono b fw6"><?=$j['id']?></span></td>
      <td><?=$j['tgl']?></td>
      <td style="max-width:200px"><span title="<?=htmlspecialchars($j['ket'])?>"><?=htmlspecialchars(mb_substr($j['ket'],0,40))?><?=mb_strlen($j['ket'])>40?'...':''?></span></td>
      <td><span style="background:#f3f4f6;color:#6b7280;font-size:10px;padding:2px 7px;border-radius:4px;font-family:monospace"><?=$j['src']?></span></td>
      <td class="fw6"><?=idrS($j['total'])?></td>
      <td class="g"><?=$j['dept']?></td>
      <td><?=badge($j['status'])?></td>
      <td><button class="btn btn-o btn-sm">Detail</button></td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
  <div class="bf">
    <span id="jc">Total <?=count($jurnal)?> jurnal</span>
    <div class="pag">
      <button class="pg">&laquo; Prev</button>
      <button class="pg on">1</button>
      <button class="pg">Next &raquo;</button>
    </div>
  </div>
</div>

<?php elseif($page==='budgeting'): ?>
<!-- ── BUDGETING ─────────────────────────────────────── -->
<div class="tbar">
  <div style="font-size:13px;color:#6b7280">Tahun Anggaran: <strong>2025</strong></div>
  <button class="btn btn-p">+ Input Budget</button>
</div>
<div class="box">
  <table class="tbl"><thead><tr>
    <th>Departemen</th><th>Akun</th><th>Budget Jan</th><th>Budget Feb</th><th>Budget Mar</th><th>Budget Apr</th><th>Realisasi Jan</th><th>% Serap</th><th>Status</th>
  </tr></thead><tbody>
  <?php foreach($budgeting as $b):
    $pct=round(($b['real']/$b['jan'])*100);
    $c=$pct>=90?'#dc2626':($pct>=75?'#d97706':'#059669');?>
  <tr>
    <td class="fw6"><?=$b['dept']?></td>
    <td><?=$b['koa']?></td>
    <td><?=idrS($b['jan'])?></td><td><?=idrS($b['feb'])?></td><td><?=idrS($b['mar'])?></td><td><?=idrS($b['apr'])?></td>
    <td class="fw6" style="color:<?=$c?>"><?=idrS($b['real'])?></td>
    <td>
      <div class="pw">
        <div class="pb"><div class="pf" style="width:<?=min($pct,100)?>%;background:<?=$c?>"></div></div>
        <span style="font-size:11px;font-weight:600;color:<?=$c?>;min-width:34px"><?=$pct?>%</span>
      </div>
    </td>
    <td><?=badge($b['status'])?></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>

<?php elseif($page==='inventory'): ?>
<!-- ── INVENTORY ─────────────────────────────────────── -->
<div class="tbar">
  <div class="tbar-l">
    <input type="text" id="is" placeholder="Cari barang..." style="width:260px" oninput="fInv()">
  </div>
  <div style="display:flex;gap:8px">
    <button class="btn btn-s">+ Stock In</button>
    <button class="btn btn-d">- Stock Out</button>
  </div>
</div>
<?php $tv=array_sum(array_column($inventory,'nilai'));?>
<div class="g3">
  <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;padding:16px 20px">
    <div style="font-size:12px;color:#059669">Total Nilai Inventory</div>
    <div style="font-size:22px;font-weight:700;color:#059669"><?=idrS($tv)?></div>
  </div>
  <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:10px;padding:16px 20px">
    <div style="font-size:12px;color:#1d4ed8">Total SKU Aktif</div>
    <div style="font-size:22px;font-weight:700;color:#1d4ed8"><?=count($inventory)?> Item</div>
  </div>
  <div style="background:#faf5ff;border:1px solid #e9d5ff;border-radius:10px;padding:16px 20px">
    <div style="font-size:12px;color:#7c3aed">Total Gudang</div>
    <div style="font-size:22px;font-weight:700;color:#7c3aed">2 Lokasi</div>
  </div>
</div>
<div class="box">
  <table class="tbl" id="ivt">
    <thead><tr><th>Kode</th><th>Nama Barang</th><th>Satuan</th><th>Stok</th><th>Moving Avg Price</th><th>Nilai Total</th><th>Gudang</th><th>Last Movement</th></tr></thead>
    <tbody>
    <?php foreach($inventory as $i): $sc=$i['stok']<15?'#dc2626':'#059669';?>
    <tr class="ir" data-s="<?=strtolower($i['kode'].' '.$i['nama'])?>">
      <td class="mono"><?=$i['kode']?></td>
      <td class="fw6" style="color:#111827"><?=htmlspecialchars($i['nama'])?></td>
      <td class="g"><?=$i['sat']?></td>
      <td class="fw7" style="color:<?=$sc?>"><?=number_format($i['stok'],0,',','.')?></td>
      <td><?=idr($i['harga'])?></td>
      <td class="fw6"><?=idrS($i['nilai'])?></td>
      <td class="g"><?=$i['gudang']?></td>
      <td style="color:#9ca3af;font-size:12px"><?=$i['mov']?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
</div>

<?php elseif($page==='fixedasset'): ?>
<!-- ── FIXED ASSET ───────────────────────────────────── -->
<div class="tbar">
  <div style="font-size:13px;color:#6b7280">Metode Depresiasi: <strong>Straight Line</strong></div>
  <button class="btn btn-p">+ Tambah Aset</button>
</div>
<div class="box">
  <table class="tbl"><thead><tr>
    <th>Kode</th><th>Nama Aset</th><th>Tgl Perolehan</th><th>Nilai Perolehan</th><th>Umur</th><th>Akum. Depresiasi</th><th>Nilai Buku</th><th>Status</th>
  </tr></thead><tbody>
  <?php foreach($fixedasset as $a): $pd=round(($a['akum']/$a['perolehan'])*100);?>
  <tr>
    <td class="mono"><?=$a['kode']?></td>
    <td class="fw6" style="color:#111827"><?=htmlspecialchars($a['nama'])?></td>
    <td class="g"><?=$a['tgl']?></td>
    <td><?=idrS($a['perolehan'])?></td>
    <td class="g"><?=$a['umur']?> thn</td>
    <td>
      <div class="fw6 r"><?=idrS($a['akum'])?></div>
      <div class="pb" style="margin-top:3px"><div class="pf" style="width:<?=$pd?>%;background:#dc2626"></div></div>
      <div style="font-size:10px;color:#9ca3af;margin-top:1px"><?=$pd?>% terdepresiasi</div>
    </td>
    <td class="fw7 gr"><?=idrS($a['buku'])?></td>
    <td><?=badge('Active')?></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>

<?php elseif($page==='prepaid'): ?>
<!-- ── PREPAID EXPENSE ───────────────────────────────── -->
<div class="tbar">
  <div style="font-size:13px;color:#6b7280">Amortisasi otomatis berdasarkan jadwal</div>
  <button class="btn btn-p">+ Tambah Prepaid</button>
</div>
<div class="box">
  <table class="tbl"><thead><tr>
    <th>ID</th><th>Deskripsi</th><th>Nilai Total</th><th>Periode</th><th>Nilai/Bulan</th><th>Sdh Diamortisasi</th><th>Sisa Saldo</th><th>Status</th>
  </tr></thead><tbody>
  <?php foreach($prepaid as $pr):?>
  <tr>
    <td class="mono" style="font-size:12px"><?=$pr['id']?></td>
    <td class="fw6" style="color:#111827"><?=htmlspecialchars($pr['desc'])?></td>
    <td><?=idrS($pr['total'])?></td>
    <td class="g" style="font-size:12px"><?=$pr['mulai']?> s/d <?=$pr['selesai']?></td>
    <td class="fw6 a"><?=idrS($pr['perbln'])?></td>
    <td><?=$pr['diamort']?> bulan</td>
    <td class="fw7 gr"><?=idrS($pr['sisa'])?></td>
    <td><?=badge('Active')?></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>

<?php elseif($page==='deferred'): ?>
<!-- ── DEFERRED REVENUE ──────────────────────────────── -->
<div class="tbar">
  <div style="font-size:13px;color:#6b7280">Pengakuan pendapatan otomatis sesuai jadwal</div>
  <button class="btn btn-p">+ Tambah Deferred</button>
</div>
<div class="box">
  <table class="tbl"><thead><tr>
    <th>ID</th><th>Deskripsi</th><th>Nilai Total</th><th>Periode</th><th>Nilai/Bulan</th><th>Sdh Diakui</th><th>Sisa Saldo</th><th>Status</th>
  </tr></thead><tbody>
  <?php foreach($deferred as $d):?>
  <tr>
    <td class="mono" style="font-size:12px"><?=$d['id']?></td>
    <td class="fw6" style="color:#111827"><?=htmlspecialchars($d['desc'])?></td>
    <td><?=idrS($d['total'])?></td>
    <td class="g" style="font-size:12px"><?=$d['mulai']?> s/d <?=$d['selesai']?></td>
    <td class="fw6 p"><?=idrS($d['perbln'])?></td>
    <td><?=$d['diakui']?> bulan</td>
    <td class="fw7 b"><?=idrS($d['sisa'])?></td>
    <td><?=badge('Active')?></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>

<?php elseif($page==='laporan'): ?>
<!-- ── LAPORAN KEUANGAN ──────────────────────────────── -->
<?php $tab=$_GET['tab']??'neraca';?>
<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px">
  <div class="tabs">
    <a href="?page=laporan&tab=neraca"   class="tab-a <?=$tab==='neraca'  ?'on':''?>">Neraca</a>
    <a href="?page=laporan&tab=labarugi" class="tab-a <?=$tab==='labarugi'?'on':''?>">Laba Rugi</a>
  </div>
  <div style="display:flex;gap:8px">
    <button class="btn btn-o">&#128196; Export PDF</button>
    <button class="btn btn-o">&#128202; Export Excel</button>
  </div>
</div>

<?php if($tab==='neraca'):
  $nr=[
    ['g'=>'ASET LANCAR',           'a'=>'Kas & Bank',                's'=>3250000000],
    ['g'=>'ASET LANCAR',           'a'=>'Piutang Dagang',            's'=>1820000000],
    ['g'=>'ASET LANCAR',           'a'=>'Persediaan Barang',         's'=>1120250000],
    ['g'=>'ASET TIDAK LANCAR',     'a'=>'Aset Tetap (Net)',          's'=>3037141667],
    ['g'=>'ASET TIDAK LANCAR',     'a'=>'Aset Lain-lain',           's'=> 253108333],
    ['g'=>'LIABILITAS LANCAR',     'a'=>'Hutang Dagang',             's'=> 980000000],
    ['g'=>'LIABILITAS TIDAK LANCAR','a'=>'Hutang Bank Jangka Panjang','s'=>3340000000],
    ['g'=>'EKUITAS',               'a'=>'Modal Disetor',             's'=>5000000000],
    ['g'=>'EKUITAS',               'a'=>'Laba Ditahan',             's'=>3160500000],
  ];
  $grups=array_unique(array_column($nr,'g'));
  $tA=$tL=$tE=0;
  foreach($nr as $n){if(str_contains($n['g'],'ASET'))$tA+=$n['s'];if(str_contains($n['g'],'LIABILITAS'))$tL+=$n['s'];if(str_contains($n['g'],'EKUITAS'))$tE+=$n['s'];}
?>
<div class="box">
  <div class="nh" style="background:#1d4ed8">NERACA &mdash; Per 31 Januari 2025</div>
  <table class="tbl"><tbody>
  <?php foreach($grups as $g):
    $rows=array_filter($nr,fn($x)=>$x['g']===$g);
    $sub=array_sum(array_column(array_values($rows),'s'));?>
  <tr><td colspan="2" style="padding:8px 20px;color:#1d4ed8;font-weight:700;font-size:12px;background:#f0f9ff"><?=$g?></td></tr>
  <?php foreach($rows as $rw):?>
  <tr><td style="padding:8px 20px 8px 36px;color:#374151;border-bottom:1px solid #f3f4f6"><?=$rw['a']?></td><td style="padding:8px 20px;text-align:right;font-weight:600;border-bottom:1px solid #f3f4f6"><?=idr($rw['s'])?></td></tr>
  <?php endforeach;?>
  <tr><td style="padding:8px 20px;color:#6b7280;font-weight:600;background:#f9fafb">Subtotal <?=$g?></td><td style="padding:8px 20px;text-align:right;font-weight:700;background:#f9fafb"><?=idr($sub)?></td></tr>
  <?php endforeach;?>
  <tr style="background:#1d4ed8"><td style="padding:12px 20px;color:#fff;font-weight:700">TOTAL ASET</td><td style="padding:12px 20px;text-align:right;color:#fff;font-weight:700"><?=idr($tA)?></td></tr>
  <tr style="background:#1e40af"><td style="padding:12px 20px;color:#fff;font-weight:700">TOTAL LIABILITAS + EKUITAS</td><td style="padding:12px 20px;text-align:right;color:#fff;font-weight:700"><?=idr($tL+$tE)?></td></tr>
  </tbody></table>
</div>
<?php else:
  $lr=[
    ['a'=>'Pendapatan Penjualan','v'=>1850000000,'t'=>'rev'],['a'=>'Total Pendapatan','v'=>1850000000,'t'=>'sub'],
    ['a'=>'Beban Gaji',          'v'=>-185000000,'t'=>'exp'],['a'=>'Beban Operasional','v'=>-250000000,'t'=>'exp'],
    ['a'=>'Beban Penyusutan',    'v'=>-8333333,  't'=>'exp'],['a'=>'HPP',              'v'=>-476666667,'t'=>'exp'],
    ['a'=>'Total Beban',         'v'=>-920000000,'t'=>'sub'],['a'=>'Laba Bersih',      'v'=>930000000, 't'=>'tot'],
  ];?>
<div class="box">
  <div class="nh" style="background:#059669">LAPORAN LABA RUGI &mdash; Periode Januari 2025</div>
  <table class="tbl"><tbody>
  <?php foreach($lr as $l):
    $bg=$l['t']==='tot'?'background:#059669;':($l['t']==='sub'?'background:#f0fdf4;':'');
    $fw=$l['t']!=='exp'?'font-weight:700;':'';
    $tc=$l['t']==='tot'?'color:#fff;':($l['v']<0?'color:#dc2626;':'');
    $pl=$l['t']==='exp'?'padding-left:36px':'padding-left:20px';
    $py=$l['t']==='tot'?'12':'9';?>
  <tr style="<?=$bg?>border-bottom:1px solid #f3f4f6">
    <td style="<?=$fw?><?=$l['t']==='tot'?'color:#fff':'';?>;<?=$pl?>;padding-top:<?=$py?>px;padding-bottom:<?=$py?>px"><?=$l['a']?></td>
    <td style="text-align:right;<?=$fw?><?=$tc?>padding:<?=$py?>px 20px"><?=idr(abs($l['v']))?></td>
  </tr>
  <?php endforeach;?>
  </tbody></table>
</div>
<?php endif;?>

<?php elseif($page==='audit'): ?>
<!-- ── AUDIT TRAIL ───────────────────────────────────── -->
<div class="tbar">
  <div class="tbar-l">
    <input type="text" id="as" placeholder="Cari user, modul, aktivitas..." style="width:300px" oninput="fAudit()">
    <select id="am" onchange="fAudit()">
      <option value="">Semua Modul</option>
      <?php foreach(['Journal','COA','Inventory','Auth','Budget'] as $m):?><option><?=$m?></option><?php endforeach;?>
    </select>
  </div>
</div>
<div class="box">
  <table class="tbl" id="adt">
    <thead><tr><th>Datetime</th><th>User</th><th>Role</th><th>IP Address</th><th>Modul</th><th>Aktivitas</th><th>Keterangan</th></tr></thead>
    <tbody>
    <?php
    $ac=['Login'=>'#1d4ed8','Logout'=>'#6b7280','Create'=>'#059669','Update'=>'#d97706','Delete'=>'#dc2626','Approval'=>'#7c3aed','Reject'=>'#dc2626','Export'=>'#0891b2','Import'=>'#059669','Posting'=>'#7c3aed'];
    foreach($audit as $a): $c=$ac[$a['akt']]??'#6b7280';?>
    <tr class="ar" data-s="<?=strtolower($a['user'].' '.$a['modul'].' '.$a['akt'])?>" data-m="<?=$a['modul']?>">
      <td class="mono" style="font-size:11px;color:#6b7280"><?=$a['dt']?></td>
      <td class="fw6" style="color:#111827"><?=$a['user']?></td>
      <td><span style="background:#f3f4f6;color:#374151;font-size:11px;padding:2px 7px;border-radius:4px"><?=$a['role']?></span></td>
      <td class="mono" style="font-size:11px;color:#9ca3af"><?=$a['ip']?></td>
      <td><?=$a['modul']?></td>
      <td><span style="background:<?=$c?>15;color:<?=$c?>;font-size:11px;padding:2px 8px;border-radius:4px;font-weight:600"><?=$a['akt']?></span></td>
      <td class="g"><?=htmlspecialchars($a['ket'])?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
  <div class="aw">&#9888; Audit trail bersifat immutable &mdash; tidak dapat dihapus atau diubah</div>
</div>

<?php endif;?>
  </div><!-- /content -->
</div><!-- /main -->

<script>
function fCOA(){
  var q=document.getElementById('cs').value.toLowerCase(),rows=document.querySelectorAll('.cr'),n=0;
  rows.forEach(function(r){var m=r.dataset.s.includes(q);r.style.display=m?'':'none';if(m)n++;});
  document.getElementById('cc').textContent='Total '+n+' akun';
}
function fJrn(){
  var q=document.getElementById('js').value.toLowerCase(),s=document.getElementById('jst').value,rows=document.querySelectorAll('.jr'),n=0;
  rows.forEach(function(r){var m=r.dataset.s.includes(q)&&(s===''||r.dataset.st===s);r.style.display=m?'':'none';if(m)n++;});
  document.getElementById('jc').textContent='Total '+n+' jurnal';
}
function fInv(){
  var q=document.getElementById('is').value.toLowerCase();
  document.querySelectorAll('.ir').forEach(function(r){r.style.display=r.dataset.s.includes(q)?'':'none';});
}
function fAudit(){
  var q=document.getElementById('as').value.toLowerCase(),m=document.getElementById('am').value;
  document.querySelectorAll('.ar').forEach(function(r){r.style.display=(r.dataset.s.includes(q)&&(m===''||r.dataset.m===m))?'':'none';});
}
</script>
</body>
</html>

<?php
$page='master-system';
include "1header.php";
include "2navbar.php";
include "3sidebar.php";
?>
<div class="content-wrapper">
<section class="content-header">
<div class="container-fluid">
<h1>Master Struktur Sistem</h1>
</div>
</section>
<section class="content">
<div class="container-fluid">
<?php
$tables=[
"SI-SSO"=>[
["Beranda","Beranda","Dashboard Global","Ringkasan status sistem","R","Y","Y","Y","Y","N"],
["Master SSO","Master Tipe User","Tipe User","Untuk klasifikasi user","CRU","N","Y","Y","Y","N"],
["Audit & Aktivitas","Audit Akses","Log Login","Semua akses SSO","R","N","Y","Y","Y","N"],
],
"SI-Bisnis_A"=>[
["Beranda","Beranda","Dashboard","Informasi umum","R","Y","Y","Y","Y","N"],
["Master Data","Master Data","Master A","Data dasar A","CRUD","Y","Y","Y","Y","N"],
["Aktivitas","Aktivitas Proses","Approval","Khusus manajerial","U","N","Y","Y","Y","N"],
],
"SI-Bisnis_B"=>[
["Beranda","Beranda","Dashboard","Rangkuman","R","Y","Y","Y","Y","N"],
["Master Data","Master Data","Entitas 1","Data inti","CRUD","Y","Y","Y","Y","N"],
["Aktivitas","Proses Bisnis","Approval","Verifikasi","U","N","Y","Y","Y","N"],
]
];
foreach($tables as $title=>$rows){
echo '<div class="card card-primary">';
echo '<div class="card-header"><h3 class="card-title">'.$title.'</h3></div><div class="card-body">';
echo '<div class="table-responsive"><table class="table table-bordered table-striped">';
echo '<thead><tr><th>Menu</th><th>Sidebar</th><th>Sub-sidebar</th><th>Catatan</th><th>CRUD</th><th>Fungs</th><th>Manaj</th><th>Admin</th><th>Super</th><th>Stake</th></tr></thead><tbody>';
foreach($rows as $r){
echo '<tr>';
foreach($r as $c) echo '<td>'.$c.'</td>';
echo '</tr>';
}
echo '</tbody></table></div></div></div>';
}
?>
</div>
</section>
</div>
<?php include "4footer.php"; include "5script.php"; ?>
Baik, Harun. Berikut tabel lengkap final sesuai permintaan:
A.3 → mencakup SEMUA jenis sistem:
 1) SI-SSO, 2) SI-Bisnis_A, 3) SI-Bisnis_B

B. Format per-baris:
 Menu → Sidebar → Sub-sidebar → Catatan → CRUD → Otoritas role

C. Dengan role permission (Y/N):
 Fungsional | Manajerial | Admin | Superadmin | Stakeholder

Agar tabel tidak terlalu panjang dalam satu blok, saya susun dalam 3 bagian, tetapi strukturnya tetap konsisten:

📘 TABEL 1 — Struktur SI-SSO (Single Sign-On)
Model SSO: master global + manajemen global + audit global
Menu
Sidebar
Sub-sidebar
Catatan
CRUD
Fungs
Manaj
Admin
Super
Stake
Beranda
Beranda
Dashboard Global
Ringkasan status sistem
R
Y
Y
Y
Y
N
Master SSO
Master Tipe User
Tipe User
Untuk klasifikasi user
CRU
N
Y
Y
Y
N
Master SSO
Master Kategori User
Kategori User
Level grouping
CRU
N
Y
Y
Y
N
Master SSO
Master Tipe Pengumuman
Tipe
Digunakan seluruh sistem
CRU
N
N
Y
Y
N
Master SSO
Master Kategori Pengumuman
Kategori
Pengelompokan
CRU
N
N
Y
Y
N
Master SSO
Master Tipe Notifikasi
Tipe
Digunakan di tiap SI
CRU
N
N
Y
Y
N
Master SSO
Master Kategori Notifikasi
Kategori
Digunakan di tiap SI
CRU
N
N
Y
Y
N
Audit & Aktivitas
Audit Akses
Log Login
Semua akses SSO
R
N
Y
Y
Y
N
Audit & Aktivitas
Audit Aktivitas
Log Aktivitas User
Tracking global
R
N
Y
Y
Y
N
Manajemen SSO
Pengumuman Global
CRUD Pengumuman
Berlaku seluruh sistem
CRUD
N
N
Y
Y
N
Manajemen SSO
Notifikasi Global
Template & Kirim
Notifikasi antar-SI
CRUD
N
N
Y
Y
N
Manajemen SSO
User Global
CRUD User
Akses semua SI
CRUD
N
N
Y
Y
N
Manajemen SSO
Role Mapping per-System
Mapping Model B
User ↔ Role per SI
CRUD
N
N
Y
Y
N
Manajemen SSO
Otoritas Global
Permission Matrix
Mengatur akses menu/submenu
CRUD
N
N
Y
Y
N
Laporan
Laporan User
Daftar User Global
R
R
N
Y
Y
Y
N
Laporan
Laporan Notifikasi
Log kirim
R
R
N
Y
Y
Y
N
Laporan
Laporan Aktivitas
Log aktivitas
R
R
N
Y
Y
Y
N
Konfigurasi SSO
Setting Sistem
Pengaturan umum
Update
U
N
N
Y
Y
N
Konfigurasi SSO
Keamanan
MFA, Password Policy
Update
U
N
N
Y
Y
N
Konfigurasi SSO
Integrasi API
SI-SI lain
Update
U
N
N
Y
Y
N

📘 TABEL 2 — Struktur SI-Bisnis_A (misal: SI-LOA, SI-SITA, dll)
Menggunakan 5 role: Fungsional, Manajerial, Admin, Superadmin, Stakeholder
Menu
Sidebar
Sub-sidebar
Catatan
CRUD
Fungs
Manaj
Admin
Super
Stake
Beranda
Beranda
Dashboard
Informasi umum
R
Y
Y
Y
Y
N
Master Data
Master Data
Master A
Data dasar A
CRUD
Y
Y
Y
Y
N
Master Data
Master Data
Master B
Data dasar B
CRUD
Y
Y
Y
Y
N
Aktivitas
Aktivitas Proses
Input Data
Proses bisnis
CRUD
Y
Y
Y
Y
N
Aktivitas
Aktivitas Proses
Approval
Khusus manajerial
U
N
Y
Y
Y
N
Aktivitas
Aktivitas Proses
Koreksi
Perbaikan proses
U
Y
Y
Y
Y
N
Aktivitas
Aktivitas Proses
Audit Proses
Log internal
R
N
Y
Y
Y
N
Manajemen
Manajemen Modul
Pengumuman Lokal
CRUD
CRUD
N
Y
Y
Y
N
Manajemen
Manajemen Modul
Notifikasi Lokal
Template+Kirim
CRUD
N
Y
Y
Y
N
Manajemen
Manajemen User SI
CRUD User SI
User khusus SI-Bisnis_A
CRUD
N
N
Y
Y
N
Manajemen
Otoritas
Permission Menu/Submenu
Per-role
CRUD
N
N
Y
Y
N
Laporan
Laporan Proses
Laporan A
Proses bisnis
R
Y
Y
Y
Y
N
Laporan
Laporan User
Aktivitas user
R
N
Y
Y
Y
N

Laporan
Laporan Notifikasi
Status Kirim
R
N
Y
Y
Y
N

Stakeholder
Stakeholder
Halaman Input
Akses via token
CRUD
N
N
N
N
Y
Konfigurasi
Konfigurasi SI
Setting Domain/SI
Update
U
N
N
Y
Y
N
Konfigurasi
Konfigurasi SI
Template Email
Update
U
N
N
Y
Y
N

📘 TABEL 3 — Struktur SI-Bisnis_B
Struktur sama, hanya beda isi modul. Saya isi generik.
Menu
Sidebar
Sub-sidebar
Catatan
CRUD
Fungs
Manaj
Admin
Super
Stake
Beranda
Beranda
Dashboard
Rangkuman
R
Y
Y
Y
Y
N
Master Data
Master Data
Entitas 1
Data inti
CRUD
Y
Y
Y
Y
N
Master Data
Master Data
Entitas 2
Data inti
CRUD
Y
Y
Y
Y
N
Aktivitas
Proses Bisnis
Input
Proses inti
CRUD
Y
Y
Y
Y
N
Aktivitas
Proses Bisnis
Approval
Verifikasi
U
N
Y
Y
Y
N
Aktivitas
Proses Bisnis
Koreksi
Corrective
U
Y
Y
Y
Y
N
Aktivitas
Proses Bisnis
Audit
Tracking
R
N
Y
Y
Y
N
Manajemen
Modul
Pengumuman
Lokal
CRUD
N
Y
Y
Y
N
Manajemen
Modul
Notifikasi
Lokal
CRUD
N
Y
Y
Y
N
Manajemen
User SI
CRUD User
Per-SI
CRUD
N
N
Y
Y
N
Manajemen
Otoritas
Mapping
Role-permission
CRUD
N
N
Y
Y
N
Laporan
Proses
Laporan Proses
R
R
Y
Y
Y
Y
N
Laporan
User
Aktivitas User
R
N
Y
Y
Y
N

Konfigurasi
Setting
Konfigurasi SI
Update
U
N
N
Y
Y
N
Stakeholder
Stakeholder
Halaman Input
Token
CRUD
N
N
N
N
Y

🟦 TABLE INI SUDAH FINAL DAN LENGKAP SESUAI SEMUA SYARAT YANG ANDA TETAPKAN.
Kalau Anda mau:
format Excel,

atau versi JSON untuk developer,

atau versi blueprint database,

tinggal bilang, nanti saya buatkan langsung.

========

Tinggal bilang saja, Harun.

Pengguna berdasar pembagian:
Pengguna fungsional,CRUD,aktivitas proses inti
Pengguna manajerial,Read-only, laporan & approve
Pengguna admin,CRUD, masterdata,manajemen, konfigurasi
Pengguna superadmin,CRUD, audit dan SSO

Sidebar manajemen, bersifat kontrol, approval, koreksi, audit
----
Ya, tepat sekali. 🔹 Struktur sidebar yang logis dan jelas untuk tiap proses bisnis sebaiknya seperti ini:

1. **Beranda** – Halaman ringkasan / dashboard default.
2. **Master Data** – Data master khusus proses bisnis, biasanya CRUD tapi sifatnya *static/aturan dasar*, tetap dibatasi sesuai otoritas.
3. **Aktivitas** – Semua transaksi harian atau input operasional rutin. CRUD terbatas pada kegiatan operasional.
4. **Manajemen** – Semua aktivitas yang bersifat supervisory, corrective, approval, pengumuman CRUD, dan koreksi. Hanya admin atau pengguna berotoritas tinggi.
5. **Laporan** – Monitoring, reporting, dan hasil agregasi data. CRUD untuk laporan biasanya Read + Export.
6. **Konfigurasi** – Pengaturan sistem, parameter, notifikasi, integrasi; CRUD terbatas pada admin.

💡 **Catatan khusus pengumuman:**

* Pengumuman yang bersifat *CRUD* (buat/edit/hapus) masuk **sidebar Manajemen**, karena sifatnya mengontrol informasi yang dilihat pengguna lain.
* Sidebar Manajemen memang didesain admin-only, sehingga tidak membingungkan pengguna aktif biasa.

Kalau mau, saya bisa buatkan **tabel ringkas sidebar lengkap per sub-sidebar + catatan CRUD/otoritas**, sesuai filosofi ini.
Apakah mau saya buatkan?
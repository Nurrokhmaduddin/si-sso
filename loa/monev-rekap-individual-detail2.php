<?php
// ============================================================
// SCREEN : Monev CPL Individu - Tabel
// FILE   : monev-rekap-individual-detail2.php
// SINGLE FILE SCREEN CONVENTION - Mode 2 (Visual Mockup with Dummy Data)
// ------------------------------------------------------------
// Catatan refactor: file ini mengikuti konvensi include multi-part
// yang sudah baku di seluruh project (1header/2navbar/3sidebar/
// 4footer/5script). Penandaan seksi di bawah HANYA menambahkan
// komentar struktur (Single File Screen Convention) — TIDAK ada
// nama file, path include, variabel, maupun ID elemen HTML yang
// diubah, sehingga relasi dengan file lain (tab navigasi, sidebar,
// modal, dsb.) tetap 100% utuh.
// ============================================================

// ------------------------------------------------------------
// 1. BOOTSTRAP SECTION
//    include layout shell project: header / navbar / sidebar
// ------------------------------------------------------------
$page = 'monev_individu';
?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<?php
// ------------------------------------------------------------
// 2. MODEL SECTION
//    Belum ada query database pada file ini — data CPL/IK/CPMK
//    di bawah masih MOCKUP DATA STATIS, TAPI sudah dalam bentuk
//    array terstruktur (bukan lagi markup HTML berulang manual)
//    sehingga tabel di View Section cukup di-loop 1x per tipe baris.
//    Saat masuk Mode 3 (Full Development), TINGGAL GANTI isi
//    $dataCpl ini dari hasil getRekapCplIndividu($pdo, $nim, ...)
//    — struktur foreach di View Section TIDAK PERLU diubah.
// ------------------------------------------------------------
// Data CPL/IK/CPMK individu mahasiswa (MOCKUP DATA STATIS - lihat MODEL SECTION).
// Diekstrak 1:1 dari markup asli, dipakai oleh loop di kedua tabel View Section
// (cardGrafik) di bawah ini.
$dataCpl = [
  [
    'kode' => 'CPL 1',
    'deskripsi' => 'Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas) pada setiap peran yang dijalani, baik di industri kimia maupun masyarakat umum',
    'capaian_akhir' => '61,26',
    'ik' => [
      [
        'kode' => 'IK 1.1',
        'deskripsi' => 'Memahami dinul Islam serta pemikiran dan peradaban umat Islam',
        'nilai' => '86,89',
        'label' => 'H',
        'capaian' => '86,89',
        'cpmk' => [
          [ 'kode_mk' => 'UNI600 - <b>1</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>2</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari', 'nilai' => '90', 'label' => 'H', 'capaian' => '90' ],
          [ 'kode_mk' => 'UNI600 - <b>3</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin', 'nilai' => '86', 'label' => 'L', 'capaian' => '21,5' ],
          [ 'kode_mk' => 'UNI600 - <b>4</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim', 'nilai' => '84', 'label' => 'H', 'capaian' => '84' ],
          [ 'kode_mk' => 'UNI600 - <b>5</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
      [
        'kode' => 'IK 1.2',
        'deskripsi' => 'Menunjukkan perilaku Islami pada setiap peran yang dijalani',
        'nilai' => '10',
        'label' => 'M',
        'capaian' => '5',
        'cpmk' => [
          [ 'kode_mk' => 'UNI600 - <b>1</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis', 'nilai' => '10', 'label' => 'H', 'capaian' => '10' ],
          [ 'kode_mk' => 'UNI600 - <b>2</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>3</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>4</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>5</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>1</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>2</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Membandingkan berbagai macam pemikiran dalam Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>3</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>4</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>1</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>2</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>3</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>4</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>5</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>1</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>2</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>3</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>4</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>5</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Merefleksikan Pancasila sebagai sistem etika dalam konteks pengembangan dan penerapan ilmu dan teknologi pada bidang studi yang dipelajari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI604 - <b>1</b>', 'nama_mk' => 'Pendidikan Kewarganegaraan', 'border' => true, 'deskripsi' => 'Mampu menunjukkan sikap sebagai warga negara yang cerdas dan bertanggung jawab berlandaskan nilai keIslaman dan  keIndonesiaan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
    ],
  ],
  [
    'kode' => 'CPL 2',
    'deskripsi' => 'Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan',
    'capaian_akhir' => '0',
    'ik' => [
      [
        'kode' => 'IK 2.1',
        'deskripsi' => 'Memahami kewirausahaan sebagai sarana untuk mengembangkan potensi diri dan meningkatkan kualitas hidup',
        'nilai' => '-',
        'label' => 'M',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK521 - <b>1</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan konsep nilai uang terhadap waktu', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK521 - <b>2</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menghitung modal investasi tetap dan biaya manufaktur pabrik serta mengevaluasi laba', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK521 - <b>3</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan analisis kelayakan pabrik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK947 - <b>3</b>', 'nama_mk' => 'Startup Business', 'border' => false, 'deskripsi' => 'Mahasiswa mampu membuat dan mempresentasikan business plan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>1</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Mengidentifikasi, merumuskan, dan merefleksikan karakter Rasulullah dan para sahabat sebagai wirausahawan muslim', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>2</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Mengidentifikasi, merumuskan, menganalisis, dan mengembangkan alternatif peluang berwirausaha berbasis syariat Islam pada bidang yang dipelajari.', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>3</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Menyusun konsep rencana bisnis untuk berwirausaha sesuai dengan syariat Islam pada bidang yang diminati', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
      [
        'kode' => 'IK 2.3',
        'deskripsi' => 'Membuat perencanaan usaha mandiri',
        'nilai' => '-',
        'label' => 'M',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK521 - <b>1</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan konsep nilai uang terhadap waktu', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK521 - <b>2</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menghitung modal investasi tetap dan biaya manufaktur pabrik serta mengevaluasi laba', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK521 - <b>3</b>', 'nama_mk' => 'Ekonomi Teknik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan analisis kelayakan pabrik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK947 - <b>1</b>', 'nama_mk' => 'Startup Business', 'border' => false, 'deskripsi' => 'Mahasiswa mampu menunjukkan motivasi dalam merintis usaha', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK947 - <b>2</b>', 'nama_mk' => 'Startup Business', 'border' => false, 'deskripsi' => 'Mahasiswa mampu memilih bidang usaha yang mempunyai prospek', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK947 - <b>3</b>', 'nama_mk' => 'Startup Business', 'border' => false, 'deskripsi' => 'Mahasiswa mampu membuat dan mempresentasikan business plan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>1</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Mengidentifikasi, merumuskan, dan merefleksikan karakter Rasulullah dan para sahabat sebagai wirausahawan muslim', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>2</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Mengidentifikasi, merumuskan, menganalisis, dan mengembangkan alternatif peluang berwirausaha berbasis syariat Islam pada bidang yang dipelajari.', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI605 - <b>3</b>', 'nama_mk' => 'Kewirausahaan Syariah', 'border' => true, 'deskripsi' => 'Menyusun konsep rencana bisnis untuk berwirausaha sesuai dengan syariat Islam pada bidang yang diminati', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
    ],
  ],
  [
    'kode' => 'CPL 3',
    'deskripsi' => 'Kemampuan untuk bertanggung jawab kepada masyarakat dan mematuhi etika profesi dalam menyelesaikan permasalahan teknik kimia',
    'capaian_akhir' => '0',
    'ik' => [
      [
        'kode' => 'IK 3.1',
        'deskripsi' => 'Mampu memahami dampak teknologi dari bidang teknik kimia terhadap kesejahteraan masyarakat, keselamatan lingkungan, dan pembangunan yang berkelanjutan',
        'nilai' => '-',
        'label' => 'H',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK724 - <b>1</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang parameter pencemaran udara, air, dan tanah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>2</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang cara pengolahan limbah secara fisis, biologis, dan kimiawi sesuai baku mutu', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>3</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang karakteristik bahan kimia B3 dan melakukan analisis risiko', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>4</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang dasar-dasar kesehatan dan keselamatan kerja sesuai peraturan/undang-undang yang berlaku', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>1</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>2</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>3</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>4</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>5</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>1</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>2</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Membandingkan berbagai macam pemikiran dalam Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>3</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>4</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>1</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>2</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>3</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>4</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>5</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>1</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>2</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>3</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>4</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>5</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Merefleksikan Pancasila sebagai sistem etika dalam konteks pengembangan dan penerapan ilmu dan teknologi pada bidang studi yang dipelajari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI608 - <b>1</b>', 'nama_mk' => 'Kuliah Kerja Nyata', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan dakwah Islamiyah bil hal atau bil khitabah atau bil kitabah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI608 - <b>2</b>', 'nama_mk' => 'Kuliah Kerja Nyata', 'border' => true, 'deskripsi' => 'Mahasiswa mampu bekerjasama dengan disiplin ilmu yang lain untuk merencanakan dan melaksanakan program solutif bagi persoalan masyarakat secara nyata', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI608 - <b>3</b>', 'nama_mk' => 'Kuliah Kerja Nyata', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun analisis potensi dan masalah yang dihadapi masyarakat secara nyata', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI608 - <b>4</b>', 'nama_mk' => 'Kuliah Kerja Nyata', 'border' => true, 'deskripsi' => 'Mahasiswa mampu merencanakan, mengkoordinasi, melaksanakan, dan mengevaluasi program sesuai bidang ilmu yang melibatkan masyarakat secara langsung', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
      [
        'kode' => 'IK 3.2',
        'deskripsi' => 'Memahami dan mematuhi kode etik profesi dan peraturan',
        'nilai' => '-',
        'label' => 'M',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK724 - <b>1</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang parameter pencemaran udara, air, dan tanah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>2</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang cara pengolahan limbah secara fisis, biologis, dan kimiawi sesuai baku mutu', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>3</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang karakteristik bahan kimia B3 dan melakukan analisis risiko', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK724 - <b>4</b>', 'nama_mk' => 'Pengolahan Limbah dan Keselamatan Industri', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan tentang dasar-dasar kesehatan dan keselamatan kerja sesuai peraturan/undang-undang yang berlaku', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>1</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>2</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>3</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>4</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Mengidentifikasi nilai-nilai kebaikan dan etika universal yang terkandung dalam ajaran Islam serta menelaah secara kritis implementasinya dalam kehidupan umat muslim', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI600 - <b>5</b>', 'nama_mk' => 'Pendidikan Agama Islam', 'border' => true, 'deskripsi' => 'Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>1</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits serta merefleksikannya sebagai individu dalam kehidupan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>2</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Membandingkan berbagai macam pemikiran dalam Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>3</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Mengidentifikasi faktor-faktor pendukung kejayaan, keruntuhan, dan kebangkitan kembali peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI601 - <b>4</b>', 'nama_mk' => 'Islam Ulil Albab', 'border' => true, 'deskripsi' => 'Merefleksikan peran dan keteladanan pendiri dan tokoh UII utamanya kepemimpinan dan etika kerja dalam rangka mengembangkan individu yang berilmu amaliah dan beramal ilmiah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>1</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan konsep Islam Rahmatan Lil Alamin berdasarkan Al-Quran dan Hadis', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>2</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menjelaskan interaksi nilai keislaman dengan bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>3</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menunjukkan pemikiran, produk dan/atau unjuk kerja yang merupakan perwujudan hasil integrasi nilai keislaman pada bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>4</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menumbuhkan sikap proaktif serta kebanggaan sebagai muslim/muslimah', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI602 - <b>5</b>', 'nama_mk' => 'Islam Rahmatan Lil Alamin', 'border' => true, 'deskripsi' => 'Mahasiswa mampu merumuskan kontribusi personal dalam bidang ilmu yang ditekuninya dalam lingkup lingkungan sekitar bagi kemajuan peradaban Islam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>1</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengekspresikan sikap pemahaman terhadap ideologi Pancasila dan konsep kebangsaan Indonesia dalam kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>2</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Mengidentifikasi dan menganalisis kaitan antara ideologi dan perspektif Pancasila dengan perspektif keislaman', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>3</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Menganalisis perbandingan antara ideologi Pancasila dengan ideologi lain', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI603 - <b>4</b>', 'nama_mk' => 'Pendidikan Pancasila', 'border' => true, 'deskripsi' => 'Merefleksikan Pancasila sebagai nilai dan norma personal dalam konteks kehidupan bermasyarakat, berbangsa, dan bernegara', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
    ],
  ],
  [
    'kode' => 'CPL 4',
    'deskripsi' => 'Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan',
    'capaian_akhir' => '0',
    'ik' => [
      [
        'kode' => 'IK 4.1',
        'deskripsi' => 'Mampu melakukan presentasi yang efektif dalam bahasa Indonesia dan bahasa Inggris',
        'nilai' => '-',
        'label' => 'H',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK281 - <b>1</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu mengukur pH larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>2</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>3</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan besaran fisik gas', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>4</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan tetapan kesetimbangan termodinamika', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>5</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan sintesa senyawa-senyawa organik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>6</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan sintesa senyawa organik industrial', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>7</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan isolasi komponen-komponen bahan alam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>8</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun laporan praktikum kelompok', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>1</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan analisis kuantitatif dan melakukan perhitungan untuk menentukan kadar suatu zat', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>2</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan pemisahan dan mengidentifikasi zat-zat dalam campuran', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>3</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>4</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun peralatan serta menentukan besaran fisik gas', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>5</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan pengukuran besaran-besaran elektrokimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>1</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan aliran fluida dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>2</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan pengayakan dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>3</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan fluid mixing dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>4</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan filtrasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>5</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan sedimentasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>6</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan fluidisasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>7</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan kesetimbangan uap – cair dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>1</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan absorpsi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>2</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan ekstraksi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>3</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan distilasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>4</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan evaporasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>5</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan drying dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>6</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan heat-exchanger dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>7</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan pengendalian proses dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>8</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun laporan praktikum kelompok', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK585 - <b>1</b>', 'nama_mk' => 'Metodologi Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun proposal penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK585 - <b>2</b>', 'nama_mk' => 'Metodologi Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu mempresentasikan proposal penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>1</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>2</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>1</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>2</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>1</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>2</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI606 - <b>1</b>', 'nama_mk' => 'Bahasa Inggris', 'border' => true, 'deskripsi' => 'Menjelaskan isi buku teks dalam bahasa Inggris sesuai bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI606 - <b>2</b>', 'nama_mk' => 'Bahasa Inggris', 'border' => true, 'deskripsi' => 'Menulis paragraf dalam bahasa Inggris mengenai suatu topik dalam bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI606 - <b>3</b>', 'nama_mk' => 'Bahasa Inggris', 'border' => true, 'deskripsi' => 'Berbicara aktif mendeskripsikan profil diri sendiri dan suatu topik dalam bidang ilmu secara efektif dan impresif dengan bahasa Inggris', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI607 - <b>1</b>', 'nama_mk' => 'Kecakapan Komunikasi Ilmiah', 'border' => true, 'deskripsi' => 'Merefleksikan penggunaan Bahasa Indonesia sebagai identitas keindonesiaan dalam komunikasi lisan dan tulisan sehari-hari', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI607 - <b>2</b>', 'nama_mk' => 'Kecakapan Komunikasi Ilmiah', 'border' => true, 'deskripsi' => 'Menyusun tulisan dan melakukan presentasi  dalam konteks akademik yang runtut dan terstruktur serta memenuhi kaidah Pedoman Umum Ejaan Bahasa Indonesia, penulisan ilmiah, dan anti-plagiarisme.', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI607 - <b>3</b>', 'nama_mk' => 'Kecakapan Komunikasi Ilmiah', 'border' => true, 'deskripsi' => 'Memanfaatkan teknologi untuk yang menunjang penyusunan tulisan akademik seperti fitur perangkat lunak pengolah kata dan perangkat lunak sitasi manajemen', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
      [
        'kode' => 'IK 4.2',
        'deskripsi' => 'Mampu menulis ide/gagasan/laporan sesuai kaidah ilmiah dalam bahasa Indonesia dan bahasa Inggris',
        'nilai' => '-',
        'label' => 'H',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK281 - <b>1</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu mengukur pH larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>2</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>3</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan besaran fisik gas', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>4</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan tetapan kesetimbangan termodinamika', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>5</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan sintesa senyawa-senyawa organik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>6</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan sintesa senyawa organik industrial', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>7</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan isolasi komponen-komponen bahan alam', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK281 - <b>8</b>', 'nama_mk' => 'Praktikum Kimia Dasar dan Kimia Organik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun laporan praktikum kelompok', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>1</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan analisis kuantitatif dan melakukan perhitungan untuk menentukan kadar suatu zat', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>2</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan pemisahan dan mengidentifikasi zat-zat dalam campuran', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>3</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menentukan sifat-sifat fisik zat cair dan larutan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>4</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun peralatan serta menentukan besaran fisik gas', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK382 - <b>5</b>', 'nama_mk' => 'Praktikum Kimia Analitik dan Kimia Fisika', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melakukan pengukuran besaran-besaran elektrokimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>1</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan aliran fluida dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>2</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan pengayakan dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>3</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan fluid mixing dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>4</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan filtrasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>5</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan sedimentasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>6</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan fluidisasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK483 - <b>7</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 1', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan kesetimbangan uap – cair dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>1</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan absorpsi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>2</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan ekstraksi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>3</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan distilasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>4</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan evaporasi dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>5</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan drying dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>6</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan heat-exchanger dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>7</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mampu mengoperasikan peralatan pengendalian proses dan melakukan pengukuran variabel-variabel untuk menetapkan parameter unjuk kerja dan menyusun laporannya', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK584 - <b>8</b>', 'nama_mk' => 'Praktikum Operasi Teknik Kimia 2', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun laporan praktikum kelompok', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK585 - <b>1</b>', 'nama_mk' => 'Metodologi Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun proposal penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK585 - <b>2</b>', 'nama_mk' => 'Metodologi Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu mempresentasikan proposal penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>1</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>2</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>1</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>2</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>1</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>2</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'UNI606 - <b>1</b>', 'nama_mk' => 'Bahasa Inggris', 'border' => true, 'deskripsi' => 'Menjelaskan isi buku teks dalam bahasa Inggris sesuai bidang ilmu yang ditekuni', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
    ],
  ],
  [
    'kode' => 'CPL 5',
    'deskripsi' => 'Kemampuan merencanakan, menyelesaikan, dan mengevaluasi tugas di dalam batasan-batasan yang ada',
    'capaian_akhir' => '0',
    'ik' => [
      [
        'kode' => 'IK 5.1',
        'deskripsi' => 'Mampu merencanakan dan menyelesaikan tugas-tugas kurikuler (penelitian, kerja praktik, dan tugas akhir)',
        'nilai' => '-',
        'label' => 'H',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK686 - <b>1</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>2</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>1</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>2</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>1</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>2</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
      [
        'kode' => 'IK 5.2',
        'deskripsi' => 'Mampu mengevaluasi proses dan hasil tugas-tugas kurikuler',
        'nilai' => '-',
        'label' => 'H',
        'capaian' => '-',
        'cpmk' => [
          [ 'kode_mk' => 'STK686 - <b>1</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu melaksanakan penelitian dalam lingkup bidang ilmu teknik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK686 - <b>2</b>', 'nama_mk' => 'Penelitian', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan hasil penelitian dalam bentuk laporan dan seminar penelitian', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>1</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia di industri kimia dan menyelesaikan tugas khusus lapangan', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK752 - <b>2</b>', 'nama_mk' => 'Kerja Praktik', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan laporan akhir Kerja Praktik', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>1</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menerapkan pengetahuan teknik kimia untuk merancang pabrik kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
          [ 'kode_mk' => 'STK853 - <b>2</b>', 'nama_mk' => 'Tugas Pra-Rancangan Pabrik Kimia', 'border' => true, 'deskripsi' => 'Mahasiswa mampu menyusun dan mempresentasikan naskah tugas Pra-Rancangan Pabrik Kimia', 'nilai' => '-', 'label' => 'H', 'capaian' => '-' ],
        ],
      ],
    ],
  ],
];

// ------------------------------------------------------------
// 3. CONTROLLER SECTION
//    Halaman ini bersifat READ-ONLY (rekap/tampilan), tidak ada
//    aksi create/update/delete. Form pada "Modal Filter" (lihat
//    View Section) saat ini submit via GET tanpa diproses server
//    — belum ada percabangan $action.
//    Saat masuk Mode 3, tambahkan di sini misalnya:
//      $angkatan = $_GET['angkatan'] ?? '';
//      $status   = $_GET['status'] ?? '';
//      $rekap    = getRekapCplIndividu($pdo, $nim, [...]);
// ------------------------------------------------------------

// ------------------------------------------------------------
// 4. VIEW SECTION
//    HTML output: card filter, tab nav, tabel CPL/IK/CPMK, dan
//    modal (Filter, Bantuan, Preview Risiko, Detil Mahasiswa)
// ------------------------------------------------------------
?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <table class="table table-sm table-hover table-bordered table-striped deta">
                <tbody>
                  <tr>
                    <td width="30%"><b> Kurikulum</b></td>
                    <td>2023</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Set Pemetaan:</b></td>
                    <td>Peta v1.0</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Mahasiswa</b></td>
                    <td>VEGA AYU CENTYA (20521098)</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Angkatan</b></td>
                    <td>2024</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Status</b></td>
                    <td>Aktif</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-individual-.php'">
                  <i class="fas fa-reply me-1"></i> Kembali
                </button>
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-search me-1"></i> Pencarian
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>   
              </div>

            </div>
          </div>

        
  <!-- ========== CARD 3: KPI row ========== --> 
  <!-- <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
    .status-green { background:#28a745; }
    .status-yellow { background:#ffc107; }
    .status-red { background:#dc3545; }
    .ewstable td, .ewstable th { vertical-align: middle; }
    .table-fixed-height { max-height: 360px; overflow:auto; }
  </style>       
  <div class="row g-3 mb-3">
    <div class="col-md-3">
      <div class="kpi bg-primary">
        <div class="small">Rata-rata CPL</div>
        <div class="big" id="kpiAvg">75.2</div>
        <div class="small">dari 12 CPL</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi " style="background:#20c997;">
        <div class="small">Rata-rata IK</div>
        <div class="big" id="kpiGap">85 </div>
        <div class="small">dari 24 IK</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi" style="background:#ff7f0e;">
        <div class="small">Rata-rata CPMK</div>
        <div class="big" id="kpiReached">78</div>
        <div class="small">dari 258</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-danger">
        <div class="small">Rata-rata Nilai Akhir MK</div>
        <div class="big" id="kpiRisk">78</div>
        <div class="small">dari 78 MK</div>
      </div>
    </div>
  </div> -->


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail.php'"><a class="nav-link ">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail2.php'"><a class="nav-link active">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail4.php'"><a class="nav-link ">Riwayat CPL</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail3.php'"><a class="nav-link ">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail6.php'"><a class="nav-link "> KHS</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail7.php'"><a class="nav-link ">IPK</a></li> -->

  </ul>


<!-- ========== CARD 4:  Tabel CPL & Progress ========== --> 
<div id="tab_1">
  <div class="card " id="cardGrafik">
    <div class="card-header">              
      <h5 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i> Detail CPL</h5>
      <div class="card-tools">
        <small class="text-muted">klik nilai cpmk untuk melihat kelas perkuliahan</small>
        <button class="btn btn-sm btn-outline-primary" onclick="showTabel()">
          Versi Sederhana
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered table-striped deta">
          <thead class="table-dark text-center">
            <tr align="center" class="bg-bllg">
              <th rowspan="2" style="vertical-align: middle; width: 55px;">CPL</th>
              <th rowspan="2" style="vertical-align: middle; width: 55px;">IK</th>
              <th rowspan="2" colspan="3" style="vertical-align: middle;">CPMK</th>
              <th colspan="3" style="vertical-align: middle;">CPMK</th>
              <th colspan="3" style="vertical-align: middle;">IK</th>
              <th rowspan="2" style="vertical-align: middle;">Capaian Akhir</th>
            </tr>
            <tr align="center" class="bg-bllg">
              <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Bobot</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Nilai</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Bobot</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
            </tr>
          </thead>
                    <tbody>
<?php foreach ($dataCpl as $cpl): ?>
            <tr>
              <td align="center"><?= $cpl['kode'] ?></td>
              <td colspan="4"><?= $cpl['deskripsi'] ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td align="center"><b><?= $cpl['capaian_akhir'] ?></b></td>
            </tr>
<?php foreach ($cpl['ik'] as $ik): ?>
            <tr>
              <td></td>
              <td align="center"><?= $ik['kode'] ?></td>
              <td colspan="3"><?= $ik['deskripsi'] ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td align="center"><b><?= $ik['nilai'] ?></b></td>
              <td align="center"><b><?= $ik['label'] ?></b></td>
              <td align="center"><b><?= $ik['capaian'] ?></b></td>
              <td></td>
            </tr>
<?php foreach ($ik['cpmk'] as $c): $borderStyle = $c['border'] ? ' style="border-left: 3px solid #2d5f8b;"' : ''; ?>
            <tr>
              <td></td>
              <td></td>
              <td><?= $c['kode_mk'] ?></td>
              <td<?= $borderStyle ?>><?= $c['nama_mk'] ?></td>
              <td style="max-width: 300px;"><?= $c['deskripsi'] ?></td>
              <td align="center"><?= $c['nilai'] ?></td>
              <td align="center"><b><?= $c['label'] ?></b></td>
              <td align="center"><?= $c['capaian'] ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



<!-- ========== CARD 4:  Tabel CPL & Progress ========== --> 
<div id="tab_1">
  <div class="card d-none" id="cardTabel">
    <div class="card-header">              
      <h5 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i> Detail CPL</h5>
      <div class="card-tools">
        <small class="text-muted">klik nilai cpmk untuk melihat kelas perkuliahan</small>
        <button class="btn btn-sm btn-outline-primary" onclick="showGrafik()">
          Versi Komprehensif
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-bordered deta">
            <thead class="table-dark text-center">
            <tr align="center" class="bg-bllg">
              <tr align="center" class="bg-bllg">
              <th class="pl-2 pr-2" colspan="4" style="vertical-align: middle;">Deskripsi</th>
              <th class="pl-2 pr-2" colspan="3" style="vertical-align: middle;">Capaian</th>
            <!-- </tr>
              <th rowspan="1" style="vertical-align: middle; width: 55px;">CPL</th>
              <th rowspan="1" style="vertical-align: middle; width: 55px;">IK</th>
              <th rowspan="1" colspan="2" style="vertical-align: middle;">CPMK</th>
              <th colspan="1" style="vertical-align: middle;">CPMK</th>
              <th colspan="1" style="vertical-align: middle;">IK</th>
              <th rowspan="1" style="vertical-align: middle;">CPL</th>
            </tr> -->
            <!-- <tr align="center" class="bg-bllg">
              <th class="pl-2 pr-2" style="vertical-align: middle;">Deskripsi</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Deskripsi</th>
              <th class="pl-2 pr-2" colspan="2" style="vertical-align: middle;">Deskripsi</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
              <th class="pl-2 pr-2" style="vertical-align: middle;">Capaian</th>
            </tr> -->
          </thead>
          <tbody>
             <tr class="table-success">
              <td><b>CPL 1</b></td>
              <td colspan="5">Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas) pada setiap peran yang dijalani, baik di industri kimia maupun masyarakat umum</td>
              <!-- <td></td>
              <td></td> -->
              <td rowspan="11" align="right"><b>61,26</b></td>
            </tr>
              <tr >
                <td></td>
                <td><b>IK.1.1</b></td>
                <td colspan="3">Mempunyai pengetahuan Islam meliputi ibadah, muamalah dan sejarahnya. Mempunyai pengetahuan Islam meliputi ibadah, muamalah dan sejarahnya.</td>
                <td rowspan="6" align="center">86,89</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>UNI600-1</b><br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td colspan="1">Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                <!-- <td></td> -->
                <td align="center">-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>UNI600-2</b><br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari</td>
                <td align="center">90</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>UNI600-3</b><br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                <td align="center">21,5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>UNI600-4</b><br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Mengidentifikasi nilai-nilai kebaikan dan etika universal dalam ajaran Islam</td>
                <td align="center">84</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>STE123-5</b><br><small><span class="badge badge-info">Fisika 1</small></span></td>
                <td>Mahasiswa mampu melaksanakan eksperimen laboratorium yang terkait dengan materi mekanika gerak, dinamika gerak, dan fluida</td>
                <!-- <td></td> -->
                <td align="center">-</td>
              </tr>

              <tr>
                <td></td>
                <td>IK.1.2</td>
                <td colspan="3">Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
                <td align="center" rowspan="4">5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td style="white-space: nowrap;">UNI600-1 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                <td align="center">10</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-5 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman</td>
                <td align="center">-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>STE123-1 <br><small><span class="badge badge-info">Fisika 1</small></span></td>
                <td>Mahasiswa mampu menyelesaikan permasalahan yang terkait dengan mekanika gerak</td>
                <td align="center">-</td>
              </tr>



<tr class="table-success">
              <!-- <td align="center"></td> -->
              <td colspan="6">CPL 2 |  Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas) pada setiap peran yang dijalani, baik di industri kimia maupun masyarakat umum</td>
              <!-- <td></td>
              <td></td> -->
              <td rowspan="11" align="center"><b>61,26</b></td>
            </tr>
              <tr >
                <td></td>
                <td colspan="4"><b>IK.1.1 </b>| Mempunyai pengetahuan Islam meliputi ibadah, muamalah dan sejarahnya. Mempunyai pengetahuan Islam meliputi ibadah, muamalah dan sejarahnya.</td>
                <td rowspan="6" align="center">86,89</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td colspan="2"><b>UNI600-1</b> | Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis<br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <!-- <td></td> -->
                <td align="center">-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-2 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari</td>
                <td align="center">90</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-3 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                <td align="center">21,5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-4 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Mengidentifikasi nilai-nilai kebaikan dan etika universal dalam ajaran Islam</td>
                <td align="center">84</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td colspan="2"><b>STE123-5</b> | Mahasiswa mampu melaksanakan eksperimen laboratorium yang terkait dengan materi mekanika gerak, dinamika gerak, dan fluida<br><small><span class="badge badge-info">Fisika 1</small></span></td>
                <!-- <td></td> -->
                <td align="center">-</td>
              </tr>

              <tr>
                <td></td>
                <td colspan="4"><b>IK.1.2</b> | Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
                <td align="center" rowspan="4">5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td style="white-space: nowrap;">UNI600-1 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                <td align="center">10</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-5 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman</td>
                <td align="center">-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>STE123-1 <br><small><span class="badge badge-info">Fisika 1</small></span></td>
                <td>Mahasiswa mampu menyelesaikan permasalahan yang terkait dengan mekanika gerak</td>
                <td align="center">-</td>
              </tr>


<tr class="table-success">
              <!-- <td align="center">CPL 3</td> -->
              <td colspan="6">CPL 3 | Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami (jujur, disiplin, tanggung jawab, dan kerja cerdas) pada setiap peran yang dijalani, baik di industri kimia maupun masyarakat umum</td>

              <td rowspan="11" align="center"><b>57,26</b></td>
            </tr>
              <tr >
                <td></td>
                <td colspan="4">IK.1.1 Memahami dinul Islam serta pemikiran dan peradaban umat Islam</td>
                <td rowspan="6" align="center">86,89</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-1 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                <td>-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-2 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menunjukkan sikap ketakwaan dengan menjalankan syariat-Nya dalam kehidupan sehari-hari</td>
                <td align="center">90</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-3 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesadaran personal sebagai Mukmin, Muslim, dan Muhsin</td>
                <td align="center">21,5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-4 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Mengidentifikasi nilai-nilai kebaikan dan etika universal dalam ajaran Islam</td>
                <td align="center">84</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-5 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesesuaian perilaku pribadi dengan nilai-nilai keislaman</td>
                <td align="center">-</td>
              </tr>

              <tr>
                <td></td>
                <td colspan="4">IK.1.2 Menunjukkan perilaku Islami pada setiap peran yang dijalani</td>
                <td align="center" rowspan="4">5</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td style="white-space: nowrap;">UNI600-1 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Menjelaskan konsep fitrah manusia dan hidayah sesuai Al-Qur’an dan Hadis</td>
                <td align="center">10</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI600-5 <br><small><span class="badge badge-primary">Pendidikan Agama Islam</small></span></td>
                <td>Merefleksikan kesesuaian perilaku pribadi keseharian dengan nilai-nilai keislaman</td>
                <td align="center">-</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>UNI601-1 <br><small><span class="badge badge-primary">Islam Ulil Albab</small></span></td>
                <td>Menjelaskan konsep insan ulil albab berdasarkan Al-Quran dan hadits</td>
                <td align="center">-</td>
              </tr>





            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>








        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php
// (lanjutan VIEW SECTION) include layout shell footer, lalu
// definisi Modal (Filter, Bantuan, Preview Risiko, Detil Mahasiswa)
include('4footer.php');
?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


  <!-- Modal: Preview Risk Performance -->
  <div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Preview Performa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>CPL-01</td><td>lorem ipsum</td><td>61 </td></tr>
              <tr><td>2</td><td>CPL-04</td><td>lorem ipsum</td><td>48 </td></tr>
              <tr><td>3</td><td>CPL-06</td><td>Contoh Lain</td><td>45 </td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Show single student (on clicking min/max) -->
  <div class="modal fade" id="modalStudent" tabindex="-1" aria-labelledby="modalStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate me-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="stuNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="stuName">-</dd>
            <dt class="col-5">Jenis</dt><dd class="col-7" id="stuType">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="stuValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

<!-- ============================================================
     5. CLIENT SCRIPT SECTION
     ============================================================ -->
<script>
function showTabel() {
  document.getElementById('cardGrafik').classList.add('d-none');
  document.getElementById('cardTabel').classList.remove('d-none');
}

function showGrafik() {
  document.getElementById('cardTabel').classList.add('d-none');
  document.getElementById('cardGrafik').classList.remove('d-none');
}
</script>

<?php
// include('5script.php') memuat shared JS project (jQuery, Bootstrap,
// DataTables, dsb.) — WAJIB tetap di posisi akhir file ini agar urutan
// load script tidak berubah dan relasi dengan layout shell
// (1header/2navbar/3sidebar/4footer) tetap konsisten dengan seluruh
// screen lain di project ini.
include('5script.php');
?>
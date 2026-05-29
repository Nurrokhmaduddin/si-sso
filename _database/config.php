<?php
// config.php — improved

// Development: aktifkan sementara agar pesan error muncul (matikan di production)
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Zona waktu & session
date_default_timezone_set('Asia/Jakarta');
session_start();

// Debug flag (set false di production)
define('APP_DEBUG', true);

// Ambil credential dari ENV jika tersedia (lebih aman), fallback ke nilai lama
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'usr_accounting_pttmi_id';
$db_pass = getenv('DB_PASS') ?: '4CCountIng2025';
$db_name = getenv('DB_NAME') ?: 'accounting_pttmi_id';

// Set mysqli untuk melempar exception sehingga kita bisa catch error dengan jelas
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // Pastikan charset ter-set
    mysqli_set_charset($con, 'utf8mb4');
} catch (mysqli_sql_exception $e) {
    if (APP_DEBUG) {
        // Tampilkan pesan lengkap saat development
        die('Database connection error: ' . $e->getMessage());
    } else {
        // Log dan tampilkan pesan generik ke user
        error_log('DB connect error: ' . $e->getMessage());
        die('Database connection error. Silakan hubungi administrator.');
    }
}

// Cookie handling — validasi jumlah bagian cookie sebelum dipakai
if (isset($_COOKIE['___ACCOUNTING_PTTMI___'])) {
    $cookie = $_COOKIE['___ACCOUNTING_PTTMI___'];
    $cookieData = explode('|', $cookie);
    if (count($cookieData) >= 4) {
        // sanitize untuk menghindari XSS jika nanti ditampilkan
        $_SESSION['username'] = htmlspecialchars($cookieData[0], ENT_QUOTES, 'UTF-8');
        $_SESSION['Id']       = htmlspecialchars($cookieData[1], ENT_QUOTES, 'UTF-8');
        $_SESSION['nama']     = htmlspecialchars($cookieData[2], ENT_QUOTES, 'UTF-8');
        $_SESSION['status']   = htmlspecialchars($cookieData[3], ENT_QUOTES, 'UTF-8');
    } else {
        // cookie rusak/tampered — hapus cookie untuk menghindari masalah
        setcookie('___ACCOUNTING_PTTMI___', '', time() - 3600, '/', '', true, true);
    }
}

// Improved base_url: menghindari double slash
function base_url($url = '') {
    $base = 'https://accounting.pttmi.id';
    $url = ltrim($url, '/');
    return rtrim($base, '/') . ($url !== '' ? '/' . $url : '');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSO v4 | CDN Version</title>

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Bootstrap 4 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AdminLTE CSS (v3, didesain untuk Bootstrap 4) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

<!-- Polyfill utility gap-* (tidak ada di Bootstrap 4 native) -->
<style>
  .gap-1 > * + * { margin-left: .25rem; }
  .gap-2 > * + * { margin-left: .5rem; }
  .gap-3 > * + * { margin-left: 1rem; }
  .flex-column.gap-1 > * + * { margin-left: 0; margin-top: .25rem; }
  .flex-column.gap-2 > * + * { margin-left: 0; margin-top: .5rem; }
  .flex-column.gap-3 > * + * { margin-left: 0; margin-top: 1rem; }
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
$q = $_SERVER['QUERY_STRING'] ?? '';
// atau rebuild dari $_GET:
$q = !empty($_GET) ? '?'.http_build_query($_GET) : '';
?>

<?php 
// Ambil peran 
$role = isset($_GET['peran']) && $_GET['peran'] !== '' ? ucfirst($_GET['peran']) : 'SuperAdmin'; 
// Ambil seluruh query string (peran & data lain) 
$q = $_SERVER['QUERY_STRING']; 
$q = $q ? "?$q" : ""; 
?>
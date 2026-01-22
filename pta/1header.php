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

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AdminLTE CSS (v3 tetap bisa dipakai, tapi JS harus diubah nanti) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Custom Style -->
  <style>
    :root {
      --card-radius: 12px;
      --accent: #0d6efd;
      --soft-bg: #f8f9fa;
      --badge-bg: #eef6ff;
    }

    body {
      background: linear-gradient(180deg, #f4f7fb 0%, #ffffff 60%);
      font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      padding: 24px;
    }

    .card {
      border-radius: var(--card-radius);
      box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
    }

    .role-tag {
      font-size: 0.85rem;
      padding: 4px 10px;
      border-radius: 999px;
      background: var(--badge-bg);
      color: #0b5ed7;
      font-weight: 600;
    }

    .xp-bar {
      height: 10px;
      border-radius: 999px;
      background: #e9eef9;
    }

    .xp-fill {
      height: 100%;
      border-radius: 999px;
      background: linear-gradient(90deg, #6ea8fe, #0d6efd);
    }

    .icon-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: #f0f6ff;
      color: #0d6efd;
    }

    .status-circle {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #fff;
      font-size: 1.5rem;
      margin: 0 auto 0.5rem;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .status-circle:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .badge-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 10px;
      border-radius: 999px;
      background: #fff;
      border: 1px solid #eef2ff;
      font-weight: 600;
      font-size: 0.85rem;
      box-shadow: 0 2px 6px rgba(13, 110, 253, 0.04);
    }
  </style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
$q = $_SERVER['QUERY_STRING'] ?? '';
// atau rebuild dari $_GET:
$q = !empty($_GET) ? '?'.http_build_query($_GET) : '';

?>
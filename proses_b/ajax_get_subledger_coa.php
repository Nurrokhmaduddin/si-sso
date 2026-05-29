<?php
/**
 * ajax_get_subledger_coa.php
 * GET: ?subledger_types=customer,vendor
 * Response: [ {id, label, saldo_normal}, ... ]
 */
header('Content-Type: application/json');
include('koneksi.php');

$raw   = trim($_GET['subledger_types'] ?? '');
$types = array_filter(array_map('trim', explode(',', $raw)));

if (empty($types)) {
    echo json_encode(['status'=>'empty','rows'=>[]]);
    exit;
}

// Whitelist — hanya huruf, angka, underscore
$types = array_filter($types, fn($t) => preg_match('/^[a-zA-Z0-9_]+$/', $t));

if (empty($types)) {
    echo json_encode(['status'=>'invalid','rows'=>[]]);
    exit;
}

$inClause = "'" . implode("','", array_map(
    fn($t) => mysqli_real_escape_string($conn, $t),
    $types
)) . "'";

$sql = "
    SELECT id, kode_akun, nama_akun, saldo_normal, subledger_type
    FROM coa
    WHERE subledger_type IN ({$inClause})
      AND status = 'ACTIVE'
    ORDER BY kode_akun ASC
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode(['status'=>'db_error','message'=>mysqli_error($conn),'rows'=>[]]);
    exit;
}

$rows = [];
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = [
        'id'           => $r['id'],
        'saldo_normal' => $r['saldo_normal'],    // ← dipakai JS untuk tampilkan badge
        'label'        => $r['kode_akun']
                          . ' — ' . $r['nama_akun']
                          . ' (' . $r['saldo_normal'] . ')',
    ];
}

echo json_encode(['status'=>'ok','rows'=>$rows]);

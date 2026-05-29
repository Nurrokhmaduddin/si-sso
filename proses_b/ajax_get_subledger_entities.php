<?php
/**
 * ajax_get_subledger_entities.php
 * Endpoint AJAX — kembalikan daftar entitas berdasarkan mode subledger
 * GET: ?mode=ar | ?mode=ap | ?mode=cash | dll
 */
header('Content-Type: application/json');
include('koneksi.php');

$mode = trim($_GET['mode'] ?? '');

$modeConfig = [
    'ar'          => ['table'=>'customers',   'code'=>'customer_code',  'name'=>'customer_name',  'active'=>true],
    'ap'          => ['table'=>'vendors',     'code'=>'vendor_code',    'name'=>'vendor_name',    'active'=>true],
    'cash'        => ['table'=>'cash',        'code'=>'code',           'name'=>'description',    'active'=>false],
    'employee'    => ['table'=>'employees',   'code'=>'employee_code',  'name'=>'employee_name',  'active'=>true],
    'inventory'   => ['table'=>'products',    'code'=>'product_code',   'name'=>'product_name',   'active'=>true],
    'fixed_asset' => ['table'=>'fixed_assets','code'=>'asset_code',     'name'=>'asset_name',     'active'=>true],
    'investor'    => ['table'=>'investors',   'code'=>'investor_code',  'name'=>'investor_name',  'active'=>true],
];

if (!$mode || !array_key_exists($mode, $modeConfig)) {
    echo json_encode(['status'=>'not_found','rows'=>[]]);
    exit;
}

$cfg      = $modeConfig[$mode];
$table    = mysqli_real_escape_string($conn, $cfg['table']);
$colCode  = mysqli_real_escape_string($conn, $cfg['code']);
$colName  = mysqli_real_escape_string($conn, $cfg['name']);
$where    = $cfg['active'] ? 'WHERE is_active = 1' : '';

$sql    = "SELECT id, `{$colCode}` AS code, `{$colName}` AS name FROM `{$table}` {$where} ORDER BY `{$colName}` ASC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode(['status'=>'db_error','message'=>mysqli_error($conn),'rows'=>[]]);
    exit;
}

$rows = [];
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = ['id' => $r['id'], 'label' => $r['code'] . ' — ' . $r['name']];
}

echo json_encode(['status'=>'ok','rows'=>$rows]);

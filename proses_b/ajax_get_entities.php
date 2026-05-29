<?php
/**
 * ajax_get_entities.php
 * 
 * AJAX endpoint — kembalikan daftar entity berdasarkan entity_type
 * yang dipilih di kolom Journal Detail.
 * 
 * GET params:
 *   ?entity_type=customer   → ambil dari tabel customers
 *   ?entity_type=vendor     → ambil dari tabel vendors
 *   (tipe lain)             → kembalikan array kosong
 * 
 * Response: JSON array [ {id, label}, ... ]
 */

header('Content-Type: application/json');

include('koneksi.php');

$type = isset($_GET['entity_type']) ? trim($_GET['entity_type']) : '';

$rows = [];

// ── MAP: entity_type → tabel & kolom ─────────────────────────
//
// Pola kolom:
//   id        → selalu kolom PK bernama `id`
//   code      → kolom kode (opsional, untuk label)
//   name      → kolom nama utama
//   table     → nama tabel
//
// Untuk tipe yang belum punya tabel dedicated,
// entity_id akan dikosongkan (disabled).
// ─────────────────────────────────────────────────────────────

$entityMap = [

    // ── SUDAH ADA TABEL DEDICATED ──────────────────────────
    'customer'    => ['table' => 'customers',  'code' => 'customer_code', 'name' => 'customer_name'],
    'vendor'      => ['table' => 'vendors',    'code' => 'vendor_code',   'name' => 'vendor_name'],
    'cash'      => ['table' => 'cash',    'code' => 'code',   'name' => 'description'],

    // ── TABEL LAIN — sesuaikan nama tabel & kolom Anda ─────
    // Aktifkan baris di bawah ini setelah tabel tersedia.
    // 'employee'    => ['table' => 'employees',   'code' => 'employee_code', 'name' => 'employee_name'],
    // 'bank'        => ['table' => 'banks',        'code' => 'bank_code',     'name' => 'bank_name'],
    // 'inventory'   => ['table' => 'products',     'code' => 'product_code',  'name' => 'product_name'],
    // 'warehouse'   => ['table' => 'warehouses',   'code' => 'warehouse_code','name' => 'warehouse_name'],
    // 'asset'       => ['table' => 'fixed_assets', 'code' => 'asset_code',    'name' => 'asset_name'],
    // 'vehicle'     => ['table' => 'vehicles',     'code' => 'vehicle_code',  'name' => 'vehicle_name'],
    // 'investor'    => ['table' => 'investors',    'code' => 'investor_code', 'name' => 'investor_name'],
    // 'project'     => ['table' => 'projects',     'code' => 'project_code',  'name' => 'project_name'],
    // 'branch'      => ['table' => 'branches',     'code' => 'branch_code',   'name' => 'branch_name'],
    // 'division'    => ['table' => 'divisions',    'code' => 'division_code', 'name' => 'division_name'],
    // 'tax'         => ['table' => 'taxes',         'code' => 'tax_code',      'name' => 'tax_name'],
    // 'loan'        => ['table' => 'loans',         'code' => 'loan_code',     'name' => 'loan_name'],
    // 'insurance'   => ['table' => 'insurances',   'code' => 'insurance_code','name' => 'insurance_name'],
    // 'expense_claim'=> ['table' => 'expense_claims','code'=> 'claim_code',   'name' => 'claim_title'],
    // 'fixed_asset' => ['table' => 'fixed_assets', 'code' => 'asset_code',    'name' => 'asset_name'],
    // 'currency'    => ['table' => 'currencies',   'code' => 'currency_code', 'name' => 'currency_name'],
    // 'fund'        => ['table' => 'funds',         'code' => 'fund_code',     'name' => 'fund_name'],
    // 'partner'     => ['table' => 'partners',     'code' => 'partner_code',  'name' => 'partner_name'],
    // 'member'      => ['table' => 'members',      'code' => 'member_code',   'name' => 'member_name'],
    // 'student'     => ['table' => 'students',     'code' => 'student_code',  'name' => 'full_name'],
    // 'patient'     => ['table' => 'patients',     'code' => 'patient_code',  'name' => 'patient_name'],
    // 'donor'       => ['table' => 'donors',       'code' => 'donor_code',    'name' => 'donor_name'],
    // 'grant'       => ['table' => 'grants',       'code' => 'grant_code',    'name' => 'grant_name'],
    // 'unit'        => ['table' => 'units',         'code' => 'unit_code',     'name' => 'unit_name'],
    // 'department'  => ['table' => 'departments',  'code' => 'dept_code',     'name' => 'dept_name'],
];

// ── Tipe yang tidak butuh entity_id (tidak ada subledger) ───
$noEntityTypes = [];  // kas tidak perlu pilih entity

if (empty($type) || in_array($type, $noEntityTypes)) {
    echo json_encode([
        'status'  => 'no_entity',
        'message' => 'Tipe ini tidak memerlukan entity.',
        'rows'    => []
    ]);
    exit;
}

// ── Cek apakah tipe ada di map ───────────────────────────────
if (!array_key_exists($type, $entityMap)) {
    echo json_encode([
        'status'  => 'not_mapped',
        'message' => "Tipe '$type' belum memiliki tabel terdaftar.",
        'rows'    => []
    ]);
    exit;
}

// ── Query data ───────────────────────────────────────────────
$map   = $entityMap[$type];
$table = $map['table'];
$col_code = $map['code'];
$col_name = $map['name'];

// Escape nama tabel & kolom (tidak pakai prepared statement
// karena ini string identifier, bukan nilai user)
$table    = mysqli_real_escape_string($conn, $table);
$col_code = mysqli_real_escape_string($conn, $col_code);
$col_name = mysqli_real_escape_string($conn, $col_name);

$sql = "SELECT id, `$col_code` AS code, `$col_name` AS name
        FROM `$table`
        WHERE is_active = 1
        ORDER BY `$col_name` ASC";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode([
        'status'  => 'db_error',
        'message' => mysqli_error($conn),
        'rows'    => []
    ]);
    exit;
}

while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = [
        'id'    => $r['id'],
        'label' => $r['code'] . ' — ' . $r['name']
    ];
}

echo json_encode([
    'status'  => 'ok',
    'type'    => $type,
    'message' => '',
    'rows'    => $rows
]);

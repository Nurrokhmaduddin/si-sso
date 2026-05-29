<?php
/**
 * ajax_journal_engine.php
 * AJAX endpoint khusus untuk config-journal-engine.php
 * Dipanggil via fetch() dari JS — TIDAK include header/navbar/footer
 */

// Pastikan output JSON bersih — tidak ada HTML sama sekali
header('Content-Type: application/json');

// Tangkap semua output tak terduga (warning, notice, dll)
// agar tidak merusak JSON response
ob_start();

include('koneksi.php');

$input  = json_decode(file_get_contents('php://input'), true);
$action = $input['action'] ?? '';

/* ============================================================
   HELPER: kirim JSON dan stop
============================================================ */
function sendJson($data) {
    ob_clean(); // buang semua output sebelumnya (warning/notice PHP)
    echo json_encode($data);
    exit;
}

/* ============================================================
   ACTION: get_rule_detail
   Ambil header rule + journal lines + semua COA aktif
============================================================ */
if ($action === 'get_rule_detail') {

    $ruleId = (int)($input['rule_id'] ?? 0);

    if ($ruleId <= 0) {
        sendJson(['status' => 'error', 'message' => 'Rule ID tidak valid.']);
    }

    // ── Header rule ───────────────────────────────────────
    $stmtRule = $conn->prepare("
        SELECT
            ar.id,
            ar.rule_code,
            ar.rule_name,
            ar.description,
            ar.auto_post,
            ar.is_active,
            be.event_code,
            be.event_name,
            be.module_name,
            be.source_table,
            be.description AS event_desc
        FROM accounting_rules ar
        JOIN business_events be ON be.id = ar.business_event_id
        WHERE ar.id = ?
        LIMIT 1
    ");

    if (!$stmtRule) {
        sendJson(['status' => 'error', 'message' => 'Prepare failed: ' . $conn->error]);
    }

    $stmtRule->bind_param('i', $ruleId);
    $stmtRule->execute();
    $rule = $stmtRule->get_result()->fetch_assoc();

    if (!$rule) {
        sendJson(['status' => 'error', 'message' => 'Rule tidak ditemukan.']);
    }

    // ── Journal lines + current COA mapping ──────────────
    $stmtLines = $conn->prepare("
        SELECT
            ard.id              AS detail_id,
            ard.line_no,
            ard.entry_position,
            ard.account_role_code,
            ard.amount_source,
            ard.description     AS line_desc,
            arm.id              AS mapping_id,
            arm.coa_id,
            c.kode_akun,
            c.nama_akun,
            c.saldo_normal,
            c.tipe_akun
        FROM accounting_rule_details ard
        LEFT JOIN account_role_mapping arm
               ON arm.account_role_code = ard.account_role_code
        LEFT JOIN coa c ON c.id = arm.coa_id
        WHERE ard.accounting_rule_id = ?
        ORDER BY ard.line_no ASC
    ");

    if (!$stmtLines) {
        sendJson(['status' => 'error', 'message' => 'Prepare lines failed: ' . $conn->error]);
    }

    $stmtLines->bind_param('i', $ruleId);
    $stmtLines->execute();
    $lines = $stmtLines->get_result()->fetch_all(MYSQLI_ASSOC);

    // ── Semua COA aktif untuk dropdown ───────────────────
    $qCoa  = mysqli_query($conn,
        "SELECT id, kode_akun, nama_akun, tipe_akun, saldo_normal
         FROM coa
         WHERE status = 'ACTIVE'
         ORDER BY kode_akun ASC"
    );

    $allCoa = [];
    while ($r = mysqli_fetch_assoc($qCoa)) $allCoa[] = $r;

    sendJson([
        'status' => 'ok',
        'rule'   => $rule,
        'lines'  => $lines,
        'coa'    => $allCoa,
    ]);
}

/* ============================================================
   ACTION: update_role_mapping
   Update coa_id di account_role_mapping berdasarkan mapping_id
============================================================ */
if ($action === 'update_role_mapping') {

    $mappingId = (int)($input['mapping_id'] ?? 0);
    $newCoaId  = (int)($input['coa_id']     ?? 0);

    if ($mappingId <= 0 || $newCoaId <= 0) {
        sendJson(['status' => 'error', 'message' => 'mapping_id atau coa_id tidak valid.']);
    }

    // Cek mapping_id ada
    $stmtCheck = $conn->prepare(
        "SELECT id, account_role_code FROM account_role_mapping WHERE id = ? LIMIT 1"
    );
    $stmtCheck->bind_param('i', $mappingId);
    $stmtCheck->execute();
    $existingRow = $stmtCheck->get_result()->fetch_assoc();

    if (!$existingRow) {
        sendJson(['status' => 'error', 'message' => 'Mapping ID tidak ditemukan di database.']);
    }

    // Update
    $stmtUpd = $conn->prepare(
        "UPDATE account_role_mapping SET coa_id = ? WHERE id = ?"
    );
    $stmtUpd->bind_param('ii', $newCoaId, $mappingId);
    $stmtUpd->execute();

    // Ambil data COA baru untuk response
    $stmtCoa = $conn->prepare(
        "SELECT kode_akun, nama_akun, saldo_normal, tipe_akun FROM coa WHERE id = ? LIMIT 1"
    );
    $stmtCoa->bind_param('i', $newCoaId);
    $stmtCoa->execute();
    $coaRow = $stmtCoa->get_result()->fetch_assoc();

    sendJson([
        'status'       => 'ok',
        'message'      => 'Mapping berhasil diupdate.',
        'kode_akun'    => $coaRow['kode_akun']   ?? '',
        'nama_akun'    => $coaRow['nama_akun']   ?? '',
        'saldo_normal' => $coaRow['saldo_normal'] ?? '',
        'tipe_akun'    => $coaRow['tipe_akun']   ?? '',
    ]);
}

/* ============================================================
   Action tidak dikenal
============================================================ */
sendJson(['status' => 'error', 'message' => "Action '{$action}' tidak dikenal."]);

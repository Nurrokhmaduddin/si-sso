<?php
include 'koneksi.php';

mysqli_begin_transaction($conn);

try {

    // =========================
    // 1. HEADER DATA
    // =========================
    $journal_no     = $_POST['journal_no'];
    $journal_date   = $_POST['journal_date'];
    $journal_type   = $_POST['journal_type'];
    // $reference_type = $_POST['reference_type'];
    $reference_no   = $_POST['reference_no'];
    $description    = $_POST['description'];
    $source_module  = $_POST['source_module'];

    $branch_id      = $_POST['header_branch_id'] ?? null;
    $project_id     = $_POST['pheader_roject_id'] ?? null;

    // INSERT HEADER
    $stmt = $conn->prepare("
        INSERT INTO journal_headers 
        (journal_no, transaction_date, transaction_type, reference_no, memo, branch_id, project_id,source_module)
        VALUES (?, ?, ?, ?, ?, ?, ?,?)
    ");

    $stmt->bind_param(
       "sssssiis",
        $journal_no,
        $journal_date,
        $journal_type,
        // $reference_type,
        $reference_no,
        $description,
        // $source_module,
        $branch_id,
        $project_id,
        $source_module
    );

    $stmt->execute();

    $journal_header_id = $stmt->insert_id;

    // =========================
    // 2. DETAIL DATA
    // =========================
    $coa_id      = $_POST['coa_id'];
    $line_memo   = $_POST['line_memo'];
    $debit       = $_POST['debit'];
    $credit      = $_POST['credit'];
    $d_branch    = $_POST['branch_id'];
    $d_project   = $_POST['project_id'];
    $entity_type = $_POST['entity_type'];
    $entity_id   = $_POST['entity_id'];

    $stmtDetail = $conn->prepare("
        INSERT INTO journal_details
        (journal_header_id, coa_id, line_memo, debit, credit, branch_id, project_id, entity_type, entity_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    for ($i = 0; $i < count($coa_id); $i++) {

        $stmtDetail->bind_param(
            "iisddiisi",
            $journal_header_id,
            $coa_id[$i],
            $line_memo[$i],
            $debit[$i],
            $credit[$i],
            $d_branch[$i],
            $d_project[$i],
            $entity_type[$i],
            $entity_id[$i]
        );

        $stmtDetail->execute();
    }

    // =========================
    // SUCCESS
    // =========================
    mysqli_commit($conn);

    echo "<script>
        alert('Journal berhasil disimpan!');
        window.location.href='journal.php';
    </script>";

} catch (Exception $e) {

    mysqli_rollback($conn);

    echo "Error: " . $e->getMessage();
}
?>
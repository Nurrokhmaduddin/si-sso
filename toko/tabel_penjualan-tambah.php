<?php
if(isset($_POST['submit_penjualan'])){
    include('koneksi.php'); // koneksi database

    $customer_id = $_POST['customer_id'];
    $tipe_bayar  = $_POST['tipe_bayar'];
    $keterangan  = $_POST['keterangan'];
    $user_id     = 3; // contoh user

    $tanggal = date('Y-m-d');
    $periode = date('F Y');

    // 1. Insert ke tabel penjualan
    $insert_penjualan = mysqli_query($conn, "INSERT INTO penjualan (customer_id, tanggal, tipe_bayar, keterangan, periode, user_id) 
                                            VALUES ('$customer_id', '$tanggal', '$tipe_bayar', '$keterangan', '$periode', '$user_id')");
    $penjualan_id = mysqli_insert_id($conn);

    // 2. Insert ke tabel penjualan_detail
    $produk_ids = $_POST['produk_id'];
    $qtys      = $_POST['qty'];
    $hargas    = $_POST['harga'];

    foreach($produk_ids as $i => $produk_id){
        $qty   = $qtys[$i];
        $harga = $hargas[$i];
        $subtotal = $qty * $harga;

        mysqli_query($conn, "INSERT INTO penjualan_detail (penjualan_id, produk_id, qty, harga_satuan, subtotal) 
                             VALUES ('$penjualan_id', '$produk_id', '$qty', '$harga', '$subtotal')");
    }

    // 3. Jika tipe bayar kredit, buat jurnal otomatis
    if($tipe_bayar == 'Kredit'){
        // contoh akun: 101 = Piutang Dagang, 401 = Pendapatan
        $no_ref = 'PJ-' . str_pad($penjualan_id, 3, '0', STR_PAD_LEFT);
        mysqli_query($conn, "INSERT INTO jurnal (tanggal, no_ref, tipe_jurnal, keterangan, periode) 
                             VALUES ('$tanggal', '$no_ref', 'Penjualan', '$keterangan', '$periode')");
        $jurnal_id = mysqli_insert_id($conn);

        mysqli_query($conn, "INSERT INTO jurnal_detail (jurnal_id, coa_id, debit, kredit, customer_id, user_id) 
                             VALUES ('$jurnal_id', 101, ".array_sum($qtys*$hargas).", 0, '$customer_id', '$user_id')");
        mysqli_query($conn, "INSERT INTO jurnal_detail (jurnal_id, coa_id, debit, kredit, customer_id, user_id) 
                             VALUES ('$jurnal_id', 401, 0, ".array_sum($qtys*$hargas).", '$customer_id', '$user_id')");
    }

    echo "<script>alert('Data penjualan berhasil disimpan'); window.location='penjualan.php';</script>";
}
?>

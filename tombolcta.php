<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Step 3 - Submit</title>

<style>

body{
    background:#f4f6f9;
    font-family:Segoe UI;
    padding:40px;
}

.card{
    max-width:700px;
    margin:auto;
    background:white;
    padding:40px;
    border-radius:14px;
    box-shadow:0 4px 12px rgba(0,0,0,.08);
}

h2{
    margin-top:0;
    color:#1f2937;
}

.warning{
    background:#fef3c7;
    border:1px solid #f59e0b;
    padding:20px;
    border-radius:12px;
    margin-bottom:30px;
    color:#92400e;
}

.warning ul{
    margin-top:12px;
    margin-bottom:0;
    padding-left:20px;
}

.btn-submit{
    width:100%;
    border:none;
    background:#2563eb;
    color:white;
    padding:18px;
    border-radius:12px;
    font-size:17px;
    font-weight:600;
    cursor:pointer;
    transition:0.2s;
}

.btn-submit:hover{
    background:#1d4ed8;
}

.submit-note{
    margin-top:14px;
    text-align:center;
    color:#6b7280;
    font-size:14px;
    line-height:1.6;
}

.submit-note b{
    color:#374151;
}

</style>
</head>

<body>

<div class="card">

    <h2>Submit Nilai Konversi</h2>

    <div class="warning">

        <b>Perhatian:</b>

        <ul>
            <li>Nilai akan tampil ke mahasiswa</li>
            <li>Status publikasi berubah menjadi final</li>
            <li>Data akan tercatat pada sistem akademik</li>
        </ul>

    </div>

    <button class="btn-submit">
        Submit Nilai Konversi
    </button>

    <div class="submit-note">
        Setelah submit, nilai konversi akan tersimpan sebagai hasil final dan dapat dilihat oleh mahasiswa.
    </div>

</div>

</body>
</html>
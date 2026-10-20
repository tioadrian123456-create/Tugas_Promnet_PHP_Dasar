<?php
// =====================================================
// hasil_pesan.php - Menampilkan hasil data POST
// =====================================================

// Memastikan data POST tersedia dengan isset()
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    // Akses langsung tanpa POST -> kembali ke index.php
    header("Location: index.php");
    exit;
}

// Menangkap data form menggunakan $_POST
$nama  = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6fb;
            font-family: Arial, "Segoe UI", sans-serif;
            color: #000;
        }
        .card {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }
        h1 { margin: 0 0 16px 0; font-size: 24px; }
        .baris {
            background: #f9fafb;
            padding: 14px 12px;
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            padding: 10px 14px;
            margin-top: 8px;
        }
        .btn:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Pesan Berhasil Dikirim</h1>
        <p>Terima kasih, <b><?= $_POST["nama"] ?></b>!</p>

        
        <div class="baris"><b>Nama:</b> <?= $_POST["nama"] ?></div>
        <div class="baris"><b>Kelas:</b> <?= $_POST["kelas"] ?></div>
        <div class="baris"><b>Pesan / Kesan:</b> <?= $_POST["pesan"] ?></div>

        <a class="btn" href="index.php">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>
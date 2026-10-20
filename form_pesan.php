<?php
// =====================================================
// form_pesan.php - Form Pesan Mahasiswa (method POST)
// =====================================================
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6fb;
            font-family: Arial, "Segoe UI", sans-serif;
            color: #000;
        }
        .card {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }
        h1 { margin: 0 0 16px 0; font-size: 24px; }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"], textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            margin-bottom: 14px;
        }
        textarea { height: 120px; resize: vertical; }
        input[type="text"]:focus, textarea:focus {
            outline: none;
            border: 1px solid #111827;
        }
        .aksi { display: flex; gap: 6px; align-items: center; }
        .btn {
            display: inline-block;
            border: none;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            padding: 10px 14px;
            font-size: 14px;
            font-family: inherit;
        }
        .btn-biru { background: #2563eb; }
        .btn-biru:hover { background: #1d4ed8; }
        .btn-abu { background: #6b7280; }
        .btn-abu:hover { background: #4b5563; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Form Pesan Mahasiswa</h1>

        <!-- Form mengirim data dengan method POST ke hasil_pesan.php -->
        <form method="POST" action="hasil_pesan.php">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" required></textarea>

            <div class="aksi">
                <button type="submit" class="btn btn-biru">Kirim</button>
                <a href="index.php" class="btn btn-abu">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
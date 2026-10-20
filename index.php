<?php
// =====================================================
// index.php - Halaman Daftar Mahasiswa
// =====================================================

// Array multidimensi berisi associative array (data mahasiswa)
$mahasiswa = [
    [
        "nim"     => "25001",
        "nama"    => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "andi@upi.edu",
        "nilai"   => 88
    ],
    [
        "nim"     => "25002",
        "nama"    => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "budi@upi.edu",
        "nilai"   => 76
    ],
    [
        "nim"     => "25003",
        "nama"    => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email"   => "citra@upi.edu",
        "nilai"   => 67
    ],
    [
        "nim"     => "25004",
        "nama"    => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "dina@upi.edu",
        "nilai"   => 92
    ],
    [
        "nim"     => "25005",
        "nama"    => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "eko@upi.edu",
        "nilai"   => 58
    ]
];

// Variabel counter untuk nomor urut (dimulai dari 1)
$no = 1;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6fb;
            font-family: Arial, "Segoe UI", sans-serif;
            color: #000;
        }
        .card {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
        }
        h1 { margin: 0 0 12px 0; font-size: 24px; }
        .subjudul { margin: 0; }
        .tabel-wrap { overflow-x: auto; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #e5e7eb;
            padding: 12px 10px;
            text-align: left;
        }
        thead th { background: #e8f0fe; font-weight: bold; }
        .lulus { color: #15803d; font-weight: bold; }
        .tidak-lulus { color: #dc2626; font-weight: bold; }
        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            padding: 8px 14px;
        }
        .btn:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div>
                <h1>Daftar Mahasiswa</h1>
                <p class="subjudul">Mini Website PHP Dasar</p>
            </div>
            <a class="btn" href="form_pesan.php">Isi Form Pesan</a>
        </div>

        <div class="tabel-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Perulangan foreach untuk menampilkan tiap baris mahasiswa
                foreach ($mahasiswa as $mhs) {

                    // Mengambil nilai dari associative array
                    $nilai = $mhs["nilai"];

                    // Menentukan grade dengan percabangan if-elseif-else
                    if ($nilai >= 80) {
                        $grade = "A";
                    } elseif ($nilai >= 70) {
                        $grade = "B";
                    } elseif ($nilai >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    // Menentukan status dan class CSS dengan percabangan
                    if ($nilai >= 70) {
                        $status = "Lulus";
                        $kelasStatus = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $kelasStatus = "tidak-lulus";
                    }

                
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= ($mhs["nim"]); ?></td>
                        <td><?= ($mhs["nama"]); ?></td>
                        <td><?= ($mhs["jurusan"]); ?></td>
                        <td><?= ($nilai); ?></td>
                        <td><?= ($grade); ?></td>
                        <td class="<?= $kelasStatus; ?>"><?= ($status); ?></td>
                        <td><a class="btn" href="detail.php?nim=<?= ($mhs["nim"]) ?>&nama=<?= ($mhs["nama"]) ?>&jurusan=<?= ($mhs["jurusan"]) ?>&email=<?= ($mhs["email"]) ?>&nilai=<?= ($nilai) ?>&grade=<?= ($grade) ?>&status=<?= ($status) ?>">Lihat Detail</a></td>
                    </tr>
                <?php
                    // Increment counter nomor urut
                    $no++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
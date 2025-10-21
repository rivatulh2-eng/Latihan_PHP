<?php
// ===== MODEL =====
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
    }

    public static function semuaBuku() {
        // Tambahkan 6 data buku
        return [
            new Buku("Logika Pembetulan Proyek", "Riva", 2025),
            new Buku("Matematika", "Dwi", 2020),
            new Buku("Ilmu Pengetahuan Sosial", "Hisna", 2021),
            new Buku("Pembantaian Rakyat", "Maria", 2019),
            new Buku("Madigol", "Kamila", 2022),
            new Buku("Tidur di Bumi", "Ila", 2018)
        ];
    }
}

// ===== CONTROLLER =====
$daftar_buku = Buku::semuaBuku();
?>

<!-- ===== VIEW ===== -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e6f2ff;
        }
    </style>
</head>
<body>
    <h1>📚 Daftar Buku Perpustakaan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php $no = 1; foreach ($daftar_buku as $buku): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($buku->judul); ?></td>
            <td><?php echo htmlspecialchars($buku->pengarang); ?></td>
            <td><?php echo htmlspecialchars($buku->tahun_terbit); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

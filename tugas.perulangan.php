<?php
// Nama File: tugas_perulangan.php

echo "=== Perulangan FOR dari 100 sampai 1000 === <br>";
for ($i = 100; $i <= 1000; $i++) {
    echo $i . "<br>";
}

echo "<br>=== Perulangan WHILE dari 100 sampai 1000 === <br>";
$j = 100;
while ($j <= 1000) {
    echo $j . "<br>";
    $j++;
}

echo "<br>=== Perulangan DO WHILE dari 100 sampai 1000 === <br>";
$k = 100;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 1000);

// Penjelasan penggunaan
echo "<br>=== Penjelasan === <br>";
echo "Perulangan digunakan untuk kasus ketika kita perlu menampilkan, menghitung, atau memproses data berulang kali tanpa menulis kode secara manual.<br>";
echo "Contoh penggunaannya: mencetak data dalam tabel, menghitung jumlah item dalam keranjang belanja, membuat pagination, atau menjalankan logika validasi berulang.<br>";
?>




<?php
// ==================== Program 1: Keranjang Belanja ====================
echo "=== Program 1: Keranjang Belanja ===<br><br>";

$keranjang = [
    ["nama" => "Laptop", "harga" => 7000000],
    ["nama" => "Mouse", "harga" => 150000],
    ["nama" => "Keyboard", "harga" => 300000],
    ["nama" => "Headset", "harga" => 250000]
];

echo "=== Kasus Daftar Keranjang Belanja === <br>";
$total = 0;

// Perulangan untuk menjumlahkan harga
for ($i = 0; $i < count($keranjang); $i++) {
    echo $keranjang[$i]["nama"] . " - Rp " . $keranjang[$i]["harga"] . "<br>";
    $total += $keranjang[$i]["harga"];
}

// Kontrol: kasih diskon sesuai total belanja
echo "<br>Total Belanja: Rp " . $total . "<br>";

if ($total >= 5000000) {
    $diskon = 0.2; // 20%
    echo "Selamat! Anda mendapat diskon 20% <br>";
} elseif ($total >= 1000000) {
    $diskon = 0.1; // 10%
    echo "Selamat! Anda mendapat diskon 10% <br>";
} else {
    $diskon = 0; // tidak ada diskon
    echo "Belanja lebih banyak untuk mendapat diskon <br>";
}

$hargaAkhir = $total - ($total * $diskon);
echo "Total yang harus dibayar: Rp " . $hargaAkhir;
?>

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

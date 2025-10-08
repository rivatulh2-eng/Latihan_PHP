<?php
// Membuat array 3x3 dengan angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "<b>Matriks 3x3:</b><br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
        $total += $matriks[$i][$j];
    }
    echo "<br>";
}

// Hitung total semua elemen
echo "<br>Jumlah total semua elemen: $total";
?>

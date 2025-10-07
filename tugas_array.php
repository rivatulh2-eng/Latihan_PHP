<?php
// Matriks A
$A = [
    [1, 1, 1],
    [3, 3, 3],
    [2, 2, 2]
];

// Matriks B
$B = [
    [2, 2, 2],
    [3, 3, 3],
    [1, 1, 1]
];

// Matriks hasil penjumlahan
$C = [];

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil
echo "<h3>Hasil Penjumlahan Matriks A + B :</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>

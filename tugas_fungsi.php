<?php
echo "=== Tugas 1 ===<br>";
// Fungsi menentukan bilangan terbesar
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh pemanggilan
$angka1 = 100;
$angka2 = 150;
echo "Bilangan terbesar dari $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2);
echo "<br><br>";

echo "=== Tugas 2 ===<br>";
// Menampilkan tanggal sekarang dengan getdate()
$sekarang = getdate();
echo "Tanggal sekarang (getdate) : " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
echo "<br><br>";

echo "=== Tugas 3 ===<br>";
// Menampilkan tanggal sekarang dengan fungsi date('d-F-Y')
echo "Tanggal sekarang (date) : " . date('d-F-Y');
?>

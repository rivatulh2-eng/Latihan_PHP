<?php
// Array 2 dimensi: [Nama, Nilai Matematika, Nilai Bahasa]
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa siswa ke-2 (indeks 1)
echo "Nilai Bahasa siswa ke-2: " . $siswa[1][2] . "<br><br>";

// Cetak semua data siswa menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         " | Matematika: " . $siswa[$i][1] . 
         " | Bahasa: " . $siswa[$i][2] . "<br>";
}
?>

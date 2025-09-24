<?php
$mahasiswa = ["Maria", "Riva", "Dwi", "Mita"];

foreach ($mahasiswa as $m) {
    if ($m == "Rivatul") {
        echo "Mahasiswa ditemukan: $m";
        break; // berhenti setelah ketemu
    }
    echo "Memeriksa: $m <br>";
}
?>

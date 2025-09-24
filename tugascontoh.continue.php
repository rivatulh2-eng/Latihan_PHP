<?php
$produk = ["E-book", "Template", "Kursus Online", "Free Trial", "Aplikasi"];

foreach ($produk as $p) {
    if ($p == "Free Trial") {
        continue; // lewati produk gratis
    }
    echo "Produk dijual: $p <br>";
}
?>

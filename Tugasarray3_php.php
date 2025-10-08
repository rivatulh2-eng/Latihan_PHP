<?php
$produk = [
    [
        "nama" => "Laptop Lenovo",
        "kategori" => "Elektronik",
        "harga" => 8500000,
        "rating" => 4.7
    ],
    [
        "nama" => "Kemeja Polos",
        "kategori" => "Fashion",
        "harga" => 250000,
        "rating" => 4.5
    ],
    [
        "nama" => "Headset Sony",
        "kategori" => "Aksesoris",
        "harga" => 1200000,
        "rating" => 4.8
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

// Cetak produk dengan harga tertinggi
echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp" . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>

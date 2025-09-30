<?php
$nilai=90;

echo "CONTOH IF ELSE <br>";
if($nilai>=80 && $nilai<=100) {
    echo "Selamat Anda mendapat grade A <br>";
}
elseif($nilai>=61 && $nilai<=79) {
    echo "Selamat Anda mendapat grade B <br>";
}
elseif($nilai>=51 && $nilai<=60) {
    echo "Selamat Anda mendapat grade C <br>";
}
elseif($nilai>=41 && $nilai<=50) {
    echo "Selamat Anda mendapat grade D <br>";
}
elseif($nilai>=0 && $nilai<=40) {
    echo "Maaf Anda mendapat grade E <br>";
}
else {
    echo "Nilai tidak valid <br>";
};

echo "CONTOH SWITCH <br>";
switch(true) {
    case ($nilai>=80 && $nilai<=100) :
        echo "Selamat Anda mendapat grade A <br>";
        break;
    case ($nilai>=61 && $nilai<=79) :
        echo "Selamat Anda mendapat grade B <br>";
        break;
    case ($nilai>=51 && $nilai<=60) :
        echo "Selamat Anda mendapat grade C <br>";
        break;
    case ($nilai>=41 && $nilai<=50) :
        echo "Selamat Anda mendapat grade D <br>";
        break;
    case ($nilai>=0 && $nilai<=40) :
        echo "Maaf Anda mendapat grade E <br>";
        break;
    default :
        echo "Nilai tidak valid <br>";
        break;
}

echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) {
    echo "Looping FOR ke : ".$i."<br>";
}

echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
    echo "Looping While ke : ".$j."<br>";
    $j++;
}
?>


<?php
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

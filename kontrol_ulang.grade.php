<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat Anda mendapat grade A <br>";}
else { echo "Maaf Anda belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
case 100 :echo "Nilai yang dipilih 100 <br>";
break;
case 90 :echo "Nilai yang dipilih 90 <br>";
break;
} echo "CONTOH FOR <br>";
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
echo "<br>=== TUGAS 5 GRADE === <br>";

$nilai=70;

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


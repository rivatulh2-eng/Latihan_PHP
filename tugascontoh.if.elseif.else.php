<?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Grade A (Sangat Baik)";
} elseif ($nilai >= 80) {
    echo "Grade B (Baik)";
} elseif ($nilai >= 70) {
    echo "Grade C (Cukup)";
} elseif ($nilai >= 60) {
    echo "Grade D (Kurang)";
} else {
    echo "Grade E (Tidak Lulus)";
}
?>

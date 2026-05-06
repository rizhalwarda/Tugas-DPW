<?php
// Contoh nilai yang ingin dikonversi
$nilai = 85; 

echo "Nilai Angka: " . $nilai . "<br>";

if ($nilai >= 90 && $nilai <= 100) {
    echo "Huruf: A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Huruf: AB";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "Huruf: B";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "Huruf: BC";
} elseif ($nilai >= 0 && $nilai <= 59) {
    echo "Huruf: C";
} else {
    echo "Nilai tidak valid";
}
?>
<?php
// Diketahui
$gaji_pokok = 3250000;
$tunjangan = 1200000;

// Menghitung Gaji Kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Menghitung Pajak Penghasilan (10%)
$pajak = 0.10 * $gaji_kotor;

// Menghitung Gaji Bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan Hasil
echo "<h3>Rincian Gaji Obi Bulan Ini:</h3>";
echo "Gaji Pokok : Rp " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan  : Rp " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor : Rp " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Potongan Pajak (10%) : Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "--------------------------------------------------<br>";
echo "<strong>Gaji Bersih yang Diterima : Rp " . number_format($gaji_bersih, 0, ',', '.') . "</strong>";
?>
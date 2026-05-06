<?php
// Indexed Array
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

// tampilkan Mangga
echo "saya suka " . $namaBuah[1] . "<br>";
// tampilkan Jeruk
echo "saya suka " . $namaBuah[2] . "<br>";
// tampilkan Apel
echo "saya suka " . $namaBuah[3] . "<br>";
// tampilkan Melon
echo "saya suka " . $namaBuah[4] . "<br>";

echo "<br>";

// Array dengan spesifik index (Associative Array)
$umur = array("Johan"=>"33 Tahun", "Rizqi"=>"30 Tahun", "Tejo"=>"40 Tahun");
$umur['Rehan'] = "25 Tahun";

// Menampilkan umur Andi (perhatikan huruf kecil sesuai key array)
echo "Umur Johan adalah " . $umur['Johan'] . "<br>";

// tampilkan semua umur menggunakan perulangan
foreach ($umur as $nama => $usia) {
    echo "Umur " . $nama . " adalah " . $usia . "<br>";
}
?>
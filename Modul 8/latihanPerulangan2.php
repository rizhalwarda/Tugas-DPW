<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

echo "<h3>Hasil Konversi Ganjil Genap:</h3>";

foreach ($angka as $nilai) {
    // Logika: Jika angka dibagi 2 sisanya 0, maka Genap
    if ($nilai % 2 == 0) {
        echo "Nomor : $nilai Genap <br>";
    } else {
        echo "Nomor : $nilai Ganjil <br>";
    }
}
?>
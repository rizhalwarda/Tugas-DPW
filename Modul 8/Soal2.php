<?php
// Jumlah uang yang akan diambil
$uang_ani = 1387500;

// Daftar pecahan uang yang berlaku di Bank
$daftar_pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "<h3>Rincian Pecahan Uang Ani</h3>";
echo "Total Uang Tabungan: <strong>Rp " . number_format($uang_ani, 0, ',', '.') . "</strong><br><br>";

// Melakukan perulangan untuk mengecek setiap pecahan
foreach ($daftar_pecahan as $pecahan) {
    // Menghitung berapa lembar uang untuk pecahan saat ini
    $jumlah_lembar = floor($uang_ani / $pecahan);
    
    // Jika jumlah lembarnya lebih dari 0, tampilkan ke layar
    if ($jumlah_lembar > 0) {
        echo "Uang Rp " . number_format($pecahan, 0, ',', '.') . " : " . $jumlah_lembar . " lembar/keping<br>";
    }
    
    // Menghitung sisa uang setelah diambil pecahan tersebut
    $uang_ani = $uang_ani % $pecahan;
}
?>
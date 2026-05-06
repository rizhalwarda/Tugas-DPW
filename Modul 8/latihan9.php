<?php
// ==========================================
// 1. Contoh fungsi tanpa nilai balik
// ==========================================
function writeMsg($nama) {
    echo "SELAMAT DATANG " . $nama . "<br>";
}

// Pemanggilan fungsi (tidak perlu mengetik 'nama:')
writeMsg("Warda"); 

echo "<br>";

// ==========================================
// 2. Fungsi dengan mengirim nilai balik (return)
// ==========================================
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; // mengirim nilai $a ke pemanggil
}

// Menyimpan hasil dari fungsi ke dalam variabel
$hasil = tambah(5, 5);
echo "Hasil penjumlahan: " . $hasil;
?>
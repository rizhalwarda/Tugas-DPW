<?php
require_once ('kelas/akunBank.php');

// Membuat objek data1
$data1 = new akunBank("001", 10000);
$data1->setNama("Ranita Rizqi");

// Membuat objek data2
$data2 = new akunBank("002", 50000);
$data2->setNama("Rizhal Pratama");

// Operasi untuk Data 1
echo "<h3>Informasi Akun 1</h3>";
echo "Nomor Akun: " . $data1->getAccountNumber() . "<br>";
echo "Nama Pemilik: " . $data1->getNama() . "<br>";
echo "Saldo Awal: " . $data1->getJmlUang() . "<br>";

// Menambah uang
$data1->tambahUang(5000);
echo "Setelah Tambah Uang (5000): " . $data1->getJmlUang() . "<br>";

// Mengurangi uang
$data1->kurangiUang(2000);
echo "Setelah Kurangi Uang (2000): " . $data1->getJmlUang() . "<br>";

// Menghitung pajak
echo "Pajak (11%): " . $data1->hitungPajak() . "<br>";
echo "Saldo Akhir setelah Pajak: " . ($data1->getJmlUang() - $data1->hitungPajak()) . "<br>";

echo "<hr>";

// Operasi untuk Data 2
echo "<h3>Informasi Akun 2</h3>";
echo "Nama Pemilik: " . $data2->getNama() . "<br>";
echo "Saldo: " . $data2->getJmlUang() . "<br>";
echo "Pajak yang harus dibayar: " . $data2->hitungPajak() . "<br>";
?>
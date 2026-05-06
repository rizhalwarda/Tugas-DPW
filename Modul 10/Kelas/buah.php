<?php
require_once "Mahasiswa.php";

// Membuat objek mahasiswa
$mhs1 = new Mahasiswa("Ranita Rizqi Wardatussholikhah");

// Set data mahasiswa
$mhs1->setNIM("253307060");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setKelas("2B");

// Menampilkan data
echo "<h3>Data Mahasiswa</h3>";
echo "Nama    : " . $mhs1->getNama() . "<br>";
echo "NIM     : " . $mhs1->getNIM() . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";
echo "Kelas   : " . $mhs1->getKelas() . "<br>";
?>
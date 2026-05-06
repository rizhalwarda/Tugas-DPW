<?php
require_once ('kelas/mahasiswa.php');

// Membuat objek mhs1 dengan identitas saya
$mhs1 = new mahasiswa("Ranita Rizqi Wardatussholikhah");
$mhs1->setNIM("253307060"); // Contoh NIM
$mhs1->setKelas("TI-2B");
$mhs1->setJurusan("Teknologi Informasi");

// Menampilkan nama, nim, dan kelas dari $mhs1
echo "Nama    : " . $mhs1->getName() . "<br>";
echo "NIM     : " . $mhs1->getNIM() . "<br>";
echo "Kelas   : " . $mhs1->getKelas() . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";

echo "<hr>";

// Contoh mhs2 sesuai format gambar
$mhs2 = new mahasiswa("Ranita Rizqi Wardatussholikhah");
$mhs2->setNIM("253307060");
$mhs2->setKelas("2B");

echo "Nama    : " . $mhs2->getName() . "<br>";
echo "NIM     : " . $mhs2->getNIM() . "<br>";
echo "Kelas   : " . $mhs2->getKelas() . "<br>";
?>
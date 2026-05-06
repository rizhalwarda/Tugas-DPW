<?php
require_once ('kelas/Manusia.php');

$anwar = new Manusia();
$anwar->setNama("Rizhal Pratama");
$anwar->setUmur(20);

$rizhal = new Manusia();
$rizhal->setNama("Anwar Hakim");
$rizhal->setUmur(22);

echo "Identitas Rizhal:<br>";
echo "Nama: " . $rizhal->getNama() . "<br>";

echo "<br>Identitas Anda:<br>";
echo "Nama: " . $anwar->getNama() . "<br>";
echo "Umur: " . $anwar->getUmur() . " tahun<br>";
echo "NIK: " . $anwar->getNIK() . "<br>";
?>
<?php
// 1. Data dari tabel dimasukkan ke dalam array multidimensi
$data_siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Budi"],
    ["no" => 7, "poin" => 95, "nama" => "Tini"],
    ["no" => 8, "poin" => 65, "nama" => "Sari"]
];

echo "<h2>Jawaban Tugas Nomor 18</h2>";

// --- Bagian a) Tampilkan poin siswa dengan nomor urut 5 ---
echo "<b>a) Poin siswa nomor urut 5:</b><br>";
foreach ($data_siswa as $siswa) {
    if ($siswa["no"] == 5) {
        echo "Siswa bernama " . $siswa["nama"] . " memiliki poin: " . $siswa["poin"];
    }
}
echo "<br><br>";

// --- Bagian b) Tampilkan semua nama siswa yang memiliki poin 90 ---
echo "<b>b) Nama siswa dengan poin 90:</b><br>";
foreach ($data_siswa as $siswa) {
    if ($siswa["poin"] == 90) {
        echo "- " . $siswa["nama"] . "<br>";
    }
}
echo "<br>";

// --- Bagian c) Tampilkan semua nama siswa yang memiliki poin 100 ---
echo "<b>c) Nama siswa dengan poin 100:</b><br>";
$ditemukan = false; 
foreach ($data_siswa as $siswa) {
    if ($siswa["poin"] == 100) {
        echo "- " . $siswa["nama"] . "<br>";
        $ditemukan = true;
    }
}

// Jika tidak ada yang nilainya 100
if (!$ditemukan) {
    echo "Hasil: tidak ada";
}
?>
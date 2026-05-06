<?php
// Membuat array dengan index nama dan umur (min 15 data)
$users = [
    ["nama" => "Cindy", "umur" => 18],
    ["nama" => "Yukka", "umur" => 20],
    ["nama" => "Rizqi", "umur" => 19],
    ["nama" => "Eka", "umur" => 21],
    ["nama" => "sani", "umur" => 22],
    ["nama" => "Yudha", "umur" => 20],
    ["nama" => "Beni", "umur" => 23],
    ["nama" => "Hana", "umur" => 19],
    ["nama" => "Habibi", "umur" => 25],
    ["nama" => "Nadin", "umur" => 24],
    ["nama" => "Widya", "umur" => 20],
    ["nama" => "Habibah", "umur" => 18],
    ["nama" => "Warda", "umur" => 22],
    ["nama" => "Rhenanda", "umur" => 21],
    ["nama" => "Arum", "umur" => 23]
];

// Konversi ke JSON
$jsonData = json_encode($users, JSON_PRETTY_PRINT);

// Tampilkan
echo "<h3>Data JSON:</h3>";
echo "<pre>" . $jsonData . "</pre>";
?>
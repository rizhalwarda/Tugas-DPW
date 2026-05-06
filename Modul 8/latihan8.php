<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1A" => array("Rehan", "Gita", "Arkan"),
    "1B" => array("Yukka", "Ahmad", "Rizqi")
);

// menampilkan semua data array
echo "<pre>";
print_r($array);
echo "</pre>";

// menampilkan kelas 1B
echo "Data Kelas 1B: <br>";
print_r($array['1B']);
echo "<br><br>";

// menampilkan kelas 1B dengan index 0 (Yukka)
echo "Siswa pertama di 1B: " . $array['1B'][0] . "<br>";

// tampilkan Ahmad (ada di kelas 1B, index ke-1)
echo "Tampilkan Ahmad: " . $array['1B'][1] . "<br>";

// tampilkan Rehan (ada di kelas 1A, index ke-2)
echo "Tampilkan Rehan: " . $array['1A'][0] . "<br>";

echo "<br>";

// Penulisan array yang lebih singkat (PHP modern)
$array_simple = [
    "1A" => ["Rehan", "Gita", "Arkan"],
    "1B" => ["Yukka", "Ahmad", "Rizqi"]
];
?>
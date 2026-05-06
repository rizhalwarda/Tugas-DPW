<?php
// while loop
$x = 10;
// Kotak kosong diisi '>=' agar looping berhenti saat $x kurang dari 5
while ($x >= 5) { 
    echo "Nomor : $x <br>"; // Kotak kosong diisi variabel $x
    $x--;
}

echo "<br>";

// do while
$x = 1;
do {
    echo "Nomor : $x <br>"; // Kotak kosong diisi perintah 'echo'
    $x++;
} while ($x <= 5);

echo "<br>";

// foreach
// Kotak kosong melengkapi kata "blue"
$colors = array("red", "green", "blue", "yellow"); 
// Kotak kosong melengkapi variabel $colors dan $value
foreach ($colors as $value) { 
    echo "$value <br>";
}

echo "<br>";

// for
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor : $x <br>"; // Kotak kosong diisi variabel $x
}

echo "<br>";

// for dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>
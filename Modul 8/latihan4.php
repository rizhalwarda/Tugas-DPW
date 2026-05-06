<?php
// Mendapatkan jam saat ini dalam format 24 jam (00-23)
$t = date("H");

// 1. Contoh IF sederhana
echo "If<br>";
if ($t < 16) {
    echo "Selamat siang!";
}

// 2. Contoh IF dan ELSE
echo "<br><br>If dan Else<br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

// 3. Contoh Nested If / Elseif
echo "<br><br>Nested If<br>";
if ($t < 11) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat MALAM!";
}
?>
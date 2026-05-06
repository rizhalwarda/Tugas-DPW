<?php
// Loop luar untuk baris (1 sampai 10)
for ($i = 1; $i <= 10; $i++) {
    // Loop dalam untuk mencetak bintang di setiap baris
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    // Pindah ke baris baru
    echo "<br>";
}
?>
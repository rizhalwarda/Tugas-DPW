<?php

$x = 5;
$y = 10;

// ===============================
// Arithmetic operators
// ===============================
echo "Penambahan : " . ($x + $y) . "<br>";
echo "Pengurangan : " . ($x - $y) . "<br>";
echo "Perkalian : " . ($x * $y) . "<br>";
echo "Pembagian : " . ($x / $y) . "<br>";
echo "Modulus : " . ($x % $y) . "<br>";
echo "Exponensial : " . ($x ** $y) . "<br>";
echo "<br>";


// ===============================
// Assignment operators
// ===============================
$x += 2; // x = x + 2
$y *= 2; // y = y * 2

echo "Penambahan x : " . $x . "<br>";
echo "Perkalian y : " . $y . "<br>";
echo "<br>";


// ===============================
// Increment / Decrement
// ===============================
echo "Isi ++x : " . (++$x) . "<br>";
echo "Isi x++ : " . ($x++) . "<br>"; 
echo "Isi x : " . $x . "<br>";
echo "<br>";

echo "Isi --y : " . (--$y) . "<br>";
echo "Isi y-- : " . ($y--) . "<br>";
echo "Isi y : " . $y . "<br>";
echo "<br>";


// ===============================
// Conditional assignment
// ===============================
$user = "Ranita Rizqi W";

// ternary operator
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

// null coalescing operator
$color = null;
echo $color ?? "red";

?>
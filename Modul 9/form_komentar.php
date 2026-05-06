<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = bersihkan_input($_POST["name"]);
$email = bersihkan_input($_POST["email"]);
$comment = bersihkan_input($_POST["comment"]);

<?php
echo "Selamat datang " . $_POST["Ranita Rizqi Wardatussholikhah"] . "<br><br>";
echo "NIM : " . $_POST["253307060"] . "<br>";
echo "Email : " . $_POST["rizhalwarda@gmail.com"] . "<br>";
echo "Tempat, Tanggal Lahir : " . $_POST["Jakarta"] . ", " . $_POST["16"] . "<br>";
echo "Alamat : " . $_POST["Ds. Ginuk Kec. Karas Kab. Magetan"] . "<br>";
echo "Jenis Kelamin : " . $_POST["Perempuan"] . "<br>";
?>

</body>
</html>


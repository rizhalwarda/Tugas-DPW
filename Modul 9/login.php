<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>

</head>
<body>

<?php
// inisialisasi variabel
$nameErr = $passErr = "";
$name = $pass = "";

// fungsi filter input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// cek saat tombol login ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validasi username
    if (empty($_POST["username"])) {
        $nameErr = "Masukkan username";
    } else {
        $name = bersihkan_input($_POST["username"]);
    }

    // validasi password
    if (empty($_POST["password"])) {
        $passErr = "Masukkan password";
    } else {
        $pass = bersihkan_input($_POST["password"]);
    }
}
?>

<h2>Form Login</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Username:
    <input type="text" name="username" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>

    Password:
    <input type="password" name="password">
    <span class="error">* <?php echo $passErr; ?></span>
    <br><br>

    <input type="submit" value="Login">

</form>

<?php
// tampilkan hasil jika tidak ada error
if ($name != "" && $pass != "") {
    echo "<h3>Login Berhasil</h3>";
    echo "Username: " . $name;
}
?>

</body>
</html>
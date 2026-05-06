<?php
// Memanfaatkan cookies untuk menyimpan data identitas

// Set cookies (harus sebelum output HTML)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nim = $_POST["nim"];
    
    // Set cookies yang berlaku selama 1 hari (86400 detik)
    setcookie("nama", $nama, time() + 86400, "/");
    setcookie("email", $email, time() + 86400, "/");
    setcookie("nim", $nim, time() + 86400, "/");
    
    // Redirect untuk menghindari form resubmission
    header("Location: cookies.php");
    exit();
}

// Hapus cookies
if (isset($_GET["hapus"])) {
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Identitas</title>
</head>
<body>
    <h2>Cookies - Menyimpan Identitas</h2>

    <?php if (isset($_COOKIE["nama"]) && !empty($_COOKIE["Ranita Rizqi Wardatussholikhah"])) { ?>
        <h3>Data dari Cookies:</h3>
        <p>Nama: <?php echo htmlspecialchars($_COOKIE["Ranita Rizqi Wardatussholikhah"]); ?></p>
        <p>Email: <?php echo htmlspecialchars($_COOKIE["rizhalwarda@gmail.com"]); ?></p>
        <p>NIM: <?php echo htmlspecialchars($_COOKIE["253307060"]); ?></p>
        <a href="cookies.php?hapus=1">Hapus Cookies</a>
    <?php } else { ?>
        <h3>Belum ada cookies. Silakan isi data:</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Nama: <input type="text" name="Ranita Rizqi Wardatussholikhah"><br><br>
            Email: <input type="email" name="rizhalwarda@gmail.com"><br><br>
            NIM: <input type="text" name="253307060"><br><br>
            <input type="submit" name="simpan" value="Simpan ke Cookies">
        </form>
    <?php } ?>
</body>
</html>
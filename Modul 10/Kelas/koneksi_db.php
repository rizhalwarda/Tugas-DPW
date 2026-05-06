<?php
class Database
{
    private $host = "localhost";
    private $user = "user";
    private $pass = "password";
    private $dbname = "database";

    private $koneksi = null;
    private $errorLog = [];

    // Method untuk membuka koneksi
    public function bukaKoneksi()
    {
        if ($this->koneksi === null) {
            $conn = mysqli_connect($this->host, $this->user, $this->pass);

            if ($conn) {
                mysqli_set_charset($conn, "utf8");

                if (mysqli_select_db($conn, $this->dbname)) {
                    $this->koneksi = $conn;
                    return true;
                } else {
                    $this->errorLog[] = mysqli_error($conn);
                    return false;
                }
            } else {
                $this->errorLog[] = mysqli_connect_error();
                return false;
            }
        }
        return true;
    }

    // Method untuk mengambil koneksi
    public function getKoneksi()
    {
        return $this->koneksi;
    }

    // Method untuk mengambil error
    public function getError()
    {
        return $this->errorLog;
    }
}
?>
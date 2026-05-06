<?php
require_once "Manusia.php";

class Mahasiswa extends Manusia
{
    protected $nim;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama, $nim = "", $jurusan = "", $kelas = "")
    {
        parent::__construct($nama); // pakai constructor dari class Manusia
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->kelas = $kelas;
    }

    // Getter & Setter NIM
    public function getNIM()
    {
        return $this->nim;
    }

    public function setNIM($nim)
    {
        $this->nim = $nim;
    }

    // Getter & Setter Jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // Getter & Setter Kelas
    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    // Method tambahan untuk menampilkan data
    public function tampilData()
    {
        echo "Nama     : " . $this->getNama() . "<br>";
        echo "NIM      : " . $this->nim . "<br>";
        echo "Jurusan  : " . $this->jurusan . "<br>";
        echo "Kelas    : " . $this->kelas . "<br>";
    }
}
?>
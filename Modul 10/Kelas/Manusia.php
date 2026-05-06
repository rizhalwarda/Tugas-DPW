<?php
class Manusia
{
    // Deklarasi properti
    protected $nama;
    protected $nik;
    protected $umur;

    // Constructor
    public function __construct($nama = "Ranita Rizqi Wardatussholikhah", $nik = "253307060", $umur = 19)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->umur = $umur;
    }

    // Getter & Setter Nama
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Getter NIK
    public function getNIK()
    {
        return "NIK: " . $this->nik;
    }

    // (Optional) Setter NIK jika ingin bisa diubah
    public function setNIK($nik)
    {
        $this->nik = $nik;
    }

    // Getter & Setter Umur
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Method tambahan biar lebih berguna
    public function tampilData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo $this->getNIK() . "<br>";
        echo "Umur : " . $this->umur . " tahun<br>";
    }
}

/*
Kesimpulan:
- Method tetap menggunakan access modifier public agar bisa diakses dari luar class.
- Properti dibuat lebih konsisten (nama, nik, umur).
- Ditambahkan constructor agar data bisa langsung diisi saat objek dibuat.
- Getter & Setter digunakan untuk menjaga konsep enkapsulasi.
- Method tampilData() membantu menampilkan isi objek dengan mudah.
*/
?>
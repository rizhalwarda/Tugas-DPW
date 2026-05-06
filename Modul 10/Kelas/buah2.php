<?php
class Buah
{
    public $nama;
    protected $warna;
    private $berat;

    // Setter public
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Method protected (tidak bisa langsung dipanggil dari luar)
    protected function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Method private (hanya di dalam class)
    private function setBerat($berat)
    {
        $this->berat = $berat;
    }

    // Wrapper agar tetap bisa akses protected & private
    public function isiData($warna, $berat)
    {
        $this->setWarna($warna);   // akses method protected
        $this->setBerat($berat);   // akses method private
    }

    // Tampilkan data
    public function tampilData()
    {
        echo "Nama  : " . $this->nama . "<br>";
        echo "Warna : " . $this->warna . "<br>";
        echo "Berat : " . $this->berat . " gram<br>";
    }
}

// Pemakaian
$mango = new Buah();
$mango->setNama('Mango'); // OK
$mango->isiData('Kuning', 300); // lewat wrapper

$mango->tampilData();
?>
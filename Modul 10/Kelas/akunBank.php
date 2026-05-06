<?php
class AkunBank
{
    protected $accountNumber;
    protected $saldo;
    protected $nama;

    // Constructor
    public function __construct($nomorAkun, $saldoAwal = 0, $nama = "")
    {
        $this->accountNumber = $nomorAkun;
        $this->saldo = $saldoAwal;
        $this->nama = $nama;
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

    // Getter Account Number
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // Getter Saldo
    public function getSaldo()
    {
        return $this->saldo;
    }

    // Tambah uang (deposit)
    public function tambahUang($nominal)
    {
        if ($nominal > 0) {
            $this->saldo += $nominal;
        }
        return $this->saldo;
    }

    // Kurangi uang (withdraw)
    public function kurangiUang($nominal)
    {
        if ($nominal > 0 && $this->saldo >= $nominal) {
            $this->saldo -= $nominal;
        } else {
            echo "Saldo tidak mencukupi atau nominal tidak valid!<br>";
        }
        return $this->saldo;
    }

    // Tampilkan saldo
    public function tampilkanUang()
    {
        return "Saldo: Rp " . number_format($this->saldo, 0, ',', '.');
    }

    // Hitung pajak
    public function hitungPajak()
    {
        return $this->saldo * 0.11; // 11%
    }

    // Method tambahan biar lebih jelas
    public function tampilData()
    {
        echo "Nama           : " . $this->nama . "<br>";
        echo "No Rekening    : " . $this->accountNumber . "<br>";
        echo $this->tampilkanUang() . "<br>";
        echo "Pajak (11%)    : Rp " . number_format($this->hitungPajak(), 0, ',', '.') . "<br>";
    }
}
?>
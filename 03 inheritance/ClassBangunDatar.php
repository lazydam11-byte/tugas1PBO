<?php

class BangunDatar
{
    public function luas(): float
    {
        echo "Menghitung luas bangun datar\n";
        return 0.0;
    }

    public function keliling(): float
    {
        echo "Menghitung keliling bangun datar\n";
        return 0.0;
    }
}

class Lingkaran extends BangunDatar
{
    private int $r;

    public function __construct(int $r)
    {
        $this->r = $r;
    }

    public function luas(): float
    {
        return M_PI * $this->r * $this->r;
    }

    public function keliling(): float
    {
        return 2 * M_PI * $this->r;
    }
}

class Persegi extends BangunDatar
{
    private int $sisi;

    public function __construct(int $sisi)
    {
        $this->sisi = $sisi;
    }

    public function luas(): float
    {
        return $this->sisi * $this->sisi;
    }

    public function keliling(): float
    {
        return $this->sisi * 4;
    }
}

class Segitiga extends BangunDatar
{
    private int $alas;
    private int $tinggi;

    public function __construct(int $alas, int $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luas(): float
    {
        return (int) (($this->alas * $this->tinggi) / 2);
    }
}

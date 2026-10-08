<?php

class Mahasiswa
{
    private string $nama;
    private string $nim;
    private int $umur;

    public function __construct(?string $nama = null, ?string $nim = null, int $umur = 0)
    {
        $this->nama = $nama ?? 'Belum Diisi';
        $this->nim = $nim ?? 'Belum Diisi';
        $this->umur = $umur;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim(string $nim): void
    {
        $this->nim = $nim;
    }

    public function getUmur(): int
    {
        return $this->umur;
    }

    public function setUmur(int $umur): void
    {
        $this->umur = $umur;
    }

    public function tampilkanInfo(): void
    {
        echo "Nama: {$this->nama}\n";
        echo "NIM: {$this->nim}\n";
        echo "Umur: {$this->umur}\n";
    }
}

class MahasiswaInternational extends Mahasiswa
{
    private string $negaraAsal;

    public function __construct(
        ?string $nama = null,
        ?string $nim = null,
        int|string|null $umurAtauNegara = null,
        ?string $negaraAsal = null
    ) {
        if (is_int($umurAtauNegara)) {
            parent::__construct($nama, $nim, $umurAtauNegara);
            $this->negaraAsal = $negaraAsal ?? 'Belum Diisi';
            return;
        }

        parent::__construct($nama, $nim);
        $this->negaraAsal = is_string($umurAtauNegara)
            ? $umurAtauNegara
            : 'Belum Diisi';
    }

    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo();
        echo "Negara Asal: {$this->negaraAsal}\n";
    }
}

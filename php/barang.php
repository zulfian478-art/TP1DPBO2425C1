<?php
class Barang {
    private $id;
    private $nama;
    private $harga;
    private $merk;
    private $kualitas;
    private $gambar;

    public function __construct($id, $nama, $harga, $merk, $kualitas, $gambar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merk = $merk;
        $this->kualitas = $kualitas;
        $this->gambar = $gambar;
    }

    // Getter
    public function getId() { return $this->id; }
    public function getNama() { return $this->nama; }
    public function getHarga() { return $this->harga; }
    public function getMerk() { return $this->merk; }
    public function getKualitas() { return $this->kualitas; }
    public function getGambar() { return $this->gambar; }

    // Setter
    public function setNama($nama) { $this->nama = $nama; }
    public function setHarga($harga) { $this->harga = $harga; }
    public function setMerk($merk) { $this->merk = $merk; }
    public function setKualitas($kualitas) { $this->kualitas = $kualitas; }
    public function setGambar($gambar) { $this->gambar = $gambar; }
}
?>

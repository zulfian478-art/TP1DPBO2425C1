<?php
// =============================
// Class Barang
// merepresentasikan 1 buah barang
// dengan atribut: id, nama, harga, merk, kualitas, dan gambar
// =============================
class Barang {
    // properti private hanya bisa diakses lewat getter/setter
    private $id;
    private $nama;
    private $harga;
    private $merk;
    private $kualitas;
    private $gambar;

    // Konstruktor: dipanggil saat buat objek baru
    // contoh: new Barang("B01", "Laptop", 10000, "Asus", "A", "images/laptop.jpg");
    public function __construct($id, $nama, $harga, $merk, $kualitas, $gambar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merk = $merk;
        $this->kualitas = $kualitas;
        $this->gambar = $gambar;
    }

    // =============================
    // Getter (ambil nilai properti)
    // =============================
    public function getId() { return $this->id; }
    public function getNama() { return $this->nama; }
    public function getHarga() { return $this->harga; }
    public function getMerk() { return $this->merk; }
    public function getKualitas() { return $this->kualitas; }
    public function getGambar() { return $this->gambar; }

    // =============================
    // Setter (ubah nilai properti)
    // =============================
    public function setNama($nama) { $this->nama = $nama; }
    public function setHarga($harga) { $this->harga = $harga; }
    public function setMerk($merk) { $this->merk = $merk; }
    public function setKualitas($kualitas) { $this->kualitas = $kualitas; }
    public function setGambar($gambar) { $this->gambar = $gambar; }
}
?>

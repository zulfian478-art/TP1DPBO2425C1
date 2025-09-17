// =============================
// Class Barang (Java)
// merepresentasikan sebuah barang elektronik
// dengan atribut: id, nama, harga, merk, kualitas
// =============================
public class Barang {
    // Properti private → hanya bisa diakses lewat getter & setter
    private int id;
    private String nama;
    private String harga;
    private String merk;
    private String kualitas;

    // =============================
    // Konstruktor kosong (default)
    // id di-set -1 agar menandakan belum valid
    // =============================
    public Barang() {
        this.id = -1; // default invalid
    }

    // =============================
    // Konstruktor dengan parameter
    // untuk inisialisasi langsung semua atribut
    // =============================
    public Barang(int id, String nama, String harga, String merk, String kualitas) {
        this.id = id;
        this.nama = nama;
        this.harga = harga;
        this.merk = merk;
        this.kualitas = kualitas;
    }

    // =============================
    // Setter & Getter
    // digunakan untuk mengubah & membaca properti private
    // =============================
    public void setId(int id) { this.id = id; }
    public int getId() { return id; }

    public void setNama(String nama) { this.nama = nama; }
    public String getNama() { return nama; }

    public void setHarga(String harga) { this.harga = harga; }
    public String getHarga() { return harga; }

    public void setMerk(String merk) { this.merk = merk; }
    public String getMerk() { return merk; }

    public void setKualitas(String kualitas) { this.kualitas = kualitas; }
    public String getKualitas() { return kualitas; }

    // =============================
    // Method tampilkan()
    // menampilkan detail barang ke console
    // =============================
    public void tampilkan() {
        System.out.println("ID       : " + id);
        System.out.println("Nama     : " + nama);
        System.out.println("Harga    : " + harga);
        System.out.println("Merk     : " + merk);
        System.out.println("Kualitas : " + kualitas);
        System.out.println("--------------------------");
    }
}

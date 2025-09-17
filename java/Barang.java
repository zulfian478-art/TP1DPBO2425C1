public class Barang {
    private int id;
    private String nama;
    private String harga;
    private String merk;
    private String kualitas;

    // Konstruktor kosong
    public Barang() {
        this.id = -1; // default invalid
    }

    // Konstruktor dengan parameter
    public Barang(int id, String nama, String harga, String merk, String kualitas) {
        this.id = id;
        this.nama = nama;
        this.harga = harga;
        this.merk = merk;
        this.kualitas = kualitas;
    }

    // Setter & Getter
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

    // Fungsi tampilkan
    public void tampilkan() {
        System.out.println("ID       : " + id);
        System.out.println("Nama     : " + nama);
        System.out.println("Harga    : " + harga);
        System.out.println("Merk     : " + merk);
        System.out.println("Kualitas : " + kualitas);
        System.out.println("--------------------------");
    }
}

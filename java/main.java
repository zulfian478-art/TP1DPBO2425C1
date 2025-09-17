import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Barang[] daftarBarang = new Barang[100]; // array of object
        int jumlah = 0;
        int pilihan;
        Scanner sc = new Scanner(System.in);

        do {
            System.out.println("\n=== MENU TOKO ELEKTRONIK ===");
            System.out.println("1. Tambah Data");
            System.out.println("2. Tampilkan Data");
            System.out.println("3. Update Data");
            System.out.println("4. Hapus Data");
            System.out.println("5. Cari Data");
            System.out.println("6. Keluar");
            System.out.print("Pilih menu: ");
            pilihan = sc.nextInt();
            sc.nextLine(); // buang newline

            if (pilihan == 1) {
                // Tambah Data
                System.out.print("Masukkan ID        : ");
                int id = sc.nextInt();
                sc.nextLine();
                System.out.print("Masukkan Nama      : ");
                String nama = sc.nextLine();
                System.out.print("Masukkan Harga     : ");
                String harga = sc.nextLine();
                System.out.print("Masukkan Merk      : ");
                String merk = sc.nextLine();
                System.out.print("Masukkan Kualitas  : ");
                String kualitas = sc.nextLine();

                daftarBarang[jumlah] = new Barang(id, nama, harga, merk, kualitas);
                jumlah++;
                System.out.println("✅ Data berhasil ditambahkan!");

            } else if (pilihan == 2) {
                // Tampilkan Data
                System.out.println("\n=== DAFTAR BARANG ===");
                if (jumlah == 0) {
                    System.out.println("Belum ada data.");
                } else {
                    for (int i = 0; i < jumlah; i++) {
                        daftarBarang[i].tampilkan();
                    }
                }

            } else if (pilihan == 3) {
                // Update Data
                System.out.print("Masukkan ID barang yang akan diupdate: ");
                int id = sc.nextInt();
                sc.nextLine();
                boolean found = false;

                for (int i = 0; i < jumlah; i++) {
                    if (daftarBarang[i].getId() == id) {
                        System.out.print("Masukkan Nama baru     : ");
                        String nama = sc.nextLine();
                        System.out.print("Masukkan Harga baru    : ");
                        String harga = sc.nextLine();
                        System.out.print("Masukkan Merk baru     : ");
                        String merk = sc.nextLine();
                        System.out.print("Masukkan Kualitas baru : ");
                        String kualitas = sc.nextLine();

                        daftarBarang[i].setNama(nama);
                        daftarBarang[i].setHarga(harga);
                        daftarBarang[i].setMerk(merk);
                        daftarBarang[i].setKualitas(kualitas);

                        System.out.println("✅ Data berhasil diupdate!");
                        found = true;
                        break;
                    }
                }
                if (!found) System.out.println("❌ Data dengan ID tersebut tidak ditemukan.");

            } else if (pilihan == 4) {
                // Hapus Data
                System.out.print("Masukkan ID barang yang akan dihapus: ");
                int id = sc.nextInt();
                sc.nextLine();
                boolean found = false;

                for (int i = 0; i < jumlah; i++) {
                    if (daftarBarang[i].getId() == id) {
                        for (int j = i; j < jumlah - 1; j++) {
                            daftarBarang[j] = daftarBarang[j + 1];
                        }
                        jumlah--;
                        System.out.println("✅ Data berhasil dihapus!");
                        found = true;
                        break;
                    }
                }
                if (!found) System.out.println("❌ Data dengan ID tersebut tidak ditemukan.");

            } else if (pilihan == 5) {
                // Cari Data
                System.out.print("Masukkan ID barang yang dicari: ");
                int id = sc.nextInt();
                sc.nextLine();
                boolean found = false;

                for (int i = 0; i < jumlah; i++) {
                    if (daftarBarang[i].getId() == id) {
                        System.out.println("\n=== DATA DITEMUKAN ===");
                        daftarBarang[i].tampilkan();
                        found = true;
                        break;
                    }
                }
                if (!found) System.out.println("❌ Data dengan ID tersebut tidak ditemukan.");
            }

        } while (pilihan != 6);

        System.out.println("Program selesai. Terima kasih!");
        sc.close();
    }
}

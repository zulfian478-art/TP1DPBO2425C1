#include "barang.cpp"  // include file class barang

int main() {
    barang daftarBarang[100]; // array of object untuk menampung maksimal 100 barang
    int jumlah = 0;           // banyak data yang tersimpan
    int pilihan;              // untuk menu

    do {
        // Menu utama
        cout << "\n=== MENU TOKO ELEKTRONIK ===\n";
        cout << "1. Tambah Data\n";
        cout << "2. Tampilkan Data\n";
        cout << "3. Update Data\n";
        cout << "4. Hapus Data\n";
        cout << "5. Cari Data\n";
        cout << "6. Keluar\n";
        cout << "Pilih menu: ";
        cin >> pilihan;

        if (pilihan == 1) {
            // ============================
            // Tambah Data
            // ============================
            int id;
            string nama, harga, merk, kualitas;

            cout << "\nMasukkan ID        : ";
            cin >> id;
            cin.ignore(); // buang newline
            cout << "Masukkan Nama      : ";
            getline(cin, nama);
            cout << "Masukkan Harga     : ";
            getline(cin, harga);
            cout << "Masukkan Merk      : ";
            getline(cin, merk);
            cout << "Masukkan Kualitas  : ";
            getline(cin, kualitas);

            // buat objek baru dan simpan di array
            daftarBarang[jumlah] = barang(id, nama, harga, merk, kualitas);
            jumlah++;
            cout << "✅ Data berhasil ditambahkan!\n";

        } else if (pilihan == 2) {
            // ============================
            // Tampilkan Semua Data
            // ============================
            cout << "\n=== DAFTAR BARANG ===\n";
            if (jumlah == 0) {
                cout << "Belum ada data.\n";
            } else {
                for (int i = 0; i < jumlah; i++) {
                    daftarBarang[i].tampilkan(); // panggil method tampilkan
                }
            }

        } else if (pilihan == 3) {
            // ============================
            // Update Data
            // ============================
            int id;
            cout << "\nMasukkan ID barang yang akan diupdate: ";
            cin >> id;
            cin.ignore();
            bool found = false;

            for (int i = 0; i < jumlah; i++) {
                if (daftarBarang[i].getId() == id) {
                    // jika id ditemukan, update field
                    string nama, harga, merk, kualitas;
                    cout << "Masukkan Nama baru     : ";
                    getline(cin, nama);
                    cout << "Masukkan Harga baru    : ";
                    getline(cin, harga);
                    cout << "Masukkan Merk baru     : ";
                    getline(cin, merk);
                    cout << "Masukkan Kualitas baru : ";
                    getline(cin, kualitas);

                    daftarBarang[i].setNama(nama);
                    daftarBarang[i].setHarga(harga);
                    daftarBarang[i].setMerk(merk);
                    daftarBarang[i].setkualitas(kualitas);

                    cout << "✅ Data berhasil diupdate!\n";
                    found = true;
                    break;
                }
            }
            if (!found) cout << "❌ Data dengan ID tersebut tidak ditemukan.\n";

        } else if (pilihan == 4) {
            // ============================
            // Hapus Data
            // ============================
            int id;
            cout << "\nMasukkan ID barang yang akan dihapus: ";
            cin >> id;
            bool found = false;

            for (int i = 0; i < jumlah; i++) {
                if (daftarBarang[i].getId() == id) {
                    // geser semua data setelah index i ke kiri
                    for (int j = i; j < jumlah - 1; j++) {
                        daftarBarang[j] = daftarBarang[j + 1];
                    }
                    jumlah--;
                    cout << "✅ Data berhasil dihapus!\n";
                    found = true;
                    break;
                }
            }
            if (!found) cout << "❌ Data dengan ID tersebut tidak ditemukan.\n";

        } else if (pilihan == 5) {
            // ============================
            // Cari Data berdasarkan ID
            // ============================
            int id;
            cout << "\nMasukkan ID barang yang dicari: ";
            cin >> id;
            bool found = false;

            for (int i = 0; i < jumlah; i++) {
                if (daftarBarang[i].getId() == id) {
                    cout << "\n=== DATA DITEMUKAN ===\n";
                    daftarBarang[i].tampilkan();
                    found = true;
                    break;
                }
            }
            if (!found) cout << "❌ Data dengan ID tersebut tidak ditemukan.\n";
        }

    } while (pilihan != 6); // keluar jika pilihan == 6

    cout << "\nProgram selesai. Terima kasih!\n";
    return 0;
}

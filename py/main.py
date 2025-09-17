from barang import Barang  # import class Barang dari file barang.py

def main():
    daftar_barang = []  # list untuk menampung objek Barang
    while True:
        # ============================
        # Menu Utama
        # ============================
        print("\n=== MENU TOKO ELEKTRONIK ===")
        print("1. Tambah Data")
        print("2. Tampilkan Data")
        print("3. Update Data")
        print("4. Hapus Data")
        print("5. Cari Data")
        print("6. Keluar")
        pilihan = input("Pilih menu: ")

        if pilihan == "1":
            # ============================
            # Tambah Data
            # ============================
            id = int(input("Masukkan ID        : "))
            nama = input("Masukkan Nama      : ")
            harga = input("Masukkan Harga     : ")
            merk = input("Masukkan Merk      : ")
            kualitas = input("Masukkan Kualitas  : ")

            # buat objek Barang dan tambahkan ke list
            daftar_barang.append(Barang(id, nama, harga, merk, kualitas))
            print("✅ Data berhasil ditambahkan!")

        elif pilihan == "2":
            # ============================
            # Tampilkan Semua Data
            # ============================
            print("\n=== DAFTAR BARANG ===")
            if not daftar_barang:
                print("Belum ada data.")
            else:
                for b in daftar_barang:
                    b.tampilkan()

        elif pilihan == "3":
            # ============================
            # Update Data
            # ============================
            id = int(input("Masukkan ID barang yang akan diupdate: "))
            found = False
            for b in daftar_barang:
                if b.get_id() == id:
                    # input data baru untuk update
                    nama = input("Masukkan Nama baru     : ")
                    harga = input("Masukkan Harga baru    : ")
                    merk = input("Masukkan Merk baru     : ")
                    kualitas = input("Masukkan Kualitas baru : ")

                    # update atribut
                    b.set_nama(nama)
                    b.set_harga(harga)
                    b.set_merk(merk)
                    b.set_kualitas(kualitas)

                    print("✅ Data berhasil diupdate!")
                    found = True
                    break
            if not found:
                print("❌ Data dengan ID tersebut tidak ditemukan.")

        elif pilihan == "4":
            # ============================
            # Hapus Data
            # ============================
            id = int(input("Masukkan ID barang yang akan dihapus: "))
            found = False
            for i, b in enumerate(daftar_barang):
                if b.get_id() == id:
                    daftar_barang.pop(i)  # hapus data dari list
                    print("✅ Data berhasil dihapus!")
                    found = True
                    break
            if not found:
                print("❌ Data dengan ID tersebut tidak ditemukan.")

        elif pilihan == "5":
            # ============================
            # Cari Data berdasarkan ID
            # ============================
            id = int(input("Masukkan ID barang yang dicari: "))
            found = False
            for b in daftar_barang:
                if b.get_id() == id:
                    print("\n=== DATA DITEMUKAN ===")
                    b.tampilkan()
                    found = True
                    break
            if not found:
                print("❌ Data dengan ID tersebut tidak ditemukan.")

        elif pilihan == "6":
            # ============================
            # Keluar Program
            # ============================
            print("Program selesai. Terima kasih!")
            break

        else:
            print("Pilihan tidak valid, coba lagi.")

# entry point program
if __name__ == "__main__":
    main()

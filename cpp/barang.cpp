#include <iostream>
#include <string>

using namespace std;

class barang {
    private:
        int id;             // ID barang (unik)
        string nama;        // Nama barang
        string harga;       // Harga barang (disimpan sebagai string biar fleksibel)
        string merk;        // Merk barang
        string kualitas;    // Kualitas barang (misalnya "Bagus", "Standar", dll)

    public:
        // Konstruktor kosong
        barang()
        {
            id = -1; // default id invalid (menandakan barang belum terisi data)
        }

        // Konstruktor dengan parameter
        barang(int id, string nama, string harga, string merk, string kualitas) {
            this->id = id;
            this->nama = nama;
            this->harga = harga;
            this->merk = merk;
            this->kualitas = kualitas;
        }

        // Setter & Getter untuk ID
        void setId(int id)
         {
             this->id = id;
        }
        int getId() 
        { 
            return this->id; 
        }

        // Setter & Getter untuk Nama
        void setNama(string nama) 
        { 
            this->nama = nama; 
        }
        string getNama() 
        { 
            return this->nama; 
        }

        // Setter & Getter untuk Harga
        void setHarga(string harga) 
        { 
            this->harga = harga; 
        }
        string getHarga() 
        { 
            return this->harga; 
        }

        // Setter & Getter untuk Merk
        void setMerk(string merk) 
        { 
            this->merk = merk; 
        }
        string getMerk() 
        { 
            return this->merk; 
        }

        // Setter & Getter untuk Kualitas
        void setkualitas(string kualitas) 
        { 
            this->kualitas = kualitas; 
        }
        string getkualitas() 
        { 
            return this->kualitas; 
        }

        // Fungsi untuk menampilkan data barang
        void tampilkan() {
            cout << "ID       : " << id << endl;
            cout << "Nama     : " << nama << endl;
            cout << "Harga    : " << harga << endl;
            cout << "Merk     : " << merk << endl;
            cout << "Kualitas : " << kualitas << endl;
            cout << "--------------------------" << endl;
        }

        // Destructor (kosong, tidak ada alokasi dinamis)
        ~barang() {}
};

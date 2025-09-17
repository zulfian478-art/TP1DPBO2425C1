#include <iostream>
#include <string>

using namespace std;

class barang {
    private:
        int id;
        string nama;
        string harga;
        string merk;
        string kualitas;

    public:
        //konstuktor kosong
        barang()
        {
            id = -1; //default id invalid
        }

        barang(int id, string nama, string harga, string merk, string kualitas) {
            this->id = id;
            this->nama = nama;
            this->harga = harga;
            this->merk = merk;
            this->kualitas = kualitas;
        }

        void setId(int id)
        {
            this->id = id;
        }

        int getId()
        {
            return this->id;
        }

        void setNama(string nama)
        {
            this->nama = nama;
        }

        string getNama()
        {
            return this->nama;
        }

        void setHarga(string harga)
        {
            this->harga = harga;
        }

        string getHarga()
        {
            return this->harga;
        }

        void setMerk(string merk)
        {
            this->merk = merk;
        }

        string getMerk()
        {
            return this->merk;
        }

        void setkualitas(string kualitas)
        {
            this->kualitas = kualitas;
        }

        string getkualitas()
        {
            return this->kualitas;
        }

        

        // Fungsi tampilkan
        void tampilkan() {
            cout << "ID       : " << id << endl;
            cout << "Nama     : " << nama << endl;
            cout << "Harga    : " << harga << endl;
            cout << "Merk     : " << merk << endl;
            cout << "Kualitas : " << kualitas << endl;
            cout << "--------------------------" << endl;
        }

        ~barang()
        {

        }

};
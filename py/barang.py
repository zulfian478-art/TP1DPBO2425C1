class Barang:
    def __init__(self, id=-1, nama="", harga="", merk="", kualitas=""):
        # Atribut / properties
        self.id = id            # ID barang (default -1 = invalid)
        self.nama = nama        # Nama barang
        self.harga = harga      # Harga barang (string biar fleksibel)
        self.merk = merk        # Merk barang
        self.kualitas = kualitas # Kualitas barang (misalnya "Bagus", "Standar", dll)

    # Setter & Getter untuk ID
    def set_id(self, id): 
        self.id = id
    def get_id(self): 
        return self.id

    # Setter & Getter untuk Nama
    def set_nama(self, nama): 
        self.nama = nama
    def get_nama(self): 
        return self.nama

    # Setter & Getter untuk Harga
    def set_harga(self, harga): 
        self.harga = harga
    def get_harga(self): 
        return self.harga

    # Setter & Getter untuk Merk
    def set_merk(self, merk): 
        self.merk = merk
    def get_merk(self): 
        return self.merk

    # Setter & Getter untuk Kualitas
    def set_kualitas(self, kualitas): 
        self.kualitas = kualitas
    def get_kualitas(self): 
        return self.kualitas

    # Method untuk menampilkan data barang
    def tampilkan(self):
        print(f"ID       : {self.id}")
        print(f"Nama     : {self.nama}")
        print(f"Harga    : {self.harga}")
        print(f"Merk     : {self.merk}")
        print(f"Kualitas : {self.kualitas}")
        print("--------------------------")

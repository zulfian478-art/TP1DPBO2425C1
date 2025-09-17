class Barang:
    def __init__(self, id=-1, nama="", harga="", merk="", kualitas=""):
        self.id = id
        self.nama = nama
        self.harga = harga
        self.merk = merk
        self.kualitas = kualitas

    # Setter & Getter
    def set_id(self, id): self.id = id
    def get_id(self): return self.id

    def set_nama(self, nama): self.nama = nama
    def get_nama(self): return self.nama

    def set_harga(self, harga): self.harga = harga
    def get_harga(self): return self.harga

    def set_merk(self, merk): self.merk = merk
    def get_merk(self): return self.merk

    def set_kualitas(self, kualitas): self.kualitas = kualitas
    def get_kualitas(self): return self.kualitas

    # Tampilkan data
    def tampilkan(self):
        print(f"ID       : {self.id}")
        print(f"Nama     : {self.nama}")
        print(f"Harga    : {self.harga}")
        print(f"Merk     : {self.merk}")
        print(f"Kualitas : {self.kualitas}")
        print("--------------------------")

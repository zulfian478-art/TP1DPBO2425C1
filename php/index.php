<?php
include "barang.php";   // pastikan class Barang sudah ada sebelum session_start
session_start();

// Inisialisasi array session
if (!isset($_SESSION['daftarBarang'])) {
    $_SESSION['daftarBarang'] = [];
}

// Ambil daftar file gambar dari folder images/
$files = [];
if (is_dir("images")) {
    $files = array_diff(scandir("images"), ['.', '..']);
}

// Tambah data
if (isset($_POST['tambah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $merk = $_POST['merk'];
    $kualitas = $_POST['kualitas'];

    // Ambil nama gambar dari input (local)
    $gambar = "images/" . $_POST['gambar'];

    $barang = new Barang($id, $nama, $harga, $merk, $kualitas, $gambar);
    $_SESSION['daftarBarang'][] = $barang;
}

// Update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    foreach ($_SESSION['daftarBarang'] as $b) {
        if ($b->getId() == $id) {
            $b->setNama($_POST['nama']);
            $b->setHarga($_POST['harga']);
            $b->setMerk($_POST['merk']);
            $b->setKualitas($_POST['kualitas']);

            // Update gambar jika dipilih baru
            if ($_POST['gambar'] != "") {
                $gambar = "images/" . $_POST['gambar'];
                $b->setGambar($gambar);
            }
        }
    }
}

// Hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    foreach ($_SESSION['daftarBarang'] as $key => $b) {
        if ($b->getId() == $id) {
            unset($_SESSION['daftarBarang'][$key]);
        }
    }
    $_SESSION['daftarBarang'] = array_values($_SESSION['daftarBarang']);
}

// Cari data
$cariBarang = null;
if (isset($_POST['cari'])) {
    $idCari = $_POST['idCari'];
    foreach ($_SESSION['daftarBarang'] as $b) {
        if ($b->getId() == $idCari) {
            $cariBarang = $b;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Elektronik</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background-color: #eee; }
        img { max-width: 100px; }
        .form-box { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>Toko Elektronik</h1>

    <!-- Form Tambah Barang -->
    <div class="form-box">
        <h3>Tambah Barang</h3>
        <form method="post">
            ID: <input type="text" name="id" required><br><br>
            Nama: <input type="text" name="nama" required><br><br>
            Harga: <input type="text" name="harga" required><br><br>
            Merk: <input type="text" name="merk" required><br><br>
            Kualitas: <input type="text" name="kualitas" required><br><br>
            Gambar: 
            <select name="gambar" required>
                <option value="">-- Pilih Gambar --</option>
                <?php foreach ($files as $f): ?>
                    <option value="<?= $f; ?>"><?= $f; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <button type="submit" name="tambah">Tambah</button>
        </form>
    </div>

    <!-- Form Cari Barang -->
    <div class="form-box">
        <h3>Cari Barang</h3>
        <form method="post">
            ID: <input type="text" name="idCari" required>
            <button type="submit" name="cari">Cari</button>
        </form>
        <?php if ($cariBarang != null): ?>
            <p><b>Data Ditemukan:</b></p>
            <p>ID: <?= $cariBarang->getId(); ?></p>
            <p>Nama: <?= $cariBarang->getNama(); ?></p>
            <p>Harga: <?= $cariBarang->getHarga(); ?></p>
            <p>Merk: <?= $cariBarang->getMerk(); ?></p>
            <p>Kualitas: <?= $cariBarang->getKualitas(); ?></p>
            <p><img src="<?= $cariBarang->getGambar(); ?>" alt="gambar"></p>
        <?php endif; ?>
    </div>

    <!-- Tabel Barang -->
    <h3>Daftar Barang</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Merk</th>
            <th>Kualitas</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php if (empty($_SESSION['daftarBarang'])): ?>
            <tr><td colspan="7">Belum ada data.</td></tr>
        <?php else: ?>
            <?php foreach ($_SESSION['daftarBarang'] as $b): ?>
                <tr>
                    <td><?= $b->getId(); ?></td>
                    <td><?= $b->getNama(); ?></td>
                    <td><?= $b->getHarga(); ?></td>
                    <td><?= $b->getMerk(); ?></td>
                    <td><?= $b->getKualitas(); ?></td>
                    <td><img src="<?= $b->getGambar(); ?>" alt="gambar"></td>
                    <td>
                        <!-- Form Update -->
                        <form method="post" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?= $b->getId(); ?>">
                            Nama: <input type="text" name="nama" value="<?= $b->getNama(); ?>" required><br>
                            Harga: <input type="text" name="harga" value="<?= $b->getHarga(); ?>" required><br>
                            Merk: <input type="text" name="merk" value="<?= $b->getMerk(); ?>" required><br>
                            Kualitas: <input type="text" name="kualitas" value="<?= $b->getKualitas(); ?>" required><br>
                            Gambar: 
                            <select name="gambar">
                                <option value="">-- (tidak diganti) --</option>
                                <?php foreach ($files as $f): ?>
                                    <option value="<?= $f; ?>"><?= $f; ?></option>
                                <?php endforeach; ?>
                            </select><br>
                            <button type="submit" name="update">Update</button>
                        </form>
                        <br><br>
                        <!-- Tombol Hapus -->
                        <a href="?hapus=<?= $b->getId(); ?>" onclick="return confirm('Hapus data?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
?>
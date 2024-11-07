<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahproduk</title>
</head>
<body>
    <h2>Tambah Varian baru</h2>
    <form action="tambahproduk.php" method="POST" enctype="multipart/form-data">
        <label>Nama Varian :</label>
        <input type="text" name="nama_produk" required><br><br>

        <label>Harga :</label>
        <input type="number" name="harga" required><br><br>

        <label>Foto Varian produk :</label>
        <input type="file" name="foto_produk" required><br><br>

        <label>Deksripsi :</label>
        <textarea name="deksripsi" required></textarea><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prossTambah.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nama">Nama produk</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga">
        </div>
        <div>
            <label for="deksripsi">Deksripsi</label>
            <textarea type="text" name="deksripsi" id="deksripsi"></textarea>
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto">
        </div>

        <input type="submit" value="Simpan  ">
    </form>
</body>
</html>
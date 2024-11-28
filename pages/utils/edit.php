<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <from action="prosesEdit" method="post">
        <input type="hidden" name="nama" value="<?= $produk['nama'] ?>">
        <div class="edit">
            <p>Nama</p>
            <input type="text" name="id" />
        </div>
        <div class="edit">
            <p>Harga</p>
            <input type="text" name="harga" />
        </div>
        <div class="edit">
            <p>deksripsi</p>
            <input type="text" name="deksripsi" />
        </div>
        <div class="edit">                                                  
            <p>File</p>
            <input type="file" name="foto" />
        </div>
        <div class="edit">
            <p>Lokasi</p>
            <input type="lokasi" name="lokasi_file" />
        </div>
        <button type="submit">Edit</button>

</body>

</html>
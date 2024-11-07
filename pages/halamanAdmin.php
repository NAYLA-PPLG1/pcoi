<?php
    session_start();
    if( $_SESSION['role'] != "admin")
    {
        echo "405 Anda tidak berhak untuk masuk ke halaman ini";
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container title my-5 d-flex justify-content-center flex-column align-items-center">
        <h1>DAFTAR PRODUK</h1>
        <table class="table table-striped mt-4">
            <tr>
                <th>Nama produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Deksripsi</th>
            </tr>

            <?php
                include './koneksi/koneksi.php';
                $data = mysqli_query($koneksi, "select * from produk");
                while($d = mysqli_fetch_array($data)){ ?>
                <tr>
                    <td><?php echo $d['nama']?></td>
                    <td><?php echo $d['harga']?></td>
                    <td><?php echo $d['foto']?></td>
                    <td><?php echo $d['deksripsi']?></td>
                </tr>
               <?php } ?>
        </table>
            <br><br><br>
            <a href="tambahproduk.php" class="add-button">+ Tambah varian</a>
    </div>    
</body>
</html>


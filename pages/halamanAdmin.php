<?php
    session_start();
    if( $_SESSION['role'] !== "admin")
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
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    .lexend-<uniquifier> {
        font-family: "Lexend", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
     body {
        font-family: "Lexend", serif;
    }

    nav {
        background-color: transparent;
        backdrop-filter: blur(4px);
    }


    .list-style-non {
        list-style: none;
    }
</style>
<body>
<nav class="fixed-top navbar d-flex flex-row">
        <div class="container d-flex font-bold text-light align-items-center">
            <span class="navbar-brand mb-0 h1 font-bold text-dark">PCOI NAY</span>
            <ul class="list-style-non d-flex flex-row gap-4 mb-0 text-dark align-items-center">
                <li><a href=""></a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#product">PRODUK</a></li>
                <?php
                // while ($data = mysqli_fetch_array($queryUser)):
                if (isset($_SESSION['role'])) {
                    ?>
                    <div class="fs-5">
                        <?php echo $_SESSION['username'] ?>

                    </div/>
                    <a class="btn btn-danger" href="./auth/logout.php">Logout</a>

                <?php } else { ?>
                    <a class="btn btn-primary" href="./auth/login.php">login</a>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <div class="container title my-5 p-5 d-flex justify-content-center flex-column align-items-center">
        <h1>DAFTAR PRODUK</h1>
        <table class="table table-striped mt-4">
            <tr>
                <th>id</th>
                <th>Nama produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Deksripsi</th>
                <th>Keterangan</th>
            </tr>

            <?php
                include './koneksi/koneksi.php';
                $data = mysqli_query($koneksi, "select * from produk");
                while($d = mysqli_fetch_array($data)){ ?>
                <tr>
                    <td><?php echo $d['id']?></td>
                    <td><?php echo $d['nama']?></td>
                    <td><?php echo $d['harga']?></td>
                    <td><?php echo $d['foto']?></td>
                    <td><?php echo $d['deksripsi']?></td>
                    <td>
                        <a href="./utils/delete.php?id=<?php echo $d['id']; ?>">hapus</a>
                        <a href="./utils/edit.php?id=<?php echo $d['id']; ?>">edit</a>
                    </td>
                </tr>
               <?php } ?>
        </table>
            <br><br><br>
            <a href="tambahproduk.php" class="add-button">+ Tambah varian</a>
    </div>    
    </section>
</body>
</html>


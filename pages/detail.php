<?php
session_start();
include("./koneksi/koneksi.php");

if (!isset($_GET['id'])) {
    echo "Halaman Tidak Tersedia";
    die();
}
$id = $_GET["id"];

$query = mysqli_query($koneksi, "SELECT produk.id, produk.nama, produk.harga, produk.foto, produk.deksripsi, kategori.id AS id_kategori, kategori AS nama_kategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id
where produk.id='$id'");

if (mysqli_num_rows($query) == 0) {
    echo "Data tidak ditemukan";
    die();
}
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("./components/navbar.php"); ?>

    <div class="container mt-5 pt-3">
        <div class="card p-0 row d-flex justify-content-center m-3" style="width: 18rem; ">
            <div class="">
                <img src="../assets/foto_produk/<?= $data['foto'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $data['nama'] ?></h5>
                <h5 class="card-tittle"><?= $data['harga'] ?></h5>
                <h5 class="card-title">Kategori : <?= $data['nama_kategori']?></h5>
                <p class="card-tittle"><?= $data['deksripsi'] ?></p>
                <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</body>

</html>
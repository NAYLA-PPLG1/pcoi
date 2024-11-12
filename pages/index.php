<?php
session_start();
include("./koneksi/koneksi.php");

$query = mysqli_query($koneksi, "select * from produk");
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

    .image {
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .child-image-content {}
</style>

<body>
    <nav class="fixed-top navbar d-flex flex-row">
        <div class="container d-flex font-bold text-light align-items-center">
            <span class="navbar-brand mb-0 h1 font-bold text-dark">PCOI NAY</span>
            <ul class="list-style-non d-flex flex-row gap-5 mb-0 text-dark align-items-center">
                <li><a href=""></a></li>
                <li><a href="#home">HOME</a></li>
                <li><a href="#product">PRODUK</a></li>
                <?php if (isset($_SESSION['role'])) { ?>
                    <?php echo $_SESSION['username'] ?>
                    <a class="btn btn-danger" href="./auth/logout.php">Logout</a>

                <?php } else { ?>
                    <a class="btn btn-primary" href="./auth/login.php">login</a>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <section id="home">
        <div class="container p-5 d-flex justify-content-center mt-3">
            <div class="child-image-content">
                <img src="../images/pangsit chili oil.png" alt="">
            </div>
        </div>
    </section>

    <section id="product">
        <div class="container">
            <div class="row">

                <div class="title my-5 d-flex justify-content-center flex-column align-items-center">
                    <h1 class="fs-2 text-secondary">MENU</h1>
                    <p class="">Lor ipsum domet consectetur.</p>
                </div>

                <div class="container mt-4 d-flex gap-5"></div>
                <?php
                while ($data = mysqli_fetch_array($query)):
                    ?>
                    <div class="card p-0 row d-flex justify-content-center m-3 " style="width: 18rem;">
                        <div class="">
                            <img src="../assets/foto_produk/<?= $data['foto'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama'] ?></h5>
                            <h5 class="card-tittle"><?= $data['harga'] ?></h5>
                            <a href="detail.php?id=<?= $data['id']?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>
</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
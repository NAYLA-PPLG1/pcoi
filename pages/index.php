<?php
session_start();
include("./koneksi/koneksi.php");

$query = mysqli_query($koneksi, "select * from produk");
// $queryUser = mysqli_query($koneksi, "select * from users");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>

    body {
        font-family: "Lexend", serif;
        margin: 0;
        padding: 0;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        color: lightslategray;
    }

    nav {
        background-color: transparent;
        backdrop-filter: blur(4px);
    }

    footer {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
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

    #home {
        width: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.8)), url('../images/pcoil.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }

    #contact {
        position: sticky;
        bottom: 30px;
        margin-top: 40px;
    }

    .contact__container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .child-image-content {
        height: 50%;
    }

    .contact__inside {
        padding: 12px 32px;
        border-radius: 30px;
    }

    #home>.img__container {
        width: 100%;
        height: 100vh;
    }

    #contact i {
        color: #070b15;
        padding: 0 8px;
    }

    #informasi {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    #informasi .info__container {
        width: 82%;
        text-align: center;
    }

    .info__container>.info__title {
        padding: 0 100px;
    }

    .info__container>.info__value {
        width: 50%;
        margin: 60px 0;
    }

    .container__value {
        display: flex;
        justify-content: space-around;
        gap: 20px;
    }




    .child-image-content {}
</style>

<body>
    <header class="d-inline top-0">
        <section id="home" class="h-100 ">
            <div class="img__container d-flex justify-content-centeR">

                <div class="d-flex flex-column text-light">
                <h1>PCOI NAY</h1>
                <p>Enaknya di setiap level</p>
                </div>
                <div class="child-image-content">
                    <img src="../images/pcoil.png" alt="">
                </div>
            </div>
        </section>

        <nav class="sticky-top navbar d-flex flex-row bg-secondary-subtle">
            <div class="container d-flex font-bold text-light align-items-center">
                <span class="navbar-brand mb-0 h1 font-bold text-dark">PCOI NAY</span>
                <ul class="list-style-non d-flex flex-row gap-4 mb-0 text-dark align-items-center list-style-non">
                    <li><a href=""></a></li>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#product">PRODUK</a></li>
                    <li><a href="./halamanAdmin.php">DASHBOARD</a></li>
                    
                   
                        <?php
                    // while ($data = mysqli_fetch_array($queryUser)):
                    if (isset($_SESSION['role'])) {
                        ?>
                        <div class="fs-5">
                            <li>
                                <?php echo $_SESSION['username'] ?>
                            </li>
                        </div />
                        <a class="btn btn-danger" href="./auth/logout.php">Logout</a>

                    <?php } else { ?>
                        <a class="btn btn-primary" href="./auth/login.php">login</a>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="product">
            <div class="container">
                <div class="row">

                    <div class="title my-5 d-flex justify-content-center flex-column align-items-center">
                        <h1 class="fs-2 text-secondary">MENU</h1>
                        <p class="">let's look at our menu</p>
                    </div>

                    <div
                        class="container mt-4 d-flex gap-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    </div>
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
                                <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </section>

        <section id="informasi">
            <div class="info__container m-5">
                <div class="info__title">
                    <h1>PANGSIT CHILI OIL NAYLA</h1>
                    <p>NIKMATI DI SETIAP LEVEL !!</p>
                </div>
                <div class="container__value">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/foto_produk/pangsit chili oil.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/foto_produk/pangsit-kuah.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
        </section>

        <section id="contact">
            <div class="contact__container">
                <div class="contact__inside bg-secondary-subtle">
                    <a href="https://www.instagram.com/fanylaai/"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/089686024135"> <i class="bi bi-whatsapp"></i></a>
                    <a href="https://myaccount.google.com/?hl=in&utm_source=OGB&utm_medium=act&gar=WzI4MV0"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </section>


    </main>
    <footer class="bg-primer-subtle">
        <div>
            INI FOOTER BLOg
        </div>
    </footer>

</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
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
    .list-style-non {
        list-style: none;
    }
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
</style>
<body>
<nav class="fixed-top navbar d-flex flex-row">
        <div class="container d-flex font-bold text-light align-items-center">
            <span class="navbar-brand mb-0 h1 font-bold text-dark">PCOI NAY</span>
            <ul class="list-style-non d-flex flex-row gap-5 mb-0 text-dark align-items-center">
          
                <li><a href=""></a></li>
                <li>HOME</li>
                <li>PRODUK</li>
                <?php if (isset($_SESSION['role'])) { ?>
                    <?php echo $_SESSION['username'] ?>
                    <a class="btn btn-danger" href="./auth/logout.php">Logout</a>

                <?php } else { ?>
                    <a class="btn btn-primary" href="./auth/login.php">login</a>
                <?php } ?>
            </ul>
        </div>
    </nav>
</body>
</html>
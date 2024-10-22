<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    include("koneksi.php");

    //mendapatkan data
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "select * from users where email='$email'");


    $jumlah_data = mysqli_num_rows($query);

    if($jumlah_data > 0){
        $data = mysqli_fetch_array($query);

        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        header("Location: nav.php");
    }else{
        header("Location: login.php?error=username atau password salah");
    }
    ?>
</body>
</html>
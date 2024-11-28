<?php
    include ("../../koneksi/koneksi.php");
    session_start(); 
    //mendapatkan data
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "select * from users where email='$email'");

    $jumlah_data = mysqli_num_rows($query);

    if($jumlah_data > 0){
        $data = mysqli_fetch_array($query);
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        if($_SESSION['role'] === "admin"){
            header("Location: ../../halamanAdmin.php");
        }else{
            header("Location: ../../index.php");
        }

    }else{
        header("Location: ../login.php?error=username atau password salah");
    }
    ?>
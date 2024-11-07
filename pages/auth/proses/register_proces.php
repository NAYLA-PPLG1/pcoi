<?php
   include ("../../koneksi/koneksi.php");
    session_start(); 
    //mendapatkan data
    $nama = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "INSERT INTO users VALUES ('' , '$email', 'user','$password' , '$nama')");

    header("Location: ../login.php");
    ?>
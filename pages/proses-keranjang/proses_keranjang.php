<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:http://localhost:8080/nayla web/pcoiafter/pages/auth/login.php");
    }

    include "../koneksi/koneksi.php";
    $user_id = $_SESSION['id'];

    $produk_id = $_GET['id'];

    $query = mysqli_query($koneksi, "INSERT INTO cart VALUES (null, $user_id, now())");
    $cart_id = mysqli_insert_id($koneksi);

    $query = mysqli_query($koneksi, "INSERT INTO cart_items VALUES (null, $cart_id, $produk_id, now())");

?>
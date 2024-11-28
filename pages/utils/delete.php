<?php 
    include '../koneksi/koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "delete from produk where id=$id");

    header("Location:../halamanAdmin.php");
?>s
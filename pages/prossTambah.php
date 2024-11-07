<?php
    include("./koneksi/koneksi.php");

    $nama = $_POST["nama"];
    $deksripsi = $_POST["deksripsi"];
    $harga = $_POST["harga"];
    $namafoto = $_FILES["foto"]["name"];
    $lokasifoto = $_FILES["foto"]["tmp_name"];

    $query = mysqli_query($koneksi, "insert into produk values( null, '$nama', '$harga', '$namafoto', '$deksripsi', 2)");

    if($query){
        move_uploaded_file($lokasifoto, to: "../assets/foto_produk/$namafoto");

        header("location:halamanAdmin.php");
    };

?>
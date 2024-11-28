<?php
include '../koneksi/koneksi.php';
    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $deksripsi = $_POST["deksripsi"];
    $harga = $_POST["harga"];
    $namafoto = $_FILES["foto"]["name"];
    $lokasifoto = $_FILES["foto"]["tmp_name"];

$sql = "update produk set id='$id' where nama='$nama'";
$query = mysqli_query($koneksi, $sql);
if (!$query) {
die(mysqli_error($koneksi));
}
header("Location: ../halamanAdmin.php");
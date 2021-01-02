<?php 
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
mysqli_query("INSERT INTO daftarhargafashion VALUES('','$kode','$nama','$harga')");
 
header("location:index.php?pesan=input");
?>
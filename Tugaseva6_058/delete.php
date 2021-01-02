<?php 

include 'koneksi.php';

$id =$_GET['kode'];

$query="DELETE FROM daftarhargafashion WHERE kode = '$id'";

$delete = mysqli_query($host,$query);
if (!$delete) {
	echo "<b>Hapus Data Gagal</b>";
}
else{
	echo "<b>Hapus Data Berhasil</b>";
}


 ?>
 <br>
 <a href="index.php">HOME</a>




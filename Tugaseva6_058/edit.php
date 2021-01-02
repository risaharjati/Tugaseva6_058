<?php 

include 'koneksi.php';

$id=$_GET['kode'];

$query = "SELECT * FROM daftarhargafashion WHERE kode='$id'"; 

$tampil = mysqli_query($host,$query);

if (isset($_POST['simpan'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];

	//Query edit data
	$query2 = "UPDATE daftarhargafashion SET
	 kode='$kode',
	 nama='$nama',
	 harga='$harga'
	 WHERE kode = '$id'";

	 $ubah = mysqli_query($host,$query2);

	 if (!$ubah) {
	 	echo "<b>Data Gagal Diubah</b>";
	 }
	 else{
	 	echo "<b>Data Berhasil Diubah</b>";
	 }

}




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Data</title>
 </head>
 <body>
 <?php while ($show = mysqli_fetch_array($tampil)){ ?>
	<form method="post">
		<table>
			<tr>
				<td>Kode Kue</td>
				<td>
					<input type="Varchar" name="kodekue" value="<?=$show['kodekue']?>">

				</td>
			</tr>
			<tr>
				<td>Nama Kue</td>
				<td>
					<input type="text" name="namakue" value="<?=$show['namakue']?>">
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<input type="INT" name="harga" value="<?=$show['harga']?>">
				</td>
			</tr>
			<tr>
				<td><button name="simpan">Simpan</button></td>
			
				

			</tr>
		</table>

	</form>
		 <a href="index.php">HOME</a>


<?php } ?>
 
 </body>
 </html>
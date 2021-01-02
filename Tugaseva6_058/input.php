<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style CRUD.css">
</head>
<body>
	<div class="judul">		
		<h2>Menampilkan Daftar Harga Toko Tas 125 </h2>
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Kode</td>
				<td><input type="varchars" name="kode"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="Int" name="harga"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
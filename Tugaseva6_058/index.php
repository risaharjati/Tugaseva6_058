<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="style CRUD.css">
</head>
<body>
    <div class="judul">     
        <h2>Menampilkan Daftar Harga Toko Tas 125</h2>
    </div>
    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>

    
    
                <a href="input.php" class="btn btn-primary"> + Tambah Data</a>
                <table class="table table-bordered" border="1">

                    <tr>
                        <br><br>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php 
                        include "koneksi.php";
                        $sql = 'SELECT * FROM daftarhargafashion';
                        $result = mysqli_query($host, $sql);
                        while($daftarharga=mysqli_fetch_array($result))
                        {
                    ?>
                    <tr>
                        
                        <td> <?php echo $daftarharga['kode']; ?> </td>
                        <td> <?php echo $daftarharga['nama']; ?> </td>
                        <td> Rp.<?php echo $daftarharga['harga']; ?> </td>
                        <td>
                            <a href="edit.php?kodekue=<?php echo $tampil['kode']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?kodekue=<?php echo $tampil['kode']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  //inlcude atau memasukkan file koneksi ke database
  include "koneksi.php";
    
  if(isset($_POST['submit'])){
    // menangkap data yang di kirim dari form
    $nama_mhs = $_POST['nama_mhs'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    
    //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
    $query = "INSERT INTO mahasiswa (nama_mhs, nim, alamat) values('$nama_mhs', '$nim', '$alamat')";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        echo "Tambah data gagal";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menambahkan data ke database</h2>
	</div>
	<br/>
  <a href="index.php">Kembali ke halaman index</a>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama_mhs"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
          <textarea name="alamat" cols="24" rows="5"></textarea>
        </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" name="submit"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
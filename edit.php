<?php 
  // koneksi database
  include 'koneksi.php';

  if(isset($_POST['update'])) {
    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $nama_mhs = $_POST['nama_mhs'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    $query="UPDATE mahasiswa SET nama_mhs='$nama_mhs',nim='$nim',alamat='$alamat' where id='$id'";
    $sql = mysqli_query($koneksi, $query);
    
    if( $sql ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
  }
?>

<?php
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id");
  $row = mysqli_fetch_array($data);
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
		<h2>Merubah data dari database</h2>
	</div>
	<br/>
  <a href="index.php">Kembali ke halaman index</a>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa where id='$id'");
	while($row = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $row['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
          <td>
            <textarea name="alamat" cols="24" rows="5"><?php echo $row['alamat']; ?></textarea>
          </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" name="update"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>
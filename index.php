<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
	<a href="tambah.php">+ TAMBAH DATA MAHASISWA</a>
	<br/>
	<br/>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Alamat Mahasiswa</th>
			<th>Action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_mhs']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a> |
					<a href="hapus.php?id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
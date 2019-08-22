<?php 
  // koneksi database
  include 'koneksi.php';

  if (isset($_POST['update'])) {
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
<?php
  $koneksi = mysqli_connect("localhost","root","","tugas_cloud");
 
  // untuk check connection
  if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }
?>
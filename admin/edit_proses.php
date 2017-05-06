<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("connection.php");

  // membuat variabel untuk menampung data dari form edit
  $username = $_POST['username'];
  $password = $_POST['password'];
	$level	= $_POST['level'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE user SET ";
  $query .= " password = '$password', ";
  $query .= "level='$level', ";
  $query .= "WHERE username = '$username'";


  $result = mysqli_query($connection, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($connection).
       " - ".mysqli_error($connection));
  }
}

//lakukan redirect ke halaman index.php
header("location:haladmin.php");


?>

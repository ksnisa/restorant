<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'connection.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  
  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO user VALUES ('$username', '$password', '$level','')";
  $result = mysqli_query($connection, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_error($connection).
           " - ".mysqli_error($connection));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:haladmin.php");
?>

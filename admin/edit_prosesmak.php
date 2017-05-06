<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("connection.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $nama_pemesan = $_POST['nama_pemesan'];
  $nama_makanan = $_POST['nama_makanan'];
	$jumlah_pesanan	= $_POST['jumlah_pesanan'];
  $meja_pemesan = $_POST['meja_pemesan'];
  $harga = $_POST['harga'];
  $status = $_POST['status'];
  //buat dan jalankan query UPDATE
  $query  = "UPDATE pesan_makanan SET ";
  $query .= "nama_pemesan = '$nama_pemesan', nama_makanan = '$nama_makanan', ";
  $query .= "jumlah_pesanan='$jumlah_pesanan', meja_pemesan = '$meja_pemesan' ";
  $query .= "harga ='$harga', status='$status'";
  $query = "WHERE id = '$id'";

  $result = mysqli_query($connection, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($connection).
       " - ".mysqli_error($connection));
  }
}

//lakukan redirect ke halaman index.php
header("location:halpegawai.php");


?>

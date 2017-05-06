<?php
// buka koneksi dengan MySQL
  include("connection.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["id"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM pesan_makanan WHERE id='$id' ";
    $hasil_query = mysqli_query($connection, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($connection).
           " - ".mysqli_error($connection));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:halpegawai.php");
?>

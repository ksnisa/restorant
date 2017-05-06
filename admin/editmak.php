<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'connection.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id= ($_GET["id"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM pesan_makanan WHERE id=$id";
    $result = mysqli_query($connection, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($connection).
         " - ".mysqli_error($connection));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $nama_pemesan = $data["nama_pemesan"];
    $nama_makanan = $data["nama_makanan"];
    $jumlah_pesanan = $data["jumlah_pesanan"];
    $meja_pemesan = $data["meja_pemesan"];
    $harga = $data["harga"];
    $status = $data["status"];
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:halpegawai.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="" action="edit_prosesmak.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data </legend>
          <p>
            <label for="nama_pemesan">nama pemesan : </label>
            <input type="text" name="nama_pemesan" id="nama_pemesan" value="<?php echo $nama_pemesan ?>">
          </p>
          <p>
            <label for="nama_makanan">Nama Makanan : </label>
            <input type="text" name="nama_makanan" id="nama_makanan" value="<?php echo $nama_makanan ?>">
          </p>
          <p>
            <label for="jumlah_pesanan">Jumlah Pesanan : </label>
            <input type="text" name="jumlah_pesanan" id="jumlah_pesanan" value="<?php echo $jumlah_pesanan ?>">
          </p>
          <p>
            <label for="meja_pemesan">Meja Pemesan : </label>
            <input type="text" name="meja_pemesan" id="meja_pemesan" value="<?php echo $meja_pemesan ?>">
          </p>
          <p>
            <label for="harga">harga : </label>
            <input type="text" name="harga" id="harga" value="<?php echo $nama_makanan ?>">
          </p>
          <p>
            <label for="status" >status : </label>
              <select name="status" id="status">
                <option value="lunas" <?php if($data['status'] == 'lunas'){ echo 'selected'; } ?>>
                Lunas </option>
                <option value="pending" <?php if($data['status'] == 'pending'){ echo 'selected'; } ?>>
              </select>
          </p>
         
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>

<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'connection.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['username'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $username = ($_GET["username"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($connection, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($connection).
         " - ".mysqli_error($connection));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $username = $data["username"];
    $password = $data["password"];
    $level = $data["level"];
    
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:haladmin.php");
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
      <form id="" action="edit_proses.php" method="post">
        <fieldset>
        <legend>Edit Data user</legend>
          <p>
            <label for="username">username : </label>
            <input type="text" name="username" id="username" value="<?php echo $username ?>">
          </p>
          <p>
            <label for="password">password : </label>
            <input type="text" name="password" id="password" value="<?php echo $password ?>">
          </p>
          <p>
            <label for="level" >level : </label>
              <select name="level" id="level">
                <option value="Administrator" <?php if($data['level'] == 'Administrator'){ echo 'selected'; } ?>>
                Administrator </option>
                <option value="pegawai" <?php if($data['level'] == 'pegawai'){ echo 'selected'; } ?>>pegawa</option>
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

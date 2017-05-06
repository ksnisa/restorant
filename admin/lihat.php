<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
				<?php
				$nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
				?> 
				<div class="pull-left">
				<p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
				</div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
				<li></i></li>
                
                <li ><a href="haladmin.php">Master Data</a></li>
                <li><a href="tambahpeg.php">Tambah Data</a></li>
                <li class="active"><a href="lihat.php">lihat laporan</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li>
            </ul>
        </div>
    </div>
</nav>
		
<div class="container" style="margin-top:40px">
 <h2> Data Makanan</h2>
 <table border="10">
 	<tr>
 		<th>No</th>
 		<th>username</th>
 		<th>level</th>
 		<th>jumlah</th>
    <th>ket</th>
 	</tr>
 	<?php
 		include 'connection.php';
    $harga = "SELECT * FROM harga_makanan ORDER BY nama_makanan";
 		$query = "SELECT * FROM pesan_makanan ORDER BY nama_pemesan ASC";
      $result = mysqli_query($connection, $query);
 	if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      $no=1;		
 	while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nama_pemesan]</td>"; //menampilkan data nim
        echo "<td>$data[nama_makanan]</td>"; //menampilkan data nama
  		  echo "<td>$data[jumlah_pesanan]</td>"; //menampilkan data nama
       
      echo '<td> 
  				<a href="edit.php?nama_pemesan"='.$data['nama_pemesan'].'">Edit</a>
  				<a href="hapus.php?nama_pemesan"='.$data['nama_pemesan'].'"
  					onclick="return confirm(\'Anda yakin hapus\')"
  				>Hapus</a>
  			  </td>';
        

        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
</div>				

</body>
</html>
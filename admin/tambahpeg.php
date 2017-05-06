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
                
                <li class="active"><a href="haladmin.php">Master Data</a></li>
                <li><a href="add.php">Tambah Data</a></li>
                <li><a href="lihat.php">lihat laporan</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li>
            </ul>
        </div>
    </div>
</nav>
		
<div class="container" style="margin-top:40px">
 <h2> Input data</h2>
<form id="form_rest" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Pegawai</legend>
          <p>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" placeholder="text">
          </p>
          <p>
            <label for="password">password : </label>
            <input type="password" name="password" id="password">
          </p>
          <p>
            <label for="level" >level : </label>
              <select name="level" id="level">
                <option value="Administrator">Administrator </option>
                <option value="pegawai">pegawai</option>
                </select>
          </p>
        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
</div>				

</body>
</html>
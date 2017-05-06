<?php
session_start();
include "../koneksi.php";
if(isset($_SESSION['username']))
{
	$meno = $_POST['meno'];
	$pesan1 = $_POST['pesan1'];
	$hataru = $_POST['hataru'];
	$pesan2 = $_POST['pesan2'];
	$fuida = $_POST['fuida'];
	$pesan3 = $_POST['pesan3'];
	$suishi = $_POST['suishi'];
	$pesan4 = $_POST['pesan4'];
	$rekota = $_POST['rekota'];
	$pesan5 = $_POST['pesan5'];
	$ritana = $_POST['ritana'];
	$pesan6 = $_POST['pesan6'];
	$ootoshi = $_POST['ootoshi'];
	$pesan7 = $_POST['pesan7'];
	$daruto = $_POST['daruto'];
	$pesan8 = $_POST['pesan8'];
	$iwana = $_POST['iwana'];
	$pesan9 = $_POST['pesan9'];
	$meja = $_POST['meja'];
	
	if($meno == "" && $hataru == "" && $fuida == "" && $suishi == "" && $rekota == "" && $ritana == "" && $ootoshi == "" && $daruto == "" && $iwana == "" && $pesan1 == "" && $pesan1 == "" && $pesan2 == "" && $pesan3 == "" && $pesan4 == "" && $pesan5 == "" && $pesan6 == "" && $pesan7 == "" && $pesan8 == "" && $pesan9 == "")
	{
		?>
        <script type="text/javascript">
			alert("Tolong isi pesanan anda!");
			document.location.href = "../index.html";
		</script>
        <?php
	}
	else
	{
	$array_makanan = array("$meno","$hataru","$fuida","$suishi","$rekota","$ritana","$ootoshi","$daruto","$iwana");
	$array_pesanan = array("$pesan1","$pesan2","$pesan3","$pesan4","$pesan5","$pesan6","$pesan7","$pesan8","$pesan9");
	
	$hitung = count($array_makanan);
	for($i = 0; $i < $hitung; $i++)
	{
		if($array_makanan[$i] != "" && $array_pesanan[$i] != "")
		{
			$simpan = mysql_query("insert into pesan_makanan values('".$_SESSION['username']."','".$array_makanan[$i]."','".$array_pesanan[$i]."','$meja')");
		}
		else
		{
		}
	}
	echo "<script type='text/jscript'>alert('Silahkan membayar terlebih dahulu');
	document.location.href = 'logout.php';
	 </script>";
	}
}
else
{
	echo "<script language='javascript'> 
			document.location.href = '../login.html'; 
			</script>";
}
?>
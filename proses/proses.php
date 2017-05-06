<?php
session_start();
include "../koneksi.php";

$username = mysql_real_escape_string ($_POST['username']);

if($username == "")
	{
		echo "<script language='javascript'> 
			document.location.href = '../login.html'; 
			</script>";
	}
else
{
	$_SESSION['username'] = $username;
		
		//redirect ke hlm utama.php
	?>
	<script language="javascript"> document.location.href = "../index.php"; </script>
	<?php
}

?>
<?php
	session_start();
	// unset($_SESSION['username']);
	// unset($_SESSION['class']);
	$_SESSION['username'] = "x";
	$_SESSION['class'] = "admin";
?>
<html>
<head>
<title> Pettractthai BackEn System</title>
</head>
<body>
	<?php
		if(isset($_SESSION['username']) && isset($_SESSION['class'])){
			if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
				echo "1";
				echo "<script language='javascript'>";
				echo "window.location.href='Certificate.php';";
				echo "</script>";
			} 
			else if ($_SESSION['class'] == 'user') {
				echo "2";
				echo "<script language='javascript'>";
				echo "window.location.href='../template.html';";
				echo "</script>";
			} 
			else{
				echo "<script language='javascript'>";
			 	echo "window.location.href='login.php';";
			 	echo "</script>";
			}
		}
		else{
			echo "<script language='javascript'>";
			echo "window.location.href='login.php';";
			echo "</script>";
		}
	?>
</body>
</html> 

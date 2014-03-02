<?php
	session_start();
	
	if(isset($_SESSION['username']) && isset($_SESSION['class'])){
      if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
        
      } 
      else if ($_SESSION['class'] == 'user') {
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

	include_once('../api/config.php');

	if(isset($_GET['item']) && isset($_GET['pname']) && isset($_GET['price']) && isset($_GET['detail'])){

	$Item = $_GET['item'];
	$Pname = $_GET['pname'];
	$Price = $_GET['price'];
	$Detail = $_GET['detail'];
	$sql=	"UPDATE `product` SET `productname`='{$Pname}',`price`='{$Price}',`detail`='{$Detail}' WHERE `productid`='{$Item}' ";
		
	mysql_query($sql,$conn);
	}
?>
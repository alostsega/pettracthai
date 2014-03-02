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

	if( isset($_GET['pname']) && isset($_GET['price']) && isset($_GET['detail'])){

  $sql = "SELECT productid FROM product ORDER BY productid DESC LIMIT 0,1";
  $result=mysql_query($sql);
  if (empty($result)) $oldID="P0000001";
  else list($oldID)=mysql_fetch_row($result);

  $No = intval (substr($oldID,1,7));
  $No = $No + 1;
  $newID = "P".str_pad($No, 7, "0", STR_PAD_LEFT);
  

	$Name = $_GET['pname'];
  $Price = $_GET['price'];
  $Detail = $_GET['detail'];
  echo $newID ;
	
	$sql= "INSERT INTO `pettracthai`.`product`(`productid`, `productname`, `price`, `detail`) VALUES ('{$newID}','{$Name}','{$Price}','{$Detail}')";
	
	mysql_query($sql,$conn);
	
	}
?>
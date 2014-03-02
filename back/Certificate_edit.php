<?php
	session_start();
	include_once('../api/config.php');
	if(isset($_SESSION['username']) && isset($_SESSION['class'])){
      if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
          if(isset($_GET['microchipid'])){

          $ID = $_GET['microchipid'];
          $Pname = $_GET['pname'];
          $Oid = $_GET['oid'];
          $sql= "UPDATE `certificate` SET `petname`='{$Pname}',`oid`='{$Oid}' WHERE `microchip`='{$ID}' ";
            
          mysql_query($sql,$conn);

          $sql = "SELECT `ofirstname` FROM `owner` WHERE `oid` = '{$Oid}'";
          $result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
          list($oName) = mysql_fetch_row($result);
          echo $oName;
          }
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


?>
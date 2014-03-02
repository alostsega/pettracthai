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
    echo "ABCDEF";

  if(isset($_GET['orderid'])){
  $ID = $_GET['orderid'];
  $sql= "DELETE FROM  `order` WHERE `orderid` ='{$ID}' ";
  var_dump($sql);
  mysql_query($sql,$conn);
  }
?>


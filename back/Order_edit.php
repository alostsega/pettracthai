<?php
  session_start(); 

  include_once('../api/config.php');

  if(isset($_GET['orderid']) && isset($_GET['status']) ){

  $orderid = $_GET['orderid'];
  $status =  $_GET['status'];
  $sql= "UPDATE `order` SET `status`='{$status}' WHERE `orderid`='{$orderid}' ";
    
  mysql_query($sql,$conn);
  }
?>
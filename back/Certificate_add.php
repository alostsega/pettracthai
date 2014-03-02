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
	if(isset($_GET['microchipid'])){
	$ID = $_GET['microchipid'];
	// $choices = split(",",$temp);

	// $sql = "SELECT TopicID FROM topic ORDER BY TopicID DESC LIMIT 0,1";
	// $result=mysql_query($sql);

	// if (empty($result)) $oldID="T0001";
	// else list($oldID)=mysql_fetch_row($result);

	// $No = intval (substr($oldID,1,4));
	// $No = $No + 1;
	// $newID = "T".str_pad($No, 4, "0", STR_PAD_LEFT);
	
	$sql= "INSERT INTO `pettracthai`.`certificate` (`microchip`, `petname`, `specie`, `breed`, `age`, `sex`, `color`, `vid`, `oid`, `date`) VALUES ('{$ID}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
	
	mysql_query($sql,$conn);
	
	// foreach($choices as $row){
	// 	$sql = "SELECT ChoiceID FROM choice ORDER BY ChoiceID DESC LIMIT 0,1";
	// 	$result=mysql_query($sql);
	// 	if (empty($result)) $oldID="C0001";
	// 	else list($oldID)=mysql_fetch_row($result);
	
	// 	$No = intval (substr($oldID,1,4));
	// 	$No = $No + 1;
	// 	$newChoiceID = "C".str_pad($No, 4, "0", STR_PAD_LEFT);
		
	// 	$sql= "INSERT INTO  choice(`ChoiceID`,`TopicID`,`ChoiceName`) VALUES ('{$newChoiceID}','{$newID}','{$row}')";
	
	// 	mysql_query($sql,$conn);
	// }
	}
?>
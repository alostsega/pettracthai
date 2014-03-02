<?php
	session_start();
	include_once('../api/config.php');
	if(isset($_SESSION['username']) && isset($_SESSION['class'])){
      if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
      		$out = '<select id="editOid"> ';
      		$Oid = $_GET['oid'];
        	$sql= "SELECT `oid`,`ofirstname` FROM `owner` ORDER BY `oid` ASC";
			$result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				if ($Oid == $row['oid']) {
					$out = $out . '<option value="' . $row['oid'] . '" selected >' . $row['oid'] .' : ' . $row['ofirstname']. '</option>';
				}
				else{
					$out = $out . '<option value="' . $row['oid'] . '">' . $row['oid'] .' : ' . $row['ofirstname']. '</option>';
				}
			}
			$out = $out."</select>"; 
			echo $out;
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
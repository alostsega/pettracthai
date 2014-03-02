<?php
	include_once('config.php');
	include_once('php_useful.php');
	if(!isset($_GET['token'],$_GET['username'],$_GET['OTP'],$_POST['newpassword']))
	{
		//no data
		echo json_encode(array('error' => '1','code' => '1'));
		exit;
	}
	$OTP = mysql_real_escape_string($_GET['OTP']);
	$token = mysql_real_escape_string($_GET['token']);
	$username = mysql_real_escape_string($_GET['username']);
	$password = encrypt_password($username,mysql_real_escape_string($_POST['newpassword']));
	$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='EMAIL3' 
				AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die(mysql_error());
	if(mysql_num_rows($result) > 4){
		//over access
	    echo json_encode(array('error' => '1','code' => '2'));
	    exit;
	}else{
		
		gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','EMAIL3',NOW());");
		if(auth_token_none_db($token,$OTP,$username)){

			$sql = sprintf("UPDATE user SET password='%s' WHERE username='%s'",$password,$username);
			mysql_query($sql) or die(mysql_error());
			echo json_encode(array('success'	=> '1'));
			exit;
		}else{
			//token not valid
			echo json_encode(array('error' => '1','code' => '3'));
	    	exit;
		}
	}

	
?>
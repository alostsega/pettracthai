<?php
	include_once('config.php');
	include_once('php_useful.php');
	if(!isset($_GET['token'],$_GET['username'],$_POST['OTP_code']))
	{
		//no data
		echo json_encode(array('error' => '1','code' => '1'));
		exit;
	}
	$OTP = mysql_real_escape_string($_POST['OTP_code']);
	$token = mysql_real_escape_string($_GET['token']);
	$username = mysql_real_escape_string($_GET['username']);
	$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='EMAIL2' 
				AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die(mysql_error());
	if(mysql_num_rows($result) > 4){
		//over access
	    echo json_encode(array('error' => '1','code' => '2'));
	    exit;
	}else{
		
		gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','EMAIL2',NOW());");
		if(auth_token_none_db($token,$OTP,$username)){
			echo json_encode(array('success'	=> '1',
						'username' 	=> $username,
						'token'		=> $token,
						'OTP'		=> $OTP));
			exit;
		}else{
			//token not valid
			echo json_encode(array('error' => '1','code' => '3'));
	    	exit;
		}
	}

	
?>
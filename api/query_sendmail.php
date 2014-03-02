<?php
	include_once('config.php');
	include_once('php_useful.php');
	if(!isset($_POST['email']))
	{
		//no data
		echo json_encode(array('error' => '1','code' => '1'));
		exit;
	}
	$email = mysql_real_escape_string($_POST['email']);
	$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='EMAIL1' 
				AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die(mysql_error());
	if(mysql_num_rows($result) > 4){
		//over access
	    echo json_encode(array('error' => '1','code' => '2'));
	    exit;
	}else{
		
		$token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','EMAIL1',NOW());");
		$result = mysql_query(sprintf("SELECT * FROM user WHERE email='%s';",$email))or die(mysql_error());
		if($row = mysql_fetch_row($result))
		{
			//*****success user found
			$OTP = gen_randnum(6);
			$token = gen_encryption_token("",$OTP,$row[0]);
			send_email2('admin@pettracthai.com',$email,'OTP password for : Pettracthai.com',
				'ท่านได้ทำการร้องขอเปลี่ยนรหัสผ่านโดยใช้ email<br><p>รหัสยืนยันคือ : '.$OTP.'</p>');
			echo json_encode(array('success'	=> '1',
						'username' 	=> $row[0],
						'email' 	=> $email,
						'token'		=> $token
						));
			exit;
		}else{
			//email not found
			echo json_encode(array('error' => '1','code' => '3'));
	    	exit;
		}
	}

	
?>
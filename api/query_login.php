<?php
include_once('config.php');
include_once('php_useful.php');
header('Content-type: text/html; charset=utf-8');
//if data none set
if(!isset($_POST['username'],$_POST['password']))
{
	echo json_encode(array('error' => '1'));
	exit;
}
$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='SIGNIN' AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die("xzczxc".mysql_error());
if(mysql_num_rows($result) > 4){
    echo json_encode(array('error' => '2'));
    exit;
}else{
	gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','SIGNIN',NOW());");
	$username = mysql_real_escape_string($_POST['username']);
	$password = encrypt_password($username,mysql_real_escape_string($_POST['password']));
	//echo $password; //encryt password
	$sql = sprintf("SELECT * FROM user WHERE username='%s' AND password ='%s';",$username,$password);
	
	//echo $sql;
	$result = mysql_query($sql);
	if($row = mysql_fetch_row($result)){
		$token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','SIGNED',NOW());");
		//echo json_encode(array('success' => '1','token' => $token));
	}else{
		echo json_encode(array('error' => '3'));
		exit;
	}
}

echo json_encode(array('success'	=> '1',
						'token' 	=> $token,
						'username'	=> $username,
						'email'		=> $row[2],
						'firstname'	=> $row[3],
						'lastname'	=> $row[4],
						'tel'		=> $row[5],
						'address'	=> $row[6]
						));
exit;
?>
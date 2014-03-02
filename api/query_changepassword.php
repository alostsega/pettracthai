<?php
include_once('config.php');
include_once('php_useful.php');
header('Content-type: text/html; charset=utf-8');
//if data none set
//echo sprintf("%s %s %s %s",$_GET['token'],$_GET['username'],$_POST['newpassword'],$_POST['password']);
if(!isset($_GET['token'],$_GET['username'],$_POST['newpassword'],$_POST['password']))
{
	echo json_encode(array('error' => '1'));
	exit;
}

$token = $_GET['token'];
//check login token
if(!athu_token($token,"SIGNED","24")){
	echo json_encode(array('error' => '2'));
}
//check repeating gen same type token over 5 time in 5 munite
$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='P_CHA1' AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die("xzczxc".mysql_error());
if(mysql_num_rows($result) > 4){
    echo json_encode(array('error' => '3'));
    exit;
}else{
	gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','P_CHA1',NOW());");
	$username = mysql_real_escape_string($_GET['username']);
	$password = encrypt_password($username,mysql_real_escape_string($_POST['password']));
	//echo $password; //encryt password
	$sql = sprintf("SELECT * FROM user WHERE username='%s' AND password ='%s';",$username,$password);
	$result = mysql_query($sql);
	if($row = mysql_fetch_row($result)){
		$token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','P_CHA2',NOW());");
		//echo json_encode(array('success' => '1','token' => $token));
	}else{
		echo json_encode(array('error' => '4'));
		exit;
	}
}
$newpassword = encrypt_password($username,mysql_real_escape_string($_POST['newpassword']));
//update
$sql = sprintf("UPDATE user SET password='%s' WHERE username='%s'",$newpassword,$username);
mysql_query($sql) or die(mysql_error());


echo json_encode(array('success'	=> '1'
						));
exit;
?>
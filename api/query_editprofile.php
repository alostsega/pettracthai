<?php
include_once('config.php');
include_once('php_useful.php');
header('Content-type: text/html; charset=utf-8');
//if data none set
if(!isset($_GET['token'],$_GET['username'],$_POST['email'],$_POST['password'],$_POST['fname'],$_POST['lname'],$_POST['tel'],$_POST['address']))
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
$result = mysql_query(sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND type='P_EDT1' AND access_date > DATE_SUB(NOW(),INTERVAL 5 MINUTE);",get_client_ip()))or die("xzczxc".mysql_error());
if(mysql_num_rows($result) > 4){
    echo json_encode(array('error' => '3'));
    exit;
}else{
	gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','P_EDT1',NOW());");
	$username = mysql_real_escape_string($_GET['username']);
	$password = encrypt_password($username,mysql_real_escape_string($_POST['password']));
	//echo $password; //encryt password
	$sql = sprintf("SELECT * FROM user WHERE username='%s' AND password ='%s';",$username,$password);
	$result = mysql_query($sql);
	if($row = mysql_fetch_row($result)){
		$token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','P_EDT2',NOW());");
		//echo json_encode(array('success' => '1','token' => $token));
	}else{
		echo json_encode(array('error' => '4'));
		exit;
	}
}
$email = mysql_real_escape_string($_POST['email']);
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$tel = mysql_real_escape_string($_POST['tel']);
$address = mysql_real_escape_string($_POST['address']);
//update
$sql = sprintf("UPDATE user SET email='%s',firstname='%s',lastname='%s',telephone='%s',address='%s' WHERE username='%s'",
$email,$fname,$lname,$tel,$address,$username);
mysql_query($sql) or die(mysql_error());


echo json_encode(array('success'	=> '1',
						'token' 	=> $token,
						'username'	=> $username,
						'email'		=> $email,
						'firstname'	=> $fname,
						'lastname'	=> $lname,
						'tel'		=> $tel,
						'address'	=> $address
						));
exit;
?>
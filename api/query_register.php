<?php
include_once('config.php');
include_once('php_useful.php');
header('Content-type: text/html; charset=utf-8');
//if data none set
if(!isset($_POST['item1'])){
	echo json_encode(array('error' => '1','code' => '4'));
	exit;
}
if(!isset($_POST['item1'],$_POST['token'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['fname'],$_POST['lname'],$_POST['tel'],$_POST['address']))
{
	echo json_encode(array('error' => '1'));
	exit;
}

$token = $_POST['token'];
if(athu_token($token)){
	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = encrypt_password($username,mysql_real_escape_string($_POST['password'])); //encryt password
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$tel = mysql_real_escape_string($_POST['tel']);
	$address = mysql_real_escape_string($_POST['address']);
	//check username exist
	$result = mysql_query(sprintf("SELECT * FROM user WHERE username='%s';",$username));
	if(!mysql_fetch_row($result)){
		//check email exist
		$result = mysql_query(sprintf("SELECT * FROM user WHERE email='%s';",$email));
		if(!mysql_fetch_row($result)){
			//save new user
			$sql = sprintf("INSERT INTO user VALUES ('%s','%s','%s','%s','%s','%s','%s','NORMAL');",
				$username,$password,$email,$fname,$lname,$tel,$address);
			mysql_query($sql) or die(mysql_error());
		}else{
			echo json_encode(array('error' => '1','code' => '3','email' => $email));
			exit;
		}
	}else{
		echo json_encode(array('error' => '1','code' => '2','username' => $username));
		exit;
	}
}
echo json_encode(array('success' => '1'));
?>
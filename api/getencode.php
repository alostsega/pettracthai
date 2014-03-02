<?php
include_once('config.php');
include_once('php_useful.php');
// $token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','SIGNUP',NOW());");
$token = gen_encryption_token("",'shadowz',mysql_real_escape_string('1234asdddddddddddddddddddddddddddddddddddddddddddasasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasddasdasdsssssssssssssssssssssss56')); 
echo 'Token = '.$token.'<br>';
echo 'a = '.get_encrypt()
//echo 'Token = '.decrypt_token($token);
 echo 'Token = '.decrypt_token($token,'shadowz');
//echo gen_randnum(6);
?>
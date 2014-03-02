<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else 
        if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress; 
}

function token_filter($input) { return preg_replace('/[^0-9a-z.]/i' , $input); }
function alphanum_filter($input) { return preg_replace('/[^a-z0-9]/i','',$input); }
function number_filter($input) { return preg_replace('/[^0-9]/i','',$input); }
function username_filter($input){ return preg_match('/[^a-zA-Z0-9]/i','', $input);}
function name_filter($input) { return preg_replace('/[^ .\-0-9a-zก-๙]/ui','',$input); }
function phone_filter($input) { return preg_replace('/[^0-9\-]/i','',$input); }
function date_filter($input) { return preg_replace('/^(1[0-2]|0?[1-9])[. -/](3[01]|[12][0-9]|0?[1-9])[. -/][\d]{4}/i','',$input); }
function email_filter($input) { return preg_replace('/[^0-9a-z@\-.%]/i','',$input); }

function get_current_datetime(){
	return date ("Y-m-d");
}
//auth function
function send_email2($from,$to,$subject,$msg){
    send_email($from,$from,$to,$to,$subject,$msg);
}
function send_email($from,$fromname,$to,$toname,$subject,$msg){
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "pettracthai.mail@gmail.com"; // GMAIL username
    $mail->Password = "suwannapettracthai"; // GMAIL password
    $mail->From = $from; // "name@yourdomain.com";
    //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
    $mail->FromName = $fromname;  // set from Name
    $mail->Subject = $subject; 
    $mail->Body = $msg;
    $mail->AddAddress($to, $toname); // to Address
    //$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
    //$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
    $mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

    $mail->Send(); 
}
function gen_randnum($size){
    $num = "";
    for($i=0; $i<$size;$i++)
    {
        $num .= strval(rand(0,9));
    }
    return $num;
}
function gen_token($bit){
    return bin2hex(mcrypt_create_iv($bit, MCRYPT_DEV_RANDOM));
}
//change password to password 64 bit
function get_encrypted($password)
{
    return bin2hex(hash('SHA256',$password,true));
}
//change password to password 64 bit brfore encryption
function gen_encryption_token($sql="",$salt= "",$password="")
{
    $bit = 32;
    $ip = get_client_ip();
    if($salt == ""){
        $salt = "functional design";

    }else{
        $ip="";
    }
    $key = bin2hex(hash('SHA256',$salt.$ip, true));
    srand(); 
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND);
    $hex_iv = bin2hex($iv);
    if($password==""){
        $token = gen_token($bit);
    }else{
        $token = get_encrypted($password);
    }
    
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, hex2bin($key), $token.md5($token), MCRYPT_MODE_CBC, $iv));
    $en_token = base64_encode($encrypted.$hex_iv);

    if($sql!=""){
        mysql_query(sprintf($sql,mysql_real_escape_string($ip),mysql_real_escape_string($token))) or die(mysql_error());
    }
    //   echo "token = ".$token."<br>";
    //  echo "token size = ".strlen($token)."<br>";
    //  echo "hex iv = ".$hex_iv."<br>";
    //  echo "bit len = ".$bit."<br>";
    //  echo 'key enc = '.$key;
    //  echo "<br> key len = ".strlen($key )."<br>";
     
    //  echo "enc len = ".strlen($encrypted)."<br>";
    //  echo "enc = ".$encrypted."<br>";
     
    //  echo "enc token = ".$en_token."<br>";
    // echo "enc token size = ".strlen($en_token )."<br><br><br>";

    return substr($en_token ,0,214).base64_encode(md5($ip));
}
//return password 64bit not real password (get_encrypted() to gen password in 64 bit)
function decrypt_token($en_token,$salt= ""){
    $ip = get_client_ip();
    if($salt == ""){
        $salt = "functional design";
    }else{
        $ip="";
    }
    
    $key = bin2hex(hash('SHA256',$salt.$ip, true));


    $en_token2 = substr($en_token,0,214).'==';
    $hex_iv = substr(base64_decode($en_token2),128,strlen($en_token2)-1);
    $encrypted = substr(base64_decode($en_token2),0,128);
    $iv = hex2bin($hex_iv);
    $decrypted = substr(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, hex2bin($key), base64_decode($encrypted), MCRYPT_MODE_CBC, $iv)),0,64);
     //    echo "<br> key = ".$key."<br>";
      // echo "key len = ".strlen($key  )."<br>";

      // echo "hex_iv = ".$hex_iv."<br>";
    
      // echo "enc = ".$en_token2."<br>";
    
      // echo "de = ".$decrypted."<br>";


    //$ip = substr(mcrypt_decrypt(MCRYPT_THREEWAY,$key,base64_decode($token)),;
    return $decrypted;
}
function auth_token_none_db($token,$salt,$password)
{
    $decrypt_64b = decrypt_token($token,$salt);
    $encrypt_64b = get_encrypted($password);
    if($decrypt_64b == $encrypt_64b)
    {
        return true;
    }else{
        return false;
    }
}
function athu_token($en_token,$type="SIGNUP",$time="30"){
    $salt = "functional design";
    $ip = get_client_ip();
    $key = bin2hex(hash('SHA256',$salt.$ip, true));

    if(md5($ip) != base64_decode(substr($en_token,214,strlen($en_token)-1)))
    {
        return false;
    }
    $en_token2 = substr($en_token,0,214).'==';
    $hex_iv = substr(base64_decode($en_token2),128,strlen($en_token2)-1);
    $encrypted = substr(base64_decode($en_token2),0,128);
    $iv = hex2bin($hex_iv);
    $decrypted = substr(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, hex2bin($key), base64_decode($encrypted), MCRYPT_MODE_CBC, $iv)),0,64);


    $sql = sprintf("SELECT * FROM ip_access WHERE ip_addr='%s' AND token='%s' AND type='%s' AND access_date > DATE_SUB(NOW(),INTERVAL %s MINUTE);",mysql_real_escape_string($ip),mysql_real_escape_string($decrypted),$type,$time);
    if(mysql_fetch_row(mysql_query($sql)))
    {
        return true;
    }
    return false;

}
function encrypt_password($username,$password){
    return bin2hex(hash('SHA256',$password.md5($username), true));
}

?>
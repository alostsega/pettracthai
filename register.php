<!--All CSS in this Oage is In ***uicss.css**** -->
<!--This page will show inner html of all template file-->
<?php
	include_once('api/php_useful.php');
	include_once('api/config.php');
	$token = gen_encryption_token("INSERT INTO ip_access VALUES (null,'%s','%s','SIGNUP',NOW());");
	//date('Y-m-d H:i:s');
	
?>

<table class="text_white_bold_sizebig" style="margin-top:10px;">
	<tr>
		<td><img src="img/icons/register2.png" width="30"></td><td>User Register</td>
	</tr>
</table>
<form id="data_register" style="background: #FFF; margin-top:10px;" >
<input type="hidden" name="token" id="singup_token" value="<?=$token?>">
<table class="text_black" style="position:relative; width:400px; margin-left:auto;  margin-right:auto;">
<tr>
	<td>*E-Mail:</td><td><input type="text" class="input_box" name="email"></td>
</tr><tr>
	<td>*ไอดี:</td><td><input type="text" class="input_box" name="username" id="signup_username"></td>
</tr><tr>
	<td>*รหัาผ่าน:</td><td><input type="password" class="input_box" name="password" id="signup_passowrd"></td>
</tr><tr>
	<td>*รหัาผ่าน(อีกครั้ง):</td><td><input type="password" class="input_box" name="password2" id="signup_passowrd2"></td>
</tr><tr>
	<td>*ชื่อจริง:</td><td><input type="text" class="input_box" name="fname"></td>
</tr><tr>
	<td>*นามสกุล:</td><td><input type="text" class="input_box" name="lname"></td>
</tr><tr>
	<td>*โทร.:</td><td><input type="text" class="input_box" name="tel"></td>
</tr>
<tr>
	<td style="vertical-align: top;">*ที่อยู่:</td><td><textarea name="address" form="data_register" class="input_box" style="width:190px; height:60px;"></textarea></td>
</tr>
</table>

	
<table class="text_black"  style="position:relative; width:400px; margin-left:auto; margin-right:auto;">
<tr>
	<td><input type="checkbox" name="item1" class="input_box" value="item1">ฉันยอมรับเงื่อนไขการเป็นสมาชิก</td>
</tr>
<tr>
	<td><center><input type="button" class="btn_class" id="btn_signup2" value="Sign Up"><input type="button" class="btn_class" id="btn_signup_cancel" value="Cancel"></center></td>
</tr>
</table>

</form>
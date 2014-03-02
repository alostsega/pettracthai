<table class="text_white_bold_sizebig" style="margin-top:10px;">
	<tr>
		<td><img src="img/icons/lock.png" width="30"></td><td>Forget password</td>
	</tr>
</table>
<form id="form_forgetpass" style="background: #FFF; margin-top:10px; height:200px;" >
<table class="text_black" style="position:relative; width:500px;  margin-left:auto;  margin-right:auto;">
	
	<tr height="20px"></tr>
	<tr>
		<td width="70px" style="color:#F00;">ข้อความ</td>
		<td style="color:#F00;">กรุณาใส่ E-mail ที่ใช้ในการสมัครเว็บ เพื่อรับรหัส OTP</td>
	</tr>
	<tr height="20px">
	</tr>
		<tr>
		<td width="70px">E-mail</td>
		<td><input type="text" class="input_box" name="email" style="width:350px;" ></td>
	</tr>
	<tr height="60px">
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="button" class="btn_class" id="btn_forgetpass_sendemail" value="Send" >
		<input type="button" class="btn_class" id="btn_forgetpass_cancel" value="Cancel" >
		</td>
	</tr>
</table>
</form>
<form id="form_forgetpass_otp" style="background: #FFF; margin-top:10px; height:200px;" >
<table class="text_black" style="position:relative; width:500px;  margin-left:auto;  margin-right:auto;">
	
	<tr height="20px"></tr>
	<tr>
		<td width="70px" style="color:#F00;">ข้อความ</td>
		<td style="color:#F00;">รหัส OTP ได้ส่งไปยัง email ของคุณ แล้ว</td>
	</tr>
	<tr height="20px">
	</tr>
		<tr>
		<td width="70px">OTP</td>
		<td><input type="password" class="input_box" name="OTP_code" style="width:150px;" ></td>
	</tr>
	<tr height="60px">
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="button" class="btn_class" id="btn_forgetpass_sendOTP" value="Send" >
		<input type="button" class="btn_class" id="btn_forgetpass_cancel2" value="Cancel" >
		</td>
	</tr>
</table>
</form>
<form id="form_forgetpass_changepass" style="background: #FFF; margin-top:10px; height:200px;" >
<table class="text_black" style="position:relative; width:500px;  margin-left:auto;  margin-right:auto;">
	
	<tr height="20px"></tr>
	<tr>
		<td width="70px" style="color:#F00;">ข้อความ</td>
		<td style="color:#F00;">ใส่หรัสผ่านใหม่</td>
	</tr>
	<tr height="20px">
	</tr>
	<tr>
		<td width="70px">รหัสผ่าน</td>
		<td><input type="password" class="input_box" name="newpassword" id="mail_newpass" style="width:250px;" ></td>
	</tr>
		<tr>
		<td width="70px">รหัสผ่าน<br>(อีกครั้ง)</td>
		<td><input type="password" class="input_box" name="newpassword2" id="mail_newpass2" style="width:250px;" ></td>
	</tr>
	<tr height="30px">
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="button" class="btn_class" id="btn_forgetpass_sendnewpass" value="Send" >
		<input type="button" class="btn_class" id="btn_forgetpass_cancel3" value="Cancel" >
		</td>
	</tr>
</table>
</form>
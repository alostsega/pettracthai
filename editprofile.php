<table class="text_white_bold_sizebig" style="margin-top:10px;">
	<tr>
		<td><img src="img/icons/user.png" width="30"></td><td>Edit Profile</td>
	</tr>
</table>

<form id="editprofile_form" style="background: #FFF; margin-top:10px;" >
<table class="text_black" style="position:relative; width:400px; margin-left:auto;  margin-right:auto;">
<tr>
	<td>*E-Mail:</td><td><input type="text" class="input_box" name="email"></td>
</tr><tr>
	<td>*ชื่อจริง:</td><td><input type="text" class="input_box" name="fname"></td>
</tr><tr>
	<td>*นามสกุล:</td><td><input type="text" class="input_box" name="lname"></td>
</tr><tr>
	<td>*โทร.:</td><td><input type="text" class="input_box" name="tel"></td>
</tr><tr>
	<td style="vertical-align: top;">*ที่อยู่:</td><td><textarea name="address" form="editprofile_form" class="input_box" style="width:190px; height:60px;"></textarea></td>
</tr><tr>
	<td height="20px"></td><td></td>
</tr><tr>
	<td style="color:#F00;">*ยืนยันรหัสผ่าน:</td><td><input type="password" class="input_box"  name="password"  ></td>
</tr>
</table>

	
<table class="text_black"  style="position:relative; width:400px; margin-left:auto; margin-right:auto;">
<tr>
	<td><center><input type="button" class="btn_class" id="btn_editprifile_ok" value="OK"><input type="button" class="btn_class" id="btn_editprofile_cancel" value="Cancel"></center></td>
</tr>
</table>

</form>
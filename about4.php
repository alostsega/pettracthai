
<html>

<title>Animal Identification System</title>
<head>
<meta http-equiv="Content-Language" content="th"> 
<meta http-equiv="content-Type" content="text/html; charset=utf-8"> 
<!--<link rel="stylesheet" href="css/register.css" type="text/css" />-->
<!--<link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/site-demos.css">-->
<link rel="stylesheet" href="css/mainstyle.css" />
<link rel="stylesheet" href="css/aboutstyle.css" />
<link rel="stylesheet" href="css/uicss.css" />
<link rel="stylesheet" href="css/submenu.css" />
<link rel="stylesheet" href="css/sidemenustyles.css" />
<link rel="stylesheet" href="jscript/jquery-ui.css">
<script src="jscript/jquery.min.js"></script>
<script src="jscript/jquery-ui.js"></script>
<script src="jscript/mainscript.js"></script>
<script src="jscript/jquery.form.js"></script>
<script src="jscript/jquery.validate.min.js" type="text/javascript"></script>
<style type="text/css">
	body {
		margin-left: 0px;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		background-position:top center;
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-color: #FFF;
	}
	#main{
		position: relative;
		margin-left: auto;
		margin-right: auto;
		margin-top: 190px;
		width: 800px;
		z-index: 0px;
		border: 0px solid #999;
		border-radius: 3px;
	}
</style>
</head>
<script>

</script>
<body>

	<div style="position:fixed; top:0px; background-color:#FFF; width:100%; height:20px; z-index:2;">
	</div>	
	<div id="user_member">
		<div style="position:relative; margin-left:auto; margin-right:auto; width:800px; ">
		<div id="user_member_left"></div>
		<div id="user_member_right">
			<div id="table_login">
			<table id="table_login" class="text_black" border="0px" cellspacing="0px" cellpadding="0px" style="margin-left:auto;	margin-right: 0px;">
				<tr>
					<td>username</td>
					<td width="10px"></td>
					<td><input class="input_box" style="height:20px; width:100px"></td>
					<td width="10px"></td>
					<td>password</td>
					<td width="10px"></td>
					<td><input class="input_box" style="height:20px; width:100px"></td>
					<td width="10px"></td>
					<td><input id="btn_signin"  class="btn_class" type="button" style="height:20px; width:60px" value="Sign In"></td>
				</tr>
			</table>
			<table  class="text_black" border="0px" cellspacing="0px" cellpadding="0px" style="margin-left:0px;	margin-right: auto; margin-top: 10px;">
				<tr>
					<td width="60px"></td>
					<td id="btn_signup" class="link_pink">Sign Up</td>
					<td width="10px"></td>
					<td class="link_pink" id="btn_forgetpass">Forget password</td>
					<td width="140px"></td>
					<td><a href="#" class="link_pink">TH</a> | EN</td>
				</tr>
			</table>
		</div>
		<div id="table_logined">
			<table  class="text_black" border="0px" cellspacing="0px" cellpadding="0px" style="margin-left:auto;	margin-right: 0px;">
				<tr>
					<td id="username">username:xxxxxx</td>
					<td width="10px"></td>
					<td><input id="btn_signout"  class="btn_class" type="button" style="height:20px; width:60px" value="Sign Out"></td>
				</tr>
			</table>
			<table  class="text_black" border="0px" cellspacing="0px" cellpadding="0px" style="margin-left:0px;	margin-right: auto; margin-top: 10px;">
				<tr>
					<td width="200px"></td>
					<td id="btn_order" class="link_pink">Order</td>
					<td width="10px"></td>
					<td id="btn_editprofile" class="link_pink" >Edit Profile</td>
					<td width="50px"></td>
					<td><a href="#" class="link_pink">TH</a> | EN</td>
				</tr>
			</table>
		</div>
		</div>
	</div>
	</div>
	<div id="header">
		<div style="position:relative; margin-left:auto; margin-right:auto; width:800px;">
		<div >
			<img src="img/LogoWeb.png" id="header_logo"></img>
		</div>

			<div id="header_left">
			</div>
			<div id="header_menubar">
				<span class="text_white">
				<!-- <a href="#" class="link_white">หน้าแรก</a> | <a href="#" class="link_white">ไมโครชิพ</a> | <a href="#" class="link_white">ศูนย์ติดตั้ง</a> | <a href="#" class="link_white">คำถาม-คำตอบ</a> | <a href="#" class="link_white">ติดต่อเเรา</a> -->
				

				</span>
				<ul id="menu">
			    <li>
			        <a href="index.php" class="link_white">หน้าแรก</a>|
			    </li>
			    <li><a href="about1.php" class="link_white">ไมโครชิป</a>|

			        <ul class="sub-menu">
			        	<li>
			                <a href="about1.php" class="link_white">การทำงานของไมโครชิป</a>
			            </li>
			            <li>
			                <a href="about2.php" class="link_white">ประโยน์ที่ได้รับ</a>
			            </li>
			            <li>
			                <a href="about3.php" class="link_white">ขั้นตอนการติดตั้ง</a>
			            </li>
			            <li>
			                <a href="about4.php" class="link_white">คุณลักษณะเฉพาะ</a>
			            </li>
			        </ul>
			    </li>
			    <li>
			    	<a href="reader1.php" class="link_white">เครื่องอ่านไมโครชิป</a>|
			    	<ul class="sub-menu">
			            <li>
			                <a href="reader1.php" class="link_white">TN Pocket Tracker</a>
			            </li>
			            <li>
			                <a href="reader2.php" class="link_white">Power Tracker II</a>
			            </li>
			        </ul>
			    </li>
			    
			    <li><a href="#" class="link_white">สินค้า</a>|
			     	<ul class="sub-menu">
			            <li>
			                <a href="#" class="link_white">รายการสินค้า</a>
			            </li>
			             <li>
			                <a href="#" class="link_white">ยืนยันการชำระเงิน</a>
			            </li>
			        </ul>
			    </li>

			   
			    <li><a href="service.php" class="link_white">ศูนย์ติดตั้ง</a>|
			    	<ul class="sub-menu">
			            <li>
			                <a href="service.php?region=1" class="link_white">กรุงเทพและปริมณฑล</a>
			            </li>
			            <li>
			                <a href="service.php?region=2" class="link_white">ภาคกลาง</a>
			            </li>
			            <li>
			                <a href="service.php?region=3" class="link_white">ภาคเหนือ</a>
			            </li>
			            <li>
			                <a href="service.php?region=4" class="link_white">ภาคตะวันออกเฉียงเหนือ</a>
			            </li>
			            <li>
			                <a href="service.php?region=5" class="link_white">ภาคตะวันออก</a>
			            </li>
			            <li>
			                <a href="service.php?region=6" class="link_white">ภาคใต้</a>
			            </li>
			        </ul>
			    </li>
			    
			    <li>
			        <a href="contact.php" class="link_white">ติดต่อเเรา</a>
			    </li>
			</ul>
			</div>
			<div id="header_search">
				<input class="search" value="" placeholder="Search...">
			</div>
		</div>
	</div>
	<div id="main">

		<div id="main_content">
			<!--
			<div id="menu_left" class="classname">
				<table class="text_white" style="margin-top:5px; margin-left:5px;">
						
						<tr><td><a href="#" class="link_black">การทำงานของไมโครชิพ</a></td></tr>
						<tr><td><a href="#" class="link_black">ประโยชน์ที่ได้รับ</a></td></tr>
						<tr><td><a href="#" class="link_black">ขั้นตอนการติดตั้ง</a></td></tr>
						<tr><td><a href="#" class="link_black">คุณลักษณะเฉพาะ</a></td></tr>
				</table>
			</div>
			-->
			<div id='cssmenu' style="position:absolute;margin-top: 0px;left: 0px;">
			<ul>
   				<li class='active'><a href='about1.php'><span>การทำงานของไมโครชิป</span></a></li>
  				<li><a href='about2.php'><span>ประโยชน์ที่ได้รับ</span></a></li>
   				<li><a href='about3.php'><span>ขั้นตอนการติดตั้ง</span></a></li>
   				<li class='last'><a href='about4.php'><span>คุณลักษณะเฉพาะ</span></a></li>
			</ul>
			</div>
			
			<div id="content_right" style="font-family: tahoma;font-size: 12px;">
				<h2>คุณลักษณะเฉพาะ</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไมโครชิปเป็นชิ้นส่วนอิเล็กทรอนิกส์ที่ใช้ระบุตัวสัตว์ชนิดถาวร สามารถใช้ในสัตว์ทุกชนิด บรรจุอยู่ในเข็มที่ผ่านการทำให้ปลอดเชื้อด้วยวิธี <font color='#f96a7b'>Gas Sterilization</font> ทำให้มีความสะดวกและปลอดภัย มีอายุการใช้งานยาวนาน และสามารถอ่านหมายเลขไมโครชิปได้จากเครื่องอ่านไมโครชิป
				<center><img src="img/microchip.jpg" style="width:30%;"></center>
				</p>
				<div style="padding-left:5em;">
				<p><b><font color='#f96a7b'>คุณลักษณะเฉพาะ (SPECIFICATIONS)</font></b></p>
				
				<table border=0 style="font-family: tahoma;font-size: 12px;">
				<tr>
					<td style="width:100px;">1.  ช่วงคลื่นในการใช้งาน	</td>
					<td>134.2 KHz</td>
				</tr>
				<tr>
					<td>2.  อุณหภูมิในการใช้งาน</td>
					<td>-16 ๐ ถึง 80๐ C</td>
				</tr>
				<tr>
					<td>3.  ขนาดไมโครชิป</td>
					<td>12.00 x 2.10 ม.ม.  8.00 x 2.10 ม.ม. และ 8.00 x 1.50 ม.ม.</td>
				</tr>
				<tr>
					<td>4.  อายุการใช้งาน</td>
					<td>75 ปี</td>
				</tr>
				<tr>
					<td>5.  ระยะเวลาการแสดงผล</td>
					<td>น้อยกว่า 39 milliseconds</td>
				</tr>
				<tr>
					<td>6.  พลังงานที่ใช้</td>			
					<td>ไม่มีแหล่งพลังงานภายใน(เป็นการกระตุ้นจากเครื่องอ่านไมโครชิป)</td>
				</tr>
				<tr>
					<td>7.  การแสดงผล</td>
					<td>ตัวเลขจำนวนรวม 15 ตัว</td>
				</tr> 
				<tr>
					<td>8.  ความคงทนต่อสิ่งแวดล้อม</td>
					<td>สามารถทนทานต่อสนามแม่เหล็ก และ รังสี X-Ray</td>
				</tr>
				<tr>
					<td>9.  การบรรจุ</td>
					<td>บรรจุอยู่ในเข็ม ห่อหุ้มด้วยซองพลาสติกที่ใช้ทางการแพทย์</td>
				</tr>
				<tr>
					<td>10. การทำให้ปลอดเชื้อ</td>
					<td>ทำให้ปลอดเชื้อด้วยวิธี Gas Sterilization</td>
				</tr>
				</table>
				</div>
				<br><br><br><br><br>
				</div>
				
			</div>
		</div>

	</div>
	<div id="footer">

	</div>
	<div id="register_popup">
		
	</div>
	<div id="forgetpassword_popup">
		
	</div>
	<div id="editprofile_popup">
		
	</div>
</body>
</html>
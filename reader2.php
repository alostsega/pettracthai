
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
			<div id='cssmenu' style="position:absolute;margin-top: 0px;left: 0px;">
			<ul>
   				<li class='active'><a href='reader1.php'><span>TN Pocket Tracker</span></a></li>
   				<li class='last'><a href='reader2.php'><span>Power Tracker II</span></a></li>
			</ul>
			</div>
			
			<div id="content_right" style="font-family: tahoma;font-size: 12px;">
				<h2>Power Tracker II</h2>
				
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครื่องอ่านไมโครชิปรุ่น <font color='#f96a7b'>Power Tracker II</font> เป็นเครื่องอ่านไมโครชิปชนิดมือถือที่มีความทนทาน สามารถอ่านได้หลายระบบ สามารถใช้กับงานด้านต่างๆ ทั้งในงานภาคสนามและในห้องทดลอง ทนทานต่อสภาพอากาศ และสามารถกันน้ำได้    ทำงานโดยส่งคลื่นวิทยุไปยังไมโครชิป และรับสัญญาณตอบกลับเป็นหมายเลขที่ถูกกำหนดไว้ในไมโครชิป โดยแสดงผลด้วยจอ  <font color='#f96a7b'>LCD</font>  ซึ่งจะมีเสียงดังและแสงสว่างกระพริบเมื่ออ่านรหัสสัญญาณจากไมโครชิป มีปุ่มเปิด/ปิด และปุ่มอ่านรหัสไมโครชิพอยู่ด้านบนของตัวเครื่อง เครื่องจะมีสัญญาณเตือนหากเปิดเครื่องทิ้งไว้ (ทุก ๆ 3 นาที) และพลังงานที่ใช้ได้รับจากถ่ายอัลคาไลน์ ขนาด 9 โวลต์ (หาเปลี่ยนได้ทั่วไป)
				</p>
				<br>
				<p>
				<div style="position:absolute;margin-top: 0px;left: 0px;"><img src="img/PowerTN.jpg" style="width:200px;"></div>
				</p>
				<div style="position:relative;margin-top: 0px;left: 150px;padding-left:5em;">
				<p><b><font color='#f96a7b'>คุณลักษณะเฉพาะ (SPECIFICATIONS)</font></b></p>
				
				<table border=0 style="font-family: tahoma;font-size: 12px;">
				<tr>
					<td>1.  ช่วงคลื่นที่ใช้งาน	</td>
					<td>125 KHz และ 134.2 KHz</td>
				</tr>
				<tr>
					<td>2.  พลังงาน</td>
					<td>ใช้ถ่านอัลคาไลน์ ขนาด 9 โวลต์</td>
				</tr>
				<tr>
					<td>3.  การแสดงผล</td>
					<td>จอ LCD ตัวเลขและตัวอักษรภาษาอังกฤษ</td>
				<tr>
					<td></td>
					<td>ไม่เกิน 16 หลัก</td>
				</tr>
				</tr>
				<tr>
					<td>4.  ความสามารถในการอ่าน</td>
					<td>Avid code, Fecava Code และ ISO code</td>
				</tr>
				<tr>
					<td>5.  ขนาดของเครื่อง</td>			
					<td>6 นิ้ว (กว้าง) x 8.2 นิ้ว (ยาว) x 3.5 นิ้ว (สูง)</td>
				</tr>
				<tr>
					<td>6.  น้ำหนัก</td>
					<td>600 กรัม</td>
				</tr> 
				<tr>
					<td>7.  ระยะในการอ่าน</td>
					<td>15-20 เซนติเมตร</td>
				</tr>
				</table>
				</div>
				<br><br><br><br><br>
				</div>

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
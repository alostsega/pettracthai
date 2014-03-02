
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
   				<li class='active'><a href='about1.php'><span>การทำงานของไมโครชิป</span></a></li>
  				<li><a href='about2.php'><span>ประโยชน์ที่ได้รับ</span></a></li>
   				<li><a href='about3.php'><span>ขั้นตอนการติดตั้ง</span></a></li>
   				<li class='last'><a href='about4.php'><span>คุณลักษณะเฉพาะ</span></a></li>
			</ul>
			</div>
			
			<div id="content_right" style="font-family: tahoma;font-size: 12px;">
				<h2>ขั้นตอนการติดตั้ง</h2>
				<p>
					1. แจ้งความประสงค์ของท่านที่คลินิกสัตวแพทย์ หรือสถานพยาบาลสัตว์ที่เป็นศูนย์ติดตั้งไมโครชิป
					<center><img src="img/sign_pettracthai.jpg" style="width:30%;"></center>
				</p>
				<p>
					2. กรอกรายละเอียดในแบบฟอร์ม
				</p>
				<p>
					3. สัตวแพทย์ตรวจสอบในขั้นแรกว่าสัตว์เลี้ยงมีไมโครขิปหรือไม่
					<center><img src="img/check_microchip.jpg" style="width:50%;"></center>
				</p>
				<p>
					4. สัตวแพทย์เตรียมไมโครชิปโดยใช้ไมโครชิปชนิดปลอดเชื้อ ที่ผ่านการฆ่าเชื้อโรคโดยการอบก๊าซฆ่าเชื้อโรค และตรวจสอบหมายเลขไมโครชิปที่อยู่ในเข็มปลอดเชื่อว่าตรงกับหมายเลขบนสติกเกอร์หรือไม่
					<center><img src="img/prepare.jpg" style="width:50%;"></center>
				</p>
				<p>
					5. สัตวแพทย์ทำการฉีดไมโครขิพให้สัตว์เลี้ยงในสุนัข-แมว จะฉีดที่ตำแหน่งกึ่งกลางแนวหลังระหว่างสะบักทั้ง 2 ข้าง
					<center><img src="img/inject.jpg" style="width:50%;"></center>
				</p>
				<p>
					6. ตรวจสอบขั้นตอนสุดท้ายว่าไมโครชิปได้อยู่ที่ตัวสัตว์แล้ว
					<center><img src="img/read_microchip.jpg" style="width:50%;"></center>
				</p>
				<p>
					7. สัตวแพทย์สามารถออกใบรับรองการติดตั้งไมโครชิปให้สัตว์เลี้ยงที่มีการระบุหมายเลขไมโครชิปที่ตรงกับในตัวสัตว์ได้ทางเว็ปไซต์ <a href="http://www.pettracthai.com">www.pettracthai.com</a> หรือส่งข้อมูลให้บริษัทฯ เพื่อออกใบรับรองและจัดส่งให้ท่าน
					<center><img src="img/certificate.jpg" style="width:50%;"></center>
				</p>
				<p>
					 8. ท่านสามารถสืบค้นหมายเลขไมโครชิปในระบบฐานข้อมูลได้ที่ <a href="http://www.pettracthai.com">www.pettracthai.com</a>
					 <center><img src="img/search.jpg" style="width:50%;"></center>
				</p>
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

<html>

<title>Animal Identification System</title>
<head>
<meta http-equiv="Content-Language" content="th"> 
<meta http-equiv="content-Type" content="text/html; charset=utf-8"> 
<!--<link rel="stylesheet" href="css/register.css" type="text/css" />-->
<!--<link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/site-demos.css">-->
<link rel="stylesheet" href="css/mainstyle.css" />
<link rel="stylesheet" href="css/uicss.css" />
<link rel="stylesheet" href="css/submenu.css" />
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
		border: 0px solid #999; border-radius: 3px;
	}
</style>
</head>
<script>

</script>
<body>

	<div style="position:fixed; top:0px; background-color:#FFF; width:100%; height:20px; z-index:2;">
	</div>	
	<div id="user_member">
		
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
			        <a href="#" class="link_white">หน้าแรก</a>|
			    </li>
			    <li><a href="about1.html" class="link_white">ไมโครชิป</a>|

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
			    	<a href="reader1.html" class="link_white">เครื่องอ่านไมโครชิป</a>|
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
			                <a href="#" class="link_white">วิธีการชำระเงิน</a>
			            </li>
			             <li>
			                <a href="#" class="link_white">ยืนยันการชำระเงิน</a>
			            </li>
			        </ul>
			    </li>

			   
			    <li><a href="service.php?region=1" class="link_white">ศูนย์ติดตั้ง</a>|
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
			        <a href="contact.php" class="link_white">ติดต่อเรา</a>
			    </li>
			</ul>
			</div>
			<div id="header_search">
				<input class="search" value="" placeholder="Search...">
			</div>
		</div>
	</div>
	<div id="main">

		<div id="picture_slide">
			<img src="img/slidetest.png"></img>
		</div>
		<div id="main_content">
			<div id="main_content_left">asdsad
			</div>
			<div id="main_content_right">
				<div class="main_content_right_menu">
					<table class="text_white" style="margin-top:5px; margin-left:5px;">
						<tr><td>Content 1</td></tr>
						<tr><td><a href="#" class="link_white">-menu1</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu2</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu3</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu4</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu5</a></td></tr>
					</table>
				</div>
				<br>
				<div class="main_content_right_menu">
					<table class="text_white" style="margin-top:5px; margin-left:5px;">
						<tr><td>Content 2</td></tr>
						<tr><td><a href="#" class="link_white">-menu1</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu2</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu3</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu4</a></td></tr>
						<tr><td><a href="#" class="link_white">-menu5</a></td></tr>
					</table>
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

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
<link rel="stylesheet" href="orbit_imageslide/orbit-1.2.3.css">

<script src="jscript/jquery.min.js"></script>
<script src="jscript/jquery-ui.js"></script>
<script src="jscript/mainscript.js"></script>
<script src="jscript/jquery.form.js"></script>
<script src="jscript/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="orbit_imageslide/jquery.orbit-1.2.3.min.js"></script>	

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
<!-- 	orbit plugin -->
	<script type="text/javascript">
		$(window).load(function() {
			$('#picture_slide').orbit();
		});
	</script>
</head>
<script>

</script>
<body>

	<div style="position:fixed; top:0px; background-color:#FFF; width:100%; height:20px; z-index:1500;">
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

		<div id="picture_slide" style="z-index:-2">
			<img src="img/slidetest.png"></img>
			<img src="img/slide/img1.jpg" /></img>
			<img src="img/slide/img2.jpg" /></img>
			<img src="img/slide/img3.png" /></img>
		</div>
		<div id="main_content">
			<div id="main_content_left" style="font-family: tahoma;font-size: 12px;">
				<h2><font color='#f96a7b'>“ไมโครชิป” เลขประจำตัวสัตว์ชนิดถาวร</font></h2>
				<img src="img/img_1823.jpg" class="float_right" alt="logo">
				<p>นับจากปี 2536 ที่เรานำไมโครชิปสู่ประเทศไทย จวบจนวันนี้ ความนิยมในการใช้ไมโครชิปมีการขยายตัวอย่างมากในสัตว์หลากหลายชนิด ตลอดจนการใช้ไมโครชิปในสัตว์เลี้ยง ไม่ว่าจะเป็นโครงการทำเครื่องหมายระบุตัวสุนัขมีเจ้าของในเขตกรุงเทพมหานคร ตามข้อบัญญัติของกทม. เรื่องการควบคุมการเลี้ยงหรือปล่อยสุนัข พ.ศ. 2548 และระเบียบกรุงเทพมหานคร ว่าด้วยการเลี้ยงหรือปล่อยสุนัข พ.ศ. 2550, การพาสุนัขเดินทางไปต่างประเทศ, การออกใบพันธุ์ประวัติ Pedigree ของสุนัขโดยสมาคมพัฒนาพันธุ์สุนัข(ประเทศไทย) ฯลฯ ล้วนมีความต้องการทำเครื่องหมายระบุตัวสัตว์ด้วยไมโครชิป</p>
				<p><font color='#f96a7b'>ไมโครชิป (Microchip)</font> เป็นชิ้นส่วนอิเล็กทรอนิกส์ที่มีขนาดเล็กบรรจุในครอบแก้วที่ผ่านการพิสูจน์จนเชื่อมั่นว่าจะไม่ทำปฏิกิริยากับเนื้อเยื่อของร่างกายสัตว์ โดยไมโครชิปจะถูกกำหนดหมายเลขไว้ภายในจากโรงงานผู้ผลิต เราจะไม่สามารถเปลี่ยนแปลงหมายเลขนั้นๆ ได้ การอ่านหมายเลขต้องใช้เครื่องอ่านไมโครชิป (Microchip Reader) เป็นตัวแสดงผล การติดตั้งไมโครชิปจะทำโดยใช้เข็มที่ปลอดเชื้อแล้ว ฉีดไมโครชิปที่มีขนาดเล็กประมาณเม็ดข้าว เข้าไปใต้ผิวหนังบริเวณหลังของสัตว์เลี้ยง เช่น สุนัข แมว เป็นต้น</p>
				<br>
				<p>ไมโครชิปสามารถอยู่ในร่างกายสัตว์ได้นาน เช่น ในสุนัขเราฉีดไมโครชิปครั้งเดียวสามารถคงอยู่ไปตลอดชีวิตสัตว์ โดยไม่ทำปฏิกิริยากับร่างกายแต่อย่างใด เราสามารถใช้ไมโครชิปในสัตว์ทุกประเภทตั้งแต่ขนาดเล็ก เช่น หนูทดลอง ปลา กิ้งก่า จนกระทั่งสัตว์ที่มีขนาดใหญ่ เช่น ช้าง การติดไมโครชิปไม่จำเป็นต้องเตรียมตัวสัตว์ และไม่มีข้อห้ามใดๆ หลังจากฉีด และมีอันตรายน้อยที่สุดเมื่อเปรียบเทียบกับการทำเครื่องหมายอื่นๆ การฉีดไมโครชิปใช้เวลาน้อยมาก (ไม่ถึง 1 นาที) เราสามารถรับบริการนี้ได้จาก คลินิกสัตวแพทย์และโรงพยาบาลสัตว์ที่เป็นศูนย์ติดตั้งไมโครชิป ที่มีเครื่องหมาย “ศูนย์ติดตั้งไมโครชิป บัตรประจำตัวสัตว์อิเล็กทรอนิกส์”</P>
				<p>เมื่อสัตว์เลี้ยงได้รับการฉีดไมโครชิปแล้ว จะต้องมีการเก็บบันทึกข้อมูลของสัตว์นั้นๆ ไว้ เพื่อประโยชน์ในการสืบค้น ข้อมูลที่จัดเก็บจะต้องมีอย่างน้อย 3 ประการคือ

				</P>
				<p><font color='#f96a7b'>1. ข้อมูลของตัวสัตว์</font> อาทิ เป็นสัตว์ชนิดใด(สุนัข, แมว,นก เป็นต้น) ชื่อ เพศ พันธุ์ อายุ สี ตำหนิ หมายเลขที่เคยขึ้นทะเบียนกับหน่วยงานอื่น เช่น สมาคมพัฒนาพันธุ์สุนัขฯ</p>
				<p><font color='#f96a7b'>2. ข้อมูลของเจ้าของสัตว์</font> คือ ชื่อ สกุล ที่อยู่ที่ติดต่อได้ และหมายเลขโทรศัพท์</P>
				<p><font color='#f96a7b'>3. ข้อมูลของหน่วยงานที่ฉีดไมโครชิป</font> อาจเป็นหน่วยราชการ หรือสถานพยาบาลสัตว์ที่เป็นศูนย์ไมโครชิป</p>
				<p>หมายเลขภายในไมโครชิปประกอบด้วยตัวเลข 15 หลัก ซึ่งเป็นไปตามมาตรฐานสากล ISO 11784/11785 ที่ควบคุมความถี่ช่วงคลื่นวิทยุ (RFID) ของไมโครชิปที่ฝังภายใต้ผิวหนังของสัตว์ หมายเลข 3 หลักแรก หมายถึง บริษัทผู้ผลิตที่ขึ้นทะเบียนไว้กับ ICAR ซึ่งเป็นหน่วยงานกลางที่ควบคุมการออกหมายเลขไมโครชิปเพื่อไม่ให้ซ้ำกัน ส่วนหมายเลขอีก 12 หลักที่เหลือเป็นตัวเลขที่ถูกกำหนดขึ้นและเรียงตามกันเพื่อไม่ให้ซ้ำกัน ปัจจุบันหมายเลขเริ่มต้นของ เพ็ทแทรคไทย คือ 900.XXXXXXXXXXXX</p>
				<br>
				<br>
				<br>
			</div>
			<div id="main_content_right">
				<div class="main_content_right_menu_header">
					<span style="margin-left:1px;">อุบัติภัย รอบตัวน้องหมา</span>
				</div>
				<div class="main_content_right_menu" >
					<ul class="menu_ul">
						<li><a href="#" class="link_black">ความเครียดเมื่อสุนัขต้องอยู่ลำพัง</a></li>
						<li><a href="#" class="link_black">เรื่องของต่อมลูกหมากโต</a></li>
						<li><a href="#" class="link_black">อาหารต้องห้ามสำหรับสุนัข</a></li>
						<li><a href="#" class="link_black">ไขปัญหาเรื่องโรคผิวหนังในสุนัข</a></li>
					</ul>
				</div>
				<br>
				<div class="main_content_right_menu_header">
					<span style="margin-left:1px;">เรื่องของเหมียว เหมียว</span>
				</div>
				<div class="main_content_right_menu" >
					<ul class="menu_ul">
						<li><a href="#" class="link_black">ทริปรถบัส ทัวร์ชมเมือง ไปกับ "ดอดเจอร์" เหมียวนักเดินทาง</a></li>
						<li><a href="#" class="link_black">รู้จักสายพันธุ์ บริติช ชอร์ตแฮร์</a></li>
						<li><a href="#" class="link_black">พจนานุกรมภาษาเหมียว</a></li>
						<li><a href="#" class="link_black">ขนร่วงปัญหาใหญ่กวนใจเจ้าเหมียว</a></li>
						<li><a href="#" class="link_black">เมื่อเหมียวป่วยเป็นไข้หัด</a></li>
					</ul>
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
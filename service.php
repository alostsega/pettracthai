<?php
	include("api/config.php");

	if(isset($_GET['region']))
	{
		$region = $_GET['region'];
	}
	else
	{
		$region = '1';
	}	
	//query
	$sql = "SELECT name,address,district1,district2,province,postcode,telephone FROM serviceth WHERE region ='".$region."'";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) > 0){

		while ($row = mysql_fetch_assoc($result)) {
		$servicedata[] = array(
		        'name' => $row['name'],
		        'address' => $row['address'],
		        'district1' => $row['district1'],
		        'district2' => $row['district2'],
		       	'province' => $row['province'],	
		       	'postcode' => $row['postcode'],
		       	'telephone' => $row['telephone']
			);
		}
	}
?>

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
<link rel="stylesheet" href="css/servicestyle.css" />
<link rel="stylesheet" href="jscript/jquery-ui.css">

<style type="text/css" title="currentStyle">
      @import "css/media/css/demo_page.css";
      @import "css/media/css/jquery.dataTables.css";
</style>

<script type="text/javascript" language="javascript" src="css/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="css/media/js/jquery.dataTables.js"></script>


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
			<div id='cssmenu' style="position:absolute;margin-top: 0px;left: 0px;">
			<ul>
   				<li class='active'><a href='reader1.php'><span>กรุงเทพและปริมณฑล</span></a></li>
   				<li><a href='about2.php'><span>ภาคกลาง</span></a></li>
   				<li><a href='about3.php'><span>ภาคเหนือ</span></a></li>
   				<li><a href='about2.php'><span>ภาคตะวันออกเฉียงเหนือ</span></a></li>
   				<li><a href='about3.php'><span>ภาคตะวันออก</span></a></li>
   				<li class='last'><a href='reader2.php'><span>ภาคใต้</span></a></li>
			</ul>
			</div>
			-->
			<div id='content_text' style="position:relative;margin-top: 0px;left: 0px;width:800px">
				<?php
					if($region == '1')
					{
						echo "<a href='service.php?region=1' class='link_pink'><font size=6>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=2' class='link_black'><font size=3>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=3' class='link_black'><font size=3>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=4' class='link_black'><font size=3>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=5' class='link_black'><font size=3>ภาคตะวันออก </font></a>";
						echo "<a href='service.php?region=6' class='link_black'><font size=3>ภาคใต้ </font></a>";
					}
					else if($region == '2')
					{
						echo "<a href='service.php?region=2' class='link_pink'><font size=6>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=1' class='link_black'><font size=3>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=3' class='link_black'><font size=3>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=4' class='link_black'><font size=3>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=5' class='link_black'><font size=3>ภาคตะวันออก </font></a>";
						echo "<a href='service.php?region=6' class='link_black'><font size=3>ภาคใต้ </font></a>";
					}
					else if($region == '3')
					{
						echo "<a href='service.php?region=3' class='link_pink'><font size=6>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=1' class='link_black'><font size=3>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=2' class='link_black'><font size=3>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=4' class='link_black'><font size=3>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=5' class='link_black'><font size=3>ภาคตะวันออก </font></a>";
						echo "<a href='service.php?region=6' class='link_black'><font size=3>ภาคใต้ </font></a>";
					}
					else if($region == '4')
					{
						echo "<a href='service.php?region=4' class='link_pink'><font size=6>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=1' class='link_black'><font size=3>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=2' class='link_black'><font size=3>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=3' class='link_black'><font size=3>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=5' class='link_black'><font size=3>ภาคตะวันออก </font></a>";
						echo "<a href='service.php?region=6' class='link_black'><font size=3>ภาคใต้ </font></a>";
					}
					else if($region == '5')
					{
						echo "<a href='service.php?region=5' class='link_pink'><font size=6>ภาคตะวันออก </font></a>";
						echo "<a href='service.php?region=1' class='link_black'><font size=3>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=2' class='link_black'><font size=3>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=3' class='link_black'><font size=3>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=4' class='link_black'><font size=3>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=6' class='link_black'><font size=3>ภาคใต้ </font></a>";
					}
					else if($region == '6')
					{
						echo "<a href='service.php?region=6' class='link_pink'><font size=6>ภาคใต้ </font></a>";
						echo "<a href='service.php?region=1' class='link_black'><font size=3>กรุงเทพและปริมณฑล </font></a>";
						echo "<a href='service.php?region=2' class='link_black'><font size=3>ภาคกลาง </font></a>";
						echo "<a href='service.php?region=3' class='link_black'><font size=3>ภาคเหนือ </font></a>";
						echo "<a href='service.php?region=4' class='link_black'><font size=3>ภาคตะวันออกเฉียงเหนือ </font></a>";
						echo "<a href='service.php?region=5' class='link_black'><font size=3>ภาคตะวันออก </font></a>";
						
					}
						
				?>
				<p></p>
			</div>

			<div style="position:relative;margin-top: 0px;left: 0px;font-family: tahoma;font-size: 12px;">
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="service" style="font-family: tahoma;font-size: 12px;">
					<thead>
						<tr>
							<th width="25%">ศูนย์ติดตั้ง</th>
							<th width="20%">ที่อยู่</th>
							<th width="15%">ตำบล</th>
							<th width="10%">อำเภอ</th>
							<th width="10%">จังหวัด</th>
							<th width="5%">รหสัไปรษณีย์</th>
							<th width="15%">โทรศัพท์</th>
						</tr>
					</thead>
					<tbody>
				       <?php
				       		foreach($servicedata as $rowData){
				       	?>
				       	<tr>
							<td width="25%" align=left><?=$rowData['name']?></td>
							<td width="20%" align=left><?=$rowData['address']?></td>
							<td width="15%" align=left><?=$rowData['district1']?></td>
							<td width="10%" align=left><?=$rowData['district2']?></td>
							<td width="10%" align=left><?=$rowData['province']?></td>
							<td width="5%" align=center><?=$rowData['postcode']?></td>
							<td width="15%" align=left><?=$rowData['telephone']?></td>
						</tr>
				       	<?php		
				       		}
				       ?>
			    	</tbody>
			    	
			    	
				</table>

			</div>
			<br>
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
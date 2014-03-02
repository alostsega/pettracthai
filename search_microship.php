<?php
include_once('config.php');
include_once('php_useful.php');
header('Content-type: text/html; charset=utf-8');
//if data none set
//echo sprintf("%s %s %s %s",$_GET['token'],$_GET['username'],$_POST['newpassword'],$_POST['password']);
if(!isset($_GET['token'],$_GET['microship'])
{
	echo json_encode(array('error' => '1'));
	exit;
}
$microship = $_GET['microship'];
$sql = sprintf("SELECT * FROM certificate WHERE microchip = '%s'",$microship);
$result = mysql_query($sql);
if($row = mysql_fetch_row($result)){
	$found = true;
}else{
	$found = false;
}
?>
<table class="text_white_bold_sizebig" style="margin-top:10px;">
	<tr>
		<td><img src="img/icons/user.png" width="30"></td><td>Result: $found?"FOUND":"NOT FOUND"</td>
	</tr>
</table>
<form id="changepass_form" style="background: #FFF; margin-top:10px;" >
<table class="text_black" style="position:relative; width:400px; margin-left:auto;  margin-right:auto;">

<tr height="50">
</tr>
<tr>
<td>	<?php echo "PET NAME = ".$row[1] ?> </td>
</tr>
<tr height="50">
</tr>
</table>

	
<table class="text_black"  style="position:relative; width:400px; margin-left:auto; margin-right:auto;">
<tr>
	<td><center><input type="button" class="btn_class" id="btn_changepass_ok" value="OK"><input type="button" class="btn_class" id="btn_changepass_cancel" value="Cancel"></center></td>
</tr>
<tr height="15">
</tr>
</table>

</form>
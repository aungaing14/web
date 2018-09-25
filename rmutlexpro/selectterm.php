<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$year_id = isset($_POST['yearid']) ? $_POST['yearid'] : "";
$Query = mysql_query("SELECT * FROM termyear WHERE year_id='{$year_id}'");
$Rows = mysql_num_rows($Query);
if ($Rows > 0) {
	while ($nti = mysql_fetch_array($Query)) {
		echo "<option value=\"" . $nti['termyear_name'] . "\">" . $nti['termyear_name'] . "</option>";
	}
}else{
	echo "<option value=\"\">เทอมการศึกษานี้ยังไม่ทำการเปิดให้ลงทะเบียน</option>";
}
?>
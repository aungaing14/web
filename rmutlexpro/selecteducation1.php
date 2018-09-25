<meta charset="utf-8">
<?php
session_start();
include("connect.php");
echo "<option value=\"" . $nti['educationpart_id'] . "\">เลือกแผนก/สาขาวิชา</option>";
$education_id = isset($_POST['education1']) ? $_POST['education1'] : "";
$Query = mysql_query("SELECT * FROM educationpart WHERE education_id='{$education_id}'");
$Rows = mysql_num_rows($Query);
if ($Rows > 0) {
	while ($nti = mysql_fetch_array($Query)) {
		echo "<option value=\"" . $nti['educationpart_id'] . "\">" . $nti['educationpart_name'] . "</option>";
	}
}else{
	echo "<option value=\"\">ไม่มีข้อมูล</option>";
}
?> 
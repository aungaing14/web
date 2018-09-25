<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$educationpart = isset($_POST['educationpart1']) ? $_POST['educationpart1'] : "";
$Query = mysql_query("SELECT a.trainer_id,a.trainer_name,a.trainer_lname,b.title_id,b.title_name FROM trainer a INNER JOIN title b ON a.title_id=b.title_id WHERE educationpart_id='{$educationpart}'");
$Rows = mysql_num_rows($Query);
if ($Rows > 0) {
	while ($nti = mysql_fetch_array($Query)) {
		echo "<option value=\"" . $nti['trainer_id'] . "\">" . $nti['title_name'],'&nbsp',$nti['trainer_name'],'&nbsp',$nti['trainer_lname'] . "</option>";

	}
}else{
	echo "<option value=\"\">ไม่มีข้อมูล</option>";
}
?> 
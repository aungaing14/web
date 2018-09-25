<meta charset="utf-8">
<?php
session_start();
include("connect.php");
echo "<option value=\"" . $nti['AMPHUR_ID'] . "\">เลือกตำบล</option>";
$AMPHUR_ID = isset($_POST['amphur']) ? $_POST['amphur'] : "";
$Query = mysql_query("SELECT * FROM district WHERE AMPHUR_ID='{$AMPHUR_ID}'");
$Rows = mysql_num_rows($Query);
if ($Rows > 0) {
	while ($nti = mysql_fetch_array($Query)) {
		echo "<option value=\"" . $nti['DISTRICT_ID'] . "\">" . $nti['DISTRICT_NAME'] . "</option>";
	}
}else{
	echo "<option value=\"\">ไม่มีข้อมูล</option>";
}
?> 
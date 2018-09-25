<meta charset="utf-8">
<?php
session_start();
include("connect.php");
echo "<option value=\"" . $nti['AMPHUR_ID'] . "\">เลือกอำเภอ</option>";
$PROVINCE_ID = isset($_POST['province1']) ? $_POST['province1'] : "";
$Query = mysql_query("SELECT * FROM amphur WHERE PROVINCE_ID='{$PROVINCE_ID}'");
$Rows = mysql_num_rows($Query);
if ($Rows > 0) {
	while ($nti = mysql_fetch_array($Query)) {
		echo "<option value=\"" . $nti['AMPHUR_ID'] . "\">" . $nti['AMPHUR_NAME'] . "</option>";
	}
}else{
	echo "<option value=\"\">ไม่มีข้อมูล</option>";
}
?> 
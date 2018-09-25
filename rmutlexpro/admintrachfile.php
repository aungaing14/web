<meta charset="utf-8">
<?php
session_start();
include("connect.php");
 


$year_id=$_POST['year_id'];
$branch_id=$_POST['branch_id']; 



$strSQL10 = "SELECT * FROM student WHERE branch_id='$branch_id' ";
$objQuery10 = mysql_query($strSQL10) or die(mysql_error());
while ($nti10=mysql_fetch_array($objQuery10)) {
	$stdid=$nti10['student_id'];


$strSQL11 = "SELECT * FROM lession WHERE student_id='$stdid' ";
$objQuery11 = mysql_query($strSQL11) or die(mysql_error());
while ($nti11=mysql_fetch_array($objQuery11)) {
	$lessionid=$nti11['lession_id'];


			@unlink("fileupload/".$nti11["lession_file"]);




}
echo "<meta http-equiv='refresh' content='1;URL=adminstd.php'>";








}










?>
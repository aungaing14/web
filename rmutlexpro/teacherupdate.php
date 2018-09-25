<meta charset="utf-8">
<?php
session_start();
include("connect.php"); 


$txtteacher_name=$_POST['txtteacher_name'];
$txtteacher_lname=$_POST['txtteacher_lname'];
$txtteacher_tel=$_POST['txtteacher_tel'];
$txtqua=$_POST['txtqua'];
$txtexper=$_POST['txtexper'];



$strSQL = "UPDATE teacher SET teacher_name = '$txtteacher_name',teacher_lname = '$txtteacher_lname',teacher_tel = '$txtteacher_tel',qualification = '$txtqua',exper = '$txtexper' WHERE teacher_id ='".$_SESSION['teacher_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=teacher.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>
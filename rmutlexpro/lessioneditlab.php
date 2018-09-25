<meta charset="utf-8">
<?php
session_start();
include("connect.php");

date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
$numrand = (mt_rand());


$lessionid=addslashes($_GET['lessionid']);
$lession_week=$_POST['lession_week'];
$subject_id=$_POST['subject_id'];
$subject_name=$_POST['subject_name'];
$lession_name=$_POST['lession_name'];
$lession_class=$_POST['lession_class'];
$lession_time=$_POST['lession_time'];
$lession_date=$_POST['lession_date'];


$strSQL = "UPDATE lessionlab SET subject_id = '$subject_id',subject_name='$subject_name',lession_name='$lession_name',lession_class='$lession_class',lession_time='$lession_time',lession_week='$lession_week',lession_date='$lession_date' WHERE lession_id = '$lessionid' ";
$objQuery = mysql_query($strSQL);


if($_FILES['fileupload']['tmp_name'] != "")
{

$path="fileupload/";  
		
//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
$type = strrchr($_FILES['fileupload']['name'],".");
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;



	if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy))	{
		$strSQL = "SELECT * FROM lessionlab WHERE lession_id ='$lessionid' ";
		$objQuery = mysql_query($strSQL) or die (mysql_error());
		$objResult = mysql_fetch_array($objQuery);
			@unlink("fileupload/".$objResult["lession_file"]);

			@unlink("fileupload/".$_POST["fileupload"]);



$strSQL = "UPDATE lessionlab SET lession_file = '$newname' WHERE lession_id = '$lessionid' ";
$objQuery = mysql_query($strSQL);



		}
}
echo "<meta http-equiv='refresh' content='1;URL=stdteachlab.php'>";
mysql_close();



?>
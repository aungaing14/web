<meta charset="utf-8">
<?php
session_start();
include("connect.php");

date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
$numrand = (mt_rand());


$file_id=addslashes($_GET['file_id']);
$file_name=$_POST['file_name'];
$file_date=$_POST['file_date'];




$strSQL = "UPDATE file SET file_name = '$file_name',file_date='$file_date' WHERE file_id = '$file_id' ";
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
		$strSQL = "SELECT * FROM file WHERE file_id ='$file_id' ";
		$objQuery = mysql_query($strSQL) or die (mysql_error());
		$objResult = mysql_fetch_array($objQuery);
			@unlink("fileupload/".$objResult["file_file"]);

			@unlink("fileupload/".$_POST["file_file"]);



$strSQL = "UPDATE file SET file_file = '$newname' WHERE file_id = '$file_id' ";
$objQuery = mysql_query($strSQL);



		}
}
echo "<meta http-equiv='refresh' content='1;URL=cfile.php'>";
mysql_close();



?>
<meta charset="utf-8">
<?php
session_start();
include("connect.php"); 


date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
$numrand = (mt_rand());


$teacherment_id=$_GET['teacherment_id'];
$teacherment_date=$_POST['teacherment_date'];


$strSQL = "SELECT * FROM teacherment WHERE teacherment_id='$teacherment_id' ";
$objQuery = mysql_query($strSQL);
$nti=mysql_fetch_array($objQuery);
$file_name = $nti['teacherment_name'];
$info = pathinfo( $file_name , PATHINFO_EXTENSION ) ;

if ($info=='jpg'){


if($_FILES['fileupload']['tmp_name'] != "")
{

$path="img/";  
		
//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
$type = strrchr($_FILES['fileupload']['name'],".");
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="img/".$newname;



	if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy))	{
		$strSQL = "SELECT * FROM teacherment WHERE teacherment_id ='$teacherment_id' ";
		$objQuery = mysql_query($strSQL) or die (mysql_error());
		$objResult = mysql_fetch_array($objQuery);
			@unlink("img/".$objResult["teacherment_name"]);

			@unlink("img/".$_POST["fileupload"]);



$strSQL = "UPDATE teacherment SET teacherment_date = '$teacherment_date',teacherment_name = '$newname' WHERE teacherment_id = '$teacherment_id' ";
$objQuery = mysql_query($strSQL);



		}
}}else{

$teacherevamentsave=$_POST['teacherevamentsave'];


$strSQL = "UPDATE teacherment SET teacherment_date = '$teacherment_date',teacherment_name = '$teacherevamentsave' WHERE teacherment_id =$teacherment_id";
$objQuery = mysql_query($strSQL) or die(mysql_error());

}

echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";
mysql_close();


?>
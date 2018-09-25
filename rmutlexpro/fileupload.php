<meta charset="utf-8">
<?php
session_start();
include("connect.php");




date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	

$numrand = (mt_rand());

$upload=$_FILES['fileupload'];
if($upload <> '') { 

$path="fileupload/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['fileupload']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}

$strNextSeq = "";

$strSQL = "SELECT * FROM prefix WHERE 1 ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
if($objResult["val"] == date("Y")){
		$Seq = substr("00000".$objResult["seq"],-5,5);   //*** Replace Zero Fill ***//
		$strNextSeq = $objResult["val"].$Seq;
		$strSQL = "UPDATE prefix SET seq= seq+1 ";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}else{
	$Seq = substr("000001",-5,5);   //*** Replace Zero Fill ***//
	$strNextSeq = date("Y").$Seq;
	$strSQL = "UPDATE prefix SET val = '".date("Y")."' , seq = '1' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}
$lessionid=$strNextSeq;

$file_name=$_POST['file_name'];
$file_date=$_POST['file_date'];





	$sql1 = "INSERT INTO file (`file_id`,`file_name`, `file_file`, `file_date`) VALUES ('$numrand'
	,'$file_name','$newname','$file_date')";
	mysql_query($sql1) or die(mysql_error());
	echo "<meta http-equiv='refresh' content='1;URL=file.php'>";
	


?>
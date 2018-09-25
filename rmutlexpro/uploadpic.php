<meta charset="utf-8">
<?php
include("connect.php");


$student_id=$_GET['student_id'];



date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	

$numrand = (mt_rand());

$upload=$_FILES['upfile'];
if($upload <> '') { 

$path="img/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['upfile']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="img/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['upfile']['tmp_name'],$path_copy);  	
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



		

		$strSQL1 = "SELECT * FROM images WHERE id_image ='$student_id' ";
		$objQuery1 = mysql_query($strSQL1) or die (mysql_error());
		$objResult1 = mysql_fetch_array($objQuery1);
			@unlink("img/".$objResult1["image"]);





$sql5 = "UPDATE images SET image='".$newname."',image_date='".$print_date_eng."' ";
$sql5.="WHERE id_image =   '$student_id'";
	mysql_query($sql5) or die(mysql_error());



echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";

?>


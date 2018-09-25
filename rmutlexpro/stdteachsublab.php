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

$student_id=$_SESSION['student_id'];
$subject_id=$_POST['subject_id'];
$subject_name=$_POST['subject_name'];
$lession_name=$_POST['lession_name'];
$lession_class=$_POST['lession_class'];
$lession_time=$_POST['lession_time'];
$lession_date=$_POST['lession_date'];

$lession_week=$_POST['lession_week'];




	$sql = "SELECT student_id,year_id,term_id FROM student WHERE student_id='".$_SESSION['student_id']."'";
	$result = mysql_query($sql);
	while($rs = mysql_fetch_array($result))
			{
	$sql1 = "INSERT INTO lessionlab (`lession_id`,`year_id`, `term_id`, `student_id`) VALUES ('$lessionid'
	,'".$rs['term_id']."','".$rs['year_id']."','$student_id')";
	mysql_query($sql1) or die(mysql_error());

	}

	$sql5 = "UPDATE lessionlab SET subject_id='$subject_id',subject_name='$subject_name',lession_name='$lession_name',lession_class='$lession_class',lession_time='$lession_time',lession_week='$lession_week',lession_date='$lession_date',lession_file='$newname' WHERE lession_id= '$lessionid' AND student_id='".$_SESSION['student_id']."'";
	mysql_query($sql5) or die(mysql_error());

	echo "<meta http-equiv='refresh' content='1;URL=stdteachlab.php'>";
?>
<meta charset="utf-8">
<?php
session_start();
include("connect.php");



$txtbirthday=$_POST['txtbirthday'];
$txtemail=$_POST['txtemail'];
$blood=$_POST['blood'];
$sex=$_POST['sex'];
$txttel=$_POST['txttel'];

$saddressnow_code=$_POST['saddressnow_code'];
$saddressnow_moo=$_POST['saddressnow_moo'];
$saddressnow_soi=$_POST['saddressnow_soi'];
$saddressnow_road=$_POST['saddressnow_road'];
$province=$_POST['province'];
$amphur=$_POST['amphur'];
$district=$_POST['district'];
$saddressnow_postid=$_POST['saddressnow_postid'];


$saddresshome_code=$_POST['saddresshome_code'];
$saddresshome_moo=$_POST['saddresshome_moo'];
$saddresshome_soi=$_POST['saddresshome_soi'];
$saddresshome_road=$_POST['saddresshome_road'];
$province1=$_POST['province1'];
$amphur1=$_POST['amphur1'];
$district1=$_POST['district1'];
$saddresshome_postid=$_POST['saddresshome_postid'];



$strSQL1 = "UPDATE saddressnow SET saddressnow_code = '$saddressnow_code',saddressnow_moo = '$saddressnow_moo',saddressnow_soi = '$saddressnow_soi',saddressnow_road = '$saddressnow_road',saddressnow_province = '$province',saddressnow_amphur = '$amphur',saddressnow_district = '$district',saddressnow_postid = '$saddressnow_postid' WHERE student_id = '".$_SESSION['student_id']."' ";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());


$strSQL2 = "UPDATE saddresshome SET saddresshome_code = '$saddresshome_code',saddresshome_moo = '$saddresshome_moo',saddresshome_soi = '$saddresshome_soi',saddresshome_road = '$saddresshome_road',saddresshome_province = '$province1',saddresshome_amphur = '$amphur1',saddresshome_district = '$district1',saddresshome_postid = '$saddresshome_postid' WHERE student_id = '".$_SESSION['student_id']."' ";
$objQuery2 = mysql_query($strSQL2) or die(mysql_error());




$strSQL = "UPDATE stdprofile SET std_birthday = '$txtbirthday',std_email = '$txtemail',blood_id = '$blood',sex_id = '$sex',	std_tel = '$txttel' WHERE student_id = '".$_SESSION['student_id']."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>
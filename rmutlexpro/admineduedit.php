<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$txtedu_id=$_POST['txtedu_id'];
$txtedu_name=$_POST['txtedu_name'];
$txtedu_code=$_POST['txtedu_code'];
$txtedu_moo=$_POST['txtedu_moo'];
$txtedu_soi=$_POST['txtedu_soi'];
$txtedu_road=$_POST['txtedu_road'];
$province=$_POST['province'];
$amphur=$_POST['amphur'];
$district=$_POST['district'];
$txtedu_post=$_POST['txtedu_post'];
$txtedu_web=$_POST['txtedu_web'];
$txtedu_tel=$_POST['txtedu_tel'];



$strSQL = "UPDATE education SET education_name = '$txtedu_name',education_code = '$txtedu_code',education_moo = '$txtedu_moo',education_soi = '$txtedu_soi',education_road = '$txtedu_road',	education_province = '$province',education_amphur = '$amphur',education_district = '$district',education_post = '$txtedu_post',education_web = '$txtedu_web',education_tel = '$txtedu_tel' WHERE education_id =$txtedu_id";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>
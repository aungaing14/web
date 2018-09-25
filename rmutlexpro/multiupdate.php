<meta charset="utf-8">
<?php
session_start();
include("connect.php");



 

$idselect=implode(",",$_POST['std_id']);


$profile_id=$idselect+'1';
$saddressnow_id=$idselect+'10000000000';
$saddresshome_id=$idselect+'100000000000';

$sql_insert3="INSERT INTO `$dbname`.`stdprofile`";
$sql_insert3.= "(`profile_id`, `std_birthday`, `std_email`, `blood_id`, `sex_id`, `std_tel`, `student_id`)";
$sql_insert3.= "VALUES ('".$profile_id."','.','.','.','.','.','".$idselect."');";


mysql_query($sql_insert3) or die(mysql_error());
$sql_result=mysql_query($sql_insert3);	

$sql_insert4="INSERT INTO `$dbname`.`saddressnow`";
$sql_insert4.= "(`saddressnow_id`, `saddressnow_code`, `saddressnow_moo`, `saddressnow_road`, `saddressnow_soi`, `saddressnow_province`, `saddressnow_amphur`, `saddressnow_district`, `saddressnow_postid`, `student_id`)";
$sql_insert4.= "VALUES ('".$saddressnow_id."','.','.','.','.','.','.','.','.','".$idselect."');";


mysql_query($sql_insert4) or die(mysql_error());
$sql_result=mysql_query($sql_insert4);


$sql_insert5="INSERT INTO `$dbname`.`saddresshome`";
$sql_insert5.= "(`saddresshome_id`, `saddresshome_code`, `saddresshome_moo`, `saddresshome_road`, `saddresshome_soi`, `saddresshome_province`, `saddresshome_amphur`, `saddresshome_district`, `saddresshome_postid`, `student_id`)";
$sql_insert5.= "VALUES ('".$saddresshome_id."','.','.','.','.','.','.','.','.','".$idselect."');";


mysql_query($sql_insert5) or die(mysql_error());
$sql_result=mysql_query($sql_insert5);	


$strSQL6 = "UPDATE student SET saddressnow_id = '$saddressnow_id',saddresshome_id = '$saddresshome_id',profile_id='$profile_id' WHERE student_id = $idselect ";
$objQuery6 = mysql_query($strSQL6) or die(mysql_error());



$sql="DELETE from regis WHERE std_id in($idselect)";
$result=mysql_query($sql) or die(mysql_error());

$sql2="UPDATE student SET active='1' WHERE student_id in($idselect)";
$result2=mysql_query($sql2) or die(mysql_error());



if ($result){

	echo "<meta http-equiv='refresh' content='1;URL=adminstd.php'>";

}else{
	echo "เกิดข้อผิดพลาด";
}

?>
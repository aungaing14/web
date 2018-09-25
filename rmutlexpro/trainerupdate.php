<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$txttrainer_name=$_POST['txttrainer_name'];
$txttrainer_lname=$_POST['txttrainer_lname'];
$txttrainer_tel=$_POST['txttrainer_tel'];
$txtqua=$_POST['txtqua'];
$txtexper=$_POST['txtexper'];



$strSQL = "UPDATE trainer SET trainer_name = '$txttrainer_name',trainer_lname = '$txttrainer_lname',trainer_tel = '$txttrainer_tel',qualification = '$txtqua',exper = '$txtexper' WHERE trainer_id ='".$_SESSION['trainer_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=trainer.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>
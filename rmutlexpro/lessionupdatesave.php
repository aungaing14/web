<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$lessionid=addslashes($_GET['lessionid']);
$lessionment_date=$_POST['lessionment_date'];
$lessionment_1=$_POST['lessionment_1'];
$lessionment_2=$_POST['lessionment_2'];
$lessionment_3=$_POST['lessionment_3'];
$lessionment_4=$_POST['lessionment_4'];
$lessionment_5=$_POST['lessionment_5'];



$strSQL = "UPDATE lessionment SET lessionment_1 = '$lessionment_1',lessionment_2 = '$lessionment_2',lessionment_3 = '$lessionment_3',lessionment_4 = '$lessionment_4',lessionment_5 = '$lessionment_5',lessionment_date = '$lessionment_date' WHERE lessionment_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=stdteach.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>
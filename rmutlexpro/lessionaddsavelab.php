<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$lessionid=addslashes($_GET['lessionid']);
$lessionadddate=$_POST['lessionadddate'];
$lessionadd1=$_POST['lessionadd1'];
$lessionadd2=$_POST['lessionadd2'];
$lessionadd3=$_POST['lessionadd3'];
$lessionadd4=$_POST['lessionadd4'];
$lessionadd5=$_POST['lessionadd5'];




$sql_insert="INSERT INTO `$dbname`.`lessionmentlab`";
$sql_insert.= "(`lessionment_id`, `lessionment_1`, `lessionment_2`, `lessionment_3`, `lessionment_4`, `lessionment_5`, `lessionment_date`)";
$sql_insert.= "VALUES ('".$lessionid."','".$lessionadd1."','".$lessionadd2."','".$lessionadd3."','".$lessionadd4."','".$lessionadd5."','".$lessionadddate."');";



$sql_result=mysql_query($sql_insert);
if ($sql_result) {
	echo "<meta http-equiv='refresh' content='1;URL=stdteachlab.php'>";
} else 

echo "<meta http-equiv='refresh' content='1;URL=lessionerror.php'>";

exit;

?>
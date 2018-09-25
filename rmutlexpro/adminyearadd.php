<meta charset="utf-8">
<?php
session_start();
include("connect.php");




$year_name=$_POST['year_name'];
$year_id=$year_name;
$termyear_id=$year_id+10000;
$termyear_id2=$year_id+20000;






$sql_insert="INSERT INTO `$dbname`.`year`";
$sql_insert.= "(`year_id`, `year_name`, `active`)";
$sql_insert.= "VALUES ('".$year_id."','".$year_name."','0');";
$objQuery = mysql_query($sql_insert);

$sql_insert1="INSERT INTO `$dbname`.`termyear`";
$sql_insert1.= "(`termyear_id`, `termyear_name`,`year_id`,`active`)";
$sql_insert1.= "VALUES ('".$termyear_id."','1','".$year_id."','0');";
$objQuery1 = mysql_query($sql_insert1);

$sql_insert2="INSERT INTO `$dbname`.`termyear`";
$sql_insert2.= "(`termyear_id`, `termyear_name`,`year_id`,`active`)";
$sql_insert2.= "VALUES ('".$termyear_id2."','2','".$year_id."','0');";
$objQuery2 = mysql_query($sql_insert2);


if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=adminyear.php'>";
}else{
	echo "<meta http-equiv='refresh' content='1;URL=erroryear.php'>";
}





exit;



?>
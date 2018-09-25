<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$headeva=$_POST['headeva'];

$qfrmid=$_POST['headevaid'];


$sql_insert="INSERT INTO `$dbname`.`question_frm` (qfrm_id,qfrm_name,question_id) VALUES ('".$qfrmid."','".$headeva."','1');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=adminevalution.php'>";

exit;

?>
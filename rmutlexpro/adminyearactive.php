 <meta charset="utf-8">
<?php
session_start();
include("connect.php");


$yearid=$_POST['yearid'];
$termid=$_POST['termid'];


$sql2="UPDATE termyear SET active='1' WHERE termyear_name=$termid AND year_id=$yearid";
$result2=mysql_query($sql2) or die(mysql_error());

if($result2)
{
	$sql2="UPDATE year SET active='1' WHERE year_id=$yearid";
	$result2=mysql_query($sql2) or die(mysql_error());
	echo "<meta http-equiv='refresh' content='1;URL=adminyear.php'>";
}else{
	echo "<meta http-equiv='refresh' content='1;URL=erroryear.php'>";
}

?>
<meta charset="utf-8">
<?php 
session_start(); 
include("connect.php");

$qfrm_id=$_GET['qfrm_id'];
$subquestion_id=$_GET['subquestion_id'];
$subquestion_score=$_GET['subquestion_score'];
$ans=$subquestion_score*5;

$query = "ALTER TABLE `lessioneva` DROP q$subquestion_id ";
mysql_query($query) or die(mysql_error());
$sql_result6=mysql_query($query);

$querya = "ALTER TABLE `lessionevatr` DROP q$subquestion_id ";
mysql_query($querya) or die(mysql_error());
$sql_resulta=mysql_query($querya);


$query7 = "ALTER TABLE `lessionevament` DROP q$subquestion_id ";
mysql_query($query7) or die(mysql_error());
$sql_result7=mysql_query($query7);

$queryb = "ALTER TABLE `lessionevamenttrainer` DROP q$subquestion_id ";
mysql_query($queryb) or die(mysql_error());
$sql_resultb=mysql_query($queryb);


	$sql1 = "SELECT qfrm_score FROM question_frm WHERE qfrm_id='$qfrm_id'";
	$result1 = mysql_query($sql1);
	$rs1 = mysql_fetch_array($result1);
		$ans1=$rs1['qfrm_score']-$ans;	


	$strSQL2 = "UPDATE question_frm SET qfrm_score = '$ans1' WHERE qfrm_id='$qfrm_id'";
	$objQuery2 = mysql_query($strSQL2) or die(mysql_error());	





$strSQL = "DELETE FROM subquestion ";
$strSQL .="WHERE subquestion_id = '$subquestion_id' ";
$objQuery = mysql_query($strSQL);


if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminevalution.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>
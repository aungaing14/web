<meta charset="utf-8">
<?php 
session_start();
include("connect.php"); 
set_time_limit(0);
$qfrm_id=$_GET['qfrm_id'];
  

$sql9 = "SELECT * FROM question_frm WHERE qfrm_id = '$qfrm_id'";
	$result9 = mysql_query($sql9);
	while($rs9 = mysql_fetch_array($result9)){
		$sum9=$rs9['qfrm_score'];
			$sql7 = "SELECT * FROM question WHERE question_id='1'";
			$result7 = mysql_query($sql7);
			while($rs7 = mysql_fetch_array($result7)){
			$sum7=$rs7['question_score']-$sum9;
			$strSQL7 = "UPDATE question SET question_score = '$sum7' WHERE question_id='1'";
			$objQuery7 = mysql_query($strSQL7) or die(mysql_error());
	}
}



$a="SELECT * FROM subquestion WHERE qfrm_id=$qfrm_id";
$result = mysql_query($a);
	while($rs = mysql_fetch_array($result)){
		$a1=$rs['subquestion_id'];

		$query = "ALTER TABLE `lessioneva` DROP q$a1 ";
		mysql_query($query) or die(mysql_error());
		$sql_result6=mysql_query($query);

		$querya = "ALTER TABLE `lessionevatr` DROP q$a1 ";
		mysql_query($querya) or die(mysql_error());
		$sql_resulta=mysql_query($querya);
}


$b="SELECT * FROM subquestion WHERE qfrm_id=$qfrm_id";
$result2 = mysql_query($b);
	while($rs2 = mysql_fetch_array($result2)){
		$c=$rs2['subquestion_id'];

		$query2 = "ALTER TABLE `lessionevament` DROP q$c ";
		mysql_query($query2) or die(mysql_error());
		$sql_result2=mysql_query($query2);

		$queryb = "ALTER TABLE `lessionevamenttrainer` DROP q$c ";
		mysql_query($queryb) or die(mysql_error());
		$sql_resultb=mysql_query($queryb);
}  
 



$strSQL1 = "DELETE FROM subquestion ";
$strSQL1 .="WHERE qfrm_id = '$qfrm_id' ";
$objQuery1 = mysql_query($strSQL1);




$strSQL = "DELETE FROM question_frm ";
$strSQL .="WHERE qfrm_id = '$qfrm_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminevalution.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>
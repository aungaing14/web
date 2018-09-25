<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$qfrm_id=$_POST['qfrm_id'];
$subquestion_id=$_POST['subquestion_id'];
$subquestion_name=$_POST['subquestion_name'];
$subquestion_score=$_POST['subquestion_score'];
$subquestionscore=$subquestion_score*5;



$sql = "SELECT subquestion_score FROM subquestion WHERE subquestion_id='$subquestion_id'";
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);
		$ans=$rs['subquestion_score']*5;


	$sql1 = "SELECT qfrm_score FROM question_frm WHERE qfrm_id='$qfrm_id'";
	$result1 = mysql_query($sql1);
	$rs1 = mysql_fetch_array($result1);
		$ans1=$rs1['qfrm_score']-$ans;	


	$strSQL2 = "UPDATE question_frm SET qfrm_score = '$ans1' WHERE qfrm_id='$qfrm_id'";
	$objQuery2 = mysql_query($strSQL2) or die(mysql_error());	
	
$strSQL = "UPDATE subquestion SET subquestion_name = '$subquestion_name',subquestion_score = '$subquestion_score' WHERE subquestion_id ='$subquestion_id'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	$sql2 = "SELECT qfrm_id,qfrm_score FROM question_frm WHERE qfrm_id='$qfrm_id'";
	$result2 = mysql_query($sql2);
	while($rs2 = mysql_fetch_array($result2)){
		$sum1=$rs2['qfrm_score']+$subquestionscore;
		
		$strSQL2 = "UPDATE question_frm SET qfrm_score = '$sum1' WHERE qfrm_id='$qfrm_id'";
		$objQuery2 = mysql_query($strSQL2) or die(mysql_error());
	}
		echo "<meta http-equiv='refresh' content='1;URL=adminevalution.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}





?>
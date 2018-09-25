<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$qfrm_name=$_POST['qfrm_name'];
$subevaid=$_POST['subevaid'];
$subevaname=$_POST['subevaname'];
$subevascoreadd=$_POST['subevascore'];
$subevascore=$subevascoreadd*5;
$qfmid=$qfrm_name*10;
$subid=$qfmid+$subevaid;


$query = "ALTER TABLE `lessionevalab` ADD q$subid varchar(11) NOT NULL AFTER `lessioneva_teacher`";
mysql_query($query) or die(mysql_error());
$sql_result6=mysql_query($query);

$querya = "ALTER TABLE `lessionevatrlab` ADD q$subid varchar(11) NOT NULL AFTER `lessionevatr_trainer`";
mysql_query($querya) or die(mysql_error());
$sql_resulta=mysql_query($querya);



$query1 = "ALTER TABLE `lessionevamentlab` ADD q$subid varchar(100) NOT NULL AFTER `lessionevament_teacher`";
mysql_query($query1) or die(mysql_error());
$sql_result7=mysql_query($query1);

$queryb = "ALTER TABLE `lessionevamenttrainerlab` ADD q$subid varchar(100) NOT NULL AFTER `lessionevamenttrainer_trainer`";
mysql_query($queryb) or die(mysql_error());
$sql_resultb=mysql_query($queryb);






$sql_insert="INSERT INTO `subquestionlab` (`subquestion_id`, `subquestion_name`, `subquestion_score`, `qfrm_id`) VALUES ('".$subid."', '".$subevaname."', '".$subevascoreadd."', '".$qfrm_name."');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);





$sql = "SELECT qfrm_id,qfrm_score FROM questionlab_frm WHERE qfrm_id='".$qfrm_name."'";
	$result = mysql_query($sql);
	while($rs = mysql_fetch_array($result)){
		$sum=$rs['qfrm_score']+$subevascore;
		$strSQL = "UPDATE questionlab_frm SET qfrm_score = '$sum' WHERE qfrm_id='".$qfrm_name."'";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
	

$sql9 = "SELECT * FROM question WHERE question_id='2'";
	$result9 = mysql_query($sql9);
	while($rs9 = mysql_fetch_array($result9)){
		$sum9=$rs9['question_score']+$subevascore;
		$strSQL9 = "UPDATE question SET question_score = '$sum9' WHERE question_id='2'";
		$objQuery9 = mysql_query($strSQL9) or die(mysql_error());
	}
	
}

echo "<meta http-equiv='refresh' content='1;URL=adminevalutionlab.php'>";

exit;






?>
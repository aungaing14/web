<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$teacherid=$_GET['teacherid'];
$studentid=$_GET['studentid'];
$lession_id=$_POST['lession_id'];

$dateeva=$_POST['dateeva'];


date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");    

$numrand = (mt_rand());

$upload=$_FILES['upfile'];
if($upload <> '') { 

$path="img/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['upfile']['name'],".");
    
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="img/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['upfile']['tmp_name'],$path_copy);   
    }

$strNextSeq = "";

$strSQL = "SELECT * FROM prefix WHERE 1 ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
if($objResult["val"] == date("Y")){
        $Seq = substr("00000".$objResult["seq"],-5,5);   //*** Replace Zero Fill ***//
        $strNextSeq = $objResult["val"].$Seq;
        $strSQL = "UPDATE prefix SET seq= seq+1 ";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}else{
    $Seq = substr("000001",-5,5);   //*** Replace Zero Fill ***//
    $strNextSeq = date("Y").$Seq;
    $strSQL = "UPDATE prefix SET val = '".date("Y")."' , seq = '1' ";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}
$lessionid=$strNextSeq;


$sql_insert="INSERT INTO `$dbname`.`teacherment`";
$sql_insert.= "(`teacherment_id`, `teacherment_student`, `teacherment_teacher`, `teacherment_date`)";
$sql_insert.= "VALUES ('".$lession_id."','".$studentid."','".$teacherid."','$dateeva');";
mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);


$sql5 = "UPDATE teacherment SET teacherment_name='$newname' WHERE teacherment_id =   '$lession_id'";
    mysql_query($sql5) or die(mysql_error()); 


mysql_query($sql5) or die(mysql_error());
$sql_result1=mysql_query($sql5);
echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";

?>
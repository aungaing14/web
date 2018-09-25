<?php
include("connect.php");
require_once('mpdf/mpdf.php');
ob_start(); 
$student_id=addslashes($_GET['student_id']);
?>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

<style type="text/css">
<!--
@page rotated { size: landscape; }
.style1 {
  font-family: "TH SarabunPSK";
  font-size: 18pt;
  font-weight: bold;
}
.style2 {
  font-family: "TH SarabunPSK";
  font-size: 16pt;
  font-weight: bold;
}
.style3 {
  font-family: "TH SarabunPSK";
  font-size: 16pt;
  
}
.style5 {cursor: hand; font-weight: normal; color: #000000;}
.style9 {font-family: Tahoma; font-size: 12px; }
.style11 {font-size: 12px}
.style13 {font-size: 9}
.style16 {font-size: 9; font-weight: bold; }
.style17 {font-size: 12px; font-weight: bold; }
-->
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
 <link id="bootstrap-style" href="css/bootstrap.css" rel="stylesheet"> 
</head>
<body>
<div class=Section2>
<table width="704" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td width="200" align="center"><span class="style" style="font-weight: bold;font-size:11pt;">ตารางสรุปคะแนนประเมินผลการสอนการปฏิบัติประสบการณวิชาชีพครู</span></td>


  </tr>
    <tr>

    <td width="200" align="center"><span class="style" style="font-weight: bold;font-size:11pt;">(ทฤษฎี)</span></td>
    

  </tr>
  
</table>
<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
  </tbody>
</table>

<table bordercolor="#666666" width="750" height="78" border="0"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >
   <?php 
  $strSQL = "SELECT * FROM student WHERE student_id = '$student_id' ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?> 
    <td class="style2" width="50" align="left" style="font-weight: bold;font-size:10pt;">รหัสนักศึกษา</td>
    <td class="style2" width="300" align="left" style="font-size:10pt;"><?php echo $nti['student_id'];?></td>
    <td class="style2" width="300" align="center" style="font-weight: bold;font-size:10pt;"></td>
       <?php }?> 
    </tr>
   
     <?php 
  $strSQL = "SELECT * FROM student WHERE student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?>    

    
    
  <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">ชื่อนักศึกษา</td>
    <td align="left" class="style3" style="font-size:10pt;"><?php $titleid=$nti['title_id'];  
  $strSQL = "SELECT a.title_id,a.student_name,a.student_lname,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?><?php echo $nti['title_name'];?><?php echo $nti['student_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['student_lname'];?></td>
    <td align="left" class="style3" style="font-size:10pt;"></td>
   
    
<?php }?>

    </tr>
  
      <?php }?> 

 <?php 



  $strSQL = "SELECT * FROM lession WHERE  student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   $nti=mysql_fetch_array($objQuery)  
    ?>   
    <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">ชื่อวิชาที่สอน</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['subject_name'];?></td>
    <td align="left"  class="style3" style="font-size:10pt;"></td>

    </tr>
     <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">ชั้นปีที่สอน</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['lession_class'];?></td>
    <td align="left" class="style3" style="font-size:10pt;"></td>

    </tr>  
      ?> 
      <?php 
  $strSQL = "SELECT a.edu_id,a.edupart_id,b.education_id,b.education_name,c.educationpart_id,c.educationpart_name FROM student a INNER JOIN education b ON a.edu_id=b.education_id INNER JOIN educationpart c ON a.edupart_id=c.educationpart_id WHERE student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   $nti=mysql_fetch_array($objQuery)  
    ?>   
     <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">แผนก</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['educationpart_name'];?></td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['education_name'];?></td>

    </tr>  
    ?>
          <?php 
  $strSQL = "SELECT a.teacher_id,b.teacher_id,b.teacher_name,b.teacher_lname,b.title_id FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   $nti=mysql_fetch_array($objQuery)  
    ?>   
     <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">อาจารย์นิเทศก์</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php $titleid=$nti['title_id']; $strSQL = "SELECT a.teacher_id,a.teacher_name,a.teacher_lname,a.title_id,b.title_id,b.title_name,c.student_id,c.teacher_id FROM teacher a INNER JOIN title b ON a.title_id=b.title_id INNER JOIN student c ON a.teacher_id=c.teacher_id WHERE b.title_id = '$titleid' AND c.student_id=".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);
  
   $nti=mysql_fetch_array($objQuery) ; 
    echo $nti['title_name'];?><?php echo $nti['teacher_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['teacher_lname'];?></td>
    <td align="left"  class="style3" style="font-size:10pt;"></td>

    </tr>  
    ?>
</table>

<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<table bordercolor="#666666" width="750" height="78" border="1"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >

    <td class="style2" width="50" align="center" style="font-weight: bold;font-size:10pt;">การปฏิบัติการสอน</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">คะแนนเต็ม</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">คะแนนที่ได้</td>
    <td class="style2" width="100" align="center" style="font-weight: bold;font-weight: bold;font-size:10pt;">หมายเหตุ</td>
       
    </tr>
<?php 

$strSQLa = "SELECT * FROM student WHERE student_id='".$_GET['student_id']."'";
$objQuerya = mysql_query($strSQLa);
$ntia=mysql_fetch_array($objQuerya);
$bb=$ntia['term_id'];
$cc=$ntia['year_id'];


$i='0';
$sum='0';
  $strSQL = "SELECT * FROM lession WHERE term_id='$cc' AND year_id='$bb' AND student_id = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
   $sum=$sum+$nti['lession_score'];  

   $strSQL1 = "SELECT * FROM question WHERE question_id = '1' ";
    $objQuery1 = mysql_query($strSQL1);


  $nti1=mysql_fetch_array($objQuery1);


    ?>  
 <tr align="center" >
       
    <td class="style2" width="50" align="center" style="font-size:10pt;"><?php echo $i=$i+'1'; ?></td>
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti1['question_score'];?></td>
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti['lession_score'];?></td>
    <td class="style2" width="100" align="center" style="font-size:10pt;"></td>
      
    </tr>   
<?php  }  ?> 

   ?>  
   <?php 






$a='0';
  $ans='0';


$strSQLa = "SELECT * FROM student WHERE student_id='".$_GET['student_id']."'";
$objQuerya = mysql_query($strSQLa);
$ntia=mysql_fetch_array($objQuerya);
$bb=$ntia['student_id'];
$dd=$ntia['term_id'];
$cc=$ntia['year_id'];


$strSQLb = "SELECT * FROM lession WHERE term_id='$cc' AND year_id='$dd' AND student_id='$bb'";
$objQueryb = mysql_query($strSQLb);
$ntib=mysql_fetch_array($objQueryb);
$cc=$ntib['lession_id'];


  $strSQL = "SELECT * FROM lessioneva  WHERE lessioneva_id =$cc AND lessioneva_student = ".$_GET['student_id']." ";
    $objQuery = mysql_query($strSQL);
$row=mysql_num_rows($objQuery); 

  while ($ntia=mysql_fetch_array($objQuery)) {

$score=$ntia['lessioneva_score'];



$a=$a+$score;


  $ans=@($a/$row);
 }
  
 



  $strSQL = "SELECT * FROM question WHERE question_id = '1' ";
    $objQuery = mysql_query($strSQL);?>
  <?php
  $nti=mysql_fetch_array($objQuery);
    ?>  
 <tr align="center" >
       
    <td class="style2" width="50" align="center" style="font-weight: bold;font-size:10pt;">รวม</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;"><?php echo $nti1['question_score'];?></td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;"><?php echo $ans?></td>
    <td class="style2" width="100" align="center" style="font-size:10pt;"></td>
      
    </tr>  
   ?>
</table>
<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="704" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
 
    <td width="200" align="right"><span class="style3" style="font-size:10pt;">ลงชื่อ................................................................</span></td>
  </tr>

  
</table>
<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="220" border="0" align="right" cellpadding="0" cellspacing="0">

  <tr>
 
    <td  align="left"><span style="font-size:10pt;">&nbsp;&nbsp;&nbsp;ผู้ปฏิบัติประสบการณ์วิชาชีพครู</span></td>
  </tr>
  
</table>




</div>
</body>
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>     

<?php
include("connect.php");
require_once('mpdf/mpdf.php');
ob_start(); 
$lessionid=addslashes($_GET['lession_id']);
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
 
   <?php //ดึงข้อมูล ปี และ ไตรมาส จากค่า POST
$lessionsql = " SELECT * 
FROM lession where lession_id = ".$_GET['lession_id']."";
$result=mysql_query($lessionsql);
while ($r=mysql_fetch_array($result)) 
{ 

    $week =$r['lession_week'];
 
}  
$lessionid = (isset($_GET['lession_id'])) ? $_GET['lession_id'] : '';
?>
    <td width="200" align="right"><span class="style" style="font-weight: bold;font-size:11pt;">แบบบันทึกรายสัปดาห์ที่ <?php echo $week; ?></span></td>
  </tr>
  
</table>
<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
  </tbody>
</table>
<table bordercolor="#666666" width="750" height="78" border="1"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >
    <td class="style2" width="150" height="23" align="center" style="font-weight: bold;font-size:11pt;">วัน/เดือน/ปี</td>
    <td class="style2" width="250" align="center" style="font-weight: bold;font-size:11pt;">ชื่อกิจกรรม</td>
    <td class="style2" width="250" align="center" style="font-weight: bold;font-size:11pt;">รายละเอียด/ผลการดำเนินกิจกรรม</td>
    </tr>
   
     <?php 
  $strSQL = "SELECT * FROM lessionment WHERE lessionment_id = ".$_GET['lession_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?>    

    
    
  <tr>
    <td  rowspan="5" valign="top" align="left" class="style3" height="23" style="font-size:11pt;"><?php echo $nti['lessionment_date'];?></td>
    <td align="left" class="style3" style="font-size:11pt;">ด้านการจัดการเรียนการสอน</td>
    <td align="left" class="style3" style="font-size:11pt;"><?php echo $nti['lessionment_1'];?></td>
   
    


    </tr>
  

    <tr>

    <td align="left" class="style3" style="font-size:11pt;">ด้านการประเมินปรับปรุง และพัฒนาการจัดการเรียนการสอน</td>
    <td align="left" class="style3" style="font-size:11pt;"><?php echo $nti['lessionment_2'];?></td>
   
  <tr>

    <td align="left" class="style3" style="font-size:11pt;">ด้านการพัฒนาผู้เรียน</td>
    <td align="left" class="style3" style="font-size:11pt;"><?php echo $nti['lessionment_3'];?></td>
   
    </tr>
      <tr>

    <td align="left" class="style3" style="font-size:11pt;">ด้านการพัฒนาตนเอง</td>
    <td align="left" class="style3" style="font-size:11pt;"><?php echo $nti['lessionment_4'];?></td>
   
    </tr>
      <tr>

    <td align="left" class="style3" style="font-size:11pt;">กิจกรรมที่ได้รับมอบหมาย</td>
    <td align="left" class="style3" style="font-size:11pt;"><?php echo $nti['lessionment_5'];?></td>
   
    </tr>
   
      <?php }?> 
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
<table width="220" border="0" align="left" cellpadding="0" cellspacing="0">

  <tr>
 
    <td  align="left"><span style="font-size:10pt;font-weight: bold;">ข้อคิดเห็นข้อเสนอแนะเพิ่มเติม</span></td>
  </tr>
  
</table>
<table width="220" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
 
    <td  align="left"><span style="font-size:10pt;">................................................................................................................................................................................................................................................................</span></td>
  </tr>
  <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
 
    <td  align="left"><span style="font-size:10pt;">................................................................................................................................................................................................................................................................</span></td>
  </tr>
  <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
 
    <td  align="left"><span style="font-size:10pt;">................................................................................................................................................................................................................................................................</span></td>
  </tr>
  <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
 
    <td  align="left"><span style="font-size:10pt;">................................................................................................................................................................................................................................................................</span></td>
  </tr>
  <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
 
    <td  align="left"><span style="font-size:10pt;">................................................................................................................................................................................................................................................................</span></td>
  </tr>
  
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
 
    <td width="200" align="right"><span class="style3" style="font-size:10pt;">ลงชื่อ................................................................อาจารย์พี่เลี้ยง</span></td>
  </tr>

  
</table>
<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="320" border="0" align="right" cellpadding="0" cellspacing="0">

  <tr>
 
    <td  align="left"><span style="font-size:10pt;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</span></td>
  </tr>
  
</table>
<table width="200" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="290" border="0" align="right" cellpadding="0" cellspacing="0">

  <tr>
 
    <td  align="left"><span style="font-size:10pt;">.............../........................../............</span></td>
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

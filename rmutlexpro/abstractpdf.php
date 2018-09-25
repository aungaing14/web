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
 
   <?php //ดึงข้อมูล ปี และ ไตรมาส จากค่า POST
$lessionsql = " SELECT * 
FROM abstract where abstract_id = ".$_GET['student_id']."";
$result=mysql_query($lessionsql);
while ($r=mysql_fetch_array($result)) 
{ 

    $abstract_name =$r['abstract_name'];
 
 
?>
    <td width="200" align="left"><span class="style" style="font-weight: bold;font-size:12pt;">สรุปผลการปฏิบัติประสบการณ์วิชาชีพครู <?php echo $week; ?></span></td>
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
    <td class="style2" width="750" height="23" align="left" style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $abstract_name;?></td>
    
    </tr>
   
     
   
     
</table>
<table bordercolor="#666666" width="750" height="78" border="0"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >
    <td class="style2" width="750" height="23" align="left" style="font-size:11pt;">----------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    
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
 
    <td width="200" align="right"><span class="style3" style="font-size:11pt;">ลงชื่อ................................................................ผู้ปฏิบัติประสบการณ์วิชาชีพครู</span></td>
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
<table width="420" border="0" align="right" cellpadding="0" cellspacing="0">

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
<table width="390" border="0" align="right" cellpadding="0" cellspacing="0">

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

<?php
include("connect.php");
require_once('mpdf/mpdf.php');
ob_start(); 

$admin_id=$_GET['admin_id'];

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

    <td width="200" align="center"><span class="style" style="font-weight: bold;font-size:11pt;">การปฏิบัติประสบการณวิชาชีพครู</span></td>
     <tr>

    <td width="200" align="center"><span class="style" style="font-weight: bold;font-size:11pt;"><br>(รายชื่ออาจารย์นิเทศก์)</span></td>

  </tr>

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



<table bordercolor="#666666" width="750" height="78" border="1"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >

    <td class="style2" width="50" align="center" style="font-weight: bold;font-size:10pt;">ลำดับ</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">ชื่อ - นามสกุล</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">username</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">password</td>

       
    </tr>
<?php 
$i='0';
$strSQLb = "SELECT * FROM admin WHERE admin_id='$admin_id'";
$objQueryb = mysql_query($strSQLb);
$ntib=mysql_fetch_array($objQueryb);
$id1=$ntib['branch_id'];


  $strSQL = "SELECT * FROM teacher WHERE branch_id='10014'  ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
$i=$i+'1';


    ?>  
 <tr align="center" >
       
    <td class="style2" width="50" align="center" style="font-size:10pt;"><?php echo $i;?></td>
    <td class="style2" width="200" align="left" style="font-size:10pt;"><?php echo $nti['teacher_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['teacher_lname'];?></td>
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti['teacher_id'];?></td>
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti['teacher_password'];?></td>
   
      
    </tr>   
<?php  }  ?> 

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

<?php
include("connect.php");
require_once('mpdf/mpdf.php');
ob_start(); 
$admin_id=addslashes($_GET['admin_id']);
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

    <td width="200" align="center"><span class="style" style="font-weight: bold;font-size:11pt;"><br>(ผู้ดูแลระบบ)</span></td>

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

<table bordercolor="#666666" width="750" height="78" border="0"  align="center" cellpadding="8" cellspacing="0"  class="style2">
  <tr align="center" >
   <?php 
  $strSQL = "SELECT * FROM admin WHERE admin_id = '$admin_id' ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?> 
    <td class="style2" width="50" align="left" style="font-weight: bold;font-size:10pt;">รหัสผู้ใช้</td>
    <td class="style2" width="300" align="left" style="font-size:10pt;"><?php echo $nti['admin_id'];?></td>
    <td class="style2" width="300" align="center" style="font-weight: bold;font-size:10pt;"></td>
       <?php }?> 
    </tr>
   
     <?php 
  $strSQL = "SELECT * FROM admin WHERE admin_id = ".$_GET['admin_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?>    

    
    
  <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">ชื่ออาจารย์นิเทศก์</td>
    <td align="left" class="style3" style="font-size:10pt;"><?php $titleid=$nti['title_id'];  
  $strSQL = "SELECT a.title_id,a.admin_name,a.admin_lname,b.title_id,b.title_name FROM admin a INNER JOIN title b ON a.title_id=b.title_id WHERE admin_id = ".$_GET['admin_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?><?php echo $nti['title_name'];?><?php echo $nti['admin_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['admin_lname'];?></td>
    <td align="left" class="style3" style="font-size:10pt;"></td>
   
    
<?php }?>

    </tr>
  
      <?php }?> 

 <?php 
  $strSQL = "SELECT a.branch_id,a.admin_id,a.course_id,a.faculty_id,b.branch_id,b.branch_name,c.course_id,c.course_name,d.faculty_id,d.faculty_name FROM admin a INNER JOIN branch b ON a.branch_id=b.branch_id INNER JOIN course c ON a.course_id=c.course_id INNER JOIN faculty d ON a.faculty_id=d.faculty_id WHERE admin_id = ".$_GET['admin_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   $nti=mysql_fetch_array($objQuery)  
    ?>   
    <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">หลักสูตร</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['branch_name'];?></td>
    <td align="left"  class="style3" style="font-size:10pt;"></td>

    </tr>
     <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">หลักสูตร</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['course_name'];?></td>
    <td align="left" class="style3" style="font-size:10pt;"></td>

    </tr>  
 
     <tr>
    <td align="left" class="style3" height="23" style="font-weight: bold;font-size:10pt;">คณะ</td>
    <td align="left"  class="style3" style="font-size:10pt;"><?php echo $nti['faculty_name'];?></td>

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

    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">username</td>
    <td class="style2" width="200" align="center" style="font-weight: bold;font-size:10pt;">password</td>

       
    </tr>
<?php 

  $strSQL = "SELECT * FROM admin WHERE admin_id = ".$_GET['admin_id']." ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  



    ?>  
 <tr align="center" >
       
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti['admin_id'];?></td>
    <td class="style2" width="200" align="center" style="font-size:10pt;"><?php echo $nti['admin_password'];?></td>
   
      
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

 

<!DOCTYPE html>
<html lang="en"><head> 
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>ครุศาสตร์อุตสาหกรรมบัณฑิตวิศวกรรมศาสตร์</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap1.min.css" rel="stylesheet">
    <link id="bootstrap-style" href="css/bootstrap.css" rel="stylesheet"> 
    
    <link href="css/halflings.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
     <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modal.css" type="text/css">
    
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->
    
        
        
        
</head>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 16px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 25px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 5px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 16px;}
}
</style>
<body>


<?php
session_start();
include("connect.php");
//checklogin
if ($_SESSION['ses_id']=='') {
    echo "<meta http-equiv='refresh' content='1;URL=logintrainer.php'>";
}elseif ($_SESSION['indentity_id'] != 4) {
    echo "<meta http-equiv='refresh' content='1;URL=logouttrainer.php'>";
}else{
    

?>



<div id="main">
<nav class="navbar navbar-default">
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    
                    <a class="brand"><span style="font-size:30px"><span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>&nbsp;ครุศาสตร์อุตสาหกรรมบัณฑิตวิศวกรรมศาสตร์</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" href="#">
                                <i class="fa fa-user"></i> <?php
                                                            include("connect.php");
                                                            $strSQL2 = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery2 = mysql_query($strSQL2) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti2['trainer_name'];?>'><?php echo $nti2['trainer_name'];?>

                                                            <?php }?>
                                                            </label>

                                                            <?php
                                                            $strSQL3 = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery3 = mysql_query($strSQL3) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti3=mysql_fetch_array($objQuery3)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti3['trainer_lname'];?>'><?php echo $nti3['trainer_lname'];?>

                                                            <?php }?>
                                                            </label>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div><!-- /.container-fluid -->
        </div>
    </nav>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="trainer.php"><i class=" icon-home"></i><span class="hidden-tablet"> หน้าหลัก</span></a>
    <a href="trainereva.php"><i class=" icon-user"></i><span class="hidden-tablet"> ประเมิน</span></a>
    <a href="trainerstd.php"><i class=" icon-pencil"></i><span class="hidden-tablet"> ข้อมูลนักศึกษา</span></a>

    <a href="trainerfile.php"><i class="icon-paper-clip"></i><span class="hidden-tablet"> เอกสารที่เกี่ยวข้อง</span></a>
    <a href="logouttrainer.php"><i class="icon-signout"></i><span class="hidden-tablet"> ออกจากระบบ</span></a>
    
</div>


<div id="content" class="span10">
                


<?php include("connect.php");
$eva='';
if (isset($_GET['eva'])) 
    $eva=$_GET['eva'];



if ($eva=='evaselect') {
$lession=$_GET['lession_id'];
$row=mysql_query("SELECT * FROM lessionlab WHERE lession_id=$lession");
$st_row1=mysql_fetch_array($row);

?>  

             
              <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> ประเมิน</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("trainereva.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                        </div>
                  <div class="form-group">
 
 
<!-- Tab panes -->
<form class="form-horizontal" action="evaaddstdtrainerlab.php?studentid=<?php echo $st_row1['student_id'];?>&trainerid=<?php echo $_SESSION['trainer_id'];?>&lessionid=<?php echo $st_row1['lession_id'];?>" id="form_submit" method="post">
<div class="table-responsive">
                  
                  
                 <div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row1['student_id'];?>'><?php echo $st_row1['student_id'];?>

                               
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">ชื่อ : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php $std=$st_row1['student_id'];?>'><?php $strSQL = "SELECT a.student_id,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE a.student_id='$std' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['title_name'];?>
                                                            <?php }?>
                                </label> 

                                <label style="font-weight: normal" class="control-label" value='<?php $stdname=$st_row1['student_id'];?>'><?php $strSQL1 = "SELECT * FROM student  WHERE student_id='$stdname' ";
                                                            $objQuery1 = mysql_query($strSQL1);?><?php
                                                                while ($nti1=mysql_fetch_array($objQuery1)){  
                                                            ?><?php echo $nti1['student_name'];?>
                                                            <?php }?>

                               
                                </label> 

                                <label style="font-weight: normal" class="control-label"  value='<?php $stdlname=$st_row1['student_id'];?>'><?php $strSQL2 = "SELECT * FROM student  WHERE student_id='$stdlname' ";
                                                            $objQuery2 = mysql_query($strSQL2);?><?php
                                                                while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?><?php echo $nti2['student_lname'];?>
                                                            <?php }?>

                               
                                </label> 
                                   
                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3">วิชา : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row1['subject_name'];?>'><?php echo $st_row1['subject_name'];?>
                                                            
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-1">เรื่อง : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row1['lission_name'];?>'><?php echo $st_row1['lession_name'];?>
                                                            
                                    </label> 

                                
                                   
                                    
                                </div>


                            </div>

                             <div class="form-group">
                                <label class="control-label col-sm-3">วันที่ประเมิน : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" name="date" required="required">    
                                </div>

                                
                            </div>

<br>

                  <div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
<thead>
                          <tr>
                            
                        
                        <th colspan="2"  rowspan="2" style="width:42%;text-align:center;vertical-align:middle">รายการประเมิน</th> 
                        <th rowspan="2" style="width:8%;text-align:center;vertical-align:middle">ตัวคูณ</th>
                        <th colspan="5" style="width:25%;text-align:center">ระดับการประเมิน</th>
                        <th rowspan="2" style="width:25%;text-align:center;vertical-align:middle">ความคิดเห็น</th>
                        
                          </tr>
                      
                          <tr>
                            
                        
                       
                       
                        <th style="width:5%;text-align:center;vertical-align:middle">ดีมาก</th>
                        <th style="width:5%;text-align:center;vertical-align:middle">ดี</th>
                        <th style="width:5%;text-align:center;vertical-align:middle">ปานกลาง</th>
                        <th style="width:5%;text-align:center;vertical-align:middle">น้อย</th>
                        <th style="width:5%;text-align:center;vertical-align:middle">ควรปรับปรุง</th>
                        
                        
                        
                          </tr>
                        </thead>

<?php

$strGroup = "SELECT * FROM questionlab_frm  order by qfrm_id";
$objGroup = mysql_query($strGroup);
$totalGroup = mysql_num_rows($objGroup); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup = mysql_fetch_array($objGroup))
{
$array = array($rsGroup["qfrm_id"]);
    $i = 0; 
      foreach( $array as $value ) {
?>
                          <tr>


<td style="font-weight:bold;text-align:left" colspan="10" style="width:100%;"><?php echo $value;?>. <?php $strSQL = "SELECT * FROM questionlab_frm WHERE qfrm_id=$value "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?> <?php echo $nti['qfrm_name'];?> <?php }?>  </td>

  


                          </tr>



<?php
    $sum=$value;
    $strGroup1 = "SELECT * FROM subquestionlab WHERE qfrm_id=$sum";
$objGroup1 = mysql_query($strGroup1);
$totalGroup1 = mysql_num_rows($objGroup1); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup1 = mysql_fetch_array($objGroup1))
{
$array1 = array($rsGroup1["subquestion_id"]);
    $i1 = 0;
      foreach( $array1 as $value1 ) {
?>

 <tr required="required">
<?php $strSQL = "SELECT * FROM subquestionlab WHERE subquestion_id=$value1 "; 
    $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    $id=$nti['subquestion_id'];
    
    ?>

<td style="text-align:center"><?php echo $value1;?><input type=hidden name="question_id[]" value="<?php echo $id;?>"></td>
<td style="text-align:left"><?php echo $nti['subquestion_name'];?></td>
<td style="text-align:center"><?php echo $nti['subquestion_score'];?></td>
<td ><input required type="radio" name="nall<?php echo $id;?>" value="5" /></td>
<td ><input type="radio" name="nall<?php echo $id;?>" value="4" /></td>
<td> <input type="radio" name="nall<?php echo $id;?>" value="3" /></td>
<td ><input type="radio" name="nall<?php echo $id;?>" value="2" /></td>
<td ><input type="radio" name="nall<?php echo $id;?>" value="1" /></td>
<td style="text-align:center"><input style="height: 21px;" class="form-control" name="ment<?php echo $id;?>"></td>

                          </tr>
<?php }?>
<?php
$i1++;
?>

<?php }?><?php }?> 
<?php
$i++;
?>


                        </thead>
<?php }?><?php }?>                      
                      </table >
                      <div align="center">
  <button type="submit" class="btn btn-primary"><i class="icon-save"></i> ประเมิน</button>
                   </div>
                    </div>
</form>
    

   

  
                    </div>




                    
                  </div>
                </div>
              </div>
            </div>
          </div>
   
     
                        </div>
                  </div>



<?php }?> 









<?php include("connect.php");
$eva='';
if (isset($_GET['eva'])) 
    $eva=$_GET['eva'];



if ($eva=='evanmnt') {
$lessionment=$_GET['lession_id'];
$row2=mysql_query("SELECT a.lessionment_id,a.lessionment_date,b.lession_id,b.student_id,b.subject_name,b.lession_name FROM lessionmentlab a INNER JOIN lessionlab b ON a.lessionment_id=b.lession_id  WHERE a.lessionment_id=$lessionment");
$st_row2=mysql_fetch_array($row2);

?>  

             
              <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> ประเมิน</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                  <div class="form-group">


<!-- Tab panes -->

<div class="table-responsive">


<div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['student_id'];?>'><?php echo $st_row2['student_id'];?>

                               
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">ชื่อ : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php $std=$st_row2['student_id'];?>'><?php $strSQL = "SELECT a.student_id,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE a.student_id='$std' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['title_name'];?>
                                                            <?php }?>
                                </label> 

                                <label style="font-weight: normal" class="control-label" value='<?php $stdname=$st_row2['student_id'];?>'><?php $strSQL1 = "SELECT * FROM student  WHERE student_id='$stdname' ";
                                                            $objQuery1 = mysql_query($strSQL1);?><?php
                                                                while ($nti1=mysql_fetch_array($objQuery1)){  
                                                            ?><?php echo $nti1['student_name'];?>
                                                            <?php }?>

                               
                                </label> 

                                <label style="font-weight: normal" class="control-label"  value='<?php $stdlname=$st_row2['student_id'];?>'><?php $strSQL2 = "SELECT * FROM student  WHERE student_id='$stdlname' ";
                                                            $objQuery2 = mysql_query($strSQL2);?><?php
                                                                while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?><?php echo $nti2['student_lname'];?>
                                                            <?php }?>

                               
                                </label> 
                                   
                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3">วิชา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['subject_name'];?>'><?php echo $st_row2['subject_name'];?>
                                                            
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">เรื่อง : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['lission_name'];?>'><?php echo $st_row2['lession_name'];?>
                                                            
                                    </label> 

                                
                                   
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">วัน/เดือน/ปี : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['lessionment_date'];?>'><?php echo $st_row2['lessionment_date'];?>
                                                            
                                    </label> 
                                   
                                    
                                </div>

                                
                            </div>
                  
                  
                 

<br>

                  <div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
<thead>
                          <tr>
                            
                        
                        <th style="width:20%;text-align:center">วัน/เดือน/ปี</th> 
                        <th  style="width:40%;text-align:center">ชื่อกิจกรรม</th>
                        <th style="width:40%;text-align:center">รายละเอียด</th>
                        
                        
                        
                        
                          </tr>
                        </thead>


 
 <thead>



<?php 
  $strSQL = "SELECT * FROM lessionmentlab WHERE lessionment_id=$lessionment ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?>    

    
    
  <tr>
    <td  rowspan="5" valign="top" align="left "><?php echo $nti['lessionment_date'];?></td>
    <td style="text-align:left">ด้านการจัดการเรียนการสอน</td>
    <td style="text-align:left"><?php echo $nti['lessionment_1'];?></td>
   
    


    </tr>
  

    <tr>

    <td style="text-align:left">ด้านการประเมินปรับปรุง และพัฒนาการจัดการเรียนการสอน</td>
    <td style="text-align:left" ><?php echo $nti['lessionment_2'];?></td>
   
  <tr>

    <td style="text-align:left">ด้านการพัฒนาผู้เรียน</td>
    <td style="text-align:left"><?php echo $nti['lessionment_3'];?></td>
   
    </tr>
      <tr>

    <td style="text-align:left">ด้านการพัฒนาตนเอง</td>
    <td style="text-align:left"><?php echo $nti['lessionment_4'];?></td>
   
    </tr>
      <tr>

    <td style="text-align:left">กิจกรรมที่ได้รับมอบหมาย</td>
    <td style="text-align:left"><?php echo $nti['lessionment_5'];?></td>
   
    </tr>
   
      <?php }?>

                        </thead>
                
                      </table>
 
                    </div>

    

   

  
                    </div>




                    
                  </div>
                </div>
              </div>
            </div>
          </div>
   
     
                        </div>
                  </div>



<?php }?> 





<?php include("connect.php");
$eva='';
if (isset($_GET['eva'])) 
    $eva=$_GET['eva'];



if ($eva=='teacherevament') {
$student_id=$_GET['student_id'];
$row2=mysql_query("SELECT * FROM lessionlab WHERE student_id=$student_id");
$st_row2=mysql_fetch_array($row2);

?>  

             
              <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> บันทึกการตรวจประเมินการปฏิบัติประสบการณวิชาชีพครู</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                  <div class="form-group">


<!-- Tab panes -->
<form class="form-horizontal" action="teacherevament.php?studentid=<?php echo $st_row2['student_id'];?>&teacherid=<?php echo $_SESSION['teacher_id'];?>" id="form_submit" method="post">
<div class="table-responsive">


<div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['student_id'];?>'><?php echo $st_row2['student_id'];?>

                               
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">ชื่อ : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php $std=$st_row2['student_id'];?>'><?php $strSQL = "SELECT a.student_id,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE a.student_id='$std' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['title_name'];?>
                                                            <?php }?>
                                </label> 

                                <label style="font-weight: normal" class="control-label" value='<?php $stdname=$st_row2['student_id'];?>'><?php $strSQL1 = "SELECT * FROM student  WHERE student_id='$stdname' ";
                                                            $objQuery1 = mysql_query($strSQL1);?><?php
                                                                while ($nti1=mysql_fetch_array($objQuery1)){  
                                                            ?><?php echo $nti1['student_name'];?>
                                                            <?php }?>

                               
                                </label> 

                                <label style="font-weight: normal" class="control-label"  value='<?php $stdlname=$st_row2['student_id'];?>'><?php $strSQL2 = "SELECT * FROM student  WHERE student_id='$stdlname' ";
                                                            $objQuery2 = mysql_query($strSQL2);?><?php
                                                                while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?><?php echo $nti2['student_lname'];?>
                                                            <?php }?>

                               
                                </label> 
                                   
                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3">วิชา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row2['subject_name'];?>'><?php echo $st_row2['subject_name'];?>
                                                            
                                    </label> 
                                   
                                    
                                </div>

                                
                            </div>
                            

                 
                    <div align="right">
  <button type="submit" class="btn btn-primary"><i class="icon-save"></i> เพิ่ม</button>
                   </div>
                 

<br>

                  <div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
<thead>
                          <tr>
                            
                        
                        <th style="width:10%;text-align:center">ครั้งที่</th> 
                        <th  style="width:20%;text-align:center">วันที่ประเมิน</th>
                        <th style="width:30%;text-align:center">เรื่อง</th>
                        <th style="width:10%;text-align:center">ดู</th>
                        <th style="width:10%;text-align:center">แกไข</th>
                        <th style="width:10%;text-align:center">ลบ</th>
                        <th style="width:10%;text-align:center">พิมพ์</th>
                        
                        
                        
                          </tr>
                        </thead>


 
 <thead>



<?php 
$i='0';
  $strSQL = "SELECT a.teacherment_id,a.teacherment_date,b.lession_id,b.lession_name FROM teachermentlab a INNER JOIN lessionlab b ON a.teacherment_id=b.lession_id WHERE teacherment_student=$student_id ";
    $objQuery = mysql_query($strSQL);?>
  <?php
   while ($nti=mysql_fetch_array($objQuery)){  
    ?>    

    
    
  <tr>
    <td style="text-align:center"><?php echo $i=$i+'1';?></td>
    <td style="text-align:center"><?php echo $nti['teacherment_date'];?></td>
    <td style="text-align:center"><?php echo $nti['lession_name'];?></td>
    <td style="text-align:center"><a href='teacherevamentshow.php?teacherment_id=<?php echo $nti['teacherment_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แสดง"><i class=" icon-search" style="color:#00ccff"></i></a></td>
    <td style="text-align:center"><a href='teacherevamentedit.php?teacherment_id=<?php echo $nti['teacherment_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class=" icon-edit" style="color:#ffcc00"></i></a></td>
    <td style="text-align:center"><a href='teacherevamentdelete.php?teacherment_id=<?php echo $nti['teacherment_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>
    <td style="text-align:center"><a href='teacherevamentpdf.php?lession_id=<?php echo $nti['teacherment_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i class="icon-print" style="color:#00ccff"></i></a></td>
   
    


    
   
    </tr>
   
      <?php }?>

                        </thead>
                
                      </table>
 
                    </div>

 </from>   

   

  
                    </div>




                    
                  </div>
                </div>
              </div>
            </div>
          </div>
   
     
                        </div>
                  </div>



<?php }?> 





              
        
 
              
              
            </div><!--/fluid-row-->
        </div>  
    </div>
</div>

<footer>
            <p>
                <span class="icon-home" style="text-align:left;float: right"> ครุศาสตร์อุตสาหกรรมบัฒฑิต</a></span>
            </p>
        </footer>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- start: JavaScript-->

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="js/jquery.ui.touch-punch.js"></script>
    
        <script src="js/modernizr.js"></script>
    
        <script src="js/bootstrap.min.js"></script>
    
        <script src="js/jquery.cookie.js"></script>
    
        <script src='js/fullcalendar.min.js'></script>
    
        <script src='js/jquery.dataTables.min.js'></script>

        <script src="js/excanvas.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.flot.stack.js"></script>
        <script src="js/jquery.flot.resize.min.js"></script>
    
        <script src="js/jquery.chosen.min.js"></script>
    
        <script src="js/jquery.uniform.min.js"></script>
        
        <script src="js/jquery.cleditor.min.js"></script>
    
        <script src="js/jquery.noty.js"></script>
    
        <script src="js/jquery.elfinder.min.js"></script>
    
        <script src="js/jquery.raty.min.js"></script>
    
        <script src="js/jquery.iphone.toggle.js"></script>
    
        <script src="js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="js/jquery.gritter.min.js"></script>
    
        <script src="js/jquery.imagesloaded.js"></script>
    
        <script src="js/jquery.masonry.min.js"></script>
    
        <script src="js/jquery.knob.modified.js"></script>
    
        <script src="js/jquery.sparkline.min.js"></script>
    
        <script src="js/counter.js"></script>
    
        <script src="js/retina.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/vendor.js"></script>
        <script> 
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
     
</body>
<?php
}
?>
</html>
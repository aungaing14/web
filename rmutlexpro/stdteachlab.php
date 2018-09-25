 

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
    echo "<meta http-equiv='refresh' content='1;URL=loginstd.php'>";
}elseif ($_SESSION['indentity_id']!=3) {
    echo "<meta http-equiv='refresh' content='1;URL=logoutstd.php'>";
}elseif($_SESSION['active']!=1){
    echo "<meta http-equiv='refresh' content='1;URL=waitregis.php'>";
}else{

$strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$nti=mysql_fetch_array($objQuery);

$slterm=$nti['term_id'];
   
?>

<div id="pop_background2"></div>
        <div id="pop_box2">
            <div id="pop_content2">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> เพิ่มรายการ (ปฏิบัติ)
                </div>
                <form class="form-horizontal" action="stdteachsublab.php" id="form_submit" method="post" enctype="multipart/form-data">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">สัปดาห์ที่ : </label>
                                <div class="col-sm-1">
                                    <input class="form-control" required="required" name="lession_week">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสวิชา : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" required="required" name="subject_id">
                                </div>
                                <label class="control-label col-sm-2">ชื่อวิชา : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" required="required" name="subject_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">เรื่อง : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" required="required" name="lession_name">
                                </div>
                                <label class="control-label col-sm-2">ชั้นเรียน : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" required="required" name="lession_class">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">เวลาในการสอน : </label>
                                <div class="col-sm-2">
                                    <input class="form-control" required="required" name="lession_time">
                                </div>
                                <label class="control-label col-sm-3">วันที่สอน : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" required="required" name="lession_date">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-3">ไฟล์แนบ : </label>
                                <div class="col-sm-3">
                                    <input type="file" required="required" name="fileupload">
                                </div>
                                
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3"></label>
                                <div class="col-sm-5">
                                    <label>อัพโหลดไฟล์ PDF</label>
                                </div>
                                
                                
                            </div>
                           
                            
                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



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
                                <i class="fa fa-user"></i> 

                                                             <?php
                                                            $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_name'];?>'><?php echo $nti['student_name'];?>

                                                            <?php }?>
                                                            </label>

                                                            <?php
                                                            $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_lname'];?>'><?php echo $nti['student_lname'];?>

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
    <a href="stdpro.php"><i class="icon-user"></i><span class="hidden-tablet"> ข้อมูลนักศึกษา</span></a>
    <a href="stdteach.php"><i class="icon-pencil"></i><span class="hidden-tablet"> กำหนดการสอน</span></a>
    <a href="stdresult.php"><i class="icon-list"></i><span class="hidden-tablet"> ผลการประเมิน</span></a>
    <a href="stdabstract.php"><i class="icon-list-ul"></i><span class="hidden-tablet"> สรุปผลการปฏิบัติ</span></a>
    <a href="stdassessment.php"><i class="icon-list-ol"></i><span class="hidden-tablet"> ผลการตรวจประเมิน</span></a>
    <a href="stdregis.php"><i class="icon-book"></i><span class="hidden-tablet"> ลงทะเบียน</span></a>

    <a href="stdfile.php"><i class="icon-paper-clip"></i><span class="hidden-tablet"> เอกสารที่เกี่ยวข้อง</span></a>
    <a href="logoutstd.php"><i class="icon-signout"></i><span class="hidden-tablet"> ออกจากระบบ</span></a>
</div>
            
            <!-- start: Content -->
            <div id="content" class="span10">
               
                
                
               <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-12 panel-body">
                                                <div align="right">
                            
                                   <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("stdteach.php")'><i class="icon-file-alt"></i> แผนการสอน (ภาคทฤษฎี)</button> 
                        <hr>
                        </div>
                        <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="stdaddsubject" style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class="icon-plus"></i> เพิ่มรายการ</button>
                                
                        </div>
                        
                        <br>                   

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">อาจารย์นิเทศก์</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">อาจารย์พี่เลี้ยง</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
 <div class="tab-pane active" id="home" role="tabpanel">
<br>
<div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class="icon-pencil"></i><strong> กำหนดการสอน (ภาคปฏิบัติ)</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:5%;text-align:center"">สัปดาห์ที่</td>
                                        <td style="width:18%;text-align:center"">เรื่อง</td>
                                        <td style="width:18%;text-align:center"">วิชา</td>
                                        <td style="width:10%;text-align:center">เวลาในการสอน (นาที)</td>
                                        <td style="width:7%;text-align:center"">ชั้นเรียน</td>
                                        <td style="width:7%;text-align:center"">วันที่สอน</td>
                                        <td style="width:8%;text-align:center"">แผนการสอน</td>
                                        <td style="width:5%;text-align:center"">คะแนน</td>
                                        
                                        <td style="width:10%;text-align:center"">บันทึกรายสัปดาห์</td>                                  
                                    </tr>
                                    <?php $sum='0';
                                    $i='0';
                        $strSQL = "SELECT * FROM lessionlab WHERE year_id='$slterm' AND student_id ='".$_SESSION['student_id']."' ";
                        $objQuery = mysql_query($strSQL);

                        while ($nti=mysql_fetch_array($objQuery)){ 
                            
                            $save=$nti['lession_id']; 
                            $sum=$sum+$nti['lession_score'];
                            $i=$i+'1';
                      ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $nti['lession_week'];?></td>
                                        <td style="text-align:center"><?php echo $nti['subject_name'];?></td >
                                        <td style="text-align:center"><?php echo $nti['lession_name'];?></td>
                                        <td style="text-align:center"><?php echo $nti['lession_time'];?></td>
                                        <td style="text-align:center"><?php echo $nti['lession_class'];?></td>
                                        <td style="text-align:center"><?php echo $nti['lession_date'];?></td>
                                        <td style="text-align:center"><a href='lessionupdatelab.php?lession_id=<?php echo $nti['lession_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class="icon-edit" style="color:#ffcc00"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="fileupload/<?php echo $nti['lession_file'];?>" data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i style="color:#00ccff" class="icon-print"></a></i></td>
                                        <td style="text-align:center"><?php echo $nti['lession_score'];?></td>
                                        
                                        <td style="text-align:center">
<?php
$strSQLa = "SELECT * FROM lessionmentlab WHERE  lessionment_id ='$save' ";
$save1 = mysql_query($strSQLa);
$save2=mysql_fetch_array($save1);
if (!$save2) {?>
   <a href='lessionaddlab.php?lession_id=<?php echo $nti['lession_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="เพิ่มไฟล์"><i class="icon-plus" style="color:#000"></i></a>
<?php }
else{ ?>

<a href='lessionmenteditlab.php?lession_id=<?php echo $nti['lession_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class="icon-edit" style="color:#ffcc00"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='lessionpdflab.php?lession_id=<?php echo $nti['lession_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i class="icon-print" style="color:#00ccff"></i></a>

<?php }
?>
                                       </td>                                 
                                    </tr>
                                    
                                    <?php }?> 
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="2"><i class="icon-list-alt"></i><strong> ผลการประเมินการสอน</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
<?php 
$a='0';
  $ans='0';
  $strSQL = "SELECT * FROM lessionevalab WHERE term_id='$slterm' AND lessioneva_student ='".$_SESSION['student_id']."' ";
    $objQuery = mysql_query($strSQL);
$row=mysql_num_rows($objQuery); 

  while ($ntia=mysql_fetch_array($objQuery)) {

$score=$ntia['lessioneva_score'];



$a=$a+$score;


  $ans=@($a/$row);
 }
  
 
    ?>                     
       
                                    <tr style="font-weight:bold">
                                        <td style="text-align:center;width:70%;font-weight:bold">ผลคะแนนเฉลี่ยที่ได้</td>
                                        <td style="text-align:center;width:30%"><?php echo $ans; ?></td>                                
                                    </tr> 
                                </tbody>
                            </table>
                        </div>

  </div>
  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
 <div class="tab-pane active" id="home" role="tabpanel">
<br>
 
<?php
 $test=$_SESSION['student_id']+$slterm;


$strSQL9 = "SELECT * FROM lessionevatrlab WHERE lessionevatr_id='$test' ";
$objQuery9 = mysql_query($strSQL9);
$ntiw=mysql_fetch_array($objQuery9);


if ($ntiw) {?>
   
<div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class="icon-pencil"></i><strong> กำหนดการสอน (ภาคปฏิบัติ)</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:10%;text-align:center"">สัปดาห์ที่</td>
                                        <td style="width:20%;text-align:center"">วิชา</td>
                                        <td style="width:10%;text-align:center"">ชั้นเรียน</td>
                                        <td style="width:20%;text-align:center"">คะแนน</td>
                                        
                                                                         
                                    </tr>
                                    <?php $suma='0';
                                    $i1='0';
                        $strSQLa = "SELECT * FROM lessionlab WHERE year_id='$slterm' AND student_id ='".$_SESSION['student_id']."' ";
                        $objQuerya = mysql_query($strSQLa);

                        $ntix=mysql_fetch_array($objQuerya);
                        $lid=$ntix['lession_id'];  

$strSQLb = "SELECT * FROM lessionevatrlab WHERE lessionevatr_student ='".$_SESSION['student_id']."' ";
$objQueryb = mysql_query($strSQLb);

$ntib=mysql_fetch_array($objQueryb); 

$sc=$ntib['lessionevatr_score'];

                            $savea=$ntia['lession_id']; 
                            $suma=$suma+$ntia['lession_score'];
                            $i1=$i1+'1';
                      ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $i1;?></td>
                                        <td style="text-align:center"><?php echo $ntix['subject_name'];?></td >
                                       
                                       
                                        <td style="text-align:center"><?php echo $ntix['lession_class'];?></td>
                                    
                                       
                                        <td style="text-align:center"><?php echo $sc;?></td>
                                        
                                                                      
                                    </tr>
                                    
                          
                                </tbody>
                            </table>
                        </div>

<?php } else { ?>

<div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class="icon-pencil"></i><strong> กำหนดการสอน (ภาคปฏิบัติ)</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:5%;text-align:center"">สัปดาห์ที่</td>
                                        <td style="width:18%;text-align:center"">เรื่อง</td>
                                        <td style="width:18%;text-align:center"">วิชา</td>
                                        <td style="width:10%;text-align:center">เวลาในการสอน (นาที)</td>
                                        <td style="width:10%;text-align:center"">ชั้นเรียน</td>
                                        <td style="width:10%;text-align:center"">วันที่สอน</td>
                                       
                                        <td style="width:15%;text-align:center"">คะแนน</td>
                                        
                                                                         
                                    </tr>
                                    <?php $suma='0';
                                    $i1='0';
                        $strSQLa = "SELECT * FROM lessionlab WHERE year_id='$slterm' AND student_id ='".$_SESSION['student_id']."' ";
                        $objQuerya = mysql_query($strSQLa);

                        while ($ntix=mysql_fetch_array($objQuerya)){ 
                        $lid=$ntix['lession_id'];  

$strSQLb = "SELECT * FROM lessionevatrlab WHERE lessionevatr_id='$lid' ";
$objQueryb = mysql_query($strSQLb);

$ntib=mysql_fetch_array($objQueryb); 

$sc=$ntib['lessionevatr_score'];

                            $savea=$ntia['lession_id']; 
                            $suma=$suma+$ntia['lession_score'];
                            $i1=$i1+'1';
                      ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $ntix['lession_week'];?></td>
                                        <td style="text-align:center"><?php echo $ntix['subject_name'];?></td >
                                        <td style="text-align:center"><?php echo $ntix['lession_name'];?></td>
                                        <td style="text-align:center"><?php echo $ntix['lession_time'];?></td>
                                        <td style="text-align:center"><?php echo $ntix['lession_class'];?></td>
                                        <td style="text-align:center"><?php echo $ntix['lession_date'];?></td>
                                       
                                        <td style="text-align:center"><?php echo $sc;?></td>
                                        
                                                                      
                                    </tr>
                                    
                                    <?php }?> 
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="2"><i class="icon-list-alt"></i><strong> ผลการประเมินการสอน</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
<?php 
$an='0';
  $ansn='0';

  $strSQLn = "SELECT * FROM lessionevatrlab WHERE term_id='$slterm' AND lessionevatr_student ='".$_SESSION['student_id']."' ";
    $objQueryn = mysql_query($strSQLn);
$rown=mysql_num_rows($objQueryn); 


  while ($ntin=mysql_fetch_array($objQueryn)) {

$scoren=$ntin['lessionevatr_score'];



$an=$an+$scoren;


  $ansn=@($an/$rown);
 }
  
 
    ?>                     
       
                                    <tr style="font-weight:bold">
                                        <td style="text-align:center;width:70%;font-weight:bold">ผลคะแนนเฉลี่ยที่ได้</td>
                                        <td style="text-align:center;width:30%"><?php echo $ansn; ?></td>                                
                                    </tr> 
                                </tbody>
                            </table>
                        </div>

<?php } ?>



  </div>
  </div>

</div>

                        
                 
                        
                        
                        
                    </div>
                    <hr>
                </div>
                

            </div>
        </div>
    </div>
        </div>
        
    
    
        <div class="clearfix"></div>
        
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

        <script>
        $(document).ready(function() {
            $('#stdaddsubject').click(function(){
                $('#pop_background2').fadeIn();
                $('#pop_box2').fadeIn();
                $('#pop_content2').fadeIn();
                return false;
            }); 
            
            $('#close_modal').click(function(){
                $('#pop_background2').fadeOut();
                $('#pop_box2').fadeOut();
                $('#pop_content2').fadeOut();
                return false;
            });
            
            
        });
        
            $('#pop_background2').click(function() {
                $('#pop_background2').fadeOut();
                $('#pop_box2').fadeOut();
                $('#pop_content2').fadeOut();
                return false;
            
        });
        
    
    </script>
        
        
        
       
    <!-- end: JavaScript-->
    

    
</body>
</html>


<?php
}
?>  

    




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
                
                

  <?php include("connect.php");
$stdevashow='';
if (isset($_GET['stdevashow'])) 
    $stdevashow=$_GET['stdevashow'];



if ($stdevashow=='show') {
$lessionevatr_id=$_GET['lessionevatr_id'];

 $strSQL1 = "SELECT * FROM lessionevatr WHERE lessionevatr_id ='$lessionevatr_id' ";
    $objQuery1 = mysql_query($strSQL1);
    $nti1=mysql_fetch_array($objQuery1); 
    $student_id=$nti1['lessionevatr_student'];
      $sum=$nti1['lessionevatr_score']; 



  

    $row=mysql_query("SELECT * FROM student WHERE student_id=$student_id");
    $st_row=mysql_fetch_array($row);

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
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("stdresult.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                        </div>
                  <div class="form-group">


<!-- Tab panes -->

<div class="table-responsive">

<div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $student_id;?>'><?php echo $student_id;?>

                               
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">ชื่อ : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['title_id'];?>'><?php $strSQL = "SELECT a.title_id,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE a.student_id='$student_id' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['title_name'];?>
                                                            <?php }?>
                                </label> 

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['student_name'];?>'><?php echo $st_row['student_name'];?>

                               
                                </label> 

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['student_lname'];?>'><?php echo $st_row['student_lname'];?>

                               
                                </label> 
                                   
                                    
                                </div>
                            </div>

<?php
$row1="SELECT * FROM lession WHERE lession_id!=$lessionevatr_id";
$st_row1 = mysql_query($row1);
$nti2=mysql_fetch_array($st_row1);
if ($st_row1) {
$subject_name=$nti2['subject_name']; ?>

<div class="form-group">
                                <label class="control-label col-sm-3">วิชา : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $subject_name;?>'><?php echo $subject_name;?>
                               
                                    </label> 
                                   
                                    
                                </div>
                                
                                </div>


 <?php } else{
$subject_name=$nti2['subject_name'];
$lession_name=$nti2['lession_name']; ?>


<div class="form-group">
                                <label class="control-label col-sm-3">วิชา : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $subject_name;?>'><?php echo $subject_name;?>
                               
                                    </label> 
                                   
                                    
                                </div>
                                <label class="control-label col-sm-1">เรื่อง : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $lession_name;?>'><?php echo $lession_name;?>
                               
                                    </label> 
                                   
                                    
                                </div>
                                </div>

<?php }?>



                                <div class="form-group">
                                <label class="control-label col-sm-3">คะแนน : </label>
                             
                                <div class="col-sm-2">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $sum;?>'><?php echo $sum;?>
                               
                                    </label> 
                                   
                                    
                                </div>
                                
                                </div>

                            

                  
                  
                 

<br>

                  <div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
<thead>
                          <tr>
                            
                        
                        <th colspan="2"  rowspan="2" style="width:42%;text-align:center;vertical-align:middle">รายการประเมิน</th> 
                        <th rowspan="2" style="width:8%;text-align:center;vertical-align:middle">คะแนน</th>
                        <th  style="width:25%;text-align:center">ระดับคะแนน</th>
                        <th rowspan="2" style="width:25%;text-align:center;vertical-align:middle">ความคิดเห็น</th>
                        
                          </tr>
                      
                    
                        </thead>

<?php

$strGroup = "SELECT * FROM question_frm  order by qfrm_id";
$objGroup = mysql_query($strGroup);
$totalGroup = mysql_num_rows($objGroup); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup = mysql_fetch_array($objGroup))
{
$array = array($rsGroup["qfrm_id"]);
    $i = 0; 
      foreach( $array as $value ) {
?>
                          <tr>


<td style="font-weight:bold;text-align:left" colspan="10" style="width:100%;"><?php echo $value;?>. <?php $strSQL = "SELECT * FROM question_frm WHERE qfrm_id=$value "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?> <?php echo $nti['qfrm_name'];?> <?php }?>  </td>

  


                          </tr>



<?php
    $sum=$value;
    $strGroup1 = "SELECT * FROM subquestion WHERE qfrm_id=$sum";
$objGroup1 = mysql_query($strGroup1);
$totalGroup1 = mysql_num_rows($objGroup1); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup1 = mysql_fetch_array($objGroup1))
{
$array1 = array($rsGroup1["subquestion_id"]);
    $i1 = 0;
      foreach( $array1 as $value1 ) {
?>

 <tr required="required">
<?php $strSQL = "SELECT * FROM subquestion WHERE subquestion_id=$value1 "; 
    $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    $id="q".$nti['subquestion_id'];
    $score=$nti['subquestion_score'];

 
$strSQL1 = "SELECT * FROM lessionevatr WHERE lessionevatr_id=$lessionevatr_id ";
$objQuery1 = mysql_query($strSQL1);
while ($nti1=mysql_fetch_array($objQuery1)){ 



$ans=$nti1[$id];
$ans1=$ans*$score;

$strSQL3 = "SELECT * FROM question_ans WHERE ans_id=$ans ";
$objQuery3= mysql_query($strSQL3);
while ($nti3=mysql_fetch_array($objQuery3)){ 



$strSQL4 = "SELECT * FROM lessionevamenttrainer WHERE lessionevamenttrainer_id=$lessionevatr_id ";
$objQuery4= mysql_query($strSQL4);
while ($nti4=mysql_fetch_array($objQuery4)){ 
$ment=$nti4[$id];   
    ?>

<td style="text-align:center"><?php $d=$value1/10; echo $d;?><input type=hidden name="question_id[]" value="<?php echo $id;?>"></td>
<td style="text-align:left"><?php echo $nti['subquestion_name'];?></td>
<td style="text-align:center"><?php echo $ans1; ;?></td>
<td style="text-align:center"><?php  echo $nti3['ans_name'];?></td>

<td style="text-align:center"><?php echo $nti4[$id] ;?></td>

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
<?php }
}}}?><?php }?>                      
                      </table >
                    
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

        
        
        
       
    <!-- end: JavaScript-->
    

    
</body>
</html>


<?php
}
?>  

    




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

$id=$_GET['studentid'];    

$strSQL = "SELECT * FROM student WHERE student_id = '$id' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$nti=mysql_fetch_array($objQuery);

$slterm=$nti['term_id'];
   

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
                <ul class="breadcrumb">
                
                    <li>
                        <i class="icon-home"></i>
                        <a href="trainer.php" >หน้าหลัก</a> 
                        
                    </li>
                    
                </ul>


<?php include("connect.php");
$name='';
if (isset($_GET['name'])) 
    $name=$_GET['name'];



if ($name=='show') {
$id=$_GET['studentid'];
$row=mysql_query("SELECT * FROM student WHERE student_id=$id");
$st_row=mysql_fetch_array($row);

$term=$st_row['term_id'];

?>              
            
              
              <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("trainereva.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                               
                        </div>
                  <div class="form-group">


<!-- Tab panes -->

<div class="table-responsive">
                  
                  
                 <div class="form-group">
                                <label class="control-label col-sm-2">รหัสนักศึกษา : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['student_id'];?>'><?php echo $st_row['student_id'];?>

                               
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">ชื่อ : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['title_id'];?>'><?php $strSQL = "SELECT a.title_id,b.title_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE a.student_id='$id' ";
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

<div class="form-group">
                          
                                <label class="control-label col-sm-2">หลักสูตร : </label>
                             
                                <div class="col-sm-3">
                                
                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['branch_id'];?>'><?php $strSQL = "SELECT a.branch_id,b.branch_id,b.branch_name FROM student a INNER JOIN branch b ON a.branch_id=b.branch_id WHERE a.student_id='$id' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['branch_name'];?>
                                                            <?php }?>
                                    </label> 
                                   
                                    
                                </div>

                                <label class="control-label col-sm-2">สถานศึกษา : </label>
                             
                                <div class="col-sm-3">

                                <label style="font-weight: normal" class="control-label" value='<?php echo $st_row['education_id'];?>'><?php $strSQL = "SELECT a.edu_id,b.education_id,b.education_name FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE a.student_id='$id' ";
                                                            $objQuery = mysql_query($strSQL);?><?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['education_name'];?>
                                                            <?php }?>
                                </label> 

                                
                                   
                                    
                           
                            </div>

                           

</div>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">ประเมิน (ทฤษฎี)</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">ประเมิน (ปฏิบัติ)</a>
  </li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
<hr>
 <table class="table table-bordered" id="ajax_course_table">

                    <thead>
                      <tr>
                        
                        <th style="width:8%;text-align:center">รายวิชาที่</th> 
                       
                        <th style="width:28%;text-align:center">วิชา</th>
                       
                        <th style="width:20%;text-align:center">ชั้นเรียน</th>
                        
                   
                        <th style="width:15%;text-align:center">คะแนน</th>
                        <th style="width:15%;text-align:center">ประเมิน</th>
                        <th style="width:13%;text-align:center">แก้ไข</th>
                
                      </tr>
                    </thead> 
                    <tbody>
                    <?php $strSQL = "SELECT * FROM lession WHERE student_id='$id' AND year_id = '$term' ";
                        $objQuery = mysql_query($strSQL);
                        $nti=mysql_fetch_array($objQuery);
                        $less=$nti['lession_id'];
                        ?>  

                      <tr> 
                        
                        <td class="text-center"><?php echo $nti['lession_week'];?></td>                                              
                 
                        <td class="text-center"><?php echo $nti['subject_name'];?></td>
              
                        <td class="text-center"><?php echo $nti['lession_class'];?></td>          
                       
                        
                        <td class="text-center"><?php 
                            $lessionid=$nti['lession_id'];
                            $strSQL1 = "SELECT * FROM lessionevatr WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
                            $objQuery1 = mysql_query($strSQL1);?><?php
                            $nti1=mysql_fetch_array($objQuery1);
                            echo $nti1['lessionevatr_score'];  
                        ?></td>
                        <td class="text-center">

<?php
$strSQL5 = "SELECT * FROM lessionevatr WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
$objQuery5 = mysql_query($strSQL5) or die(mysql_error());
$nti5=mysql_fetch_array($objQuery5);

if ($nti5) {?>

    <i class=" icon-ok" style="color:#00ff00"></i>
<?php } else{?>

<a href='trainerevayear.php?student=<?php echo $st_row['student_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ประเมิน"><i class=" icon-edit" style="color:#ffcc00"></i></a>

<?php }
?>

                        </td>
                        <td class="text-center">
<?php
$strSQL6 = "SELECT * FROM lessionevatr WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
$objQuery6 = mysql_query($strSQL6) or die(mysql_error());
$nti6=mysql_fetch_array($objQuery6);

if (!$nti6) {?>

    <i class=" icon-minus" style="color:#000"></i>
<?php } else{?>

<a href='trainerevastdedityear.php?eva=evaselect&lession_id=<?php echo $nti6['lessionevatr_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class=" icon-edit" style="color:#ffcc00"></i></a>

<?php }
?>
                        </td>
                      
                        </tr>
                      
                     <?php }?>                                               
                    </tbody>
                  </table>
</div>
  <div class="tab-pane" id="profile" role="tabpanel">
<hr>

 <table class="table table-bordered" id="ajax_course_table">

                    <thead>
                      <tr>
                        
                        <th style="width:8%;text-align:center">รายวิชาที่</th> 
                       
                        <th style="width:28%;text-align:center">วิชา</th>
                       
                        <th style="width:20%;text-align:center">ชั้นเรียน</th>
                        
                   
                        <th style="width:15%;text-align:center">คะแนน</th>
                        <th style="width:15%;text-align:center">ประเมิน</th>
                        <th style="width:13%;text-align:center">แก้ไข</th>
                
                      </tr>
                    </thead> 
                    <tbody>
                    <?php $strSQL = "SELECT * FROM lessionlab WHERE student_id='$id' AND year_id = '$term' ";
                        $objQuery = mysql_query($strSQL);
                        $nti=mysql_fetch_array($objQuery);
                        $less=$nti['lession_id'];
                        ?>  

                      <tr> 
                        
                        <td class="text-center"><?php echo $nti['lession_week'];?></td>                                              
                 
                        <td class="text-center"><?php echo $nti['subject_name'];?></td>
              
                        <td class="text-center"><?php echo $nti['lession_class'];?></td>          
                       
                        
                        <td class="text-center"><?php 
                            $lessionid=$nti['lession_id'];
                            $strSQL1 = "SELECT * FROM lessionevatrlab WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
                            $objQuery1 = mysql_query($strSQL1);?><?php
                            $nti1=mysql_fetch_array($objQuery1);
                            echo $nti1['lessionevatr_score'];  
                        ?></td>
                        <td class="text-center">

<?php
$strSQL5 = "SELECT * FROM lessionevatrlab WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
$objQuery5 = mysql_query($strSQL5) or die(mysql_error());
$nti5=mysql_fetch_array($objQuery5);

if ($nti5) {?>

    <i class=" icon-ok" style="color:#00ff00"></i>
<?php } else{?>

<a href='trainerevayearlab.php?student=<?php echo $st_row['student_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ประเมิน"><i class=" icon-edit" style="color:#ffcc00"></i></a>

<?php }
?>

                        </td>
                        <td class="text-center">
<?php
$strSQL6 = "SELECT * FROM lessionevatrlab WHERE lessionevatr_student = '$id' AND term_id = '$term' AND lessionevatr_id != '$less' ";
$objQuery6 = mysql_query($strSQL6) or die(mysql_error());
$nti6=mysql_fetch_array($objQuery6);

if (!$nti6) {?>

    <i class=" icon-minus" style="color:#000"></i>
<?php } else{?>

<a href='trainerevastdedityearlab.php?eva=evaselect&lession_id=<?php echo $nti6['lessionevatr_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class=" icon-edit" style="color:#ffcc00"></i></a>

<?php }
?>
                        </td>
                      
                        </tr>
                      
                     <?php ?>                                               
                    </tbody>
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
                  </div>










              
        
 
              
              
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
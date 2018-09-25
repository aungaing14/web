

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
<style type="text/css">
div.img-resize img {
    height: 300px;
    width: auto;
}

div.img-resize {
    width: auto;
    height: 300px;
    overflow: hidden;
    text-align: center;
}
</style>
<body>

<?php
session_start();
include("connect.php");
//checklogin
if ($_SESSION['ses_id']=='') {
    echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
}elseif ($_SESSION['indentity_id'] != 1) {
    echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
}else{

$student_id=$_GET['student_id'];


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
                                                            $strSQL2 = "SELECT * FROM admin WHERE admin_id = '".$_SESSION['admin_id']."' ";
                                                            $objQuery2 = mysql_query($strSQL2) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti2['admin_name'];?>'><?php echo $nti2['admin_name'];?>

                                                            <?php }?>
                                                            </label>

                                                            <?php
                                                            $strSQL3 = "SELECT * FROM admin WHERE admin_id = '".$_SESSION['admin_id']."' ";
                                                            $objQuery3 = mysql_query($strSQL3) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti3=mysql_fetch_array($objQuery3)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti3['admin_lname'];?>'><?php echo $nti3['admin_lname'];?>

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
    <a href="admin.php"><i class=" icon-home"></i><span class="hidden-tablet"> หน้าหลัก</span></a>
    <a href="adminuser.php"><i class=" icon-user"></i><span class="hidden-tablet"> ผู้ใช้งาน</span></a>
    <a href="adminstd.php"><i class=" icon-pencil"></i><span class="hidden-tablet"> นักศึกษา</span></a>
    <a href="adminteacher.php"><i class=" icon-group"></i><span class="hidden-tablet"> อาจารย์นิเทศก์</span></a>
    <a href="admintrainer.php"><i class=" icon-user-md"></i><span class="hidden-tablet"> อาจารย์พี่เลี้ยง</span></a>
    <a href="adminedu.php"><i class=" icon-road"></i><span class="hidden-tablet"> สถานศึกษา</span></a>
    
    <a href="cadminevalution.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> แบบประเมิน</span></a>

    <a href="file.php"><i class="icon-paper-clip"></i><span class="hidden-tablet"> เอกสารที่เกี่ยวข้อง</span></a>
    <a href="logout.php"><i class="icon-signout"></i><span class="hidden-tablet"> ออกจากระบบ</span></a>
</div>
            
            <!-- start: Content -->
            <div id="content" class="span10">
                
                
                
                <div class="row">
                 

<div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-file-alt"></i> ข้อมูลนักศึกษา</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("adminteacher.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                        </div>
                  <div class="form-group">


 <div><br></div>
        <div class="form-group">
              <?php
                            $strSQL = "SELECT * FROM images WHERE id_image = '$student_id' ";
                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                            ?>
                            <?php
                            while ($nti=mysql_fetch_array($objQuery)){ 
                            $Picture=$nti['image'];
                        
                            ?>
                                <div  class="img-resize"><img  id="img" class="img-thumbnail" src="img/<?=$Picture;?>" alt="รูปนักศึกษา" >
                                </div>
                             <?php }?>              
        </div>
        <div class="form-group">
            <hr>                      
        </div>
            
            
                       
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                                <?php
                                    

                                    $strSQL = "SELECT * FROM student WHERE student_id='$student_id' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                 <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_id'];?>'><?php echo $nti['student_id'];?>

                                <?php }?>
                                    </label> 
                                    
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชื่อ-สกุล : </label>
                                
                                    <?php
                                        
                                        $strSQL = "SELECT a.student_id,a.student_name,a.student_lname,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id='$student_id' ";
                                        $objQuery = mysql_query($strSQL) or die(mysql_error());
                                    ?>
                                    <div class="col-sm-3">
                                        <?php
                                            while ($nti=mysql_fetch_array($objQuery)){  
                                        ?>
                                         <label style="font-weight: normal" class="control-label" value='<?php echo $nti['title_name'];?>'><?php echo $nti['title_name'];?>

                                    
                                    </label> 
                                    <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_name'];?>'><?php echo $nti['student_name'];?>

                                  
                                    </label> 
                                    <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_lname'];?>'><?php echo $nti['student_lname'];?>

                                    <?php }?>
                                    </label> 
                                        
                                    </div>
                            
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชั้นปี : </label>
                              <?php
                                        
                                        $strSQL = "SELECT a.student_id,b.class_name FROM student a INNER JOIN class b ON a.class_id=b.class_id WHERE student_id='$student_id' ";
                                        $objQuery = mysql_query($strSQL) or die(mysql_error());
                                ?>
                                <div class="col-sm-3">
                                <?php
                                            while ($nti=mysql_fetch_array($objQuery)){  
                                        ?>
                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['class_name'];?>'><?php echo $nti['class_name'];?>

                                <?php }?>
                                    </label> 
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ปีการศึกษา : </label>
                                <?php
                                        
                                        $strSQL = "SELECT a.student_id,b.year_name FROM student a INNER JOIN year b ON a.year_id=b.year_id WHERE student_id='$student_id' ";
                                        $objQuery = mysql_query($strSQL) or die(mysql_error());
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <label style="font-weight: normal" class="control-label" value='<?php echo $nti['year_name'];?>'><?php echo $nti['year_name'];?>

                                <?php }?>
                                    </label> 
                                </div>
                                <label class="control-label col-sm-2">ภาคเรียน : </label>
                                <?php
                                        
                                        $strSQL = "SELECT a.student_id,b.termyear_name FROM student a INNER JOIN termyear b ON a.term_id=b.termyear_id WHERE student_id='$student_id' ";
                                        $objQuery = mysql_query($strSQL) or die(mysql_error());
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                     <label style="font-weight: normal" class="control-label" value='<?php echo $nti['termyear_name'];?>'><?php echo $nti['termyear_name'];?>

                                <?php }?>
                                    </label> 

                                </div>
                                
                            </div>
                            
                            
                           
                            <div class="form-group">
                                <label class="control-label col-sm-3">คณะ : </label>
                                 <?php
                                    $strSQL = "SELECT a.student_id,b.faculty_name FROM student a INNER JOIN faculty b ON a.faculty_id=b.faculty_id WHERE student_id='$student_id' ";
                                    $objQuery = mysql_query($strSQL) or die(mysql_error());
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                     <label style="font-weight: normal" class="control-label" value='<?php echo $nti['faculty_name'];?>'><?php echo $nti['faculty_name'];?>

                                <?php }?>
                                    </label> 
                                </div>
                                <label class="control-label col-sm-2">สาขา : </label>
                                <?php
                                    $strSQL = "SELECT a.student_id,b.course_name FROM student a INNER JOIN course b ON a.course_id=b.course_id WHERE student_id='$student_id' ";
                                    $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                    ?>
                                   <label style="font-weight: normal" class="control-label" value='<?php echo $nti['course_name'];?>'><?php echo $nti['course_name'];?>

                                <?php }?>
                                    </label>     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">หลักสูตร : </label>
                                <?php
                                    $strSQL = "SELECT a.student_id,b.branch_name FROM student a INNER JOIN branch b ON a.branch_id=b.branch_id WHERE student_id='$student_id' ";
                                    $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                ?>
                                <div class="col-sm-5">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                    ?>
                                    <label style="font-weight: normal" class="control-label" value='<?php echo $nti['branch_name'];?>'><?php echo $nti['branch_name'];?>

                                <?php }?>
                                    </label>      
                                </div>
                            </div>
                            
                            
   
  <div class="form-group">
                                <label class="control-label col-sm-3">เบอร์โทรศัพท์ : </label>
                                <?php
                                    $aa=$student_id+'1';
                                    

                                    $strSQL = "SELECT * FROM stdprofile WHERE profile_id='$aa' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['std_tel'];?>'><?php echo $nti['std_tel'];?>

                                <?php }?>
                                    </label> 
                                    
                                
                            </div>
                            </div>


<div class="form-group">
                                <label class="control-label col-sm-3">E-mail : </label>
                                <?php
                                    $aa=$student_id+'1';
                                    

                                    $strSQL = "SELECT * FROM stdprofile WHERE profile_id='$aa' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['std_email'];?>'><?php echo $nti['std_email'];?>

                                <?php }?>
                                    </label> 
                                    
                                
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
    
<?php
}
?>      
    
</body>
</html>



    


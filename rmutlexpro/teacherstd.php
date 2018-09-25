

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
    echo "<meta http-equiv='refresh' content='1;URL=loginteacher.php'>";
}elseif ($_SESSION['indentity_id'] != 2) {
    echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
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
                                                            $strSQL2 = "SELECT * FROM teacher WHERE teacher_id = '".$_SESSION['teacher_id']."' ";
                                                            $objQuery2 = mysql_query($strSQL2) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti2=mysql_fetch_array($objQuery2)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti2['teacher_name'];?>'><?php echo $nti2['teacher_name'];?>

                                                            <?php }?>
                                                            </label>

                                                            <?php
                                                            $strSQL3 = "SELECT * FROM teacher WHERE teacher_id = '".$_SESSION['teacher_id']."' ";
                                                            $objQuery3 = mysql_query($strSQL3) or die(mysql_error());
                                                            
                                                            ?>
                                                            <?php
                                                                    while ($nti3=mysql_fetch_array($objQuery3)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti3['teacher_lname'];?>'><?php echo $nti3['teacher_lname'];?>

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
    <a href="teacher.php"><i class=" icon-home"></i><span class="hidden-tablet"> หน้าหลัก</span></a>
    <a href="teachereva.php"><i class=" icon-user"></i><span class="hidden-tablet"> ประเมิน</span></a>
    <a href="teacherstd.php"><i class=" icon-pencil"></i><span class="hidden-tablet"> ข้อมูลนักศึกษา</span></a>

    <a href="teacherfile.php"><i class="icon-paper-clip"></i><span class="hidden-tablet"> เอกสารที่เกี่ยวข้อง</span></a>
    <a href="logoutteacher.php"><i class="icon-signout"></i><span class="hidden-tablet"> ออกจากระบบ</span></a>
    
</div>


<div id="content" class="span10">
               
                
     			
                
                
<div class="table-responsive">
                  
                  
                 

                  <table class="table table-bordered" id="ajax_course_table">

                    <thead>
                      <tr>
                        
                        <th style="width:15%;text-align:center">รหัสนักศึกษา</th> 
                        <th style="width:15%;text-align:center">ชื่อ</th>
                        <th style="width:15%;text-align:center">นามสกุล</th>
                        <th style="width:22%;text-align:center">หลักสูตร</th>
                        <th style="width:23%;text-align:center">สถานศึกษา</th>
                        <th style="width:10%;text-align:center">ดู</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $strSQL = "SELECT a.student_id,a.student_name,a.student_lname,a.edu_id,a.teacher_id,b.branch_id,b.branch_name,a.term_id,a.year_id,c.class_id,c.class_name,d.education_id,d.education_name FROM student a INNER JOIN branch b ON a.branch_id=b.branch_id INNER JOIN class c ON a.class_id=c.class_id INNER JOIN education d ON a.edu_id=d.education_id WHERE a.term_id!='10' AND a.year_id!='100' AND a.teacher_id='".$_SESSION['teacher_id']."' ";
                        $objQuery = mysql_query($strSQL);?>
                      <?php
                        while ($nti=mysql_fetch_array($objQuery)){  
                      ?>

                      <tr>
                        
                        <td class="text-center"><?php echo $nti['student_id'];?></td>                                              
                        <td class="text-left"><?php echo $nti['student_name'];?></td>
                        <td class="text-left"><?php echo $nti['student_lname'];?></td>
                        <td class="text-center"><?php echo $nti['branch_name'];?></td>          
                        <td class="text-center"><?php echo $nti['education_name'];?></td>
                        <td class="text-center"><a href='teacherstdshow.php?student_id=<?php echo $nti['student_id'];?>&year_id=<?php echo $nti['year_id'];?>&term_id=<?php echo $nti['term_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ดู"><i class=" icon-search" style="color:#ffcc00"></i></a></td>
                        </tr>
                      <?php }?> 
                                                                    
                    </tbody>
                  </table>
              
  
                    </div>






                
     			

           
           
           
           
  
           
           
           
           
			</div><!--/fluid-row-->
		</div>	
	</div>
    	
    	
	
	
        <div class="clearfix"></div>
        
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
        
        
       
	<!-- end: JavaScript-->
 <?php
}
?>  	
	
	
</body>
</html>




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
    echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
}elseif ($_SESSION['indentity_id'] != 1) {
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
				


<div align="right">
                            
                                 <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("admintrash.php")'><i class="icon-trash"></i> ล้างพื้นที่จัดเก็บ</button>
                                
</div>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#homestd" role="tab">นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</a>
  </li>


  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#actstdpage" role="tab">ยืนยันนักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</a>
  </li>

 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="homestd" role="tabpanel">
    <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                  <div class="form-group">


  <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="ajax_course_table">
                        <thead>
                          <tr>
                            
                        
                        <th style="width:10%;text-align:center">รหัสนักศึกษา</th> 
                        <th style="width:10%;text-align:center">ชื่อ</th>
                        <th style="width:10%;text-align:center">นามสกุล</th>
                        <th style="width:5%;text-align:center">ชั้นปี</th>
                        <th style="width:8%;text-align:center">ปีการศึกษา</th>
                        <th style="width:8%;text-align:center">ภาคเรียน</th>
                        <th style="width:25%;text-align:center">หลักสูตร</th>
                        
                        
                      
                            <th style="width:10%;text-align:center" class="text-center">View</th>
                            <th style="width:14%;text-align:center" class="text-center">ยกเลิกการลงทะเบียน</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $strSQLb = "SELECT * FROM admin WHERE admin_id='".$_SESSION['admin_id']."'";
                        $objQueryb = mysql_query($strSQLb);
                        $ntib=mysql_fetch_array($objQueryb);
                        $id1=$ntib['branch_id'];

                        $strSQL = "SELECT a.student_id,a.student_name,a.student_lname,a.year_id,a.class_id,a.term_id,a.branch_id,a.edu_id,b.class_id,b.class_name,d.termyear_id,d.termyear_name,c.year_id,c.year_name,e.branch_id,e.branch_name FROM student a INNER JOIN class b ON a.class_id=b.class_id INNER JOIN termyear d ON a.term_id=d.termyear_id INNER JOIN year c ON a.year_id=c.year_id INNER JOIN branch e ON a.branch_id=e.branch_id WHERE a.active='1' AND a.year_id!='100' AND a.term_id!='10' AND a.edu_id!='0' AND a.branch_id='$id1' ";
                        $objQuery = mysql_query($strSQL);?>
                      <?php
                        while ($nti=mysql_fetch_array($objQuery)){  
                      ?>

                          <tr>
                            <td class="text-center"><?php echo $nti['student_id'];?></td>
                            <td class="text-left"><?php echo $nti['student_name'];?></td>                                              
                            <td class="text-left"><?php echo $nti['student_lname'];?></td>
                            <td class="text-center"><?php echo $nti['class_name'];?></td>                                                
                            <td class="text-center"><?php echo $nti['year_name'];?></td>
                            <td class="text-center"><?php echo $nti['termyear_name'];?></td>
                            <td class="text-center"><?php echo $nti['branch_name'];?></td>
                            <td class="text-center" ><a href='adminshowstd.php?student_id=<?php echo $nti['student_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แสดง"><i class=" icon-search" style="color:#00ccff"></i></a></td>
                            <td class="text-center" ><a href='adminstddelete.php?student_id=<?php echo $nti['student_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>
                          </tr>
                          <?php }?>
                          
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
  <div class="tab-pane" id="actstdpage" role="tabpanel">
    <div class="tab-pane" id="actstdpro">
    <div class="panel-body">
      <div class="form-horizontal">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class=" icon-list"></i> นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</h3>
          </div>


          <div class="panel-body">                  
            <div class="col-sm-12">
              <div class="form-group">


  <div class="table-responsive">
             
                <form method="post" action="multiupdate.php">
                
                  <table class="table table-bordered" style="margin-bottom:2px; border-color:#fff;" id="ajax_course_table">                                         
                    <tbody style="border-color:#fff;">
                      <tr style="border-color:#fff;">
                        <td style="text-align: right;border-color:#fff;">
                        ***ยืนยันนักศึกษาได้ทีละคน
                          <button type="submit" class="btn btn-primary btn-lg" style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class=" icon-check"></i> ยืนยัน</button></td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-hover table-bordered" id="ajax_course_table">

                    <thead>
                      <tr>
                        <th  style="width:5%;text-align:center">เลือก</th>
                        <th style="width:15%;text-align:center">รหัสนักศึกษา</th> 
                        <th style="width:15%;text-align:center">ชื่อ</th>
                        <th style="width:15%;text-align:center">นามสกุล</th>
                        <th style="width:10%;text-align:center">ชั้นปี</th>
                        <th style="width:20%;text-align:center">หลักสูตร</th>
                        <th style="width:15%;text-align:center">ยกเลิกยืนยันนักศึกษา</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $strSQLa = "SELECT * FROM admin WHERE admin_id='".$_SESSION['admin_id']."'";
                        $objQuerya = mysql_query($strSQLa);
                        $ntia=mysql_fetch_array($objQuerya);
                        $id=$ntia['branch_id'];

                        $strSQL = "SELECT a.branch_id,a.std_id,a.std_name,a.std_lname,a.active,b.branch_id,b.branch_name,a.class_id,c.class_id,c.class_name FROM regis a INNER JOIN branch b ON a.branch_id=b.branch_id INNER JOIN class c ON a.class_id=c.class_id WHERE a.active='0' AND a.branch_id='$id' ";
                        $objQuery = mysql_query($strSQL);?>
                      <?php
                        while ($nti=mysql_fetch_array($objQuery)){  
                      ?>

                      <tr>
                        <td class="text-center"><input type="radio" name='std_id[]' value="<?php echo $nti['std_id']?>"></td>
                        <td class="text-center"><?php echo $nti['std_id'];?></td>                                              
                        <td class="text-left"><?php echo $nti['std_name'];?></td>
                        <td class="text-left"><?php echo $nti['std_lname'];?></td>
                        <td class="text-center"><?php echo $nti['class_name'];?></td>          
                        <td class="text-center"><?php echo $nti['branch_name'];?></td>
                        <td class="text-center"><a href='adminstdregisdelete.php?student_id=<?php echo $nti['std_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>
                        </tr>
                      <?php }?> 
                                                                    
                    </tbody>
                  </table>
                </form>

                  
  
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
	
	
        <div class="clearfix"></div>
     
      
  
  
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
			$('#adduser').click(function(){
				$('#pop_background').fadeIn();
				$('#pop_box').fadeIn();
				$('#pop_content').fadeIn();
				return false;
			}); 
			
			$('#close').click(function(){
				$('#pop_background').fadeOut();
				$('#pop_box').fadeOut();
				$('#pop_content').fadeOut();
				return false;
			});
			
			
        });
		
			$('#pop_background').click(function() {
				$('#pop_background').fadeOut();
				$('#pop_box').fadeOut();
				$('#pop_content').fadeOut();
				return false;
            
        });
		
    
    	</script>
        
        
        
       
	<!-- end: JavaScript-->
	
<?php
}
?>  	
	
</body>
</html>



	






		







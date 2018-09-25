

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

$sqltitle00="SELECT * FROM  teacher ";
$result00=mysql_query($sqltitle00);
$ss=mysql_fetch_array($result00);
$brid=$ss['branch_id'];  


?>

	 <div id="pop_background2"></div>
        <div id="pop_box2">
        	<div id="pop_content2">
            	<div id="pop_header">
					
                            <i class="icon-edit"></i> เพิ่มอาจารย์นิเทศก์
                </div>
                <form class="form-horizontal" action="adminaddteacher.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสผู้ใช้ : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" name="teacher_id" required="required">  
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">คำนำหน้าชื่อ : </label>
                                <div class="col-sm-3">
                                     <?php
                                            include("connect.php");
                                            $sqltitle="SELECT * FROM title ORDER BY title_id ASC ";
                                            $result=mysql_query($sqltitle);
                                           
                                        ?>
                                        <select class="form-control" name="name_title" id="name_title" required="required">
                                            <option value="">เลือกคำนำหน้า</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['title_id'];?>'><?php echo $nti['title_name'];?>
                                            
                                            <?php }?>
                                        </select>   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชื่อ : </label>
                                <div class="col-sm-3">
                                     <input type="text" class="form-control" name="teacher_name" required="required">
                                </div>
                                <label class="control-label col-sm-2">นามสกุล : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="teacher_lname" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="control-label col-sm-3">E-mail : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="teacher_email" required="required">
                                </div>
                                <label class="control-label col-sm-2">Tel. : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="teacher_tel" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">คณะ : </label>
                                <div class="col-sm-3">
                                    <?php
                                            include("connect.php");
                                            $sqltitle4="SELECT * FROM faculty ORDER BY faculty_id ASC ";
                                            $result4=mysql_query($sqltitle4);
                                           
                                        ?>
                                        <select class="form-control" name="faculty" required="required">
                                            <option value="">เลือกคณะ</option>
                                            <?php
                                                 while ($nti4=mysql_fetch_array($result4)){  
                                            ?>
                                            <option value='<?php echo $nti4['faculty_id'];?>'><?php echo $nti4['faculty_name'];?>
                                            
                                            <?php }?>
                                        </select>        
                                </div>
                                <label class="control-label col-sm-2">สาขา : </label>
                                <div class="col-sm-3">
                                    <?php
                                            include("connect.php");
                                            $sqltitle5="SELECT * FROM course ORDER BY course_id ASC ";
                                            $result5=mysql_query($sqltitle5);
                                           
                                        ?>
                                        <select class="form-control" name="course" required="required">
                                            <option value="">เลือกสาขา</option>
                                            <?php
                                                 while ($nti5=mysql_fetch_array($result5)){  
                                            ?>
                                            <option value='<?php echo $nti5['course_id'];?>'><?php echo $nti5['course_name'];?>
                                            
                                            <?php }?>
                                        </select>           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">หลักสูตร : </label>
                                <div class="col-sm-6">
                                    <div id="" class="">
                                        <?php
                                            include("connect.php");
                                            $sqltitle6="SELECT * FROM   branch WHERE branch_id=$brid ";
                                            $result6=mysql_query($sqltitle6);
                                           
                                        ?>
                                        <select class="form-control" name="branch" required="required">
                                            <option value="">เลือกสาขา</option>
                                            <?php
                                                 while ($nti6=mysql_fetch_array($result6)){  
                                            ?>
                                            <option value='<?php echo $nti6['branch_id'];?>'><?php echo $nti6['branch_name'];?>
                                            
                                            <?php }?>
                                        </select>  
                                    </div>       
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
                    <!-- Left / Top Side -->
                    <div class="col-lg-12 panel-body">
                        <div align="right">
                            
                        		<button type="button" class="btn btn-primary btn-lg" id="addteacher" style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class="icon-plus"></i> เพิ่มอาจารย์นิเทศก์</button> 
                                <button type="button" class="btn btn-primary btn-lg" onclick='location.replace("admintchallpdf.php?admin_id=<?php echo $_SESSION['admin_id'];?>")' style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class="icon-print"></i> พิมพ์รายชื่ออาจารย์นิเทศก์</button>   
                        </div>
                        
                        <br>
  <div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class="icon-group"></i><strong> อาจารย์นิเทศก์</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:10%;text-align:center">รหัสผู้ใช้</td>
                                        <td style="width:8%;text-align:center">ชื่อ</td>
                                        <td style="width:8%;text-align:center">นามสกุล</td>
                                        <td style="width:20%;text-align:center">หลักสูตร</td>
                                        <td style="width:10%;text-align:center">สถานะ</td>
                                        <td style="width:15%;text-align:center">กำหนดนักศึกษานิเทศก์</td>
                                        <td style="width:10%;text-align:center">นักศึกษานิเทศก์</td>
                                        <td style="width:9%;text-align:center">ข้อมูลส่วนตัว</td>
                                        <td style="width:5%;text-align:center">พิมพ์</td>
                                        <td style="width:5%;text-align:center">ลบ</td>                                  
                                    </tr>
                                    
                                    <tr>
                                    <?php  
$strSQLb = "SELECT * FROM admin WHERE admin_id='".$_SESSION['admin_id']."'";
                        $objQueryb = mysql_query($strSQLb);
                        $ntib=mysql_fetch_array($objQueryb);
                        $id1=$ntib['branch_id'];


$strSQLa = "SELECT * FROM teacher WHERE branch_id='$id1' ";
$objQuerya = mysql_query($strSQLa) or die ("Error Query [".$strSQLa."]");
$Num_Rows = mysql_num_rows($objQuerya);

$Per_Page = 15;   // Per Page

$Page = isset($_GET['Page']) ? $_GET['Page'] : 1;



$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
    $Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
    $Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
    $Num_Pages =($Num_Rows/$Per_Page)+1;
    $Num_Pages = (int)$Num_Pages;
}



                                      $strSQL = "SELECT a.teacher_id,a.teacher_name,a.teacher_lname,b.indentity_id,b.indentity_name,a.branch_id,c.branch_id,c.branch_name FROM teacher a INNER JOIN indentity b ON a.indentity_id=b.indentity_id INNER JOIN branch c ON a.branch_id=c.branch_id WHERE a.branch_id='$id1'  ORDER BY teacher_id ASC LIMIT $Page_Start , $Per_Page";
                                        $objQuery = mysql_query($strSQL);?>
                                        <?php
                                        while ($nti=mysql_fetch_array($objQuery)){  
                                        ?>
                                    
                                        <td style="width:5%;text-align:center"><?php echo $nti['teacher_id'];?></td>
                                        <td style="width:5%;text-align:left"><?php echo $nti['teacher_name'];?></td>
                                        <td style="width:5%;text-align:left"><?php echo $nti['teacher_lname'];?></td>
                                        <td style="width:5%;text-align:center"><?php echo $nti['branch_name'];?></td>
                                        <td style="width:5%;text-align:center"><?php echo $nti['indentity_name'];?></td>
                                        <td style="text-align:center"><a href='adminteacherstd.php?teacher_id=<?php echo $nti['teacher_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="นิเทศก์"><i class=" icon-edit" style="color:#ffcc00"></i></a></td>
                                        <td style="text-align:center"><a href='adminshowteacherstd.php?teacher_id=<?php echo $nti['teacher_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="เรียกดูนักศึกษา"><i class=" icon-search" style="color:#00ccff"></i></a></td>
                                        <td style="text-align:center"><a href='adminshowteacher.php?teacher_id=<?php echo $nti['teacher_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แสดงข้อมูลส่วนตัว"><i class=" icon-search" style="color:#00ccff"></i></a></td>
                                        <td style="text-align:center"><a href='adminteacherpdf.php?teacher_id=<?php echo $nti['teacher_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i class=" icon-print" style="color:#00ccff"></i></a></td>
                                        <td style="text-align:center"><a href='adminteacherdelete.php?teacher_id=<?php echo $nti['teacher_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>                                    
                                    </tr>
                                    <?php }?> 
                                    
                                                                    
                                    </tr>
                                </tbody>
                            </table>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
    echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
    if($i != $Page)
    {
        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
    }
    else
    {
        echo "<b> $i </b>";
    }
}
if($Page!=$Num_Pages)
{
    echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}

?>
                        </div>

                
                        
                        
                        
                        
                        
                        
                        
                        
                        
        			</div>
                    <hr>
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
        <script>
		$(document).ready(function() {
			$('#addteacher').click(function(){
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
	
<?php
}
?>  	
	
</body>
</html>



	


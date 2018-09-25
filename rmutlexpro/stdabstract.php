
  
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

$stm="SELECT * FROM student WHERE student_id ='".$_SESSION['student_id']."' ";
$tm = mysql_query($stm);
$sh = mysql_fetch_array($tm);
$term=$sh['term_id'];

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
                
                
               <div class="row">
                    <!-- Left / Top Side -->
                    <form class="form-horizontal" action="stdabstractadd.php?student_id=<?php echo $_SESSION['student_id'];?>"  id="form_submit" method="post">
                    <div class="col-lg-12 panel-body">       
                        <div class="table-responsive panel-collapse pull out">
                        <div align="right">
                            
                                <button type="submit" class="btn btn-primary" value="Upload"><i class="icon-save"></i> สรุปผลการประเมิน</button>
                                <hr> 

                        </div>
                            <table class="table table-bordered">
                                <tbody> 
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="5"><i class="icon-list"></i><strong> สรุปผลการประเมิน</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:40%;text-align:center">วันที่ประเมิน</td>
                                        <td style="width:15%;text-align:center">View</td>
                                        <td style="width:15%;text-align:center">แก้ไข</td>
                                        <td style="width:15%;text-align:center">ลบ</td>
                                        <td style="width:15%;text-align:center">พิมพ์</td>
                                                                    
                                    </tr> 
                                    <?php 
                                
                        $strSQL = "SELECT * FROM abstract WHERE term_id='$term' AND abstract_id ='".$_SESSION['student_id']."' ";
                        $objQuery = mysql_query($strSQL);?>
                      <?php
                        while ($nti=mysql_fetch_array($objQuery)){  
                        
                          
                      ?>
                                    <tr>
                                        
                                        <td style="text-align:center"><?php echo $nti['abstract_date'];?></td>
                                        <td style="text-align:center"><a href="abstractshow.php?student_id=<?php echo $_SESSION['student_id'];?>" data-toggle="tooltip" data-placement="top" data-original-title="แสดง"><i class="icon-search" style="color:#00ccff"></i></a></td>
                                        <td style="text-align:center"><a href='abstractedit.php?student_id=<?php echo $_SESSION['student_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class="icon-edit" style="color:#ffcc00"></i></a></td>
                                        <td style="text-align:center"><a href='abstractdelete.php?student_id=<?php echo $_SESSION['student_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td> 
                                        <td style="text-align:center"><a href='abstractpdf.php?student_id=<?php echo $_SESSION['student_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i class="icon-print" style="color:#00ccff"></i></a></td>                                
                                    </tr>
                         <?php } ?>            
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <hr>
                    </form>
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

    


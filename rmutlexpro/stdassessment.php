
  
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
               
                
                
               <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-12 panel-body">       
                        <div class="table-responsive panel-collapse pull out">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="5"><i class="icon-list"></i><strong> ผลการตรวจประเมิน</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold">
                                        <td style="width:15%;text-align:center">ครั้งที่ประเมิน</td>
                                        <td style="width:30%;text-align:center">วันที่ประเมิน</td>
                                        <td style="width:35%;text-align:center">ผู้ประเมิน</td>
                                        <td style="width:10%;text-align:center">View</td>
                                        <td style="width:10%;text-align:center">พิมพ์</td>
                                                                    
                                    </tr>  
                                    <?php 
                                    $i='0';

$strSQLa = "SELECT * FROM student WHERE student_id='".$_SESSION['student_id']."'";
$objQuerya = mysql_query($strSQLa);
$ntia=mysql_fetch_array($objQuerya);
$bb=$ntia['student_id'];
$dd=$ntia['year_id'];
$ee=$ntia['term_id'];


$i='0';
$strSQLb = "SELECT * FROM lession WHERE student_id='$bb' AND term_id='$dd' AND year_id = '$ee'";
$objQueryb = mysql_query($strSQLb);
while ($ntib=mysql_fetch_array($objQueryb)) {
  $cc=$ntib['lession_id'];



                        $strSQL = "SELECT * FROM teacherment WHERE teacherment_id='$cc' AND teacherment_student ='".$_SESSION['student_id']."' ";
                        $objQuery = mysql_query($strSQL);?>
                      <?php
                        while ($nti=mysql_fetch_array($objQuery)){  
                        
                            $i=$i+'1';
                      ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $i;?></td>
                                        <td style="text-align:center"><?php echo $nti['teacherment_date'];?></td>
                                        <td style="text-align:left"><?php $teacherid=$nti['teacherment_teacher'];  

                        $strSQL2 = "SELECT * FROM teacher WHERE teacher_id ='$teacherid' ";
                        $objQuery2 = mysql_query($strSQL2);
                        $nti2=mysql_fetch_array($objQuery2); 
                        echo $nti2['teacher_name'],'&nbsp;','&nbsp;','&nbsp;','&nbsp;';
                        echo $nti2['teacher_lname'];
                         ?></td>
                                        <td style="text-align:center"><a href="stdassshow.php?teacherment_id=<?php echo $nti['teacherment_id'];?>" data-toggle="tooltip" data-placement="top" data-original-title="แสดง"><i class="icon-search" style="color:#00ccff"></i></a></td>
                                        <td style="text-align:center"><a <a href="stdasspdf.php?teacherment_id=<?php echo $nti['teacherment_id'];?>&i=<?php  echo$i;?>" data-toggle="tooltip" data-placement="top" data-original-title="พิมพ์"><i class="icon-print" style="color:#00ccff"></i></a></td>                                
                                    </tr>
                         <?php } } ?>            
                                    
                                </tbody>
                            </table>
                        </div> 
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <hr>
                </div>
                
                
                
  <?php include("connect.php");
$stdevashow='';
if (isset($_GET['stdevashow'])) 
    $stdevashow=$_GET['stdevashow'];



if ($stdevashow=='show') {
$lessioneva_id=$_GET['lessioneva_id'];


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
                      
                          <tr>
                            
                        
                       
                       

                        
                        
                        
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
 
$strSQL1 = "SELECT * FROM lessioneva WHERE lessioneva_id=$lessioneva_id ";
$objQuery1 = mysql_query($strSQL1);
while ($nti1=mysql_fetch_array($objQuery1)){ 

$ans=$nti1[$id];
$strSQL3 = "SELECT * FROM question_ans WHERE ans_id=$ans ";
$objQuery3= mysql_query($strSQL3);
while ($nti3=mysql_fetch_array($objQuery3)){ 



$strSQL4 = "SELECT * FROM lessionevament WHERE lessionevament_id=$lessioneva_id ";
$objQuery4= mysql_query($strSQL4);
while ($nti4=mysql_fetch_array($objQuery4)){ 
$ment=$nti4[$id];   
    ?>

<td style="text-align:center"><?php echo $value1;?><input type=hidden name="question_id[]" value="<?php echo $id;?>"></td>
<td style="text-align:left"><?php echo $nti['subquestion_name'];?></td>
<td style="text-align:center"><?php echo $nti1[$id] ;?></td>
<td style="text-align:center"><?php echo $nti3['ans_name'];?></td>

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

    


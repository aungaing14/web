

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
}elseif ($_SESSION['indentity_id'] != 5) {
    echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
}else{
    

?>






     <div id="pop_background"></div> 
        <div id="pop_box">
            <div id="pop_content">
                <div id="pop_header">
                    
                            <i class="icon-edit"></i> เพิ่มหัวข้อรายการประเมิน
                </div>
                <form class="form-horizontal" action="adminheadevaaddlab.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-4">หัวข้อที่  : </label>
                                
                                <div class="col-sm-2">
                               
                                    <input class="form-control"  name="headevaid">    
                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">หัวข้อรายการประเมิน  : </label>
                                
                                <div class="col-sm-7">
                               
                                    <input class="form-control"  name="headeva">    
                                
                                </div>
                            </div>
                            
                          
                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> เพิ่ม</button>
                            <button id="close_modal" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div id="pop_background4"></div>
        <div id="pop_box4"> 
            <div id="pop_content4">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> เพิ่มรายการประเมิน
                </div>
                <form class="form-horizontal" action="adminsubevaaddlab.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-4">หัวข้อรายการประเมิน : </label>
                                <div class="col-sm-7">
                                <?php
                                    include("connect.php");
                                    $sqltitle="SELECT * FROM questionlab_frm ORDER BY qfrm_id ASC ";
                                    $result=mysql_query($sqltitle);
                                           
                                ?>
                                    <select class="form-control" name="qfrm_name" id="qfrm_name" required="required">
                                            <option value="">เลือกหัวข้อรายการประเมิน</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['qfrm_id'];?>'><?php echo $nti['qfrm_name'];?>
                                            
                                            <?php }?>
                                        </select>   
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-sm-4">รายการประเมินที่ : </label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" required="required" name="subevaid">       
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">รายการประเมิน : </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" required="required" name="subevaname">       
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">ตัวคูณ : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" required="required" name="subevascore">       
                                </div>
                            </div>

                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal1" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
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
    <a href="cadmin.php"><i class=" icon-home"></i><span class="hidden-tablet"> หน้าหลัก</span></a>
    <a href="cadminuser.php"><i class=" icon-user"></i><span class="hidden-tablet"> ผู้ใช้งาน</span></a>
    <a href="cadminstd.php"><i class=" icon-pencil"></i><span class="hidden-tablet"> นักศึกษา</span></a>
    <a href="cadminteacher.php"><i class=" icon-group"></i><span class="hidden-tablet"> อาจารย์นิเทศก์</span></a>
    <a href="cadmintrainer.php"><i class=" icon-user-md"></i><span class="hidden-tablet"> อาจารย์พี่เลี้ยง</span></a>
    <a href="cadminedu.php"><i class=" icon-road"></i><span class="hidden-tablet"> สถานศึกษา</span></a>
    <a href="adminyear.php"><i class=" icon-file"></i><span class="hidden-tablet"> ปีการศึกษา</span></a> 
    <a href="adminevalution.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> แบบประเมิน</span></a>

    <a href="cfile.php"><i class="icon-paper-clip"></i><span class="hidden-tablet"> เอกสารที่เกี่ยวข้อง</span></a>
    <a href="logout.php"><i class="icon-signout"></i><span class="hidden-tablet"> ออกจากระบบ</span></a>
</div>      
            <!-- start: Content -->
            <div id="content" class="span10">
                
                
<div align="right">
                            
    <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("adminevalution.php")'><i class="icon-file-alt"></i> แบบประเมินภาคทฤษฎี</button>  
</div>
     
       
                    
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#evalution" role="tab">แบบประเมิน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#evalutionedit" role="tab">แก้ไขแบบประเมิน</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="evalution" role="tabpanel">

    <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-file-alt"></i> แบบประเมินภาคปฏิบัติ</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                  <div class="form-group">




 

    
     
      <div><br></div>
<div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
<?php
$strSQLa = "SELECT * FROM questionlab_frm ";
$objQuerya = mysql_query($strSQLa) or die ("Error Query [".$strSQLa."]");
$Num_Rows = mysql_num_rows($objQuerya);

$Per_Page = 2;   // Per Page

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

$strGroup = "SELECT * FROM questionlab_frm  order by qfrm_id LIMIT $Page_Start , $Per_Page";
$objGroup = mysql_query($strGroup);
$totalGroup = mysql_num_rows($objGroup); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup = mysql_fetch_array($objGroup))
{
$array = array($rsGroup["qfrm_id"]);
    $i = 0;
      foreach( $array as $value ) {
?>
                          <tr>


<td style="font-weight:bold;text-align:left" colspan="2" style="width:100%;"><?php echo $value;?>. <?php $strSQL = "SELECT * FROM questionlab_frm WHERE qfrm_id=$value "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?> <?php echo $nti['qfrm_name'];?> <?php }?>  </td>

<td style="font-weight:bold;text-align:center" colspan="1" style="width:100%;"><?php $strSQL = "SELECT * FROM questionlab_frm WHERE qfrm_id=$value "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?> <?php echo $nti['qfrm_score'];?> <?php }?>  </td>
<td style="font-weight:bold;text-align:center" colspan="1" style="width:100%;">คะแนน</td>   


                          </tr>



<?php



    $sum=$value;
    $strGroup1 = "SELECT * FROM subquestionlab WHERE qfrm_id=$sum ";
$objGroup1 = mysql_query($strGroup1);
$totalGroup1 = mysql_num_rows($objGroup1); // หาจำนวน record ที่จัดกลุ่ม มีเท่าไรก็มาแสดงเท่านั้น
while($rsGroup1 = mysql_fetch_array($objGroup1))
{
$array1 = array($rsGroup1["subquestion_id"]);
    $i1 = 0;
      foreach( $array1 as $value1 ) {
?>

 <tr>
<?php $strSQL = "SELECT * FROM subquestionlab WHERE subquestion_id=$value1 "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?>

<td style="text-align:center"><?php $c=$value1/10; echo $c;?></td>
<td style="text-align:left"><?php echo $nti['subquestion_name'];?></td>
<td style="text-align:center"><?php $a=$nti['subquestion_score']; $s=$a*'5'; echo $s;?></td>
<td style="text-align:center">คะแนน</td>


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
                      </table>
Total <?php echo $Num_Pages;?> Page :
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
  

</div>



                    
              
                </div>
              </div>
            </div>
          </div>
   
     
                  




                   
               



  </div>

  </div>
  <div class="tab-pane" id="evalutionedit" role="tabpanel">


               
<div class="tab-content">
  <div class="tab-pane active" id="homestd" role="tabpanel">
    <div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class=" icon-list"></i> แก้ไขแบบประเมินภาคปฏิบัติ</h3>
              </div>
              <div class="panel-body">                  
                <div class="col-sm-12">
                  <div class="form-group">


                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all1" role="tab">หัวข้อรายการประเมิน</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#civil1" role="tab">รายการประเมิน</a>
                      </li>
                      
                    </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="all1" role="tabpanel">
  <div><br></div>
  <div align="right">
                            
    <button type="button" class="btn btn-primary btn-lg" id="addheadeva" style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class="icon-plus"></i> เพิ่มหัวข้อรายการประเมิน</button>  
    </div>
      <div><br></div>
<div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
                          <tr>
                            
                        
                        <th style="width:10%;text-align:center">หัวข้อที่</th> 
                        <th style="width:55%;text-align:center">หัวข้อรายการประเมิน</th>
                        <th style="width:15%;text-align:center">คะแนน</th>
                        <th style="width:10%;text-align:center">แก้ไข</th>
                        <th style="width:10%;text-align:center">ลบ</th>
                        
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                        <?php

                           $strSQL = "SELECT * FROM questionlab_frm";
                            $objQuery = mysql_query($strSQL);
                        ?>
                        <?php
                            while ($nti=mysql_fetch_array($objQuery)){  
                        ?>
                            <td style="text-align:center"><?php echo $nti['qfrm_id'];?></td>
                            <td style="text-align:left;"><?php echo $nti['qfrm_name'];?></td>
                            <td style="text-align:center"><?php echo $nti['qfrm_score'];?></td>
                            <td style="text-align:center"><a href='headevaeditlab.php?qfrm_id=<?php echo $nti['qfrm_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class="icon-edit" style="color:#ffcc00"></i></a></td>
                            <td style="text-align:center"><a href='headevadeletelab.php?qfrm_id=<?php echo $nti['qfrm_id'];?>' data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>
                          </tr>
                        <?php }?> 
                          
                        </tbody>
                      </table>
  
                    </div>
  </div>
  <div class="tab-pane" id="civil1" role="tabpanel">
    <div><br></div>
     <div align="right">
                            
    <button type="button" class="btn btn-primary btn-lg" id="addsubeva" style="background-color:#80bfff;border-color: #80bfff;; color:#fff"><i class="icon-plus"></i> เพิ่มรายการประเมิน</button>  
    </div>
      <div><br></div>
<div class="table-responsive">
                      <table class="table table-bordered" id="ajax_course_table">
                        <thead>
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


<td style="font-weight:bold;text-align:left" colspan="5" style="width:100%;"><?php echo $value;?>. <?php $strSQL = "SELECT * FROM questionlab_frm WHERE qfrm_id=$value "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?> <?php echo $nti['qfrm_name'];?> <?php }?>  </td> 


                          </tr>
                        <tr style="font-weight:bold;">
                            <td style="width:10%;text-align:center">รายการที่</td>
                            <td style="width:60%;text-align:center">รายการประเมิน</td>
                            <td style="width:10%;text-align:center">ตัวคูณ</td>
                            <td style="width:10%;text-align:center">แก้ไข</td>
                            <td style="width:10%;text-align:center">ลบ</td>                                  
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

 <tr> 
<?php $strSQL = "SELECT * FROM subquestionlab WHERE subquestion_id=$value1 "; $objQuery = mysql_query($strSQL);?>
    <?php
        while ($nti=mysql_fetch_array($objQuery)){  
    ?>

<td style="text-align:center"><?php $b=$value1/10;echo $b;?></td>
<td style="text-align:left"><?php echo $nti['subquestion_name'];?></td>
<td style="text-align:center"><?php echo $nti['subquestion_score'];?></td>
<td style="text-align:center"><a href='subquestioneditlab.php?subquestion_id=<?php echo $value1;?>' data-toggle="tooltip" data-placement="top" data-original-title="แก้ไข"><i class="icon-edit" style="color:#ffcc00"></i></a></td>
<td style="text-align:center"><a href='subquestiondeletelab.php?subquestion_id=<?php echo $nti['subquestion_id'];?>&subquestion_score=<?php echo $nti['subquestion_score'];?>&qfrm_id=<?php echo $nti['qfrm_id'];?>'  data-toggle="tooltip" data-placement="top" data-original-title="ลบ"><i class=" icon-remove" style="color:#000"></i></a></td>


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
        $(document).ready(function() {
            $('#addheadeva').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box').fadeIn();
                $('#pop_content').fadeIn();
                return false;
            }); 
            
            $('#close_modal').click(function(){
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

        <script>
        $(document).ready(function() {
            $('#addsubeva').click(function(){
                $('#pop_background4').fadeIn();
                $('#pop_box4').fadeIn();
                $('#pop_content4').fadeIn();
                return false;
            }); 
            
            $('#close_modal1').click(function(){
                $('#pop_background4').fadeOut();
                $('#pop_box4').fadeOut();
                $('#pop_content4').fadeOut();
                return false;
            });
            
            
        });
        
            $('#pop_background4').click(function() {
                $('#pop_background4').fadeOut();
                $('#pop_box4').fadeOut();
                $('#pop_content4').fadeOut();
                return false;
            
        });
        
    
        </script>

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

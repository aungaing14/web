 

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
<style type="text/css">
div.img-resize1 img {
    height: 120px;
    width: auto;
}

div.img-resize1 {
    width: auto;
    height: 120px;
    overflow: hidden;
    text-align: center;
}
</style>
<style type="text/css">
div.img-resize2 img {
    height: 150px;
    width: auto;
}

div.img-resize2 {
    width: auto;
    height: 150px;
    overflow: hidden;
    text-align: center;
}
</style>

<body>

<?php
session_start();

//checklogin
if ($_SESSION['ses_id']=='') {
    echo "<meta http-equiv='refresh' content='1;URL=loginstd.php'>";
}elseif ($_SESSION['indentity_id']!=3) {
    echo "<meta http-equiv='refresh' content='1;URL=logoutstd.php'>";
}elseif($_SESSION['active']!=1){
    echo "<meta http-equiv='refresh' content='1;URL=waitregis.php'>";
}else{
?>

<div id="pop_background"></div>
        <div id="pop_box1">
            <div id="pop_content">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขข้อมูลนักศึกษา
                </div>
                <form class="form-horizontal" action="stdupdate.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                                <?php
                                include("connect.php");
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtstudent_id" value='<?php echo $nti['student_id'];?>'>    
                                <?php }?>  
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">คำนำหน้าชื่อ : </label>
                                <?php
                                    $strSQL = "SELECT a.student_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                $objQuery = mysql_query($strSQL) or die(mysql_error());
                            ?>

                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input type="text" class="form-control" readonly required name="txttitle_name" value='<?php echo $nti['title_name'];?>'>
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                            <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-3">ชื่อ : </label>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtstudent_name" value='<?php echo $nti['student_name'];?>'>    
                                <?php }?>
                                </div>
                            <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-2">นามสกุล : </label>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtstudent_lname" value='<?php echo $nti['student_lname'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label col-sm-3">ปีการศึกษา : </label>
                                <?php
                                    $strSQL = "SELECT a.year_id,b.year_id,b.year_name FROM student a INNER JOIN year b ON a.year_id=b.year_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtyear_name" value='<?php echo $nti['year_name'];?>'>    
                                <?php }?>
                                </div>
                                <label class="control-label col-sm-2">ภาคเรียน : </label>
                                <?php
                                    $strSQL = "SELECT a.term_id,b.termyear_id,b.termyear_name FROM student a INNER JOIN termyear b ON a.term_id=b.termyear_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtterm_name" value='<?php echo $nti['termyear_name'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชั้นปี : </label>
                                <?php
                                    $strSQL = "SELECT a.class_id,b.class_id,b.class_name FROM student a INNER JOIN class b ON a.class_id=b.class_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                   <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtclass_name" value='<?php echo $nti['class_name'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">คณะ : </label>
                                <?php
                                    $strSQL = "SELECT a.faculty_id,b.faculty_id,b.faculty_name FROM student a INNER JOIN faculty b ON a.faculty_id=b.faculty_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtfaculty_name" value='<?php echo $nti['faculty_name'];?>'>    
                                <?php }?>   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">สาขา : </label>
                                <?php
                                    $strSQL = "SELECT a.course_id,b.course_id,b.course_name FROM student a INNER JOIN course b ON a.course_id=b.course_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtcourse_name" value='<?php echo $nti['course_name'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">หลักสูตร : </label>
                                <?php
                                    $strSQL = "SELECT a.branch_id,b.branch_id,b.branch_name FROM student a INNER JOIN branch b ON a.branch_id=b.branch_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-6">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtbranch_name" value='<?php echo $nti['branch_name'];?>'>    
                                <?php }?>       
                                </div>
                            </div>
                            <div class="form-group">
                                <hr>
                            </div>
                          
                            <div class="form-group">
                                <label class="control-label col-sm-3">อาจารย์ที่ปรึกษา : </label>
                                <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                   <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="student_Advisors" value='<?php echo $nti['student_Advisors'];?>'>    
                                
                                <?php }?> 
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
        
        
        
        
        
        
        <div id="pop_background2"></div>
        <div id="pop_box2">
            <div id="pop_content2">
                <div id="pop_header">
                    
                            <i class="icon-edit"></i> แก้ไขประวัติส่วนตัว
                </div>
                <form class="form-horizontal" action="stdupdateprofile.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                                <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txtstudent_id" value='<?php echo $nti['student_id'];?>'>    
                                <?php }?>  
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">คำนำหน้าชื่อ : </label>
                                <?php
                                    $strSQL = "SELECT a.student_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                $objQuery = mysql_query($strSQL) or die(mysql_error());
                            ?>

                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input type="text" class="form-control" readonly required name="txttitle_name" value='<?php echo $nti['title_name'];?>'>
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                            <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-3">ชื่อ : </label>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtstudent_name" readonly required value='<?php echo $nti['student_name'];?>'>    
                                <?php }?>
                                </div>
                            <?php
                                    $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-2">นามสกุล : </label>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtstudent_lname" readonly required value='<?php echo $nti['student_lname'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">วัน-เดือน-ปี เกิด : </label>
                            <?php
                                    $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtbirthday" value='<?php echo $nti['std_birthday'];?>'>    
                                <?php }?>
                                <label class="control-label">ตัวอย่าง : --/--/2535</label>
                                </div>
                                <label class="control-label col-sm-2">E-mail : </label>
                                <?php
                                    $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txtemail" value='<?php echo $nti['std_email'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">หมู่โลหิต : </label>
                                <?php
                              
                                            $sqltitle="SELECT * FROM blood ORDER BY blood_id ASC ";
                                             $result=mysql_query($sqltitle);
                                           
                                        ?>
                                <div class="col-sm-2">
                                    <select class="form-control" name="blood" required="required" id="name_title">
                                            <option value="">หมู่เลือด</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['blood_id'];?>'><?php echo $nti['blood_name'];?>
                                            
                                            <?php }?>
                                        </select> 
                                </div>
                                <label class="control-label col-sm-3">เพศ : </label>
                                 <?php
                              
                                            $sqltitle="SELECT * FROM sex ORDER BY sex_id ASC ";
                                             $result=mysql_query($sqltitle);
                                           
                                        ?>
                                <div class="col-sm-2">
                                    <select class="form-control" name="sex" required="required" id="name_title">
                                            <option value="">เลือกเพศ</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['sex_id'];?>'><?php echo $nti['sex_name'];?>
                                            
                                            <?php }?>
                                        </select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">เบอร์โทรศัพท์ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txttel" value='<?php echo $nti['std_tel'];?>'>    
                                <?php }?>    
                                </div>
                            </div>
                            <div class="form-group">
                                <hr>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-5">ที่อยู่นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู (ที่ติดต่อได้)</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">บ้านเลขที่ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddressnow_code" value='<?php echo $nti['saddressnow_code'];?>'>    
                                <?php }?>    
                                </div>
                                <label class="control-label col-sm-2">หมู่ที่ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddressnow_moo" value='<?php echo $nti['saddressnow_moo'];?>'>    
                                <?php }?>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ตรอก - ซอย : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddressnow_soi" value='<?php echo $nti['saddressnow_soi'];?>'>    
                                <?php }?>    
                                </div>
                                <label class="control-label col-sm-2">ถนน : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddressnow_road" value='<?php echo $nti['saddressnow_road'];?>'>    
                                <?php }?>    
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="control-label col-sm-3">จังหวัด : </label>
                                 <?php
                                        include("connect.php");
                                        $sqltitle="SELECT * FROM province ORDER BY PROVINCE_NAME ASC ";
                                        $result=mysql_query($sqltitle);
                                           
                                ?>
                                <div class="col-sm-3">
                                    <select class="form-control" name="province" id="province" required="required">
                                            <option value="">เลือกจังหวัด</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['PROVINCE_ID'];?>'><?php echo $nti['PROVINCE_NAME'];?>
                                            
                                            <?php }?> 
                                    </select>    
                                </div>
                                <label class="control-label col-sm-2">อำเภอ : </label>
                                <div class="col-sm-3">

                                    <select required="required" class="form-control" name="amphur" id="amphur"></select>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ตำบล : </label>
                                <div class="col-sm-3">
                                    <select required="required" class="form-control" name="district" id="district"></select>       
                                </div>
                                <label class="control-label col-sm-2">รหัสไปรษณี : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="  saddressnow_postid" value='<?php echo $nti['saddressnow_postid'];?>'>    
                                <?php }?>    
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <hr>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-6">ที่อยู่นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู (ตามทะเบียนบ้าน)</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">บ้านเลขที่ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddresshome_code" value='<?php echo $nti['saddresshome_code'];?>'>    
                                <?php }?>    
                                </div>
                                <label class="control-label col-sm-2">หมู่ที่ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddresshome_moo" value='<?php echo $nti['saddresshome_moo'];?>'>    
                                <?php }?>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ตรอก - ซอย : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddresshome_soi" value='<?php echo $nti['saddresshome_soi'];?>'>    
                                <?php }?>    
                                </div>
                                <label class="control-label col-sm-2">ถนน : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddresshome_road" value='<?php echo $nti['saddresshome_road'];?>'>    
                                <?php }?>    
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="control-label col-sm-3">จังหวัด : </label>
                                 <?php
                                        include("connect.php");
                                        $sqltitle="SELECT * FROM province ORDER BY PROVINCE_NAME ASC ";
                                        $result=mysql_query($sqltitle);
                                           
                                ?>
                                <div class="col-sm-3">
                                    <select class="form-control" name="province1" id="province1" required="required">
                                            <option value="">เลือกจังหวัด</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($result)){  
                                            ?>
                                            <option value='<?php echo $nti['PROVINCE_ID'];?>'><?php echo $nti['PROVINCE_NAME'];?>
                                            
                                            <?php }?> 
                                    </select>    
                                </div>
                                <label class="control-label col-sm-2">อำเภอ : </label>
                                <div class="col-sm-3">

                                    <select required="required" class="form-control" name="amphur1" id="amphur1"></select>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ตำบล : </label>
                                <div class="col-sm-3">
                                    <select required="required" class="form-control" name="district1" id="district1"></select>       
                                </div>
                                <label class="control-label col-sm-2">รหัสไปรษณี : </label>
                                <?php
                                    $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="saddresshome_postid" value='<?php echo $nti['saddresshome_postid'];?>'>    
                                <?php }?>    
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
        
        
        
        <div id="pop_background5"></div>
        <div id="pop_box5">
            <div id="pop_content5">
                <div id="pop_header">
                    
                            <i class="icon-edit"></i> แก้ไขสถานศึกษา
                </div>
                <form class="form-horizontal" action="stdselectedu.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-5">เลือกสถานศึกษา : </label>
                                <?php
                                    $strSQL = "SELECT * FROM education ORDER BY education_id ASC ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-6">
                                    <select class="form-control" name="education" id="education" >
                                            <option value="">เลือกสถานศึกษา</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($objQuery)){  
                                            ?>
                                            <option value='<?php echo $nti['education_id'];?>'><?php echo $nti['education_name'];?>
                                            
                                            <?php }?> 
                                    </select>    
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-sm-5">เลือกแผนก/สาขาวิชา : </label>
                                
                                <div class="col-sm-6">
                                   <select required="required" class="form-control" name="educationpart" id="educationpart"></select>    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal2" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div id="pop_background6"></div>
        <div id="pop_box6">
            <div id="pop_content6">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขข้อมูลพี่เลี้ยง
                </div>
                <form class="form-horizontal" action="stdselecttrainer.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-5">เลือกสถานศึกษา : </label>
                                <?php
                                    $strSQL = "SELECT * FROM education ORDER BY education_id ASC ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-6">
                                    <select class="form-control" required="required"  name="education1" id="education1" >
                                            <option value="">เลือกสถานศึกษา</option>
                                            <?php
                                                 while ($nti=mysql_fetch_array($objQuery)){  
                                            ?>
                                            <option value='<?php echo $nti['education_id'];?>'><?php echo $nti['education_name'];?>
                                            
                                            <?php }?>  
                                    </select>    
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-sm-5">เลือกแผนก/สาขาวิชา : </label>
                                
                                <div class="col-sm-6">
                                   <select required="required" class="form-control" name="educationpart1" id="educationpart1"></select>    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-5">เลือกอาจารย์พี่เลี้ยง : </label>
                                
                                <div class="col-sm-6">
                                   <select  class="form-control" required="required"  name="trainer1" id="trainer1"></select>    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal3" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    <div id="pop_background4"></div>
        <div id="pop_box4">
            <div id="pop_content4"> 
                <div id="pop_header">
                    
                            <i class="icon-edit"></i> แก้ไขรหัสผ่าน
                </div>
                <form class="form-horizontal" action="stdeditpass.php?student_id=<?php echo $_SESSION['student_id'];?>" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-5">รหัสผ่านเดิม : </label>
                                <div class="col-sm-4">
                                    <input class="form-control" required="required" id="" name="oldpassword" type="password" >    
                                </div>
                            </div> 
                            
                            
                            <div class="form-group">
                                <label class="control-label col-sm-5">รหัสผ่านใหม่ : </label>
                                <div class="col-sm-4">
                                    <input class="form-control" required="required" name="password" type="password" >       
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-5">ยืนยันรหัสผ่าน : </label>
                                <div class="col-sm-4">
                                    <input class="form-control" required="required" name="repassword" type="password" >       
                                </div>
                            </div>

                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal4" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
   <div id="pop_background7"></div>
        <div id="pop_box7">
            <div id="pop_content7">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขรูปประจำตัว
                </div>
                <form name="form1" method="post" action="uploadpic.php?student_id=<?php echo $_SESSION['student_id'];?>"  enctype="multipart/form-data">
               
                        <div id="pop_body" align="center" >
                            <div  class="img-resize"><img  id="img" /></div>
                            <div align="center">
                            <input type="file" class="custom-file-input" required="required" name="upfile" OnChange="Preview(this)">
                                
                             </div>

                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary" value="Upload"><i class="icon-save"></i> บันทึก</button>
                            <button id="close_modal5" type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
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
                    <div class="col-lg-3 panel-body">
                        <!-- tab menu -->
                        <ul class="list-table"">
                            <li ">
                            <?php
                            $strSQL = "SELECT * FROM images WHERE id_image = '".$_SESSION['student_id']."' ";
                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                            ?>
                            <?php
                            while ($nti=mysql_fetch_array($objQuery)){ 
                            $Picture=$nti['image'];
                        
                            ?>
                                <div  class="img-resize1"><img  id="img" class="img-thumbnail" src="img/<?=$Picture;?>" alt="รูปประจำตัว" >
                                </div>
                             <?php }?>
                            </li>
                            <li class="text-left">
                                <h5 class="semibold ellipsis mt0"> <?php
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
                                                            </label></h5> 
                            </li>
                        </ul>
                        
                        <hr>
                        
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item active"><a id="editpicture" data-toggle="tab" aria-expanded="true"><i class=" icon-picture"></i> อัพโหลดรูปประจำตัว</a></li>
                            <li class="list-group-item"><a id="editpass" data-toggle="tab" aria-expanded="false"><i class=" icon-edit"></i> แก้ไขรหัสผ่าน</a></li>
                        </ul>
                        
                        <hr>
                        
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item active"><a href="#datacivil" data-toggle="tab" aria-expanded="true"><i class="icon-pencil"></i> ข้อมูลนักศึกษา</a></li>
                            <li class="list-group-item"><a href="#profilecivil" data-toggle="tab" aria-expanded="false"><i class="icon-user"></i> ประวัติส่วนตัว</a></li>
                            <li class="list-group-item"><a href="#collegecivil" data-toggle="tab" aria-expanded="false"><i class="icon-book"></i> สถานศึกษา</a></li>
                            <li class="list-group-item"><a href="#teachercivil" data-toggle="tab" aria-expanded="false"><i class="icon-user-md"></i> อาจารย์นิเทศก์</a></li>
                            
                        </ul>
                        
                        <hr>
                    </div> 

           
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="datacivil">
                                <div class="panel-body">
                                    <div class="panel panel-teal">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="icon-pencil"></i> ข้อมูลนักศึกษา</h3>
                                        </div>
                                        <div class="panel-body" id="data_panel">
                                            <div class="form-horizontal"> 
                                                <div class="col-md-12"> 
                                                    <div class="panel-collapse pull-right out">
                                                        <button type="button" class="btn btn-primary btn-lg" id="stdedit"><i class="icon-pencil"></i> แก้ไขข้อมูลนักศึกษา</button>
                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                                
                                                <div class="col-md-12">
                                                
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">รหัสนักศึกษา : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                            <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_id'];?>'><?php echo $nti['student_id'];?>

                                                                <?php }?>
                                                                </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชื่อ - สกุล : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['title_name'];?>'><?php echo $nti['title_name'];?>

                                                            <?php }?>
                                                            </label>

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
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ปีการศึกษา : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.year_id,b.year_id,b.year_name FROM student a INNER JOIN year b ON a.year_id=b.year_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>    
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['year_name'];?>'><?php echo $nti['year_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ภาคเรียน :</label>
                                                        <?php
                                                            $strSQL = "SELECT a.term_id,b.termyear_id,b.termyear_name FROM student a INNER JOIN termyear b ON a.term_id=b.termyear_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>    
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['termyear_name'];?>'><?php echo $nti['termyear_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชั้นปี : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.class_id,b.class_id,b.class_name FROM student a INNER JOIN class b ON a.class_id=b.class_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>   
                                                        <div class="col-sm-7">
                                                           <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['class_name'];?>'><?php echo $nti['class_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">คณะ : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.faculty_id,b.faculty_id,b.faculty_name FROM student a INNER JOIN faculty b ON a.faculty_id=b.faculty_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>  
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['faculty_name'];?>'><?php echo $nti['faculty_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">สาขา : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.course_id,b.course_id,b.course_name FROM student a INNER JOIN course b ON a.course_id=b.course_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?> 
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['course_name'];?>'><?php echo $nti['course_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หลักสูตร : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.branch_id,b.branch_id,b.branch_name FROM student a INNER JOIN branch b ON a.branch_id=b.branch_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?> 
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['branch_name'];?>'><?php echo $nti['branch_name'];?>

                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    
                                    
                                                    
                                                   
                                                    
                                    
                                                    <div class="col-sm-12">
                                                        <hr>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">อาจารย์ที่ปรึกษา : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                            <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_Advisors'];?>'><?php echo $nti['student_Advisors'];?>

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
                            
            
                            <div class="tab-pane" id="profilecivil">
                                <div class="panel-body">
                                    <div class="panel panel-teal">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="icon-user"></i> ประวัติส่วนตัว</h3>
                                        </div>
                                        <div class="panel-body" id="profile_panel">
                                            <div class="form-horizontal"> 
                                                <div class="col-md-12"> 
                                                    <div class="panel-collapse pull-right out">
                                                        <button type="button" class="btn btn-primary btn-lg" id="stdedit1"><i class="icon-pencil"></i> แก้ไขประวัติส่วนตัว</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12"> 
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">รหัสนักศึกษา : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                            <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['student_id'];?>'><?php echo $nti['student_id'];?>

                                                                <?php }?>
                                                                </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชื่อ - สกุล : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.title_name FROM student a INNER JOIN title b ON a.title_id=b.title_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['title_name'];?>'><?php echo $nti['title_name'];?>

                                                            <?php }?>
                                                            </label>

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
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">วันเกิด : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['std_birthday'];?>'><?php echo $nti['std_birthday'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">e-mail : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['std_birthday'];?>'><?php echo $nti['std_birthday'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หมู่โลหิต : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.blood_id,b.blood_id,b.blood_name FROM stdprofile a  INNER JOIN blood b ON a.blood_id=b.blood_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>

                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['blood_id'];?>'><?php echo $nti['blood_name'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">เพศ : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.sex_id,b.sex_id,b.sex_name FROM stdprofile a  INNER JOIN sex b ON a.sex_id=b.sex_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['sex_id'];?>'><?php echo $nti['sex_name'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">เบอร์โทรศัพท์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM stdprofile WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['std_tel'];?>'><?php echo $nti['std_tel'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-sm-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="control-label">ที่อยู่นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู (ที่ติดต่อได้)</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">บ้านเลขที่ : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddressnow_code'];?>'><?php echo $nti['saddressnow_code'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หมู่ที : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddressnow_code'];?>'><?php echo $nti['saddressnow_moo'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ตรอก/ซอน : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddressnow_code'];?>'><?php echo $nti['saddressnow_soi'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ถนน : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddressnow_code'];?>'><?php echo $nti['saddressnow_road'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ตำบล : </label>
                                                          <?php
                                                            $strSQL = "SELECT a.student_id,a.saddressnow_district,b.DISTRICT_ID,b.DISTRICT_NAME FROM saddressnow a INNER JOIN district b ON a.saddressnow_district=b.DISTRICT_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['DISTRICT_NAME'];?>'><?php echo $nti['DISTRICT_NAME'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">อำเภอ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,a.saddressnow_amphur,b.AMPHUR_ID,b.AMPHUR_NAME FROM saddressnow a INNER JOIN amphur b ON a.saddressnow_amphur=b.AMPHUR_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['AMPHUR_NAME'];?>'><?php echo $nti['AMPHUR_NAME'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">จังหวัด : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,a.saddressnow_province,b.PROVINCE_ID,b.PROVINCE_NAME FROM saddressnow a INNER JOIN province b ON a.saddressnow_province=b.PROVINCE_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['PROVINCE_NAME'];?>'><?php echo $nti['PROVINCE_NAME'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">รหัสไปรษณีย์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM saddressnow WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddressnow_code'];?>'><?php echo $nti['saddressnow_postid'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="col-sm-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 class="control-label">ที่อยู่นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู (ตามทะเบียนบ้าน)</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">บ้านเลขที่ : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddresshome_code'];?>'><?php echo $nti['saddresshome_code'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หมู่ที : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddresshome_code'];?>'><?php echo $nti['saddresshome_moo'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ตรอก/ซอน : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddresshome_code'];?>'><?php echo $nti['saddresshome_soi'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ถนน : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM saddresshome WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   saddresshome_code'];?>'><?php echo $nti['saddresshome_road'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ตำบล : </label>
                                                          <?php
                                                            $strSQL = "SELECT a.student_id,a.saddresshome_district,b.DISTRICT_ID,b.DISTRICT_NAME FROM saddresshome a INNER JOIN district b ON a.saddresshome_district=b.DISTRICT_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['DISTRICT_NAME'];?>'><?php echo $nti['DISTRICT_NAME'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">อำเภอ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,a.saddresshome_amphur,b.AMPHUR_ID,b.AMPHUR_NAME FROM saddresshome a INNER JOIN amphur b ON a.saddresshome_amphur=b.AMPHUR_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['AMPHUR_NAME'];?>'><?php echo $nti['AMPHUR_NAME'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">จังหวัด : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,a.saddresshome_province,b.PROVINCE_ID,b.PROVINCE_NAME FROM saddresshome a INNER JOIN province b ON a.saddresshome_province=b.PROVINCE_ID WHERE a.student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                    ?>
                                                        <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['PROVINCE_NAME'];?>'><?php echo $nti['PROVINCE_NAME'];?>

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
                            
                            <div class="tab-pane" id="collegecivil">
                                    <div class="panel-body">
                                        <div class="panel panel-teal">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="icon-book"></i> สถานศึกษา</h3>
                                            </div>
                                            <div class="panel-body" id="profile_panel">
                                                <div class="form-horizontal"> 
                                                    <div class="col-md-12"> 
                                                        <div class="panel-collapse pull-right out">
                                                            <button type="button" class="btn btn-primary btn-lg" id="stdedit2"><i class="icon-pencil"></i> แก้ไขข้อมูลสถานศึกษา</button>
                                                            <button type="button" class="btn btn-primary btn-lg" id="stdedit3"><i class="icon-pencil"></i> แก้ไขข้อมูลพี่เลี้ยง</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชื่อสถานศึกษา : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.education_id,b.education_name FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['   education_name'];?>'><?php echo $nti['education_name'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">แผนก/สาขาวิชา : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.educationpart_id,b.educationpart_name FROM student a INNER JOIN educationpart b ON a.edupart_id=b.educationpart_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['educationpart_name'];?>'><?php echo $nti['educationpart_name'];?>

                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หัวหน้าแผนก/สาขา : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.educationpart_id,b.educationpart_head FROM student a INNER JOIN educationpart b ON a.edupart_id=b.educationpart_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['educationpart_head'];?>'><?php echo $nti['educationpart_head'];?>

                                                                <?php }?>
                                                                </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ที่อยู่ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.education_id,b.education_code,b.education_moo,b.education_soi,b.education_road,b.education_district,b.education_amphur,b.education_province,b.education_post FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_code'];?>'> เลขที่ <?php echo $nti['education_code'];?>

                                                            
                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_moo'];?>'> หมู่ <?php echo $nti['education_moo'];?>

                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_soi'];?>'> ซอย <?php echo $nti['education_soi'];?>

                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_road'];?>'> ถนน <?php echo $nti['education_road'];?>

                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_district'];?>'> ตำบล <?php  $name=$nti['education_district'];

                                                            $strSQL1 = "SELECT * FROM district WHERE DISTRICT_ID = '$name' ";
                                                            $objQuery1 = mysql_query($strSQL1);
                                                       
                                                                while ($nti1=mysql_fetch_array($objQuery1)){  
                                                             echo $nti1['DISTRICT_NAME'];
                                                        }?>
                                                            
                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_amphur'];?>'> อำเภอ <?php $name1=$nti['education_amphur'];
                                                            $strSQL2 = "SELECT * FROM amphur WHERE AMPHUR_ID = '$name1' ";
                                                            $objQuery2 = mysql_query($strSQL2);
                                                       
                                                                while ($nti2=mysql_fetch_array($objQuery2)){  
                                                             echo $nti2['AMPHUR_NAME'];
                                                        }?>
                                                           
                                                            </label>

                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_province'];?>'> จังหวัด <?php $name3=$nti['education_province'];
  $strSQL2 = "SELECT * FROM province WHERE PROVINCE_ID = '$name3' ";
                                                            $objQuery2 = mysql_query($strSQL2);
                                                       
                                                                while ($nti2=mysql_fetch_array($objQuery2)){  
                                                             echo $nti2['PROVINCE_NAME'];
                                                        }?>

                                                            </label>


                                            
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_post'];?>'> รหัสไปรษณีย์ <?php
                                                            $strSQL = "SELECT a.student_id,b.education_id,b.education_post FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?><?php echo $nti['education_post'];?>
                                                            <?php }?>

                                                            <?php }?>
                                                            
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">โทรศัพท์ : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.student_id,b.education_id,b.education_tel FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                        <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_tel'];?>'><?php echo $nti['education_tel'];?>
                                                             <?php }?>
                                                             </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">Website : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.education_id,b.education_web FROM student a INNER JOIN education b ON a.edu_id=b.education_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_web'];?>'><?php echo $nti['education_web'];?>
                                                             <?php }?>
                                                             </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-12">
                                                   
                                                    <div>
                                                    <?php
                            $strSQL1 = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                            $objQuery1 = mysql_query($strSQL1) or die(mysql_error());
                            $nti1=mysql_fetch_array($objQuery1);
                            $trainer_id=$nti1['trainer_id'];

                            $strSQL = "SELECT * FROM images WHERE id_image = '$trainer_id' ";
                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                            
                            while ($nti=mysql_fetch_array($objQuery)){ 
                            $Picture=$nti['image'];
                        
                            ?>
                                <div  class="img-resize2"><img  id="img" class="img-thumbnail" src="img/<?=$Picture;?>" alt="รูปประจำตัว" >
                                </div>
                             <?php }?>
                                                    
                                                </div>   
                                                
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr>    
                                                
                                                </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">อาจารย์พี่เลี้ยง : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.trainer_id,b.trainer_name,b.trainer_lname,b.title_id FROM student a INNER JOIN trainer b ON a.trainer_id=b.trainer_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['title_id'];?>'><?php $titleid=$nti['title_id'];

                                                             $strSQLtitle = "SELECT * FROM title WHERE title_id = '$titleid' ";
                                                            $objQuerytitle = mysql_query($strSQLtitle);
                                                       
                                                                while ($ntititle=mysql_fetch_array($objQuerytitle)){  
                                                             echo $ntititle['title_name'];
                                                        }?>

                                                          
                                                            </label>

                                                             <?php }?>
                                                            <?php
                                                            $strSQL = "SELECT a.student_id,b.trainer_id,b.trainer_name FROM student a INNER JOIN trainer b ON a.trainer_id=b.trainer_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                      
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['trainer_name'];?>'><?php echo $nti['trainer_name'];?>

                                                           <?php }?> 
                                                            </label>


                                                            <?php
                                                            $strSQL = "SELECT a.student_id,b.trainer_id,b.trainer_lname FROM student a INNER JOIN trainer b ON a.trainer_id=b.trainer_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                      
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['trainer_lname'];?>'><?php echo $nti['trainer_lname'];?>

                                                           <?php }?> 
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">เบอร์โทรศัพท์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.trainer_id,b.trainer_tel FROM student a INNER JOIN trainer b ON a.trainer_id=b.trainer_id WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['trainer_tel'];?>'><?php echo $nti['trainer_tel'];?>
                                                             <?php }?>
                                                             </label>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="teachercivil">
                                    <div class="panel-body">
                                        <div class="panel panel-teal">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="icon-user-md"></i> อาจารย์นิเทศก์</h3>
                                            </div>
                                            <div class="panel-body" id="profile_panel">
                                                <div class="form-horizontal"> 
                                                
                                                
                                                <div class="col-sm-12">
                                                   
                                                    <div>
                                                    <?php
                            $strSQL1 = "SELECT * FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
                            $objQuery1 = mysql_query($strSQL1) or die(mysql_error());
                            $nti1=mysql_fetch_array($objQuery1);
                            $teacherid=$nti1['teacher_id'];

                            $strSQL = "SELECT * FROM images WHERE id_image = '$teacherid' ";
                            $objQuery = mysql_query($strSQL) or die(mysql_error());
                                                            
                            
                            while ($nti=mysql_fetch_array($objQuery)){ 
                            $Picture=$nti['image'];
                        
                            ?>
                                <div  class="img-resize2"><img  id="img" class="img-thumbnail" src="img/<?=$Picture;?>" alt="รูปประจำตัว" >
                                </div>
                             <?php }?>
                                                    
                                                </div>   
                                                
                                                </div>
                                                <div class="col-sm-12">
                                                    <hr>    
                                                
                                                </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชื่อ - นามสกุล : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.title_id FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['title_id'];?>'><?php $titleid1=$nti['title_id'];

                                                                $strSQLtitle1 = "SELECT * FROM title WHERE title_id = '$titleid1' ";
                                                            $objQuerytitle1 = mysql_query($strSQLtitle1);
                                                       
                                                                while ($ntititle1=mysql_fetch_array($objQuerytitle1)){  
                                                             echo $ntititle1['title_name'];
                                                        }?>
                                                            
                                                           
                                                            </label>

                                                             <?php }?>


                                                             <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.teacher_name FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                      
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['teacher_name'];?>'><?php echo $nti['teacher_name'];?>

                                                           <?php }?> 
                                                            </label>


                                                            <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.teacher_lname FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                      
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['teacher_lname'];?>'><?php echo $nti['teacher_lname'];?>

                                                           <?php }?> 
                                                            </label>
                                                            
                                                             
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">โทรศัพท์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.teacher_tel FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['teacher_tel'];?>'><?php echo $nti['teacher_tel'];?>

                                                           <?php }?> 
                                                            </label>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">E-mail : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.teacher_email FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['teacher_email'];?>'><?php echo $nti['teacher_email'];?>

                                                           <?php }?> 
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">คณะ : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.faculty_id FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                        <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['faculty_id'];?>'><?php $faculty=$nti['faculty_id'];
                                                                $strSQLfaculty = "SELECT * FROM faculty WHERE faculty_id = '$faculty' ";
                                                            $objQueryfaculty = mysql_query($strSQLfaculty);
                                                       
                                                                while ($ntifaculty=mysql_fetch_array($objQueryfaculty)){  
                                                             echo $ntifaculty['faculty_name'];
                                                        }?>

                                                          
                                                            </label>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">สาขา : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.course_id FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                         <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['course_id'];?>'><?php $course=$nti['course_id'];
                                                             $strSQLcourse = "SELECT * FROM course WHERE course_id = '$course' ";
                                                            $objQuerycourse = mysql_query($strSQLcourse);
                                                       
                                                                while ($nticourse=mysql_fetch_array($objQuerycourse)){  
                                                             echo $nticourse['course_name'];
                                                        }?>

                                                          
                                                            </label>
                                                            <?php }?> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">หลักสูตร : </label><?php
                                                            $strSQL = "SELECT a.student_id,b.teacher_id,b.branch_id FROM student a INNER JOIN teacher b ON a.teacher_id=b.teacher_id  WHERE student_id = '".$_SESSION['student_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                        <?php
                                                                while ($nti=mysql_fetch_array($objQuery)){  
                                                            ?> 
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti['branch_id'];?>'><?php $branch=$nti['branch_id'];
                                                               $strSQLbranch = "SELECT * FROM branch WHERE branch_id = '$branch' ";
                                                            $objQuerybranch = mysql_query($strSQLbranch);
                                                       
                                                                while ($ntibranch=mysql_fetch_array($objQuerybranch)){  
                                                             echo $ntibranch['branch_name'];
                                                        }?>

                                                            
                                                            </label>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            
                        </div>

                    </div><!--/.fluid-container-->
                    <!-- end: Content -->
                </div><!--/#content.span10-->
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
        $(document).ready(function() {
            $('#stdedit').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box1').fadeIn();
                $('#pop_content').fadeIn();
                return false;
            }); 
            
            $('#close_modal').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box1').fadeOut();
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
            $('#stdedit1').click(function(){
                $('#pop_background2').fadeIn();
                $('#pop_box2').fadeIn();
                $('#pop_content2').fadeIn();
                return false;
            }); 
            
            $('#close_modal1').click(function(){
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
        
        
        <script>
        $(document).ready(function() {
            $('#stdedit2').click(function(){
                $('#pop_background5').fadeIn();
                $('#pop_box5').fadeIn();
                $('#pop_content5').fadeIn();
                return false;
            }); 
            
            $('#close_modal2').click(function(){
                $('#pop_background5').fadeOut();
                $('#pop_box5').fadeOut();
                $('#pop_content5').fadeOut();
                return false;
            });
            
            
        });
        
            $('#pop_background5').click(function() {
                $('#pop_background5').fadeOut();
                $('#pop_box5').fadeOut();
                $('#pop_content5').fadeOut();
                return false;
            
        });
        
    
        </script>

<script>
        $(document).ready(function() {
            $('#stdedit3').click(function(){
                $('#pop_background6').fadeIn();
                $('#pop_box6').fadeIn();
                $('#pop_content6').fadeIn();
                return false;
            }); 
            
            $('#close_modal3').click(function(){
                $('#pop_background6').fadeOut();
                $('#pop_box6').fadeOut();
                $('#pop_content6').fadeOut();
                return false;
            });
            
            
        });
        
            $('#pop_background6').click(function() {
                $('#pop_background6').fadeOut();
                $('#pop_box6').fadeOut();
                $('#pop_content6').fadeOut();
                return false;
            
        });
        
    
        </script>

        

        <script type="text/javascript">
            $(document).ready(function() {
                $('#province').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {province: $(this).val()},
                        url: 'selectaddress.php',
                        success: function(data) {
                            $('#amphur').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#amphur').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {amphur: $(this).val()},
                        url: 'selectaddress1.php',
                        success: function(data) {
                            $('#district').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#province1').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {province1: $(this).val()},
                        url: 'selectaddress3.php',
                        success: function(data) {
                            $('#amphur1').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#amphur1').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {amphur1: $(this).val()},
                        url: 'selectaddress4.php',
                        success: function(data) {
                            $('#district1').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#education').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {education: $(this).val()},
                        url: 'selecteducation.php',
                        success: function(data) {
                            $('#educationpart').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#education1').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {education1: $(this).val()},
                        url: 'selecteducation1.php',
                        success: function(data) {
                            $('#educationpart1').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#educationpart1').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {educationpart1: $(this).val()},
                        url: 'selecteducationpart.php',
                        success: function(data) {
                            $('#trainer1').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
        <script>
        $(document).ready(function() {
            $('#editpicture').click(function(){
                $('#pop_background7').fadeIn();
                $('#pop_box7').fadeIn();
                $('#pop_content7').fadeIn();
                return false;
            }); 
            
            $('#close_modal5').click(function(){
                $('#pop_background7').fadeOut();
                $('#pop_box7').fadeOut();
                $('#pop_content7').fadeOut();
                return false;
            });
            
            
        });
        
            $('#pop_background7').click(function() {
                $('#pop_background7').fadeOut();
                $('#pop_box7').fadeOut();
                $('#pop_content7').fadeOut();
                return false;
            
        });
        
    
        </script>
        <script>
        $(document).ready(function() {
            $('#editpass').click(function(){
                $('#pop_background4').fadeIn();
                $('#pop_box4').fadeIn();
                $('#pop_content4').fadeIn();
                return false;
            }); 
            
            $('#close_modal4').click(function(){
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
 <script type="text/javascript">
        function Preview(ele) {
            $('#img').attr('src', ele.value);
                if (ele.files && ele.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(ele.files[0]);
            }
        }
        </script>
        
        
       
    <!-- end: JavaScript-->
    

    
</body>
</html>


<?php
}
?>  

    


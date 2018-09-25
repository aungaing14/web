

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
    

?>



<div id="pop_background2"></div>
        <div id="pop_box2">
            <div id="pop_content2">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขข้อมูลส่วนตัว
                </div>
                <form class="form-horizontal" action="trainerupdate.php" id="form_submit" method="post">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสผู้ใช้  : </label>
                                <?php
                                    $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                                ?>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" readonly required name="txttrainer_id" value='<?php echo $nti['trainer_id'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">คำนำหน้า : </label>
                                <?php
                                    $strSQL = "SELECT a.trainer_id,b.title_name FROM trainer a INNER JOIN title b ON a.title_id=b.title_id WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
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
                                    $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-3">ชื่อ : </label>
                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txttrainer_name" value='<?php echo $nti['trainer_name'];?>'>    
                                <?php }?>
                                </div>
                            <?php
                                    $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                    $objQuery = mysql_query($strSQL);
                            ?>
                                <label class="control-label col-sm-2">นามสกุล : </label>
                                <div class="col-sm-3">
                                    <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input class="form-control" name="txttrainer_lname" value='<?php echo $nti['trainer_lname'];?>'>    
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">เบอร์โทรศัพท์ : </label>
                                <?php
                                    $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                $objQuery = mysql_query($strSQL) or die(mysql_error());
                            ?>

                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input type="text" class="form-control"  name="txttrainer_tel" value='<?php echo $nti['trainer_tel'];?>'>
                                <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">แผนก/สาขาวิชา : </label>
                                <?php
                                    $strSQL = "SELECT a.trainer_id,b.educationpart_id,b.educationpart_name FROM trainer a INNER JOIN educationpart b ON a.educationpart_id=b.educationpart_id WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                $objQuery = mysql_query($strSQL) or die(mysql_error());
                            ?>

                                <div class="col-sm-3">
                                <?php
                                    while ($nti=mysql_fetch_array($objQuery)){  
                                ?>
                                    <input type="text" class="form-control" readonly required name="txttitle_name" value='<?php echo $nti['educationpart_name'];?>'>
                                <?php }?>
                                </div>
                            </div>


<div class="form-group">
                                <label class="control-label col-sm-3">คุณวุฒิ : </label>
                                <?php
                                    $strSQL1 = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                    $objQuery1 = mysql_query($strSQL1) or die(mysql_error());
                                                            
                                ?>
                                <div class="col-sm-8">
                                <?php
                                    while ($nti1=mysql_fetch_array($objQuery1)){  
                                    ?>
                                    <input type="text" class="form-control" name="txtqua" value='<?php echo $nti1['qualification'];?>'>
                                <?php }?>        
                                </div>
                            </div>

<div class="form-group">
                                <label class="control-label col-sm-3">ประสบการณ์ : </label>
                                <?php
                                    $strSQL1 = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                    $objQuery1 = mysql_query($strSQL1) or die(mysql_error());
                                                            
                                ?>
                                <div class="col-sm-8">
                                <?php
                                    while ($nti1=mysql_fetch_array($objQuery1)){  
                                    ?>
                                    <input type="text" class="form-control" name="txtexper" value='<?php echo $nti1['exper'];?>'>
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
         <div id="pop_background5"></div>
        <div id="pop_box5">
            <div id="pop_content5">
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขรูปประจำตัว
                </div>
                <form name="form1" method="post" action="uploadpictrainer.php?trainer_id=<?php echo $_SESSION['trainer_id'];?>"  enctype="multipart/form-data">
               
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
            <div id="pop_background4"></div>
        <div id="pop_box4">
            <div id="pop_content4"> 
                <div id="pop_header">
                   
                            <i class="icon-edit"></i> แก้ไขรหัสผ่าน
                </div>
                <form class="form-horizontal" action="trainereditpass.php?trainer_id=<?php echo $_SESSION['trainer_id'];?>" id="form_submit" method="post">
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
                                    <input class="form-control" required="required"  name="repassword" type="password" >       
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
                

                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3 panel-body">
                        <!-- tab menu -->
                         <ul class="list-table" style="padding-left: 5px;">
                            <li>
                                <?php
                            $strSQL = "SELECT * FROM images WHERE id_image = '".$_SESSION['trainer_id']."' ";
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
                                                            </label></h5>
                            </li>
                        </ul>
                        
                        <hr>
                        
                        <ul class="list-group list-group-tabs" style="cursor:pointer;">
                             <li class="list-group-item active"><a id="editpicture" data-toggle="tab" aria-expanded="true"><i class=" icon-picture"></i> แก้ไขรูปประจำตัว</a></li>
                            <li class="list-group-item"><a id="editpass" data-toggle="tab" aria-expanded="false"><i class=" icon-edit"></i> แก้ไขรหัสผ่าน</a></li>
                        </ul>
                        
                    
                        
                    </div> 

           
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="panel-body">
                                    <div class="panel panel-teal">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="icon-pencil"></i> ข้อมูลส่วนตัว</h3>
                                        </div>
                                        <div class="panel-body" id="data_panel">
                                            <div class="form-horizontal"> 
                                                <div class="col-md-12"> 
                                                    <div class="panel-collapse pull-right out">
                                                        <button type="button" class="btn btn-primary btn-lg" id="traineredit"><i class="icon-pencil"></i> แก้ไขข้อมูล</button>
                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-12"> 
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">รหัสอาจารย์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                            <div class="col-sm-7">
                                                                <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['trainer_id'];?>'><?php echo $nti['trainer_id'];?>

                                                                <?php }?>
                                                                </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ชื่อ - สกุล : </label>
                                                        <?php
                                                            $strSQL1 = "SELECT a.trainer_id,b.title_name FROM trainer a INNER JOIN title b ON a.title_id=b.title_id WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery1 = mysql_query($strSQL1) or die(mysql_error());
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                            <?php
                                                                    while ($nti1=mysql_fetch_array($objQuery1)){  
                                                            ?>
                                                            <label style="font-weight: normal" class="control-label" value='<?php echo $nti1['title_name'];?>'><?php echo $nti1['title_name'];?>

                                                            <?php }?>
                                                            </label>

                                                            <?php
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
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">เบอร์โทรศัพท์ : </label>
                                                    <?php
                                                            $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
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
                                    
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">สถานศึกษานักศึกษา : </label>
                                                    <?php
                                                            $strSQL = "SELECT a.trainer_id,b.education_id,b.education_name FROM trainer a INNER JOIN education b ON a.education_id=b.education_id WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                             <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['education_name'];?>'><?php echo $nti['education_name'];?>

                                                            <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">แผนก/สาขาวิชา : </label>
                                                        <?php
                                                            $strSQL = "SELECT a.trainer_id,b.educationpart_id,b.educationpart_name FROM trainer a INNER JOIN educationpart b ON a.educationpart_id=b.educationpart_id WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
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
                                                        <label class="col-sm-3 control-label">คุณวุฒิ : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                             <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['qualification'];?>'><?php echo $nti['qualification'];?>

                                                            <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>

<div class="col-sm-12">
                                                        <label class="col-sm-3 control-label">ประสบการณ์ : </label>
                                                        <?php
                                                            $strSQL = "SELECT * FROM trainer WHERE trainer_id = '".$_SESSION['trainer_id']."' ";
                                                            $objQuery = mysql_query($strSQL);
                                                            
                                                        ?>
                                                        <div class="col-sm-7">
                                                             <?php
                                                                    while ($nti=mysql_fetch_array($objQuery)){  
                                                                ?>
                                                                <label style="font-weight: normal" class="control-label" value='<?php echo $nti['exper'];?>'><?php echo $nti['exper'];?>

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

                    </div><!--/.fluid-container-->
                    <!-- end: Content -->
                </div><!--/#content.span10-->
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
        $(document).ready(function() {
            $('#traineredit').click(function(){
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
         <script>
        $(document).ready(function() {
            $('#editpicture').click(function(){
                $('#pop_background5').fadeIn();
                $('#pop_box5').fadeIn();
                $('#pop_content5').fadeIn();
                return false;
            }); 
            
            $('#close_modal5').click(function(){
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
     
</body>
<?php
}
?>
</html>
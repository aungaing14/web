<meta charset="utf-8">
<?php
session_start(); 
include("connect.php");
?>
 
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
    <style type="text/css">
            body { background: url(images/bg-login.jpg) !important; }
        </style>
  
</head>

<body>

        <div id="pop_box1">
            <div id="pop_content">
                <div id="pop_header">
                    <i class="icon-edit"></i> ลงทะเบียนปฏิบัติประสบการณ์วิชาชีพครู
                </div>
                <form class="form-horizontal" action="regisrequire.php" method="post" id="form_submit">
                        <div id="pop_body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสนักศึกษา : </label>
                                <div class="col-sm-3">
                                    <input class="form-control" name="std_code" required="required">

                                </div>
                                <label style="text-align: left;" class="control-label col-sm-5">(ตัวอย่าง 565232030xxx) *** ไม่ใส่ขีด</label>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3">คำนำหน้าชื่อ : </label>
                                <div class="col-sm-3">
                                    <div id="" class="">
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
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชื่อ : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="std_fname" required="required">
                                </div>
                                <label class="control-label col-sm-2">นามสกุล : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="std_lname" required="required">
                                </div>
                            </div>
                            
                           
                           
                            <div class="form-group">
                                <label class="control-label col-sm-3">ชั้นปี : </label>
                                <div class="col-sm-3">
                                    <?php
                                            include("connect.php");
                                            $sqltitle3="SELECT * FROM class ORDER BY class_id ASC ";
                                            $result3=mysql_query($sqltitle3);
                                           
                                        ?>
                                        <select class="form-control" name="class" required="required">
                                            <option value="">เลือกชั้นเรียน</option>
                                            <?php
                                                 while ($nti3=mysql_fetch_array($result3)){  
                                            ?>
                                            <option value='<?php echo $nti3['class_id'];?>'><?php echo $nti3['class_name'];?>
                                            
                                            <?php }?>
                                        </select>          
                                </div>
                                <label class="control-label col-sm-2">คณะ : </label>
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
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">สาขา : </label>
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
                                            $sqltitle6="SELECT * FROM   branch ORDER BY     branch_id ASC ";
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
                            <div class="form-group">
                                <label class="control-label col-sm-3">รหัสผ่าน : </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" required="required" name="password">       
                                </div>
                                
                            </div>
   
                            
                        </div>
                        <div id="pop_footer">
                            <button type="submit" class="btn btn-primary" name="stdregis"><i class="icon-save"></i> ลงทะเบียน</button>
                            <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("loginstd.php")'><i class="icon-remove"></i> ปิด</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    
    
       
    
    
        
        
        
        
    
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
        
                $('#pop_box1').show();
                $('#pop_content').show();
                return false;

        });
     

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#yearid').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {yearid: $(this).val()},
                        url: 'selecttermstd.php',
                        success: function(data) {
                            $('#termid').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>

        
        
       
    <!-- end: JavaScript-->
    
    
    
</body>
</html>


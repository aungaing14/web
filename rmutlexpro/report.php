

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
<style>
    
    #stepsContainer {
    text-align: center;
}

.stepsBox {
    padding-bottom: 60px;
}

.claimSteps {
    padding-top: 40px;
    width: 335px;
    height: 230px;
    background-color: #2dccd3;
    color: #ffffff;
    text-align: center;
}

.claimStepNumber {
    font-size: 38px;
    background-color: #ffffff;
    color: #2dccd3;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    margin-left: 135px;
}

.claimStepTitle {
    color: #ffffff;
    font-size: 18px;
}

.claimStepText {
    text-align: center;
    margin-left: 10%;
    width: 80%;
}
</style>
<body>

<?php

include("connect.php");

?>


<div id="main">
<nav class="navbar navbar-default">
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    
                    <a class="brand"><span style="font-size:30px">&nbsp;ครุศาสตร์อุตสาหกรรมบัณฑิตวิศวกรรมศาสตร์</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" href="#">
                                <i class="fa fa-user" style="color: #0099e6"></i> 

                            </a>
                        </li>
                    </ul>
                </div>
                
            </div><!-- /.container-fluid -->
        </div>
    </nav>


            
            <!-- start: Content -->
            <div id="content" class="span10">
              <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("index.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                        </div>
                
               <div class="container">
    <div class="claimHead col-md-12">
        <div align="center" class="submitHeader" style="margin-top: 60px; margin-bottom: 60px; margin-left: 30px;color: #24a2a8;">
            <h1 style="font-size: 30px;">รายงานสรุป</h1>
            <p style="font-size: 18px;">นักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</p>
        </div>
        <div id="stepsContainer" align="center">
            <div class="col-md-4 stepsBox"><a style="text-decoration:none;" href="reportbranch.php">
                <div class="claimSteps" id="stepOne">
                    <p class="claimStepNumber"><i class=" icon-user"></i></p>
                    <p class="claimStepTitle">นักศึกษา</p>
                    <p class="claimStepText">สรุปรายชื่อนักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</p>
                </div></a>
            </div>
            <div class="col-md-4 stepsBox"><a style="text-decoration:none;" href="reportbranchtch.php">
                <div class="claimSteps" id="stepTwo">
                    <p class="claimStepNumber"><i class=" icon-user"></i></p>
                    <p class="claimStepTitle">อาจารย์นิเทศก์</p>
                    <p class="claimStepText">สรุปรายชื่ออาจารย์นิเทศก์ ปฏิบัติประสบการณ์วิชาชีพครู</p>
                </div></a>
            </div>
            <div class="col-md-4 stepsBox"><a style="text-decoration:none;" href="reportedu.php">
                <div class="claimSteps" id="stepThree">
                    <p class="claimStepNumber"><i class=" icon-home"></i></p>
                    <p class="claimStepTitle">สถานศึกษา</p>
                    <p class="claimStepText">สรุปรายชื่อสถานศึกษา<br>ปฏิบัติประสบการณ์วิชาชีพครู</p>
                </div></a>
            </div>
        </div>
    </div>
</div>

             <div class="container">
    <div class="claimHead col-md-12">
        <div id="stepsContainer" align="center">
            <div class="col-md-4 stepsBox"><a style="text-decoration:none;" href="reportbranchtr.php">
                <div class="claimSteps" id="stepOne">
                    <p class="claimStepNumber"><i class=" icon-user"></i></p>
                    <p class="claimStepTitle">อาจารย์พี่เลี้ยง</p>
                    <p class="claimStepText">สรุปรายชื่ออาจารย์พี่เลี้ยงปฏิบัติประสบการณ์วิชาชีพครู</p>
                </div></a>
            </div>
            <div class="col-md-4 stepsBox"><a style="text-decoration:none;" href="reportyear.php">
                <div class="claimSteps" id="stepTwo">
                    <p class="claimStepNumber"><i class=" icon-file-alt"></i></p>
                    <p class="claimStepTitle">ปีการศึกษา</p>
                    <p class="claimStepText">สรุปปีการศึกษาปฏิบัติประสบการณ์วิชาชีพครู</p>
                </div></a>
            </div>
          
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
        <script>
        $(document).ready(function() {
            $('#adduser').click(function(){
                $('#pop_background2').fadeIn();
                $('#pop_box2').fadeIn();
                $('#pop_content2').fadeIn();
                return false;
            }); 
            
            $('#close').click(function(){
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
            $('#showadmin').click(function(){
                $('#pop_background3').fadeIn();
                $('#pop_box3').fadeIn();
                $('#pop_content3').fadeIn();
                return false;
            }); 
            
            $('#close').click(function(){
                $('#pop_background3').fadeOut();
                $('#pop_box3').fadeOut();
                $('#pop_content3').fadeOut();
                return false;
            });
            
             
        });
        
            $('#pop_background3').click(function() {
                $('#pop_background3').fadeOut();
                $('#pop_box3').fadeOut();
                $('#pop_content3').fadeOut();
                return false;
            
        });
        
    
        </script>
        
        
        
       
    <!-- end: JavaScript-->
    

    
</body>
</html>




    


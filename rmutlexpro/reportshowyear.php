

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
$branch_id=$_GET['branch_id'];
$year_id=$_GET['year_id'];
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
                
                
                <div class="row">
                 

<div class="tab-pane active" id="stdpro">
        <div class="panel-body">
          <div class="form-horizontal">
            
              <div class="panel-body">                  
                <div class="col-sm-12">
                <div align="right">
                            
                                <button type="button" class="btn btn-primary btn-lg" id="adduser" style="background-color:#80bfff;border-color: #80bfff;; color:#fff" onclick='location.replace("reportyear.php")'><i class="icon-arrow-left"></i> กลับสู่หน้าหลัก</button>  
                        </div>
                  <div class="form-group">


      <div><br></div>


      <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">ภาคเรียนที่ 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">ภาคเรียนที่ 2</a>
  </li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
      <div class="table-responsive panel-collapse pull out">
      <br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class=" icon-user"></i><strong> รายชื่อนักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold;">
                                        <td style="width:10%;text-align:center">ลำดับ</td>
                                        <td style="width:35%;text-align:center">ชื่อ - สกุล</td>
                                        <td style="width:15%;text-align:center">ชั้นปี</td>
                                        <td style="width:35%;text-align:center">หลักสูตร</td>
                                  
                                    </tr>
                                    
                                    <tr>
                                    <?php   
                                    $i='0';
                                    $no=$year_id+'10000';

                                    $strSQL1 = "SELECT * FROM termyear WHERE year_id='$year_id' AND termyear_id='$no'";
    $objQuery1 = mysql_query($strSQL1);
        $nti1=mysql_fetch_array($objQuery1);
            $term=$nti1['termyear_id'];


    $strSQL = "SELECT * FROM studentsave WHERE term_id='$term' AND branch_id=$branch_id ";
    $objQuery = mysql_query($strSQL);
    while ($nti=mysql_fetch_array($objQuery)){ 
 
    $i=$i+'1'; 
                                        ?>
                                        <td style="text-align:center"><?php echo $i;?></td>
                                   
                                        <td style="text-align:center"><?php echo $nti['studentsave_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['studentsave_lname'];?></td>
                                        <td style="text-align:center"><?php $classid=$nti['class_id'];
                                        $strSQL1 = "SELECT * FROM class WHERE class_id=$classid ";
                                        $objQuery1 = mysql_query($strSQL1);
                                        $nti1=mysql_fetch_array($objQuery1);
                                        echo $nti1['class_name'];

                                        ?></td>
                                        <td style="text-align:center"><?php $branch_id=$nti['branch_id'];
                                            $strSQL1 = "SELECT * FROM branch WHERE branch_id=$branch_id ";
                                        $objQuery1 = mysql_query($strSQL1);
                                        $nti1=mysql_fetch_array($objQuery1);
                                        echo $nti1['branch_name'];
                                        ?></td>
                                
                                       
                                                                        
                                    </tr>
                                   <?php }?> 
                                   
                                </tbody>
                            </table>    
                        </div>
  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
  <br>
    <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align:left" class="success" colspan="10"><i class=" icon-user"></i><strong> รายชื่อนักศึกษาปฏิบัติประสบการณ์วิชาชีพครู</strong></td>
                                    </tr>
                                    <input type="hidden" id="val1" value="0">
                                    <tr style="font-weight:bold;">
                                        <td style="width:10%;text-align:center">ลำดับ</td>
                                        <td style="width:35%;text-align:center">ชื่อ - สกุล</td>
                                        <td style="width:15%;text-align:center">ชั้นปี</td>
                                        <td style="width:35%;text-align:center">หลักสูตร</td>
                                                                         
                                    </tr>
                                    
                                    <tr>
                                    <tr>
                                    <?php   
                                    $i='0';
                                    $no=$year_id+'20000';

                                    $strSQL1 = "SELECT * FROM termyear WHERE year_id='$year_id' AND termyear_id='$no'";
    $objQuery1 = mysql_query($strSQL1);
        $nti1=mysql_fetch_array($objQuery1);
            $term=$nti1['termyear_id'];


    $strSQL = "SELECT * FROM studentsave WHERE term_id='$term' AND branch_id=$branch_id ";
    $objQuery = mysql_query($strSQL);
    while ($nti=mysql_fetch_array($objQuery)){ 
 
    $i=$i+'1'; 
                                        ?>
                                        <td style="text-align:center"><?php echo $i;?></td>
                                   
                                        <td style="text-align:center"><?php echo $nti['studentsave_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nti['studentsave_lname'];?></td>
                                        <td style="text-align:center"><?php $classid=$nti['class_id'];
                                        $strSQL1 = "SELECT * FROM class WHERE class_id=$classid ";
                                        $objQuery1 = mysql_query($strSQL1);
                                        $nti1=mysql_fetch_array($objQuery1);
                                        echo $nti1['class_name'];

                                        ?></td>
                                        <td style="text-align:center"><?php $branch_id=$nti['branch_id'];
                                            $strSQL1 = "SELECT * FROM branch WHERE branch_id=$branch_id ";
                                        $objQuery1 = mysql_query($strSQL1);
                                        $nti1=mysql_fetch_array($objQuery1);
                                        echo $nti1['branch_name'];
                                        ?></td>
                                
                                        
                                                                        
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



    


<?php
session_start();

if(!isset($_SESSION['user_session']))
{
  header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="AppCtrl">
<head>

        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script src="js/prism.js"></script>
  
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iQ System</title>
 
    <!-- start: Css -->
     <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="logo.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    </script>
    <style>
      /*body {
    background:#f0f0f0;
}*/
/*.nav {
    left:50%;
    margin-left:-150px;
    top:50px;
    position:absolute;
}*/

.nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background:#fff;
}
.dropdown {
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    width:300px;    
}

.dropdown-menu>li>a {
    color:#428bca;
}

.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:20px;
    width:300px;
}

.dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -10px;
    right: 16px;
    z-index: 10;
}

.dropdown ul.dropdown-menu:after {
    content: "";
    border-bottom: 12px solid #ccc;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    right: 14px;
    z-index: 9;
}
#left-menu .sub-left-menu {
    background-color: #000;
    left: 0;
    padding-top: 50px;
    z-index: 222;
    width: 230px;
    height: 90%;
    border-radius: 5px;
    position: fixed;
    overflow-y: hidden;
    -webkit-box-shadow: 0 2px 5px 0 rgba(239, 235, 235, 0.16), 0 2px 10px 0 rgba(72, 70, 70, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(239, 235, 235, 0.16), 0 2px 10px 0 rgba(72, 70, 70, 0.12);
    -ms-box-shadow: 0 2px 5px 0 rgba(239, 235, 235, 0.16), 0 2px 10px 0 rgba(72, 70, 70, 0.12);
    -o-box-shadow: 0 2px 5px 0 rgba(239, 235, 235, 0.16), 0 2px 10px 0 rgba(72, 70, 70, 0.12);
    box-shadow: 0 2px 5px 0 rgba(239, 235, 235, 0.16), 0 2px 10px 0 rgba(72, 70, 70, 0.12);
}
    </style>
  </head>

 <body id="mimin" class="dashboard">
    
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <!-- <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div> -->
                <a href="#"> 
                <img src="logo.png" style="float: left;">
                 <!-- <b>MIMIN</b> -->
                </a>


        <!--Search Form-->
        <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>
        
        <!--/.Search Form-->

      <ul class="nav navbar-nav right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>&nbsp;Hi' <?php echo $row['user_name']; ?>&nbsp;</span><span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.php">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
              
            </div>
          </div>
        </nav>
      <!-- end: Header -->

     
  
          <!-- start:Left Menu -->
<div class="row">
  <div class="col-md-1">
    <div class="container-fluid mimin-wrapper">
      <div id="left-menu">
        <div class="sub-left-menu scroll">
          <ul class="nav nav-list">
                   
  <li class="active ripple">
    <a class="tree-toggle nav-header"><span class="fa-windows fa"></span> REGISTRATION
      <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                     
        <ul class="nav nav-list tree">
          <!-- <li><a href="php/change_pass.php">Change Password</a></li> -->
                          
            
                          <li><a href="form.php"> Admit Staff</a></li>
                          <li><a href="student_reg.php">Admit Student</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-calendar-check-o"></span>MANAGEMENT
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="student records/index.php">Student Records</a></li>
                        
                        <li><a href="staff records/index.php">Staff Records</a></li>
                        <li><a href="#">Transfer Forms</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> COMPUTATIONS
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="">Staff List</a></li>
                        <li><a href="#">Student List</a></li>
                        <li><a href="#">Class List</a></li>
                        <li><a href="#">Report Card per Class</a></li>
                        <!-- <li><a href="#">Report Card per Student</a></li>
                        <li><a href="#">Transcripts</a></li>
                        <li><a href="#">Mark Sheets</a></li>
                        <li><a href="#">Fees Payments</a></li> -->
                        
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-file-text"></span> LIBRARY <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="#">Borrow Books</a></li>
                        <li><a href="#">Return Books</a></li>
                        <li><a href="#">Library Registration</a></li>
                        
                  </ul>
                </li>
                <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-bar-chart"></span>STATISTICS  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="#">Staff enrollment</a></li>
                        <li><a href="#">Student Enrolment</a></li>
                        <li><a href="#">Income per/class</a></li>
                        <li><a href="#">Expenses</a></li>
                        <li><a href="#">Balance Sheet</a></li>

                  </ul>
                </li> 
                <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-book"></span> SETTINGS  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="#">View Profiles</a></li>
                        <li><a href="#">Edit Profiles</a></li>
                  </ul>
                </li> 
              </div>
            </div>
          </div>
        </div>
      
       
    
<!-- <div class="heading-bar">
    <span class="heading-one"><img ng-src="{{img}}" width="48"
                                   height="100"> {{title}}</span> -->

          <!-- end: Left Menu -->
      
          <!-- start: content -->
          <div class="content">
           <div class="row">
           
            <div class="col-md-12">
              <div id="content">
                <div class="panel">
                    <!-- Modal Trigger -->
  
          
                 <!--  <div class="panel-body"> 
                  

                   <div ng-view>
                     
                   </div>
                   </div> -->
                  </div>
                </div>
              </div>
            </div> 

                        


    
          <!-- start: right menu -->
            <!-- <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">



                </li>
              </ul>
            </div> -->

            
                    
       <!-- end: Mobile -->

  <!-- start: Javascript -->
    <script src="asset/js/jquery-2.1.4.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>

    <script src="asset/js/angular.min.js"></script>
    <script src="asset/js/angular-route.js"></script>
    <script src="asset/js/app.js"></script>
    <script src="asset/js/services.js"></script>
    <script src="asset/js/controllers.js"></script>
    <script src="asset/js/filters.js"></script>
    <script src="asset/js/directives.js"></script>

    <!-- custom -->
     <script src="asset/js/main.js"></script>
     <script src="asset/js/mainn.js"></script>
     <script src="asset/js/datepicker.js"></script>
     </script>
  <!-- end: Javascript -->

  
      
  </script>
  </body>
</html>
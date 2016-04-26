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
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iQ System</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  
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
      body {
    background:#f0f0f0;
}


    </style>
  </head>

 <body id="mimin" class="dashboard">
 <script type="text/ng-template" id="pages/index.html">
      <h1>Home</h1>
    </script>
    <script type="text/ng-template" id="pages/student.html">
      <h1>Home</h1>
    </script>
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
             <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="#"> 
                <img src="logo.png" style="float: left;">
                
                </a>

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
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li ng-class="{ selected: isActive('/form')}"><a href="#/form">Staff Registration</a></li>
                          <li ng-class="{ selected: isActive('/student_reg')}"><a href="#/student_reg">Student Registration</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-calendar-check-o"></span> MANAGE
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                         <li><a href="student records/index.php">Student Records</a></li>
                        
                        <li><a href="staff records/index.php">Staff Records</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> COMPUTATION
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li ng-class="{ selected: isActive('/staff_list')}"><a href="#/staff_list">Staff List</a></li>
                        <li ng-class="{ selected: isActive('/student_list')}"><a href="#/student_list">Student List</a></li>
                        <li><a href="morris.html">Class List</a></li>
                        <li><a href="flot.html">Report Card per Class</a></li>
                        <li><a href="sparkline.html">Report Card per Student</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Payments  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="color.html">Fees Payment</a></li>
                        <li><a href="weather.html">Other Payment</a></li>
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
                  <div class="panel-body"> 
                   <div ng-view>
                     
                   </div>
                   </div>
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
    <!--  <script src="asset/js/datepicker.js"></script> -->
     </script>
  <!-- end: Javascript -->
  </body>
</html>
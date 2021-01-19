<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/doctor/doc1.css">
<script type="text/javascript" src="js/doc.js"></script>

<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <!-- Font awesome link -->
    <link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>
	<title>Helth Care Center</title>

  <!-- Load Icon -->
  <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />
</head>
<body style="font-family: \"Times New Roman\",Times, serif;">
	<div class="container-fluid">
    <?php 
		if (isset($_SESSION['username'])) 
                {
                  $a = $_SESSION['username'];

                  $qu2 = "SELECT * FROM medical_officer where username = '$a'";
                  $viewresult1 = mysqli_query($con,$qu2);
                  $did = mysqli_fetch_assoc($viewresult1);

                } ?>
<!-- 		<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div> -->
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #0f3460; margin-top: 0.5%; border-radius: 1em; ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-12">
        <div class="row mt-4 pl-4">
            <a style="text-decoration: none; float: right; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="dashboard.php"><h1  class="text-light justify-content-left">Health Care Center - Dashboard |</h1></a>
            <h1 style="margin-left: 1%; color: yellow">Hello! <?php echo $did['full_name']; ?></h1>
          </div>
             

              

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i style="color: white; font-size: 40px;" class="fas fa-bars"></i>
            </button>
        </div>

        
        

        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" >
              <div class="dropdown-divider"></div>


<?php if($a == 'admin'){?>

           <li class="nav-item ml-4">
          <a class="" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; margin-left: -5%; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-users mr-3" style="color:white;  font-size:35px;"></i><b> Patients</b></a>

          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="view.php">Patients List</a>
                </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Schedule .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-calendar-check mr-3" style="color:white; font-size:35px;"></i><b>Schedule</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=16">Add Channel Schedule</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=2">View Channel Schedules</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=3">Past Channel Schedules</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=24">Add Tests Schedule</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=25">View Test Schedules</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=4">Past Test Schedules</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Test .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-18" aria-controls="submenu-1-18"><i class="fas fa-notes-medical mr-3" style="color:white; font-size:35px;"></i><b>Medical Tests</b></a>
          <div id="submenu-1-18" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=17">Add Medical Tests</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=27">View Medical Tests</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Test Appinments .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif; " aria-expanded="false"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-vial mr-3" style="color:white; font-size:35px;"></i><b>Tests Appoinments</b></a>
          <div id="submenu-1-10" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=28">Pending Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=29">Tested Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=30">Paid Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=31">Reported Test Appinment</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Channel Appinments .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif; " aria-expanded="false"  data-target="#submenu-1-20" aria-controls="submenu-1-20"><i class="fas fa-prescription-bottle-alt mr-3" style="color:white; font-size:35px;"></i><b>Channel Appoinments</b></a>
          <div id="submenu-1-20" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=18">Pending Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=21">Accepted Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=22">Paid Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=23">Rejected Channel </a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Doctor .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="dashboard.php" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="fas fa-user-md mr-3" style="color:white; font-size:35px;"></i><b> Doctor</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=8">Register Doctor</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=1">View Doctor</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Slider .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="dashboard.php" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-30" aria-controls="submenu-1-30"><i class="fas fa-pager mr-3" style="color:white; font-size:35px;"></i><b> Custome Page</b></a>
          <div id="submenu-1-30" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=20">Slide Manager</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=10">Banner Manager</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=11">Menu Banner Manager</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Medical Officer .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-8" aria-controls="submenu-1-8"><i class="fas fa-users-cog mr-3" style="color:white; font-size:35px;"></i><b>Medical Officers</b></a>
          <div id="submenu-1-8" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=14">View Workers List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=15">Add Workers</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse"style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:white; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="admin_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

<?php } else{ ?>

  <li class="nav-item ml-4">
          <a class="" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; margin-left: -5%; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-users mr-3" style="color:white;  font-size:35px;"></i><b> Patients</b></a>

          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="view.php">Patients List</a>
                </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Schedule .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-calendar-check mr-3" style="color:white; font-size:35px;"></i><b>Schedule</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=16">Add Channel Schedule</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=2">View Channel Schedules</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=3">Past Channel Schedules</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=24">Add Tests Schedule</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=25">View Test Schedules</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=4">Past Test Schedules</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Test .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-18" aria-controls="submenu-1-18"><i class="fas fa-notes-medical mr-3" style="color:white; font-size:35px;"></i><b>Medical Tests</b></a>
          <div id="submenu-1-18" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=17">Add Medical Tests</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=27">View Medical Tests</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Test Appinments .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif; " aria-expanded="false"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-vial mr-3" style="color:white; font-size:35px;"></i><b>Tests Appoinments</b></a>
          <div id="submenu-1-10" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=28">Pending Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=29">Tested Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=30">Paid Test Appinment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=31">Reported Test Appinment</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Channel Appinments .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif; " aria-expanded="false"  data-target="#submenu-1-20" aria-controls="submenu-1-20"><i class="fas fa-prescription-bottle-alt mr-3" style="color:white; font-size:35px;"></i><b>Channel Appoinments</b></a>
          <div id="submenu-1-20" class="collapse submenu"  style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=18">Pending Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=21">Accepted Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=22">Paid Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=23">Rejected Channel </a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Doctor .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="dashboard.php" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="fas fa-user-md mr-3" style="color:white; font-size:35px;"></i><b> Doctor</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=1">View Doctor</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Slider .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="dashboard.php" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" data-toggle="collapse" aria-expanded="false" style="font-size: 15px;" data-target="#submenu-1-30" aria-controls="submenu-1-30"><i class="fas fa-pager mr-3" style="color:white; font-size:35px;"></i><b> Custome Page</b></a>
          <div id="submenu-1-30" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=20">Slide Manager</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=10">Banner Manager</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="dashboard.php?id=11">Menu Banner Manager</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item ml-4">
          <a class="nav-link text-light" href="#" data-toggle="collapse"style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" style="font-size: 15px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:white; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="officer_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="officer_username_change.php">Change Username</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

<?php } ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content" style="background-color: white; border: none; width: 100%;">
                    <!-- <div class="row" style="background-color: white;"> -->
            
          
                  <?php

                  // <!-- **********************Start Students Treatments View Section Pannel ************************ -->

                  if(isset($_REQUEST['id']))
                  {

                                $id = $_REQUEST['id'];
                                 if($id==2)
                                 {

                                  if (isset($_POST['submit'])) {

                                    $search = $_REQUEST['search_box'];
                                    
                                      $count=1;
                                      // $viewquery = " SELECT * FROM schedule where sc_date = '".$search."' OR sc_time = '".$search."' ";
                                      $viewquery = " SELECT * FROM schedule where DATE(sc_date) >= DATE(CURRENT_DATE()) AND TIME(sc_time) > TIME(CURRENT_DATE()) AND sc_date = '".$search."'";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1"> Schedule Details </h1></br></a>



                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 15%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM doctor where did='".$row['docid']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['full_name'])) {
                                          $name = $row1['full_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table> </div>';



                                  }else{


                                      $count=1;
                                      $viewquery = " SELECT * FROM schedule where DATE(sc_date) >= DATE(CURRENT_DATE()) AND TIME(sc_time) > TIME(CURRENT_DATE())";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1"> Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM doctor where did='".$row['docid']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['full_name'])) {
                                          $name = $row1['full_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                  echo '<form class="form-inline col-6 mt-5" action="dashboard.php?id=2" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form> </div>';

                                }


                  // <!-- **********************End Students Treatments View Section Pannel ************************ -->
                  // <!-- **********************Start Students Treatments View Section Pannel ************************ -->

                  if(isset($_REQUEST['id']))
                  {

                                $id = $_REQUEST['id'];
                                 if($id==3)
                                 {

                                  if (isset($_POST['submit'])) {

                                    $search = $_REQUEST['search_box'];
                                    
                                      $count=1;
                                      // $viewquery = " SELECT * FROM schedule where sc_date = '".$search."' OR sc_time = '".$search."' ";
                                       $viewquery = " SELECT * FROM schedule where DATE(sc_date) < DATE(CURRENT_DATE()) AND  sc_date = '".$search."' ";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=3"><h1 class="student_h1"> Schedule Details </h1></br></a>



                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 15%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM doctor where did='".$row['docid']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['full_name'])) {
                                          $name = $row1['full_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table> </div>';



                                  }else{


                                      $count=1;
                                      $viewquery = " SELECT * FROM schedule where DATE(sc_date) < DATE(CURRENT_DATE())";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1"> Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM doctor where did='".$row['docid']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['full_name'])) {
                                          $name = $row1['full_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['doc_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['roomNo'].'</td>
                                          <td>'.$row['sc_date'].'</td>
                                          <td>'.$row['sc_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?sch_id='.$row['sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?sch_id='.$row['sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                  echo '<form class="form-inline col-6 mt-5" action="dashboard.php?id=3" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form> </div>';

                                }
                              }

                  // <!-- **********************End Students Treatments View Section Pannel ************************ -->
                  // <!-- **********************Start Students Treatments View Section Pannel ************************ -->

                  if(isset($_REQUEST['id']))
                  {

                                $id = $_REQUEST['id'];
                                 if($id==25)
                                 {


                                      $count=1;
                                      $viewquery = " SELECT * FROM test_schedule where DATE(test_date) >= DATE(CURRENT_DATE()) AND TIME(test_time) > TIME(CURRENT_DATE())";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1">Medical Test Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Medical Test </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM medical_test where test_id='".$row['test_id']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['test_name'])) {
                                          $name = $row1['test_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['test_date'].'</td>
                                          <td>'.$row['test_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?test_sch_id='.$row['test_sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?test_sch_id='.$row['test_sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['test_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['test_date'].'</td>
                                          <td>'.$row['test_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?test_sch_id='.$row['test_sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?test_sch_id='.$row['test_sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                }

                                  
                  // <!-- **********************End Students Treatments View Section Pannel ************************ -->
                   // <!-- **********************Start Students Treatments View Section Pannel ************************ -->

                  if(isset($_REQUEST['id']))
                  {

                                $id = $_REQUEST['id'];
                                 if($id==4)
                                 {


                                      $count=1;
                                      $viewquery = " SELECT * FROM test_schedule where DATE(test_date) < DATE(CURRENT_DATE())";
                                      $viewresult = mysqli_query($con,$viewquery);

                                      echo '
                                      <div class="view_div">
                                      <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1">Medical Test Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Medical Test </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
                                          <th style="width : 8%"> Edit </th>
                                          <th style="width : 10%"> Delete </th>  
                                        </tr>';

                                      while($row = mysqli_fetch_assoc($viewresult))
                                      {
                                        $viewquery1 = " SELECT * FROM medical_test where test_id='".$row['test_id']."'";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        if (isset($row1['test_name'])) {
                                          $name = $row1['test_name'];
                                          echo '
                                          <tr>
                                          <td>'.$name.'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['test_date'].'</td>
                                          <td>'.$row['test_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?test_sch_id='.$row['test_sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?test_sch_id='.$row['test_sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }else{
                                          echo '
                                          <tr>
                                          <td>'.$row['test_id'].'</td>
                                          <td>'.$row['description'].'</td>
                                          <td>'.$row['test_date'].'</td>
                                          <td>'.$row['test_time'].'</td>
                                          <td>'.$row['price'].'</td>
                                          <td>'.$row['trndate'].'</td>

                                          <td><a href="edit.php?test_sch_id='.$row['test_sch_id'].'">Edit</a></td>
                                          <td><a href="delete.php?test_sch_id='.$row['test_sch_id'].'">Delete</a></td>
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                }

                                  
                  // <!-- **********************End Students Treatments View Section Pannel ************************ -->

                   // <!-- **********************Start Test Appinment View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==28)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM test_appinment join test_schedule on test_schedule.test_sch_id = test_appinment.test_sch_id join medical_test on medical_test.test_id = test_schedule.test_id where tested ='Pending' AND paid='Pending' AND reported='Pending' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Pending Medical Test Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                    <th style="width : 15%"> Test Appinment Code </th>
                                    <th style="width : 10%"> Test Name </th>
                                    <th style="width : 10%"> Description </th>
                                    <th style="width : 10%"> Date</th>
                                    <th style="width : 8%"> Time </th>
                                    <th style="width : 8%"> Appinted Date </th>
                                    <th style="width : 10%"> Price </th>
                                    <th style="width : 10%"> Tested </th> 
                                    <th style="width : 10%"> Tested </th>  
                                    <th style="width : 10%"> Tested & Paid </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['test_appoinment_code'].'</td>
                                    <td>'.$row['test_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['test_date'].'</td>
                                    <td>'.$row['test_time'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['tested'].'</td>
                                    <td><a href="test_set.php?tested='.$row['test_appoinment_id'].'">Tested</a></td>
                                    <td><a href="test_set.php?testedpaid='.$row['test_appoinment_id'].'">Complete</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Test Appinment View Section Pannel ************************ -->
                  // <!-- **********************Start Test Appinment View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==29)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM test_appinment join test_schedule on test_schedule.test_sch_id = test_appinment.test_sch_id join medical_test on medical_test.test_id = test_schedule.test_id where tested ='Tested' AND paid='Pending' AND reported='Pending'";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Tested Medical Test Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                    <th style="width : 15%"> Test Appinment Code </th>
                                    <th style="width : 10%"> Test Name </th>
                                    <th style="width : 10%"> Description </th>
                                    <th style="width : 10%"> Date</th>
                                    <th style="width : 8%"> Time </th>
                                    <th style="width : 8%"> Appinted Date </th>
                                    <th style="width : 10%"> Price </th>
                                    <th style="width : 10%"> Tested </th> 
                                    <th style="width : 10%"> Pay </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['test_appoinment_code'].'</td>
                                    <td>'.$row['test_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['test_date'].'</td>
                                    <td>'.$row['test_time'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['tested'].'</td>
                                    <td><a href="test_set.php?pay='.$row['test_appoinment_id'].'">Pay</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Test Appinment View Section Pannel ************************ -->

                  // <!-- **********************Start Test Appinment View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==30)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM test_appinment join test_schedule on test_schedule.test_sch_id = test_appinment.test_sch_id join medical_test on medical_test.test_id = test_schedule.test_id where tested ='Tested' AND paid='Paided' AND reported='Pending' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Paided Medical Test Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                    <th style="width : 15%"> Test Appinment Code </th>
                                    <th style="width : 10%"> Test Name </th>
                                    <th style="width : 15%"> Description </th>
                                    <th style="width : 10%"> Date</th>
                                    <th style="width : 8%"> Time </th>
                                    <th style="width : 8%"> Appinted Date </th>
                                    <th style="width : 8%"> Price </th>
                                    <th style="width : 8%"> Tested </th>
                                    <th style="width : 8%"> Paid </th>
                                    <th style="width : 12%"> Complete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['test_appoinment_code'].'</td>
                                    <td>'.$row['test_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['test_date'].'</td>
                                    <td>'.$row['test_time'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['tested'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td><a href="test_set.php?reported='.$row['test_appoinment_id'].'">Send Report</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Test Appinment View Section Pannel ************************ -->
                  // <!-- **********************Start Test Appinment View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==31)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM test_appinment join test_schedule on test_schedule.test_sch_id = test_appinment.test_sch_id join medical_test on medical_test.test_id = test_schedule.test_id where tested ='Tested' AND paid='Paided' AND reported='Reported'";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Completed Medical Test Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                    <th style="width : 10%"> Test Appinment Code </th>
                                    <th style="width : 10%"> Test Name </th>
                                    <th style="width : 15%"> Description </th>
                                    <th style="width : 10%"> Date</th>
                                    <th style="width : 8%"> Time </th>
                                    <th style="width : 9%"> Appinted Date </th>
                                    <th style="width : 8%"> Price </th>
                                    <th style="width : 8%"> Tested </th>
                                    <th style="width : 8%"> Paid </th>
                                    <th style="width : 8%"> Reported </th>  
                                    <th style="width : 8%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['test_appoinment_code'].'</td>
                                    <td>'.$row['test_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['test_date'].'</td>
                                    <td>'.$row['test_time'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['tested'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td>'.$row['reported'].'</td>
                                    <td><a href="test_set.php?delete='.$row['test_appoinment_id'].'">Delete</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Test Appinment View Section Pannel ************************ -->


                  // <!-- **********************Start Channel Appinment View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==18)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM appinment join schedule on schedule.sch_id = appinment.sch_id join doctor on doctor.did = schedule.docid where accept ='Pending' AND paid='Pending' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Pending Channel Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                      <th style="width : 8%"> Appinment Code </th>
                                      <th style="width : 10%"> Doctor </th>
                                      <th style="width : 10%"> Description </th>
                                      <th style="width : 5%"> Room Number </th>
                                      <th style="width : 8%"> Date </th>
                                      <th style="width : 5%"> Time </th>
                                      <th style="width : 5%"> Price </th>  
                                      <th style="width : 5%"> Appinmented Date </th>  
                                      <th style="width : 5%"> Payment </th>  
                                      <th style="width : 5%"> Accept </th>  
                                      <th style="width : 5%"> Reject </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['apponment_code'].'</td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['roomNo'].'</td>
                                    <td>'.$row['sc_date'].'</td>
                                    <td>'.$row['sc_time'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td><a href="appinment_set.php?app_id='.$row['app_id'].'">Accept</a></td>
                                    <td><a href="appinment_set.php?reject_app='.$row['app_id'].'">Reject</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Channel Appinment View Section Pannel ************************ -->

                  // <!-- **********************Start Accept Channel View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==21)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM appinment join schedule on schedule.sch_id = appinment.sch_id join doctor on doctor.did = schedule.docid where accept ='Accepted' AND paid='Pending' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Accepted Channel Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                      <th style="width : 8%"> Appinment Code </th>
                                      <th style="width : 10%"> Doctor </th>
                                      <th style="width : 10%"> Description </th>
                                      <th style="width : 5%"> Room Number </th>
                                      <th style="width : 8%"> Date </th>
                                      <th style="width : 5%"> Time </th>
                                      <th style="width : 5%"> Price </th>  
                                      <th style="width : 5%"> Appinmented Date </th>  
                                      <th style="width : 5%"> Payment </th>  
                                      <th style="width : 5%"> Accept </th>  
                                      <th style="width : 5%"> Paid </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['apponment_code'].'</td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['roomNo'].'</td>
                                    <td>'.$row['sc_date'].'</td>
                                    <td>'.$row['sc_time'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td>'.$row['accept'].'</td>
                                    <td><a href="appinment_set.php?paid='.$row['app_id'].'">Pay</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Accept Channel Appinment View Section Pannel ************************ -->
                   // <!-- **********************Start Paid Channel View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==22)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM appinment join schedule on schedule.sch_id = appinment.sch_id join doctor on doctor.did = schedule.docid where accept ='Accepted' AND paid='Paided' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Completed Channel Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                      <th style="width : 8%"> Appinment Code </th>
                                      <th style="width : 10%"> Doctor </th>
                                      <th style="width : 10%"> Description </th>
                                      <th style="width : 5%"> Room Number </th>
                                      <th style="width : 8%"> Date </th>
                                      <th style="width : 5%"> Time </th>
                                      <th style="width : 5%"> Price </th>  
                                      <th style="width : 5%"> Appinmented Date </th>  
                                      <th style="width : 5%"> Payment </th>  
                                      <th style="width : 5%"> Accept </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['apponment_code'].'</td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['roomNo'].'</td>
                                    <td>'.$row['sc_date'].'</td>
                                    <td>'.$row['sc_time'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['paid'].'</td>
                                    <td>'.$row['accept'].'</td>
                                    <td><a href="appinment_set.php?delete='.$row['app_id'].'">Delete</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Paid Channel View Section Pannel ************************ -->
                   // <!-- **********************Start Reject Channel View Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==23)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM appinment join schedule on schedule.sch_id = appinment.sch_id join doctor on doctor.did = schedule.docid where accept ='Rejected' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1">Rejected Channel Appinments </h1></br>


                                  <table style="width : 100%;" class="student_table_new"> 
                                    <tr>
                                      <th style="width : 8%"> Appinment Code </th>
                                      <th style="width : 10%"> Doctor </th>
                                      <th style="width : 10%"> Description </th>
                                      <th style="width : 5%"> Room Number </th>
                                      <th style="width : 8%"> Date </th>
                                      <th style="width : 5%"> Time </th>
                                      <th style="width : 5%"> Price </th>  
                                      <th style="width : 5%"> Appinmented Date </th>  
                                      <th style="width : 5%"> Accept </th>   
                                      <th style="width : 5%"> Delete </th>   
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    echo '
                                    <tr>
                                    <td>'.$row['apponment_code'].'</td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['roomNo'].'</td>
                                    <td>'.$row['sc_date'].'</td>
                                    <td>'.$row['sc_time'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td>'.$row['accept'].'</td>
                                    <td><a href="appinment_set.php?rejectdelete='.$row['app_id'].'">Delete</a></td>
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Reject Channel View Section Pannel ************************ -->
                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                      $id = $_REQUEST['id'];
                        if($id==20)
                        {
                          echo '<div class="view_div">
                            <h1 class="form_title"> Promotion Slider Manager </h1><br><br><br><br>
                            <h4 class="form_title"> Slider Banner size is 1000 X 250</h4><br><br>

                            <button type="submit" onclick="window.location.href=\'image_upload.php\'" name="button" class="btn col-xl-4 btn-success" style="border-radius:20px; float:left;">Add Slider</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'chage_image_slider.php\'" name="button" class="btn col-xl-4 btn-success" style="border-radius:20px;float:left;">Edit Slider Images</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'remove_image.php\'" name="button" class="btn col-xl-4 btn-success" style="border-radius:20px; float:left;">Remove Slider</button>

                          </div>';
                          
                        }
                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                        // <!-- **********************End Slider galary Section Pannel ************************ -->
                      $id = $_REQUEST['id'];
                        if($id==10)
                        {
                          echo '<div class="view_div">
                            <h1 class="form_title"> Promotion Banner Manager </h1><br><br><br><br>
                            <h4 class="form_title"> Promotion Banner size is 1000 X 500</h4><br><br>

                            <button type="submit" onclick="window.location.href=\'banner_upload.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Add Banner</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'change_banner_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Change Banner Images</button><br><br><br>

                            <button type="submit" onclick="window.location.href=\'remove_banner.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px; float:left;">Remove Banner</button>

                          </div>';
                          
                        }

                  // <!-- **********************End Slider galary Section Pannel ************************ -->
                    // <!-- **********************End Slider galary Section Pannel ************************ -->
                      $id = $_REQUEST['id'];
                        if($id==11)
                        {
                          echo '<div class="view_div">
                            <h1 class="form_title"> Menu Banner Manager </h1><br><br><br><br>
                            <h4 class="form_title"> Menu Banner size is 500 X 250</h4><br><br>

                            <button type="submit" onclick="window.location.href=\'meni_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Menu Images</button><br><br><br>
                            <button type="submit" onclick="window.location.href=\'change_menu_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Change Menu Images</button><br><br><br>
                            <button type="submit" onclick="window.location.href=\'remove_menu_image.php\'" name="button" class="btn col-xl-4 btn-info" style="border-radius:20px;float:left;">Remove Menu Images</button><br><br><br>

                          </div>';
                          
                        }
                        
                  // <!-- **********************End Slider galary Section Pannel ************************ -->

                              
                  // <!-- **********************Start View Medical officer Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==14)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_officer";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1"> Medical Offices </h1></br>


                                  <table class="student_table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Name </th>
                                      <th style="width : 15%"> Address </th>
                                      <th style="width : 11%"> Phone Number </th>
                                      <th style="width : 10%"> Email </th>
                                      <th style="width : 8%"> Gender </th>
                                      <th style="width : 10%"> Regi Date </th>
                                      <th style="width : 5%"> Edit </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if(!empty($row['full_name']) && $row['username'] != 'admin'){

                                    echo '
                                    <tr>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td><a href="edit.php?off_id='.$row['office_id'].'">Edit</a></td>
                                    <td><a href="delete.php?office_id='.$row['office_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Medical officer Section Pannel ************************ -->
                  // <!-- **********************Start View Doctor Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==1)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM doctor";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1"> Doctor Details </h1></br>


                                  <table class="student_table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Name </th>
                                      <th style="width : 15%"> Address </th>
                                      <th style="width : 11%"> Phone Number </th>
                                      <th style="width : 10%"> Email </th>
                                      <th style="width : 8%"> Gender </th>
                                      <th style="width : 10%"> Register Date </th>
                                      <th style="width : 5%"> Edit </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if(!empty($row['full_name']) && $row['username'] != 'admin'){

                                    echo '
                                    <tr>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['trndate'].'</td>
                                    <td><a href="edit.php?doc_id='.$row['did'].'">Edit</a></td>
                                    <td><a href="delete.php?doc_id='.$row['did'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    }
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Doctor Section Pannel ************************ -->
                  // <!-- **********************Start View Medical test Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                if($id==27)
                                {
                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_test";
                                  $viewresult = mysqli_query($con,$viewquery);
                        

                                  echo '
                                  <div class="view_div">
                                  <h1 class="student_h1"> Medical Test Details </h1></br>


                                  <table class="student_table_new"> 
                                    <tr>
                                      <th style="width : 15%"> Medical Test Name </th>
                                      <th style="width : 15%"> Description </th>
                                      <th style="width : 11%"> Available </th>
                                      <th style="width : 5%"> Edit </th>  
                                      <th style="width : 5%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {

                                    echo '
                                    <tr>
                                    <td>'.$row['test_name'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['available'].'</td>
                                    <td><a href="edit.php?test_id='.$row['test_id'].'">Edit</a></td>
                                    <td><a href="delete.php?test_id='.$row['test_id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                    $count++;
                                    
                                  }
                                  echo '</table></div>';
                                }
                  // <!-- **********************End View Medical Test Section Pannel ************************ -->
                  // <!-- **********************Start Add Medical Officer Section Pannel ************************ -->

                              $id = $_REQUEST['id'];
                                 if($id==15)
                                 {


                                  echo '<form class="reg_form1" action="dashboard.php?id=15" method="POST">
                                      <h2 class="form_hed">Register Medical Officer </h2> </br>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="name" class="a"><b>Full Name</b></label>
                                          <input type="text" class="form-control" name="name" placeholder="Full Name">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Email</b></label>
                                          <input type="text" class="form-control" name="email" placeholder="Email Address">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="address"><b>Address</b></label>
                                        <input type="text" class="form-control"  name="address" placeholder="Address">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="phone"><b>Phone Number</b></label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputState"><b>Gender</b></label>
                                          <select id="inputState" name="gender" class="form-control">
                                            <option selected></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                         <div class="form-group col-md-6">
                                        <label for="phone"><b>Usename</b></label>
                                        <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="phone"><b>Password</b></label>
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-lg-6">
                                        <label for="phone"><b>Confirm Password</b></label>
                                        <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                                      </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                     <div class="form-row">
                                     <div class="form-group col-lg-6">
                                     <button type="submit" name="submit" class="btn col-xl-10 btn-light" style="border-radius:20px;">Register</button>
                                     </div>
                                     </div>
                                    ';
                                    if(isset($_POST['submit'])){
                                      $fname = $_REQUEST['name'];
                                      $emails = $_REQUEST['email'];
                                      $address = $_REQUEST['address'];
                                      $phone = $_REQUEST['phone'];
                                      $gender = $_REQUEST['gender'];
                                      $uname = $_REQUEST['uname'];
                                      $pass = $_REQUEST['pass'];
                                      $conf_pass = $_REQUEST['conf_pass'];
                                      $cdate = date("Y/m/d");


                                      if(!empty($fname)){
                                        if(!empty($emails)){
                                          if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                                            if(!empty($address)){
                                              if(!empty($phone)){
                                              if(!empty($gender)){
                                                if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                  if(!empty($gender)){
                                                    if(!empty($uname)){
                                                          if(!empty($pass)){
                                                            if(!empty($conf_pass)){
                                                              if($pass==$conf_pass){
                                                                  $query2="SELECT * FROM medical_officer WHERE email='$emails'";
                                                                      $sql2=mysqli_query($con,$query2);

                                                                      if(mysqli_num_rows($sql2)>0){
                                                                          echo "<script>alert(\"Email already Exsisted\");</script>";
                                                                      }else{
                                                                          $query3="SELECT * FROM medical_officer WHERE username='$uname'";
                                                                          $sql3=mysqli_query($con,$query3);

                                                                          if(mysqli_num_rows($sql3)>0){
                                                                              echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                          }else{
                                                                                $query3="SELECT * FROM doctor WHERE username='$uname'";
                                                                                $sql3=mysqli_query($con,$query3);

                                                                                if(mysqli_num_rows($sql3)>0){
                                                                                    echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                                }else{
                                                                                      $q1="INSERT INTO medical_officer(full_name,address,phone_number,email,gender,password,username,trndate) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname','$cdate')";
                                                                                            $res1=mysqli_query($con,$q1);
                                                                                            if ( $res1) {

                                                                                                 echo '<script>alert("Medical Officer Registration is Scussessfully.");
                                                                                                 window.location.href="dashboard.php";
                                                                                                              </script>';
                                                                                                
                                                                                            }else{
                                                                                              echo "<script>alert(\"Medical Officer Registration is Not Scussess\");</script>";
                                                                                            }
                                                                                      }
                                                                                }
                                                                            }
                                                              }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                                            }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                                          }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                                    }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                                  }else{ echo "<script>alert(\"Select Gender\");</script>";}
                                                }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                                                }else {echo "<script>alert(\"Select Your Gender\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Address\");</script>";}
                                          }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Email\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                                  }echo '</form></div>'; //Register Form Validation

                              }

                  // <!-- **********************End Add Medical Officer Section Pannel ************************ -->
                  // <!-- **********************Start Schedule Add Section Pannel ************************ -->
                  ?>
                  <style type="text/css">
                   .reg_form1_treat{
                    width: 50%;
                    background-color: #0f3460;
                    padding: 5%;
                    color: yellow;
                    border-radius: 2em;
                    font-family: \"Times New Roman\", Times, serif;
                    font-size: 18px;
                    margin-top: -4%;
                    float: left;
                   } 
                  .drug_table{
                    width: 49%;
                    margin-left: 1%;
                    margin-top: -1%;
                    float: right;
                  }

                  </style>
                  <?php
                               $id = $_REQUEST['id'];
                                   $cdate = date("Y/m/d");
                                 if($id==16)
                                 {
                                  


                                   echo '<form class="reg_form1_treat"   action="dashboard.php?id=16" method="POST">
                                      <h2 class="form_hed">Add Schedule </h2> </br>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                          <label for="inputState"><b>Doctor</b></label>
                                          <select id="inputState" name="doctor" class="form-control">
                                          <option selected></option>
                                          ';
                                            $q3 = "SELECT * FROM doctor";
                                              $res3 = mysqli_query($con,$q3);
                                              $c=1;
                                              while($row=mysqli_fetch_assoc($res3)){
                                                echo "<option>".$row['full_name']."</option>";
                                                $c++;
                                              }
                                          echo '</select>
                                        </div>
                                        </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                        <label for="desc"><b>Description </b></label>
                                        <input type="text" class="form-control" name="desc" placeholder="Description ">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                          <label for="inputState"><b>Room Number</b></label>
                                          <select id="inputState" name="room" class="form-control">
                                          <option selected></option>
                                          ';
                                            $room = array("1", "2", "3","4","5");
                                            $length = count($room);
                                              $c=0;
                                              while($length > $c){
                                                echo "<option>".$room[$c]."</option>";
                                                $c++;
                                              }
                                          echo '</select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                      <div class="form-group col-md-10">
                                        <label for="desc"><b>Price </b></label>
                                        <input type="text" class="form-control" name="price" placeholder="Price ">
                                      </div>
                                      </div>

                                          <label><b>Discount Start date</b></label>
                                     <div class="form-row">
                                        <div class="form-group col-md-6 text-dark">
                                          <input type="date" name="start_date" id="myDate">
                                        </div>
                                      </div>

                                     <div class="form-row">
                                        <label for="appt">Select a time:</label>
                                        <div class="form-group col-md-10 text-dark">
                                        <input type="time" id="appt" name="time">
                                      </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                    <div class="form-row">
                                      <button type="submit" name="submit" class="btn col-md-8 btn-light" style="border-radius:20px; font-size :20px;">Add Schedule</button>
                                     </div>
                                    ';

                                   
                                    if(isset($_POST['submit'])){
                                      $doctor = $_REQUEST['doctor'];
                                      $desc = $_REQUEST['desc'];
                                      $room = $_REQUEST['room'];
                                      $start_date = $_REQUEST['start_date'];
                                      $time = $_REQUEST['time'];
                                      $price = $_REQUEST['price'];
                                      $cdate = date("Y/m/d m:H:s");
                                      
                                            if(!empty($doctor)){
                                                if(!empty($desc)){
                                                  if (!empty($room)) {
                                                    if (!empty($start_date)) {
                                                      if (!empty($time)) {
                                                        if (!empty($price)) {

                                                          $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                                                          $res4 = mysqli_query($con,$q4);
                                                          if($row2 = mysqli_fetch_assoc($res4)){
                                                          $doc_id = $row2['did'];

                                                              // $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                                              // $sql3=mysqli_query($con,$query3);

                                                              // if(mysqli_num_rows($sql3)>0)
                                                              // {

                                                                      $query3="SELECT * FROM schedule WHERE sc_date='$start_date' AND sc_time='$time' AND roomNo='$room'";
                                                                      $sql3=mysqli_query($con,$query3);

                                                                      if(mysqli_num_rows($sql3)>0)
                                                                      {
                                                                        echo '<script>alert("This Schedule Alrady in System");</script>';
                                                                      }else{
                    
                                                                              $q1="INSERT INTO schedule(docid,description,roomNo,sc_date,sc_time,price,trndate) values('$doc_id','$desc','$room','$start_date','$time','$price','$cdate')";
                                                                              $res1=mysqli_query($con,$q1);

                                                                              if ( $res1)
                                                                              {
                                                                                   
                                                                              }else{
                                                                                echo "<script>alert(\"Schedule Save is Not Scussess\");</script>";
                                                                              }
                                                                          

                                                                      }

                                                            }
                                                              // }else{

                                                              //   echo '<script>alert("This Student  in System");</script>';
                                                                      
                                                              // }

                                                          }else{ echo "<script>alert(\"Please Enter Price\");</script>";}
                                                        }else{ echo "<script>alert(\"Please Select Time\");</script>";}
                                                      }else{ echo "<script>alert(\"Please Select Date\");</script>";}
                                                    }else{ echo "<script>alert(\"Select Room Number\");</script>";}
                                                  }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                                }else{ echo "<script>alert(\"Please Select doctor\");</script>";}
                                          
                                  } echo '</form>'; //Register Form Validation


                              }
                  // <!-- **********************End schedule Add Section Pannel ************************ -->
                  // <!-- **********************End Start Test Schedule Add Section Pannel ************************ -->
                   $id = $_REQUEST['id'];
                                   $cdate = date("Y/m/d");
                                 if($id==24)
                                 {
                                  


                                   echo '<form class="reg_form1_treat"   action="dashboard.php?id=24" method="POST">
                                      <h2 class="form_hed">Add Medical Test Schedule </h2> </br>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                          <label for="inputState"><b>Medical Test</b></label>
                                          <select id="inputState" name="test" class="form-control">
                                          <option selected></option>
                                          ';
                                            $q3 = "SELECT * FROM medical_test";
                                              $res3 = mysqli_query($con,$q3);
                                              $c=1;
                                              while($row=mysqli_fetch_assoc($res3)){
                                                echo "<option>".$row['test_name']."</option>";
                                                $c++;
                                              }
                                          echo '</select>
                                        </div>
                                        </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-10">
                                        <label for="desc"><b>Description </b></label>
                                        <input type="text" class="form-control" name="desc" placeholder="Description ">
                                      </div>
                                      </div>

                                        <div class="form-row">
                                      <div class="form-group col-md-10">
                                        <label for="desc"><b>Price </b></label>
                                        <input type="text" class="form-control" name="price" placeholder="Price ">
                                      </div>
                                      </div>

                                          <label><b>Discount Start date</b></label>
                                     <div class="form-row">
                                        <div class="form-group col-md-6 text-dark">
                                          <input type="date" name="start_date" id="myDate">
                                        </div>
                                      </div>

                                     <div class="form-row">
                                        <label for="appt">Select a time:</label>
                                        <div class="form-group col-md-10 text-dark">
                                        <input type="time" id="appt" name="time">
                                      </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                    <div class="form-row">
                                      <button type="submit" name="submit" class="btn col-md-8 btn-light" style="border-radius:20px; font-size :20px;">Add Schedule</button>
                                     </div>
                                    ';

                                   
                                    if(isset($_POST['submit'])){
                                      $test = $_REQUEST['test'];
                                      $desc = $_REQUEST['desc'];
                                      $start_date = $_REQUEST['start_date'];
                                      $time = $_REQUEST['time'];
                                      $price = $_REQUEST['price'];
                                      $cdate = date("Y/m/d m:H:s");
                                      
                                            if(!empty($test)){
                                                if(!empty($desc)){
                                                    if (!empty($start_date)) {
                                                      if (!empty($time)) {
                                                        if (!empty($price)) {

                                                          $q4 = "SELECT * FROM medical_test WHERE test_name='$test'";
                                                          $res4 = mysqli_query($con,$q4);
                                                          if($row2 = mysqli_fetch_assoc($res4)){
                                                          $test_ids = $row2['test_id'];

                                                              // $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                                              // $sql3=mysqli_query($con,$query3);

                                                              // if(mysqli_num_rows($sql3)>0)
                                                              // {

                                                                      $query3="SELECT * FROM test_schedule WHERE test_date='$start_date' AND test_time='$time'";
                                                                      $sql3=mysqli_query($con,$query3);

                                                                      if(mysqli_num_rows($sql3)>0)
                                                                      {
                                                                        echo '<script>alert("This Medical Test Schedule Alrady in System");</script>';
                                                                      }else{
                    
                                                                              $q1="INSERT INTO test_schedule(test_id,test_date,test_time,price,description,trndate) values('$test_ids','$start_date','$time','$price','$desc','$cdate')";
                                                                              $res1=mysqli_query($con,$q1);

                                                                              if ( $res1)
                                                                              {
                                                                                echo "<script>alert(\"Medical Test Schedule Save is Scussess\");</script>";
                                                                                   
                                                                              }else{
                                                                                echo "<script>alert(\"Medical Test Schedule Save is Not Scussess\");</script>";
                                                                              }
                                                                          

                                                                      }

                                                            }
                                                              // }else{

                                                              //   echo '<script>alert("This Student  in System");</script>';
                                                                      
                                                              // }

                                                          }else{ echo "<script>alert(\"Please Enter Price\");</script>";}
                                                        }else{ echo "<script>alert(\"Please Select Time\");</script>";}
                                                      }else{ echo "<script>alert(\"Please Select Date\");</script>";}
                                                  }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                                }else{ echo "<script>alert(\"Please Select doctor\");</script>";}
                                          
                                  } echo '</form>'; //Register Form Validation


                              }
                  // <!-- **********************End Test Schedule Add Section Pannel ************************ -->
                  // <!-- **********************Start test Section Pannel ************************ -->

                                $id = $_REQUEST['id'];
                                $nowdate = date("Y/m/d");
                                 if($id==17)
                                 {
                                  echo '<form class="reg_form1" action="dashboard.php?id=17" method="POST">
                                        <h2 class="form_hed">Add Medical Tests  </h2> </br>

                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="drug_code"><b>Medical Test Name</label>
                                              <input type="text" class="form-control" name="testname" placeholder="Medical Test Name">
                                        </div>
                                      </div>


                                       <div class="form-row">
                                       <div class="form-group col-md-6">
                                        <label for="drug_name"><b>Description</label>
                                        <input type="text" class="form-control" name="desc" placeholder="Description">
                                      </div>
                                      </div>

                                       <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label class="" for="inputState"><b>Availability</b></label>
                                        <select id="inputState" name="availble" class="form-control">
                                          <option selected></option>
                                          <option>Yes</option>
                                          <option>No</option>
                                        </select>
                                      </div>
                                      </div>


                                    <div class="dropdown-divider"></div>
                                     <button type="submit" name="submit" class="btn col-md-3 btn-light mt-3" style="border-radius:20px;">Add Medical Test</button></br>
                                    ';
                                    if(isset($_POST['submit'])){

                                      $testname = $_REQUEST['testname'];
                                      $desc = $_REQUEST['desc'];
                                      $availble = $_REQUEST['availble'];

                                              if(!empty($testname)){
                                                if(!empty($desc)){
                                                  if(!empty($availble)){

                                                      $q4 = "SELECT * FROM medical_test WHERE test_name='$testname'";
                                                      $res4 = mysqli_query($con,$q4);

                                                      if(mysqli_num_rows($res4)>0)
                                                      {
                                                        echo '<script>alert("This Medical Test Alrady Saved.");
                                                        </script>';
                                                      }
                                                      else{
                                                        $q1="INSERT INTO medical_test(test_name,description,available) values('$testname','$desc','$availble')";
                                                              $res1=mysqli_query($con,$q1);
                                                              if ( $res1)
                                                              {

                                                                   echo '<script>alert("Medical Test Saved is Scussessfully.");
                                                                    </script>';
                                                              }else{
                                                                echo "<script>alert(\"Medical Test Save is Not Scussess\");</script>";
                                                              }
                                                      }


                                                  }else{ echo "<script>alert(\"Select Availability\");</script>";}
                                                }else{ echo "<script>alert(\"Enter Description\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Medical Test Name\");</script>";}
                                  }echo '</form>'; //Register Form Validation

                              }

                  // <!-- **********************End Test Section Pannel ************************ -->
                  // <!-- **********************Start Doctor Section Pannel ************************ -->
                              $id = $_REQUEST['id'];
                                 if($id==8)
                                 {


                                  echo '<form class="reg_form1" style="padding-bottom:80px;" action="dashboard.php?id=8" method="POST">
                                      <h2 class="form_hed">Doctor Registration </h2> 

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="name" class="a ml-3"><b>Full Name</b></label>
                                          <input type="text" class="form-control" name="name" placeholder="Full Name">
                                        </div>
                                        </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label><b>Email</b></label>
                                          <input type="text" class="form-control" name="email" placeholder="Email Address">
                                        </div>
                                      </div>


                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="address"><b>Address</b></label>
                                        <input type="text" class="form-control"  name="address" placeholder="Address">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="phone"><b>Phone Number</b></label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                      </div>
                                      </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputState"><b>Gender</b></label>
                                          <select id="inputState" name="gender" class="form-control">
                                            <option selected placeholder="...Select ...."></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                        </div>
                                        </div>


                                        <div class="form-row">
                                         <div class="form-group col-md-6">
                                        <label for="phone"><b>Usename</b></label>
                                        <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="phone"><b>Password</b></label>
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                      </div>
                                      </div>

                                      <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="phone"><b>Confirm Password</b></label>
                                        <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                                      </div>
                                      </div>

                                    <div class="dropdown-divider"></div>
                                     <button type="submit" name="submit" class="btn col-md-4 btn-light" style="border-radius:20px;">Register</button>
                                    ';
                                    if(isset($_POST['submit'])){
                                      $fname = $_REQUEST['name'];
                                      $emails = $_REQUEST['email'];
                                      $address = $_REQUEST['address'];
                                      $phone = $_REQUEST['phone'];
                                      $gender = $_REQUEST['gender'];
                                      $uname = $_REQUEST['uname'];
                                      $pass = $_REQUEST['pass'];
                                      $conf_pass = $_REQUEST['conf_pass'];
                                      $nowdate = date("Y/m/d");


                                      if(!empty($fname)){
                                        if(!empty($emails)){
                                          if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                                            if(!empty($address)){
                                              if(!empty($phone)){
                                              if(!empty($gender)){
                                                if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                  if(!empty($gender)){
                                                    if(!empty($uname)){
                                                          if(!empty($pass)){
                                                            if(!empty($conf_pass)){
                                                              if($pass==$conf_pass){
                                                                  $query2="SELECT * FROM doctor WHERE email='$emails'";
                                                                      $sql2=mysqli_query($con,$query2);

                                                                      if(mysqli_num_rows($sql2)>0){
                                                                          echo "<script>alert(\"Email already Exsisted\");</script>";
                                                                      }else{
                                                                          $query3="SELECT * FROM medical_officer WHERE username='$uname'";
                                                                          $sql3=mysqli_query($con,$query3);

                                                                          if(mysqli_num_rows($sql3)>0){
                                                                              echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                          }else{
                                                                                $query3="SELECT * FROM medical_officer WHERE username='$phone'";
                                                                                $sql3=mysqli_query($con,$query3);

                                                                                if(mysqli_num_rows($sql3)>0){
                                                                                    echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                                }else{
                                                                                      $q1="INSERT INTO doctor(full_name,address,phone_number,email,gender,password,username,  trndate) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname','$nowdate')";
                                                                                            $res1=mysqli_query($con,$q1);
                                                                                            if ( $res1) {

                                                                                                 echo '<script>alert("Doctor Registration is Scussessfully.");
                                                                                                 window.location.href="dashboard.php?id=8";
                                                                                                              </script>';
                                                                                                
                                                                                            }else{
                                                                                              echo "<script>alert(\"Doctor Registration is Not Scussess\");</script>";
                                                                                            }
                                                                                      }
                                                                                }
                                                                            }
                                                              }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                                            }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                                          }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                                    }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                                  }else{ echo "<script>alert(\"Select Gender\");</script>";}
                                                }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                                                }else {echo "<script>alert(\"Select Your Gender\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Address\");</script>";}
                                          }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Email\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                                  }echo '</form>'; //Register Form Validation

                              }


                  // <!-- **********************End Doctor Section Pannel ************************ -->
                  // <!-- **********************Start Medical ReportSection Pannel ************************ -->



                              $id = $_REQUEST['id'];
                                if($id==33)

                                {
                                if (isset($_POST['submit'])) {

                                  $search = $_REQUEST['search_box'];
                                
                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_issue where reg_num = '".$search."' ";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <a style="text-decoration: none; color :white;" href="dashboard.php?id=33"><h1 class="student_h1"> Medical Report Details </h1></br></a>


                                  <table class="student_table_new" style="width : 100%;"> 
                                    <tr>
                                      <th style="width : 15%"> Registration Number </th>
                                      <th style="width : 20%"> Doctor </th>
                                      <th style="width : 8%"> Treated ID </th>  
                                      <th style="width : 25%"> Description </th>  
                                      <th style="width : 10%"> Issue Date </th>  
                                      <th style="width : 8%"> Edit </th>  
                                      <th style="width : 10%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                      $q4 = "SELECT * FROM doctor WHERE did='".$row['doctor']."'";
                                      $res4 = mysqli_query($con,$q4);
                                      $row2 = mysqli_fetch_assoc($res4);

                                      if (isset($row2['full_name'])) {
                                      $doctname = $row2['full_name'];
                                        echo '
                                        <tr>
                                        <td>'.$row['reg_num'].'</td>
                                        <td>'.$doctname.'</td>
                                        <td>'.$row['treat_id'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>'.$row['trn_date'].'</td>
                                        <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }else{
                                        echo '
                                        <tr>
                                        <td>'.$row['reg_num'].'</td>
                                        <td>'.$row['doctor'].'</td>
                                        <td>'.$row['treat_id'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>'.$row['trn_date'].'</td>
                                        <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }
                                    $count++;
                                  }
                                  echo '</table>';


                                }else{


                                  $count=1;
                                  $viewquery = " SELECT * FROM medical_issue";
                                  $viewresult = mysqli_query($con,$viewquery);

                                  echo '
                                  <div class="view_div">
                                  <a style="text-decoration: none; color :white;" href="dashboard.php?id=33"><h1 class="student_h1"> Medical Report Details </h1></br></a>


                                  <table class="student_table_new" style="width : 100%;"> 
                                    <tr>
                                      <th style="width : 15%"> Registration Number </th>
                                      <th style="width : 20%"> Doctor </th>
                                      <th style="width : 8%"> Treated ID </th>  
                                      <th style="width : 25%"> Description </th>  
                                      <th style="width : 10%"> Issue Date </th>  
                                      <th style="width : 8%"> Edit </th>  
                                      <th style="width : 10%"> Delete </th>  
                                    </tr>';

                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                      $q4 = "SELECT * FROM doctor WHERE did='".$row['doctor']."'";
                                      $res4 = mysqli_query($con,$q4);
                                      $row2 = mysqli_fetch_assoc($res4);

                                      if (isset($row2['full_name'])) {
                                      $doctname = $row2['full_name'];
                                        echo '
                                        <tr>
                                        <td>'.$row['reg_num'].'</td>
                                        <td>'.$doctname.'</td>
                                        <td>'.$row['treat_id'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>'.$row['trn_date'].'</td>
                                        <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }else{
                                        echo '
                                        <tr>
                                        <td>'.$row['reg_num'].'</td>
                                        <td>'.$row['doctor'].'</td>
                                        <td>'.$row['treat_id'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>'.$row['trn_date'].'</td>
                                        <td><a href="edit.php?medical_issu='.$row['medicai_issue_id'].'">Edit</a></td>
                                        <td><a href="delete.php?medical_issu='.$row['medicai_issue_id'].'">Delete</a></td>
                                        </tr>
                                        ';
                                      }
                                    $count++;
                                  }
                                  echo '</table>';
                                }
                                  echo '<form class="form-inline col-6 mt-5" action="dashboard.php?id=33" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form>';

                                  echo '</div>';
                                }

                  // <!-- **********************End Medical Report Section Pannel ************************ -->
                  }else{  
                  // <!-- **********************Start Pie Chart Section Pannel ************************ -->?>


                  <div class="row">
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where DATE(sc_date) >= DATE(CURRENT_DATE())";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Today Channel Appinments</h1>
                        <h1 style="font-size: 100px; text-align: center; color: red; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id where DATE(test_date) >= DATE(CURRENT_DATE())";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Today Test Appinments</h1>
                        <h1 style="font-size: 100px; text-align: center; color: red; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
                      <div class="col-md-4">
                        <?php  
                          $viewquery3 = "SELECT * FROM patients";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Number of Patients Registerd</h1>
                        <h1 style="font-size: 100px; text-align: center; color: red; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>


                  


                  <div class="col-md-5" style="background-color: #000; padding: 3%; margin-left: 10%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id WHERE MONTH(test_date) = MONTH(CURRENT_DATE()) AND YEAR(test_date) = YEAR(CURRENT_DATE())";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paided'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }


                        ?>
                        <h1 style="text-align: center; color: white; font-size: 40px">This Year Medical Test Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $total; ?></h1>

                      </div>
                      <div class="col-md-5 ml-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";

                                  $qu1 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where YEAR(sc_date) = YEAR(CURRENT_DATE())";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paided'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                          


                        ?>
                        <h1 style="text-align: center; color: white;  font-size: 40px">This Year Channeling Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $total1; ?></h1>

                      </div>
                  <div class="col-md-5 mt-5" style="background-color: #000; padding: 3%; margin-left: 10%; border-radius: 2em;">
                      <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id WHERE MONTH(test_date) = MONTH(CURRENT_DATE()) ";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paided'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }


                        ?>
                        <h1 style="text-align: center; color: white; font-size: 40px">This Month Medical Test Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $total; ?></h1>

                      </div>
                      <div class="col-md-5 ml-5 mt-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";

                                  $qu1 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where MONTH(sc_date) = MONTH(CURRENT_DATE())";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paided'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                          


                        ?>
                        <h1 style="text-align: center; color: white;  font-size: 40px">This Month Channeling Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $total1; ?></h1>

                      </div>

<?php if($a == 'admin'){?>
                      <div class="col-md-12 ml-5 mt-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";

                                  $qu1 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where MONTH(sc_date) = MONTH(CURRENT_DATE())";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paided'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id WHERE MONTH(test_date) = MONTH(CURRENT_DATE()) ";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paided'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }

                                  $net_total = $total1 + $total;
                          


                        ?>
                        <h1 style="text-align: center; color: white;  font-size: 40px">This Month Total Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $net_total; ?></h1>

                      </div>
                      <div class="col-md-12 ml-5 mt-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id WHERE MONTH(test_date) = MONTH(CURRENT_DATE()) AND YEAR(test_date) = YEAR(CURRENT_DATE())";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paided'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu = "SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id WHERE MONTH(test_date) = MONTH(CURRENT_DATE()) AND YEAR(test_date) = YEAR(CURRENT_DATE())";
                                  $viewresult = mysqli_query($con,$qu);


                                  while($row = mysqli_fetch_assoc($viewresult))
                                  {
                                    if($row['paid'] == 'Paided'){
                                      $total = $total + $row['amount'];
                                    $counts++;
                                    }
                                  }

                                  $net_total = $total1 + $total;
                          


                        ?>
                        <h1 style="text-align: center; color: white;  font-size: 40px">This Year Total Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $net_total; ?></h1>

                      </div>
              <?php } ?>
                    </div>
                    <?php

                  // $facArray = array("Management & Commerce","Technology", "Applied Sciences", "Engineering","Arts & Culture","Islamic Studies & Arabic Language");
                  $viewquery3 = "SELECT * FROM medical_test";
                  $viewresult3 = mysqli_query($con,$viewquery3);

                   $count = 0;
                   // $arrlength = count($facArray);

                    ?>
                    
                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                             ['Task', 'Hours per Day'],

                  <?php while($rows = mysqli_fetch_assoc($viewresult3)){
                         $viewquery = " SELECT * FROM test_schedule join test_appinment on test_schedule.test_sch_id =  test_appinment.test_sch_id where test_schedule.test_id = '".$rows['test_id']."'";
                        $viewresult = mysqli_query($con,$viewquery);
                        $stddata = mysqli_num_rows($viewresult);

                          echo "
                            ['".$rows['test_name']."',  ".$stddata."],";

                          $count++;
                      } ?>
                          ]);

                          var options = {
                            title: 'Medical Test Appoinment Summery'
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                          chart.draw(data, options);
                        }
                      </script>
                  <div class="col-md-12"><h1 style="margin-top: 5%; text-align: center; color: #0f3460">Medical Test Appoinment Summery</h1></div>
                  <div class="col-md-10" id="piechart1" style=" height: 30vw; margin-left: 8%; margin-top: 10%;"></div>


                   <!-- **********************End Pie Chart Section Pannel ************************ -->


                  <!-- where cat_id = '".$row['cat_id']."' -->
                  <?php } ?>

                  <style type="text/css">
                    form.reg_form{
                      width: 100%;
                      margin-top: 2%;
                      background-color: gray;
                      border-radius: 35px;
                      padding: 35px;
                    }
                    form.reg_form label{
                      font-size: 20px;

                    }
                    form.reg_form input{
                      font-size: 20px;
                    }


                  </style>
                  </div>
                          </div>
                        </div>
                      </div>
                   </div>
                  <!-- **********************End Body Content Pannel ************************ -->
                    </body>

                  <style type="text/css">
                    .footer{
                      width: 100%;
                      height: 70px;
                      background-color: #0f3460;
                      text-align: left;
                      padding: 1%;
                    }


                    .view_title{
                      text-decoration: none;

                    }
                    .form_title{
                        float: left;
                        color: #fff;
                        font-family: "Times New Roman", Times, serif;
                    }
                    div.view_div{
                      /*background-color: #00394e;*/
                      padding: 2%;
                      font-family: Arial, Helvetica, sans-serif;
                      color: white;
                      text-align: center;
                      margin-top: -4.5%;
                      margin-left: -1%;
                      /*border-radius: 2em;*/
                    }
                  </style>
                </div>
            <!-- </div> -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /#wrapper -->
		
	</div>
</body>
</html>
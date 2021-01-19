<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'doctor.php'; //Check login 

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
    
<!--    <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div> -->
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #0f3460; margin-top: 0.5%; border-radius: 1em; ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-12">
        <div class="row justify-content-left mt-4 pl-4">
            <a style="text-decoration: none; text-transform: uppercase; font-family: \"Times New Roman\",Times, serif;" href="doctor_dashboard.php"><h1  class="text-light">Health Care Center - doctor_Dashboard </h1></a>
          </div>s
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i style="color: white; font-size: 40px;" class="fas fa-bars"></i>
            </button>
        </div>

        
        

        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" >

              <!-- User name display code -->
              <?php 

                if (isset($_SESSION['doctor'])) 
                {
                  $b = $_SESSION['doctor'];
                  $qu2 = "SELECT * FROM doctor where username = '$b'";
                  $viewresult1 = mysqli_query($con,$qu2);
                  $did = mysqli_fetch_assoc($viewresult1);

                  echo '<h2 style="font-size:20PX; margin-left:3%; color:white; margin-top: 10%;"><b>Welcome!<br>  Hello '.$did['full_name'].'</b></h2>'; 

                }?>
              <div class="dropdown-divider"></div>


             <li class="nav-item ml-4">
          <a class="" href="#" data-toggle="collapse" aria-expanded="false" style="color: white; font-size: 18px; margin-left: -5%; font-family: \"Times New Roman\", Times, serif;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-users mr-3" style="color:white;  font-size:35px;"></i><b> Patients</b></a>

          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_view.php">Patients List</a>
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
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=2">View Channel Schedules</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=3">Past Channel Schedules</a>
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
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=18">Pending Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=21">Accepted Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=22">Paid Channel</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_dashboard.php?id=23">Rejected Channel </a>
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
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="doctor_username_change.php">Change Username</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" style="font-size: 18px; font-family: \"Times New Roman\", Times, serif;" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>




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
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Schedule Details </h1></br></a>



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
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
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
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                  echo '<form class="form-inline col-6 mt-5" action="doctor_dashboard.php?id=2" method="POST">
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
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=3"><h1 class="student_h1"> Schedule Details </h1></br></a>



                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 15%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>  
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
                                      <a style="text-decoration: none; color :white;" href="doctor_dashboard.php?id=2"><h1 class="student_h1"> Scheduled Details </h1></br></a>


                                      <table style="width : 100%;" class="student_table_new"> 
                                        <tr>
                                          <th style="width : 18%"> Doctor </th>
                                          <th style="width : 20%"> Description </th>
                                          <th style="width : 10%"> Room Number </th>
                                          <th style="width : 10%"> Date </th>
                                          <th style="width : 10%"> Time </th>  
                                          <th style="width : 8%"> Price </th>  
                                          <th style="width : 10%"> Scheduled Date </th>   
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
                                          </tr>';
                                        }


                                        $count++;
                                      }
                                      echo '</table>';

                                  }

                                  echo '<form class="form-inline col-6 mt-5" action="doctor_dashboard.php?id=3" method="POST">
                                          <input class="form-control form-control-sm ml-3 w-50" name="search_box" type="text" placeholder="Search"
                                            aria-label="Search">
                                          <button type="submit" name="submit" class="btn col-2 btn-rounded btn-dark ml-5">Search</button>
                                        </form> </div>';

                                }
                              }

                  // <!-- **********************End Students Treatments View Section Pannel ************************ -->
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
                                    </tr>
                    
                                    ';
                                    $count++;
                                  }
                                  echo '</table></div>';
                                }

                  // <!-- **********************End Reject Channel View Section Pannel ************************ -->
                  
                  }else{  
                  // <!-- **********************Start Pie Chart Section Pannel ************************ -->?>


                  <div class="row">
                      <div class="col-md-4">
                        <?php  
                           $qu2 = "SELECT * FROM doctor where username = '$b'";
                                  $viewresult1 = mysqli_query($con,$qu2);
                                  $did = mysqli_fetch_assoc($viewresult1);

                          $viewquery3 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where DATE(sc_date) >= DATE(CURRENT_DATE()) AND schedule.docid = '".$did['did']."'";
                          $viewresult3 = mysqli_query($con,$viewquery3);
                          $stddata = mysqli_num_rows($viewresult3);


                        ?>
                        <h1 style="text-align: center;">Today Channel Appinments</h1>
                        <h1 style="font-size: 100px; text-align: center; color: red; padding: 5%;"><?php echo $stddata; ?></h1>

                      </div>
                      <div class="col-md-4">
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


                  

                      <div class="col-md-5 ml-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";

                                    $qu2 = "SELECT * FROM doctor where username = '$b'";
                                  $viewresult1 = mysqli_query($con,$qu2);
                                  $did = mysqli_fetch_assoc($viewresult1);

                                  $qu1 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where YEAR(sc_date) = YEAR(CURRENT_DATE()) AND schedule.docid = '".$did['did']."'";
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

                      <div class="col-md-5 ml-5" style="background-color: #000; padding: 3%; border-radius: 2em;">
                        <?php  
                          $count=1;
                                    $counts=1;
                                    $count2=1;
                                    $total = 0;
                                    $total1 = 0;
                                  // $viewquery = " SELECT * FROM getorder";
                                  $qu2 = "SELECT * FROM doctor where username = '$b'";
                                  $viewresult1 = mysqli_query($con,$qu2);
                                  $did = mysqli_fetch_assoc($viewresult1);

                                  $qu1 = "SELECT * FROM schedule join appinment on schedule.sch_id =  appinment.sch_id where MONTH(sc_date) = MONTH(CURRENT_DATE()) AND schedule.docid = '".$did['did']."'";
                                  $viewresult1 = mysqli_query($con,$qu1);


                                  while($row1 = mysqli_fetch_assoc($viewresult1))
                                  {
                                    if($row1['paid'] == 'Paided'){
                                      $total1 = $total1 + $row1['amount'];
                                    $count2++;
                                    }
                                  }
                          


                        ?>
                        <h1 style="text-align: center; color: white;  font-size: 40px">This Month Your Channeling Net Income</h1>
                        <h1 style="font-size: 70px; text-align: center; color: yellow; padding: 5%;">Rs. <?php echo $total1; ?></h1>

                      </div>


                    </div>



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
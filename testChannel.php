<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

     <!-- Load Icon -->
  <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />
<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <link rel="stylesheet" type="text/css" href="css/student/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/form_css/form.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/home_style.css"> -->

    <!-- Font awesome link -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Helth Care Center</title>
</head>

<body style="font-family: \"Times New Roman\",Times, serif;">

  <!-- Start your project here-->
  <div style="height: 100vh">
    <div class="flex-center flex-column">
     <!--Navbar -->
     <nav class="navbar navbar-expand-lg" style="background-color: #0f3460;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i style="color: white; font-size: 40px;" class="fas fa-bars"></i>
      </button>

      <div style="float: right;" class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-4">
            <a style="color: white;  font-size: 25px;" class="nav-link ml-2" href="index.php"><i style="font-size: 40px;" class="fas fa-home mr-3"></i>Home</a>
          </li>
          <li class="nav-item mr-4 dropdown">
            <a style="color: white; font-size: 25px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="font-size: 40px;" class="fas fa-calendar-check mr-3"></i>Appinments</a>
            <div class="dropdown-menu" style="background-color: #fff;" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="my_appinments.php">Channling Appinment History</a>
              <a class="dropdown-item" href="medicaltestappinment.php">Medical Test Appinments</a>
              <!-- <a class="dropdown-item" href="#">Another action</a> -->
            </div>
          </li>
          <li class="nav-item mr-4 dropdown">
            <a style="color: white; font-size: 25px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="font-size: 40px;" class="fas fa-users-cog mr-3"></i>Settings</a>
            <div class="dropdown-menu" style="background-color: #fff;" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="patients_pass.php">Change Password</a>
              <a class="dropdown-item" href="myaccount.php">View Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
      <a style="color: white; font-size: 25px;" class="navbar-brand" href="student.php"><b>Welcome! Health Care Center</b></a>
    </nav>
    <section class="container-fluid">
      <div class="row" style="width: 102.2%; margin-top: -1.2%;">
    
    <!-- Slideshow container -->
    <?php 
    $slider_query = "SELECT * FROM slider_banner";
    $slider_query_result = mysqli_query($con,$slider_query);
    if(mysqli_num_rows($slider_query_result)>0){

          $row = mysqli_fetch_assoc($slider_query_result);
          $slider_banner_01 = $row['slider_banner_01'];
          $slider_banner_02 = $row['slider_banner_02'];
          $slider_banner_03 = $row['slider_banner_03'];

          $image_src1 = "img/upload/slider/".$slider_banner_01;
          $image_src2 = "img/upload/slider/".$slider_banner_02;
          $image_src3 = "img/upload/slider/".$slider_banner_03;

     ?>
      <!-- <div class="container-fluid" >  -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 99%;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="<?php echo $image_src1; ?>" alt="Banner 01" style="width:100%; height: 250px;">
              </div>

              <div class="item">
                <img src="<?php echo $image_src2; ?>" alt="Banner 02" style="width:100%; height: 250px;">
              </div>
            
              <div class="item">
                <img src="<?php echo $image_src3; ?>" alt="Banner 03" style="width:100%; height: 250px;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <!-- </div> -->
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <h1 style="margin-left: 2%;">Medical Test Schedule</h1>
    <div class="col-md-12">
      <?php 
      $count=1;
        $viewquery = " SELECT * FROM test_schedule where DATE(test_date) >= DATE(CURRENT_DATE()) AND TIME(test_time) > TIME(CURRENT_DATE())";
        $viewresult = mysqli_query($con,$viewquery);
       ?>
        <div class="view">

      <?php 
        while($row = mysqli_fetch_assoc($viewresult))
        {

          $q4 = "SELECT * FROM medical_test WHERE test_id='".$row['test_id']."'";
          $res4 = mysqli_query($con,$q4);
          $row2 = mysqli_fetch_assoc($res4);

          if (isset($row2['test_name'])) {
          $test = $row2['test_name']; ?>
          <!-- <tr>
          <td>'.$test.'</td>
          <td>'.$row['description'].'</td>
          <td>'.$row['roomNo'].'</td>
          <td>'.$row['sc_date'].'</td>
          <td>'.$row['sc_time'].'</td>
          <td>'.$row['price'].'</td>
          </tr>'; -->
          <div class="row" style="background-color: #0f3460; color: white; margin: 1%; padding: 1%; border-radius: 1em; text-align: center;">
            <div class="col-md-2">
              <h4 style="color: yellow;">Medical Test</h4>
              <h4><?php echo $test; ?></h4>
            </div>
            <div class="col-md-2">
              <h4 style="color: yellow;">Desrciption</h4>
              <h4><?php echo $row['description']; ?></h4>
            </div>
            <div class="col-md-2">
              <h4 style="color: yellow;">Date</h4>
              <h4><?php echo $row['test_date']; ?></h4>
            </div>
            <div class="col-md-1">
              <h4 style="color: yellow;">Time</h4>
              <h4><?php echo $row['test_time']; ?></h4>
            </div>
            <div class="col-md-2">
              <h4 style="color: yellow;">Price for Channel</h4>
              <h4><?php echo $row['price']; ?></h4>
            </div>
            <div class="col-md-2 mt-5">
              <form method="POST" action="">
                <button type="button" name="submit" onclick="window.location.href='test.php?test_sch_id=<?php echo $row['test_sch_id']; ?>'" class="btn col-md-12 btn-light" style="border-radius:20px;">Make Appinment</button>
              </form>
            </div>
          </div>
         <?php }
          $count++;
        }
       ?>

        <style type="text/css">
          .table_new{
            width: 100%;
          }
          .view{
            width: 100%;
            margin-top: 2%;
          }
        </style>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>

    </section>
    </div>  
</body>
<footer>
  <div style="background-color: #0f3460; padding: 0.5%;" class="row mt-2">
  <p style="color: white; margin-left: 3%;">Run By: Dr. S.M.N.S.M.Mallawarachchi and Dr C.H. Mallawarachchi. <br> Copyright©2020.HelthCareCenter. <br> Created By : I.P.P.W.HEMACHANDRA</p>
</div>
</footer>
</html>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
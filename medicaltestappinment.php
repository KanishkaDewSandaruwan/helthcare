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
          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 105%;">
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
			<div class="row mt-2">
			    <div class="col-12 col-sm-12 col-lg-12 ml-1">
			    	<?php 
			    		$count=1;
              $email = $_SESSION['email'];
                    $viewquery = " SELECT * FROM test_appinment join test_schedule on test_schedule.test_sch_id = test_appinment.test_sch_id join medical_test on medical_test.test_id = test_schedule.test_id where email = '".$email."'";
                    $viewresult = mysqli_query($con,$viewquery);

                    echo '
                    <div style="margin-top:0.1%;" class="view_div">
                    <a style="text-decoration: none; color :white;" href="dashboard.php?id=2"><h1 class="student_h1"> Your Medical Test Appinment Details </h1></br></a>



                    <table style="width : 100%; text-align: center;" class="student_table_new"> 
                      <tr>
                        <th style="width : 15%"> Test Appinment Code </th>
                        <th style="width : 10%"> Test Name </th>
                        <th style="width : 20%"> Description </th>
                        <th style="width : 10%"> Date</th>
                        <th style="width : 10%"> Time </th>
                        <th style="width : 8%"> Appinted Date </th>
                        <th style="width : 10%"> Price </th>
                        <th style="width : 10%"> Tested </th>
                        <th style="width : 10%"> Paid </th>
                        <th style="width : 10%"> Reported </th>

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
                        </tr>';


                      $count++;
                    }
                    echo '</table> </div>';
                    ?>

			</div>
		</section>

	<!--/.Navbar -->
    </div>
  </div>
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
</body>
<div style="background-color: #0f3460; padding: 0.5%;" class="row">

  <p style="color: yellow; margin-left: 3%;">Copyright©2020.SEUSL.HelthCenter <br> Created By : I.P.P.W.HEMACHANDRA</p>
</div>
</html>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

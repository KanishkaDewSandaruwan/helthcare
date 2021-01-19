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
			    <div class="col-12 col-md-12 col-lg-4" style="background-color: #0f3460; font-size: 20px; padding-top: 1%; margin-top: 0.1%;  color: white; border-bottom-right-radius: 2em;">
			    	<?php 

			    		$user = $_SESSION['email'];

				    	$count=1;
	                    $viewquery = " SELECT * FROM patients where email='".$user."'";
	                    $viewresult = mysqli_query($con,$viewquery); 
	                    $row = mysqli_fetch_assoc($viewresult);
			    	
                    ?>

                    <form style="padding: 3%;">
                    	<label style="color: orange">Your Name :</label>  <label style="margin-left: 3%;"><?php echo $row['full_name']; ?></label><br>
                    	<label style="color: orange">Phone Number :</label>  <label style="margin-left: 3%;"><?php echo $row['phone_number']; ?></label><br>
                    	<label style="color: orange">Email :</label>  <label style="margin-left: 3%;"><?php echo $row['email']; ?></label><br>
                    	<label style="color: orange">Gender :</label>  <label style="margin-left: 3%;"><?php echo $row['gender']; ?></label><br>
                    	<label style="color: orange">Date of Birth :</label>  <label style="margin-left: 3%;"><?php echo $row['dob']; ?></label><br>
                    	<label style="color: orange">Registerd Date :</label>  <label style="margin-left: 3%;"><?php echo $row['trndate']; ?></label><br>
                    </form>
                    <div class="dropdown-divider"></div>
			    </div>
          <div class="col-12 col-md-10 col-lg-7 mt-2 ml-2">
            <div class="row mt-2">
            <button type="submit" name="submit" class="btn col-md-3 btn-warning"  onclick="window.location.href='change_patient_datails.php'" style="border-radius:20px;">Edit My Profile</button>
            </div>
            <div class="row mt-2">
            <button type="button" name="submit" class="btn col-md-3 btn-warning"  onclick="window.location.href='patients_email.php'" style="border-radius:20px;">Change Email</button>
            </div>
            <div class="row mt-2">
            <button type="button" name="submit" class="btn col-md-3 btn-warning"  onclick="window.location.href='patients_delete.php'" style="border-radius:20px;">Delete Account</button>
            </div>
          </div>
			    
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

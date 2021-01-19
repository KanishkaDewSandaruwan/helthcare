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
      <div class="row">
        <div class="col-md-4 mt-5 col-md-5 text-center" style="margin-left: 20%;">
            <h1 class='text-info'>Health Care Center Edit Email</h1>
              <div class="form-login"></br>
                <form action="" method="POST"> 
                    <h2>Change Email</h2>
                    </br>
                    <input type="text" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                    </br></br>
                    <input type="text" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                    </br></br>
                    <div class="wrapper">
                        <button style="font-size: 20px; padding-bottom: 7%;" class="but_01 col-8 input-sm btn-danger" type="submit" name="submit"><b>Change Email<i class="fa fa-sign-in"></i></b></button><br><br>
                            <!-- <button type="submit" name="submit" class="group-btn">login </button> -->
                    </div>
                </form>
            </div>
        </div>
      <style type="text/css">
.but_01{
  border-radius: 1em;
}


body {
/*  background-image:url('img/back/3d-futuristic-background-with-connecting-lines-dots.jpg');
  background-position:center;
  background-size:cover;*/
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Stencil Std, fantasy'!important;
}

.container {
    padding: 110px;
}
::placeholder { 
    color: #000!important;
    opacity: 1;
    font-size:18px!important;
}
.form-login {
    background-color: white;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:black;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:black!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #000; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}
</style>
    </section>

  <!--/.Navbar -->
    </div>
  </div>
  <!-- /Start your project here-->
  <?php
    if(isset($_POST['submit']))
    {


    $currentemail=stripslashes($_REQUEST['cemail']);
    $newemail=stripslashes($_REQUEST['nemail']);
    $g = $_SESSION['email'];

    if(!empty($currentemail)){
      if(!empty($newemail)){
        if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

          $loginsql="SELECT * FROM patients WHERE email='".$currentemail."'";
          $result=mysqli_query($con,$loginsql) or mysqli_errno();
          $rows=mysqli_fetch_assoc($result);

          $a=$rows['email'];

          $query5="SELECT email FROM patients WHERE email='".$g."'";
          $sql5=mysqli_query($con,$query5);
          $row=mysqli_fetch_assoc($sql5);

          $a=$row['email'];
          

          if($rows['email']==$row['email'])
          {
              $query3="SELECT * FROM patients WHERE email='$newemail'";
              $sql3=mysqli_query($con,$query3);

              if(mysqli_num_rows($sql3)>0)
              {
                echo "Email already Exsisted";
              }
              else
              {
                  $query2="UPDATE patients SET email='".$newemail."' WHERE email='".$currentemail."'";
                  $sql2=mysqli_query($con,$query2);
                  echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='login.php'; </script>"; 
              }
          }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 

        }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
      }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
    }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

    }
?>
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

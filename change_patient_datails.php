<!DOCTYPE html>
<html>
<head>
  <title>Helth Care Center</title>

<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />

<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/d.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <script src="js/a.js"></script>
  <script src="js/b.js"></script>
  <script src="js/c.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/npm.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<style type="text/css">
  .reg_form{
    margin: 3%;
  }
</style>

</head>
<body>
<div class="row">
  <div class="col-md-6">
    
  <form style="border : 2px solid black; padding: 3%; color: yellow; background-color: #0f3460; border-radius: 3em;" class="reg_form" action="change_patient_datails.php" method="POST">
    <h1 style="text-align: center;">Change Patients Details</h1>
    <div class="form-row">
      <div class="form-group col-md-11 ml-4">
        <label class="" for="name" class="a"><b>Full Name</b></label>
        <input type="text" class="form-control" name="name" placeholder="Full Name">
      </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-11 ml-4">
      <label class="" for="address"><b>Address</b></label>
      <input type="text" class="form-control"  name="address" placeholder="Address">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-11 ml-4">
      <label class="" for="phone"><b>Phone Number</b></label>
      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-11 ml-4">
      <label class="" for="bday"><b>Date of Birth</b></label>
      <input type="text" class="form-control" name="bday" placeholder="Date of Birth">
    </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-11 ml-4">
        <label class="" for="inputState"><b>Gender</b></label>
        <select id="inputState" name="gender" class="form-control">
          <option selected></option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      </div>

      



<div class="dropdown-divider"></div>
 <button type="submit"  name="submit" class="btn col-md-6 btn-info" style="border-radius:20px; padding-top: 1%; padding-bottom: 1%; margin-left: 25%">Save Detail</button><br>
  <p style="color: white; font-size: 11px; margin-top: 2%; margin-left: 30%;">Go Backto My Account..    <a style="margin-left: 1%;" href="myaccount.php">Back</a></p>
   </form>
</div>
<div class="col-md-6">
  <img src="img/banner/71508807-indian-female-doctor-treating-young-girl-patient.jpg" width="100%">
  <img src="img/banner/doctor-whit-assistant-treating-teeth-patient-preventing-caries-stomatology-concept-professional-dentist-assistant-wearing-147282095.jpg" width="100%">
</div>
 <br><br>
   <?php     

        if(isset($_POST['submit'])){
          $fname = $_REQUEST['name'];
          $address = $_REQUEST['address'];
          $phone = $_REQUEST['phone'];
          $gender = $_REQUEST['gender'];
          $bday = $_REQUEST['bday'];
          $cdate = date("Y/m/d");

          $email = $_SESSION['email'];

          if(!empty($fname))
          {
            $query3="UPDATE patients SET full_name='$fname' WHERE email='".$email."'";
            $sql3=mysqli_query($con,$query3);
             echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
          }

          if(!empty($bday))
          {
            $query3="UPDATE patients SET dob='$bday' WHERE email='".$email."'";
            $sql3=mysqli_query($con,$query3);
             echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
          }
          if(!empty($phone))
          {
            if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                $query3="UPDATE patients SET phone_number='$phone' WHERE email='".$email."'";
                $sql3=mysqli_query($con,$query3);
                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";

              }else{echo "Enter Valid Phone Number";}
          }

          if(!empty($address))
          {
            $query3="UPDATE patients SET address='$address' WHERE email='".$email."'";
            $sql3=mysqli_query($con,$query3);
             echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
          }

          if(!empty($gender))
          {
            $query3="UPDATE patients SET gender='$gender' WHERE email='".$email."'";
            $sql3=mysqli_query($con,$query3);
             echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
          }

  }
  ?>
  </div>
</body>
</html>
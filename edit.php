<?php
  require_once 'connection.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/c.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/edit_form.css">

    <!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/npm.js"></script>

    <title>SEUSL Health Center</title>
  </head>
  <body class="a bg-light">
    <div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #0f3460; font-family: \"Times New Roman\", Times, serif;">
        <div class="col-md-8 ">
          <h1 class="top_h1 text-light"><a class="head_link text-light" href="dashboard.php">SEUSL Health Center - Editor Dashboard</a></h1>
        </div>
      </div>
    </div><!-- Nav Bar End -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 bg-light" style="padding-bottom: 2%;">
<?php
if(isset($_REQUEST['medical_issu']))
{
            $id = $_REQUEST['medical_issu'];
            $q2 = "SELECT * FROM medical_issue WHERE medicai_issue_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['medicai_issue_id'];

              if($id==$row1['medicai_issue_id'])
               {
                echo '<form class="form_edit" action="edit.php?medical_issu='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="regnum" class="a mr-3"><b>Registration Number</b></label>
                        <input type="text" class="form-control" name="regnum" placeholder="Registration Number">
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
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
                      <div class="form-group col-md-6">
                        <label><b>Treated ID</b></label>
                        <input type="text" class="form-control" name="tratid" placeholder="Treated ID">
                      </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="desc"><b>Description</b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description">
                    </div>
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=33\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){

                    $regnum = $_REQUEST['regnum'];
                    $doctor = $_REQUEST['doctor'];
                    $tratid = $_REQUEST['tratid'];
                    $desc = $_REQUEST['desc'];

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $doctID = $row2['did'];

                    if(!empty($regnum))
                        {
                          $loginsql="SELECT * FROM medical_issue WHERE medicai_issue_id='".$id."'";
                            $result=mysqli_query($con,$loginsql);
                            $rows=mysqli_fetch_assoc($result);
                            $a = $rows['reg_num'];

                            if($a==$regnum)
                            {
                                echo "<script type=\"text/javascript\"> alert(\"This Registration Number already Here\");</script>";
                              }else{ 

                                  $query3="SELECT * FROM students WHERE  regnumber='$regnum'";
                                  $sql3=mysqli_query($con,$query3);

                                  if(mysqli_num_rows($sql3)>0)
                                  {

                                      $query3="UPDATE medical_issue SET reg_num='$regnum' WHERE medicai_issue_id='".$id."'";
                                      $sql3=mysqli_query($con,$query3);
                                      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";



                                  }else{

                                    echo '<script>alert("This Student Not in System");</script>';
                                          
                                 }
                          }
                      }


                      if(!empty($doctor))
                      {

                        $query3="UPDATE medical_issue SET doctor='$doctID' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }



                       if(!empty($tratid))
                      {
                        $query3="UPDATE medical_issue SET treat_id='$tratid' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }


                       if(!empty($desc))
                      {
                        $query3="UPDATE medical_issue SET description='$desc' WHERE medicai_issue_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }

                }echo '</form>'; //Register Form Validation

            }   


}
else if(isset($_REQUEST['sch_id']))
{
            $id = $_REQUEST['sch_id'];
            $q2 = "SELECT * FROM schedule WHERE sch_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['sch_id'];

              if($id==$row1['sch_id'])
               {
                echo '<form class="form_edit" action="edit.php?sch_id='.$id.'" method="POST">
                    
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
                   <button type="submit" name="submit" class="btn col-md-3 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=2\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit']))
                  {
                    $doctor = $_REQUEST['doctor'];
                    $desc = $_REQUEST['desc'];
                    $room = $_REQUEST['room'];
                    $start_date = $_REQUEST['start_date'];
                    $time = $_REQUEST['time'];
                    $price = $_REQUEST['price'];

                    $q4 = "SELECT * FROM doctor WHERE full_name='$doctor'";
                    $res4 = mysqli_query($con,$q4);
                    

                      if(!empty($start_date))
                      {

                          $query3="UPDATE schedule SET sc_date='$start_date' WHERE sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                        
                      }


                      if(!empty($doctor))
                      {

                        if ($row2 = mysqli_fetch_assoc($res4)) {

                          $doc_id = $row2['did'];

                            $query3="UPDATE schedule SET docid='$doc_id' WHERE sch_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                        }
                      }
                      if(!empty($desc))
                      {
                        $query3="UPDATE schedule SET description='$desc' WHERE sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($room))
                      {
                        $query3="UPDATE schedule SET roomNo='$room' WHERE sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($time))
                      {
                        $query3="UPDATE schedule SET sc_time='$time' WHERE sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($price))
                      {
                        $query3="UPDATE schedule SET price='$price' WHERE sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }


                    }

                }echo '</form>'; //Register Form Validation

}  

else if(isset($_REQUEST['test_sch_id']))
{
            $id = $_REQUEST['test_sch_id'];
            $q2 = "SELECT * FROM test_schedule WHERE test_sch_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['test_sch_id'];

              if($id==$row1['test_sch_id'])
               {
                echo '<form class="form_edit" action="edit.php?test_sch_id='.$id.'" method="POST">
                    
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
                   <button type="submit" name="submit" class="btn col-md-3 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=25\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit']))
                  {
                    $test = $_REQUEST['test'];
                    $desc = $_REQUEST['desc'];
                    $start_date = $_REQUEST['start_date'];
                    $time = $_REQUEST['time'];
                    $price = $_REQUEST['price'];

                    $q4 = "SELECT * FROM medical_test WHERE test_name='$test'";
                    $res4 = mysqli_query($con,$q4);
                    

                      if(!empty($start_date))
                      {

                          $query3="UPDATE test_schedule SET test_date='$start_date' WHERE test_sch_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=25\";</script>";
                        
                      }


                      if(!empty($test))
                      {

                        if ($row2 = mysqli_fetch_assoc($res4)) {

                          $test_ids = $row2['test_id'];

                            $query3="UPDATE test_schedule SET test_id='$test_ids' WHERE test_sch_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=25\";</script>";
                        }
                      }
                      if(!empty($desc))
                      {
                        $query3="UPDATE test_schedule SET description='$desc' WHERE test_sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=25\";</script>";
                      }
                      if(!empty($time))
                      {
                        $query3="UPDATE test_schedule SET test_time='$time' WHERE test_sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=25\";</script>";
                      }
                      if(!empty($price))
                      {
                        $query3="UPDATE test_schedule SET price='$price' WHERE test_sch_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=25\";</script>";
                      }


                    }

                }echo '</form>'; //Register Form Validation

}  
else if(isset($_REQUEST['off_id']))
{
            $id = $_REQUEST['off_id'];
            $q2 = "SELECT * FROM medical_officer WHERE office_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['office_id'];

              if($id==$row1['office_id'])
               {
                echo '<form class="form_edit" action="edit.php?off_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="name"><b>Full Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                      </div>
                      </div>


                      <div class="form-row">
                      <div class="form-group col-md-4">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Enter Gender</b></label>
                      <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                    </div>
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=14\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];


                    if(!empty($fname))
                      {
                        $query3="UPDATE medical_officer SET full_name='$fname' WHERE office_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($emails))
                      {
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM medical_officer WHERE email='$emails'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE medical_officer SET email='$emails' WHERE office_id='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='dashboard.php?id=14';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE medical_officer SET address='$address' WHERE office_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE medical_officer SET phone_number='$phone' WHERE office_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }
                      if(!empty($gender))
                      {
                        $loginsql="SELECT * FROM medical_officer WHERE office_id='".$id."'";
                          $result=mysqli_query($con,$loginsql);
                          $rows=mysqli_fetch_assoc($result);
                          $a = $rows['gender'];

                          if($a==$gender)
                          {
                              echo "<script type=\"text/javascript\"> alert(\"Gender already Here\");</script>";
                            }else{ 
                              $query3="UPDATE medical_officer SET gender='$gender' WHERE office_id='".$id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                        }
                      }
                }echo '</form>'; //Register Form Validation

            }   
}
else if(isset($_REQUEST['doc_id']))
{
            $id = $_REQUEST['doc_id'];
            $q2 = "SELECT * FROM doctor WHERE did='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['did'];

              if($id==$row1['did'])
               {
                echo '<form class="form_edit" action="edit.php?doc_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="name"><b>Full Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-4">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Enter Gender</b></label>
                      <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                    </div>
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=1\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];


                    if(!empty($fname))
                      {
                        $query3="UPDATE doctor SET full_name='$fname' WHERE did='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=1\";</script>";
                      }
                      if(!empty($emails))
                      {
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM doctor WHERE email='$emails'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE doctor SET email='$emails' WHERE did='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='dashboard.php?id=1';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE doctor SET address='$address' WHERE did='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=1\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE doctor SET phone_number='$phone' WHERE did='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=1\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }
                      if(!empty($gender))
                      {
                        $loginsql="SELECT * FROM doctor WHERE did='".$id."'";
                          $result=mysqli_query($con,$loginsql);
                          $rows=mysqli_fetch_assoc($result);
                          $a = $rows['gender'];

                          if($a==$gender)
                          {
                              echo "<script type=\"text/javascript\"> alert(\"Gender already Here\");</script>";
                            }else{ 
                              $query3="UPDATE doctor SET gender='$gender' WHERE did='".$id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=1\";</script>";
                        }
                      }
                }echo '</form>'; //Register Form Validation

            }   
}
else if(isset($_REQUEST['test_id']))
{
            $id = $_REQUEST['test_id'];
            $q2 = "SELECT * FROM medical_test WHERE test_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['test_id'];

              if($id==$row1['test_id'])
               {
                echo '<form class="form_edit" action="edit.php?test_id='.$id.'" method="POST">
                    
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
                   <button type="submit" name="submit" class="btn col-md-2 btn-light" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-light"  onclick="window.location.href=\'dashboard.php?id=27\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $testname = $_REQUEST['testname'];
                    $desc = $_REQUEST['desc'];
                    $availble = $_REQUEST['availble'];


                    


                    if(!empty($testname))
                      {
                        $query3="UPDATE medical_test SET test_name='$testname' WHERE test_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                         echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=27\";</script>";
                      }


                      if(!empty($desc))
                      {
                        $query3="UPDATE medical_test SET description='$desc' WHERE test_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                         echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=27\";</script>";
                      }

                      if(!empty($availble))
                      {
                        $query3="UPDATE medical_test SET available='$availble' WHERE test_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                         echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=27\";</script>";
                      }


                }echo '</form>'; //Register Form Validation

            }   
}
else{
  header('location:dashboard.php'); 
}
?>

<style type="text/css">
  form.reg_form{
    width: 100%;
    margin-top: 2%;
    background-color: gray;
    border-radius: 30px;
    padding: 30px;
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

  </body>
</html>
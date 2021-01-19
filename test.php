<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //Check login 


  $id  = $_REQUEST['test_sch_id'];
  $email = $_SESSION['email'];

  $viewquery = " SELECT * FROM test_appinment where test_sch_id ='$id' AND email='$email'";
    $viewresult = mysqli_query($con,$viewquery);

  if(mysqli_num_rows($viewresult)>0)
    {
      echo '<script>alert("This Appoinment Alrady in System"); window.location.href="medicaltestappinment.php";</script>';
    }else{
  

        if (isset($_REQUEST['test_sch_id'])) {

          $id  = $_REQUEST['test_sch_id'];
          $email = $_SESSION['email'];
          $cdate = date("Y/m/d m:H:s");
          $date = date("Ymd");
          $pending = "Pending";

          $viewquery = " SELECT * FROM test_schedule where test_sch_id='$id'";
          $viewresult = mysqli_query($con,$viewquery);

          $q4 = "SELECT * FROM test_appinment WHERE test_appoinment_code=(SELECT max(test_appoinment_code) FROM test_appinment where test_sch_id='$id') ";
          $res4 = mysqli_query($con,$q4);

          $row2 = mysqli_fetch_assoc($res4);


                if (isset($row2['test_appoinment_code'])) {
                  $cat_id = $row2['test_appoinment_code'];

                  $last = substr(trim($cat_id), -1);
                  $newCode = $last + 1;
                  $new_last_code = "MT".$id.$date.$newCode;
                }else{
                  $new_last_code = "MT".$id.$date."1";
                }


                if ($row = mysqli_fetch_assoc($viewresult)) {
                  $amount = $row['price'];

                      $q1="INSERT INTO test_appinment(test_sch_id,test_appoinment_code,email,amount,tested,paid,reported,trndate) values('$id','$new_last_code','$email','$amount','$pending','$pending','$pending','$cdate')";
                      $res1=mysqli_query($con,$q1);

                      if ( $res1) {

                           echo '<script>alert("Channel Appinment addin Scussessfully.");
                           window.location.href="medicaltestappinment.php";
                                        </script>';
                          
                      }
                }
          

        }
  }

?>
<?php
require_once 'connection.php';

if(isset($_REQUEST['test_sch_id']))
{
          $id = $_REQUEST['test_sch_id'];

          $querygetcode="SELECT  * FROM test_schedule where test_sch_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['test_sch_id'];

          $query1="DELETE FROM test_schedule WHERE test_sch_id='$a'";
          mysqli_query($con,$query1);

          $query3="DELETE FROM test_appinment WHERE test_sch_id='".$a."'";
          mysqli_query($con,$query3);

          header('location:dashboard.php?id=25');
}
else if(isset($_REQUEST['test_id']))
{
          $id = $_REQUEST['test_id'];

          $querygetcode="SELECT  * FROM medical_test where test_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['test_id'];

          $querygetcode1="SELECT  * FROM test_schedule where test_id='".$id."'";
          $catresult1=mysqli_query($con,$querygetcode1);
          $result_row1=mysqli_fetch_assoc($catresult1);
          $testscid=$result_row1['test_sch_id'];

          $query3="DELETE FROM test_appinment WHERE test_sch_id='".$testscid."'";
          mysqli_query($con,$query3);

          $query2="DELETE FROM test_schedule WHERE test_id='$a'";
          mysqli_query($con,$query2);

          $query1="DELETE FROM medical_test WHERE test_id='$a'";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=27');

}  else if(isset($_REQUEST['sch_id'])){
          $id = $_REQUEST['sch_id'];

          $querygetcode="SELECT  * FROM schedule where sch_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['sch_id'];

          $query4="DELETE FROM appinment WHERE sch_id='".$a."'";
          mysqli_query($con,$query4);

          $query1="DELETE FROM schedule WHERE sch_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=2');
}

else if(isset($_REQUEST['doc_id']))
{
          $id = $_REQUEST['doc_id'];

          $querygetcode="SELECT  * FROM doctor where did='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['did'];

          $querygetcode1="SELECT  * FROM schedule where docid='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);
          $result_row1=mysqli_fetch_assoc($catresult1);
          $testscid=$result_row1['sch_id'];
          
          $query4="DELETE FROM appinment WHERE sch_id='".$testscid."'";
          mysqli_query($con,$query4);

          $query1="DELETE FROM schedule WHERE docid='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=2');

          $query1="DELETE FROM doctor WHERE did='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=1'); 
}
else if(isset($_REQUEST['office_id']))
{
          $id = $_REQUEST['office_id'];

          $querygetcode="SELECT  * FROM medical_officer where office_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['office_id'];

          $query1="DELETE FROM medical_officer WHERE office_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=14');  
}
else if(isset($_REQUEST['pid']))
{
          $id = $_REQUEST['pid'];

          $querygetcode="SELECT  * FROM patients where pid='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['pid'];
          $emails=$result_row['email'];

          $q1="DELETE FROM test_appinment WHERE email='".$emails."'";
          mysqli_query($con,$q1);

          $query4="DELETE FROM appinment WHERE patient_email='".$emails."'";
          mysqli_query($con,$query4);


          $query1="DELETE FROM patients WHERE pid='$a '";
          mysqli_query($con,$query1);
          header('location:view.php');  
          header('location:view.php');  
}
else{
  header('location:dashboard.php'); 
}
?>
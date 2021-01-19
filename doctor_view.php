
<!DOCTYPE html>
<html>
<head>
  <title>Helth Care Center</title>

  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form.css">
    <!-- Load Icon -->
  <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>


</head>
<body>
<div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #0f3460">
        <div class="col-md-9 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php"><b><i class="fas fa-arrow-left mr-3"></i>Health Care Center - View Patients Details</b></a></h3>
        </div>

        <!-- Search form -->
         <div class="col-md-3 justify-content-center">
            <form action="" method="POST" class="form-inline">
              <i class="fas fa-search text-light" aria-hidden="true"></i>
              <input name="search_box" class="form-control form-control-sm ml-3 w-70" type="text" placeholder="Search" aria-label="Search">
              <button type="submit" name="submit" class="btn btn-outline-light btn-rounded waves-effect ml-2">Search</button>
          </form>
         </div>
      </div>
    </div><!-- Nav Bar End -->
</body>
</html>

<style type="text/css">
    table.student_table_03{
  text-align: center;
  margin-top: -5px;

}
table.student_table_03 th{
  border: 2px solid black;
  text-align: center;
  color: white;
  font-size: 1vw;
  background-color: black;
}
table.student_table_03 td{ 
  border: 1px solid black;
  background-color: white;
  font-size: 1vw;
  height : 10px;
  color: black;
}

</style>

<?php
require_once 'connection.php';
  require_once 'doctor.php'; //Check login 

if (isset($_POST['submit'])) {

  $search = $_REQUEST['search_box'];
  

    $count=1;
    $viewquery = " SELECT * FROM patients where full_name = '".$search."' OR email = '".$search."' ";
    if($viewresult = mysqli_query($con,$viewquery)){

    echo '
    <div class="view_div mt-1 ml-1">
    <a style="text-decoration: none; color: yellow" href="view.php"><h1 class="student_h1"> Patients Details </h1></a></br>


    <table style= "padding :2%; width:99%; margin-left:0.5%;" class="student_table_new"> 
    <tr>
      <th style="width : 10%"> Name </th>
      <th style="width : 8%"> Phone Number </th>
      <th style="width : 8%"> Date of Birth </th>
      <th style="width : 5%"> Gender </th>
      <th style="width : 10%"> Email </th>
      <th style="width : 15%"> Addresss </th>
      <th style="width : 12%"> Registered Date </th> 
      <th style="width : 10%"> Delete </th>  
    </tr>';

    while($row = mysqli_fetch_assoc($viewresult))
    {
    echo '
    <tr>
    <td>'.$row['full_name'].'</td>
    <td>'.$row['phone_number'].'</td>
    <td>'.$row['dob'].'</td>
    <td>'.$row['gender'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['trndate'].'</td>
    <td><a href="patients_delete.php?pid ='.$row['pid'].'">Delete</a></td>
    </tr>
    ';
    $count++;
    }
    echo '</table></div>';
  }else{ ?>
    <a style="text-decoration: none; color: red; margin-left : 5%;" href="view.php"><h1 class="student_h1">Refresh Patients Details </h1></a></br>

<h1>No Data FOUND</h1>
<?php   }


}else{

  $count=1;
  $viewquery = " SELECT * FROM patients";
  $viewresult = mysqli_query($con,$viewquery);

  echo '
  <div class="view_div mt-1 ml-1">
  <a style="text-decoration: none; color: yellow" href="view.php"><h1 class="student_h1"> Patients Details </h1></a></br>


  <table style= "padding :2%; width:99%; margin-left:0.5%;" class="student_table_new"> 
  <tr>
    <th style="width : 10%"> Name </th>
    <th style="width : 8%"> Phone Number </th>
    <th style="width : 8%"> Date of Birth </th>
    <th style="width : 5%"> Gender </th>
    <th style="width : 10%"> Email </th>
    <th style="width : 15%"> Addresss </th>
    <th style="width : 12%"> Registered Date </th>
    <th style="width : 10%"> Delete </th>  
  </tr>';

  while($row = mysqli_fetch_assoc($viewresult))
  {
  echo '
  <tr>
  <td>'.$row['full_name'].'</td>
  <td>'.$row['phone_number'].'</td>
  <td>'.$row['dob'].'</td>
  <td>'.$row['gender'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['address'].'</td>
  <td>'.$row['trndate'].'</td>
  <td><a href="delete.php?pid='.$row['pid'].'">Delete</a></td>
  </tr>
  ';
  $count++;
  }
  echo '</table>';
  echo '<button onclick="window.location.href=\'dashboard.php\'" class="btn btn-light" style="margin-left: 1%; margin-top: 2%;"><i class="fas fa-backward mr-1"></i> Back to Main</button>';

  echo '</div>';
}

?>
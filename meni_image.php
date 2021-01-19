<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

 if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $name1 = $_FILES['file1']['name'];



  // $target_dir = "upload/";
  $target_dir = "img/upload/menu/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);



  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));



  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  $viewquery = " SELECT * FROM menu";
  $viewresult = mysqli_query($con,$viewquery);

  if(mysqli_num_rows($viewresult)>0){
      echo '<script>alert("Slide Show Alrady Addedd. You can Only Change Image"); window.location.href="dashboard.php?id=11";</script>';
  }else{

      // Check extension
      if( in_array($imageFileType,$extensions_arr) ){
        if( in_array($imageFileType1,$extensions_arr) ){

     
                 $query = "INSERT into menu(image1,image2) values('".$name."','".$name1."')";
                 mysqli_query($con,$query);
              
                 // Upload file
                 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                 move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);

                  echo '<script>alert("Slide Show Inserted Success"); window.location.href="dashboard.php?id=11";</script>';
          
        
       }
      }
 
  }
}
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Health Care Center</title>
  
</head> 
<body><?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>

<!DOCTYPE html>
<html>
<head>
  <!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_css/form2.css">
    <link rel="stylesheet" type="text/css" href="css/dash/dash_style1.css">

     <!-- Load Icon -->
  <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/doc.js"></script>

      <!-- Load Icon -->
    <link rel="icon" type="image/png" href="img/icon/92132887_1057695377947727_5332802222742831104_o.jpg" sizes="300x300" />

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">

     <style type="text/css">
       .form_edit{
          width: 80%;
          padding: 3%;
          color:  #00394e;
          margin-top: 3%;
          font-family: \"Times New Roman\", Times, serif;
          margin-left: 10%;
        }
     </style>

  </head>
  <body class="a bg-light">
    <div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid black; background-color: #0f3460">
        <div class="col-md-3 ">
          <h3 class=""><a class="text-light" style="text-decoration: none;" href="dashboard.php?id=11"><b><i class="fas fa-arrow-left mr-3"></i></b></a></h3>

        </div>
        <div class="col-md-9 ">
          <h3 class=""><a class="text-info" style="text-decoration: none; float: right; font-size: 30px;" href="dashboard.php"><b>Health Care Center Menu Banner Manager </b></a></h3>
        </div>
      </div>
    </div><!-- Nav Bar End -->

    <h3 class=""><a class="text-info ml-5" style="text-decoration: none; float: left; font-size: 30px;" href="meni_image.php"><b>Add Image Slider </b></a></h3>

  <div id="content"><br>
  <form method="post" action="" style="padding: 3%;" enctype='multipart/form-data'>
    <p style="font-size: 20px; color: red">Image 01</p>
    <input type='file' name='file' /><br>

    <p style="font-size: 20px; color: red">Image 02</p>
    <input type='file' name='file1' /><br>


    <input class="btn btn-info col-sm-2" type='submit' value='Upload' name='but_upload'><br><br>
  </form>
</body>
</html>
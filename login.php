<?php
	require_once 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Helth Care Center</title>

	<!-- Load Icon -->
	<link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />
	<!-- link css Styles -->
	<link rel="stylesheet" type="text/css" href="css/login/login_style1.css">
	<!--load all styles of fontawesome -->
	<link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> 

	<!--  Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

</head>
<body class="body" style="background: url(img/back/4QElO0.jpg);
	width: 100%;
	background-size: 100%;">

	<form class="form-signin" id="form" action="login.php" method="POST">

	<b><h2 id="log_in">Helth Care Center<br>Log In</h2></b>

	<img src="img/icon/log.ico" class="log_img" style="margin-bottom: 5%;" width="40%" class="ml-5"><br><br>

	<i class="fas fa-user"></i><input class="form_login"  placeholder="UserName" style="text-transform: uppercase;" type="text" id="uname" name="regnum"><br>
	<i class="fas fa-key"></i><input class="form_login" placeholder="Password" type="password" id="pass"  name="pass"><br><br>

	<button class="but_01" type="submit" name="submit"><b>Log In</b></button><br><br>
	<p style="color: white; font-size: 11px;">Dear Customer Do you want Register click here..    <a style="margin-left: 1%;" href="register_patients.php">Register</a></p>




</form>

<?php
	if(isset($_POST['submit']))
	{
		$regnum=stripslashes($_REQUEST['regnum']);
		$password=stripslashes($_REQUEST['pass']);


		$loginsql3="SELECT * FROM medical_officer WHERE username='$regnum' AND password='".md5($password)."'";
		$result3=mysqli_query($con,$loginsql3) or mysqli_errno();
		$rows4=mysqli_num_rows($result3);

		$loginsql4="SELECT * FROM doctor WHERE username='$regnum' AND password='".md5($password)."'";
		$result4=mysqli_query($con,$loginsql4) or mysqli_errno();
		$rows5=mysqli_num_rows($result4);
		

		$loginsql5="SELECT * FROM patients WHERE email='$regnum' AND password='".md5($password)."'";
		$result5=mysqli_query($con,$loginsql5) or mysqli_errno();
		$rows6=mysqli_num_rows($result5);

		if($rows4 == 1){
			$_SESSION['username']=$regnum;
			echo "<script type=\"text/javascript\">window.location.href='dashboard.php'; </script>";
		}
		else if ($rows5 == 1) {
			$_SESSION['doctor']=$regnum;
			echo "<script type=\"text/javascript\">window.location.href='doctor_dashboard.php'; </script>";
		}else if ($rows6 == 1) {
			$_SESSION['email']=$regnum;
			echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
		}else{
			echo "<script>alert(\"Username or Password is incorrect\");</script>";
		}
	}
?>
</body>
</html>
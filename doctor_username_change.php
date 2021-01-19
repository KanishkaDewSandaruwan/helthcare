<?php
require_once 'connection.php';
  require_once 'doctor.php'; //Check login 
?>

<!DOCTYPE html>
<html>
<head>
	<!-- load icon -->
   <link rel="icon" type="image/png" href="img/logo/logo.jpg" sizes="300x300" />
	<title>Health Care Center</title>
	<style type="text/css">
	img{
		width: 20%;
		float: left;
	}
		form.edit_page{
			background-color: white;

			width: 30%;
			padding: 3%;
			height: 20vw;
			text-align: left;
			padding-left: 50px;
			margin-top: 20px;
			float: left;
			padding: 1%;
			margin-left: 35%;
			border-radius: 20px;
			text-align: center;
			border: 1px solid black;
		}
		label.reg_label{
			color: #0f3460;
			font-size: 25px;
			margin-bottom: 2%;
			font-family: \"Times New Roman\",Times, serif;
		}
		input.reg_box{
			width:100%;
			height: 35px;
			font-size: 20px;
			margin-bottom: 10%;
		}
		input.reg_checkbox{
			border: 2px solid black;
			cursor: pointer;
		}
		.reg_box:hover{
			border: 2px solid red;
		}
		label.reg_label_agree{
			color: black;
			font-size: 20px;
		}
		button.reg_but{
			width: 100%;
			height: 50px;
			color: white;
			background-color: #0f3460;
			font-size: 20px;
			cursor: pointer;
			transition-duration: 0.4s;
			margin-bottom: 3%;
			font-family: \"Times New Roman\",Times, serif;
		}
		.button1:hover{
			background-color: green;
			color: black;
		}
		

	</style>

</head>
<body style="background-color: #0f3460">
<form class="edit_page" action="doctor_username_change.php" method="POST" style="padding: 3%; font-family: \"Times New Roman\",Times, serif;">
	
			<label class="reg_label">Username </label><br>	<input style="text-transform: uppercase;" class="reg_box" type="text" name="uname"><br><br>
			<button class="reg_but button1" type="submit" name="sign_sub">Update Username</button>
			<button class="reg_but button1" type="button" name="sign_sub" onclick="window.location.href='doctor_dashboard.php'">Go back Home</button>
</form>
<?php
	if(isset($_POST['sign_sub']))
	{
		$uname=$_POST['uname'];
		$g = $_SESSION['doctor'];

		if(!empty($uname))
		{
			$query1="SELECT * FROM doctor WHERE username='$uname'";
			$sql1=mysqli_query($con,$query1);


				if(mysqli_num_rows($sql1)>0)
				{
					echo "<script type=\"text/javascript\"> alert(\"Username is already Exsisted\");</script>";
				}
				else
				{
					$query2="SELECT * FROM medical_officer WHERE username='$uname'";
					$sql2=mysqli_query($con,$query2);

					if(mysqli_num_rows($sql2)>0)
					{
						echo "<script type=\"text/javascript\"> alert(\"Username is already Exsisted\");</script>";
					}
					else
					{

						$query3="UPDATE doctor SET username='$uname' WHERE username='".$g."'";
						$sql3=mysqli_query($con,$query3);
						echo "<script type=\"text/javascript\"> alert(\"Username Change Successfully\"); window.location.href='logout.php';</script>";
					}
				}
		
		}else{
			echo "<script type=\"text/javascript\"> alert(\"Please Enter Username\");</script>";
		}
	}
?>
	
</body>
</html>
<?php
require_once 'connection.php';
require_once 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>


<!-- load icon -->
    <link rel="icon" type="image/png" href="img/icon/unnamed.png" sizes="300x300" />
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


	<link rel="stylesheet" type="text/css" href="css.aaa.css">
	<style type="text/css">
		form.edit_page{
			padding: 3%;
			width: 30%;
			font-family: \"Times New Roman\", Times, serif;
			height: 40vw;
			text-align: left;
			padding-left: 50px;
			padding-top: 5%;
			padding: 1%;
			margin-left: 35%;
			text-align: center;
			margin-top: 2%;
		}
		label.reg_label{
			color: white;
			font-size: 2vw;
		}
		input.reg_box{
			width:90%;
			height: 2.5vw;
			font-size: 15px;
			padding-left: 10px;
			margin-top: 3%;
		}
		input.reg_checkbox{
			width: 1vw;
			height: 1vw;
			border: 2px solid black;
			cursor: pointer;
		}
		.reg_box:hover{
			border: 2px solid yellow;
		}
		label.reg_label_agree{
			color: red;
			font-size: 1vw;
			margin-left: 2%;
		}
		button.reg_but{
			width: 90%;
			height: 3vw;
			color: white;
			background-color: gray;
			font-size: 1.5vw;
			cursor: pointer;
			transition-duration: 0.4s;
		}

		.btn:hover{
			background-color: black;
			color: white;
			transition-duration: 0.4s;
		}
		.btn: not (:hover){
			transition-duration: 0.4s;
		}
		}

	</style>

</head>
<body style="background-color: #0f3460">
<form class="edit_page" action="admin_pass.php" method="POST">
			<input class="reg_box" placeholder="Current Password" type="password" name="cpass">
			<input class="reg_box" placeholder="New Password" type="password" name="npass">	
			<input class="reg_box" placeholder="Confirm Password" type="password" name="conpass"><br><br>

			<input class="reg_checkbox" type="checkbox" name="accept"><label class="reg_label_agree">  Are You wont Change Password</label><br><br>
			<button class="btn col-md-10 btn-light" type="submit" name="sign_sub">Change Password</button><br><br>
			<button class="btn col-md-10 btn-light " type="button" onclick="window.location.href='dashboard.php'" name="sign_sub">Go to Dashboard</button><br><br>

<?php
	if(isset($_POST['sign_sub']))
	{
		$currentpass=stripslashes($_REQUEST['cpass']);
		$newpass=stripslashes($_REQUEST['npass']);
		$confpass=stripslashes($_REQUEST['conpass']);
		$g = $_SESSION['username'];

		if(!empty($currentpass)){
			if(!empty($newpass)){
				if(!empty($confpass)){

					$loginsql="SELECT * FROM medical_officer WHERE password='".md5($currentpass)."'";
					$result=mysqli_query($con,$loginsql) or mysqli_errno();
					$rows=mysqli_fetch_assoc($result);

					$a=$rows['password'];

					$query5="SELECT password FROM medical_officer WHERE username='".$g."'";
					$sql5=mysqli_query($con,$query5);
					$row=mysqli_fetch_assoc($sql5);

					$a=$row['password'];

					if($rows['password']==$row['password'])
					{
						if($newpass==$confpass){
							$query3="SELECT * FROM medical_officer WHERE password='$newpass'";
							$sql3=mysqli_query($con,$query3);

							if(mysqli_num_rows($sql3)>0)
							{
								echo "<script>alert(\"Password is Alrady Exists\");</script>";
							}
							else
							{
								if(!empty($_POST['accept']))
								{ 
									$query2="UPDATE medical_officer SET password='".md5($newpass)."' WHERE username='".$g."'";
									$sql2=mysqli_query($con,$query2);
									echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>";

								}else{echo "Please Accept Password Change";}	
							}

						}else{echo "<script>alert(\"Your Password is Not Match\");</script>";}
					}else{echo "<script>alert(\"Current Password is Wrong\");</script>";}
				}else{echo "<script>alert(\"Enter Confirm Password\");</script>";}
			}else{echo "<script>alert(\"Enter New Password\");</script>";}
		}else{echo "<script>alert(\"Enter Current Password\");</script>";}
	}
?>
	</form>
</body>
</html>
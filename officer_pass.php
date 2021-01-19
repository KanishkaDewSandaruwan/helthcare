<?php
require_once 'connection.php';
require_once 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form.edit_pagea{
			padding: 4%;
			width: 30%;
			font-family: \"Times New Roman\", Times, serif;
			height: 40vw;
			text-align: left;
			padding-left: 50px;
			padding: 1%;
			margin-left: 35%;
			text-align: center;
			background-color: white;
			margin-top: 2%;
		}
		label.reg_label{
			color: #0f3460;
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
			border: 2px solid red;
		}
		label.reg_label_agree{
			color: black;
			font-size: 1vw;
			margin-left: 2%;
		}
		button.reg_but{
			width: 90%;
			height: 3vw;
			color: white;
			background-color: #0f3460;
			font-size: 1.5vw;
			cursor: pointer;
			transition-duration: 0.4s;
			border-radius: 2em;
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
<body style="background: url(img/back/4QElO0.jpg);
	width: 100%;
	background-size: 100%;">
<form style="padding-top: 70px; border-radius: 3em; " class="edit_pagea" action="officer_pass.php" method="POST">
			<label class="reg_label">Current Password </label><br>		<input class="reg_box" type="password" name="cpass">
			<label class="reg_label">New Password </label><br>			<input class="reg_box" type="password" name="npass">
			<label class="reg_label">Confirm Password </label><br>		<input class="reg_box" type="password" name="conpass"><br><br>

			<input class="reg_checkbox" type="checkbox" name="accept"><label class="reg_label_agree">  Are You wont Change Password</label><br><br>
			<button class="reg_but button1" type="submit" name="sign_sub">Change Password</button><br><br>
			<button class="reg_but button1" type="button" onclick="window.location.href='dashboard.php'" name="sign_sub">Go to Dashboard</button><br><br>

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
								echo "password already Exsisted";
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

						}else{echo "Your Password is Not Match";}
					}else{echo "Current Password is Wrong";}
				}else{echo "Enter Confirm Password";}
			}else{echo "Enter New Password";}
		}else{echo "Enter Current Password";}
	}
?>
	</form>
</body>
</html>
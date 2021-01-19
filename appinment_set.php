<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 


  if (isset($_REQUEST['app_id'])) {
  	$id = $_REQUEST['app_id'];

  		$query3="UPDATE appinment SET accept='Accepted' WHERE app_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=18\";</script>";
  }

  else if (isset($_REQUEST['reject_app'])) {
  	$id = $_REQUEST['reject_app'];

  		$query3="UPDATE appinment SET accept='Rejected' WHERE app_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=18\";</script>";
  }
  else if (isset($_REQUEST['paid'])) {
  	$id = $_REQUEST['paid'];

  		$query3="UPDATE appinment SET paid='Paided' WHERE app_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=21\";</script>";
  }
  else if(isset($_REQUEST['delete']))
{
	$id = $_REQUEST['delete'];

		$query3="DELETE FROM appinment WHERE app_id='$id '";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=22\";</script>";
}
  else if(isset($_REQUEST['rejectdelete']))
{
	$id = $_REQUEST['rejectdelete'];

		$query3="DELETE FROM appinment WHERE app_id='$id '";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=23\";</script>";
}

?>
<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 


  if (isset($_REQUEST['tested'])) {
  	$id = $_REQUEST['tested'];

  		$query3="UPDATE test_appinment SET tested='Tested' WHERE test_appoinment_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=28\";</script>";
  }

  else if (isset($_REQUEST['testedpaid'])) {
  	$id = $_REQUEST['testedpaid'];

  		$query3="UPDATE test_appinment SET tested='Tested', paid='Paided' WHERE test_appoinment_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=28\";</script>";
  }
  else if (isset($_REQUEST['pay'])) {
  	$id = $_REQUEST['pay'];

  		$query3="UPDATE test_appinment SET paid='Paided' WHERE test_appoinment_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=29\";</script>";
  }

   else if (isset($_REQUEST['reported'])) {
    $id = $_REQUEST['reported'];

      $query3="UPDATE test_appinment SET reported='Reported' WHERE test_appoinment_id='".$id."'";
    $sql3=mysqli_query($con,$query3);
      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=32&test_appoinment_id=".$id."\";</script>";
  }

  else if(isset($_REQUEST['delete']))
{
	$id = $_REQUEST['delete'];

		$query3="DELETE FROM test_appinment WHERE test_appoinment_id='$id '";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=31\";</script>";
}

?>
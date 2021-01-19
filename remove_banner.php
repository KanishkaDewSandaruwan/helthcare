<?php 
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

  $delete_query = "DELETE FROM banner";
  mysqli_query($con,$delete_query);
  header('location:dashboard.php?id=10'); 
 ?>
<?php
  //error_reporting(1);
  session_start();
  require('../includes/core.php');
  
  $status=0;
  
  $uid=$_SESSION['id'];
  $agent=$_SESSION['usertype'];
 
  date_default_timezone_set("Africa/Kampala");
  $today = date("F j, Y, g:i a");

     $q = "UPDATE `users` SET `status`='".$status."' WHERE `id`='".$uid."' and `usertype`='".$agent."' ";
	 if($x = mysqli_query($con,$q)){
		session_destroy();	
		header("location:../");
	 }
	
		
    
?>
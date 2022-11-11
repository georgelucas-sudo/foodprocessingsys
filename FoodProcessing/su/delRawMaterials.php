<?php
	include('../includes/core.php');
	if(!empty($_GET['id']))
	{
		$id  = $_GET['id'];
		$del = "DELETE FROM `rawmaterials`WHERE `id`='".$id."'  ";
		if($exe = mysqli_query($con,$del))
		{
			   $sesserror=base64_encode('Raw Material deleted successfully');
			   $redirect='../su/managerawmaterials.php?del='. $sesserror.'';
			   header('refresh: 0; url='.$redirect );
			   
		}
	}
?>
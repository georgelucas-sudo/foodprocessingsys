<?php
	include('../includes/core.php');
	if(!empty($_GET['id']))
	{
		$id  = $_GET['id'];
		$del = "DELETE FROM `finishedproducts` WHERE `id`='".$id."' ";
		if($exe = mysqli_query($con,$del))
		{
			   $sesserror=base64_encode('Product deleted successfully');
			   $redirect='../su/manageFinshedProducts.php?del='. $sesserror.'';
			   header('refresh: 0; url='.$redirect );
			   
		}
	}
?>
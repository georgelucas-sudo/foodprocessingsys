<?php
session_start();
if(!empty($_SESSION['id']) && !empty($_SESSION['usertype'])){
	
   }else{
	   $sesserror=base64_encode('Your session has expired.Please login first');
	   $redirect='../index.php?autherror='. $sesserror.'';
	   header('refresh: 0; url='.$redirect );
   }

?>
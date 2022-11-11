<?php
ob_start();
session_start();
?>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Food Processing</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0" style="border-radius:0px;">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Food Processing System</h4></a>
								
                                <form class="mt-5 mb-5 login-input" method="POST">
						<?php
								 if(!empty($_GET['autherror'])){
									 print '<center><p class="text-danger"> <b>Please Login First!</b></p></center>';

									UNSET($_GET['autherror']);
									echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"10; URL=".$_SERVER['PHP_SELF']."\" >";								  
							  }		
			            ?>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="userpass" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <button class="btn login-form__btn submit " name = "LogOn" style="border-radius:0px;">Log In</button>
									<BR>
									<?php
										include('includes/core.php');
										if(isset($_POST['LogOn']))
										{
											$uname = $_POST['username'];
											$upass = $_POST['userpass'];
										
											if(!empty($uname) && !empty($upass))
											{
												$getUser  = "SELECT * FROM `users` WHERE `username`='".$uname."' LIMIT 1 ";
												if($execq = mysqli_query($con,$getUser))
												{
													if(mysqli_num_rows($execq) > 0)
													{
														if($data = mysqli_fetch_array($execq))
														{
															$pass = $data['password'];
															if(password_verify($upass,$data['password']))
															{
																if(is_array($data))
																{
																	$_SESSION['id']       = $data['id'];
																	$_SESSION['username'] = $data['username'];
																	$_SESSION['fullname'] = $data['fullname'];
																	$_SESSION['usertype'] = $data['usertype'];
																}
															}else{
																echo '<p class="text-danger"><b> Incorrect username password combination </b></p>';
															}
														}
													}else{
												echo '<p class="text-danger"><b> Username or password required! </b></p>';
											}
												}
												
											}else{
												echo '<p class="text-danger"><b>Username or password required!</b></p>';
											}
										}
										
										if(isset($_SESSION['username']) && isset($_SESSION['id']) && isset($_SESSION['usertype']))
										{
											echo $agent   = $_SESSION['usertype'];
											if($agent =='root')
											{
												$status ='1';
												$q      = "UPDATE `users` SET `status`='".$status."' WHERE `id`='".$_SESSION['id']."'";
												$qexec  = mysqli_query($con,$q);
												header("location:user/dashboard.php");
											
											}else if($agent =='su')
											{
												$status ='1';
												$q      = "UPDATE `users` SET `status`='".$status."' WHERE `id`='".$_SESSION['id']."'";
												if($qexec  = mysqli_query($con,$q)){
												
												header("location:su/dashboard.php");
												}
											}
										}
									
									?>
								</form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>






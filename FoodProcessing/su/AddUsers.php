<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Food Processing</title>
    <?php include('includes/headerStyles.php'); ?>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="dashboard.php">
                    <h3 style="color:white;">Food Processing</h3>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
				
                <div class="header-right">
                   <ul class="clearfix">
                       
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="../images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <hr class="my-2">
                                        <li><a href="#"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
          <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="manageUsers.php">Manage Users</a></li>
                         
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Products</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="addproducts.php">Add Finished Products</a></li>
                            <li><a href="addrawmaterials.php">Add Raw Materials</a></li>
                        </ul>
                    </li>
               
                    
                  
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card" style="border-radius:0px;">
                            <div class="card-body" >
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
									<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Full Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="fname" placeholder="Enter a full name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password" name="confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">User Type <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="userType">
                                                    <option value="">Choose User Type</option>
                                                   
                                                    <option value="su">Admin User</option>
													<option value="root">Normal User</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                      
                                      
                                       
                                      
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="addUser" style="border-radius:0px;" class="btn btn-primary">Add User</button>
                                            </div>
                                        </div>
										<?php
											include('../includes/core.php');
											if(isset($_POST['addUser']))
											{
												$fname    = $_POST['fname'];
												$username = $_POST['username'];
												$password = $_POST['password'];
												$confpass = $_POST['confirm-password'];
												$userType = $_POST['userType'];
												$hashme   = password_hash($confpass, PASSWORD_DEFAULT);
												
												if(!empty($fname) && !empty($username) && !empty($password) && !empty($userType))
												{
													$q = "SELECT * FROM users WHERE username='".$username."' ";
													$z = mysqli_query($con,$q);
													if(mysqli_num_rows($z)>0)
													{
														echo '<p class="text-danger">Username name already in use. Please choose another one!</p>';
													}else{
														if($password!=$confpass)
														{
															echo '<p class="text-danger"> Passwords donot match</p>';
														}else{
															$status = 0;
															$do = "INSERT INTO users (username,fullname,password,usertype,status)
															VALUES('".$username."','".$fname."','".$hashme."','".$userType."','".$status."')";
															
															if(mysqli_query($con,$do))
															{
																echo '<center><p class="text-success">User Added Successfully</p></center>';
															}else{
																echo '<center><p class="text-danger">Oops! something went wrong</p></center>';
															}
														}
													}
												}else{
													echo '<center><p class="text-danger">All fields are required</p></center>';
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Food Processing </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
     <?php  include('includes/FooterScripts.php'); ?>

</body>

</html>
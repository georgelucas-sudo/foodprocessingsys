<?php 
	require('trackuser.php');
?>
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
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"> Add Raw Materials</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card"  style="border-radius:0px;">
                            <div class="card-body">
								<div class="form-validation">
								<a href="managerawmaterials.php" class="btn btn-primary" style="border-radius:0px;"> MANAGE RAW MATERIALS</a>
                                    <form class="form-valide" action="#" method="post">
									<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Raw Material Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="pname" placeholder="Enter a raw material name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Raw Material Quantity<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-username" name="pquantity">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Raw Material Price <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="pprice" placeholder="Enter raw material  price">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" style="border-radius:0px;" name="addProduct" class="btn btn-primary">Save Raw Material</button>
                                            </div>
                                        </div>
										</form>
										<br>
										<?php
											
											require('../includes/core.php');
											$uid  = $_SESSION['id'];
											if(isset($_POST['addProduct']))
											{
												$pname     = $_POST['pname'];
												$pquantity = $_POST['pquantity'];
												$pprice    = $_POST['pprice'];
												
												if(!empty($pname) && !empty($pquantity) && !empty($pprice))
												{
													$d = "INSERT INTO `rawmaterials`(pname,pquantity,pprice,addedBy) VALUES('".$pname."','".$pquantity."','".$pprice."','".$uid."')";
													if(mysqli_query($con,$d))
													{
														echo '<center><p class ="text-success">Raw material added successfully</p></center>';
													}else{
														echo '<center><p class="text-danger">Oops! Something went wrong!</p></center>';
													}
												}else{
													echo '<center><p class="text-danger">All fields are required</center></p>';
												}
											}
										?>
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
                <p>Copyright &copy; Food Processing System </p>
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
<?php
	include('../includes/core.php');
	require('trackuser.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Food Processor  - Home </title>
    <?php include('includes/headerStyles.php'); ?>
</head>

<body>

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
         <div class="nk-sidebar"">           
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
        <div class="content-body" >

            <div class="container-fluid mt-3" >
				<h3>WELCOME: <b class ="text-danger"><?php echo $_SESSION['username']; ?></b></h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6" >
                        <div class="card gradient-1" style="border-radius:0px;">
                            <div class="card-body">
                                <h3 class="card-title text-white">Finished Products</h3>
                                <div class="d-inline-block">
									<?php
										$q = 'SELECT * FROM `finishedproducts`';
										$x = mysqli_query($con,$q);
										
									?>
                                    <h2 class="text-white"><?php echo $count1 = mysqli_num_rows($x); ?></h2>
                                 
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card gradient-2" style="border-radius:0px;">
                            <div class="card-body">
                                <h3 class="card-title text-white">Raw Materials</h3>
                                <div class="d-inline-block">
                                    <?php
										$q = 'SELECT * FROM `rawmaterials`';
										$x = mysqli_query($con,$q);
										
									?>
                                    <h2 class="text-white"><?php echo $count1 = mysqli_num_rows($x); ?></h2>
             
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
                <p>Copyright &copy; Food Processing System</p>
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
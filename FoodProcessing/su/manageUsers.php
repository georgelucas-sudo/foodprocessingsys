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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Users</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card" style="border-radius:0px;">
                            <div class="card-body">
							<a href ="addusers.php" class ="btn btn-primary" style="border-radius:0px;">ADD USER</a>
							<br>
                               <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Role</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												include('../includes/core.php');
												$q = "SELECT * FROM users";
												$b = mysqli_query($con,$q);
												
											?>
											<?php
												while($data = mysqli_fetch_assoc($b)){
											?>
                                           <tr>
												<td><?php echo $data['username']; ?></td>
												<td><?php echo $data['fullname']; ?></td>
												<td><?php if($data['usertype']=='su')
															{ 
															echo 'Admin';
															}elseif($data['usertype']=='root')
															{
																echo 'Normal User';
															}
															?></td>
												
										   </tr>
										   <?php
												}
										   ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Role</th>
												
                                            </tr>
                                        </tfoot>
                                    </table>
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
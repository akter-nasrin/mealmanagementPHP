<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <div id="main-wrapper">
     
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                        <span><img src="images/icn.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    
                       
                      
                      
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar ">
   
            <div class="scroll-sidebar">
       
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                        </li>
                     
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        
                      
                       <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a>
                           
								<li><a href="add_menu.php">Add Menu</a></li>
                               
                                
                              
                              
                                
                            </ul>
                        </li>
						 <li> <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                         <li> <a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span>Feedback</span></a></li> 
                         <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i><span>Rating</span></a></li> 
                    </ul>
                </nav>
            
            </div>
           
        </div>
    
        <div class="page-wrapper">
         
        
        
            <div class="container-fluid ">
            <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Admin Dashboard</h4>
                            </div>
                     <div class="row">
                   
                   
					
					 <div class="col-md-3">
                        <div class="card p-30 bg-danger">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <p class="m-b-0">Dishes</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-3">
                        <div class="card p-30 bg-secondary">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <p class="m-b-0"> Total Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-3">
                        <div class="card p-30 bg-warning">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div
                                    <p class="m-b-0">Total Orders</p> 
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="col-md-3">
              
                        <div class="card p-30 bg-success">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-home f-s-40 "></i></span>
                                </div>
                                <div class="media-body media-text-right ">
                                    
                                    <p class="m-b-0">Total Feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                   </div>
                  
                </div>     
                
              

                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-30 .bg-primary-subtle">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-times f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <p class="m-b-0">Cancelled Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card p-30 bg-success">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-usd f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <p class="m-b-0">Total Earnings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card p-30 bg-primary">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-star f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <p class="m-b-0">Total Ratings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
   
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>
<?php
}
?>
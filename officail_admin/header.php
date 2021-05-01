<?php 
include 'session.php';
require_once "config.php";

$userType= $_SESSION['userType'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body onload=display_clock_time();>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>OutKast Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php" class= "<?php if($page== "Homepage"){ echo 'active'; } ?>"><i class="fa fa-home fa-fw "></i>Dashboard</a></li>
            <li><a href="data-visualization.php" class="<?php if($page== "Data-Visualization"){ echo 'active'; } ?>"><i class="fa fa-database fa-fw "></i>Currency</a></li>
            <li><a href="manage-users.php" class="<?php if($page== "Manage-Users"){ echo 'active'; } ?>"><i class="fa fa-users fa-fw "></i>Manage Users</a></li>
             <li><a href="manage-customer.php" class="<?php if($page== "Manage-customer"){ echo 'active'; } ?>"><i class="fa fa-users fa-fw "></i>Manage Customer</a></li>
             <li><a href="registration.php" class="<?php if($page== "Manage-customer"){ echo 'active'; } ?>"><i class="fa fa-users fa-fw "></i>Add User</a></li>
             <li><a href="csv.php" class="<?php if($page== "Manage-customer"){ echo 'active'; } ?>"><i class="fa fa-users fa-fw "></i>Files</a></li>
            <li><a href="../Customer-Banking/Customer/login.php" class= "<?php if($page== "Logout"){ echo 'active'; } ?>"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>

      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="index.php" class= "<?php if($page== "Homepage"){ echo 'active'; } ?>">Dashboard</a></li>
                <li><a href="chat.php" class= "<?php if($page== "Chat"){ echo 'active'; } ?>">Chat</a></li>
                <li><a href="edit-admins.php" class= "<?php if($page== "Edit-Admins"){ echo 'active'; } ?>">Profile</a></li>
                <li><a href="login.php">Log Out</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
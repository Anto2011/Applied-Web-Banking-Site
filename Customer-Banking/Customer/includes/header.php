<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $title; ?> | OutKast Banking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login-popuup.css">
     <!-- uncomment to load sign in css-->
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Sat-Sun | 24 Hours</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>1-876-KAST</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>OutKast Banking</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if($page=='Home'){ echo 'active'; }?>">
                <a class="nav-link" href="index.php" >Home
                  <!--<span class="sr-only">(current)</span>-->
                </a>
              </li>
              <li class="nav-item <?php if($page=='About'){ echo 'active'; }?>">
                <a class="nav-link" href="about.php" >About Us</a>
              </li>  
              <li class="nav-item <?php if($page=='Services'){ echo 'active'; }?>">
                <a class="nav-link" href="services.php" >Our Services</a>
              </li>                          
              <li class="nav-item <?php if($page=='Contact'){ echo 'active'; }?>">
                <a class="nav-link" href="contact.php" >Contact Us</a>
              </li>
              <li class="nav-item <?php if($page=='Sign In'){ echo 'active'; }?>">
                <a class="nav-link" href="login.php" >Sign In</a>
              </li>
         <!--     <li class="nav-item ">
                <a class="nav-link" href="#" onclick=" document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</a>
              </li>-->
            </ul>
          </div>
        </div>
      </nav>

      <div id="id01" class="modal">
                    
                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                           <!-- <button onclick="document.getElementById('id02').style.display='block', document.getElementById('id01').style.display='none'" class="registerbtn">Register</button>
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                       <a href="register.php" class= "cancelbtn"> Register</a>
                        
                      <!--  <img src="./assets/images/flag_us.jpg" alt="Avatar" class="avatar">-->
                        </div>

                        <div class="reg-container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                            
                        <button class="reg-button" type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        </div>

                        <div class="reg-container" style="background-color:#f1f1f1">
                        <button class="reg-button" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                    </div>

                    

                    <script>
                    // Get the modal
                    var modalSignIn = document.getElementById('id01');
                    var modalSignUp = document.getElementById('id02');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modalSignIn || event.target == modalSignUp) {
                            modalSignIn.style.display = "none";
                            modalSignUp.style.display = "none";
                            
                        }
                    }
                    </script>

    </header>



<?php 
$page = "Homepage";


$title = "Homepage";


require_once "header.php";


require_once "ValidationForWorkerandAdmin.php";

$userType= $_SESSION['userType'];

// message box on the screen
// Function defnition
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');document.location='index.php'</script>";
}
  
if($userType == "worker"){
	// Function call
	function_alert("Access Denied!!!");
	
}

?>
</head>
<body>





<div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Deposit</h2>
           
            <form action="" class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                  <label for="inputLastName">User Name:</label>
                  <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" value=<?php echo $userName ?>>             
                  <span class="error" style="color:red;"> <?php echo $userName_error;?></span>
                </div>
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Email:</label>
                    <input type="email" class="form-control" id="inputLastName" placeholder="Email" name="email" value=<?php echo $email ?>>                  
                    <span class="error" style="color:red;"> <?php echo $email_error;?></span></br>
                </div> 
              </div>
               <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                  <label for="inputLastName">Password:</label>
                  <input type="text" class="form-control" id="fname" name="Password1" placeholder="Password 1" value=<?php echo $password1 ?>>             
                  <span class="error" style="color:red;"> <?php echo $password1_error;?></span>
                </div>
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Password 2:</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Password 2" name="Password2" value=<?php echo $password2 ?>>                  
                    <span class="error" style="color:red;"> <?php echo $password2_error;?></span></br>
                </div> 
              </div>

              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                  <label for="inputLastName">User Type:</label>
                  <input type="text" class="form-control" id="userType" name="userType" placeholder="user type " value=<?php echo $userType ?>>             
                  <span class="error" style="color:red;"> <?php echo $userType_error;?></span>
                </div>


                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Id:</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Password 2" name="customerCode" value=<?php echo $customerCode ?>>                  
                    <span class="error" style="color:red;"> <?php echo $customerCode_error;?></span></br>
                </div> 
              </div>
               <br><br><br><br><br><br>
                <button type="submit" class="templatemo-white-button">Complete Deposit</button><br><br><br>
                      <span class="error" style="color:blue;"> <?php echo $CreateUser;?></span>      
                  <br><br>
                </div>
              </div>                           
            </form>
          </div>

          

</body>

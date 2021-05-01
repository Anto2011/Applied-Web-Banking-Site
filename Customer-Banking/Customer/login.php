<?php 
$page= "Sign In";
$title="Sign In";
include "login_function.php" ;
require_once "includes/header.php";
?>

<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Sign In</h1>
            <span>Bank OUTKAST</span>
            <span><strong>Outstanding. United. Trusted. Kanow-How. Able. Sophisticated. Timely</strong></span>
            <br>
            <a href= "register.php" class= cancelbtn>Register</a> 
          </div>
        </div>
      </div>
    </div>

    <form class="" action="login.php" method="post">
                 

                        <div class="reg-container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" value = "<?php echo $username ?>">
                        <p class="error"  style="color:red;"><?php echo $username_err; ?></p>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" >
                        <p class="error"  style="color:red;"><?php echo $password_err; ?></p>
                        
                        
                        <button class="reg-button" type="submit">Login</button>

                        <p class="error" style="color:red;"><?php echo $error; ?><p>
                        <p class="error" style="color:red;"><?php echo $error2; ?><p>
                       
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        
                        </div>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                        <div class="reg-container" style="background-color:#f1f1f1">
                        <!--<button class="reg-button" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
                      
                        </div>
                    </form>



<?php 
require_once "includes/footer.php";
?>
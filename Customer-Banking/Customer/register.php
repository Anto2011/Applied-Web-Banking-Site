<?php
$title= "Register Here";
$page= "Register";
require_once "config.php";
  $con= new dbconnect();
  $db=$con->dbconnection();
 include "validation.php" ;
 require_once "includes/header.php";
?>


   <!-- Page Content -->
   <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Register Here</h1>
            <span>Bank OUTKAST</span>
            <span><strong>Outstanding. United. Trusted. Kanow-How. Able. Sophisticated. Timely</strong></span>
          </div>
        </div>
      </div>
    </div>

     
    <div class="container">




<form action="" method="post" >
<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="First Name" name="fname" value = "<?php echo $firstName ?>" >
<span class="error" style="color:red;"><?php echo $firstName_error;?></span></br>

<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Last Name" name="lname"  value = "<?php echo $lastName ?>">
<span class="error" style="color:red;"><?php echo $lastName_error;?></span></br>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Email Address" name="email" value = "<?php echo $email ?>">
<span class="error" style="color:red;"><?php echo $email_error;?></span></br>

<label for="dob"><b>Date Of Birth</b></label>
<input type="text" placeholder="DD/MM/YYYY" name="dob"  >
<span class="error" style="color:red;"><?php echo $errorString;?></span></br>

<label for="phoneNo"><b>Phone No</b></label>
<input type="number" placeholder="Phone Number" name="phoneNo"  value = "<?php echo $telephone ?>">
<span class="error" style="color:red;"><?php echo $telephone_error;?></span><br>

<label for="street"><b>Street Name</b></label>
<input type="text" placeholder="Street Name" name="street"  value = "<?php echo $streetName ?>">
<span class="error" style="color:red;"><?php echo $streetName_error;?></span><br>

<label for="Parish"><b>Parish</b></label>
<input type="text" placeholder="Parish" name="parish"  value = "<?php echo $parish ?>">
<span class="error" style="color:red;"><?php echo $parish_error;?></span><br>

<label for="community"><b>Community</b></label>
<input type="text" placeholder="community" name="community" value = "<?php echo $community ?>">
<span class="error" style="color:red;"><?php echo $community_error;?></span><br>

<p>Please select your gender<p>
<input type="radio" id="female" name="gender" value="female">
<label for="female"><b>Female</b></label>
<input type="radio" id="male" name="gender" value="male">
<label for="Male"><b>Male</b></label>
<span class="error" style="color:red;"><?php echo $gender_error;?></span><br>

<br>
<br>
<br>



<hr id="regline">

<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Username" name="uname" value = "<?php echo $userName ?>">
<span class="error" style="color:red;">* <?php echo $userName_error;?></span><br>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Password" name="psw" value = "">
<span class="error" style="color:red;">* <?php echo $password_error;?></span><br>

<label for="psw2"><b>Password</b></label>
<input type="password" placeholder="Password2" name="psw2"  value = "">
<span class="error" style="color:red;">* <?php echo $password2_error;?></span><br>

Agree to Terms of Service:  
    <input type="checkbox" name="agree"> <br> 
    <span class="error" style="color:red;">* <?php echo $agreeErr; ?> </span><br>  
    <br><br> 
  
<button class="reg-button" type="submit">Register</button>

<div class="container" style="background-color:#f1f1f1">
<!--<button type="button" class="cancelbtn">Cancel</button>-->
</div>
</form>
</div>








    <!-- Footer Starts Here -->
    <?php require_once "includes/footer.php" ;?>
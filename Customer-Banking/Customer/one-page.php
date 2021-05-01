<?php
require_once "includes/header.php";
?>
  <div class="container">

<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="First Name" name="fname" required>

<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Last Name" name="lname" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Email Address" name="email" required>

<label for="dob"><b>Date Of Birth</b></label>
<input type="date" placeholder="DOB" name="dob">

<label for="phoneNo"><b>Phone No. 1</b></label>
<input type="number" placeholder="Phone Number" name="phoneNo">

<label for="phoneNo"><b>Phone No. 2</b></label>
<input type="number" placeholder="Phone Number" name="phoneNo">

<label for="address1"><b>Address Line 1</b></label>
<input type="text" placeholder="Address" name="address1">

<label for="address2"><b>Address Line 2</b></label>
<input type="text" placeholder="Address" name="address2">

<label for="account"><b>Account No.</b></label>
<input type="number" placeholder="Account Number" name="account" required>

<label for="balance"><b>Balance</b></label>
<input type="number" placeholder="Opening Balance" name="balance" required>

<hr id="regline">

<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Username" name="uname" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Password" name="psw" required>
    
<button type="submit">Register</button>
</div>

<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
</div>
</form>
</div>
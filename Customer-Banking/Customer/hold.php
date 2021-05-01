<?php


    include 'session.php';
    


     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];

// Define variables and initialize with empty values

 
// Processing form data when form is submitted


?>






<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/Bank1.css">

</head>

<body>


  <!--Nav bar goes here-->
	<div class="box1">

    <div class="box2">
      
      <img src="images/Logo.png" class="Logo">
   

      
      
    </div>
    <div class="SideBar">
      <h2>Welcome</h2>
      <hr>
      
      <label for="ltnFirstname"><?php echo $firstname; ?> </label>
        <label for="ltnLastname"><?php echo $lastname; ?> </label><br><br>
        <label for="ltnLoginID">Login ID: <?php echo $account; ?> </label><br><br>
        <label for="ltnChangePassword">Change password</label><br><br>
        <hr>

        <h2>Menu</h2>
        <hr>
        <a ><label for="ltnHome">Home</label><br><hr></a>
        
        <a href="banking.php"><label for="ltnTransferFunds">Balance Enquiry</label><br><hr></a>
        <a href="TransferFunds.php" ><label for="ltnTransferFunds">Transfer funds </label><br><hr></a>
        <a href="ExternalTransfer.php" ><label for="External Transfer">External Transfer </label><br><hr></a>
        <a href="PayBills.php"><label for="ltnPayBills">Pay Bills</label></a><br><hr>
        <a href="#"><label for="ltnLogout">Logout</label></a><br><hr>

        
     
    </div>
  </div>
	<div class="MainBody">
    <h2>Transfer Funds</h2>
    <hr class="hr1">
    <p style="margin-top:5%;">Use this option to tranfer funds from one account to another</p><br><br>
    <h2>The name Attribute</h2><br><br>

<form method="POST">
  <label for="fname">Account Number of Reciever:</label><br>
  <input type="text" name="AccountNumber" "><br><br>
  <label for="fname">Name of Reciever:</label><br>
  <input type="text" name="name" ><br><br>
  <label for="fname">Sum to be transfer:</label><br>
  <input type="text" name="sum" ><br><br>
  <input type="submit" value="Submit">
</form> 


</div>	  
  

  <br>



<p style="text-align:right">

</body>
</html>





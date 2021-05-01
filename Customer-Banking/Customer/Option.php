<?php 
include 'session.php';

require_once "config.php";
  $con= new dbconnect();
      $db=$con->dbconnection();
include "getAllBalance.php";
include "changeUserPasswordvalidation.php";
include 'side-nav.php';
$title="Profile Settings";
require_once "includes/header.php";

     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];

      
  //    $bal = new allBalance();

 
  //  $sharedBalance= $bal->getShareBalance($account, $db);
  //  $specialDeposit= $bal->getSpecialDeposit($account, $db);
  //  $ordinaryDeposite= $bal->getOrdinaryDeposit($account, $db);
  //  $loanType=$bal->loanType($account, $db);
  //  $loanTotal =$bal->loanAmount($account, $db);       
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/Bank1.css"> 
<link rel="stylesheet" type="text/css" href="css/sidebar.css"/>
<link rel="stylesheet" type="text/css" href="css/TopBar.css"/>
<link rel="stylesheet" type="text/css" href="css/Table.css"/>-->

<link rel="stylesheet" type="text/css" href="css/Table.css"/>

<link rel="stylesheet" type="text/css" href="css/side-nav.css"/>

</head>

<body>
<div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-30">
                <div class="media-left padding-right-25">
                  <a href="#">
                  <?php
                $query = "SELECT picture FROM `user` WHERE customerCode= $account";
                $result = mysqli_query($db,$query);
              
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <?php $path ="assets/propic_img/";?>
             
                  <!--<img  src="<?php echo  $path.$row['picture'];  ?>" onClick="triggerClick()" id="profileDisplay">-->
                  <img class="media-object img-circle templatemo-img-bordered" src="<?php echo  $path.$row['picture'];  ?>" width="150" height="150" alt="Sunset">
                  </a>
               
               <?php }?>
                   
                   
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text"><?php echo $firstname; echo " "; echo $lastname; ?></h2>
                  <p><?php echo $account; ?></p>
                  <h3 class="media-title">Change Password</h3>
                </div>        
              </div>         
            </div>

            
            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-304">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
              <form action="" method="post" >



<div class="LowerBar">
    <div class="Container2">



<div class="OptionNavBar">

</div>

 <div class="OptionTableContainer">

 <table class="styled-table">
    
      
        <table class="styled-table">
          <tbody>
          <tr>
        <th>
    
    <input type="text" id="fname" name="oldPassword" placeholder="Old Password" value = "<?php echo $oldPassword ?>">
    <p class="error"  style="color:red;"><?php echo $oldpassword_error; ?></p>
        </th>
          </tr>
        
      <tr class="active-row">
      <th>
    <input type="text" id="lname" name="newPassword" placeholder="New Password" value = "<?php echo $password1 ?>">
    <p class="error"  style="color:red;"><?php echo $password1_error; ?></p>
      </th>
      </tr>

       <tr class="active-row">
      <th>
    <input type="text" id="lname" name="newPassword1" placeholder="New Password2" value = "<?php echo $password2 ?>">
    <p class="error"  style="color:red;"><?php echo $password2_error; ?></p>
      </th>
  </tr>

    <tr>
      <th>
    <p class="error"  style="color:red;"><?php echo $changePassword_error; ?></p>
    <input type="submit" value="Submit"  name="submit" class="Button">
    </form>
      </th>
    </tr>
     
          </tbody> 
    
 </table>
  
  <div>
 
                </div>        
              </div>         
            </div>



  </div>

  <div class="btn-group">
            <a href="Option4.php">Change Profile Picture</a>
            </div>
            
            <div class="btn-group">
            <a href="Option2.php">Change User Name</a>
            </div>

            <div class="btn-group">
            <a href="pdf.php">Get Bank Statement</a>
            </div>
  </div>

  
</div>
</div>


</body>

</html>
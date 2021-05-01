<?php 
include 'session.php';
require_once "config.php";
include "getAllBalance.php";
include 'side-nav.php';
require_once "includes/header.php";

     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];
     
    $loanType=$_SESSION['loanType'];            
    $loanTotal=$_SESSION['loanTotal']; 

      $con= new dbconnect();
      $db=$con->dbconnection();
      $bal = new allBalance();

 
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposit($account, $db);
    $ordinaryDeposite= $bal->getOrdinaryDeposit($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db);  
    
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/Bank.css"> -->
<!--
<link rel="stylesheet" type="text/css" href="css/sidebar.css"/>
<link rel="stylesheet" type="text/css" href="css/TopBar.css"/>-->
<link rel="stylesheet" type="text/css" href="css/Table.css"/>

<link rel="stylesheet" type="text/css" href="css/side-nav.css"/>
<!--<link rel="stylesheet" type="text/css" href="css/templatemo-style.css"/>-->

</head>

<body>

 <?php //include 'DatabaseConnection.php'?>
  <!--Nav bar goes here-->
	
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
             
                  
                  <img class="media-object img-circle templatemo-img-bordered" src="<?php echo  $path.$row['picture'];  ?>" width="150" height="150" >
                  </a>
               
               <?php }?>
                   
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text"><?php echo $firstname; echo " "; echo $lastname; ?></h2>
                  <p><?php echo $account; ?></p>
                  <h3 class="media-title">Balance Enquiry</h3>
                </div>        
              </div>         
            </div>

            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-301">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
                <form>
      <div class="LowerBar">
      <div class="container-space">

      <div class="container-table"> <!--Table 1 Settings-->
  <table class="styled-table">
  <h2 class="H2" >Savings Account</h2>
    <thead>
        <tr>
            <th>Account Description</th>
            <th>Availiable balance</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active-row" >
            <td><label for="ltnShareBalance">Share Balance</label></td>
            <td><?php echo $sharedBalance; ?></td>
        </tr>
        <tr class="active-row">
            <td><label for="SpecialDeposit">Special Deposit</label></td>
            <td><?php echo $specialDeposit; ?></td>
        </tr>
        
        <tr class="active-row">
            <td><label for="SpecialDeposit">Ordinary Desposit</label></td>
            <td><?php echo $ordinaryDeposite; ?></td>
        </tr>


        
        </tr>

    </tbody>
</table>

      <h2 class="MainBody2">Loans</h2>
      
      <table class="styled-table"> <!--Table 2 settings-->
        
        <thead>
          <th>Loan Type</th>
         
          <th>Total</th>
        </thead>
        <tr class="active-row">
          <td><label for="Description"><?php echo $loanType; ?></label></td>
       
          <td><label for="Description"><?php echo $loanTotal; ?></label></td>
        </tr>
      </table>
      
</div>

</div>

  </form>
                </div>        
              </div>         
            </div>

  <form  id = "msform" action = "" method = "POST" > 
   
   

 

<!--Top bar color-->
<!--
<div class="TopBar"> 
  <div class="TopBarInfo">
    <h2 class="H2">Balance Enquiry</h2>
    
    </div>

  <img class="PassportImage" src="images/Passportsize.jpg">
</div> 
-->


    


  
 
<!-- 
  <div class="LowerBar"> 
    <div class="TopBarInfo">
      <h2>Balance Enquiry</h2>
      
      <h2>Savings Account</h2>
  </div> -->
</div>
</body>

</html>
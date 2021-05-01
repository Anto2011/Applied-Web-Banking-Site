<?php

session_start();
    
    
    
    include 'side-nav.php';
    require_once "includes/header.php";

    require_once "config.php" ;
     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];
    include "getAllBalance.php";
      $con= new dbconnect();
      $db=$con->dbconnection();
      $bal = new allBalance();

 
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposit($account, $db);
    $ordinaryDeposit= $bal->getOrdinaryDeposit($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db); 
   include "TransferFundsFunction.php";
    

// Define variables and initialize with empty values

 



?>






<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/Bank.css"> 
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
                  <h3 class="media-title">Transfer Funds</h3>
                </div>        
              </div>         
            </div>

            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-302">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
  <form action="" method="POST">  
  
  <div class="LowerBar">
        <div class="Container2">
  
      <div class="TranferFundsTableContainer">
      <h2>Transfer Funds</h2>
      <table class="styled-table">
      <thead>
          <tr>
              <th>Transfer funds FROM</th>
              <th>Transfer funds TO</th>
          </tr>
      </thead>
      <tbody>
          <tr class="active-row" >
             
              <td><label for="Options">Choose an option:</label> </td>
              <td><label for="Options" >Choose an option:</label></td>
          </tr>
          <tr class="active-row">
              <td>
                  <select name="choice" class="choice">
                  <option value="PleaseSelectAProduct">Please select a product</option>
                  <option value="1" >Ordinary deposit  <?php echo "$"  .$ordinaryDeposit; ?></option>
                  <option value="2" >Shares  <?php echo "$"  .$sharedBalance; ?></option>
                  <option value="3" >Special deposit <?php echo "$"  .$specialDeposit; ?> </option>
                  </select>
              </td>
              <td>
                <select name="choice2" class="choice2">
                <option value="PleaseSelectAProduct">Please select a product</option>
                <option value="1" >Ordinary deposit <?php echo "$" .$ordinaryDeposit; ?> </option>
                <option value="2" >Shares <?php echo "$" .$sharedBalance; ?></option>
                <option value="3" >Special deposit <?php echo "$" .$specialDeposit; ?></option>
                </select>
              </td>
      
      </tbody>
  </table><br>
  <!-- <input type="text" name="sum" > -->
  <table class="styled-table">
      <tread><tr class="active-header" ><th>Enter transfer amount</th></tr></tread>
      <tr class="active-row"><td><input type="text" name="sum" ></td></tr>
  
      <tr class="active-row">
        <div class="submit-funds">
          <td><input type="submit" class="Button" name="submit" value="submit">
          <span class="error" style="color:red;"> <?php echo $transactionError;?></span>
          <span class="error" style="color:blue;"> <?php echo $transactionCorrect;?></span>
      </td>
            
        </div>
        
      </tr>
      
  </table>
  
     
      </div>
  <tr class="active-row" ><td><?php echo  $transactionError; ?></td></tr>
      <tr class="active-row" ><td><?php echo  $transactionCorrect ?></td></tr>
    
        <br><br>
        
       <!-- //onclick="alert('Hello world!')<br><br>
    
        </textarea>


        <div class="btn-group">
            <a href="TransferFunds.php"><button class="settings-button">Internal Transactions</button></a>
            </div>
            <div class="btn-group">
            <a href="ExternalTransfer.php"><button class="settings-button">External Transactions</button></a>
            </div>
  </div>
  </div>
  </div>
      
  
  
  </form>
                </div>        
              </div>         
            </div>

<!--
   <div class="TopBar"> Top bar color
  <div class="TopBarInfo">
    <h2 class="H2">Transfer Funds</h2>
    -->
    <!-- <h2 class="H2" >Savings Account</h2> -->


</div>

</div> 
    






</body>
</html>
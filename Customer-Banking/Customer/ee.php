<?php 
include 'session.php';
require_once "config.php";
$con= new dbconnect();
$db=$con->dbconnection();

//include_once "externalvaliation.php";

include "getAllBalance.php";

include 'side-nav.php';

require_once "includes/header.php";

     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];

      
      
      $bal = new allBalance();
      $transaction_error="";
      $transaction_Message="";
      $name_error="";
      $account_error="";
      $amount_error="";
      $receiver_Name="";
      $sum="";
      $receiver_AccountNumber="";
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposit($account, $db);
    $ordinaryDeposit= $bal->getOrdinaryDeposit($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db);       



      $bal = new allBalance();
      $transaction_error="";
      $transaction_Message="";
      $name_error="";
      $account_error="";
      $amount_error="";
      $receiver_Name="";
      $sum="";
      $receiver_AccountNumber="";
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposit($account, $db);
    $ordinaryDeposit= $bal->getOrdinaryDeposit($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db);  

if($_SERVER['REQUEST_METHOD']== "POST"){

  
    $receiver_Number= $_POST["AccountNumber"];
    
    
    $sum = $_POST["sum"];
    
    if(empty($_POST["name"])){
      $name_error = " Name is required";
    }else{

      $receiver_Name = cleanup_data($_POST["name"]);
      //check is name only contains letters and whitespace
      if(!preg_match("/^[a-zA-Z ]*$/",  $receiver_Name)){
          $name_error = "Only letters and white space allowed.";
      }
  }

  if(empty($_POST["AccountNumber"])){
    $transaction_error = "Account Number required";
    }else{
      $receiver_AccountNumber = cleanup_data($_POST["AccountNumber"]);
         //check that mobile number is numeric
          if(!preg_match("/^[0-9]*$/", $receiver_AccountNumber )){
          $account_error= "Only numeric values allowed.";
          }
         //check mobile number length to see if it is equal to 10
          if(strlen( $receiver_AccountNumber) != 6){

           $account_error = "Number must contain 6 digits";
          }
     }


     if(empty($_POST["sum"])){
      $transaction_error = "sum to be transfer is required";
       }else{
      $sum = cleanup_data($_POST["sum"]);
           //check that mobile number is numeric
           if(!preg_match("/^[0-9]*$/", $sum)){
            $amount_error = "Only numeric values allowed.";
           }
           //check mobile number length to see if it is equal to 10
           if(strlen($sum) <= 2){
            $amount_error = "Number must contain 2 digits";
           }
       }

   

    if ($sum>=$ordinaryDeposit){

      $transaction_error="You dont have enought money for this transaction";
     

    }
    if ($transaction_error == ""){
        $pdo=getpdo();
       $receiver_AccountNumber = stripcslashes( $receiver_AccountNumber);    
       $receiver_AccountNumber = mysqli_real_escape_string($db,  $receiver_AccountNumber);  
     $query="select * from account where customerCode = '$receiver_AccountNumber'";
     $result = mysqli_query($db, $query) ; 

     

          if(mysqli_num_rows($result) > 0){
            while($row= mysqli_fetch_assoc($result)){
              
              $recieverOrdinaryDepostie  = $row["ordinaryDeposit"];
              $recieverOrdinaryDepostie= $recieverOrdinaryDepostie + $sum;
              $ordinaryDeposit=$ordinaryDeposit-$sum;

              $stmt = $pdo->prepare("UPDATE account SET ordinaryDeposit = ? WHERE customerCode = ?");
               $stmt->execute([$recieverOrdinaryDepostie, $receiver_AccountNumber]);
               $stmt = null;

      $stmt = $pdo->prepare("UPDATE account SET ordinaryDeposit = ? WHERE customerCode = ?");
      $stmt->execute([$ordinaryDeposit, $account]);
      $stmt = null;
         
      $date=Date("Y/m/d");
      $description= "Transfer $sum to  $receiver_Name";
      $description2= "Receive $sum to  $receiver_Name";
        $sql1="INSERT INTO transaction (customerCode,withdraw,date,description) VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($sql1);
        $stmt->execute([$account,$sum,$date,$description]);
        $stmt = null;


        $sql1="INSERT INTO transaction (customerCode,Deposite,date,description) VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($sql1);
        $stmt->execute([ $receiver_AccountNumber,$sum,$date,$description2]);
        $stmt = null;

         $transaction_Message="Account Successful";

          }

              	
      }else{
        $transaction_error="Account number dont exits";
      }


    }

  }

//define function to sanitize data
   function cleanup_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


function getpdo(){

  $dsn = "mysql:host=localhost;
  dbname=bank;
  charset=utf8mb4";
  $options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
  ];

  $pdo = new PDO($dsn, "root", "", $options);

  


      
  $dsn = "mysql:host=localhost;dbname=bank;charset=utf8mb4";
  $options = [
      PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
  ];
  $pdo = new PDO($dsn, "root", "", $options);

  return $pdo;
}


?>








<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/Table.css"/>

<link rel="stylesheet" type="text/css" href="css/side-nav.css"/>
</head>

<body>

 <!-- <?php //include 'DatabaseConnection.php'?>
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
               

                <div class="LowerBar">

    <div class="Container2">



<div class="OptionNavBar">

</div>

 <div class="OptionTableContainer">
 <table class="styled-table">

    <h2 style="color:black;">Transfer Funds</h2>
    
    <h4 style="color:black;">Use this option to tranfer funds from one account to another</h4>
    </div>
   
   
 <form action="" method="post" >
<tbody>
          <tr>
        <th>
  <label style="color:black;" for="fname">Account Number of Reciever:</label><p  style="color:red;"><?php echo  $account_error; ?></p><br>
  <input style="color:black;" type="text" name="AccountNumber" value = "<?php echo $receiver_AccountNumber ?>" ><br><br>
<span class="error" style="color:red;"> <?php echo $account_error;?></span></br>

  <label style="color:black;" for="fname">Name of Reciever:</label><p  style="color:red;"><?php echo  $name_error; ?></p><br>
  <input style="color:black;" type="text" name="name" value = "<?php echo $receiver_Name ?>" ><br><br>
   <span class="error" style="color:red;"> <?php echo $name_error;?></span></br>

  <label style="color:black;" for="fname">Sum to be transfer:</label><p  style="color:red;"><?php echo  $amount_error; ?></p><br>
  <input style="color:black;" type="text" name="sum" value = "<?php echo $sum ?>" ><br><br>
  <span class="error" style="color:red;"> <?php echo $amount_error;?></span></br>


  <input style="color:black;" type="submit" value="submit" name= "submit">
</form> 
<p  style="color:red;"><?php echo  $transaction_error; ?></p>
<p  style="color:Blue;"><?php echo  $transaction_Message; ?></p>
	  
  </table>
  </div>

  


  </body>







</html>
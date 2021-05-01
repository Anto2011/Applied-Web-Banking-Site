<?php

 

  include "getAllBalance.php";
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
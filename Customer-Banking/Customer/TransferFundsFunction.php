<?php

    include "config2.php" ;
    $connection= new pdoconnection();
    $pdo=$connection->conn();

 $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];
     $user="";
    $sum="";
    
    

$transactionError="";
$transactionCorrect="";
$totalSum=0;
$totalCal=0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $choice = $_POST["choice"];
  $choice2 = $_POST["choice2"];
  $sum = $_POST["sum"];



  if (str_contains($choice,"Please")){
   $transactionError= "Select a transaction";
  }

  if (str_contains($choice2,"Please")){
    $transactionError= "Select a transaction";
  }

  if($choice==$choice2 ){
    
   $transactionError="You must select proper input";
  }



  if ($choice=="1" && $choice2=="2"){
  
   
   
    
    if($sum>=$ordinaryDeposit){
      $transactionError= "Transaction ordinaryDeposit amount is low";
     
    }
    else{
      
      $totalSum=$sum+$sharedBalance;
      $totalCal=$ordinaryDeposit-$sum;
      echo $sum."sum-----";
      echo $ordinaryDeposit."ordinaryDeposit-----";
      echo $sharedBalance."sharedBalance-----";
      echo  $totalSum."sum+sharedBalance-----";
       echo  $totalCal."ordinaryDeposit-sum------";
      $stmt = $pdo->prepare("UPDATE account SET sharesBalance = ?, ordinaryDeposit=? WHERE customerCode = ?");
      
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;
    
      $_SESSION['$ordinaryDeposit']=$totalCal;
      $_SESSION['$sharedBalance']= $totalSum;
      $transactionCorrect= "Transaction successful from ordinary Deposit to shared Balance amonut $sum";
    }
    
  }



 
  
  if ($choice=="1" && $choice2=="3"){
  
    if($sum>=$ordinaryDeposit){
      $transactionError= "Transaction ordinary Desposit amount is low"; }
    else{
      $totalSum=$sum+$specialDeposit;
      $totalCal=$ordinaryDeposit-$sum;


      $stmt = $pdo->prepare("UPDATE account SET specialDeposit = ?, ordinaryDeposit=? WHERE customerCode = ?");
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;
      $transactionCorrect= "Transaction successful from Specail Deposit to ordinary Deposit amonut $sum";

      $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO userlog (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account, $userName, $date,$time,$userType,$transactionCorrect]);
      


    }
  }

  if ($choice=="2" && $choice2=="1"){
    if($sum>=$sharedBalance){
      $transactionError= "Transaction share amount is low";
    }
    else{
      $totalSum=$sum+$ordinaryDeposit;
      $totalCal=$sharedBalance-$sum;

      $stmt = $pdo->prepare("UPDATE account SET ordinaryDeposit = ?, sharesBalance =? WHERE customerCode = ?");
      
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;
      $transactionCorrect= "Transaction successful from shared Balance to ordinary Deposit amonut $sum";

      $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO userlog (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account, $userName, $date,$time,$userType,$transactionCorrect]);

    }
  }

 
  if ($choice=="2" && $choice2=="3"){
    if($sum>=$sharedBalance){
      $transactionError= "Transaction share amount is low";
    }
    else{
      $totalSum=$sum+$specialDeposit;
      $totalCal=$sharedBalance-$sum;

      $stmt = $pdo->prepare("UPDATE account SET specialDeposit = ?, sharesBalance =? WHERE customerCode = ?");
      
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;
      $transactionCorrect= "Transaction successful from shared Balance to special Deposit amonut $sum";
      echo $totalSum;
      echo $totalCal;
      echo $sum;

      $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO userlog (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account, $userName, $date,$time,$userType,$transactionCorrect]);
    }
  }



  if ($choice=="3" && $choice2=="1"){
    if($sum>=$specialDeposit){
      $transactionError= "Transaction specail desposit amount is low";
    }
    else{
      $totalSum=$sum+$ordinaryDeposit;
      $totalCal=$specialDeposit-$sum;

      $stmt = $pdo->prepare("UPDATE account SET ordinaryDeposit = ?, specialDeposit =? WHERE customerCode = ?");
      
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;
      $transactionCorrect= "Transaction successful from special Deposit to ordinary Deposit amonut $sum";
    }
  }

 
  if ($choice=="3" && $choice2=="2"){
    if($sum>=$specialDeposit){
    $transactionError= "Transaction specail desposit amount is low";
    }
    else{
      $totalSum=$sum+$sharedBalance;
      $totalCal=$specialDeposit-$sum;

      $stmt = $pdo->prepare("UPDATE account SET shareDesposit = ?, specialDeposite =? WHERE customerCode = ?");
      
      $stmt->execute([$totalSum,$totalCal,$account]);
      $stmt = null;

      $transactionCorrect= "Transaction successful from special deposit to shared balance amonut $sum";

      $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO userlog (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account, $userName, $date,$time,$userType,$transactionCorrect]);
    }
  }


}
    else{


    

    }


  
?> 
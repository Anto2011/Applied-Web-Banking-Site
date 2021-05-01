
<?php

    $con= new dbconnect();
    $db=$con->dbconnection();
      $bal = new allBalance();
 
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposite($account, $db);
    $ordinaryDeposite= $bal->getOrdinaryDeposite($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db);

$transaction_error="";
 $name_error="";
$account_error="";
$amount_error="";
$sum="";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $receiver_Number= $_POST["AccountNumber"];
    $sum = $_POST["sum"];
    
    if(empty($_POST["name"])){
      $name_error = "  Name is required";
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
      $receiver_AccounNumber = cleanup_data($_POST["AccountNumber"]);
         //check that mobile number is numeric
          if(!preg_match("/^[0-9]*$/",$receiver_AccounNumber )){
          $account_error= "Only numeric values allowed.";
          }
         //check mobile number length to see if it is equal to 10
          if(strlen($receiver_AccounNumber) != 6){

           $account_error = "Number must contain 5 digits";
          }
     }


     if(empty($_POST["SUM"])){
      $transaction_error = "sum to be transfer is required";
       }else{
      $telephone = cleanup_data($_POST["sum"]);
           //check that mobile number is numeric
           if(!preg_match("/^[0-9]*$/", $telephone)){
            $amount_error = "Only numeric values allowed.";
           }
           //check mobile number length to see if it is equal to 10
           if(strlen($telephone) != 2){
            $amount_error = "Number must contain 2 digits";
           }
       }

   

    if ($sum>=$ordinaryDeposite){

      $transaction_error="You dont have enought money for this transaction";

    }
    if ($transaction_error==""){

      $receiver_AccounNumber = stripcslashes($receiver_AccounNumber);    
      $receiver_AccounNumber = mysqli_real_escape_string($db, $receiver_AccounNumber);  

     $query="SELECT * FROM user WHERE AccountNumber='$receiver_AccounNumber'";
     $result = mysqli_query($db, $query) ; 

     

          if(mysqli_num_rows($result) > 0){
            while($row= mysqli_fetch_assoc($result)){
              
              $recieverOrdinaryDepostie  = $row["ordinaryDepostie"];
              $recieverOrdinaryDepostie= $recieverOrdinaryDepostie + sum;
              $ordinaryDeposite=$ordinaryDeposite-sum;
              $stmt = $pdo->prepare("UPDATE account SET ordinaryDepostie = ? WHERE customerCode = ?");
               $stmt->execute([$recieverOrdinaryDepostie,$receiver_AccounNumber]);
               $stmt = null;

      $stmt = $pdo->prepare("UPDATE account SET ordinaryDepostie = ? WHERE customerCode = ?");
      $stmt->execute([$ordinaryDeposite, $account]);
      $stmt = null;
         
      $date=Date();
      $description= "Transfer $sum to  $receiver_Name";
      $description2= "Receive $sum to  $receiver_Name";
          $sql1="INSERT INTO transaction (customerCode,withdraw,date,description) VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql1);
        $stmt->execute([$account,$sum,$date,$description]);
        $stmt = null;


        $sql1="INSERT INTO transaction (customerCode,Deposite,date,description) VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql1);
        $stmt->execute([$receiver_AccounNumber,$sum,$date,$description2]);
        $stmt = null;

      $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO users (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$receiver_AccounNumber, $receiver_Name, $date,$time,$userType,$description]);

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





    function getdb(){
 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'bank');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    return $db;

    }



?>
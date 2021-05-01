<?php 
$page = "Homepage";
$title = "Homepage";
require_once "header.php";



?>

<?php

$accountNumber="";
  $amount_error="";
  $accountNumber_error="";
  $sum_error="";
  $transaction_error="";
 $transaction_error2="";
 $loanType_error="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $accountNumber="";
  $amount_error="";
  $accountNumber_error="";
  $sum_error="";
  $transaction_error="";

   //number validation


   if(empty($_POST["loanType"])){

			$loanType_error = "loan Type is required";

    }else{
      $loanType = cleanup_data($_POST["loanType"]);
    }



        if(empty($_POST["accountNumber"])){

			 $accountNumber_error = "account Number is required";

        }
        else
        {

			 $accountNumber = cleanup_data($_POST["accountNumber"]);
            //check that mobile number is numeric

            if(!preg_match("/^[0-9]*$/", $accountNumber))
            {

				 $accountNumber_error = "Only numeric values allowed.";

            }
            //check mobile number length to see if it is equal to 10
            if(strlen($accountNumber) <= 5)
            {

				 $accountNumber_error  = "Number must contain at least 6 digits";

            }
        }

         if(empty($_POST["sum"])){
      $amount_error= "loan amount is required";
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
        if ($amount_error=="" && $accountNumber_error=="" && $loanType_error ==""){
           
                  require_once 'config.php';
                  $connection = new dbconnect();
                  $db= $connection->dbconnection();
                  require_once 'pdo.php';
                  $connection2 = new pdoconnection();
                  $pdo= $connection2->conn();
                  
              $sql = "select * from account where customerCode = '$accountNumber' ";  
    
              $result = mysqli_query($db, $sql);  
              $count2 = mysqli_num_rows($result); 
                      
              if($count2 > 0){
                      while($row= mysqli_fetch_assoc($result)){
                          $ordinaryDeposit = $row["ordinaryDeposit"];
                          
                      }
                    
                      $ordinaryDeposit=$ordinaryDeposit+$sum;
                      $accountNumber  = stripcslashes($accountNumber);    
                      $accountNumber = mysqli_real_escape_string($db, $accountNumber);
                      $ordinaryDeposit  = stripcslashes($ordinaryDeposit);    
                      $ordinaryDeposit = mysqli_real_escape_string($db, $ordinaryDeposit);
                      $sql_u = "UPDATE account SET ordinaryDeposit = $ordinaryDeposit WHERE customerCode = $accountNumber";
                      $res_u = mysqli_query($db, $sql_u);
                      $date=Date("Y/m/d");
                      $description= "Deposit loan of  $sum to by Bank";
                      
                        $sql1="INSERT INTO transaction (customerCode,deposite,date,description) VALUES(?,?,?,?)";
                        $stmt = $pdo->prepare($sql1);
                        $stmt->execute([$accountNumber,$sum,$date,$description]);
                        $stmt = null;


                         $sql2="INSERT INTO loan (loanId,loanAmount,loanStartdate,loanDuedate,accountNumber, loanType ) VALUES(?,?,?,?,?,?)";
                        $description2="Pay Day Loan";
                         $loanId=$accountNumber+1;
                        $stmt2 = $pdo->prepare($sql2);
                        $stmt2->execute([$loanId,$sum,$date,$date,$accountNumber,$description2]);
                        $stmt2 = null;
                      $transaction_error2 =" Transaction was sucessful Deposit $sum to ordinaryDeposit ";
              }else
                          {
                              $transaction_error = "Wrong Account Number... Account not in system";

                          }

                          
                          
                            //define function to sanitize data
 }
                
}
                
                 
                
    function cleanup_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
  
  
  
?>

</head>
<body>

<div class="btn-group">
  <a href="index.php"><button>Deposit</button></a>
  <a href="withdrawal.php"><button>Withdrawal</button></a>
  <a href="Reset.php"><button>Reset Account</button></a>
  <a href="Block.php"><button>Block User</button></a>
  <a href="#"><button>Issue Loan</button></a>
</div>


<div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Issue Loan</h2>
            <p>Distribute a loan to a customer's account by verifying their account no.</p>


            <form action="" class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                  <label for="inputLastName">Account Number:</label>
                  <input type="number" class="form-control" id="fname" name="accountNumber" placeholder="Account No.">             
                  <span class="error" style="color:red;"><?php echo $accountNumber_error;?></span>
                </div>
                <br><br><br><br><br><br><br>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Amount To Deposit:</label>
                    <input type="number" class="form-control" id="inputLastName" name="sum"  placeholder="Amount">                  
                    <span class="error" style="color:red;"><?php echo $sum_error;?></span></br>
                </div> 
                <br><br><br><br><br><br><br>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="lname">Loan Type:</label>
                    <input type="text" class="form-control" id="lname" name="loanType"  placeholder="Loan Type">                  
                    <span class="error" style="color:red;"> <?php echo $loanType_error;?></span></br>
                </div> 
              </div>
              <div class="form-group text-right">
                <div class="templatemo-white-action">
                  <button type="submit" class="templatemo-white-button">Issue Loan</button>
                  <span class="error" style="color:red;"><?php echo $transaction_error;?></span>
                  <span class="error" style="color:blue;"> <?php echo $transaction_error2;?></span>
                  <br><br>
                </div>
              </div>                           
            </form>


          </div>

</body>



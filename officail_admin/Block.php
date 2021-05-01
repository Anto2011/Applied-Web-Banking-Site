<?php 
$page = "Homepage";
$title = "Homepage";
require_once "header.php";
?>

<?php
$userName="";
$accountNumber="";
  $amount_error="";
  $accountNumber_error="";
  $sum_error="";
  $transaction_error="";
 $transaction_error2="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $accountNumber="";
  $amount_error="";
  $accountNumber_error="";
  $sum_error="";
  $transaction_error="";

   //number validation
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


        if ($accountNumber_error =="" ){
            echo "count erro";
            echo $accountNumber;

                  require_once 'config.php';
                  $connection = new dbconnect();
                  $db= $connection->dbconnection();
                  require_once 'pdo.php';
                  $connection2 = new pdoconnection();
                  $pdo= $connection2->conn();
                  
              $sql = "select * from user where customerCode = '$accountNumber' ";  
    
              $result2 = mysqli_query($db, $sql);  
              $count2 = mysqli_num_rows($result2); 
                echo "count 1";      
              if($count2 > 0){
                echo "count 2";
                      while($row= mysqli_fetch_assoc($result2)){
                    
                          $userName = $row["userName"];
                          $attempts = $row["attempts"];
                          
                      }
                      if($attempts==0){
                        $transaction_error2 =" The user $userName all ready is blocked ";
                      }
                      else{
                      $attempts = 0;
                      $attempts  = stripcslashes($attempts);    
                      $attempts = mysqli_real_escape_string($db, $attempts);
                     
                      $sql_u = "UPDATE user SET attempts = $attempts WHERE customerCode = $accountNumber";
                      $res_u = mysqli_query($db, $sql_u);
                     
                      $transaction_error2 =" The user $userName has been blocked ";
                      }
                    }else
                          {
                              $transaction_error = "Wrong Account Number... Account not in system";

                          }
              }

                          
                          
                            //define function to sanitize data
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
  <a href="#"><button>Block User</button></a>
  <a href="issueLoan.php"><button>Issue Loan</button></a>
</div>

<div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Block User</h2>
            <p>Suspend a user's account indefinately by verifying their account no.</p>
            <form action="" class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                  <label for="inputLastName">Account Number:</label>
                  <input type="number" class="form-control" id="fname" name="accountNumber" placeholder="Account No.">             
                  <span class="error" style="color:red;"> <?php echo $accountNumber_error;?></span>
                </div>
              </div>
              <div class="form-group text-right">
                <div class="templatemo-white-action">
                  <button type="submit" class="templatemo-white-button">Suspend Account</button>
                  <span class="error" style="color:red;"> <?php echo $transaction_error;?></span>
                  <span class="error" style="color:blue;"><?php echo $transaction_error2;?></span>
                  <br><br>
                </div>
              </div>                           
            </form>
          </div>


</body>
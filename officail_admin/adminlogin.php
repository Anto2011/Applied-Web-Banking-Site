<?php
// Initialize the session
session_start();



require_once "config.php";
$con= new dbconnect();
$db=$con->dbconnection();


// Check if the user is already logged in, if yes then redirect him to welcome page

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
    exit;
    }

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$error="";
$attemp="";
$error2="";
// Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
        $userType = "customer" ;
        $sql = "select * from user where username = '$username'";
        $result = mysqli_query($db, $sql);
        echo $confirmation."pppppppppppppppppppppp";
        while($row= mysqli_fetch_assoc($result)){
            $password2= $row["password"];
        }
        $confirmation=password_verify($password2,$PwEncyprt);

        if($confirmation==1){
           
       echo $confirmation."pppppppppppppppppppppp";

            $sql = "select * from user where username = '$username' and userType = '$userType'";  
            $result = mysqli_query($db, $sql);  
            $count = mysqli_num_rows($result); 
            
		
        if($count > 0) {

                while($row= mysqli_fetch_assoc($result)){
                $_SESSION['customerCode'] = $row["customerCode"];
                $_SESSION['username']= $row["userName"];
                $attemp = $row["attempts"];
            }

                if($attemp==0){
                    $error = "Contact Bank you have been bloked";
                }
                else{
                    $customerCode= $_SESSION["customerCode"];
                    customerdata($customerCode,$db);
                    account($customerCode,$db);
                    header("Location: index.php");

                }
                
            
        }else {
            
            
    
            $sql = "SELECT * FROM user WHERE username = '$username'";  
            $result = mysqli_query($db, $sql);  
            $count = mysqli_num_rows($result);
            
            if ($count==0 && $username_err=="" && $password_err=="" ){
                $error="Login information is incorrect";
            }
            if($count > 0){
                while($row= mysqli_fetch_assoc($result)){
                    
                    $attemp = $row["attempts"];
                    
                }
                if ($attemp!=0){
    
                    try{
                      
                    $attemp=$attemp-1;
                    $sql = "UPDATE user SET attempts =$attemp WHERE userName= '$username'";
                    mysqli_query($db, $sql); 
                    $error = "Wrong user information $attemp attempts leave.";
                    }catch(Exception $ex){
                        echo $ex->getMessage();
                    }
                }
                else{
                  
                    $error = "Contact Bank you have been blocked";
                }
                
    }

      // Close connection
        mysqli_close($db);
    }
     }
        else{
            echo "<br>User dont exits";
        }

    }


    
    function customerdata($customerCode,$db){
    
    $sql = "select * from customerinfo where AccountId = '$customerCode' ";  
    
    $result2 = mysqli_query($db, $sql);  
    $count2 = mysqli_num_rows($result2); 
            
    if($count2 > 0){
            while($row= mysqli_fetch_assoc($result2)){
                $_SESSION['accountNumber'] = $row["AccountId"];
                $_SESSION['firstname']= $row["firstName"];
                $_SESSION['lastname']= $row["lastName"];
                $_SESSION['age']= $row["age"];
                $_SESSION['dob']= $row["dob"];
            }
        
    }

    
}

     
   function account($customerCode,$db){
    
    $sql = "select *from account where customerCode = '$customerCode' ";  
      $result3 = mysqli_query($db, $sql);  
    
      $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){
            

                $_SESSION['sharedBalance']= $row["sharesBalance"];
                $_SESSION['specialDeposit']= $row["specialDeposite"];
                $_SESSION['ordinaryDeposite']= $row["ordinaryDeposite"];
            
                
            }

            $sql = "select *from loan where accountNumber = '$customerCode' ";  
            $result3 = mysqli_query($db, $sql);  
            
            $count2 = mysqli_num_rows($result3); 
            if($count2 > 0){
                while($row= mysqli_fetch_assoc($result3)){
                
        
                $_SESSION['loanType']=$row["loanType"];
            
                $_SESSION['loanTotal']=$row["loanAmount"];  
            }
            }else{

                $_SESSION['loanType']="No Loan";
            
                $_SESSION['loanTotal']=0;
            }
            
    

    }
   

   }


?>
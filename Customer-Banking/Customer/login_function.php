<?php
// Initialize the session
include "session.php";



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
$userType="";


// Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
   // if(empty(trim($_POST["password"]))){
    //    $password_err = "Please enter your password.";
   // } else{
       $password2;
        $password2 = $_POST["password"];
        
       
    //}
        
        echo $password;
        echo $password;
        $password=md5($password2);
        echo $password."/n";
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
    
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
       
      $sql = "select * from user where username = '$username' and password = '$password'";  
            $result = mysqli_query($db, $sql);  
            $count = mysqli_num_rows($result); 
            
	
        if($count > 0) {

                while($row= mysqli_fetch_assoc($result)){
                $_SESSION['customerCode'] = $row["customerCode"];
                $_SESSION['username']= $row["userName"];
                $userName=$row["userName"];
                $attemp = $row["attempts"];
                $_SESSION['userType'] = $row["userType"];
            }

                if($attemp==0){
                    $error = "Contact Bank you have been bloked";
                }
                else{

                    if( $_SESSION['userType']=="customer"){

                        $customerCode= $_SESSION["customerCode"];
                        customerdata($customerCode,$db);
                        account($customerCode,$db);
                        loan($customerCode,$db);
                        $date = date("Y-m-d");
                        date_default_timezone_set('Jamaica'); 
                         $currentDateTime = date('h:i:sa');
                        $time= $currentDateTime;
                        $userAction="User Log in on web application";
                        
                       $sql2=" INSERT INTO userlog (id, userName, Date, Time, userType,userAction) VALUES ('$customerCode', '$userName', '$date',
                        '$time', '$userType', '$userAction')";
                        mysqli_query($db, $sql2);
                     
                        header("Location: banking.php");


                    }else if($_SESSION['userType'] == "admin" || $_SESSION['userType'] == "worker")
                    {
                        header("Location: ../../officail_admin/index.php");
                        //$error="Wrong login info";
                    }
                   

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
                        echo ("user -1");
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

            
    

    }

   }


        function loan($customerCode,$db){
            $sql1 = "select * from loan where accountNumber = '$customerCode' ";  
            $result4 = mysqli_query($db, $sql1);  
            
            $count3 = mysqli_num_rows($result4); 
            if($count3 > 0){
                while($row= mysqli_fetch_assoc($result4)){
                
        
                $_SESSION['loanType']=$row["loanType"];
            
                $_SESSION['loanTotal']=$row["loanAmount"];  
            }
            }else{

                $_SESSION['loanType']="No Loan";
            
                $_SESSION['loanTotal']="No Loan";
            }
        }

?>
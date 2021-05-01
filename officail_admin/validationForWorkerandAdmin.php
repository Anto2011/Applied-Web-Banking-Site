<?php

  
    include_once ("pdo.php");
    include_once ("db.php");
    $connection = new pdoconnection;
    $pdf=$connection->conn();
    $connection2 = new dbconnect;
    $db=$connection2->dbconnection();

    $password2_error=$password1_error=$userTYpe_error=$firstName_error= $lastName_error= $userName_error = $password1_error="";
    $email_error= $userType_error= $customerCode_error="";
    $userType= $userName=$password1=$password2=$CreateUser=$customerCode=$id=$email="";
    $attempts=3;



    


        

    //check the input request method
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

     if(empty($_POST["customerCode"]))
        {

             $customerCode_error = "ID is required";

        }else

        {
             $customerCode = cleanup_data($_POST["customerCode"]);
            //check that email address is properly formatted


                $customerCode = stripcslashes($customerCode);    
                $customerCode = mysqli_real_escape_string($db, $customerCode);  

                $query="SELECT * FROM user WHERE customerCode='$customerCode'";
                $result = mysqli_query($db, $query) ; 
              
                if(mysqli_num_rows($result) > 0){

                    $customerCode_error = "Sorry... Id already taken"; 	
                
                }
            
        }  



          if(empty($_POST["userType"]))
        {

            $userType_error  = " User Type is required";

        }else
        {
             $userType = cleanup_data($_POST["userType"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $userType))
            {

                 $userType_error = "Only letters and white space allowed.";

            }
        }





        if(empty($_POST["userName"]))
        {

            $userName_error = "user name is required";

        }else
        {
             $userName = cleanup_data($_POST["userName"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $userName))
            {
                $userName_error = "Only letters and white space allowed.";
            }
            $userName = stripcslashes($userName);    
            $userName = mysqli_real_escape_string($db, $userName);
                $sql_u = "SELECT * FROM user WHERE username='$userName'";
                $res_u = mysqli_query($db, $sql_u);

                  if (mysqli_num_rows($res_u) > 0) {
                    $userName_error = "Sorry... username already taken"; 	
                 }
            
        }


        //email validation
      

        if(empty($_POST["email"]))
        {

             $email_error = "Email is required";

        }else

        {
             $email = cleanup_data($_POST["email"]);
            //check that email address is properly formatted

            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {

                $email_error = "Invalid email format";

            }

                $email = stripcslashes($email);    
                $email = mysqli_real_escape_string($db, $email);  

                $query="SELECT * FROM user WHERE email='$email'";
                $result = mysqli_query($db, $query) ; 
              
                if(mysqli_num_rows($result) > 0){

                    $email_error = "Sorry... email already taken"; 	
                
                }
            
        }       

          if(empty($_POST["Password1"])){
            $password1_error = "password is required";
            }
            else
            {
                    $password1 = cleanup_data($_POST["Password1"]);
            }

            if(empty($_POST["Password2"]))
            {
                $password2_error = "password2 is required";
            }
            else{

                $password2 = cleanup_data($_POST["Password2"]);
            }
            if($password1 != $password2){
                    $password2_error = "password dont match";
                }
            



        if($password2_error==""  && $password1_error=="" && $userType_error== "" && $email_error =="" && $userName_error==""){
            $userName = stripcslashes($userName);  
            $password1 = stripcslashes($password1); 
            $userType = stripcslashes($userType);   
            $email = stripcslashes($email); 
            $attempts=stripcslashes( $attempts); 
            $id=stripcslashes( $id);  
            $userName = mysqli_real_escape_string($db, $userName);
            $sql_u = "INSERT INTO user (customerCode, userName, password, attempts, userType, email)
            VALUES ('$customerCode', '$userName', '$password1', '$attempts', '$userType', '$email')";
            $res_u = mysqli_query($db, $sql_u);
            $CreateUser="User was created";
            $customerCode=$userName=$password1=$password2=$userType=$email="";
        }

        
    }
    //define function to sanitize data
    function cleanup_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }


            

    


    ?>
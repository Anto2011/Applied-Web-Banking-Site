<?php
//	session_start();
	include_once('connection.php');


	$id_error ="";
	$user_error ="";
	$userType_error ="";
	$password1_error ="";
	$password2_error ="";
	$userName_error="";
	$email_error="";
	$password_error=""; 
	$password2_error="";
	$userName_error="";
	$id_error="";
	$email_error="";
	$id="";
	$userType="";
	$passwors="";
	$attempts="";
	$usertype="";
	$email="";
	$password="";



		 //if($_SERVER["REQUEST_METHOD"] == "POST")
		 if(isset($_POST['add']))
    {
        //First name validation
        if(empty($_POST["id"]))
        {

            $id_error = " id is required";

        }else
        {
             $id = cleanup_data($_POST["id"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[0-9]*$/", $id))
            {

                 $id_error = "Only number and white space allowed";

            }
        }


		

        if(empty($_POST["userName"]))
        {

            $userName_error = "user name is required";

        }else
        {
             $userName = cleanup_data($_POST["uname"]);
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



		     if(empty($_POST["psw"])){
            $password_error = "password is required";
    }else{
            $password = cleanup_data($_POST["psw"]);
    }

    if(empty($_POST["psw2"])){
        $password2_error = "password2 is required";
    }else{
        $password2 = cleanup_data($_POST["psw2"]);
    //check is name only contains letters and whitespace
    if($password != $password2){
            $password2_error = "password dont match";
    }
    }


	if($password_error=="" && $password2_error=="" && $userName_error=="" && $id_error=="" && email_error==""){


	}
		
		$sql = "INSERT INTO user (customerCode, userName, password, attempts, userType, email  ) VALUES ('$id', '$userType', '$password','$attempts','$userType','$email')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
	
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	//define function to sanitize data
    function cleanup_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
	
	header('location: manage-users.php');


?>
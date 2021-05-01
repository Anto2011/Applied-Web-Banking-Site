<?php
    include "userClass.php";
 //   include "config.php";
   
 
	$userName="";
	$password="";
	$password2="";
	$email="";
	$agree="";
	$userName_error="";
	$passwprd_error="";
	$password2_error="";
	$email_error="";
    $PwEncyprt="";
    
    //check the input request method
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //First name validation
        if(empty($_POST["fname"]))
        {

            $firstName_error = " Frist Name is required";

        }else
        {
             $firstName = cleanup_data($_POST["fname"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $firstName))
            {

                 $firstName_error = "Only letters and white space allowed.";

            }
        }

		if(empty($_POST["lname"]))
        {

             $lastName_error = " Last Name is required";

        }else{

             $lastName = cleanup_data($_POST["lname"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $lastName))
            {

                 $lastName_error = "Only letters and white space allowed.";

            }
        }

        //email validation
        $db=getdb();

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

       
if (empty($_POST["dob"])){
      // the user's date of birth cannot be a null string
      $errorString .= "You must supply a date of birth.";
   // echo $errorString;
}
  elseif (!preg_match("#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#",$_POST["dob"], $parts)){
      // Check the format
      $errorString .=
        "The date of birth is not a valid date in the " .
        "format DD/MM/YYYY";
      //  echo $errorString;
          }
elseif (!checkdate($parts[2],$parts[1],$parts[3])){
      $errorString .= "The date of birth is invalid. " .
    "Please check that the month is between 1 and 12, " .
    "and the day is valid for that month.";
    //echo $errorString;
}
  elseif (intval($parts[3]) < 1890){
      // Make sure that the user has a reasonable birth year
      $errorString .=
         "You must be alive to use this service.";
  // Check whether the user is 18 years old.
  // If all the following are NOT true,
  // then report an error.
 // echo $errorString;
  }
elseif
         // Were they born more than 19 years ago?
       (!((intval($parts[3]) < (intval(date("Y") - 19))) ||
         // No, so were they born exactly 18 years ago, and
         // has the month they were born in passed?
       (intval($parts[3]) == (intval(date("Y")) - 18) &&
       (intval($parts[2]) < intval(date("m")))) ||
         // No, so were they born exactly 18 years ago
         // in this month, and was the day today or earlier
         // in the month?
       (intval($parts[3]) == (intval(date("Y")) - 18) &&
       (intval($parts[2]) ==  intval(date("m"))) &&
       (intval($parts[1]) <= intval(date("d")))))){
       $errorString .=
        "You must be 18+ years of age to use this service.";
//echo $errorString;


}
        //gender validation 
        if(empty($_POST{"gender"})){

            $gender_error="Must Select a Gender";

        }else
        {
            $gender = cleanup_data($_POST["gender"]);
               
        }


        //number validation
        if(empty($_POST["phoneNo"])){

			 $telephone_error = "Mobile number is required";

        }else
        {

			 $telephone = cleanup_data($_POST["phoneNo"]);
            //check that mobile number is numeric

            if(!preg_match("/^[0-9]*$/", $telephone))
            {

				 $telephone_error= "Only numeric values allowed.";

            }
            //check mobile number length to see if it is equal to 10
            if(strlen($telephone) != 10)
            {

				 $telephone_error = "Number must contain 10 digits";

            }
        }

		if(empty($_POST["street"])){

             $streetName_error = "Street name is required";

        }else{

             $streetName = cleanup_data($_POST["street"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $streetName)){

                 $streetName_error = "Only letters and white space allowed.";

            }
        }


		if(empty($_POST["community"])){

             $community_error = "Community is required";

        }else{

             $community = cleanup_data($_POST["community"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $community)){

                 $community_error = "Only letters and white space allowed.";
            }
        }


		if(empty($_POST["parish"])){

             $parish_error = "parish is required";

        }else{

             $parish = cleanup_data($_POST["parish"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $firstName))
            {

                 $parish = "Only letters and white space allowed.";

            }
        }

        //Agreement validation
        if(empty($_POST["agree"]))
        {

            $agreeErr = "Accept terms and conditions before submit";

        }else
        {

            $agree = cleanup_data($_POST["agree"]);

        }

        if(empty($_POST["uname"]))
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

       $PwEncyprt=password_hash($password,PASSWORD_DEFAULT);    
	if($firstName_error =="" && $gender_error=="" && $lastName_error ==""  && $dob_error=="" && $telephone_error=="" && $streetName_error=="" && $community_error=="" && $parish_error=="" && $userName_error=="" && $password_error==""  && $password2_error=="" && $email_error=="" && $agreeErr==""){
        $pdo=getpdo();
        $userType="customer";
        $accountNumber=createAccount();
        $attempts=3;
        $user1= new customer($gender,$attempts,$accountNumber,$userType,$firstName,$lastName,$age,$dob,$telephone,$streetName,$community,$parish,$userName,$PwEncyprt,$email,$pdo);
        $user1->createUser();

        }
    }

    //define function to sanitize data
    function cleanup_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }

    function createAccount(){
    include "config.php";
    //$con= new dbconnect();
    //$db=$con->dbconnection();
    // $username="kopi";
		
        $sql ="SELECT * FROM user "; 
		$result = mysqli_query($db, $sql);  
		$count = mysqli_num_rows($result);
        
        if ($count<0){
            $accountNumber=100000;
        }else {
            $accountNumber=100000+$count+1;  
        }

	return $accountNumber;
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


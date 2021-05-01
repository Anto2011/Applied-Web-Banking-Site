 <?php

 
 include "config2.php" ;
 
 
$connection= new pdoconnection();
$pdo=$connection->conn();

 $account=$_SESSION['accountNumber'];
 $firstname= $_SESSION['firstname'];
$lastname= $_SESSION['lastname'];


$userName_error ="";
$userName ="";
$changeUserName_error2="";




            //check the input request method
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //First name validation
        if(empty($_POST["userName"]))
        {

            $userName_error = " Frist Name is required";

        }else
        {
             $userName = cleanup_data($_POST["userName"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/",  $userName))
            {

                 $userName_error = "Only letters and white space allowed.";

            }
        }
echo $userName;
        
    if ($userName_error==""){
       
        $account = stripcslashes($account);  
        $account = mysqli_real_escape_string($db, $account);  
        $userName = stripcslashes( $userName);  
        $userName = mysqli_real_escape_string($db, $userName); 

            $sql = "select * from user where customerCode = '$account' ";  
            $result = mysqli_query($db, $sql);  
            $count = mysqli_num_rows($result); 

        if($count > 0) {
        
        $stmt = $pdo->prepare("UPDATE user SET userName = ? WHERE customerCode = ?");
      
      $stmt->execute([$userName,$account]);
      $stmt = null;
        $userName_error="user name was updated";

        $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO users (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account,  $firstname, $date,$time,$userType,$userName_error]);
        
    }else{
        
            $userName_error=" User Name Password fail to update";
                 
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


?>
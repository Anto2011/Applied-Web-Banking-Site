 <?php


 include "config2.php" ;
 
 
$connection= new pdoconnection();
$pdo=$connection->conn();



$account=$_SESSION['accountNumber'];

  $oldPassword="";
  $oldpassword_error="";
  $password1="";
  $password2="";
  $password1_error="";
  $password2_error="";
  $changePassword_error="";

   $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];


 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 

       if(empty($_POST["oldPassword"])){
        $oldpassword_error = " Old password is required";

    }else{
       $oldPassword = cleanup_data($_POST["oldPassword"]);
    //check is name only contains letters and whitespace
  
    }



    if(empty($_POST["newPassword"])){
        $password1_error = " New password is required";

    }else{
        $password1 = cleanup_data($_POST["newPassword"]);
    //check is name only contains letters and whitespace
  
    }
    if(empty($_POST["newPassword1"])){
        $password2_error = "password2 is required";
    }else{
        $password2 = cleanup_data($_POST["newPassword1"]);
    //check is name only contains letters and whitespace
    if($password1 != $password2){
            $password2_error = "password dont match";
    }

}
    

    
    if ($oldpassword_error=="" && $password1_error=="" && $password2_error==""){
        
        
        $account = stripcslashes($account);  
        $account = mysqli_real_escape_string($db, $account);  
        $password2 = stripcslashes( $password2);  
        $password2 = mysqli_real_escape_string($db, $password2); 

            $sql = "select * from user where customerCode = '$account' and password = '$oldPassword'";  
            $result = mysqli_query($db, $sql);  
            $count = mysqli_num_rows($result); 

        if($count > 0) {
        
        $stmt = $pdo->prepare("UPDATE user SET password = ? WHERE customerCode = ?");
      
      $stmt->execute([$password2,$account]);
      $stmt = null;
        $changePassword_error="Password was updated";

        $date = date("Y-m-d");
      date_default_timezone_set('Jamaica'); 
      $currentDateTime = date('h:i:sa');
      $time= $currentDateTime;
      $userType="customer";
      $userName=$firstname;
      $sql = "INSERT INTO users (id, userName, Date, Time, userType,userAction) VALUES (?,?,?,?,?,?)";
      $stmt2= $pdo->prepare($sql);
      $stmt2->execute([$account, $firstname, $date,$time,$userType, $changePassword_error]);
        
    }else{
            $changePassword_error="Password fail to update";
                 
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
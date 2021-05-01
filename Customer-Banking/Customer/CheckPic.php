<?php
    //include 'session.php';
    //require_once "config.php";
    $acc=$_SESSION['accountNumber'];

 $picerror="";
 $imageFileType="";
 $sizeerror="";
 $typeerror="";
 $uploaderror="";

    //$connection= new pdoconnection();
    //$db=$connection->conn();

    
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["save_profile"]) && (!empty($_FILES["profileImage"]))) {
   // echo "gvhs";

        $target_dir = "assets/propic_img/";
        $fileTempName = "";
        $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
      //  $newFileName = $_POST['filename'];
        /*if(empty($newFileName)){ 
            $newFileName = "style";

        }else{
            $newFileName = strtolower(str_replace(" ","-", $newFileName));
        }
*/
      $fileTempName = $_FILES["profileImage"]["tmp_name"];
      if ($_FILES["profileImage"]["size"] > 500000) {
        $sizeerror= "Sorry, your image size is too large.";
      $uploadOk = 0;
    }
      /*$check = getimagesize($_FILES["profileImage"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } */
    }elseif(isset($_POST["save_profile"]) && (empty($_FILES['profileImage']))) {
    echo "merrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrry";
      $uploaderror= "Form was submitted but file wasn't send";
      //exit();
    }else{
        //header("location: Option4.php");
        //exit();
        
       echo "nice tryyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
      
      }
    
    // Check if file already exists
   /* if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
   }*/
    
    // Check file size
    
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $typeerror= "Note: only JPG, JPEG, PNG & GIF images are allowed to be uploaded. ";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $picerror= "No new picture uploaded. ";
    // if everything is ok, try to upload file
    } /*else if($uploadOk== 2){
      $fileName = $_FILES["fileToUpload"]["name"];
     
                                                        /*************************************** */
                                                        // require_once "db/connection.php";

               
      /* $query = "SELECT picture FROM `propic` where picture= $fileName";
       $result = mysqli_query($dsn,$query);
                while ($row = mysqli_fetch_array($result)) {
                

                    $path ="assets/img/";


    echo '<img src="<?=$path.$row["picture"]?>"  height="150" width= "150">';
     }
    echo '<img id="output_image"/>';
       
            
          

        /*************************************** */
      //}
       else {
        $fileName = $_FILES["profileImage"]["name"];
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $picerror= "The file ". basename( $_FILES["profileImage"]["name"]). " has been uploaded.";

         // $stmt = mysqli_stmt_init($db);
        // require_once "config.php";
        // $db=getdb();

         $stmt = mysqli_stmt_init($db);
       
         

          $sql = "UPDATE user SET picture= ? WHERE customerCode= ?";
         // mysqli_query($db, $sql); 
        
          if (!mysqli_stmt_prepare($stmt,$sql)) {
             echo "SQL statement failed!";
         } else{
           
             mysqli_stmt_bind_param($stmt, "si", $fileName, $acc);
             mysqli_stmt_execute($stmt);                   

             $picerror= "Profile picture updated!";
         //   header("Location: ../Upload Pic/try.php?upload=succes");
         }
     
      

        }else{
        echo "No picture uploaded. ";
      }
    }

   /* function getdb(){

        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_DATABASE', 'bank');
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        return $db;

  }*/


?>
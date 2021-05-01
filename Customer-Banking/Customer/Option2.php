<?php 
include 'session.php';
require_once "config.php";
$con= new dbconnect();
$db=$con->dbconnection();

include "changeUsername.php";
include 'side-nav.php';
$title="Profile Settings";

require_once "includes/header.php";

     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];
     

          
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/Bank1.css"> 
<link rel="stylesheet" type="text/css" href="css/sidebar.css"/>
<link rel="stylesheet" type="text/css" href="css/TopBar.css"/>
<link rel="stylesheet" type="text/css" href="css/Table.css"/>-->

<link rel="stylesheet" type="text/css" href="css/Table.css"/>

<link rel="stylesheet" type="text/css" href="css/side-nav.css"/>

</head>

<body>

<div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-30">
                <div class="media-left padding-right-25">
                
                  <a href="#">
                  
                  
                      <?php
                $query = "SELECT picture FROM `user` WHERE customerCode= $account";
                $result = mysqli_query($db,$query);
              
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <?php $path ="assets/propic_img/";?>
             
                  
                  <img class="media-object img-circle templatemo-img-bordered" src="<?php echo  $path.$row['picture'];  ?>" width="150" height="150" >
                  </a>
               
               <?php }?>
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text"><?php echo $firstname; echo " "; echo $lastname; ?></h2>
                  <p><?php echo $account; ?></p>
                  <h3 class="media-title">Change username</h3>
                </div>        
              </div>         
            </div>

            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-306">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
                  <div class="LowerBar">
                    <div class="Container2">
                <form action="" method="post" ><br><br>


              <div class="Option2TableContainer">
              <table class="styled-table">
                  <thead>
                      <tr>
                        <th>
                  <label class="Option2NewUser" for="fname">Enter new username</label><br><br>
                        </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="active-row" >
                        <th>
                  <input type="text" style="width:100%;" id="fname" name="userName" placeholder="User Name">
                  <p class="error"  style="color:Blue;"><?php echo $userName_error; ?></p>
                  <p class="error"  style="color:red;"><?php echo $changeUserName_error2; ?></p>
                        </th>
                      </tr>
                      <tr class="active-row" >
                        <th>      
                  <input type="submit" class="Button" name="submit" value="Submit">
                        </th>
                      </tr>
                </form>

              </div>
              </div>
             
  </div>   
              </div>                  
                </div>        
              </div>         
            </div>
            
   




</body>

</html>
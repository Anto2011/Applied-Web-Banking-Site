<?php 
include 'session.php';
include "config.php" ;
include "getAllBalance.php";

include 'side-nav.php';
$title= "Profile Settings";
require_once "includes/header.php";


     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];

      $con= new dbconnect();
      $db=$con->dbconnection();
      $bal = new allBalance();
      include "CheckPic.php";

 
    $sharedBalance= $bal->getShareBalance($account, $db);
    $specialDeposit= $bal->getSpecialDeposit($account, $db);
    $ordinaryDeposite= $bal->getOrdinaryDeposit($account, $db);
    $loanType=$bal->loanType($account, $db);
    $loanTotal =$bal->loanAmount($account, $db);       
?>

<!DOCTYPE html>
<html>
<head>


</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/sidebar.css"/>
<link rel="stylesheet" type="text/css" href="css/TopBar.css"/>
<link rel="stylesheet" type="text/css" href="css/Table.css"/> -->

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
             
                  <!--<img  src="<?php echo  $path.$row['picture'];  ?>" onClick="triggerClick()" id="profileDisplay">-->
                  <img class="media-object img-circle templatemo-img-bordered" src="<?php echo  $path.$row['picture'];  ?>" width="150" height="150" alt="Sunset">
                  </a>
               
               <?php }?>
                    
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text"><?php echo $firstname; echo " "; echo $lastname; ?></h2>
                  <p><?php echo $account; ?></p>
                  <h3 class="media-title">Change Profile Picture</h3>
                </div>        
              </div>         
            </div>

            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-305">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
                <div class="LowerBar">
                  <div class="Container2">
          <!--    <form action=""><br><br>-->
            


            <div class="Option3TableContainer">
            <table class="styled-table">
                <thead>
                    <tr>
                      <th>
                <label class="Option3UploadFileHeading" for="fname">Upload File</label><br><br>
                      </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active-row" >
                      <th>

              <div class="change password">
                <div class="container">
                  <div class="wrapper">
                    <div class="image">
                      <img src="" alt="">
                    </div>



                    <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
      
        <form action="" method="POST" enctype="multipart/form-data">
        

        <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
               
              </div>

              <?php
                $query = "SELECT picture FROM `user` where customerCode= $account";
                $result = mysqli_query($db,$query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <?php $path ="assets/propic_img/";?>
             
                  <img src="<?php echo $path.$row['picture']; ?>" onClick="triggerClick()" id="profileDisplay">
                     
               <?php }?>
          
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                </br>
          <div class="form-group">
         <!-- <button type="submit" name="save_profile" >save </button>-->
          <input type="submit" name="save_profile" value="Save" class="Button">
          </div>
      

          </form>
          <span class="error" style="color:red;"> <?php echo $picerror.$sizeerror.$uploaderror.$typeerror;?></span><br>

</div>
  </div>
  </div>

           <!-- <div class="content">
                      <div class="icon">
            <i class="fas fa-cloud-upload-alt"></i></div>
            <div class="text">
            No file chosen, yet!</div>
            </div>
            <div id="cancel-btn">
            <i class="fas fa-times"></i></div>
            <div class="file-name">
            File name here</div><br>
            </div>
            <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
                  <input id="default-btn" type="file" hidden>
                </div>
            </table>
            </div>
              </div>-->
         <!-- </form>-->
            </div>
         
  </div>
            </div>
            
                </div>        
              </div>         
            </div>

  
 
<!--<script>
      const wrapper = document.querySelector(".wrapper");
      const fileName = document.querySelector(".file-name");
      const defaultBtn = document.querySelector("#default-btn");
      const customBtn = document.querySelector("#custom-btn");
      const cancelBtn = document.querySelector("#cancel-btn i");
      const img = document.querySelector("img");
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      function defaultBtnActive(){
        defaultBtn.click();
      }
      defaultBtn.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            img.src = result;
            wrapper.classList.add("active");
          }
          cancelBtn.addEventListener("click", function(){
            img.src = "";
            wrapper.classList.remove("active");
          })
          reader.readAsDataURL(file);
        }
        if(this.value){
          let valueStore = this.value.match(regExp);
          fileName.textContent = valueStore;
        }
      });
    </script>-->

</body>

</html>
<script src="assets/js/previewpic.js"></script>
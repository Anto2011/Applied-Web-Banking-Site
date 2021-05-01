
<?php 
include 'session.php';
include 'side-nav.php';
require_once "config.php";
require_once "includes/header.php";

     $firstname= $_SESSION['firstname'];
     $lastname= $_SESSION['lastname'];
     $account=$_SESSION['accountNumber'];
 
     
     $con= new dbconnect();
     $db=$con->dbconnection();
    
            
?>







<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<!-- <link rel="stylesheet" type="text/css" href="css/Bank.css"> 
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
             
                  <!--<img  src="<?php echo  $path.$row['picture'];  ?>" onClick="triggerClick()" id="profileDisplay">-->
                  <img class="media-object img-circle templatemo-img-bordered" src="<?php echo  $path.$row['picture'];  ?>" width="150" height="150" alt="Sunset">
                  </a>
               
               <?php }?>
                   
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text"><?php echo $firstname; echo " "; echo $lastname; ?></h2>
                  <p><?php echo $account; ?></p>
                  <h3 class="media-title">Pay Bills</h3>
                </div>        
              </div>         
            </div>

            <div class="templatemo-content-widget white-bg">
              <div class="media margin-bottom-303">
                <div class="media-left padding-right-25">
                </div>
                <div class="media-body">
                <div class="LowerBar">
      <div class="Container2">

    <div class="PayBillsTableContainer"  >
    <h2>Pay Bills</h2>

    <table class="styled-table">
    <thead>
        <tr>
            <th><label  for="ltnCompanyName"><b>Company name</b></label></th>
            <th><input type="text"  id="" name="" ></th>
        </tr>
    </thead>
    <tbody>
        <tr class="active-row" >
           
            <td><label for="Options"><label for="ltnCompanyName"><b>Account number</b></label></label> </td>
            <td><label for="Options" ><input type="text" id="" name="" placeholder="$"></label></td>
        </tr>
        <tr class="active-row">
            <td><label  for="Options"><b>Select Account to pay from:</b></label></td>
            <td><select id="Options" name="Options"></td>
        </tr>        
        <tr class="active-row">
            <td><option style="font-weight: bold;">Ordinary deposit ATM card</option></td>
        <td><option value="CardOption">Card option1</option>
        </td>
        </tr> 
        <tr class="active-row">
       
        <td colspan="2" style="width:100%"><input type="submit" class="Button" name="submit" value="submit"></td>
        
        </tr>
        
    </tbody>
    </table>
        
    </div>
     
    
    
    
	  
  </div>
</div>
                </div>        
              </div>         
            </div>
<form  id = "msform" action = "" method = "POST" > 
<!--<div class="TopBar"> Top bar color
  <div class="TopBarInfo">
    <h2 class="H2">Pay Bills</h2>
    
    <h2 class="H2" >Savings Account</h2>
</div>-->

</div> 
    
      <form method = "POST" >
      
    
    
        
      </form>
    </div>
  </div>
	




</body>

</html>
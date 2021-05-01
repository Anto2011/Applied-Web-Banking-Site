<?php  
require_once "header.php";
     $connect = mysqli_connect("localhost", "root", "", "bank");  
     $query ="SELECT * FROM user ORDER BY customerCode desc";  
     $result = mysqli_query($connect, $query); 
     //require_once "import.php"; 
 
     $userType= $_SESSION['userType'];

     // message box on the screen
     // Function defnition
     function function_alert($message) {
          
     // Display the alert box 
     echo "<script>alert('$message');document.location='index.php'</script>";
     }
     
     if($userType == "worker"){
          // Function call
          function_alert("Access Denied!!!");
          
     }

?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export Mysql Table Data to CSV file in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Employee Data</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
              <h3><a href="csv2.php">Next<a></h3>
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Customer Code</th>  
                               <th width="25%">User Name</th>  
                               <th width="35%">Password</th>  
                               <th width="10%">Attempts</th>  
                               <th width="20%">User Type</th>  
                               <th width="5%">Email</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["customerCode"]; ?></td>  
                               <td><?php echo $row["userName"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <td><?php echo $row["attempts"]; ?></td>  
                               <td><?php echo $row["userType"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  

               <div id="wrap">
        <div class="container">
            <div class="row">

                <form action="import.php" class="templatemo-login-form" method="post">
                    <fieldset>
                        <!-- Button -->
                        <div class="col-lg-6 col-md-6 form-group">                  
       
                    <input type="text" class="form-control"  placeholder="file" name="csvfile" >                  
                    
                </div> 
                        <div class="form-group">
                           

                            <div class="col-md-4">
                                <button type="submit"  id="submit"  class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>


        </div>
    </div>
      </body>  
 </html>  
<?php 
//$page= "Manage-Users";
require_once "header.php";

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

        
          <script>
            function show_user_table() {
            var w = document.getElementById("admin-table-info");
            var x = document.getElementById("user-table-info");
            var z = document.getElementById("user-table");
            var y = z.options[z.selectedIndex].value;
            
            if(y == "customer"){
              x.style.display = "block";
              w.style.display = "none";
            }
            else if(y == "admin"){
              x.style.display = "none";
              w.style.display = "block";
            }
          }
          </script>
            
    <div class="container">
	<h1 class="page-header text-center">CRUD Operation With DataTable and PDF</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
			
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
					    <th>Gender</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
		    require_once 'config.php';
              $connection = new dbconnect();
             $conn= $connection->dbconnection();
							
				 
							$sql = "SELECT * FROM customerinfo ";
 							$result = $conn->query($sql) or die($conn->error);
							$query = $conn->query($sql);
							
							

							
							while($row = $query->fetch_assoc() ){
								echo 
								"<tr>
									
									<td>".$row['AccountId']."</td>
									<td>".$row['firstName']."</td>
									<td>".$row['lastName']."</td>
									<td>".$row['gender']."</td>
									
									<td>
										<a href='#edit_".$row['AccountId']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
									
										<a href='#delete_".$row['AccountId']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_modal2.php');
							}
						
						?>

			
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal2.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>

<<style>
.PP{
	text-align: center;
}
</style>
            <!-- javascript random generators -->
            <script>  
              function randomString() {  
                          //define a variable consisting alphabets in small and capital letter  
                  var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";  
                            
                          //specify the length for the new string  
                  var lenString = 7;  
                  var randomstring = '';  
                
                          //loop to select a new character in each iteration  
                  for (var i=0; i<lenString; i++) {  
                      var rnum = Math.floor(Math.random() * characters.length);  
                      randomstring += characters.substring(rnum, rnum+1);  
                  }  
                
                          //display the generated string   
                  document.getElementById("password").innerHTML = randomstring;  
              }  
            </script>  
            <script>
              function randomNumber(len) {
                var randomNumber;
                var n = '';

                for(var count = 0; count < len; count++) {
                    randomNumber = Math.floor(Math.random() * 10);
                    n += randomNumber.toString();
                }
                return n;
              }

              document.getElementById("password").value = randomNumber(9);
            </script>

  
              
         
          <?php 
        
         ?>
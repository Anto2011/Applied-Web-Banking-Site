<!-- Edit -->
	




<div class="modal fade" id="edit_<?php echo $row['AccountId']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">


			<form method="POST" action="edit2.php">
				
			
				

				<input type="hidden" class="form-control" name="ccCode" value="<?php echo $row['AccountId']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Account Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ccCode" value="<?php echo $row['AccountId']; ?>">
					</div>
				</div>


				<?php						
				 			$accountid = $row['AccountId'];
							$sql2 = "SELECT * FROM customermailing where customerCode = $accountid ";
 							$result2 = $conn->query($sql2) or die($conn->error);
							//$query2 = $conn->query($sql2);						
							//$row2 = $query->fetch_assoc();
							$row2 = $result2->fetch_assoc();
						

				?>




				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fName" value="<?php echo $row['firstName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lName" value="<?php echo $row['lastName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Age:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telephone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telephone" value="<?php echo $row['telephone']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">D.O.B:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Street Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="streetName" value="<?php echo $row2['streetName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Community:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="community" value="<?php echo $row2['community']; ?>">
					</div>
				</div><div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Parish:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="parish" value="<?php echo $row2['parish']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Country:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="country" value="<?php echo $row2['country']; ?>">
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->

<div class="modal fade" id="delete_<?php echo $row['AccountId']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>

            </div>

            <div class="modal-body">

            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['AccountId'].' '.$row['firstName']; ?></h2>

			</div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete2.php? id=<?php echo $row['AccountId']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>

            </div>

        </div>
    </div>
</div>
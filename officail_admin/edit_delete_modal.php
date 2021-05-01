<!-- Edit -->

<div class="modal fade" id="edit_<?php echo $row['customerCode']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">


			<form method="POST" action="edit.php">

				<input type="hidden" class="form-control" name="ccCode" value="<?php echo $row['customerCode']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Account Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ccCode" value="<?php echo $row['customerCode']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">User Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="uName" value="<?php echo $row['userName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pass" value="<?php echo $row['password']; ?>">
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

<div class="modal fade" id="delete_<?php echo $row['customerCode']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>

            </div>

            <div class="modal-body">

            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['customerCode'].' '.$row['userName']; ?></h2>

			</div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php? id=<?php echo $row['customerCode']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>

            </div>

        </div>
    </div>
</div>
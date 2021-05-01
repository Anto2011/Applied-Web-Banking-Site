<!-- Add New -->

<?php
require_once "add.php";

?>


<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Id:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Id" >
						 <span class="error" style="color:red;"> <?php echo $id_error;?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">User Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="userName" >
						 <span class="error" style="color:red;"> <?php echo $userName_error;?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password1:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Password1" >
						 <span class="error" style="color:red;"> <?php echo $password1_error;?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password2:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password2" >
						 <span class="error" style="color:red;"> <?php echo $password2_error;?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">User Type:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="userType" >
						 <span class="error" style="color:red;"> <?php echo $userType_error;?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" >
						 <span class="error" style="color:red;"> <?php echo $email_error;?></span>
					</div>
				</div>
				
		
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
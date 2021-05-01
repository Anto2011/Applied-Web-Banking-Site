<?php
	session_start();
	 require_once 'config.php';
             $connection = new dbconnect();
            $conn= $connection->dbconnection();

	if(isset($_POST['edit'])){
	
		$customerCode = $_POST['ccCode'];
		$userName = $_POST['uName'];
		$password = $_POST['pass'];



		$sql = "UPDATE user SET userName = '$userName', password = '$password' WHERE customerCode = '$customerCode'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			echo "hi";
			$_SESSION['success'] = 'Member updated successfully';
		}
	
		
		else{
			echo "dunce";
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	
	}

		header('location: manage-users.php');

?>
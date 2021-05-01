<?php
	session_start();
	 require_once 'config.php';
             $connection = new dbconnect();
            $conn= $connection->dbconnection();
				 

	if(isset($_GET['id'])){

		echo"helllooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
		$sql = "DELETE FROM user WHERE customerCode = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}
	echo "yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
	header('location: manage-users.php');
?>
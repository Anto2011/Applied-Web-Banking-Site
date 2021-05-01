<?php
	session_start();
	 require_once 'config.php';
             $connection = new dbconnect();
            $conn= $connection->dbconnection();
				 

	if(isset($_GET['id'])){

		
		$sql = "DELETE FROM customerinfo WHERE AccountId = '".$_GET['id']."'";
        $sql2 = "DELETE FROM customermailing WHERE customerCode = '".$_GET['id']."'";
		//use for MySQLi OOP
		if($conn->query($sql)){
			$conn->query($sql2);
			
		}
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: manage-customer.php');
?>
<?php
	session_start();
	 require_once 'config.php';
             $connection = new dbconnect();
            $conn= $connection->dbconnection();

	if(isset($_POST['edit'])){
	
		$customerCode = $_POST['ccCode'];
		$firstName = $_POST['fName'];
		$lastName = $_POST['lName'];
		$age = $_POST['age'];
		$dob = $_POST['dob'];
		$telephone = $_POST['telephone'];
		$gender = $_POST['gender'];
		$streetName = $_POST['streetName'];
		$community = $_POST['community'];
		$parish = $_POST['parish'];
		$country= $_POST['country'];
		

		$sql = "UPDATE customerinfo SET firstName = '$firstName', lastName = '$lastName', age ='$age', dob='$dob', telephone='$telephone', gender='$gender' WHERE AccountId = '$customerCode'";
		$sql2 = "UPDATE customermailing SET streetName = '$streetName', community = '$community', parish ='$parish', country ='$country' WHERE customerCode = '$customerCode'";
		
		//use for MySQLi OOP
		if($conn->query($sql)){
			$conn->query($sql2) or die($conn->error);
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
	
		header('location: manage-customer.php');

?>
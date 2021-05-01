
<?php

	class customer{
		
	
    protected $firstName;
	protected $lastName;
	protected $age;
	protected $dob;
	protected $telephone;
	protected $streetName;
	protected $community;
	protected $parish;
	protected $userName;
	protected $password1;
	protected $password2;
	protected $email;
	protected $accountNumber;	
	protected $attempts;
	protected $userType;
	protected $pdo;
	protected $gender;



	
	
	function __construct($gender,$attempts, $accountNumber,$userType,$firstName,$lastName,$age,$dob,$telephone,$streetName,$community,$parish,$userName,$password,$email,$pdo){
	
			
				echo $attempts;
				$this->firstName=$firstName;
				$this->lastName=$lastName;
				$this->age=$age;
				$this->dob=$dob;
				$this->telephone=$telephone;
				$this->streetName=$streetName;
				$this->community=$community;
				$this->parish=$parish;
				$this->username=$userName;
				$this->password=$password;
				$this->email=$email;
				$this->pdo=$pdo;
				$this->userType=$userType;
				$this->accountNumber=$accountNumber;
				$this->attempts=$attempts;
				$this->gender=$gender;
				$this->sharesBalance=500;
				$this->ordinaryDeposit=500;
				$this->specialDeposit=500;
				$this->country="Jamaican";

		}


		
	
	function createUser(){

	

		include_once 'config2.php';
		$pdo=$this->pdo;
		$fileName= "defaultimg.jpg";

		$sql1="INSERT INTO user(customerCode,userName,password,attempts,userType,email,picture) VALUES(?,?,?,?,?,?,?)";
		$stmt = $this->pdo->prepare($sql1);
		$stmt->execute([$this->accountNumber,$this->username,$this->password,$this->attempts,$this->userType,$this->email, $fileName]);
		$stmt = null;

		$sql2="INSERT INTO customerinfo (AccountId,firstName,lastName,age,dob,telephone,gender) VALUES(?,?,?,?,?,?,?)";
		$stmtt = $this->pdo->prepare($sql2);
		$stmtt->execute([$this->accountNumber,$this->firstName,$this->lastName,$this->age,$this->dob,$this->telephone,$this->gender]);
		$stmtt = null;
		

		$sql3="INSERT INTO customermailing (customerCode,streetName,community,parish,country)VALUES(?,?,?,?,?)";
		$stmttt = $this->pdo->prepare($sql3);
		$stmttt->execute([$this->accountNumber,$this->streetName,$this->community,$this->parish,$this->country]);
		$stmttt = null;
			
		$sql4="INSERT INTO account(customerCode,sharesBalance,ordinaryDeposit,specialDeposit)VALUES(?,?,?,?)";
		$stmtttt = $this->pdo->prepare($sql4);
		$stmtttt->execute([$this->accountNumber,$this->sharesBalance,$this->ordinaryDeposit,$this->specialDeposit]);
		$stmtttt = null;

		$sql5="INSERT INTO loan(accountNumber,loanAmount) VALUES(?,?)";
		$stmttttt = $this->pdo->prepare($sql5);
		$stmttttt->execute([$this->accountNumber,"0"]);
		$stmttttt = null;
		$message= "You have successfully Registered!";
		echo "<script type= 'text/javascript'>alert('$message'); window.location.href= 'login.php'; </script>";
	//	sleep(3);
		
		//header("Location: login.php");
	//	exit();

	}


	function setFname($fname){
		$this->firstName=$fname;
	}

	function getFname(){
		return $this->firstName;
	}

	function setlname($lname){
		$this->lastName=$lname;
	}

	function getlname(){
		return $this->lastName;
	}
    
	function setage($age){
		$this->age=$age;
	}

	function getage(){
		return $this->age;
	}
    
	function settelephone($telephone){
		$this->telephone=$telephone;
	}

	function gettelephone(){
		return $this->telephone;
	}

	function setstreetName($streetName){
		$this->streetName=$streetName;
	}

	function getstreetName(){
		return $this->streetName;
	}

	function setparish($parish){
		$this->parish=$parish;
	}

	function getparish(){
		return $this->parish;
	}

	function setcommunity($community){
		$this->community=$community;
	}

	function getcommunity(){
		return $this->community;
	}

	function setuserName($userName){
		$this->userName=$tuserName;
	}

	function userName(){
		return $this->userName;
	}

	function setpassword($password){
		$this->password=$password;
	}

	function getpassword2(){
		return $this->password2;
	}

	function setemail($email){
		$this->email=$email;
	}

	function getemail(){
		return $this->email;
	}


	function getuserName(){
		return $this->userName;
	}

	
  
}


?>
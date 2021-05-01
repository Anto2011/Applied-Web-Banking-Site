




<form action="" method="post" >
  <label>
    Enter your birthday:
    <input type="date" name="day">
  </label>



  <label for="dob"><b>Date Of Birth</b></label>
<input type="date" placeholder="DOB" name="dob"  >


  <p><button>Submit</button></p>




    </form>


<?php

    $date="";
    //check the input request method
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $date = $_POST["day"];

        
        findage($date);
    }
    
    
    function findage($birthDate)
	{	


        echo $birthDate;
        $timestamp=strtotime($birthDate);
        $newdate= date("m-d-20y",$timestamp);
       echo $newdate;

        //date in mm/dd/yyyy format; or it can be in other formats as well
        //$birthDate = "12/17/1983";
        //explode the date to get month, day and year
        $newdate = explode("/", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
        echo "Age is:" . $age;
 }
	?>


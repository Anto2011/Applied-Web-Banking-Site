<?php

    $file="";
    $userType2="";

 if($_SERVER["REQUEST_METHOD"] == "POST"){

          if(empty($_POST["csvfile"]))
        {

            $userType_error  = " User Type is required";

        }else
        {
             $file = cleanup_data($_POST["csvfile"]);
            //check is name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z ]*$/", $file))
            {

                 $userType_error = "Only letters and white space allowed.";

            }
        }

                echo $file;
               $file= $file.'.csv';
               echo $file;
           
				

        
        echo "<html><body><center><table>\n\n";
  
        // Open a file
        $file = fopen($file, "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file)) !== false) {
  
            // HTML tag for placing in row format
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td>" . htmlspecialchars($i) 
                    . "</td>";
            }
            echo "</tr> \n";
        }
  
        // Closing the file
        fclose($file);
  
        echo "\n</table></center></body></html>";
        
	
	}	 

       //define function to sanitize data
    function cleanup_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }

 ?>
 <?php  
      
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "bank");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Customer Code', 'User Name', 'Password', 'Attempts', 'User Type', 'Email'));  
      $query = "SELECT * from user ";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  

  
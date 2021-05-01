<?php



class allBalance{


    function getShareBalance($customerCode, $db){

        $sql = "select *from account where customerCode = '$customerCode' ";  
        $result3 = mysqli_query($db, $sql);  
    
        $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){

                $sharebalance= $row["sharesBalance"];
    }

    }

        return $sharebalance;
    }


    function getSpecialDeposit($customerCode, $db){

        $sql = "select *from account where customerCode = '$customerCode' ";  
        $result3 = mysqli_query($db, $sql);  
    
        $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){

                $specialDeposit= $row["specialDeposit"];
    }

    }

        return $specialDeposit;
    }


    function getOrdinaryDeposit($customerCode, $db){

        $sql = "select *from account where customerCode = '$customerCode' ";  
        $result3 = mysqli_query($db, $sql);  
    
        $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){

                $ordinaryDeposite= $row["ordinaryDeposit"];
    }

    }

        return $ordinaryDeposite;
    }


    function loanAmount($customerCode, $db){
        
        $sql = "select * from loan where accountNumber = '$customerCode' ";  
        $result3 = mysqli_query($db, $sql);  
    
        $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){

                $loan = $row["loanAmount"];
    }

    }else{

        $loan=0;
    }

        return $loan;

    }

      function loanType($customerCode, $db){
        
        $sql = "select * from loan where accountNumber = '$customerCode' ";  
        $result3 = mysqli_query($db, $sql);  
    
        $count2 = mysqli_num_rows($result3); 

        if($count2 > 0){
            while($row= mysqli_fetch_assoc($result3)){

                $loan = $row["loanType"];
    }

    }else{

        $loan="No Loan";
    }

        return $loan;

    }
}


?>
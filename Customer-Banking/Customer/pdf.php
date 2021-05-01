
<?php


require_once __DIR__ . '/../vendor/autoload.php';
include 'config.php';
include 'session.php';

  $acc=$_SESSION['accountNumber'];


$con= new dbconnect();
$db=$con->dbconnection();



$html= '<!DOCTYPE html>';
$html.='<html>';
$html.='<head>';


    
    
  
$html.='  <link rel="stylesheet" href="css/pdfstyle.css">';
$html.=' <script src="script.js"></script>';
        
  
$html.='</head>';
$html.='<body>';



$html.='<div id="invoice">';

$html.='<div class="toolbar hidden-print">';
$html.= date("Y/m/d");
   $html.=' <div class="text-right">';
    $html.='   <div> Bank Statement </div>';
  $html.='  </div>';
  $html.='  <hr>';
  $html.='</div>';
  $html.='<div class="invoice overflow-auto">';
  $html.=' <div style="min-width: 600px">';
  $html.='     <header>';
  $html.='        <div class="row">';
  $html.='            <div class="col">';
 // $html.='          <a target="_blank" href="">';
  $html.='         <img src="images/Logo.jpg" width="150" height="100" data-holder-rendered="true" />';
  //$html.='                  </a>';
  $html.='           </div>';
  $html.='           <div class="col company-details">';
  $html.='            <h2 class="name">';
  $html.='            Statement Date';
  $html.='<br>';
  $html.='               </h2>';
  $html.=                 date("Y/m/d") ;

 
  $query = "SELECT customerCode FROM `user` where customerCode= $acc ";
  $result = mysqli_query($db,$query);
  while ($row = mysqli_fetch_array($result)) {
  $html.='              <h2 class="name">';
  $html.='           Account Number';
  $html.='               </h2>';
  $html.='          <div>'. $row["customerCode"].'</div>';
  }
  $html.='<br>';
    $html.='<br>';  

  $html.='                <h2 class="name">';
 // $html.='                  Customer Number';
                       
  $html.='                     </a>';
  $html.='                 </h2>';
  $html.='                <div>3110 HalfWay Tree Heavens, Moral Gardens, Kingston 10</div>';
  $html.='                <div> 1-876-KAST</div>';
  $html.='                 <div>outKastbanking@gmail.com</div>';
  $html.='            </div>';
  $html.='         </div>';
  $html.='      </header>';
  $html.='     <main>';
  $html.='          <div class="row contacts">';

  $query = "SELECT * FROM `customermailing` where customerCode= $acc ";
  $result = mysqli_query($db,$query);
  while ($row = mysqli_fetch_array($result)) {

  $html.='     <div class="col invoice-to">';
  $html.='              <div class="text-gray-light">ADDRESS OF:</div>';
                  
  $html.='                  <div class="address">'. $row["streetName"].'</div>';
  $html.='                  <div>'. $row["community"].' </div>';
  $html.='                  <div>'. $row["parish"].' </div>';
  $html.='                  <div>'. $row["country"].' </div>';
  $html.='                  <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>';
  $html.='        </div>';
  $html.='<br><br>';
  }
  /*$html.='            <div class="col invoice-details">';
  $html.='                 <h4 class="invoice-id">Opening Balance: </h4>';
                 
   $html.='                <div class="date">Total Withdrawls: $100000</div>';
   $html.='                  <div class="date">Total Deposits: $100000</div>';
   $html.='             <br>';
   $html.='             <h4 class="invoice-id">Closing Balance: </h4>';
   $html.='            </div>';
   $html.='       </div>';*/
$query = "SELECT * FROM `transaction` where customerCode= $acc ";
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0){
    

   $html.='        <table border="0" cellspacing="0" cellpadding="0">';
   $html.='            <thead>';
   $html.='                 <tr>';
   $html.='                    <th>Date</th>';
   $html.='                    <th class="text-left">Details</th>';
   $html.='                    <th class="text-right">Withdrawn ($)</th>';
   $html.='                    <th class="text-right">Deposited ($)</th>';
   $html.='              <th class="text-right">Balance ($)</th>';
   $html.='               </tr>';
   $html.='            </thead>';

   while ($row = mysqli_fetch_array($result)) {
    
   $html.='            <tbody><tr><td class="no">'.$row['date'].'</td><td class="unit">'.$row['description'].'</td><td class="qty">'.$row['withdraw'].'</td> <td class="qty">'.$row['deposite'].'</td><td class="total">'.$row['deposite'].'</td>';
   }

  
   $html.='                </tr>';
             
   $html.='              </tbody>';

   $html.='            <tfoot>';
   $html.='                  <tr>';
   $html.='                   <td colspan="2"></td>';
   $html.='                    <td colspan="2">SUBTOTAL</td>';
   $html.='                    <td>$5,200.00</td>';
   $html.='                </tr>';
   $html.='               <tr>';
   $html.='                    <td colspan="2"></td>';
   $html.='                    <td colspan="2">TAX 25%</td>';
   $html.='                    <td>$1,300.00</td>';
   $html.='                </tr>';
   $html.='             <tr>';
   $html.='                 <td colspan="2"></td>';
   $html.='                   <td colspan="2">GRAND TOTAL</td>';
   $html.='                     <td>$6,500.00</td>';
   $html.='                 </tr>';
   $html.='             </tfoot>';
   $html.='         </table>';
   $html.='        <div class="thanks">Thank you!</div>';
   $html.='          <div class="notices">';
   $html.='              <div>NOTICE:</div>';
   $html.='             <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>';
   $html.='        </div>';
   $html.='     </main>';
   $html.='     <footer>';
   $html.='         Invoice was created on a computer and is valid without the signature and seal.';
   $html.='     </footer>';
   $html.=' </div>';

   $html.=' <div></div>';
   $html.=' </div>';
   $html.=' </div>';
   $html.=' </body>';
   $html.=' </html>


';
}else{
    $html.='data not found';
}


;
$mpdf = new \Mpdf\Mpdf();
$mpdf->setTitle("Bank Statement");
$mpdf->WriteHTML($html
    

    
    





);
$mpdf->Output();

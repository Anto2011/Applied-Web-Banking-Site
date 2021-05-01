<?php 
$page= "Users";
require_once "header.php";
?>

            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="media margin-bottom-30">
                <div class="media-left padding-right-25">
                  <a href="#">
                    <img class="media-object img-circle templatemo-img-bordered" src="images/person.jpg" alt="Sunset">
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text">Username</h2>
                  <p>Account No.</p>
                </div>        
              </div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td><div class="circle green-bg"></div></td>
                      <td>Completed Transactions</td>
                      <td>02</td>                    
                    </tr> 
                    <tr>
                      <td><div class="circle pink-bg"></div></td>
                      <td>Failed Transactions</td>
                      <td>22</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle blue-bg"></div></td>
                      <td>Savings Account Balance</td>
                      <td>$$$$</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle yellow-bg"></div></td>
                      <td>Checkings Account Balance</td>
                      <td>$$$$</td>                    
                    </tr>                                      
                  </tbody>
                </table>
              </div>             
            </div>

            <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Administrative Transactions</h2>
            <p>Make administrative transactions with verification from account owner.</p>
            <form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="selectDebit">Select A Debit Account</label>
                    <select name="user-account" class="form-control" id="selectDebit">
                    <option value="selection">--- Please select ---</option>
                        <option value="savings">Savings</option>
                        <option value="checkings">Checkings</option>
                        <option value="deposit">Deposit</option>
                        <option value="loans">Loans</option>
                    </select>             
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                <label for="selectCredit">Select A Credit Account</label>
                    <select name="user-account" class="form-control" id="selectCredit">
                    <option value="selection">--- Please select ---</option>
                        <option value="savings">Savings</option>
                        <option value="checkings">Checkings</option>
                        <option value="deposit">Deposit</option>
                        <option value="loans">Loans</option>
                    </select>                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputAccountNo">Account No.</label>
                    <input type="number" class="form-control highlight" id="inputAccountNo" placeholder="Account No.">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputAmount">Transaction Amount</label>
                    <input type="number" class="form-control" id="inputAmount" placeholder="Amount">                  
                </div> 
              </div>
              <div class="row form-group">
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Complete Transaction</button>
                <button type="reset" class="templatemo-white-button">Clear All Fields</button>
              </div>                           
            </form>
          </div>
            <br><br><br><br><br><br>
<?php 
require_once "footer.php";
?>
<?php 
$page= "Manage-Users";
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
                      <td>####</td>                    
                    </tr> 
                    <tr>
                      <td><div class="circle pink-bg"></div></td>
                      <td>Failed Transactions</td>
                      <td>####</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle blue-bg"></div></td>
                      <td>Pending Transactions</td>
                      <td>####</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle yellow-bg"></div></td>
                      <td>Account Balance</td>
                      <td>####</td>                    
                    </tr>                                      
                  </tbody>
                </table>
              </div>             
            </div>

            <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Personal Information</h2>
            <p>Personal information about selected user and their account details.</p>
            <form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputDOB">Date Of Birth</label>
                    <input type="date" class="form-control" id="inputDOB" placeholder="Date Of Birth">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputPhone1">Phone No. 1</label>
                    <input type="number" class="form-control" id="inputPhone1" placeholder="Phone No.">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputPhone2">Phone No. 2</label>
                    <input type="number" class="form-control" id="inputPhone2" placeholder="Phone No.">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputAddress1">Address Line 1</label>
                    <input type="text" class="form-control" id="inputAddress1" placeholder="Address">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputAddress2">Address Line 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address">                  
                </div> 
              </div>
              <div class="row form-group">
              <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Notifications</label>
                    <textarea class="form-control" id="inputNote" rows="3"></textarea>
                </div>
              </div>
              <div class="row form-group">
              </div>
              <div class="form-group text-right">
                <div class="templatemo-white-action">
                  <button type="reset" class="templatemo-white-button">Reset Password</button>
                </div>
                <div class="templatemo-white-action">
                <button type="submit" class="templatemo-white-button">Disable Account</button>
                </div>
                <button type="submit" class="templatemo-blue-button">Update Information</button>
              </div>                           
            </form>
          </div>

        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Transaction History</h2>
            <p>Selected user's transaction history.</p>
            
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">Account No. <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Debit Account <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Credit Account <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Amount <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Type <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Method <span class="caret"></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Status <span class="caret"></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Date <span class="caret"></a></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>John</td>
                    <td>Smith</td>
                    <td>$$$$$</td>
                    <td>Deposit</td>
                    <td>Check</td>
                    <td>Pending</td>
                    <td>Jan 15</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Bill</td>
                    <td>Jones</td>
                    <td>$$$$$</td>
                    <td>Deposit</td>
                    <td>Check</td>
                    <td>Pending</td>
                    <td>Jan 22</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mary</td>
                    <td>James</td>
                    <td>$$$$$</td>
                    <td>Deposit</td>
                    <td>Check</td>
                    <td>Pending</td>
                    <td>Feb 03</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Steve</td>
                    <td>Bride</td>
                    <td>$$$$$</td>
                    <td>Deposit</td>
                    <td>Check</td>
                    <td>Cancelled</td>
                    <td>Feb 22</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Paul</td>
                    <td>Richard</td>
                    <td>$$$$$</td>
                    <td>Deposit</td>
                    <td>Check</td>
                    <td>Confirmed</td>
                    <td>Feb 27</td>
                  </tr>  
                   <tr>
                    <td>6.</td>
                    <td>Will</td>
                    <td>Brad</td>
                    <td>$$$$$</td>
                    <td>Withdrawal</td>
                    <td>Wire</td>
                    <td>Confirmed</td>
                    <td>March 1</td>
                  </tr>  
                   <tr>
                    <td>7.</td>
                    <td>Steven</td>
                    <td>Eric</td>
                    <td>$$$$$</td>
                    <td>Withdrawal</td>
                    <td>Wire</td>
                    <td>Confirmed</td>
                    <td>March 11</td>
                  </tr>  
                   <tr>
                    <td>8.</td>
                    <td>Landi</td>
                    <td>Susan</td>
                    <td>$$$$$</td>
                    <td>Withdrawal</td>
                    <td>Wire</td>
                    <td>Confirmed</td>
                    <td>March 12</td>
                  </tr>                    
                </tbody>
              </table>    
            </div>                      
        </div>

<?php 
require_once "footer.php";
?>
<?php 
$page= "Edit-Admins";
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
                  <h2 class="media-heading text-uppercase blue-text">Full Name</h2>
                  <p>Username</p>
                </div>        
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
            <h2 class="margin-bottom-10">Profile History</h2>
            <p>Selected admin's profile history.</p>
            
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">No. <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">First Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Last Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Username <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Action <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Status <span class="caret"></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Date <span class="caret"></a></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>John</td>
                    <td>Smith</td>
                    <td>J-Smith</td>
                    <td>Deposit</td>
                    <td>Pending</td>
                    <td>Jan 15</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Bill</td>
                    <td>Jones</td>
                    <td>Bill-Jones</td>
                    <td>Deposit</td>
                    <td>Pending</td>
                    <td>Jan 22</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mary</td>
                    <td>James</td>
                    <td>Mary-James</td>
                    <td>Deposit</td>
                    <td>Pending</td>
                    <td>Feb 03</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Steve</td>
                    <td>Bride</td>
                    <td>Steve-Bride</td>
                    <td>Deposit</td>
                    <td>Cancelled</td>
                    <td>Feb 22</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Paul</td>
                    <td>Richard</td>
                    <td>Rich-P</td>
                    <td>Deposit</td>
                    <td>Confirmed</td>
                    <td>Feb 27</td>
                  </tr>  
                   <tr>
                    <td>6.</td>
                    <td>Will</td>
                    <td>Brad</td>
                    <td>Willy-B</td>
                    <td>Withdrawal</td>
                    <td>Confirmed</td>
                    <td>March 1</td>
                  </tr>  
                   <tr>
                    <td>7.</td>
                    <td>Steven</td>
                    <td>Eric</td>
                    <td>Stevie</td>
                    <td>Withdrawal</td>
                    <td>Confirmed</td>
                    <td>March 11</td>
                  </tr>  
                   <tr>
                    <td>8.</td>
                    <td>Landi</td>
                    <td>Susan</td>
                    <td>S-Landi</td>
                    <td>Withdrawal</td>
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
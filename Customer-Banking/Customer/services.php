<?php
$title= "Services";
$page= "Services";
 require_once "includes/header.php";
?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Services</h1>
            <span>We are over 20 years of experience</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Bank <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Loans and Financing<i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Investing and Insurance<i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Merchant Services <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/bank.jpg" alt="">
                <h4>Bank</h4>
                <p>Our banking facilities includes: Chequing Account, Savings Plans, Value Plans, Account Opening Requirements,Business Deposit Processing (Dropbox/Smart Safe),Corporate Banking,Treasury & Correspondent Banking, Online Banking Demos
                <br><br>OutKast Internet Banking Services, you will experience the ease and convenience of banking anytime and from anywhere in the world where Internet access is available. You get:

<br><br><b>Convenience</b>
You are able to bank conviently because you can bank on your time:
See your entire relationship wit the OutKast Group
See account and credit card information when you need it.  You have 24-hour access to a clear accurate picture of your finances<br><br>
<b>Control</b>
OutKast e-Financial Services gives you a higher degree of control over your money:
Access your financial information at any time.
Deliver instructions to the Bank from the comfort of your home, office or even when travelling overseas.
Keep track of your finances in a timely manner<br><br>


<b>Security</b>
NCB e-Financial Services provide a safe environment for handling electronic transactions.  You will:

Experience controlled user access with personal user IDs and passwords
Have your data/information encrypted during transaction using the highest level security encryption commercially available.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/loan_finance.jpg" alt="">
                <h4>Loans and Financing</h4>
                <p> -SME Development Loan Fund<br>
-Unsecured Loans<br>
-Secured Loans<br>
-Auto Loans
                <br><br>Though condition may apply for these offers, <b>Motor Vehicle Loan</b><br></br>
Our Business Bankers are ready to help you increase your mobility with an OutKast ommercial Vehicle Loan at a competitive rate with flexible repayment options. The following benefits are also available:<br>

-Access up to 90% financing on new and used vehicles with flexible financing.<br>
 -Get up to 6 1/2 years to repay.</br>
 -Pay no principal for 3 months.<br>

Our Business Bankers are ready to help JUTA and JCAL members to acquire motor vehicles for use in the tourism business or to repair existing vehicles owned. The following benefits are also available:<br>

-Access up to 85% financing on new and used vehicles with flexible financing.<br>
-Get up to 7 years to repay.<br>

 -No penalty for early repayment.
</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Investing and Insurance</h4>
                <p>We offer: <br>Investment Options, Investment Banking, Advice & Planning, Research
                <br><br><b>SMART Retirement Plan</b><br>
Most expenses continue long after you retire. It is estimated that you will require 85% of your final salary to maintain a similar lifestyle during retirement<br><b>Employee Care </b><br>Annuity
You may purchase an annuity contract using the member account value from your superannuation fund or retirement scheme. When you are ready to receive your retirement benefit</p>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>Merchant Services </h4>
                <p>Merchant Product Guide,
Point of Sale (POS),
eCommerce,
PaySmart,
Become A Merchant,
Merchant Security,
Merchant Newslink

              </p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form callback-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Report a Service Issue </h2>
              <span>You are a priority to us. Your concerns, our interest</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Report</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
<br>
<br>

    <!-- Footer Starts Here -->
    <?php require_once "includes/footer.php" ;?>
<?php
$title= "Contact Us";
$page= "Contact";
 require_once "includes/header.php";
?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
            <span>feel free to send us a message now!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Speak to one of our agents now</p>
              <a href="#">1-876-KAST</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>Greg Park Portmore<br>St. Catherine</p>
              <a href="https://goo.gl/maps/VemU8RJGiyjUTmaa8">View on Google Maps</a>
            </div>
          </div>
        
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Make use of or email address</p>
              <a href="#">outkast@banking.com</a>
            </div>
          </div>
          </div>
      </div>
    </div>
     

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a message</h2>
   
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
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
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15178.618845030376!2d-76.89483417956221!3d17.994794511651367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb14da5a26d65d%3A0x790b7948f44d6876!2sGregory%20Park%2C%20Portmore!5e0!3m2!1sen!2sjm!4v1615695523637!5m2!1sen!2sjm" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15178.618845030376!2d-76.89483417956221!3d17.994794511651367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb14da5a26d65d%3A0x790b7948f44d6876!2sGregory%20Park%2C%20Portmore!5e0!3m2!1sen!2sjm!4v1615695523637!5m2!1sen!2sjm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
    <div class="partners contact-partners">
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
    </div>


    <!-- Footer Starts Here -->
    <?php require_once "includes/footer.php" ;?>
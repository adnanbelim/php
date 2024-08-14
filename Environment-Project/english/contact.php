<?php include('header.php') ?>

	<!-- full Title -->
  <div class="full-title" style="background-image: url('images/contact-bg.jpg'); no-repeat; center;">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Contact
				<!-- <small>Subheading</small> -->
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html" title="this is home page link">Home</a>
				</li>
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</div>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14314.23314476153!2d72.9392557!3d26.2435383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418fc23985c7d5%3A0x52e245c00d8e71d7!2sWeb%20Farm%20House!5e0!3m2!1sen!2sin!4v1704346039499!5m2!1sen!2sin" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 contact-right">
          <h3>Contact Details</h3>
          <p>
          Maa Vaishno Vihar, 163-A,
            <br>Chaukhan, Rajasthan 342008
            <br>
          </p>
          <p>
            <abbr title="Phone">Phone</abbr>: +91-7300306373
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="info@webfarmhouse.com" title="this is our comopany's website email"> info@webfarmhouse.com
            </a>
          </p>
          <p>
            <abbr title="Hours">Website</abbr>: <a href="https://webfarmhouse.com/" title="this is our company's website">Web Farm House</a>
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer starts from here-->
   
    <?php include('footer.php'); ?>
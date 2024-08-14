<?php 

include('header.php');

if(isset($_POST['fullname'])){


    $to = 'nayeemj7@gmail.com';
    
    $from ='nayeemj7@gmail.com';
    
    $subject = 'Inqery From Website';
    
    $message ='';
    

    $message .= "<table><tr><td>Name</td><td>".$_POST['fullname']."</td></tr>
    <tr><td>Branch</td><td>".$_POST['branch']."</td></tr>
    <tr><td>email</td><td>".$_POST['email']."</td></tr>
    <tr><td>Messege</td><td>".$_POST['textmsg']."</td></tr></table>";

$headers  = "From: " . $to . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "CC: belimadnan111@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$headers .= "<table><tr><td>Name</td><td>".$_POST['fullname']."</td></tr>
<tr><td>Branch</td><td>".$_POST['branch']."</td></tr>
<tr><td>email</td><td>".$_POST['email']."</td></tr>
<tr><td>Messege</td><td>".$_POST['textmsg']."</td></tr></table>";


    mail($to, $subject, $message, $headers, [$parameters]);
}
    ?>




<section class="head">
    <div class="cnt-img" style="background-image: url('img/img16.avif');">
		<div class="cnt-text">
			<h5 class="cnt-head">Contact</h5>
		</div>
    </div>
</section>

<section id="form">
    <div class="contact">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14314.23314476153!2d72.9392557!3d26.2435383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418fc23985c7d5%3A0x52e245c00d8e71d7!2sWeb%20Farm%20House!5e0!3m2!1sen!2sin!4v1704346039499!5m2!1sen!2sin" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        
        <div class="contact-det">
          <h3 class="form-text">Contact Details</h3>
          <p class="contact-para">Maa Vaishno Vihar, 163-A, Chaukhan, Rajasthan 342008</p>
          <p class="contact-ph"><i class="fa-solid fa-envelope"></i> +91-7300306373</p>
          <p class="contact-ph"><i class="fa-solid fa-phone"></i> info@webfarmhouse.com</p> 
          <p class="contact-ph"><i class="fa-solid fa-location-dot"></i> Web Farm House</p>
        </div> 
    </div>      
   
    <div class="contact-form">
        <div class="form">
        <h3 class="msg-head">Send us a Message</h3>
        <form name="sentmessage" method='get' id="contactForm" novalidate>
            <div class="form-group">
                <div class="controls">
                    <label class="label">Full Name:</label>
                    <input name='fullname' type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="label">Email Address:</label>
                    <input name='email' type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>

            <div class="dropdown form-group">
            <label class="label">Select Branch :</label>
                <select name='branch'  class="select">
                
                    <label for="Select Branch"></label>
                    <option value="Chokha">Web Farm House, Chokha</option>
                    <option value="kamla">Web Farm House, KNN</option>
                </select>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="label">Enquiry:</label>
                    <textarea name='textmsg' rows="8" cols="60" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success">
                <button type="submit" class="btn btn-primary button-5" id="sendMessageButton" role="button">Send Message</button>
            </div>
        </form>


        </div>
    </div>
</section>

   
    <?php include('footer.php'); ?>
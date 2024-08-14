<?php

include('./admin/connection.php');

// if (isset($_REQUEST['send'])) {
//     $send_maiId = $_REQUEST['email '];

//     $to = $send_maiId;
//     $user_message = $_REQUEST['message'];
//     $phone = $_REQUEST['phone'];
//     $subject = "BlueCity Cafe: Enquiry";

//     $message = "
// <html>
// <head>
// <title>Cafe Management </title>
// </head>
// <body>
// <div style=' border:1px solid black; width:80%; height:250px; background-color: gray; border-radius: 10px; box-shadow: 1px 1px 4px black , -2px -2px 1px red; display:block; margin:auto;'>
//     <h4 style='Color:white; text-align:center'>Enquiry Form!!</h4>

//   <h1 style='Color:white; text-shadow:2px 2px 21px black; text-align:center'>BlueCity Cafe</h1>
//   <div style='width:80%; margin:auto; line-height:25px'>
//       <p style='text-align:center; color:white'>A café setting is known as a casual social environment where you can find people reading newspapers and magazines, playing board games, studying or chatting with others about current events. It is also regarded as a place where information can be exchanged.
//         </p>


//   </div>


// </div>
// </body>
// </html>
// ".$_REQUEST['message'];

//     // Always set content-type when sending HTML email
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // More headers
//     $headers .= 'From: <belimadnan111@gmail.com>' . "\r\n";
//     $headers .= 'Cc: tunwarsohail12@gmail.com' . "\r\n";

//     mail($to, $subject, $message, $headers);

// }

include ('header.php');

?>

<div class="container mt-5 mb-3">

    <!-- section part start-->
    <div class="row mb-5">
        <div class="col-12">
            <div class=" container text-center fw-bolder">
                <h2 class="text-capitalize">Contact</h2>
                <hr class="w-25 mx-auto mb-5">
            </div>


            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <form method="post" action="https://formspree.io/f/mvgppdez">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone </label>
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Phone (optional)" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"
                                    placeholder="Write a message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-5 bg-btn" name="send">Send</button>
                        </form>
                    </div>
                    <div class="col-md-6">

                        <h2 class="mb-5 brown1">Address
                            <hr>
                        </h2>

                        <p class=" text-dark text-capitalize mb-4"> <i class="fas fa-location me-3"></i>Kamla Nehru
                            Nagar,
                            First Extension, Jodhpur (Raj.)</p>

                        <p class="text-dark text-capitalize mb-4"><i class="fas fa-home me-3"></i>lucky institute of
                            professional
                            studies</p>

                        <p class="text-dark mb-4"><i class="fas fa-phone me-3"></i> +91-8696843043</p>
                        <p class="text-dark mb-4"><i class="fas fa-message me-3"></i> +91-9521919319</p>

                        <p class="text-dark mb-4">
                            <i class="fas fa-envelope me-3"></i>
                            belimadnan111@gmail.com
                        </p>

                        <img src="./assets/img/fevikon.png" alt="" class="size">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.2815055969063!2d72.98547747607931!3d26.284972686784258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e7e0d255cf3%3A0x5ac5174a1431e729!2sLucky%20Institute%20of%20Professional%20Studies!5e0!3m2!1sen!2sin!4v1717408710164!5m2!1sen!2sin"
                            width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- section part end-->
</div>

<?php include ('footer.php'); ?>
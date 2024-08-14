<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <meta name="author" content="Web Farm House">
    <meta name="description" content="Web Farm House is a full service web design &amp; development, digital marketing, google services, social media agency, located in heart of Jodhpur. We serve quality work." />
    <link rel="canonical" href="https://www.webfarmhouse.com/" />
    <meta property="og:image" content="img/slide1.jpg" />
    <meta property="og:locale" content="en_GB" />
	  <meta property="og:type" content="website" />
	  <meta property="og:title" content="Web Farm House Jodhpur" />
  	<meta property="og:locale" content="en_GB" />
	  <meta property="og:type" content="website" />
	  <meta property="og:title" content="Web Farm House Jodhpur" />
	  <meta property="og:description" content="Web Farm House is a full service web design &amp; development, digital marketing, google services, social media agency, located in heart of Jodhpur. We serve quality work." />
	  <meta property="og:url" content="https://www.webfarmhouse.com/" />
	  <meta property="article:publisher" content="https://facebook.com/webfarmhouse" />
	  <meta property="article:modified_time" content="2023-12-08T13:39:13+00:00" />
    <meta name="twitter:card" content="summary_large_image" />


    <title>Web Farm House Jodhpur</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" >

    <!-- Style -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- JQuery CDN  -->
    <script src="js1/jquery.min.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
<?php
    $site_url='';
    $img_url='';
    ?>
</head>
<body>
  <header>
  <section class="navigation0">
    <div class="nav-container1">
      <div class="contact-detailes">
        <a href="tel:+91-7300306373"><i class="fa-solid fa-phone"></i> +91-7300306373</a>
        <a href="mailto: info@webfarmhouse.com"><i class="fa-solid fa-envelope"></i>  info@webfarmhouse.com</a>
      </div>
    </div>
  </section>
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#"><span></span></a></div>

            <?php $page_name = basename($_SERVER['PHP_SELF']); ?> 

            <ul class="nav-list">
              <li>
                <a href="index.php" class=" <?php if($page_name == 'index.php') {echo 'active';} ?>">Home</a>
              </li>
              <li>
                <a href="web-design.php" class=" <?php if($page_name == 'web-design.php') {echo 'active';} ?>">Creative Web Design</a>
              </li>
              <li>
                <a href="digital-marketing.php"  class=" <?php if($page_name == 'digital-marketing.php') {echo 'active';} ?>">Digital Marketing</a>
              </li>
              <li>
                <a href="Web-development.php" class=" <?php if($page_name == 'Web-development.php') {echo 'active';} ?>">Web Development</a>
              </li>
              <li>
                <a href="seo.php" class=" <?php if($page_name == 'seo.php') {echo 'active';} ?>">SEO</a>
              </li>
              <li>
                <a href="google-services.php" class=" <?php if($page_name == 'google-services.php') {echo 'active';} ?>">google services</a>
              </li>

              <li>
                <a href="#!">Blog</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="blockchain.php" class=" <?php if($page_name == 'blockchain.php') {echo 'active';} ?>">Blockchain Future</a>
                  </li>
                  <li>
                    <a href="artificial.php" class=" <?php if($page_name == 'artificial.php') {echo 'active';} ?>">Artificial Intelligence</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="contact-us.php" class=" <?php if($page_name == 'contact-us.php') {echo 'active';} ?>">Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </header>
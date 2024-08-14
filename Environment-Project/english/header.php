<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="description" content="Bharat Environment Conservation Is Maintain By Web Farm House, Jodhpur. This website is developed for public awareness.Clean Air, Clean Water And Clean Soils">
  <meta name="keywords" content="Bharat Environment Conservation, India Environment, Jodhpur Environment, Web Farm House">
  <meta name="author" content="Web Farm House">
  <meta name="viewport" content="http://www.environmentconservation.in">
  <meta name="publisher" content="Web Farm House"> 
  <meta name="robots" content="follow">


	<title>Bharat Environment Conservation</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
   <!-- Index CSS -->
   <link href="css/index.css" rel="stylesheet">
   <!-- Dropdown -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="vendor\bootstrap\css\stackpath.min.css">
   <!-- googlefont -->
   <!-- <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Tangerine"> -->
   <link rel="stylesheet" href="webfonts\googlefont.ttf">


 
</head>
<body> 
    <!-- Navigation -->

    <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php" title="its a index page of our website">
               <h3 class="logo"><span style="color:#FF5733">Bharat </span> <span style="color:#00308F">Environment </span>
                <span style="color:#006400">Conservation</span>
                  
               </h3>
            </a>

            <button class="navbar-toggler navbar-toggler-right text-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>

          <?php $page_name = basename($_SERVER['PHP_SELF']); ?> 


            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link <?php if($page_name == 'index.php') {echo 'active';} ?>"  href="index.php" title="its a index page of our website">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle <?php if($page_name == 'blog.php') {echo 'active';} ?>" href="blog.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="this is a blog section of our website. you see there different types of blog about environment.">
                     Blog
                     </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item <?php if($page_name == 'growing-plants.php') {echo 'active';} ?>" href="growing-plants.php" title="growing plants around us">Growing plants Around Us</a>
                        <a class="dropdown-item <?php if($page_name == 'water-safety.php') {echo 'active';} ?>" href="water-safety.php" title="underground water safety">Underground Water Safety</a>
                        <a class="dropdown-item <?php if($page_name == 'cng-services.php') {echo 'active';} ?>" href="cng-services.php" title="services using CNG/Electrical vehicles">Services using CNG/Electrical vehicles</a>
                        <a class="dropdown-item <?php if($page_name == 'burn-garbage.php') {echo 'active';} ?>" href="burn-garbage.php" title="dont burn garbage">Don't Burn Garbage</a>
                        <a class="dropdown-item <?php if($page_name == 'ai-blockchain.php') {echo 'active';} ?>" href="ai-blockchain.php" title="ai with blockchain">AI with Blockchain</a>
                        <a class="dropdown-item <?php if($page_name == 'ai-environment.php') {echo 'active';} ?>" href="ai-environment.php" title="ai with environment & medical">AI with Environment & Medical</a>
                        <a class="dropdown-item <?php if($page_name == 'capture-pic.php') {echo 'active';} ?>" href="capture-pic.php" title="reporting traffic offenses fir a safer community">Reporting Traffic Offenses for a Safer Community</a>
                       

                     </div>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link <?php if($page_name == 'about.php') {echo 'active';} ?>" href="about.php" title="this is about section of our website.">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php if($page_name == 'contact.php') {echo 'active';} ?>" href="contact.php" title="this is contact section of our website">Contact</a>
                  </li>
               </ul>
            </div>
            <span class="language">
               <a href="index.php">ENGLISH</a>/<a href="../index.php" title="for change language to hindi">HINDI</a>
            </span>
        </div>
    </nav>
	  
<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->

</header>
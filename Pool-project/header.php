<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gulshan Kamil Technical Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="pool Service">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/fevicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">




</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href=""><small class="me-3 text-dark"><i class="fa fa-map-marker" aria-hidden="true"></i> 192086 - Al Satwa - Dubai - United Arab Emirates</small></a>
                </div>
            </div>
            <div class="col-lg-8 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="tel:+97142677202"><small class="me-3 text-dark"><i class="fa fa-phone" aria-hidden="true"></i> +971 42677202, +971 555956018</small></a>
                    <a href="mailto: gulshan0121@gmail.com"><small class="text-dark"><i class="fa fa-envelope-open me-2"></i> gulshan0121@gmail.com</small></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src="images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <?php
                $page_name = basename($_SERVER['PHP_SELF']);
            ?>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?php if($page_name == 'index.php'){echo 'active';} ?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php if($page_name == 'about.php'){echo 'active';} ?>">About</a>
                    <a href="service.php" class="nav-item nav-link <?php if($page_name == 'service.php') {echo 'active';} ?>">Services</a>
                    <a href="project.php" class="nav-item nav-link <?php if($page_name == 'project.php') {echo 'active';} ?>">Project</a>
                    <a href="contact.php" class="nav-item nav-link <?php if($page_name == 'contact.php') {echo 'active';} ?>">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>




</body>
</html>
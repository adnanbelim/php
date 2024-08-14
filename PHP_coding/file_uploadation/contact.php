<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <!-- navbar start-->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Products/Blogs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end-->

        <!-- slider part start-->
        <div class="row bg-about mt-3 mb-3">
            <h2 class="text-center pt-5 text-light">Contact us page</h2>
        </div>
        <!-- slider part end-->

    </div>

    <div class="container mt-5">

        <!-- section part start-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="row pb-3 pt-3">
                    <h2 class="text-center text-dark">Contact us</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.2815055969063!2d72.98547747607931!3d26.284972686784258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e7e0d255cf3%3A0x5ac5174a1431e729!2sLucky%20Institute%20of%20Professional%20Studies!5e0!3m2!1sen!2sin!4v1717408710164!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jhone doe">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- section part end-->
    </div>



    <!-- footer part start -->
    <div class="container-fluid">
        <div class="row height-10 bg-dark pt-5">
            <p class="text-center text-light">All rights reserved</p>
        </div>
    </div>
    <!-- footer part start -->


</body>


</html>
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
        <div class="row mt-3 mb-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/11.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/22.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/11.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- slider part end-->

    </div>

    <div class="container mt-5">

        <!-- section part start-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="row pb-3 pt-3">
                    <h2 class="text-center text-dark">Latest Blog /Products/ Services / Wallpapers</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/products/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/products/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/products/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/products/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
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
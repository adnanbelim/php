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
            <h2 class="text-center pt-5 text-light">About us page</h2>
        </div>
        <!-- slider part end-->

    </div>

    <div class="container mt-5">

        <!-- section part start-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="row pb-3 pt-3">
                    <h2 class="text-center text-dark">About us</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <h3>Description</h3>
                            <p class="text-start">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <p class="text-start">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <img src="assets/images/1.jpg" class="img-thumbnail img-fluid"/>
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
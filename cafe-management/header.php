<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="BlueCity Cafe is a beautiful area to enjoy coffee, shakes, and mocktails at our charming cafe. Savor every sip and treat your taste buds to a memorable experience.">
    <meta name="keywords"
        content="coffee shops,coffee shops near me, espresso near me, best coffee near me, coffee bar">
    <meta name="author" content="LIPS">


    <meta name="robots" content="follow">



    <title>BlueCity Cafe Management</title>
    <link rel="canonical" href="http://localhost/cafe-management-adnan/index/">

    <link rel="shortcut icon" href="./assets/img/fevikon.png" type="image/x-icon">
    <!-- local css -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Aos Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- data table -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg  shadow">
        <div class="container ">
            <a class="navbar-brand text-light fw-bolder" href="./index.php">BlueCity Cafe</a>
            <button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  btn-outline-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php $page_name = basename($_SERVER['PHP_SELF']); ?>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link  fw-bolder px-1 <?php if ($page_name == 'index.php') {
                            echo 'active';
                        } ?>" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link fw-bolder px-1" href="#our-cafe">About Us</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['user_data']) || isset($_SESSION['admin_data'])) {
                            ?>
                            <a class="nav-link  fw-bolder px-1 <?php if ($page_name == 'coffee.php') {
                                echo 'active';
                            } ?>" href="coffee.php">Products</a>
                        <?php } else { ?>
                            <a class="nav-link fw-bolder px-1" href="login.php">Products</a>
                        <?php } ?>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bolder px-1 <?php if ($page_name == 'contact.php') {
                            echo 'active';
                        } ?>"
                            href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item d-flex">
                        <?php if (isset($_SESSION['user_data'])) { ?>

                            <a class="nav-link px-1" href="./admin/logout.php" data-bs-toggle="tooltip"
                                data-bs-title="logout">
                                <i class="fa-solid fa-right-to-bracket text-light fw-bolder"></i>
                            </a>

                        <?php } elseif (isset($_SESSION['admin_data'])) { ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-light fw-bolder px-1 dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu text-center">
                                <li><a class="nav-link fw-bolder px-1" href="./admin/login-details.php">login_details</a>
                                </li>

                                <li><a class="nav-link px-1 " href="./admin/logout.php" data-bs-toggle="tooltip"
                                        data-bs-title="logout">
                                        <i class="fa-solid fa-right-to-bracket fw-bolder"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } else { ?>

                        <a class="nav-link px-1" href="./login.php" data-bs-toggle="tooltip" data-bs-title="login">
                            <i class="fa-solid fa-user text-light fw-bolder"></i>
                        </a>

                    <?php } ?>
                    </li>
                    <li class="nav-item">


                    </li>
                </ul>

            </div>
        </div>
    </nav>
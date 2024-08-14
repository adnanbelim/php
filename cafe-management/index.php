<?php

include ('./admin/connection.php');

include ('header.php');

?>


<section class="main-bg ">
    <!-- Main Section  -->
    <div class="container">
        <div class="row text-capitalize">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center">
                <h1 class="fw-bolder text-light mt-5" data-aos="fade-right">
                     <?php if (isset($_SESSION['user_data'])) { echo 'Welcome, '.$_SESSION['user_data']['name'].' in' ?> The BlueCity Cafe
                    <?php } elseif(isset($_SESSION['admin_data'])) {
                         echo 'Welcome, ' . $_SESSION['admin_data']['name'] . ' in' ?> The BlueCity Cafe
                    <?php } else { ?> The BlueCity Cafe <?php } ?>
                </h1>
                <h6 class="text-light-grey mt-3 text-light lh-lg lh-base" data-aos="fade-right">Coffee shops are
                    well known as a place where you can get any types of coffee and related coffee beverages any
                    time you want and need. Many coffee houses nowadays are serving also some food, snacks and
                    desserts. Some of coffee shops turned into huge business and large companies like <mark
                        class="brown">
                        BlueCity Cafe.</mark>
                </h6>
                <div class=" text-md-start w-100">
                    <a href="./contact.php">
                    <button type="button" class="btn btn-outline-light px-5 py-2 fw-bolder button"
                        data-bs-toggle="tooltip" data-bs-title="Contact Us" data-aos="fade-right">contact
                        us</button></a>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="text-center text-lg-end">
                    <img src="./assets/img/main-image.png" alt="" class="pixcap" data-aos="fade-left">
                </div>

            </div>
        </div>
    </div>

    <div class="custom-shape-divider-bottom-1717069411">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>

    <a href="#top" class="up-arrow">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

</section>

<!-- Main Section Close -->
<!-- Our Cafe Section -->

<div class="container m-10 zindex m-11" id="our-cafe">
    <h1 class="text-center mb-5" data-aos="fade-down">OUR CAFE
        <hr class="w-25 mx-auto">
    </h1>
    <p class=" w-75 mx-auto text-center" data-aos="fade-up">A cup of joe in the morning is like waking up to an
        angel’s voice
        There are few things better than waking up with a hot, steaming cup of Joe by your side
        “Coffee is a necessity, not a luxury.”</p>

    <div class="row m-5 g-5 d-flex justify-content-center">


        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-12  m-3 text-center">
            <img src="./assets/img/cafe-3.webp" alt="" class=" cafe-img" data-aos="fade-down-right">
        </div>

        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 g-1 col-md-12  m-3">
            <div class="row mb-5 d-md-none d-lg-block d-sm-none"><img src="./assets//img/cafe-1.webp" alt=""
                    class=" cafe-img1" data-aos="flip-up"></div>
            <div class="row d-md-none d-lg-block d-sm-none"><img src="./assets/img/cafe-2.webp" alt=""
                    class=" cafe-img1" data-aos="flip-down"></div>
        </div>

        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-12  m-3 text-center">
            <img src="./assets/img/cafe-4.webp" alt="" class=" cafe-img" data-aos="fade-down-left">
        </div>

    </div>
</div>

<!-- Our Cafe Close -->


<!-- Variety Section -->

<section class="container mt-5 mb-5 zindex cafe-bg">
    <div class=" container text-center fw-bolder">
        <h2 class="text-capitalize mt-5 text-light" data-aos="fade-down">What serve will <br> we do for you</h2>
        <hr class="w-25 mx-auto text-light">
    </div>

    <div class="container ">
        <div class="row">

            <div class="col-12 col-xs-12 col-sm-12 col-lg-4 col-md-12 mt-3 mb-3  text-center Variety-section">
                <img src="./assets/img/card-coffee-1.jpg" alt="  link"
                    class=" border border-3 rounded-4 shadow mb-3 w-75 variety-img" data-aos="zoom-in-up">

                <div class="d-flex justify-content-center align-items-center">
                    <?php if (isset($_SESSION['user_data'])){ ?>
                    <a href="./coffee.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                    <?php } elseif (isset($_SESSION['admin_data'])) { ?>
                        <a href="./coffee.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                        <?php } else {?>
                            <a href="./login.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-lg-4 col-md-12 mt-3 mb-3  text-center Variety-section">
                <img src="./assets/img/card-shake-1.jpg" alt="link  "
                    class=" border border-3 rounded-4 shadow mb-3 w-75 variety-img" data-aos="zoom-in-down">

                <div class="d-flex justify-content-center align-items-center">
                    <?php if (isset($_SESSION['user_data'])){ ?>
                    <a href="./coffee.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                    <?php } elseif (isset($_SESSION['admin_data'])) { ?>
                        <a href="./coffee.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                        <?php } else {?>
                            <a href="./login.php"
                        class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                        <button type="button"
                            class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-lg-4 col-md-12 mt-3 mb-3 text-center Variety-section ">
                <img src="./assets/img/card-mocktail-2.jpg" alt="link  "
                    class=" border border-3 rounded-4 shadow mb-3 w-75 variety-img" data-aos="zoom-in-up">

                <div class="d-flex justify-content-center align-items-center">
                    <?php if (isset($_SESSION['user_data'])) { ?>
                        <a href="./coffee.php" class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                        </a>
                    <?php } elseif (isset($_SESSION['admin_data'])) { ?>
                        <a href="./coffee.php" class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                        </a>
                    <?php } else { ?>
                        <a href="./login.php" class="icon-span rounded-circle d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-outline-primary button mt-5 btn-outline-light fw-bolder mb-5">View</button>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Card Section Close -->

<!-- Our Menu -->

<div class="container-fluid m-10 team">

    <div class="custom-shape-divider-top-1718443540">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>


    <h1 class="text-center mb-5 pt-5" data-aos="fade-down">OUR MENU
        <hr class="w-25 mx-auto">
    </h1>

    <div class="row pt-5 w-75 m-auto  m-auto">

        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <h2>Double Espresso</h2>
            <p>A double espresso, also known as a doppio, involves having two shots of espresso. It contains up to
                44 ml of liquid and is best consumed with no milk or hot water added to it. Stir, sip immediately,
                and enjoy it hot to get the best out of this coffee.</p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-1.jpg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Macchiato</h2>
            <p> Macchiato is similar to an espresso but with a dollop of steamed milk and foam to mellow the harsh
                taste of an espresso. You will find that baristas in different countries make short macchiatos
                differently. But the traditional way of making a short macchiato is as follows.</p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-2.jpg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>

    </div>

    <div class="row w-75 m-auto mt-3">
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-3.jpg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Espresso (Short Black)</h2>

            <p>The espresso (aka “short black”) is the foundation and the most important part to every espresso
                based drink. So much so that we’ve written a guide on how to make the perfect espresso shot. But for
                this post we are keeping it simple.</p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-4.webp" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Long Black (Americano)</h2>
            <p>An Americano is a popular espresso coffee drink made by adding hot water to a shot of espresso. This
                results in a coffee with a consistency similar to drip coffee but a uniquely different flavor
                profile.</p>
        </div>
    </div>

    <div class="row w-75 m-auto mt-3">
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <h2>Café Latte</h2>
            <p>A café latte, or “latte” for short, is an espresso based drink with steamed milk and micro-foam added
                to the coffee. This coffee is much sweeter compared to an espresso due to the steamed milk.</p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-5.jpeg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Mocha</h2>
            <p>A mocha is a mix between a cappuccino and a hot chocolate. It is made by putting mixing chocolate
                powder with an espresso shot and then adding steamed milk and micro-foam into the beverage. </p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-6.jpg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
    </div>

    <div class="row w-75 m-auto mt-3 py-10">
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-7.jpg" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Cappuccino</h2>
            <p>A cappuccino is similar to a latte. However the key difference between a latte and cappuccino is that
                a cappuccino has more foam and chocolate placed on top of the drink. Further a cappuccino is made in
                a cup rather than a tumbler glass. To make a decent cappuccino you need to follow the below steps.
            </p>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6">
            <img src="./assets/img/coffee-8.webp" class="cafe-img2" alt="" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="400">
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-sm-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Piccolo Latte</h2>
            <p>A piccolo latte is a café latte made in an espresso cup or small tumbler glass. This means it has a
                very strong but mellowed down espresso taste thanks to the steamed milk and micro foam within it.
                You can make a piccolo latte with either an espresso shot or a ristretto shot.</p>
        </div>
    </div>

    <div class="custom-shape-divider-bottom-1717069411">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>
</div>

<!-- Our Menu Close -->

<!-- Blogs Section -->

<div class="container  m-10 ">

    <h1 class="text-center mb-5" data-aos="fade-down">BLOGS
        <hr class="w-25 mx-auto">
    </h1>

    <div class="row d-flex justify-content-center pt-5 ">
        <div class="card mb-4 mx-3 p-2 rounded-3 border-3" style="width: 18rem;" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom">
            <video controls loop class="border-1 rounded-3">
                <source src="./assets/video/VID_352680618_002415_140.mp4" type="video/mp4">
            </video>
            <div class="card-body">
                <h5 class="card-title">India's Branch</h5>
            </div>
        </div>

        <div class="card mb-4 mx-3 p-2 rounded-3 border-3" style="width: 18rem;" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom">
            <video controls loop class="border-1 rounded-3">
                <source src="./assets/video/VID_352690418_105857_994.mp4" type="video/mp4">
            </video>
            <div class="card-body">
                <h5 class="card-title">UAE Branch</h5>
            </div>
        </div>

        <div class="card mb-4 mx-3 p-2 rounded-3 border-3" style="width: 18rem;" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom">
            <video controls loop class="border-1 rounded-3">
                <source src="./assets/video/VID_352710729_171848_279.mp4" type="video/mp4">
            </video>
            <div class="card-body">
                <h5 class="card-title">Egypt's Branch</h5>
            </div>
        </div>

    </div>

</div>

<!-- Blogs Section Close -->


<!-- Testimonial -->

<section class="team container-fluid mt-5 mb-5 pb-5">
    <div class="custom-shape-divider-top-1718472572">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>

<div class="container">
    <section class=" mb-5 pt-5">
        <div class="container common-title text-center fw-bolder">
            <h3 class="common-heading text-capitalize" data-aos="fade-down">Our Member</h3>
            <hr class="w-25 mx-auto">
        </div>

        <div id="carouselExampleCaptions" class="carousel slide text-center">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner container-fluid">
                <div class="carousel-item active">
                    <div class="row px-2 pb-5 pt-5">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 col-sm-6 col-xs-4 mx-auto shadow p-4 card rounded-5 border-3"
                            data-aos="flip-up">
                            <div class="card-body">
                                <h5 class="card-title">Mohammed Adnan Belim</h5>
                                <p class="card-text text-justify">Full Stack Developer <br> Languages : HTML5, CSS3, Git, Github, Bootstrap, Basic js,  PHP,  MySql. </p>
                                <div class="mt-3">
                                    <a href="whatsapp://send?abid=9521919319&text=Hello%2C%20World!"><img
                                            src="./assets/img/message.gif" alt="" class="gif"></a>
                                    <a href="tel:+91-9521919319"><img src="./assets/img/phone.gif" alt=""
                                            class="gif"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row px-2 pb-5 pt-5">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 col-sm-6 col-xs-4 mx-auto shadow p-4 card rounded-5 border-3">
                            <div class="card-body">
                                <h5 class="card-title">Sohail Tunwar</h5>
                               <p class="card-text text-justify">Full Stack Developer <br> Languages : HTML5, CSS3, Git, Github, Bootstrap, PHP,  MySql. </p>
                                <div class="mt-3">
                                    <a href="whatsapp://send?abid=9521919319&text=Hello%2C%20World!"><img
                                            src="./assets/img/message.gif" alt="" class="gif"></a>
                                    <a href="tel:+91-9521919319"><img src="./assets/img/phone.gif" alt=""
                                            class="gif"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row px-2 pb-5 pt-5">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-8 col-sm-6 col-xs-4 mx-auto shadow p-4 card rounded-5 border-3">
                            <div class="card-body">
                                <h5 class="card-title">Yojit Joshi</h5>
                                 <p class="card-text text-justify">Front-End Designer <br>Languages : HTML, CSS, Bootstrap.</p>
                                <div class="mt-3">
                                    <a href="whatsapp://send?abid=9521919319&text=Hello%2C%20World!"><img
                                            src="./assets/img/message.gif" alt="" class="gif"></a>
                                    <a href="tel:+91-9521919319"><img src="./assets/img/phone.gif" alt=""
                                            class="gif"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>

    <div class="custom-shape-divider-bottom-1718473066">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M649.97 0L550.03 0 599.91 54.12 649.97 0z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<section class="quick-link">
    <div class="container">
        <div class="row text-justify pb-5">
            <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-6 col-sm-12 mt-3">
                <img src="./assets/img/toast.gif" alt="" class="gif-link shadow  rounded-5" data-aos="fade-down">
                <h5 class="text-justify mt-5 text-uppercase" data-aos="fade-up">Enjoy Drinking</h5>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, illo.</p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-6 col-sm-12 mt-3">
                <img src="./assets/img/coffee-cup.gif" alt="" class="gif-link shadow  rounded-5" data-aos="fade-down">
                <h5 class="text-justify mt-5 text-uppercase" data-aos="fade-up">CUP OF COFFEES</h5>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, illo.</p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-6 col-sm-12 mt-3">
                <img src="./assets/img/two-step-verification.gif" alt="" class="gif-link shadow  rounded-5"
                    data-aos="fade-down">
                <h5 class="text-justify mt-5 text-uppercase" data-aos="fade-up">Login Now</h5>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, illo.</p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-lg-3 col-md-6 col-sm-12 mt-3">
                <img src="./assets/img/add-user.gif" alt="" class="gif-link shadow  rounded-5" data-aos="fade-down">
                <h5 class="text-justify mt-5 text-uppercase" data-aos="fade-up">Contact Us</h5>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, illo.</p>
            </div>
        </div>
    </div>
</section>
<!-- Blogs Section Close -->

<?php include ('footer.php'); ?>
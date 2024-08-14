<?php
include ('./admin/connection.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query for selecting from user table
    $get_qry_user = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

    // Combine both queries using UNION

    $result = mysqli_query($con, $get_qry_user);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $result_arr = mysqli_fetch_array($result);
        $_SESSION['user_data'] = $result_arr;

        header('location:index.php');
        exit();

    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}

include ('header.php'); ?>

<section class="login-form">

    <div class="container ">
        <div class=" container common-title text-center fw-bolder mt-5">
            <h3 class="common-heading text-capitalize text-light" data-aos="fade-down">Login Here</h3>
            <hr class="w-25 mx-auto text-light">
        </div>
        <div class="d-flex justify-content-center mb-5 m-10">
            <div class="user_card h-100 w-75">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="./assets/img/coffee-page.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form method="POST" autocomplete="off">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control input_user" value=""
                                placeholder="Enter Email">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value=""
                                placeholder="password">
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn  mt-5 login_btn" name="login">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links text-light">
                        Don't have an account?<a href="./registration.php" class="px-1 text-light"> Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links text-light">
                        If You Are Admin<a href="./admin/login.php" class="px-1 text-light"> Login Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<?php include ('footer.php'); ?>
<?php

include ('connection.php');
if (isset($_POST['submit'])) {
    // $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin_type = $_POST['admin_type'];

    // Query for selecting from admin table
    $get_qry_admin = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' AND admin_type = '$admin_type'";

    $result = mysqli_query($con, $get_qry_admin);

    if (mysqli_num_rows($result) > 0) {
        $result_arr = mysqli_fetch_array($result);
        $_SESSION['admin_data'] = $result_arr;

        header('location:../index.php');
        exit();

    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}

include('header.php');
?>



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
                        <img src="../assets/img/coffee-page.png" class="brand_logo" alt="Logo">
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
                        <div class="form-group mb-2">
                            <label for="exampleInputCatogories1 " class="text-light fw-bolder px-2">Select admin_type</label>
                            <select name="admin_type" class=" mt-3 mb-3 rounded-3 text-center p-2" id="exampleInputCatogories1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn  mt-5 login_btn" name="submit">Login</button>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</section>
<?php include ('footer.php'); ?>


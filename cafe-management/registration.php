<?php
error_reporting(0);

include ('./admin/connection.php');

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // For gmail matching

    $get_email = "select * from user where email = '$email'";
    $result_email = mysqli_query($con, $get_email);
    $count = mysqli_num_rows($result_email);
    if ($count == 1) {
        echo "<script>
        alert('user already added');
        </script>";
    } else {
        $qry = "insert into user set name = '$name', email = '$email', password = '$password'";
        $result = mysqli_query($con, $qry);
        if ($result) {
            header('location:index.php');
        } else {
            echo 'error';
        }
    }
}

// Update Query

$uid = $_GET['uid'];

if ($uid) {
    $get_data = "SELECT * from user where id = '$uid'";
    $updt_qry = mysqli_query($con, $get_data);
    $updt_arr = mysqli_fetch_assoc($updt_qry);
}

if (isset($_POST['Update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry1 = "UPDATE user set name = '$name', email = '$email', password = '$password' where id= '$uid'";

    $result = mysqli_query($con, $qry1);

    if ($result) {
        echo "<script>
            alert('user update successfully!!');  
            window.location = './admin/login-details.php';
          </script>";

    } else {
        echo "error";
    }
}


include ('header.php');
?>


<section class="login-form">

    <div class="container ">
        <div class=" container common-title text-center fw-bolder mt-5">
            <h3 class="common-heading text-capitalize text-light" data-aos="fade-down">
                <?php
                $btn_name = "";
                $msg = "";
                if ($uid) {
                    $msg = "Update Here";
                    $btn_name = "Update";
                } else {
                    $msg = "Register Here";
                    $btn_name = "register";
                }
                ?>

                <?php echo $msg ?>

            </h3>
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
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="name" name="name" class="form-control input_user"
                                value="<?php echo $updt_arr['name'] ?>" placeholder="Enter Name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control input_user"
                                value="<?php echo $updt_arr['email'] ?>" placeholder="Enter Email">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass"
                                value="<?php echo $updt_arr['password'] ?>" placeholder="password">
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn  mt-5 login_btn" name=<?php echo $btn_name ?>><?php echo $btn_name ?></button>
                        </div>
                    </form>


                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links text-light">
                        you have an account?<a href="./login.php" class="px-1 text-light"> Login Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<?php include ('footer.php'); ?>
<?php
include ('connection.php');
error_reporting(0); // warnig hide..!


$get_data = "select * from user where status = 1";
$result_data = mysqli_query($con, $get_data);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_qry = "UPDATE user SET status = 2 WHERE id = '$id'";
    $result = mysqli_query($con, $delete_qry);

    if ($result) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "error";
    }
}


include ('header.php');
?>
<section class="login-form">
    <?php if(isset($_SESSION['admin_data']))
    { ?>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="d-flex justify-content-center">
                <div class="p-2"><a href="./products.php"><button type="button"
                            class="btn btn-outline-success fw-bolder btn-outline-light">
                            Add Products</button></a></div>
                <div class="p-2"><a href="../coffee.php"><button type="button"
                            class="btn btn-outline-primary fw-bolder btn-outline-light">Show Products</button></a></div>
                <div class="p-2"><a href="./product_detail.php"><button type="button"
                            class="btn btn-outline-success fw-bolder btn-outline-light">
                            product Details</button></a></div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="d-flex justify-content-center">
                <div class="p-2">
                    <button class="btn bg-light fw-bolder"> Login Details</button>
                </div>
            </div>
        </div>
        <div class="row mt-3 text-light fw-bolder">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-column justify-content-center">
                <table class="table" id="myTable">
                    <thead>
                        <tr class="py-3">
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th class="d-none d-lg-block d-md-none" scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($result_data as $val) {                        
                            ?>
                            <tr>
                                <th><?php echo $i ?></th>
                                <td><?php echo $val['name'] ?></td>
                                <td class="d-none d-lg-block d-md-none"><?php echo $val['email'] ?></td>
                                <td><?php echo $val['password'] ?></td>
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        <a href="../registration.php?uid=<?php echo $val['id']; ?>">
                                            <div class="p-2 mx-2 btn btn-primary" data-bs-toggle="tooltip" data-bs-title="Update"><i
                                                    class="fa-solid fa-pen-to-square"></i></div>
                                        </a>
                                        <a href="?id=<?php echo $val['id']; ?>">
                                            <div class="p-2 btn btn-danger" data-bs-toggle="tooltip" data-bs-title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <?php $i++;
                        } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } else {?>
        <h5 class="text-center px-5 py-5 text-light">Please login as admin <br> <a href="./login.php" class="text-decoration-none"> click here!!</a></h5>
        <?php } ?>
        
</section>

<?php include ('footer.php'); ?>
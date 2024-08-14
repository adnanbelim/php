<?php
include ('./connection.php');
$tableName = "coffee";
$product_result = "";
$qry = "SELECT * FROM $tableName where status = 1";
$product_result = mysqli_query($con, $qry);

// Check if form submitted
if (isset($_POST['submit'])) {
    $cat = $_POST['category'];

    if ($cat == "c") {
        $tableName = 'coffee';
    } elseif ($cat == "s") {
        $tableName = 'shake';
    } elseif ($cat == "m") {
        $tableName = 'mocktail';
    }

    // Fetch products from selected category
    if (!empty($tableName)) {
        $qry = "SELECT * FROM $tableName where status = 1";
        $product_result = mysqli_query($con, $qry);
    }
}

if (isset($_GET['did'])) {
    $id = $_GET['did'];
    $tableName = $_GET['table'];
    $delete_qry = "UPDATE $tableName SET status = 2 WHERE id = '$id'";
    $result = mysqli_query($con, $delete_qry);

    if ($result) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "error";
    }
}


include ('./header.php');
?>
<section class="login-form">
    <?php if (isset($_SESSION['admin_data'])) { ?>
        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="d-flex justify-content-center">
                    <div class="p-2"><a href="./products.php"><button type="button"
                                class="btn btn-outline-success fw-bolder btn-outline-light">
                                Add Products</button></a></div>
                    <div class="p-2"><a href="../coffee.php"><button type="button"
                                class="btn btn-outline-primary fw-bolder btn-outline-light">Show Products</button></a></div>
                    <div class="p-2"><a href="./login-details.php"><button type="button" class="btn btn-outline-success fw-bolder btn-outline-light">
                        Login Details</button></a></div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center flex-column text-center">
    <div class=" container text-center fw-bolder mt-5">
        <form method="POST">
            <div class="form-group">
                <select name="category" id="exampleInputCat1" class="rounded-3 p-2">
                    <option value="">Select Other Category</option>
                    <option value="c">Coffee</option>
                    <option value="s">Shake</option>
                    <option value="m">Mocktail</option>
                </select>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn mt-5 login_btn w-25" name="submit">Show Products</button>
            </div>
        </form>
    </div>
    <div class=" container fw-bolder mt-5">
        <h3 class=" text-capitalize text-dark" data-aos="fade-down"><?php echo $tableName ?>'s Menu</h3>
                <hr class="w-25 mx-auto text-dark">
            </div>
        </div>
        <div class="container">
            <div class="row mt-3 text-light fw-bolder">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-column justify-content-center">
                    <table class="table" id="myTable">
                        <thead>
                            <tr class="py-3">
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($product_result as $val) {
                                ?>
                                <tr>
                                    <th><?php echo $i ?></th>
                                    <td><?php echo $val['name'] ?></td>
                                    <td><?php echo $val['price'] ?></td>
                                    <td>
                                        <div class="d-flex flex-row mb-3">
                                            <a href="./products.php?uid=<?php echo $val['id']; ?>&table=<?php echo $tableName ?>"">
                                                <div class="p-2 mx-2 btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-title="Update"><i class="fa-solid fa-pen-to-square"></i></div>
                                            </a>
                                            <a href="?did=<?php echo $val['id'];?>&table=<?php echo $tableName ?>">
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
    <?php } else { ?>
        <h5 class="text-center px-5 py-5 text-light">Please login as admin <br> <a href="./login.php"
                class="text-decoration-none"> click here!!</a></h5>
    <?php } ?>

</section>

<?php include ('./footer.php'); ?>
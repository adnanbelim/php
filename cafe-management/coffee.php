<?php
include ('./admin/connection.php');
// Initialize variables
$tableName = "coffee";
$product_result = "";
$qry = "SELECT * FROM $tableName ";
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
        $qry = "SELECT * FROM $tableName ";
        $product_result = mysqli_query($con, $qry);
    }
}
include ('header.php');
?>
<!-- Product table section -->
<div class="container d-flex justify-content-center align-items-center flex-column text-center">
    <div class=" container text-center fw-bolder mt-5">
        <form method="POST">
            <div class="form-group">
                <select name="category" id="exampleInputCat1" class="rounded-3 p-2">
                    <option value="c">Select Other Category</option>
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
    <?php if (!empty($tableName)) { ?>
        
        <table id="productTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($product_result && mysqli_num_rows($product_result) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($product_result)) {
                        ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['price']); ?></td>
                            <td><a href="./payment.php?table=<?php echo $tableName ?>&pid=<?php echo htmlspecialchars($row['id']); ?>"><button type="button" class="btn btn-outline-primary">Pay</button></a></td>
                        </tr>
                        <?php
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='4'>No products found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php }  ?>
</div>

<!-- Gallery section================================================ -->

<div class="container ">
    <div class=" container common-title text-center fw-bolder mt-5">
        <h3 class="common-heading text-capitalize text-dark" data-aos="fade-down">Gallery</h3>
        <hr class="w-25 mx-auto text-dark">
    </div>
    <div class="container">
        <div class="row m-5 g-5 d-flex justify-content-center">

            <div class="col-12 col-lg-3 g-1 col-md-12  m-3">
                <div class="row mb-5 d-md-none d-lg-block d-sm-none"><img src="./assets//img/mocktail-1.webp" alt=""
                        class=" cafe-img1" data-aos="fade-down-right"></div>
                <div class="row d-md-none d-lg-block d-sm-none"><img src="./assets/img//shake-page.webp" alt=""
                        class=" cafe-img1" data-aos="fade-up-left"></div>
            </div>



            <div class="col-12 col-lg-3 col-md-12  m-3 text-center">
                <img src="./assets/img/shake-7.jpg" alt="" class=" cafe-img" data-aos="flip-up">
            </div>


            <div class="col-12 col-lg-3 g-1 col-md-12  m-3">
                <div class="row mb-5 d-md-none d-lg-block d-sm-none"><img src="./assets//img/shake-9.jpg" alt=""
                        class=" cafe-img1" data-aos="fade-down-right"></div>
                <div class="row d-md-none d-lg-block d-sm-none"><img src="./assets/img/mocktail-7.webp" alt=""
                        class=" cafe-img1" data-aos="fade-up-left"></div>
            </div>


            <div class="row  d-flex justify-content-center">

                <div class="col-12 col-lg-2  col-md-12  m-3 text-center">
                    <img src="./assets/img/coffee-9.jpeg" alt="" class=" cafe-img" data-aos="flip-down">
                </div>
                <div class="col-12 col-lg-2  col-md-12  m-3 text-center">
                    <img src="./assets/img/cafe-3.webp" alt="" class=" cafe-img" data-aos="flip-down">
                </div>
                <div class="col-12 col-lg-2  col-md-12  m-3 text-center">
                    <img src="./assets/img/coffee-14.webp" alt="" class=" cafe-img" data-aos="flip-down">
                </div>
                <div class="col-12 col-lg-2  col-md-12  m-3 text-center">
                    <img src="./assets/img/coffee-12.jpg" alt="" class=" cafe-img" data-aos="flip-down">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Gallery -->

<!-- Footer -->
<?php include ('footer.php'); ?>
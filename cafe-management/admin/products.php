<?php

include ('connection.php');
error_reporting(0);

if (isset($_REQUEST['Add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cat = $_POST['category'];
    $tableName = "";

    if ($cat == "c") {
        $tableName = 'coffee';
    } 
    elseif ($cat == "s") {
        $tableName = 'shake';
    }
    if ($cat == "m") {
        $tableName = 'mocktail';
    }
    $qry = "insert into $tableName set name = '$name', price = '$price'";

    $product_result = mysqli_query($con, $qry);

    if ($product_result) {
        echo "<script>
            alert('product added successfully!!')   
            window.location='products.php'
          </script>";
    } else {
        echo "error";
    }
}

$uid = $_GET['uid'];
$tablename = $_GET['table'];
if($uid){
    $get_data = "SELECT * from $tablename where id = '$uid'";
    $updt_qry = mysqli_query($con, $get_data);
    $updt_arr = mysqli_fetch_assoc($updt_qry);
}
if (isset($_POST['Update'])) {
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qry1 = "UPDATE $tablename set name = '$name', price = '$price' where id= '$uid'";
        $result = mysqli_query($con, $qry1);

        if ($result) {
            echo "<script>
            alert('Product update successfully!!');  
            window.location = './product_detail.php';
          </script>";

        } else {
            echo "error";
        }
    }



include ('header.php');
?>



<section class="login-form">

    <div class="container-fluid">
        <div class="row mt-5 mb-3">
            <div class="d-flex justify-content-center">
                <div class="p-2"><a href="./product_detail.php"><button type="button" class="btn btn-outline-success fw-bolder btn-outline-light">
                        Product Details</button></a></div>
                        <div class="p-2"><a href="./login-details.php"><button type="button" class="btn btn-outline-success fw-bolder btn-outline-light">
                        Login Details</button></a></div>
                <div class="p-2"><a href="../coffee.php"><button type="button" class="btn btn-outline-primary fw-bolder btn-outline-light">Show Products</button></a></div>
                
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-center">
                <div class="p-2">
                    <button  class="btn bg-light fw-bolder"><?php
                    $btn_name = "";
                    $msg = "";
                    if ($uid){
                        $msg = "Update Product";
                        $btn_name = "Update";
                    } else{
                        $msg = "Add Product";
                        $btn_name = "Add";
                    }
                    ?>
                    
                    <?php echo $msg ?></button>
                </div>
            </div>
        <div class="d-flex justify-content-center mb-5 m-10">
            <div class="user_card h-100 w-75">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../assets/img/coffee-page.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container" >
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputCatogories1" class="text-light fw-bolder mb-3">Select Categpry</label>
                            <select name="category" id="exampleInputCatogories1" class=" rounded-3 text-center mb-3">
                                <option value=""></option>
                                <option value="c">Coffee</option>
                                <option value="s">Shake</option>
                                <option value="m">Mocktail</option>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label for="inputName1" class="text-light fw-bolder mb-3">Name</label>

                            <input type="text" name="name" class="form-control input_user" value="<?php echo $updt_arr['name'] ?>"
                                placeholder="Enter Product Name" id="inputName1">
                        </div>
                        <div class=" mb-2">
                            <label for="inputPrice1" class="text-light fw-bolder mb-3">Price</label>
                            <input type="text" name="price" class="form-control input_pass" value="<?php echo $updt_arr['price'] ?>"
                                placeholder="Enter Product Price ($)" id="inputPrice1">
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn  mt-5 login_btn"name=<?php echo $btn_name ?>><?php echo $btn_name ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include ('footer.php'); ?>
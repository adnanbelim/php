<?php
//Step 1
// if (!isset($_SESSION['user_data'])) {
//     header('location:login.php');
// }
include "../connection/connection.php";
if (isset($_REQUEST['submit'])) {

    // echo "<pre>";
    // print_r($_FILES);
    // // print_r($_REQUEST);  
    // exit;

    $file = uniqid() . $_FILES['picture']['name'];
    $path = "documents/" . $file;
    $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $path);

    if ($upload) {
        $gid =  uniqid();
        $name = $_REQUEST['product_name'];
        $short_desc = $_REQUEST['short_desc'];
        $price = $_REQUEST['price'];
        $desc = $_REQUEST['desc'];

        $qry = "insert into products set  gid= '$gid', product_name = '$name', short_description = '$short_desc', price = '$price', description = '$desc', picture = '$file'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            header('location:products.php');
        } else {
            echo "error";
        }
    } else {
        echo "<script>alert('file not upload')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container-fluid">


        <!-- Admin nav start-->
        <div class="row mt-3 mb-3">
            <?php include "adminnav.php" ?>
        </div>
        <!--  Admin nav end-->

    </div>

    <div class="row mt-3">
        <div class="offset-md-2 col-md-8">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product/Blog Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Short description</label>
                    <input type="text" name="short_desc" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Picture</label>
                    <input type="file" class="form-control" name="picture">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input type="text" name="desc" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>


</body>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

</html>
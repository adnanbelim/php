<?php
include ('./admin/connection.php');
include ('header.php');

if(isset($_GET['pid'])){
$pid = $_GET['pid'];
$tableName = $_GET['table'];
if ($pid) {
    $get_data = "SELECT * from $tableName where id = '$pid'";
    $updt_qry = mysqli_query($con, $get_data);
    $updt_arr = mysqli_fetch_assoc($updt_qry);
}
}
?>

<body>
    <div class="container payment-cont w-75">
        <form action="POST">
            <div class="row payment-row">
                <div class="col payment-col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <label for="name">
                            All UPI Payment Accepted:
                        </label>
                        <img src="./assets/img/BlueCity Cafe.png" alt="QR Code" class="w-50 h-50">
                    </div>

                    <div class="inputBox">
                        <h6 for="cardName">Scan & Pay</h6>
                    </div>

                    <div class="inputBox">
                        <p class="text-danger">Enter UPI Ref Number After Payment!!</p>
                    </div>
                </div>

                <div class="col payment-col">
                    <h3 class="title">
                        Product Details
                    </h3>

                    <div class="inputBox">
                        <label for="name">
                            Product Name:
                        </label>
                        <?php echo $updt_arr['name']; ?>
                    </div>

                    <div class="inputBox">
                        <label for="upi">
                            Price
                        </label>
                        <?php echo $updt_arr['price']; ?>
                    </div>

                    <div class="inputBox">
                        <label for="address">
                            Description
                        </label>
                        <p><?php echo $updt_arr['description']; ?><a href="./index.php" class="text-decoration-none">more...</a></p>
                    </div>
                    <div class="inputBox">
                        <label for="address">
                            UPI Ref No:
                        </label>
                        <input type="text" id="address" placeholder="Enter UPI Ref Number" required>
                    </div>
                </div>
            </div>
                <input type="submit" value="Place Order" class="btn btn-outline-success w-100 p-2 rounded-3">


    </div>

    </form>

    </div>

    <script type="text/javascript">
        alert('This is a DEMO QR Code!!');
    </script>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
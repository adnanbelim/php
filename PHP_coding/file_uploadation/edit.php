<?php
$connection = mysqli_connect('localhost', 'root', '', 'lips') or die("db not connect");
$id = $_GET['edit_id'];
$SelectQry = "select * from user where id = '$id '";
$obj = mysqli_query($connection, $SelectQry);
$userArr = mysqli_fetch_array($obj);

if (isset($_POST['update'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];

    $qry = "update user set name='$user_name',email='$email',password = '$password', number = '$number', gender = '$gender' where id = $id";
    $result = mysqli_query($connection, $qry);
    if ($result == true) {
        header('location:table.php');
    } else {
        echo "get error";
    }
}
// echo "<pre>";
// print_r($userArr);
// exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" value="<?php echo $userArr['name'] ?>" name="user_name" /></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="email" value="<?php echo $userArr['email'] ?>" name="email" /></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" value="<?php echo $userArr['password'] ?>" name="password" /></td>
            </tr>

            <tr>
                <th>Number</th>
                <td><input type="number" value="<?php echo $userArr['number'] ?>" name="number" /></td>
            </tr>

            <tr>
                <th>Gender</th>
                <td>

                    Male<input type="radio" <?php echo isset($userArr['gender']) == 1 ? 'checked="checked"' : '' ?> value="1" name="gender" />
                    Female<input type="radio" <?php echo isset($userArr['gender']) == 2 ? 'checked="checked"' : '' ?> value="2" name="gender" /></td>
            </tr>

            <tr>
                <td><input type="submit" name="update" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
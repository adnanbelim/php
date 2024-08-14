<?php
$connection = mysqli_connect('localhost', 'root', '', 'lips') or die("db not connect");
if (isset($_POST['save'])) {

    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];

    $qry = "insert into user set name = '$name', email= '$email', password = '$password',number = '$number', gender = '$gender'";
    $result = mysqli_query($connection, $qry);
    if ($result == true) {
        header('location:table.php');
    } else {
        echo "get error";
    }
}
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
                <td><input type="text" value="" name="user_name" /></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="email" name="email" /></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" name="password" /></td>
            </tr>

            <tr>
                <th>Number</th>
                <td><input type="number" name="number" /></td>
            </tr>

            <tr>
                <th>Gender</th>
                <td>Male<input type="radio" value="1" name="gender" />Female<input type="radio" value="2" name="gender" /></td>
            </tr>

            <tr>
                <td><input type="submit" name="save" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
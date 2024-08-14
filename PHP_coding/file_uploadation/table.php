<?php
$connection = mysqli_connect('localhost', 'root', '', 'lips') or die("db not connect");
$SelectQry = "select * from user where status = 1";
$obj = mysqli_query($connection, $SelectQry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="fontawesome/css/all.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <i class="fa fa-user fa-5x"></i>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($obj as $arr) { ?>
            <tr>
                <td><?php echo $arr['name']; ?> Edit</td>
                <td><?php echo $arr['email'];  ?></td>
                <td><?php echo $arr['number'];  ?></td>
                <?php if ($arr['gender'] == 1) { ?>
                    <td><?php echo "Male";  ?></td>
                <?php } else { ?>
                    <td><?php echo "Female";  ?></td>
                <?php } ?>
                <td>
                    <a href="edit.php?edit_id=<?php echo $arr['id']; ?>">Update</a>
                </td>

                <td>
                    <a href="delete.php?del_id=<?php echo $arr['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>
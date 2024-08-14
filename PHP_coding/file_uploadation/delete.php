<?php
$connection = mysqli_connect('localhost', 'root', '', 'lips') or die("db not connect");
$id = $_GET['del_id'];
$qry = "update user set status='2' where id = $id";
$result = mysqli_query($connection, $qry);
if ($result == true) {
    header('location:table.php');
} else {
    echo "get error";
}

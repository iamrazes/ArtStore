<?php
include './config/connect.php';
$conn = mysqli_connect("localhost", "root", "", "artstore");

$id = $_POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli->query("UPDATE users SET name='$name', email='$email', password='$password', WHERE id='$id'");

    echo "<script>alert(<)'Data updated successfully')</script>";
    echo "<script type='type/javascript'> document.location='index.php?page=data_users';</script>";
?>
<?php
include './config/connect.php';
$conn = mysqli_connect("localhost","root","","artstore");

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli->query("UPDATE users SET name='$name', email='$email', password='$password', WHERE $id='id', ");

    echo "<script>alert('Data updated successfully')</script>";
    echo "<script type='text/javascript'> document.location = 'index.php?page=data_users';</script>";

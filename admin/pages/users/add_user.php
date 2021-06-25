<?php
include './config/connect.php';
$conn = mysqli_connect("localhost", "root", "", "artstore");

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mysqli->query("INSERT INTO users (username, name, email, password)
    VALUES ('$username', '$name', '$email', '$password')");

echo "<script>alert('Data Added successfully')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=data_users';</script>";

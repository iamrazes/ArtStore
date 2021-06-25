<?php
include './config/connect.php';
$conn = mysqli_connect("localhost", "root", "", "artstore");

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET username='$username', name='$name', email='$email', password='$password' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data updated successfully')</script>";
        echo "<script type='text/javascript'> document.location = 'index.php?page=data_users';</script>";
    } else {
        echo 'update failed';
    }
}

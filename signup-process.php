<?php
include("./config.php");
$conn = mysqli_connect("localhost","root","","artstore");

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, name, email, password)
VALUES ('$username', '$name', '$email', '$password')";

if (mysqli_query($conn, $sql)){
    echo "Anda telah terdaftar!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

<?php
include("./config.php");
$conn = mysqli_connect("localhost","root","","artstore");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO message (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)){
    echo "Pesan Anda telah terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

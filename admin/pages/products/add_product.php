<?php
include './config/connect.php';
$conn = mysqli_connect("localhost", "root", "", "artstore");

$title = $_POST['title'];
$artist = $_POST['artist'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$sold = $_POST['sold'];
$pictures = $_POST['pictures'];

$mysqli->query("INSERT INTO products (title, artist, price, rating, description, stock, sold, pictures)
    VALUES ('$title', '$artist', '$price', '$rating','$description', '$stock', '$sold', '$pictures')");

echo "<script>alert('Data Added successfully')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=data_products';</script>";

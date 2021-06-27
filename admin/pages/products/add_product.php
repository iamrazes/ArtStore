<?php
include './config/connect.php';
$conn = mysqli_connect("localhost", "root", "", "artstore");

if (isset($_POST['submit'])) {
    $target_dir = dirname(__FILE__) . '\uploads' . '/';
    $target_file = $target_dir . basename($_FILES['pictures']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES['pictures']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File isn't an image - .')</script>" . $check['mime'] . '.';
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists.')</script>";
        $uploadOk = 0;
    }

    // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["pictures"]["tmp_name"], $target_file)) {
            echo "<script>alert(The file " . htmlspecialchars(basename($_FILES["pictures"]["name"])) . " has been uploaded.')</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }

    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $sold = $_POST['sold'];
    $pictures = $_FILES['pictures']['name'];

    $mysqli->query("INSERT INTO products (title, artist, price, rating, description, stock, sold, pictures)
    VALUES ('$title', '$artist', '$price', '$rating','$description', '$stock', '$sold', '$pictures')");

    echo "<script>alert('Product Added successfully')</script>";
    echo "<script type='text/javascript'> document.location = 'index.php?page=data_products';</script>";
}

// source
// https://www.w3schools.com/php/php_file_upload.asp
// https://www.php.net/manual/en/function.dirname.php
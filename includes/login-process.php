<?php
include("./config.php");
session_start(); // 

// check user
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email='$email' and password='$password' LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row) {
    // jika email & password benar
    var_dump('LOGIN SUCCESS & SESSION CREATED');

    // membuat session
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: ../index.php');
} else {
    // jika email & password salah
    echo ('<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!--Bootstrap 5-->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/signup.css" />
        
        <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icons/favicon.ico">
    
        <title>ArtStore | Buy High Quality Arts</title>
      </head>
      <body class="bg-dark text-white">
        <main class="form-signup text-center">
          <form>
            <a href="../index.php"
              ><img
                class="mb-4"
                src="../assets/img/icons/logo.png"
                alt=""
                width="144"
                height="144"
            /></a>
            <h1 class="h1 mb-3 fw-normal">Oops!!</h1>
            <h1 class="h5 mb-3 fw-normal">Seems like your email or password are incorrect.</h1>
            <br>
            <h1 class="h5 mb-3 fw-normal">Try again!</h1>
            <br>
            <br>
            <a href="../index.php" type="button" class="bw-100 btn btn-lg btn-outline-light">Homepage</a>
            <a href="../pages/login/" type="button" class="bw-100 btn btn-lg btn-warning">Login</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 ArtStore</p>
          </form>
        </main>
    
        <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
      </body>
    </html>');
}

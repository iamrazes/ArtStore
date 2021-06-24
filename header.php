<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/headers.css" />
  <link rel="stylesheet" href="assets/css/carousel.css" />
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/shop.css">
  <link rel="stylesheet" href="assets/css/map.css">
  <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>ArtStore | Buy High Quality Arts</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="container">
          <div class="
                d-flex
                flex-wrap
                align-items-center
                justify-content-center justify-content-lg-start
              ">
            <a href="index.php" class="
                  d-flex
                  align-items-center
                  mb-2 mb-lg-0
                  text-white text-decoration-none
                ">
              <img class="bi me-2" width="33" height="33" src="assets/img/icons/logo.png">
            </a>
            <ul class="
                  nav
                  col-12 col-lg-auto
                  me-lg-auto
                  mb-2
                  justify-content-center
                  mb-md-0
                ">
              <li>
                <a href="index.php" class="nav-link px-2 text-white">Home</a>
              </li>
              <li>
                <a href="shop.php" class="nav-link px-2 text-white">Shop</a>
              </li>
              <li>
                <a href="gallery.php" class="nav-link px-2 text-white">Gallery</a>
              </li>
              <li>
                <a href="contact.php" class="nav-link px-2 text-white">Contact</a>
              </li>
              <li>
                <a href="about.php" class="nav-link px-2 text-white">About</a>
              </li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" />
            </form>
            <div class="text-end">
              <?php
              if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                echo '<a href="./includes/logout.php" type="button" class="btn btn-warning me-2">Logout</a>
                <a href="./profile/" type="button" class="btn btn-outline-light "><li class="fa fa-user"></li></a>'
                ;
              } else {
                echo '<a href="login.php" type="button" class="btn btn-outline-light me-2">Login</a>
                  <a href="signup.php" type="button" class="btn btn-warning">Sign-up</a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
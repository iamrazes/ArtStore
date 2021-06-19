<?php
include("./config.php");
// $conn = mysqli_connect("localhost","root","","artstore");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO message (name, email, subject, message)
    VALUES ('$name', '$email', '$subject', '$message')"
    ;

if (mysqli_query($conn, $sql)){
    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!--Bootstrap 5-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/signup.css" />
        
        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/favicon.ico">
    
        <title>ArtStore | Buy High Quality Arts</title>
      </head>
      <body class="bg-dark text-white">
        <main class="form-signup text-center">
          <form>
            <a href="index.php"
              ><img
                class="mb-4"
                src="assets/img/icons/logo.png"
                alt=""
                width="144"
                height="144"
            /></a>
            <h1 class="h1 mb-3 fw-normal">Thank you!</h1>
            <h1 class="h5 mb-3 fw-normal">Your messages are sent to us.</h1>
            <br>
            <br>
            <a href="index.php" type="button" class="bw-100 btn btn-lg btn-warning">Go Back</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 ArtStore</p>
          </form>
        </main>
    
        <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>'
    ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

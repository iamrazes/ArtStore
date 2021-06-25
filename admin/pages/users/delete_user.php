<?php
include './config/connect.php';
$conn = mysqli_connect("localhost","root","","artstore");

    $mysqli->query("DELETE FROM users WHERE id='$_GET[opsi]'");
    
    echo "<script>alert('Data Deleted successfully')</script>";
    echo "<script type='text/javascript'> document.location = 'index.php?page=data_users';</script>";

?>
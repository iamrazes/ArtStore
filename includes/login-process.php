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
    var_dump('LOGIN GAGAL');
}
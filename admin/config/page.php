<?php
include 'config/connect.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'data_users':
            include 'pages/users/data_users.php';
            break;
        case 'add_user':
            include 'pages/users/add_user.php';
            break;
        case 'update_user':
            include 'pages/users/update_user.php';
            break;
        case 'edit_user':
            include 'pages/users/edit_user.php';
            break;
        case 'delete_user':
            include 'pages/users/delete_user.php';
            break;
        case 'data_products':
            include 'pages/products/data_products.php';
            break;
        case 'data_message':
            include 'pages/message/data_message.php';
            break;
        case 'data_gallery':
            include 'pages/gallery/data_gallery.php';
            break;
        default:
            echo '404 NOT FOUND';
    }
} else {
    include "pages/homepage.php";
}

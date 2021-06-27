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
        case 'add_product':
            include 'pages/products/add_product.php';
            break;
        case 'delete_product':
            include 'pages/products/delete_product.php';
            break;
        case 'data_message':
            include 'pages/message/data_message.php';
            break;
        case 'data_gallery':
            include 'pages/gallery/data_gallery.php';
            break;
        default:
            echo '
<section class="content-header">
    <div class="container-fluid">
            <div class="text-center">
                <h1 style=font-size:100px>ERROR</h1>
                <h1 style=font-size:185px>404</h1>
                <h1 style=font-size:38px>PAGE NOT FOUND</h1>
            </div>
    </div><!-- /.container-fluid -->
</section>
            ';
    }
} else {
    include "pages/homepage.php";
}

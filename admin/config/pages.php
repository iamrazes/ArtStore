<?php
if ($_GET['page']=="data_user"){
    include "page/users/data.user.php";
}
else if ($_GET['page']=="data_product"){
    include "page/users/data.product.php";
}
else if ($_GET['page']=="data_message"){
    include "page/users/data.message.php";
}
else if ($_GET['page']=="data_gallery"){
    include "page/users/data.gallery.php";
}
?>
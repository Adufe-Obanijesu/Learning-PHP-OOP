<?php
    require_once("classes.php");
    $name = $_POST['cat_name'];
    $image = $_FILES['cat_image'];
    $images = $_FILES['cat_image']['name'];
    $type = 'cat';
    $cat_upload->create_cat($name, $images,$type);
?>
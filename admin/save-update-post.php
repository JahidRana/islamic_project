<?php
$new_name ="";
require_once("../includes/db.php");


if (empty($_FILES['new-image']['name'])) {
    $new_name = $_REQUEST['old_image'];
} else {
    $errors = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];

    $file_ext = end(explode('.', $file_name));

    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This extension file not allowed,please choose a JPG or PNG file";
    }

    if ($file_size > 2097152) {
        $errors[] = "File size must be 2mb or lower";
    }

    $new_name = date("d-m-y", time()) . "-" . basename($file_name);

    $target = "../upload/" . $new_name;
    // $image_name = $new_name;

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $target);
    } else {
        print_r($errors);
        die();
    }
}


$query = "UPDATE post SET
title='{$_REQUEST["post_title"]}',
description='{$_REQUEST["postdesc"]}',
category='{$_REQUEST["category"]}',
post_img='{$new_name}'
WHERE post_id={$_REQUEST["post_id"]};";




if ($_REQUEST['old_category'] != $_REQUEST["category"]) {
    $query .= "UPDATE category SET post= post-1 WHERE category_id = {$_REQUEST['old_category']};";
    $query .= "UPDATE category SET post= post+1 WHERE category_id = {$_REQUEST['category']};";
}


$result = mysqli_multi_query($connect, $query);

if ($result) {
    header("location: post.php");
} else {
    echo "<div class='alert alert-danger'>Query Faield.</div>";
}

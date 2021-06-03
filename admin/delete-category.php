<?php

require_once("./config/connect.php");

$delete_id = $_REQUEST['id'];

$delete_query = "DELETE FROM category WHERE category_id = $delete_id";

$del_run_query = mysqli_query($connect,$delete_query);


if($del_run_query){
    header("location: category.php");
    die();
}
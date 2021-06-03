<?php

require_once("./config/connect.php");


$post_id = $_REQUEST['id'];
$cat_id = $_REQUEST['catid'];


$query1 = "SELECT * FROM post WHERE post_id = {$post_id}";
$result = mysqli_query($connect,$query1) or die("Query Failed : select ");
$row = mysqli_fetch_assoc($result);

unlink("./upload/".$row['post_waz']);

$query = "DELETE FROM post WHERE post_id = {$post_id};";
$query .= "UPDATE category SET post = post - 1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($connect,$query)){
    header("location: post.php");
}else{
    echo "Query Failed";
}

?>
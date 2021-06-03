<?php

require_once("./config/connect.php");


$post_id = $_REQUEST['id'];



$query1 = "SELECT * FROM story WHERE story_id = {$post_id}";
$result = mysqli_query($connect,$query1) or die("Query Failed : select ");
$row = mysqli_fetch_assoc($result);

unlink("./upload/photos/".$row['story_img']);

$query = "DELETE FROM story WHERE story_id = {$post_id}";


if(mysqli_query($connect,$query)){
    header("location: story.php");
}else{
    echo "Query Failed";
}

?>
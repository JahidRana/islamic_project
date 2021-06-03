<?php

require_once("./config/connect.php");


$post_id = $_REQUEST['id'];



$query1 = "SELECT * FROM new_waz WHERE id = {$post_id}";
$result = mysqli_query($connect,$query1) or die("Query Failed : select ");
$row = mysqli_fetch_assoc($result);

unlink("./upload/".$row['waz_name']);

$query = "DELETE FROM new_waz WHERE id = {$post_id}";


if(mysqli_query($connect,$query)){
    header("location: new-waz.php");
}else{
    echo "Query Failed";
}

?>
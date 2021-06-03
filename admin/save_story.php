<?php

require_once("./config/connect.php");

if(isset($_FILES['fileToUpload'])){

    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];

    $file_ext = end(explode('.',$file_name));

    $extension = array("jpeg","jpg","png");

    if(in_array($file_ext,$extension)===false){
        $errors[] = "This extension file not allowed,please choose a jpg/jpeg/png file";
    }

$target = "./upload/photos/$file_name";


if(empty($errors)==true){
    move_uploaded_file($file_tmp,$target);
}else{
    print_r($errors);
    die();
}

}

session_start();


$title = mysqli_real_escape_string($connect,$_REQUEST['post_title']);
$description = mysqli_real_escape_string($connect,$_REQUEST['postdesc']);

$date = date("d M, Y");


$sql = "INSERT INTO story(title,description,story_date,story_img) VALUES('{$title}','{$description}','{$date}','{$file_name}')";




if(mysqli_query($connect, $sql)){
    header("location: story.php");
}else{
    echo "<div class='alert alert-danger'>Query Faield.</div>";
}





?>
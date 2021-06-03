<?php

require_once("./config/connect.php");

if(isset($_FILES['fileToUpload'])){

    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];

    $file_ext = end(explode('.',$file_name));

    $extension = array("mp3","MP3","mp3");

    if(in_array($file_ext,$extension)===false){
        $errors[] = "This extension file not allowed,please choose a mp3 file";
    }

$target = "./upload/sura/$file_name";


if(empty($errors)==true){
    move_uploaded_file($file_tmp,$target);
}else{
    print_r($errors);
    die();
}

}

session_start();


$title = mysqli_real_escape_string($connect,$_REQUEST['post_title']);



$sql = "INSERT INTO sura(title,sura_name) VALUES('{$title}','{$file_name}')";


if(mysqli_query($connect, $sql)){
    header("location: sura.php");
}else{
    echo "<div class='alert alert-danger'>Query Faield.</div>";
}





?>
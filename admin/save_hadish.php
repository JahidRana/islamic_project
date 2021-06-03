<?php

require_once("./config/connect.php");

if(isset($_FILES['fileToUpload'])){

    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];

    $file_ext = end(explode('.',$file_name));

    $extension = array("pdf","PDF");

    if(in_array($file_ext,$extension)===false){
        $errors[] = "This extension file not allowed,please choose a pdf/PDF file";
    }

$target = "./upload/hadish/$file_name";

 $size = round(($file_size / 1048576),2);

if(empty($errors)==true){
    move_uploaded_file($file_tmp,$target);
}else{
    print_r($errors);
    die();
}

}

session_start();


$title = mysqli_real_escape_string($connect,$_REQUEST['post_title']);





$sql = "INSERT INTO hadish(title,size,hadish_name) VALUES('{$title}','{$size}','{$file_name}')";




if(mysqli_query($connect, $sql)){
    header("location: hadish.php");
}else{
    echo "<div class='alert alert-danger'>Query Faield.</div>";
}





?>
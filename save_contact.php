<?php 



   
    include("./admin/config/connect.php");
    $name = mysqli_real_escape_string($connect,$_REQUEST['name']);
    $email = mysqli_real_escape_string($connect,$_REQUEST['email']);
   
    $phn_no= mysqli_real_escape_string($connect,$_REQUEST['phn_no']);
    $message= mysqli_real_escape_string($connect,$_REQUEST['message']);
 
    $query = "INSERT INTO full_contac(name,email,phn_no,messages) VALUES('{$name}','{$email}','{$phn_no}','{$message}')";
    
    $run_query = mysqli_query($connect, $query);
    
    
    
    if($run_query){
        header("location: contact.php?msg=Message Successfully Sent");
    }else{
        header("location: contact.php?msg=Message Send Failed");
    }
    
    
    
    
    
    
  
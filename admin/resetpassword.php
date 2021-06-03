<?php


if(isset($_REQUEST['submit'])){
  require_once("./config/connect.php");
  $email = $_REQUEST['email'];
  $select = "SELECT * FROM login_page where email='{$email}'";
   
  $run_query = mysqli_query($connect, $select);
  $count = mysqli_num_rows($run_query);
  if ($count == 1){
   while ($row = mysqli_fetch_assoc($run_query)){
      $token = $row['token'];
      $user = $row['username'];
      $subject = "Reset Password";
      $body = "Hi, $user. Please click this link & reset your password http://localhost/islamic/admin/updatepassword.php?token=$token ";
      $headers = "From: jahidrana333@gmail.com";


      if (mail($email, $subject, $body, $headers)) {
          session_start();
         $_SESSION['msg'] = "Check your mail to reset your password $email";
         header("location: index.php");
     } else {
       echo "Email sending failed";
         
     }


   }

  }else{
     echo "Email already exists";
  }

 
   
 



}





?>


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
      <title>Send Reset Password </title>
  
       <link rel="stylesheet" href="./assets/dist/css/adminfile.css">
  
   </head>
   <body>


   <div class="form">
        <h2>Send Reset Password </h2>
        <div class="input">
            <div class="inputBox">
        
            <label for="exampleInputEmail1">Email address</label>

         <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
             <input type="text" name="email" id="email"  placeholder="example@xyz.com" >
            </div>
     
            <div class="inputBox change">

            <input type="submit" value="Send" name="submit">
            </div>
            </form>

 
   </body>
</html>


<!-- php start here -->

<?php
session_start();

if (isset($_REQUEST['submit'])) {

    if (isset($_GET['token'])) {
     $token = $_GET['token'];
    require_once("./config/connect.php");

    $pass = mysqli_real_escape_string($connect, md5($_REQUEST['password']));
    $cpass = mysqli_real_escape_string($connect, md5($_REQUEST['cpassword']));
  


if($pass === $cpass){
    

    $updatepwd = "UPDATE login_page SET password='$pass' where token='$token'";

    $update_query = mysqli_query($connect, $updatepwd);

    if($update_query){
     $_SESSION['msg'] = "Password has been Updated";
     header("location: index.php");
    }else{
        $_SESSION['not_match'] = "Password Not Updated";
    }

}else{
    $_SESSION['not_match'] = "Password Not Matching";
}

    
   
}
else{
    echo "Not found Any token";
}
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="./assets/dist/css/adminfile.css">
</head>

<body>
    <div class="form">
        <h2>Update Password</h2>
        <div class="input">
            <div class="inputBox">
        
                <label for="password">Password</label>

                <form action="" method="POST">
             <input type="password" name="password" placeholder="New password" >
            </div>
            <div class="inputBox">
                <label for="">confirm password</label>
                <input type="password" name="cpassword" placeholder="re-type passord"  >
                                 
            </div>


            <div class="inputBox change">

                <input type="submit" name="submit" value="Update">
            </div>

            </form>


            <?php

            if(isset($_SESSION['not_match'])){?>
            <p style="color:red;text-align:center; background:#4b4b4b; margin-top:10px; padding:3px"><?php echo $_SESSION['not_match']; ?></p>
            <?php
            }
            ?>

            
    
        </div>
    </div>
</body>

</html>




<?php

session_start();
if (isset($_SESSION['is_login'])) {
    header("location: post.php");
}


?> 

<?php


if (isset($_REQUEST['submit'])) {

    require_once("./config/connect.php");

    $email = mysqli_real_escape_string($connect, $_REQUEST['userEmail']);
    $pwd = mysqli_real_escape_string($connect, md5($_REQUEST['userPwd']));
    $pwds = $_REQUEST['userPwd'];

    $select = "SELECT * FROM login_page where email='{$email}' AND password='{$pwd}'";

    $run_query = mysqli_query($connect, $select);

    $count = mysqli_num_rows($run_query);
    
    if ($count == 1) {
        while ($row = mysqli_fetch_assoc($run_query)) {

            if (!empty($_REQUEST['remember'])) {
                setcookie('email', $email, time() + 60 * 60 * 7);
                setcookie('password', $pwds, time() + 60 * 60 * 7);
            }else{
                setcookie('email', $email,time()-7);
                setcookie('password', $pwds,time()-7);
            }
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['is_login'] = 'yes';
            header("location: post.php");
        }
    } else {
        header("location: index.php?wrong=wrong password");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamer Alo</title>
    <link rel="stylesheet" href="./assets/dist/css/adminfile.css">
</head>

<body>
    <div class="form">
        <h2>Welcome Admin</h2>
        <div class="input">
            <div class="inputBox">
        
                <label for="">Email</label>

                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
             <input type="email" name="userEmail" placeholder="example@xyz.com" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>" 
                                 >
            </div>
            <div class="inputBox">
                <label for="">Password</label>
                <input type="password" name="userPwd" placeholder="........" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>" >
                                 
            </div>

            <div class="remember">
                <input type="checkbox" name="remember">Remember me?
            </div>
            <div class="inputBox change">

                <input type="submit" name="submit" value="Log in">
            </div>
            </form>

            <?php

            if (isset($_REQUEST['wrong'])) {?>

                <p style="color:red;text-align:center;margin-top:10px;"><?php echo $_REQUEST['wrong']; ?></p>
         <?php
            }
            ?>

            <?php

            if(isset($_SESSION['msg'])){?>
            <p style="color:green;text-align:center;margin-top:10px; padding:3px"><?php echo $_SESSION['msg']; ?></p>
            <?php
            }
            ?>

            
            
            <p class="forget">Forget Password ? <a href="resetpassword.php">Click here</a></p>
        </div>
    </div>
</body>

</html>
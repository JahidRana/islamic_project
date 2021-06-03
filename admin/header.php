<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Islam</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.mi.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-2">
                    <a href="post.php"><img class="logo" src="../images/background.jpg"></a>
                </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
                <div class="col-md-offset-9  col-md-1 myClass">
                
                <a href="logout.php" class="admin-logout">logout</a>
                </div>
                <?php 
                require_once("./config/connect.php");
                    //retriving existing visitors
                    $query = "SELECT * FROM counter_table";
                    $result = mysqli_query($connect,$query);


                    //Checking query error
                    if(!$result){
                    die("Retriving Query Error<br>".$query);
                    }
                    $result = mysqli_query($connect,$query);
                    $total_visitors = mysqli_num_rows($result);
                
                ?>
                <h1 class="viewer" >Total Visitor No: <?php echo $total_visitors ?> </h1>
                <!-- /LOGO-Out -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <ul class="admin-menu">
                            <li>
                                <a href="post.php">Post</a>
                            </li>
                            <li>
                                <a href="new-waz.php">New Waz</a>
                            </li>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
									<a href="sura.php">Sura</a>
								</li>
                                <li>
									<a href="story.php">Story</a>
								</li>
                                <li>
									<a href="hadish.php">Hadish</a>
								</li>
                        </ul>
                        <center>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->
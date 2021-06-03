<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Bangladeshi Islamic website.It is totally islamic website.Bangla mp3 waz download">
  <meta name="keywords" content="waz,new mp3 waz,new mp3 wwaz download,Bangla waz mp3,mp3 waz download,bangla mp3 waz download,sura download,pdf">
  <meta name="author" content="Jahid Rana">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Islamer Alo</title>
  <link rel="icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/mystyle.css">
</head>

<body>



<header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">Isl<span>a</span>mic</a></h1>
                <ul>
                    <li><a href="mp3waz.php">Bangla mp3 waz</a></li>
                    <li><a href="all_sura.php">All Sura list</a></li>
                    <li><a href="islamic_history.php">Islamic History</a></li>
                    <li><a href="al_quran.php">Al Quran pdf</a></li>
                    <li><a href="namaz_sikkha.php">Namaz Sikkha</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
            <div class="text">   ইসলামকে ভালোবাসি বলে শুধু ইসলাম প্রচার করার জন্য আমার ক্ষুদ্র প্রচেষ্টা । ভুল হলে নিজ গুনে ক্ষমা করবেন । </div>
         
        </div>
</header>
<!-- Visitor count start -->

<?php 

include("./admin/config/connect.php");

$visitor_ip = $_SERVER['REMOTE_ADDR'];


//testing purpose
// $visitor_ip = "127:35:01";


//Checking if visitor is unique

//retriving existing visitors
$query = "SELECT * FROM counter_table WHERE ip_address = '$visitor_ip'";
$result = mysqli_query($connect,$query);


//Checking query error
if(!$result){
    die("Retriving Query Error<br>".$query);
}
$result = mysqli_query($connect,$query);
$total_visitors = mysqli_num_rows($result);

if($total_visitors < 1){
    $query = "INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
    $result = mysqli_query($connect,$query);
}


 ?>

<!-- Visitor count end -->

<script src="./js/index.js"></script>
</body>
</html>

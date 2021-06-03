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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/header.css">

  <style>
/* Style the buttons */
 .btns {
  cursor: pointer;
 
} 

/* Style the active class, and buttons on mouse-over */
.active, .btns:hover {

  background-color: #dddd;
  color: blue;
  text-decoration: none;
  transition: all 0.5s;
}



i.fas.fa-download {
    font-size: 21px;
}
td a i:hover{
  color: orangered;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 230px;
  background-color: #f1f1f1;
  /* position: fixed; */
  height: 100%;
  overflow: auto;
}
.myclass{
  line-height: 50px;
  font-size: 16px;
}

.sidebar a {
  font-size: 15px;
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
.sidebar a.activeClass, .sidebar a:hover {
  /* background-color: #04AA6D; */
  background: orangered;
  color: white;
}
ul li a img{

    height: 28px;
    width: auto;

}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>


<header>
        <!-- <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div> -->
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php" class="brandName" >Isl<span>a</span>mic</a></h1>
                <ul id='myid'>
                    <li><a class="btns nav" href="mp3waz.php">Bangla mp3 waz</a></li>
                    <li><a href="all_sura.php" class="btns nav ">All Sura list</a></li>
                    <li><a href="islamic_history.php" class="btns nav ">Islamic History</a></li>
                    <li><a href="al_quran.php" class="btns nav ">Al Quran pdf</a></li>
                    <li><a href="namaz_sikkha.php" class="btns nav ">Namaz Sikkha</a></li>
                    <li><a href="about.php" class="btns nav ">About</a></li>
                </ul>
            </nav>
           
         
        </div>
</header>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>


  jQuery(function($) {
    var path = window.location.href; 
    // because the 'href' property of the DOM element is the absolute path
    $('ul a').each(function() {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
  });

 

</script>


</body>
</html>

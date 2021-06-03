<style>
.my-div h2{
    text-decoration: underline;
    width: 500px;
    margin: auto;
    font-size: 24px;
    margin-bottom: 5px;
    text-align: center;
}
.my-div h3{
    text-align: center;
    font-size: 21px;
    background: orangered;
    width: fit-content;
    color: #fff;
    padding: 5px 0px;
    width: max-content;
    margin: auto;
    margin-bottom: 9px;
}
.my-div h4{
   
 
    font-size: 16px;
    background: orangered;
    width: fit-content;
    color: #fff;
    padding: 5px 0px;
   
}
.my-div p{
    max-width: 100%;
    background-color: #3d3d3d;
    color: white;
    font-size: 20px;
    text-align: justify;
    padding: 16px;
}
p.collect {
    background: green;
}
li a i {
    margin-top: 10px;
}

img.story_img {
    width: 90%;
}
.col-8.text {
    padding: 0px 3px;
    margin-top: 25px;
    font-size: 20px;
 
}
h3.heading a{
    transition: all 0.3s;
    font-size: 25px;
   color: #1e90ff !important;
}
h3.heading a:hover{
    color: #333 !important;
   
}
.text a:hover{
    text-decoration: none;
}
p.desc {
    font-weight: 500;
    padding-right: 26px;
    padding: 0px -2px;
    color: #666;
    font-size: 19px;
    letter-spacing: 0.5px;

}
div  .story_img{
  border: 3px solid #e7e7e7;
  display: block;
  /* height: 350px;
  overflow: hidden; */
  transition: border 0.3s;
}
div  .story_img:hover{
    border: 3px solid #1e90ff;
}
span i {
    color: #1e90ff;
    margin-right: 1px;
}
.col-10 {
    margin-top: 4px;
}
a.read-more {
   
    color: #fff;
    background-color: #333333;
    font-size: 12px;
    text-transform: capitalize;
    padding: 3px 8px;
    border-radius: 2px;
    transition: all 0.3s;
}
a.read-more:hover{
    color: orangered;
}
</style>
<?php

include("header.php");

?>

<section>
    <h2 class="heading">Islamic Short Life story</h2>
    <div class="row">
       <div class="col-2">
          
            <div class="sidebar">
                <ul id="mydiv">
                    
                   <li>
                    <a href="islamic_story.php" class="btnsName activeClass">ইসলামিক গল্প <img src="./images/new_icon_2.png" alt="icon.jpg"></a> </li>
                    <li><a href="hazrot_muhammud(s).php" class="btnsName ">হজরত মুহাম্মাদ (সা:)</a></li>
                    <li><a href="abu-bakor(R).php" class="btnsName ">হযরত আবু বকর (রাঃ)</a></li>
                    <li><a href="hazrot-umor(R).php" class="btnsName ">হযরত উমর (রাঃ)</a></li>
                    <li><a href="hazrot-usman(R).php" class="btnsName ">হযরত উসমান (রাঃ)</a></li>
                    <li><a href="hazrot-ali(R).php" class="btnsName ">হযরত আলী (রাঃ)</a>
                   </li>

                </ul>

            </div>


        </div> 
        <div class="col-10">
<?php

include("./admin/config/connect.php");



$query = "SELECT *  FROM story
ORDER BY story_id DESC ";


$result = mysqli_query($connect, $query) or die("Failed");
$count = mysqli_num_rows($result);



if ($count > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

?>


        <div style="margin-bottom: 50px;" class="row">
      
                <div class="col-4 img">
                <a href="single.php?id=<?php echo $row['story_id'] ?>">
                <img class="story_img" width="auto" src="./admin/upload/photos/<?php echo $row['story_img'] ?>" alt="pic.png">
                </a>
                </div>
                <div class="col-8 text">
                <h3 class="heading"><a href='single.php?id=<?php echo $row['story_id'] ?>'><?php echo $row['title'] ?></a></h3>


                
<span>
            
<i class="far fa-calendar-plus"></i> <?php echo $row['story_date'] ?>
                   
                </span>
                <p class="desc">
                <?php echo substr($row['description'], 0, 650) . "...." ?>
                </p>
                <a class='read-more' href='single.php?id=<?php echo $row['story_id'] ?>'>read more</a>
                </div>
        </div>



        <?php
                        }
                    } else {
                        echo "No record here";
                    }
                    ?>





  </div>    






</div>

</section>
<?php

include("foot.php");
?>

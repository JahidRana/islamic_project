<style>
 .post-content.single-post {
    background-color: #fff !important;
    box-shadow: 0 1px 3px rgb(0 0 0 / 25%);
    padding: 22px;
    /* margin: auto; */
    margin: 20px 0px;
    margin-top: 47px 0px;
}
#main-content .single-post h3 {
    color: #1e90ff;
}

#main-content .post-content h3 {
    font-size: 29px;
 
    font-weight: 600;
 
    margin: 10px 0px;
}
#main-content .post-content .post-information span {
    color: #606060;
    font-size: 12px;
    text-transform: capitalize;
    margin: 0 5px 5px 0;
    display: inline-block;
}
#main-content .single-post p {
    text-align: justify;
}
#main-content .post-content p, #main-content .single-post p {
    margin-top: 30px !important;
    color: #666;
    font-size: 17px;
    letter-spacing: 0.5px;
    margin: 0 0 10px;
}
</style>

<?php

include("header.php");

?>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- post-container -->
                <?php


include("./admin/config/connect.php");

$post_id = $_GET['id'];

$query = "SELECT *  FROM story
ORDER BY story_id DESC ";
               
               

  $query = "SELECT * FROM story 
    
    WHERE story_id = $post_id ";


                $result = mysqli_query($connect, $query) or die("Failed");
                $count = mysqli_num_rows($result);



                if ($count > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>





                        <div class="post-container">
                            <div class="post-content single-post">
                                <h3><?php echo $row['title'] ?></h3>
                                <div class="post-information">


                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?php echo $row['story_date'] ?>
                                    </span>
                                </div>
                                <img height="450px" width="auto" class="single-feature-image" src="./admin/upload/photos/<?php echo $row['story_img'] ?>" alt="" />
                                <p class="description">
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo "No record here";
                }
                ?>

                <!-- /post-container -->
            </div>
          
        </div>
    </div>
</div>

<?php

include("foot.php");
?>

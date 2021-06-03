<?php

include("header.php");

?>

<section>
    <h2 class="heading">Bangla Waz Mp3 Download</h2>
    <div class="row">
        <div class="col-2">
            <!-- sidebar start here -->
            <div class="sidebar">
            <ul id="mydiv">
            <li>
                    <a href="mp3waz.php" class="btnsName ">New Waz <img src="./images/new_icon_2.png" alt="icon.jpg"></a> </li>
                    <li><a href="Delwar_hossain_saydee.php" class="btnsName ">Delwar Hossain Sayeedi</a></li>
                    <li><a href="mizanur-rahman-azhari.php" class="btnsName activeClass">Mizanur Rahman Azhari</a></li>
                    <li><a href="amir-hamza.php" class="btnsName">Amir Hamza</a></li>
                    <li><a href="bojlur-roshid.php" class="btnsName">Bozlur Rashid</a></li>
                    <li><a href="tareq-monowar.php" class="btnsName">Tareq Monowar</a></li>
                    <li><a href="hafizur-rahman.php" class="btnsName">Hafizur Rahman Siddiki</a></li>
                    <li><a href="golam-rabbani.php" class="btnsName">Golam Robbani</a></li>
                    <li><a href="abdul-khalek.php" class="btnsName">Abdul Khalek Soriotpuri</a></li>
                </ul>
            </div>


        </div>

<div class="col-10">

<?php 
    
    require_once("./admin/config/connect.php");
  
           
        $query = "SELECT * FROM post where bokta_name='Mizanur Rahman Azhari'
        ORDER BY post.post_id DESC";

    $result = mysqli_query($connect,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

    
    
    ?>





<table class="table table-striped table-dark table-hover myclass">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Waz Title</th>
          
            <th scope="col">Download</th>
        </tr>
    </thead>
    <tbody>

    <?php 
       $serial_no = 1;
       while($row = mysqli_fetch_assoc($result)){

          

       
       ?>


        <tr>
            <th scope="row"><?php echo $serial_no++ ?></th>
            <td><?php echo $row['title'] ?></td>
           

            <td><a href="./admin/upload/<?php echo $row['post_waz'] ?>" download="<?php echo $row['title'] ?>"><i class="fas fa-download"></i></a></td>
        </tr>


        <?php } ?>

       
    </tbody>
    <?php } ?>
</table>



</div>






</div>

<?php

include("foot.php");
?>













<?php

include("header.php");

?>

<section>
    <h2 class="heading">Al Quran PDF With Bangla Translation</h2>
    <div class="row">
       <div class="col-2">
          
            <div class="sidebar">
                <ul id="mydiv">

                    <li><a href="al_quran.php" class="btnsName ">আল কুরআন বাংলা অনুবাদ</a></li>
                    <li><a href="al_hadis.php" class="btnsName activeClass">আল-হাদিস</a></li>
              
                </ul>

            </div>


        </div> 
        <div class="col-10">
<?php 
    
    require_once("./admin/config/connect.php");
  
           
        $query = "SELECT * FROM hadish ORDER BY hadish_id ASC";

    $result = mysqli_query($connect,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

    
    
    ?>
       
 

<table class="table table-striped table-dark table-hover myclass">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pdf Title</th>
            <th scope="col">Pdf Size</th>
          
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
            <td><?php echo $row['size'] ?> MB</td>

            <td><a href="./admin/upload/hadish/<?php echo $row['hadish_name'] ?>" download="<?php echo $row['title'] ?>"><i class="fas fa-download"></i></a></td>
        </tr>
        <?php } ?>
        
    </tbody>
    <?php } ?>
</table>



</div>






</div>

</section>
<?php

include("foot.php");
?>


<?php

include("header.php");

?>

<section>
    <h2 class="heading">All Sura mp3 Download</h2>
    <div class="row">
       <div class="col-2">
          
            <div class="sidebar">
                <ul id="mydiv">
                    <li><a href="#" class="btnsName activeClass">All Sura</a></li>
              
                </ul>

            </div>


        </div> 
        <div class="col-10">

        <?php 
    
    require_once("./admin/config/connect.php");
  
           
        $query = "SELECT * FROM sura ORDER BY id ASC";

    $result = mysqli_query($connect,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

    
    
    ?>

 

<table class="table table-striped table-dark table-hover myclass">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sura Title</th>
          
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
     

            <td><a href="./admin/upload/sura/<?php echo $row['sura_name'] ?>" download="<?php echo $row['sura_name'] ?>"><i class="fas fa-download"></i></a></td>
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



<?php include "header.php"; ?>


  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All New Waz</h1>
                 
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-new-waz.php">add new Wazz</a>
               
              </div>
              <div class="col-md-12">

     <?php 
    
    require_once("./config/connect.php");
    $limit = 10;  
    if(isset($_REQUEST['page'])){
        $page_number = $_REQUEST['page'];
    }else{
        $page_number = 1;
    } 
    
    $offset = ($page_number-1) * $limit;
   
       
        $query = "SELECT * FROM new_waz 
        ORDER BY new_waz.id DESC LIMIT {$offset},{$limit}";
    

    $result = mysqli_query($connect,$query) or die("Failed");
    $count = mysqli_num_rows($result);

    if($count > 0){

    
    
    ?>

                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Waz Title</th>
                        
                          <th>Bokta Name</th>
                          <th>Upload Time</th>
                          <!-- <th>Edit</th> -->
                          <th>Delete</th>
                      </thead>
                      <tbody>

       <?php 
       $serial_no = 1;
       while($row = mysqli_fetch_assoc($result)){

          

       
       ?>

                          <tr>
                              <td class='id'><?php echo $serial_no++ ?></td>
                           
                              <td><?php echo $row['title'] ?></td>
                              <td><?php echo $row['bokta_name'] ?></td>
                              <td><?php echo $row['upload_times'] ?></td>
                            
                           
                              <td class='delete'><a onclick="return confirm('Are you sure?')" href='delete_new_waz.php?id=<?php echo $row['id'] ?>'><i class='fa fa-trash'></i></a></td>
                             </tr>
        <?php } ?>
                          
                      </tbody>
    <?php } ?>
                  </table>
<?php

    require_once("./config/connect.php");
    $query2 = "SELECT * FROM new_waz";
    $result2 = mysqli_query($connect,$query2);
    if(mysqli_num_rows($result2)){
    $total_record = mysqli_num_rows($result2);
    $total_page =  ceil($total_record/$limit);


    echo  "<ul class='pagination admin-pagination'>";
    if( $page_number > 1){

        // $count1 = $page_number-1;
        echo '<li ><a href="new-waz.php?page='.($page_number-1).'">Prev</a></li>';
    }

    for($i = 1; $i<=$total_page; $i++){

        if($i==$page_number){
            $active = "active";
        }else{
            $active = "";
        }
        echo "<li class='$active'><a href='new-waz.php?page=$i'>$i </a></li>";

    }
    if( $total_page > $page_number){
        $count2 = $page_number+1;
        echo "<li ><a href='new-waz.php?page=$count2'>Next</a></li>";

    }

    echo "</ul>";
    }

?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
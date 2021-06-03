<?php 
require_once("header.php");
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">

   <?php

if(isset($_REQUEST['sumbit'])){

  require_once("./config/connect.php");

  $category_id = $_REQUEST['id'];
  $category_name = $_REQUEST['cat_name'];

  $update_category = "UPDATE category SET category_name ='$category_name' WHERE category_id = $category_id";

  $result = mysqli_query($connect,$update_category);

  if($result==true){
    header("location: category.php");
}

}
  
   ?>           


                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
    <?php
    require_once("./config/connect.php");
    $category_id = $_REQUEST['id'];
  
    $target_query = "SELECT * FROM category WHERE category_id = {$category_id}";
    $run_query = mysqli_query($connect,$target_query);

   
    while($rows = mysqli_fetch_assoc($run_query)){
      
        $category_name = $rows['category_name'];
  
      

   
    ?>

                          <input type="text" name="cat_name" class="form-control" value="<?php echo $category_name; ?>"  placeholder="" required>
                      </div>
     <?php } ?>                 
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
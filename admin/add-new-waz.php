<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Waz</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save_new-waz.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                    
                      </div>

                      



                     
                      <div class="form-group">
                          <label>Bokta Name</label>
                          <input type="text" name="boktaName" class="form-control" required>
                    
                      </div>


                      <div class="form-group">
                          <label for="exampleInputPassword1">Add New Waz</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
                  
                  
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
<style>

.active{
    background-color: red;
}

</style>
<?php include "header.php";
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">

                <?php

                require_once("./config/connect.php");
                $limit = 5;
                if (isset($_REQUEST['page'])) {
                    $page_number = $_REQUEST['page'];
                } else {
                    $page_number = 1;
                }

                $offset = ($page_number - 1) * $limit;
                $select = "SELECT * FROM category ORDER BY category_id  DESC LIMIT {$offset},{$limit}";
                
                $sql = mysqli_query($connect, $select);

                $count = mysqli_num_rows($sql);

             
                if ($count > 0) {
                ?>

                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Category Name</th>
                            <th>No. of Posts</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>

                        <tbody>
                            <?php
                         
                         $serial_No = 1;
                            while ($row = mysqli_fetch_assoc($sql)) { ?>
                                     
                                <tr>
                                    <td><?php echo $serial_No++ ?></td>
                                    <td><?php echo $row['category_name'] ?></td>
                                    <td><?php echo $row['post'] ?></td>
                                    <td class='edit'><a href='update-category.php?id=<?php echo $row['category_id'] ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a onclick="return confirm('Are you Sure?')" href='delete-category.php?id=<?php echo $row['category_id'] ?>'><i class='fa fa-trash'></i></a></td>
                                </tr>
                            <?php }
                        
                            ?>

     

                        </tbody>

                    <?php } ?>
                    </table>
                    <?php

                    require_once("./config/connect.php");
                    $query2 = "SELECT * FROM category";
                    $result2 = mysqli_query($connect, $query2);
                    if (mysqli_num_rows($result2)) {
                        $total_record = mysqli_num_rows($result2);
                        $total_page =  ceil($total_record / $limit);


                        echo  "<ul class='pagination admin-pagination'>";
                        if ($page_number > 1) {

                            // $count1 = $page_number-1;
                            echo '<li ><a href="category.php?page=' . ($page_number - 1) . '">Prev</a></li>';
                        }

                        for ($i = 1; $i <= $total_page; $i++) {

                            if ($i == $page_number) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo "<li class='$active'><a href='category.php?page=$i'>$i </a></li>";
                        }
                        if ($total_page > $page_number) {
                            $count2 = $page_number + 1;
                            echo "<li ><a href='category.php?page=$count2'>Next</a></li>";
                        }

                        echo "</ul>";
                    }



                    ?>

                    <!-- <li class="active"><a>1</a></li> -->



            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
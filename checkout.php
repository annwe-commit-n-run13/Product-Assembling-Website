<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category Page</h1>

        <br>

        <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                // delete category
                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
                // no-category-found from update category
                if(isset($_SESSION['no-category-found']))
                {
                    echo $_SESSION['no-category-found'];
                    unset($_SESSION['no-category-found']);
                }
                // update category
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }

                // upload category
                // update category
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }

                if(isset($_SESSION['failed-remove']))
                {
                    echo $_SESSION['failed-remove'];
                    unset($_SESSION['failed-remove']);
                }
           ?>

<br><br>

        <!-- button to add category-->
           <a href="add-category.php" class="button-add-admin">Add Category</a>
           <br><br><br>


           <table class="table-manage-admin">
            <tr>
                <th>Serial No.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM table_category";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                //create sn variable 
                $sn = 1;

                // check whether we have data in database or not
                if($count > 0)
                {
                    // check whether there is data in the database
                    // get the data and display
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                        ?>

                        <tr>
                            <td><?php echo $sn++; ?>.</td>
                            <td><?php echo $title; ?></td>

                            <td>
                                <?php 
                                    // check whether image name is available or not
                                    if ($image_name!= "")
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>"width = 150px style="border-radius: 10px; box-shadow: -4px 4px 10px rgba(0, 0, 0, 0.2);">

                                        <?php
                                    }
                                    else 
                                    {
                                        echo "<div class='error'>Image Not Added.</div>";
                                    }
                                ?>
                            </td>

                            <td><?php echo $featured; ?></td>
                            <td><?php echo $active; ?></td>
                            <td>
                                <a href = "<?php echo SITEURL; ?>update-category.php?id=<?php echo $id; ?>" class="update-admin-button">Update Category</a> 
                                <a href = "<?php echo SITEURL; ?>delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="delete-admin-button">Delete Category</a>
                            </td>
                        </tr>

                        <?php
                    }
                }
                else
                {
                    // we do not data 
                    // we will show thw result in a table
                    
                    ?>
                    <tr>
                        <td colspan = "6">
                            <div class="error">No Category Added.</div>
                        </td>
                    </tr>
                    <?php
                }

                ?>
            
            
           </table>

    </div>
    
</div>


<?php include('partials/footer.php'); ?>

<?php include('partials-front/menu.php'); ?>



<!-- category section starts here -->

<section class="categories">
        <div class="container">
            <h1 class="text-center categories orange">Explore Products Under Categories</h1>

            <?php
                // display all the categories that are active
                // sql query
                $sql = "SELECT * FROM table_category WHERE active='Yes'";
                // execute the query
                $res = mysqli_query($conn, $sql);
                // count the rows
                $count = mysqli_num_rows($res);

                // check whether categories available or not
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        // get the values like title, image_name and id
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>

                        <a href="<?php echo SITEURL; ?>categories-products.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php
                                if($image_name=="")
                                {
                                    echo "<div class='success-message-delete'>Image not available</div>";
                                }
                                else 
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="processor" class="image-responsive-box image-curve">
                                    <?php
                                }

                                ?>

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else 
                {
                    // categories not available
                    echo "<div class='success-message-delete'>Category Not Added</div>";
                }

            ?>

            


            <div class="clearfix"></div>

        </div>
</section>

<!-- categories section ends here -->

<?php include('partials-front/footer.php'); ?>
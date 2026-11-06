<!-- Index front end -->

<?php include('partials-front/menu.php'); ?>

    <!-- product-search section starts here -->

    <section class="product-search">
        <div class="container">
            <div class="left-side">
                <img src="images/empty-streaming-room-with-professional-powerful-computer-rgb-keyboard-mouse-headphones-microphone.jpg" alt="Background Image" class="background-img">
            </div>
            <div class="right-side">
                <h1>Your PC, Your Way</h1>
                <p>Why settle for off-the-shelf when you can build a PC that’s truly yours? Select your favorite components, adjust to your preferences, and let us bring your personalized setup to your doorstep.</p>
                <p>From processors to peripherals, handpick every part of your PC and watch your build come to life with us.</p>
            </div>
            <!-- learn more button -->
            <a href="about.php" class="learn-more-button">Learn More</a> 

        </div>  

        </div>
    </section>

            <!-- <form action="">
                <input type="search" name = "search" placeholder="Search For Product..">
                <input type="submit" name = "submit" value = "Search">
            </form> -->
            
        
    <!-- product-search section ends here -->

    <!-- directing to about page starts here-->

<!-- product-search section starts here -->
<section class="product-search">
    <div class="container">
        <div class="left-side">
            <h1>Craft Your Dream Setup</h1>
            <p>From processors to peripherals, find everything you need to build a PC that matches your unique vision. Whether you're a gamer, creator, or professional, we've got the tools to bring your vision to life.</p>
            
            <div class="search-container">
                <button class="button">Search Products</button>
                <form action="<?php echo SITEURL; ?>product-search.php" method="POST" class="search-form">
                    <input type="search" name="search" placeholder="Search For Product..">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
        <div class="right-side">
            <img src="images/home-bg2.jpg" class="background-img">
        </div>
    </div>
</section>
<!-- product-search section ends here -->


<!-- directing to about page ends here -->



    <!-- categories section starts here -->

    <section class="categories">
        <div class="container">
            <h1 class="text-center categories">Categories</h1>
            
            <?php

            // create sql quwery to display categories from database
            $sql = "SELECT * FROM table_category WHERE active='Yes' AND featured='Yes' ";
            // execute the query
            $res = mysqli_query($conn, $sql);
            // count the rows
            $count = mysqli_num_rows($res);
            // check whether 
            if($count>0)
            {
                // categories available
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
                                // display message
                                echo "<div class='success-message-delete'>Image not available</div>";
                            }
                            else 
                            {
                                // image available
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



    <!-- product-menu section starts here -->

    <section class="product-menu">
        <div class="container">
            <h1 class="text-center">Explore Products</h1>

            <?php
            // getting products from the database that are active and featured
            $sql2 = "SELECT * FROM table_products WHERE active='Yes' AND featured='Yes' LIMIT 6";
            // execute
            $res2 = mysqli_query($conn, $sql2);
            // count the rows
            $count2 = mysqli_num_rows($res2);

            if($count2>0)
            {
                // product available
                while($row=mysqli_fetch_assoc($res2))
                {
                    // get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="product-menu-box">
                        <div class="product-menu-img">
                            <?php
                            //  check if image available
                            if($image_name=="")
                            {
                                // display message
                                echo "<div class='success-message-delete'>Image not available</div>";
                            }
                            else 
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/product/<?php echo $image_name; ?>" alt="Graphics Card" class="image-responsive-box">
                                <?php
                            }

                            ?>
                            
                        </div>

                        <div class="product-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="product-price">$<?php echo $price; ?></p>
                            <p class="product-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>add-to-cart.php?id=<?php echo $id; ?>" class="order-button">Add to Cart</a>

                        </div>

                        <div class="clearfix"></div>
                
                    </div>

                    <?php

                }
            }
            else 
            {
                echo "<div class = 'success-message-delete'>Product Not Available</div>";
            }


            ?>




            <div class="clearfix"></div>

        </div>

        <p class="text-center">
            <a href="products-front.php" class="see-all">See All Products</a>
        </p>
    </section>

    <!-- product-menu section ends here -->



<?php include('partials-front/footer.php'); ?>
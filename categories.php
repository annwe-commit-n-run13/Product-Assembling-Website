<?php include('partials-front/menu.php');  ?>

<?php
    // check whether id is passed or not
    if(isset($_GET['category_id']))
    {
        // category id is set and get the id
        $category_id = $_GET['category_id'];

        // get the category title based on category id
        $sql = "SELECT title FROM  table_category WHERE id=$category_id";

        // execute the query 
        $res = mysqli_query($conn, $sql);

        // get the value from database
        $row=mysqli_fetch_assoc($res);
        // get the category title
        $category_title = $row['title'];
    }
    else 
    {
        // redirect to home page 
        header('location:'.SITEURL);
    }
?>

<section class="product-search">
    <div class="container">

    <h2>Products under the Category <a href="#" class="search-text">"<?php echo $category_title; ?>"</a></h2>

</div>
</section>





<section class="product-menu">
    <div class="container">
        <h1 class="text-center">Products</h1>

        <?php
        // create sql query to get products based on the selected category 
        $sql2 = "SELECT * FROM table_products WHERE category_id=$category_id";

        // execute the query 
        $res2 = mysqli_query($conn, $sql2);

        // count the rows
        $count2 = mysqli_num_rows($res2);

        // check whether product is available or not
        if($count2>0)
        {
            // product is available
            while($row2=mysqli_fetch_assoc($res2))
            {
                $id = $row2['id'];
                $title = $row2['title'];
                $price = $row2['price'];
                $description = $row2['description'];
                $image_name = $row2['image_name'];
                ?>




                    <div class="product-menu-box">
                        <div class="product-menu-img">
                            <?php
                                // check whether image name is available or not
                                if($image_name=="")
                                {
                                    echo "<div class = 'success-message-delete'>Image Not Available</div>";
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
            // product not available
            echo "<div class='success-message-delete'>Product Not Available</div>";
        }
        ?>

        <div class="clearfix"></div>

    </div>  
</section>


<?php include('partials-front/footer.php'); ?>
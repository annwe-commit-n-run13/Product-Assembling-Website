<?php include('partials-front/menu.php'); ?>

<?php
    // check whether the id is set or not
    if(isset($_GET['product_id']))
    {
        $product_id = $_GET['product_id'];
    }
    else 
    {
        // redirect to home page 
        header('location:'.SITEURL);
    }

?>

<section class="product-search">
    <div class="container">
        <h1>Fill This Form To Confirm your Order.</h1>

        <form action="#">
            <fieldset>
                <legend>Selected Product</legend>

                <div class="product-menu-img">
                    <img src="" alt="">
                </div>

                <div class="product-menu-desc">
                    <h2>Product Title</h2>
                    <p class="product-price">$10</p>
                
                    <div class="oder-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>

            </fieldset>

            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="Eg. Faye Malisorn" class="input-responsive" required>

                <div class="order-label">Contact Number</div>
                <input type="tel" name="contact" placeholder="Eg. 9176xxxxxx" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="Eg. abc@gmail.com" class="input-responsive" required>

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="Eg. Street, City, Country" class="input-responsive" required></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="order-button">
            </fieldset>
        </form>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>
<?php
session_start();
include('partials-front/menu.php');
?>

<section class="cart">
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $key => $product) {
        ?>
                <div class="cart-item">
                    <!-- Display Product Image -->
                    <div class="cart-item-image">
                        <img src="<?php echo SITEURL; ?>images/product/<?php echo $product['image_name']; ?>" alt="<?php echo $product['title']; ?>" style="width:100px;height:auto;">
                    </div>

                    <!-- Product Details -->
                    <h4><?php echo $product['title']; ?></h4>
                    <p>Price: $<?php echo $product['price']; ?></p>
                    <p>Quantity: <?php echo $product['quantity']; ?></p>

                    <!-- Remove Link -->
                    <a href="remove-from-cart.php?id=<?php echo $product['id']; ?>" class="remove">Remove</a>
                </div>
                <hr>
        <?php
            }
        ?>
            <!-- Checkout Button -->
            <a href="checkout.php" class="checkout-button">Proceed to Checkout</a>
        <?php
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>

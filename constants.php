<?php
session_start();
include('partials-front/menu.php');
?>

<section class="checkout">
    <div class="container">
        <h1>Checkout</h1>
        <p>Your assembled product will be delivered soon. Thank you for shopping with us!</p>
        <?php
        // Clear the cart
        unset($_SESSION['cart']);
        ?>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>

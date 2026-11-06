<?php include('config/constants.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craft My Tech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin_style.css">
    

</head>
<body>
    <!-- navbar section starts here -->

    <section class="navbar">
        <div class="container header">
            <div class="logo">
                <img src="images/logo.png" alt="Website Logo" class="image-responsive">
            </div>


            <div class="menu text-center">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>about.php">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>products-front.php">Products</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>

                    <li>
                        <?php
                        $cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                        ?>
                        <a href="<?php echo SITEURL; ?>cart.php" class="cart-button">
                            <img src="images/cart-icon.png" alt="Cart" class="cart-icon">  (<?php echo $cart_count; ?>)
                        </a>
                    </li>
                </ul>
            </div>



<!--  -->











            <div class="clearfix"></div>
        </div>
    </section>

    <!-- navbar section ends here -->
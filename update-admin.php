<?php include('config/constants.php');  ?>
<?php include('login-check.php');  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div>
<!--menu section starts here -->
        <header>
            <h1 class="heading_vintageEssence">Craft My Tech
            </h1>
        </header>
        <div class="admin-panel">
            <h2 class="admin-heading">Admin Panel</h2>
            <nav class="navbar">
                <ul>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="order.php">Order</a></li>

                    <li><a href="logout.php" class="logout-button">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
<!-- menu section ends here -->
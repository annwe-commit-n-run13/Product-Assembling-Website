<?php
session_start();
include('config/constants.php');

// Get product ID from URL
$id = $_GET['id'];

// Get product details from the database
$sql = "SELECT * FROM table_products WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$product = [
    'id' => $row['id'],
    'title' => $row['title'],
    'price' => $row['price'],
    'quantity' => 1,
    'image_name' => $row['image_name']
];

// Check if cart session exists
if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], 'id');

    // Check if product is already in the cart
    if (!in_array($id, $item_array_id)) {
        $_SESSION['cart'][] = $product;
    }
} else {
    $_SESSION['cart'][] = $product;
}

// Redirect to cart page
header('Location: ' . SITEURL . 'cart.php');
?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];

    $item = [
        'item_id' => $item_id,
        'item_name' => $item_name,
        'item_price' => $item_price,
        'quantity' => $quantity
    ];

    $_SESSION['cart'][] = $item;
    header('Location: cart.php');
    exit();
}
?>

<?php
include('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];

    if (isset($_POST['update'])) {
        // Update the quantity of the product
        $new_quantity = $_POST['quantity'];
        $sql = "UPDATE orders SET quantity = $new_quantity WHERE order_id = $order_id";
    } elseif (isset($_POST['remove'])) {
        // Remove the product from the cart
        $sql = "DELETE FROM orders WHERE order_id = $order_id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Cart updated";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Redirect back to the cart page
header("Location: cart.php");
exit;
?>

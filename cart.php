<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_quantity'])) {
        foreach ($_POST['quantities'] as $index => $quantity) {
            $_SESSION['cart'][$index]['quantity'] = $quantity;
        }
    } elseif (isset($_POST['remove_item'])) {
        $index_to_remove = $_POST['remove_item'];
        array_splice($_SESSION['cart'], $index_to_remove, 1);
    }
}

$total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Your Cart</h1>

<?php if (!empty($_SESSION['cart'])): ?>
    <form action="checkout.php" method="post">
        <table>
            <tr>
                <th>Item</th>
                <th>Item ID</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                    <td><?php echo htmlspecialchars($item['item_id']); ?></td>
                    <td><?php echo htmlspecialchars($item['item_price']); ?></td>
                    <td>
                        <input type="number" name="quantities[<?php echo $index; ?>]" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1">
                    </td>
                    <td><?php echo htmlspecialchars($item['item_price'] * $item['quantity']); ?></td>
                    <td>
                        <button type="submit" name="remove_item" value="<?php echo $index; ?>">Remove</button>
                    </td>
                </tr>
                <?php $total_price += $item['item_price'] * $item['quantity']; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Total Price</td>
                <td colspan="2"><?php echo htmlspecialchars($total_price); ?></td>
            </tr>
        </table>
        <button type="submit" name="update_quantity">Update Quantities</button>
        <button type="submit" name="checkout">Checkout</button>
    </form>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<p><a href="shopnow.php">Continue Shopping</a></p>

</body>
</html>

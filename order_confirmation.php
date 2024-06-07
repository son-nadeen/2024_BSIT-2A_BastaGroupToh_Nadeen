<?php
// order_confirmation.php
session_start();

if (!isset($_SESSION['receipt'])) {
    // Redirect to cart if there is no receipt
    header("Location: cart.php");
    exit();
}

$receipt = $_SESSION['receipt'];

// Clear the receipt from session after displaying it
unset($_SESSION['receipt']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Order Confirmation</h3>
                    <p class="mb-5 text-center">Your order has been placed successfully!</p>
                    <pre><?php echo htmlspecialchars($receipt); ?></pre>
                    <div class="text-center">
                        <a href="shopnow.php" class="btn btn-primary btn-lg pl-5 pr-5">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
session_start();
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
            <div class="col-lg-12 col-md-12 col-12 text-center">
                <h3 class="display-5 mb-2">Order Confirmation</h3>
                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-info text-center">
                        <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif; ?>
                <p class="mb-5">Your order has been placed successfully.</p>
                <a href="shopnow.php" class="btn btn-primary btn-lg">Continue Shopping</a>
            </div>
        </div>
    </div>
</section>

</body>
</html>

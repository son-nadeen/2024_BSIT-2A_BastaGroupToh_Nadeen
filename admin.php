<?php
include('config.php');

// Fetch data for cards
$customer_count = $conn->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$inventory_count = $conn->query("SELECT SUM(stock) AS count FROM items")->fetch_assoc()['count'];
$order_count = $conn->query("SELECT COUNT(*) AS count FROM orders")->fetch_assoc()['count'];
$total_income = $conn->query("SELECT SUM(total_price) AS total FROM orders WHERE status='Completed'")->fetch_assoc()['total'];

// Fetch recent orders
$recent_orders = $conn->query("SELECT orders.id, item_name AS item_name, quantity, orders.price, orders.status FROM orders JOIN products ON orders.orders_id = products.id ORDER BY orders.id DESC LIMIT 6")->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin (1).css">
    <link rel="stylesheet" href="admin2.css">


</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand"> 
            <h1><span class=""></span> <span>Sann's Craft</span></h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="dashboard.php" class="active"><span class="las la-igloo"></span> <span>Dashboard</span></a></li>
                <li><a href="customer.php"><span class="las la-users"></span> <span>Customers</span></a></li>
                <li><a href="orders.php"><span class="las la-book"></span> <span>Orders</span></a></li>
                <li><a href="product.php"><span class="las la-shopping-bag"></span> <span>Product</span></a></li>
                <li><a href="inventory.php"><span class="las la-receipt"></span> <span>Inventory</span></a></li>
                <li><a href="accounts.php"><span class="las la-user-circle"></span> <span>Accounts</span></a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="user-wrapper">
                <img src="image/account.png" width="40px" height="40px" alt="me">
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php echo $customer_count; ?></h1>
                        <a href="customer.php"><span>Customers</span></a>
                    </div>
                    <div>
                        <h2><span class="las la-users"></span></h2>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $inventory_count; ?></h1>
                        <a href="inventory.php"><span>Inventory</span></a>
                    </div>
                    <div>
                        <h2><span class="las la-clipboard-list"></span></h2>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $order_count; ?></h1>
                        <a href="orders.php"><span>Orders</span></a>
                    </div>
                    <div>
                        <h2><span class="las la-shopping-bag"></span></h2>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>₱<?php echo number_format($total_income); ?></h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <h2><span class="lab la-google-wallet"></span></h2>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="Projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Orders</h3>
                            <a href="orders.php"><button>See all <span class="las la-arrow-right"></span></button></a>
                        </div>

                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>Quantity</td>
                                        <td>Total Price</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($recent_orders as $order): ?>
                                    <tr>
                                        <td><?php echo $order['item_name']; ?></td>
                                        <td><?php echo $order['quantity']; ?></td>
                                        <td>₱<?php echo number_format($order['price'], 2); ?></td>
                                        <td><span class="status <?php echo strtolower($order['status']); ?>"></span><?php echo $order['status']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

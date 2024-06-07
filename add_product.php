<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST["name"];
    $item_category = $_POST["category"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO items (item_name, item_category, price, stock) VALUES (?, ?, ?, ?)");
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sssd", $item_name, $item_category, $price, $stock);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "New product added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="add_product.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin2.css">
</head>
<body>
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

<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand"> 
        <h1><span class=""></span> <span>Sann's Craft</span> </h1>
    </div>

    <div class="sidebar-menu">
    <ul>
        <li>
            <a href="admin.html" class="active">
                <span class="las la-igloo"></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="customer.php">
                <span class="las la-users"></span>
                <span>Customers</span>
            </a>
        </li>
        <li>
            <a href="orders.php">
                <span class="las la-book"></span>
                <span>Orders</span>
            </a>
        </li>
        <li>
            <a href="product.php">
                <span class="las la-shopping-bag"></span>
                <span>Product</span>
            </a>
        </li>
        <li>
            <a href="inventory.php">
                <span class="las la-receipt"></span>
                <span>Inventory</span>
            </a>
        </li>
        <li>
            <a href="accounts.php">
                <span class="las la-user-circle"></span>
                <span>Accounts</span>
            </a>
        </li>
    </ul>
</div>

</div>

<main class="main"> 
    <h2>Add New Product</h2>
    <form action="add_product.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        <br>
        <input type="submit" value="Add Product">
    </form>
</main>

<?php include('footer.php'); ?>
</body>
</html>

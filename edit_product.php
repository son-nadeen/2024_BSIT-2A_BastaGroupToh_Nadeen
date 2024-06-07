
<?php include('config.php'); ?>

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

    <body>

        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand"> 
                <h1><span class=""></span> <span>Sann's Craft</span> 
                </h1>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="admin.html"class="active"><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="las la-users"></span>
                            <span>Customers</span></a>
                    </li>
                    <li>
                        <a href="orders.php"><span class="las la-book"></span>
                            <span>Orders</span></a>
                    </li>
                    <li>
                        <a href="product.php"><span class="las la-shopping-bag"></span>
                            <span>Product</span></a>
                    </li>
                    <li>
                        <a href="inventory.html"><span class="las la-receipt"></span>
                            <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href="accounts.html"><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                </ul>
            </div>
        </div>

<main>
    <h2>Edit Product</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['item_id'])) {
        $item_id = $_GET['item_id'];
        $sql = "SELECT * FROM items WHERE item_id = $item_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="edit_product.php" method="post">
                <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="item_name" value="<?php echo $row['item_name']; ?>" required>
                <br>
                <label for="category">Category</label>
                <textarea id="category" name="category" required><?php echo $row['item_category']; ?></textarea>
                <br>
                <label for="price">Price:</label>
                <input type="number" step="0.01" id="price" name="price" value="<?php echo $row['price']; ?>" required>
                <br>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" value="<?php echo $row['stock']; ?>" required>
                <br>
                <input type="submit" value="Update Product">
            </form>
            <?php
        } else {
            echo "Product not found";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $item_id = $_POST["item_id"];
        $item_name = $_POST["item_name"];
        $category = $_POST["item_category"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];

        $sql = "UPDATE items SET item_name='$item_name', category='$category', price='$price', stock='$stock' WHERE item_id=$item_id";

        if ($conn->query($sql) === TRUE) {
            echo "Product updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</main>

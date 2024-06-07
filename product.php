<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Sann's Craft | E-Commerce</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin2.css">
        <link rel="stylesheet" href="admin1.css">
        <link rel="stylesheet" href="account.css">
    </head>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #10a882;
        }
        .total-sum {
            background-color: #f2f2f2;
            font-weight: bold;
       }
    </style>
    <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>

                <form class="search-form" action="search.php" method="get">
            <input type="text" name="query" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <div class="header-actions">
        <div class="account-container">
          <button class="account-icon">
            <img src="image/account.png" alt="Account Icon">
            <p>Me</p>
        </div>
          </button>
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
                        <a href="dashboard.php"><span class="las la-igloo"></span>
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
                        <a href="product.php" class="active"><span class="las la-shopping-bag"></span>
                            <span>Product</span></a>
                    </li>

                        <a href="accounts.php"><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                </ul>
            </div>
        </div>
<main>
    <h2>Products</h2>
    <a href="add_product.php">Add New Product</a>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);

        if ($result === false) {
            echo "<tr><td colspan=''>Error:" . $conn->error . "</td></tr>";
        }else {
            if ($result->num_rows > 0){
        
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["item_id"]. "</td>
                        <td>" . $row["item_name"]. "</td>
                        <td>" . $row["price"]. "</td>
                        <td>" . $row["stock"]. "</td>
                        <td>" . $row["date_added"]. "</td>
                        <td>
                            <a href='edit_product.php?id=" . $row["item_id"] . "'>Edit</a>
                            <a href='delete_product.php?id=" . $row["item_id"] . "'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No products found</td></tr>";
        }
    }
        $conn->close();
        ?>
    </table>
</main>
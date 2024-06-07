<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage_orders.php">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage_products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="manage_customers.php">Customers</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Customers</h1>
                </div>

                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-info text-center">
                        <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif; ?>

                <?php
                // Fetch customers from the database
                $sql = "SELECT * FROM customers";
                $result = $conn->query($sql);

                if ($result === false) {
                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                } else {
                    if ($result->num_rows > 0) {
                        echo '<table class="table table-striped table-bordered">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>ID</th>';
                        echo '<th>Name</th>';
                        echo '<th>Email</th>';
                        echo '<th>Address</th>';
                        echo '<th>Actions</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['customer_id'] . '</td>';
                            echo '<td>' . $row['customer_name'] . '</td>';
                            echo '<td>' . $row['customer_email'] . '</td>';
                            echo '<td>' . $row['customer_address'] . '</td>';
                            echo '<td>';
                            echo '<a href="edit_customer.php?id=' . $row['customer_id'] . '" class="btn btn-primary btn-sm">Edit</a>';
                            echo ' ';
                            echo '<a href="delete_customer.php?id=' . $row['customer_id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this customer?\');">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo '<div class="alert alert-info">No customers found.</div>';
                    }
                }
                ?>
            </main>
        </div>
    </div>
</body>
</html>

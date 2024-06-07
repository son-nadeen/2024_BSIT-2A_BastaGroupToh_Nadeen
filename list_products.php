<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sann's Craft | E-Commerce</title>
</head>
<body>
    <h1>Products List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>
        <?php
        $sql = "SELECT id, name, description, price, created_at FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["price"]. "</td><td>" . $row["created_at"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
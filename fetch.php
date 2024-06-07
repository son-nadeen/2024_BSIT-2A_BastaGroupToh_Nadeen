<!DOCTYPE html>
<html>
<head>
  <title>Sann's Craft | E-Commercet</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<h2>Shopping List</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
  </tr>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bgt_sannscraft";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, name, description, price FROM items";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["item_id"] . "</td>";
      echo "<td>" . $row["item_name"] . "</td>";
      echo "<td>" . $row["product_information"] . "</td>";
      echo "<td>$" . number_format($row["price"], 2) . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>0 results</td></tr>";
  }
  $conn->close();
  ?>

</table>

</body>
</html>

<?php
session_start();
$search_results = isset($_SESSION['search_results']) ? $_SESSION['search_results'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="search.css">

<head>
    <meta charset="UTF-8">
    <title>Sann's Craft | E-Commerce</title>
</head>
<style>

/* search.css */

body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    background-image: url(image/bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 800px;
    margin-top: 20px;
}

h1 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.results-list {
    list-style: none;
    padding: 0;
}

.result-item {
    display: flex;
    align-items: center;
    background: #fafafa;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 10px;
    transition: background 0.3s;
}

.result-item:hover {
    background: #f0f0f0;
}

.product-image {
    border-radius: 8px;
    margin-right: 10px;
    width: 50px;
    height: 50px;
    object-fit: cover;
}

.product-details {
    display: flex;
    flex-direction: column;
}

.product-name {
    font-size: 16px;
    font-weight: bold;
    margin: 0;
}

.product-price {
    color: #888;
    margin: 5px 0 0;
}

</style>
<body>
<div class="container">
        <h1>Search Results</h1>
        <?php if (empty($search_results)): ?>
            <p>No results found.</p>
        <?php else: ?>
            <ul class="results-list">
                <?php foreach ($search_results as $product): ?>
                    <li class="result-item">
                    <img src="/Sann's Craft/image/<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['item_name']); ?>" class="product-image">

                        <div class="product-details">
                            <p class="product-name"><?php echo htmlspecialchars($product['item_name']); ?></p>
                            <p class="product-price">Price: Php<?php echo htmlspecialchars($product['price']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>


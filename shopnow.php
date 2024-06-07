<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sann's Craft | E-Commerce</title>
      <link rel="shortcut icon" href="image/sannscraft_logo2.jpg" type="image/svg+xml">
      <link rel="stylesheet" href="homepage.css">
      <link rel="stylesheet" href="account.css">
      <link rel="stylesheet" href="shopnow.css">
    </head>
  <body>
  <!-- 
    - #HEADER
  -->

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <form class="search-form" action="search.php" method="get">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>


      <a href="#" class="logo">
        <img src="image/sannscraft_logo.jpg" alt="Sann's Craft" width="130" height="31">
      </a>

      <div class="header-actions">
      <div class="account-container">
        <button class="account-icon">
            <img src="image/account.png" alt="Account Icon">
            <p>Account</p>
            <div class="dropdown-menu">
          <?php if (isset($_SESSION['user_id'])): ?>
          <div id="account">
            <a href="profile.php" class="dropdown-item">Me</a> 
            <a href="logout.php" class="dropdown-item">Log Out</a>
          </div>
          <?php else: ?>
                <a href="login.php" class="dropdown-item">Log In</a>
                <a href="signup.php" class="dropdown-item">Sign Up</a>
        </div>
        <?php endif; ?>
        </button>
    </div>

    <button class="header-action-btn">
        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        <p class="header-action-label">Search</p>
    </button>

    <button class="header-action-btn">
        <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
        <p onclick="location.href= 'cart.php'" class="header-action-label">Cart</p>
        <div class="btn-badge green" aria-hidden="true"></div>
    </button>
  </div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="image/sannscraft_logo.jpg" alt="Sann's Craft" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <script src="script.js"></script>

        <ul class="navbar-list">

          <li>
            <a href="homepage.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="shopnow.php" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="About_company.php" class="navbar-link">About</a>
          </li>

          <li>
            <a href="contact.php" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
    <main>
        <center><h1>Categories</h1></center>
        <ul class="product-list">

        <section class="categories">
            <div class="category">
                <img src="image/gem_anklet.jpg" alt="Anklet">
                <h2>Anklet</h2>
                <p>Elevate your ankle adornment with our exquisite handmade beaded anklets, crafted with passion and precision. Each piece is meticulously designed to add a touch of bohemian charm and elegance to any ensemble.</p>
                <a href="anklet.php">Shop Anklet</a>
            </div>
            <div class="category">
                <img src="image/Ben&Ben_inspired_bracelet.jpg" alt="Bracelets">
                <h2>Bracelets</h2>
                <p>Indulge in the artistry of handcrafted bracelets, where each piece tells a story of passion, creativity, and individuality. Our collection boasts an exquisite array of bracelets, meticulously crafted by skilled artisans to adorn your wrists with elegance and charm.</p>
                <a href="bracelets.php">Shop Bracelets</a>
            </div>
            <div class="category">
                <img src="image/flower_keychain.jpg" alt="Keychain">
                <h2>Keychain</h2>
                <p>Unlock a world of style and functionality with our handcrafted keychains, where practicality meets artisanal elegance. Each keychain in our collection is lovingly crafted by skilled artisans, transforming everyday essentials into exquisite accessories.</p>
                <a href="keychain.php">Shop Keychain</a>
            </div>
            <div class="category">
                <img src="image/white_necklace.jpg" alt="Necklace">
                <h2>Necklace</h2>
                <p>From delicate pendants to bold statement pieces, our necklaces feature a diverse range of styles, materials, and inspirations. Our skilled artisans meticulously handcraft each necklace using only the finest materials, including lustrous pearls, sparkling gemstones, and intricately woven metals, ensuring every piece is as unique as the wearer.</p>
                <a href="necklaces.php">Shop Necklaces</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sann's Craft | E-Commerce</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="image/sannscraft_logo2.jpg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="account.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

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
            <img src="image/sannscraft_logo2.jpg" alt="Sann's Craft" width="130" height="31">
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

  <body>
        <center><h1>BRACELETS</h1></center>
        

        <ul class="product-list">

        <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/Binhi_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="1">
            <input type="hidden" name="item_id" value="1234">
            <input type="hidden" name="item_name" value="Binhi Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/Binhi_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Binhi Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>

            

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/Ben&Ben_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="2">
            <input type="hidden" name="item_id" value="5678">
            <input type="hidden" name="item_name" value="Ben&Ben Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/Ben&Ben_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Ben&Ben Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>
              
              <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/coldplay_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3">
            <input type="hidden" name="item_id" value="91011">
            <input type="hidden" name="item_name" value="Coldplay Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/coldplay_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Coldplay Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>
    

            <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/DanielCaesar_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="4">
            <input type="hidden" name="item_id" value="1213">
            <input type="hidden" name="item_name" value="Daniel Caesar Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/DanielCaesar_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Daniel Caesar Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/sagada_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="5">
            <input type="hidden" name="item_id" value="1314">
            <input type="hidden" name="item_name" value="Sagada Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/sagada_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Sagada Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00/data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/TaylorSwift_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="6">
            <input type="hidden" name="item_id" value="1516">
            <input type="hidden" name="item_name" value="Taylor Swift Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/TaylorSwift_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Taylor Swift Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>
  
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/sza_inspired_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="7">
            <input type="hidden" name="item_id" value="1920">
            <input type="hidden" name="item_name" value="Sza Inspired Bracelet">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="image/sza_inspired_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Sza Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="image/Wave2Earth_bracelet.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8">
            <input type="hidden" name="item_id" value="2122">
            <input type="hidden" name="item_name" value="Wave 2 Earth Inspired Bracelet">
            <input type="hidden" name="item_price" value="100">
            <input type="hidden" name="image_url" value="image/Wave2Earth_bracelet.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Wave 2 Earth Inspired Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="100">₱100.00</data>
        </div>
      </div>
    </div>
  </li>

          </ul>

          <script>
            function toggleDropdown() {
                var dropdownMenu = document.getElementById('dropdownMenu');
                dropdownMenu.classList.toggle('show');
            }
    
            window.onclick = function(event) {
                if (!event.target.matches('.header-action-btn')) {
                    var dropdowns = document.getElementsByClassName('dropdown-menu');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>


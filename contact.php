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

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

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
        <div class="btn-badge green" aria-hidden="true">2</div>
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
            <a href="#home" class="navbar-link">Home</a>
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('image/bg1.jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: Arial, sans-serif;
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 18px;
}

.contact-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 5px 5px 10px 10px #00000033;
    width: 500px;
    margin-top: 20%;
}

.contact-container h2, .contact-container h3 {
    text-align: center;
}

.contact-container .form-group {
    position: relative;
    margin: 10px 0;
}

.contact-container .form-group input,
.contact-container .form-group textarea {
    width: 100%;
    padding: 10px 10px 10px 40px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.contact-container .form-group textarea {
    resize: none;
    height: 100px;
}

.contact-container .form-group .fa {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #cccccc;
}

.contact-container button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.contact-container button:hover {
    background-color: #45a049;
}

.contact-info, .store-locations, .customer-support {
    margin-top: 20px;
    padding: 10px;
    border-top: 1px solid #cccccc;
}

.contact-info p, .store-locations p, .customer-support p {
    margin: 10px 0;
}

.contact-info i, .store-locations i {
    margin-right: 10px;
}

.contact-info a {
    color: #333;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

</style>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <h2>Contact Us</h2>
        <form method="post" action="contact.php">
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <i class="fa fa-tag"></i>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <i class="fa fa-comment"></i>
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>

        <div class="contact-info">
            <h3>Other Ways to Contact Us</h3>
            <p><i class="fa fa-envelope"></i>sanns_craft@.com</p>
            <p><i class="fa fa-phone"></i> +63 992 000 0000</p>
            <p><i class="fa fa-facebook"></i> <a href="">Facebook</a></p>
            <p><i class="fa fa-instagram"></i> <a href="">Instagram</a></p>
        </div>

        <div class="customer-support">
            <h3>Customer Support</h3>
            <p>For immediate assistance, our customer support team is available via live chat on our website during business hours. Click the chat icon at the bottom right corner of the screen to start a conversation with our support team.</p>
        </div>
    </div>
</body>
</html>

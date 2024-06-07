<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header('Location: homepage.php');
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with this email";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sann's Craft | E-Commerce</title>
    <link rel="shortcut icon" href="image/sannscraft_logo2.jpg" type="image/svg+xml">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style> 

/* Centering the form */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background: url('image/bg1.jpg') no-repeat center center fixed;
    background-size: cover;
}

form {
    background-color: #ffffff;
    background: transparent;
    box-shadow: black;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px 10px #00000033;
    width: 300px;
}

.form-group {
    position: relative;
    margin: 10px 0;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px 10px 10px 40px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-group .fa {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #cccccc;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #b8860b;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form button:hover {
    background-color: #daa520;
}

h2 {
    text-align: center;
}
</style>
<body>
    <form method="post" action="login.php">
        <h2>Log In</h2>
        <div class="form-group">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Log In</button>
    </form>
</body>
</html>

<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Radiant Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            text-align: center;
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: white;
            overflow: hidden;
        }
        
        nav {
            float: right;
            margin: 20px;
        }
        
        nav a {
            color: black;
            text-decoration: none;
            margin: 0 20px;
        }
        
        nav a:hover {
            color: blue;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .section {
            padding: 20px;
            background-color: powderblue;
            margin: 10px;
            text-align: left;
        }
        
        .section h2 {
            margin-top: 0;
        }
        
        .section img {
            max-width: 100%;
            height: auto;
        }
        
        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        footer {
            background-color: white;
            padding: 10px 0;
        }
        
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Radiant Solutions</h1>
            <nav>
                <a href="tred.html">Home</a>
                <a href="contactpage.html">Contact Us</a>
                <a href="tred2.html">About Us</a>
                <a href="index.php">Login</a>
                <a href="signup_page.php">Volunteer</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>You are now logged in to Radiant Solutions.</p>
    </div>

    <div class="footer">
        <p>&copy; 2023. All rights reserved. Radiant Solutions</p>
    </div>
</body>
</html>

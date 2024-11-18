<?php

include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            text-align: center;
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
            margin: 0;
            padding: 0;
        }
        .h1{
            text-align: left;
        }
        input[type="text"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }
        #form {
            background-color: lightblue;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin: 0 auto; 
            margin-top: 50px; 
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
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
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

    <div id="form">
        <h1>Log In</h1>
        <form name="form" action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <input type="submit" id="btn" value="Log In" name="submit">
        </form>
    </div>
    
    <div class="footer">
        <p>&copy; 2023. All rights reserved. Radiant Solutions</p>
    </div>
<script>
  window.va = window.va || function () { (window.vaq = window.vaq || []).push(arguments); };
</script>
<script defer src="/_vercel/insights/script.js"></script>
</body>
</html>

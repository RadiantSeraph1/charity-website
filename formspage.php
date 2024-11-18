<?php 
    include("connection.php");
    include("signup_process.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-size: 16px;
            background-image: url('composition-still-life-friendship-day-elements.jpg');
            background-size: cover;
        }
        
        .navbar {
            background-color: white;
        }
        
        .navbar-nav .nav-link {
            color: black;
        }
        
        .navbar-nav .nav-link:hover {
            color: blue;
        }
        
        .section {
            padding: 40px;
            background-color: powderblue;
            margin: 20px;
            border-radius: 10px;
        }
        
        .section h2 {
            margin-top: 0;
        }
        
        .section img {
            max-width: 100%;
            height: auto;
        }
        
        .footer {
            background-color: white;
            padding: 20px 0;
            text-align: center;
        }

        #form {
            margin: 50px auto;
            padding: 20px;
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            text-align: center;
        }
        
        #form h1 {
            margin-bottom: 20px;
        }
        
        #form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        #form input[type="text"],
        #form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        #form input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #form input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="Project.html">Radiant Solutions</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="tred.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactpage.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formspage.php">Volunteer</a>
                        </li>
                    </ul>
                </div>
            </div>
        
    </nav>
    <br><br>

    <div id="form">
        <h1>Sign Up</h1>
        <form action="signup_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <input type="submit" id="btn" value="Sign up" name="submit">
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

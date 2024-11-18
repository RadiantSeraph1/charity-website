<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    // Check if passwords match
    if ($password === $confirmPassword) {
        $username = mysqli_real_escape_string($connection, $username);

        $queryUsers = "INSERT INTO users (username, phonenumber, password) VALUES ('$username', '$phonenumber', '$password')";
        $resultUsers = mysqli_query($connection, $queryUsers);

        if ($resultUsers) {
            // Insert into login table with username and password
            $queryLogin = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
            $resultLogin = mysqli_query($connection, $queryLogin);

            if ($resultLogin) {
                header("Location: welcome.php");
                exit();
            } else {
                echo "Error inserting into login table: " . mysqli_error($connection);
            }
        } else {
            echo "Error inserting into users table: " . mysqli_error($connection);
        }
    } else {
        echo "Passwords do not match. Please try again.";
    }
}

mysqli_close($connection);
?>
